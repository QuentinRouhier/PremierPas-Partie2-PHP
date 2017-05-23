<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 8</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php
            // traduction de : echo ($maVariable) ? 'c'est ok !!' : 'c'est pas bon !!!';
            $maVariable = true;
            if ($maVariable) {
                echo 'c\'est ok !!';
            } else {
                echo 'c\'est pas bon !!!';
            }
            ?>
        </p>
    </body>
</html>