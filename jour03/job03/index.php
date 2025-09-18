<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = "aeiouyAEIOUY";

// Boucle sur tous les caractères de $str
for ($i = 0; isset($str[$i]); $i++) {
    // Boucle sur toutes les voyelles possibles
    for ($j = 0; isset($voyelles[$j]); $j++) {
        if ($str[$i] === $voyelles[$j]) {
            echo $str[$i];
        }
    }
}

