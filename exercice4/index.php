<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 4</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php
            $magnitude = 5;
            // creation d'un switch
            switch ($magnitude) {
                case 1: // dans le cas où $magnitude vaut 1
                    echo "Micro-séisme impossible à ressentir.";
                    break;
                case 2: // dans le cas où $magnitude vaut 2

                    echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";

                    break;
                case 3: // dans le cas où $magnitude vaut 3

                    echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";

                    break;
                case 4: // dans le cas où $magnitude vaut 4

                    echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";

                    break;
                case 5: // dans le cas où $magnitude vaut 5

                    echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";

                    break;
                case 6: // dans le cas où $magnitude vaut 6

                    echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";

                    break;
                case 7: // dans le cas où $magnitude vaut 7

                    echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";

                    break;
                case 8: // dans le cas où $magnitude vaut 8

                    echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";

                    break;
                case 9: // dans le cas où $magnitude vaut 9

                    echo "Séisme capable de tout détruire sur une très vaste zone.";

                    break;
                default :
                    echo 'tu ma mentie il n\'y a pas pas autant de valeur ';
                    break;
            }
            ?>
        </p>
    </body>
</html>