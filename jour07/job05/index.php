<?php

// Créez une fonction nommée “occurrences($str, $char)”.
// Cette fonction prend en paramètre une chaîne de caractères nommée “$str” et un
// caractère nommé “$char”.
// Elle doit retourner le nombre d'occurrences du caractère “$char” dans “$str”.
// Exemple : si $str = “Bonjour” et $char=”o” alors le nombre d'occurrences de $char dans
// $str sera : 2

function occurences($str, $char)
{
    // MÉTHODE WHILE - Comptage d'occurrences sans fonction système
    // ===========================================================

    // Initialise le compteur d'occurrences à 0
    $count = 0;

    // Initialise la position de départ à 0 (premier caractère)
    $position = 0;

    // Récupère la longueur totale de la chaîne
    $longueur = strlen($str);

    // Boucle while : continue tant qu'on n'a pas atteint la fin de la chaîne
    while ($position < $longueur) {
        // Vérifie si le caractère à la position actuelle correspond au caractère recherché
        if ($str[$position] === $char) {
            $count++; // Incrémente le compteur si trouvé
        }

        $position++; // Passe au caractère suivant
    }

    // Retourne le nombre total d'occurrences trouvées
    return $count;
}

// Test de la fonction avec l'exemple donné
echo occurences("bonjour", "o"); // Résultat attendu : 2
