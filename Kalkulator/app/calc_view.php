!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_kw">Kwota: </label>
	<input id="id_kw" type="text" name="kw" size = "10" value="<?php if (isset($kw)) print($kw); ?>" /><br />
	<label for="id_ll">Liczba lat: </label>
	<input id="id_x" type="number" name="ll" min = "3" max = "25" value="<?php if (isset($ll)) print($ll); ?>" /><br />
	<label for="id_op">Oprocentowanie: </label>
	<input id="id_op" type="text" name="op" size = "10" value="<?php if (isset($op)) print($op); ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:200px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.round($result,2); ?>
</div>
<?php } ?>

</body>
</html>
