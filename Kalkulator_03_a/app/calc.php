<?php

require_once dirname(__FILE__) . '/../config.php';

require_once _ROOT_PATH . '/lib/smarty/Smarty.class.php';

function getParams(&$form)
{
    $form['kw'] = isset($_REQUEST['kw']) ? $_REQUEST['kw'] : null;
    $form['ll'] = isset($_REQUEST['ll']) ? $_REQUEST['ll'] : null;
    $form['op'] = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;
}

function validate(&$form, &$infos, &$msgs, &$hide_intro)
{

    if (!(isset($form['kw']) && isset($form['ll']) && isset($form['op']))) return false;

    $hide_intro = true;

    $infos [] = 'Przekazano parametry.';

    if ($form['kw'] == "") $msgs [] = 'Nie podano liczby 1';
    if ($form['ll'] == "") $msgs [] = 'Nie podano liczby 2';

    if (count($msgs) == 0) {
        if (!is_numeric($form['kw'])) $msgs [] = 'Pierwsza wartość nie jest liczbą';
        if (!is_numeric($form['ll'])) $msgs [] = 'Druga wartość nie jest liczbą';
    }

    if (count($msgs) > 0) return false;
    else return true;
}

function process(&$form, &$infos, &$msgs, &$result)
{
    $infos [] = 'Parametry poprawne. Wykonuję obliczenia.';

    $form['kw'] = floatval($form['kw']);
    $form['ll'] = floatval($form['ll']);

    switch ($form['op']) {
        case '0' :
            $result = $form['kw'] / (12 * $form['ll']);
            break;
        default :
            $result = ($form['kw'] / (12 * $form['ll'])) * (1 + ($form['op'] / 100));
            break;
    }
}

$form = null;
$infos = array();
$messages = array();
$result = null;
$hide_intro = false;

getParams($form);
if (validate($form, $infos, $messages, $hide_intro)) {
    process($form, $infos, $messages, $result);
}

$smarty = new Smarty();

$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Kalkulator kredytowy');
$smarty->assign('page_description', 'Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header', 'Szablony Smarty');

$smarty->assign('hide_intro', $hide_intro);

$smarty->assign('form', $form);
$smarty->assign('result', $result);
$smarty->assign('messages', $messages);
$smarty->assign('infos', $infos);

$smarty->display(_ROOT_PATH . '/app/calc.tpl');