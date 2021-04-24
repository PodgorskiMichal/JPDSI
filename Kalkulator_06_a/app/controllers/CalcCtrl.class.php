<?php

require_once 'CalcForm.class.php';
require_once 'CalcResult.class.php';



class CalcCtrl
{

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

    public function process()
    {
        $this -> getParams();

        if($this->validate())
        {
            $this->form-> kw = floatval($this->form->kw);
            $this->form-> ll = floatval($this->form->ll);

            getMessages()->addInfo('Parametry poprawne. Wykonuję obliczenia.');

            switch ($this->form-> op) {
                case '0' :
                    $this -> result -> result = $this->form-> kw / (12 * $this->form-> ll);
                    break;
                default :
                    $this -> result -> result = ($this->form-> kw / (12 * $this->form-> ll)) * (1 + ($this->form-> op / 100));
                    break;
        }
            getMessages()->addInfo('Wykonano obliczenia.');
    }
        $this->generateView();
}

public function generateView()
{
    getSmarty()->assign('page_title', 'Kalkulator kredytowy');
    getSmarty()->assign('page_description', 'Profesjonalne szablonowanie oparte na bibliotece Smarty');
    getSmarty()->assign('page_header', 'Szablony Smarty');
    getSmarty()->assign('hide_intro',$this->hide_intro);
    getSmarty()->assign('form',$this->form);
    getSmarty()->assign('res',$this->result);

    getSmarty()->display('CalcView.tpl');
}
}