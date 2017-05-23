<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php
            // declaration de la viriable
            $IsEasy = 0;
            // si la variable = a true
            if ($IsEasy == true) {
                // alors tu m'affiche le texte 
                echo 'C\'est facile!!)';
                //sinon
            } else {
                // tu m'affiche le texte
                echo 'C\'est difficile';
            }
            ?>
        </p>
        <p>
            <?php
            // declaration de la variable
            $IsEasy = true;
            // si la variable = a false
            if ($IsEasy == false) {
                // tu maffiche le texte 
                echo 'C\'est difficile)';
                // sinon si la variable 
            } else {
                // tu m'affiche le texte
                echo 'C\'est facile!!';
            }
            ?>
        </p>
        <p>
            <?php
            // ? =   question   : =  if / else 
            echo ($IsEasy == false) ? 'C\'est facile' : 'C\'est difficile';
            ?>
        </p>
    </body>
</html>