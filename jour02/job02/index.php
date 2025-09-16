<?php
/* Job 02
Afficher tous les nombres de 0 à 1337 compris SAUF 26, 37, 88, 1111 et 3233 en
mettant un retour à la ligne entre chaque nombre (<br />)*/

for ($i=0; $i <=1337; $i++) {
    if ($i==26 || $i==37 || $i==88 || $i==1111 || $i==3233) {
        continue;
    }
    echo $i . "<br />";
}

?>

