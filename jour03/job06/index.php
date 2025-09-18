<?php
// Définir l'encodage UTF-8 pour les caractères spéciaux
header('Content-Type: text/html; charset=UTF-8');

/*Job 06
Créez une variable de type string nommée $str et affectez y le texte :
"Les choses que l'on possède finissent par nous posséder."
Créez un algorithme qui parcourt et écrit cette chaine à l'envers.
Ex. : redessop suon rap tnessinif edessop no'l euq sesohc seL*/
/*Job 06
Créez une variable de type string nommée $str et affectez y le texte :
“Les choses que l'on possède finissent par nous posséder."
Créez un algorithme qui parcourt et écrit cette chaine à l’envers.
Ex. : redessop suon rap tnessinif edessop no'l euq sesohc seL*/
$str = "Les choses que l'on possede finissent par nous posseder.";

// Construction chaîne inversée
$reversed = "";
$i = 0;

// Première boucle : construire un tableau des caractères
$chars = [];
while (isset($str[$i])) {
    $chars[] = $str[$i];
    $i++;
}

// Deuxième boucle : construire la chaîne inversée
$count = count($chars);
for ($j = $count - 1; $j >= 0; $j--) {
    $reversed .= $chars[$j];
}

echo "Chaîne originale : " . $str . "<br>";
echo "Chaîne inversée : " . $reversed;
