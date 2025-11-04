<!DOCTYPE html>

<!-- Job 02
En utilisant php et mysqli, connectez-vous à la base de données “jour09”. A l’aide d’une
requête SQL, récupérez le nom et la capacité de chacune des salles. 
Affichez le résultat
de cette requête dans un tableau html. La première ligne de votre tableau html doit
contenir le nom des champs. Les suivantes doivent contenir les données présentes
dans votre base de données. -->

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 02 - Liste des Salles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>

    <?php
    // Connexion à la base de données avec PDO
    $dsn = "mysql:host=localhost;dbname=jour09;charset=utf8mb4";
    $username = "root"; // remplace si nécessaire
    $password = "";     // remplace si nécessaire

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête SQL pour récupérer toutes les salles
        $sql = "SELECT nom, capacite FROM salles";
        $stmt = $pdo->query($sql);

        // Récupération de toutes les données
        $salles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Vérification s'il y a des résultats
        if (count($salles) > 0) {
            echo "<h1>Liste des Salles</h1>";
            echo "<table>";

            // Affichage de l'en-tête avec les noms des colonnes
            echo "<thead><tr>";
            foreach (array_keys($salles[0]) as $colonne) {
                echo "<th>" . htmlspecialchars(ucfirst($colonne)) . "</th>";
            }
            echo "</tr></thead>";

            // Affichage des données
            echo "<tbody>";
            foreach ($salles as $salle) {
                echo "<tr>";
                foreach ($salle as $valeur) {
                    echo "<td>" . htmlspecialchars($valeur ?? '') . "</td>";
                }
                echo "</tr>";
            }
            echo "</tbody>";

            echo "</table>";
            echo "<p><strong>Total : " . count($salles) . " salle(s)</strong></p>";
        } else {
            echo "<h1>Liste des Salles</h1>";
            echo "<p>Aucune salle trouvée dans la base de données.</p>";
        }
    } catch (PDOException $e) {
        echo "<h1>Erreur</h1>";
        echo "<p style='color: red;'>Erreur de connexion : " . htmlspecialchars($e->getMessage()) . "</p>";
    }
    ?>

</body>

</html>