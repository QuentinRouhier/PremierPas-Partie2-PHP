<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 5</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php
            // traduction de : echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
            $maVariable = '';
            // si tu n'est pas un homme 
            if ($maVariable != 'Homme') {
                // alors tu m'affiche le texte ci dessous
                echo 'C\'est une développeuse !!!';
                // sinon si tu es un homme 
            } elseif ($maVariable == 'Homme') {
                // tu m'affiche le texte ci dessous
                echo 'C\'est un développeur !!!';
            }
            ?>
        </p>
    </body>
</html>