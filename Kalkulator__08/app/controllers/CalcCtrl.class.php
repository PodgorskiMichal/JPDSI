<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

    private $form;
    private $result;
    private $hide_intro;

	public function __construct()
        {
            $this -> form = new CalcForm();
            $this -> result = new CalcResult();
            $this -> hide_intro = false;
        }

	public function getParams()
        {
            $this->form->kw = getFromRequest('kw');
            $this->form->ll = getFromRequest('ll');
            $this->form->op = getFromRequest('op');
        }

	public function validate()
    {
        if (!(isset($this->form->kw) && isset($this->form->ll) && isset($this->form->op)))
            {
                return false;
            }
        else
            {
                $this->hide_intro = true;
            }

        if ($this->form->kw == "")
            {
                getMessages()->addError('Nie podano kwoty');
            }
        if ($this->form->ll == "")
            {
                getMessages()->addError('Nie podano liczby lat');
            }

        if (! getMessages()->isError())
            {
                if (!is_numeric($this->form->kw))
                    {
                        getMessages()->addError('Pierwsza wartość nie jest liczbą') ;
                    }
                if (!is_numeric($this->form->ll))
                    {
                        getMessages()->addError('Druga wartość nie jest liczbą');
                    }
            }

        return ! getMessages()->isError();
	}


	public function action_calcCompute(){

		$this->getParams();

		if ($this->validate()) {

            $this->form-> kw = floatval($this->form->kw);
            $this->form-> ll = floatval($this->form->ll);

            getMessages()->addInfo('Parametry poprawne. Wykonuję obliczenia.');

            switch ($this->form-> op)
                {
                    case '0' :
                        if(inRole('admin'))
                        {
                            $this -> result -> result = round(($this->form-> kw / (12 * $this->form-> ll)),2);
                        }
                        else
                        {
                            getMessages()->addError('Tylko administrator moze wybrać zerowe oprocentowanie');
                        }
                        break;
                    default :
                        $this -> result -> result = round((($this->form-> kw / (12 * $this->form-> ll)) * (1 + ($this->form-> op / 100))),2);
                        break;
                }
            getMessages()->addInfo('Wykonano obliczenia.');
		}

        try
        {
            getDB()->insert("wyniki", [
                "kw" => $this->form->kw,
                "ll" => $this->form->ll,
                "op" => $this->form->op,
                "rata" => $this->result->result,
                "DATA" => date("Y-m-d H:i:s")
            ]);
        }
		catch (\PDOException $ex)
        {
            getMessages()->addError("DB Error: ".$ex->getMessage());
        }

        $this->generateView();
	}

    public function action_calcShow()
    {
        $this->generateView();
    }

	public function generateView(){

        getSmarty()->assign('user',unserialize($_SESSION['user']));

        getSmarty()->assign('page_title', 'Kalkulator kredytowy');

        getSmarty()->assign('hide_intro',$this->hide_intro);
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl');
	}
}
