<?php

/*
Job 05
- Créez une variable de type string nommée $str et affectez y le texte :
“On n’est pas le meilleur quand on le croit mais quand on le sait”.
- Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys
“consonnes” et “voyelles”. 
- Créez un algorithme qui parcourt, compte et stocke le
nombre d'occurrences de consonnes et de voyelles de $str.
Affichez ces résultats dans un tableau <table> html qui a comme <thead> “Voyelles” et
“Consonnes”..*/

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";


// Définir les voyelles dans un tableau associatif pour utiliser isset()
$voyelles = [
    'a' => true,
    'e' => true,
    'i' => true,
    'o' => true,
    'u' => true,
    'A' => true,
    'E' => true,
    'I' => true,
    'O' => true,
    'U' => true
];

$dic = [
    "consonnes" => 0,
    "voyelles" => 0
];

// Définir les voyelles dans un tableau associatif pour utiliser isset()
$voyelles = [
    'a' => true, 'e' => true, 'i' => true, 'o' => true, 'u' => true,
    'A' => true, 'E' => true, 'I' => true, 'O' => true, 'U' => true
];

// Définir toutes les lettres (plus compact avec ranges)
$lettres = [
    'a' => true, 'b' => true, 'c' => true, 'd' => true, 'e' => true, 'f' => true,
    'g' => true, 'h' => true, 'i' => true, 'j' => true, 'k' => true, 'l' => true,
    'm' => true, 'n' => true, 'o' => true, 'p' => true, 'q' => true, 'r' => true,
    's' => true, 't' => true, 'u' => true, 'v' => true, 'w' => true, 'x' => true,
    'y' => true, 'z' => true,
    'A' => true, 'B' => true, 'C' => true, 'D' => true, 'E' => true, 'F' => true,
    'G' => true, 'H' => true, 'I' => true, 'J' => true, 'K' => true, 'L' => true,
    'M' => true, 'N' => true, 'O' => true, 'P' => true, 'Q' => true, 'R' => true,
    'S' => true, 'T' => true, 'U' => true, 'V' => true, 'W' => true, 'X' => true,
    'Y' => true, 'Z' => true
];

// Convertir la chaîne en tableau de caractères manuellement
$chars = [];
$i = 0;
while (isset($str[$i])) {
    $chars[] = $str[$i];
    $i++;
}

// Parcourir chaque caractère
foreach ($chars as $char) {
    // Vérifier si c'est une lettre en utilisant uniquement isset()
    if (isset($lettres[$char])) {
        // Vérifier si c'est une voyelle en utilisant uniquement isset()
        if (isset($voyelles[$char])) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

// Afficher les résultats dans un tableau HTML
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 05 - Compteur de voyelles et consonnes</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <h1>Analyse de la phrase : "<?php echo $str; ?>"</h1>
    
    <table>
        <thead>
            <tr>
              
                <th>Consonnes</th>  
                <th>Voyelles</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dic["consonnes"]; ?></td>
                <td><?php echo $dic["voyelles"]; ?></td>
                
            </tr>
        </tbody>
    </table>
</body>
</html>