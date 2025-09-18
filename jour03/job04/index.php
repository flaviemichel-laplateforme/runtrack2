<?php
/*Job 04
Créez une variable de type string nommée $str et affectez y le texte :
"Dans l'espace, personne ne vous entend crier".
Créez un algorithme qui parcourt, compte et affiche le nombre de caractères présents
dans cette chaîne*/

$str = "Dans l'espace, personne ne vous entend crier.";
$length = 0;

// Compter les caractères sans les espaces
for ($i = 0; isset($str[$i]); $i++) {
    // Vérifier si ce n'est pas un espace
    if ($str[$i] !== ' ') {
        $length++;
    }
}

echo "La chaîne contient $length caractères.";

