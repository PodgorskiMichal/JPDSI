<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl
{
    private $msgs;
    private $form;
    private $result;
    private $hide_info;

    public function __construct()
    {
        $this -> msgs = new Messages();
        $this -> form = new CalcForm();
        $this -> result = new CalcResult();
        $this -> hide_intro = false;
    }

    public function getParams()
    {
        $this -> form -> kw = isset($_REQUEST['kw']) ? $_REQUEST['kw'] : null;
        $this -> form -> ll = isset($_REQUEST['ll']) ? $_REQUEST['ll'] : null;
        $this -> form -> op = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;
    }

    public function validate()
    {
        if (!(isset($this -> form -> kw) && isset($this -> form -> ll) && isset($this -> form -> op)))
        {
            return false;
        }
        else
        {
            $this -> $hide_intro = true;
        }


        if ($this -> form -> kw == "")
        {
            $this->msgs->addError('Nie podano kwoty');
        }
        if ($this -> form -> ll == "")
        {
            $this->msgs->addError('Nie podano liczby lat');
        }


        if (!$this->msgs->isError())
        {
            if (!is_numeric($this -> form -> kw))
            {
                $this->msgs->addError('Pierwsza wartość nie jest liczbą') ;
            }
            if (!is_numeric($this -> form -> ll))
            {
                $this->msgs->addError('Druga wartość nie jest liczbą');
            }
        }

        return ! $this->msgs->isError();
    }

    public function process()
    {
        $this -> getParams();

        if($this->validate())
        {
            $this->form-> kw = floatval($this->form-> kw);
            $this->form-> ll = floatval($this->form-> ll);
            $this -> msgs -> addInfo('Parametry poprawne. Wykonuję obliczenia.');

            switch ($this->form-> op) {
                case '0' :
                    $this -> result -> result = $this->form-> kw / (12 * $this->form-> ll);
                    break;
                default :
                    $this -> result -> result = ($this->form-> kw / (12 * $this->form-> ll)) * (1 + ($this->form-> op / 100));
                    break;
        }
            $this->msgs->addInfo('Wykonano obliczenia.');
    }
        $this->generateView();
}

public function generateView()
{
    global $conf;

    $smarty = new Smarty();
    $smarty->assign('conf',$conf);

    $smarty->assign('page_title', 'Kalkulator kredytowy');
    $smarty->assign('page_description', 'Profesjonalne szablonowanie oparte na bibliotece Smarty');
    $smarty->assign('page_header', 'Szablony Smarty');

    $smarty->assign('hide_intro',$this->hide_intro);

    $smarty->assign('msgs',$this->msgs);
    $smarty->assign('form',$this->form);
    $smarty->assign('res',$this->result);

    $smarty->display($conf ->root_path . '/app/CalcView.tpl');
}
}