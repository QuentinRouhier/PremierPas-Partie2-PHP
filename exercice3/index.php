     <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 3</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php
            // declaration de deux variables
            $genre = 'femme';
            $age = 33;
            //si vous etes une famme avec 18 ans ou plus
            if ($genre == 'femme' && $age >= 18) {
                // alor tu affiche le texte 
                echo 'Vous êtes une femme et vous êtes majeur';
                //sinon si un femme avec moins de 18 ans
            } elseif ($genre == 'femme' && $age <= 18) {
                //tu affiche le texte si dessous
                echo 'Vous êtes une femme et vous êtes mineur';
                // si tes un homme avec 18 ans ou plus 
            } elseif ($genre == 'homme' && $age >= 18) {
                // alors tu affiche le texte ci dessous
                echo 'Vous êtes une homme et vous êtes majeur';
                // sinon si tu es un homme avec moins de 18 ans 
            } elseif ($genre == 'homme' && $age <= 18) {
                // tu affiche les texte ci dessous
                echo 'Vous êtes une homme et vous êtes mineur';
            }
            ?>
        </p>
    </body>
</html>