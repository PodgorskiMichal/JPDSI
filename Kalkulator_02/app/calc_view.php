<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Kalkulator kredytowy</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" >
<body>

<div style="width:90%; margin: 2em auto">
    <a href="<?php print(_APP_ROOT); ?>/app/inna_ochrona.php" class="pure-button">Inna ochrona</a>
    <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Log out</a>
</div>

<div style="width:90%; margin: 2em auto">

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
    <fieldset>
        <legend>Kalkulator</legend>

        <label for="id_kw">Kwota: </label>
        <input id="id_kw" type="text" name="kw" style="width: 9em" placeholder="Kwota" value="<?php out($kw) ?>" />

        <label for="id_ll">Liczba lat: </label>
        <input id="id_x" type="text" name="ll" style="width: 9em" placeholder="Liczba lat" value="<?php out($ll) ?>" />

        <label for="id_op">Oprocentowanie: </label>
        <select id="id_op" name="op" style="width: 9em">
            <option value="0">0%</option>
            <option value="1" selected>1%</option>
            <option value="2">2%</option>
            <option value="3">3%</option>
            <option value="4">4%</option>
            <option value="5">5%</option>
        </select>

        <input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
    </fieldset>
</form>

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:18em;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result) && $result != 0){ ?>
<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:30em;">
    <?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

</div>

</body>
</html>
