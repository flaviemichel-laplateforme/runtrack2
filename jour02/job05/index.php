<?php
/* Job 5
Faire un algorithme qui affiche les nombres premiers jusqu’à 1000 en mettant un retour
à la ligne entre chaque nombre (“<br />”).  */  

for ($i = 0; $i <= 1000; $i++) {
    $isPrime = true;
    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j === 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime && $i > 1) {
        echo "$i<br /> \n";
    }
}
