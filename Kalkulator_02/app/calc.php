<?php

require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

function getParams(&$kw, &$ll, &$op)
    {
        $kw = isset($_REQUEST ['kw']) ? $_REQUEST['kw'] : null;
        $ll = isset($_REQUEST ['ll']) ? $_REQUEST['ll'] : null;
        $op = isset($_REQUEST ['op']) ? $_REQUEST['op'] : null;
    }

function validate(&$kw, &$ll, &$op, &$messages)
    {

        if (!(isset($kw) && isset($ll) && isset($op)))
            {
                return false;
            }

        if ($kw == "")
            {
                $messages [] = 'Nie podano Kwoty';
            }
        if($kw < 1000)
            {
                $messages [] = 'Nie można zaciągnąć pożyczki poniżej 1000 zł';
            }
        if ($ll == "")
            {
                $messages [] = 'Nie określono ilości lat spłaty';
            }
        if($ll < 1)
            {
                $messages [] = 'Okres kredytowy nie może być krótszy niż rok';
            }

        if (count ($messages) != 0) return false;

        if (!is_numeric($kw))
            {
                $messages [] = 'Kwota nie jest liczbą całkowitą';
            }
        if (!is_numeric($ll))
            {
                $messages [] = 'Liczba lat nie jest liczbą całkowitą';
            }

        if (count ($messages) != 0) return false;
        else return true;

    }

function process(&$kw, &$ll, &$op, &$messages, &$result)
    {
        /*
            r - rok
            lm - liczba miesięcy
            ll - liczba lat
            kwm - kwota na miesiąc
            kw - kwota
            kwmop - kwota na miesiąc oprocentowana
        */
        global $role;

        $r = 12;
        $lm = $r * $ll;
        $kwm = $kw / $lm;
        $kwmop = $kwm * (1 + ($op / 100));

        $kw = floatval($kw);
        $ll = intval($ll);
        $op = intval($op);
        $result = floatval($result);

    switch ($op)
        {
            case '0':
                if($role == 'admin')
                {
                    $result = round($kwm, 2);
                    break;
                }
                else
                {
                    $messages [] = 'Tylko admin może wybrać oprocentowanie 0%';  break;
                }

            default:
                $result = round($kwmop, 2);
                break;
        }
    }

$kw = null;
$op = null;
$ll = null;
$result = null;
$messages = array();

getParams($kw, $ll, $op);

if(validate($kw, $ll, $op, $messages ))
{
    process($kw, $ll, $op, $messages, $result);
}

include 'calc_view.php';
