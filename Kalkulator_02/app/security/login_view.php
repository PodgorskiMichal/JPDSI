<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
    <meta charset="utf-8"/>
    <title>Sign in</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>

<body>
<div style="width: 90%; margin: 2em auto">

    <form action="<?php print (_APP_ROOT); ?>/app/security/login.php" method="post" class="pure-form pure-form-stacked">
        <legend>Sign in</legend>
        <fieldset>
            <label for="id_login">login: </label>
            <input id="id_login" type="text" name="login" placeholder="login" value="<?php out($form['login']); ?>"/>
            <label for="id_pass">pass: </label>
            <input id="id_pass" type="password" name="pass" placeholder="pass" />
        </fieldset>
        <input type="submit" value="Sign in" class="pure-button pure-button-primary">
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

</div>

</body>
</html>