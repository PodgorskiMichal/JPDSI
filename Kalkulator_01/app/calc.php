<?php

require_once dirname(__FILE__).'/../config.php';

$kw = $_REQUEST ['kw'];
$ll = $_REQUEST ['ll'];
$op = $_REQUEST ['op'];

if ( ! (isset($kw) && isset($ll) && isset($op))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $kw == "") {
	$messages [] = 'Nie podano Kwoty';
}
if ( $op == "") {
	$messages [] = 'Nie podano Oprocentowania';
}
if ( $ll == "") {
	$messages [] = 'Nie określono ilości lat spłaty';
}


if (empty( $messages )) {

	if (! is_numeric( $kw )) {
		$messages [] = 'Kwota nie jest liczbą całkowitą';
	}

	if (! is_numeric( $op )) {
		$messages [] = 'Oprocentowanie nie jest liczbą całkowitą';
	}

	if (! is_numeric( $ll )) {
		$messages [] = 'Liczba rat nie jest liczbą całkowitą';
	}

}

if (empty ( $messages )) {
	/*
		r - rok
		lm - liczba miesięcy
		ll - liczba lat
		kwm - kwota na miesiąc
		kw - kwota
		kwmop - kwota na miesiąc oprocentowana
	*/

	$r = 12;
	$lm = $r * $ll;
	$kwm = $kw / $lm;
	$kwmop = $kwm * (1+($op/100));

	$kw = floatval($kw);
	$kwm = floatval($kwm);
	$kwmop = floatval($kwmop);
	$op = floatval($op);
	$r = intval($r);
	$lm = intval($lm);
	$ll = intval($ll);

	if($op == 0)
	{
		$result = $kwm;
	}
	if($op != 0)
	{
		$result = $kwmop;
	}

}
include 'calc_view.php';
