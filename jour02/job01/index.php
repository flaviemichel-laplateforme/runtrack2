<?php
/* Job 01
Afficher tous les nombres compris entre 0 et 1337 en mettant un retour à la ligne entre
chaque nombre (<br />).
Le nombre 42 doit être en gras et souligné (<b><u>...).*/


// Affiche les nombres de 0 à 1337
for ($i = 0; $i <= 1337; $i++) {
    if ($i === 42) {
        // 42 en gras et souligné
        echo "<b><u>42</u></b><br />";
    } else {
        echo $i . "<br />";
    }
}
?>
