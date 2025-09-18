<?php

/*Créez une variable de type string nommée $str et affectez y le texte :
“Certaines choses changent, et d'autres ne changeront jamais.”
Créer un algorithme qui parcourt cette string en remplaçant le premier caractère par le
deuxième, le deuxième par le troisième etc.. et le dernier par le premier.
Ex. : Ertaines choses changent, et d'autres ne changeront jamais.c*/


$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Étape 1: Stocker tous les caractères dans un tableau
$chars = [];
$i = 0;
while (isset($str[$i])) {
    $chars[] = $str[$i];
    $i++;
}

// Étape 2: Calculer la taille du tableau sans utiliser count()
$size = 0;
while (isset($chars[$size])) {
    $size++;
}

// Étape 3: Créer la chaîne avec rotation
// Méthode optimisée avec voyelles/consonnes et boucles
$replaced = "";

// Définir les voyelles et consonnes en minuscules et majuscules
$voyelles_min = ['a', 'e', 'i', 'o', 'u'];
$voyelles_maj = ['A', 'E', 'I', 'O', 'U'];
$consonnes_min = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z'];
$consonnes_maj = ['B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Y', 'Z'];

for ($j = 0; $j < $size; $j++) {
    if ($j == 0) {
        // Le premier caractère prend le deuxième ET le met en majuscule
        $char = $chars[1];
        $new_char = $char; // Par défaut, garder le caractère original
        
        // Chercher dans les voyelles minuscules
        for ($v = 0; $v < 5; $v++) {
            if (isset($voyelles_min[$v]) && $char == $voyelles_min[$v]) {
                $new_char = $voyelles_maj[$v];
                break;
            }
        }
        
        // Chercher dans les consonnes minuscules
        for ($c = 0; $c < 21; $c++) {
            if (isset($consonnes_min[$c]) && $char == $consonnes_min[$c]) {
                $new_char = $consonnes_maj[$c];
                break;
            }
        }
        
        $replaced .= $new_char;
        
    } elseif ($j == $size - 1) {
        // Le dernier caractère prend le premier ET le met en minuscule
        $char = $chars[0];
        $new_char = $char; // Par défaut, garder le caractère original
        
        // Chercher dans les voyelles majuscules
        for ($v = 0; $v < 5; $v++) {
            if (isset($voyelles_maj[$v]) && $char == $voyelles_maj[$v]) {
                $new_char = $voyelles_min[$v];
                break;
            }
        }
        
        // Chercher dans les consonnes majuscules
        for ($c = 0; $c < 21; $c++) {
            if (isset($consonnes_maj[$c]) && $char == $consonnes_maj[$c]) {
                $new_char = $consonnes_min[$c];
                break;
            }
        }
        
        $replaced .= $new_char;
        
    } else {
        // Les autres caractères prennent simplement le suivant
        $replaced .= $chars[$j + 1];
    }
}

echo "Chaîne originale : " . $str . "<br>";
echo "Chaîne modifiée  : " . $replaced;
