<?php

/**Créez une fonction nommée “calcule()” qui prend 3 paramètres :
● le premier, “$a”, est un nombre,
● le deuxième, "$operation", est un caractère (string) contenant le type d’opération
(+, -, *, /, %),
● le troisième, “$b”, est un nombre.
La fonction doit retourner le résultat de l’opération.
 * 
 */

function calcule($a,$operation,$b) {
    switch ($operation){
        case '+':
            return $a+$b;
        case '-':
            return $a-$b;
        case '*':
            return $a*$b;
        case '%':
            return $a%$b;
        case '/':
            return $a/$b;
        default:
            return "operation non reconnue";
    
    }
}

echo calcule(10, '+', 5); // 15
echo "<br>";
echo calcule(5,'/',5);
echo "<br>";