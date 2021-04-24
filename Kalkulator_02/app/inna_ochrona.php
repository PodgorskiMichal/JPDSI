<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';
?>

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
    <meta charset="utf-8"/>
    <title>Strona chroniona</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" >
</head>

<body>
    <div style="width: 90%; margin: 2em auto">
        <a href="<?php print(_APP_ROOT);?>/app/calc.php" class="pure-button">Strona główna</a>
        <a href="<?php print(_APP_ROOT);?>/app/security/logout.php" class="pure-button">Log out</a>
    </div>

    <div style="width: 90%; margin: 2em auto">
        <p>To jest inna chroniona strona</p>
    </div>
</body>
</html>
