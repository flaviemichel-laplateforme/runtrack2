<?php
/*job 6
Faire un algorithme qui affiche un rectangle de 20 de largeur par 10 de hauteur. Ces
dimensions devront être stockées dans deux variables $largeur et $hauteur, modifiables
facilement. */
$largeur = 20;
$hauteur = 10;
for ($i = 0; $i < $hauteur; $i++) {
    for ($j = 0; $j < $largeur; $j++) {
        echo "*";
    }
    echo "<br /> \n";
}
?>