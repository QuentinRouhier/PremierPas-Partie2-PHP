<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 6</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php
            // traduction de : echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
            $monAge = 158;
            if ($monAge >= 18) {
                echo 'Tu es majeur';
            } else {
                echo 'Tu n\'es pas majeur';
            }
            ?>
        </p>
    </body>
</html>