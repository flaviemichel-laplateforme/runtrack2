<?php
$nom = "Flavie";
$age = 33;
$ville = "La Farlède";
$estmajeur = true;
$taille = 1.52;
$couleur = ["bleu", "blanc", "rouge"];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Variables</title>

    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Tableau des Variables</h1>
    <table>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td>Chaîne de caractères</td>   
            <td>Nom</td>
            <td><?php echo $nom; ?></td>
        </tr>
        <tr>
            <td>Nombre entier</td>
            <td>Âge</td>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <td>Nombre à virgule flottante</td>
            <td>Taille</td>
            <td><?php echo $taille; ?></td>
        </tr>
        <tr>
            <td>Booleen</td>
            <td>Est Majeur</td>
            <td><?php echo $estmajeur ? 'Oui' : 'Non'; ?></td>
        </tr>
        <tr>
            <td>Array Tableau contenant plusieurs valeurs</td>
            <td>Couleurs</td>
            <td><?php 
                // Afficher les couleurs sans fonctions système
                $i = 0;
                while (isset($couleur[$i])) {
                    echo $couleur[$i];
                    // Vérifier s'il y a un élément suivant pour ajouter la virgule
                    if (isset($couleur[$i + 1])) {
                        echo ", ";
                    }
                    $i++;
                }
            ?></td>
        </tr>
    </table>
</body>
</html>
