<?php

// Créer le tableau avec les nombres donnés
$tab = [200, 204, 173, 98, 171, 404, 459];

// Parcourir le tableau avec une boucle while et isset()
$i = 0;
while (isset($tab[$i])) {
    $number = $tab[$i];

    // Vérifier si le nombre est pair ou impair
    if ($number % 2 === 0) {
        echo "$number est pair<br />";
    } else {
        echo "$number est impair<br />";
    }

    $i++;
}
