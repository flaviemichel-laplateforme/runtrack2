<?php


$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Parcourir la chaîne en affichant un caractère sur deux sans fonction système
$i = 0;
while (isset($str[$i])) {
    if ($i % 2 == 0) {
        echo $str[$i];
    }
    $i++;
}

?> 
 