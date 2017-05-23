<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 7</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php
            // traduction de :   echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
            $maVariable = false;
            if ($maVariable == false) {
                echo 'c\'est pas bon !!!';
            } else {
                echo 'c\'est ok !!';
            }
            ?>
        </p>
    </body>
</html>