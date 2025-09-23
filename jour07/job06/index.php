<?php

// Créez une fonction nommée “leetSpeak($str)”. Cette fonction prend en paramètre une
// chaîne de caractères nommée “$str”.
// Elle doit retourner la chaîne de caractères “$str” convertie en leet speak. Cela signifie
// qu’elle doit la modifier de sorte à ce que :
// ● les “A” deviennent des “4”,
// ● les “B” des “8”,
// ● les “E” des “3”,
// ● les “G” des “6”,
// ● les “L” des “1”,
// ● les “S” des “5”
// ● les “T” des “7”.
// Cela est valable que l’on crie ou non (majuscules et minuscules).

function leetSpeak($str) {
    // MÉTHODE FOR + SWITCH - Conversion en leet speak sans fonction système
    // ====================================================================
    
    // Initialise la chaîne de résultat vide
    $result = '';
    
    // Parcourt chaque caractère de la chaîne avec une boucle for
    for ($i = 0; $i < strlen($str); $i++) {
        // Récupère le caractère actuel à la position $i
        $char = $str[$i];
        
        // Utilise switch pour gérer chaque cas de conversion
        switch ($char) {
            case 'A':  // A majuscule
            case 'a':  // a minuscule
                $result .= '4';  // Remplace par 4
                break;
                
            case 'B':  // B majuscule
            case 'b':  // b minuscule
                $result .= '8';  // Remplace par 8
                break;
                
            case 'E':  // E majuscule
            case 'e':  // e minuscule
                $result .= '3';  // Remplace par 3
                break;
                
            case 'G':  // G majuscule
            case 'g':  // g minuscule
                $result .= '6';  // Remplace par 6
                break;
                
            case 'L':  // L majuscule
            case 'l':  // l minuscule
                $result .= '1';  // Remplace par 1
                break;
                
            case 'S':  // S majuscule
            case 's':  // s minuscule
                $result .= '5';  // Remplace par 5
                break;
                
            case 'T':  // T majuscule
            case 't':  // t minuscule
                $result .= '7';  // Remplace par 7
                break;
                
            default:   // Pour tous les autres caractères
                $result .= $char;  // Garde le caractère tel quel
                break;
        }
    }
    
    // Retourne la chaîne transformée en leet speak
    return $result;
}

// Test de la fonction avec l'exemple donné
echo leetSpeak("salut les gens"); // Résultat attendu : "5a1u7 1e5 6en5"