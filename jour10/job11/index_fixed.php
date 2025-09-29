<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 11 - Capacité moyenne des salles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
            border-bottom: 3px solid #fd7e14;
            padding-bottom: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #fd7e14;
            color: white;
            font-weight: bold;
        }

        td {
            background-color: #f8f9fa;
            font-size: 18px;
            font-weight: bold;
            color: #fd7e14;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Capacité Moyenne des Salles</h1>

        <?php
        /*
Job 11
En utilisant php, connectez-vous à la base de données "jour09". A l'aide d'une requête
SQL, sélectionnez la capacité moyenne des salles. Affichez le résultat de cette requête
dans un tableau html. La première ligne de votre tableau html doit contenir le nom des
champs. Les suivantes doivent contenir les données présentes dans votre base de
données.
*/

        try {
            $pdo = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8mb4", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT AVG(capacite) AS moyenne_salle FROM salles";
            $stmt = $pdo->query($sql);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($result) > 0 && $result[0]['moyenne_salle'] !== null) {
                echo "<table>";

                // Affichage de l'en-tête
                echo "<thead><tr>";
                foreach (array_keys($result[0]) as $colonne) {
                    echo "<th>" . htmlspecialchars(ucwords(str_replace('_', ' ', $colonne))) . "</th>";
                }
                echo "</tr></thead>";

                // Affichage des données
                echo "<tbody>";
                foreach ($result as $row) {
                    echo "<tr>";
                    foreach ($row as $valeur) {
                        echo "<td>" . number_format($valeur, 2) . " places</td>";
                    }
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";

                echo "<p style='text-align: center; margin-top: 20px;'>";
                echo "<strong>Capacité moyenne : " . number_format($result[0]['moyenne_salle'], 2) . " places par salle</strong>";
                echo "</p>";
            } else {
                echo "<p style='text-align: center; color: #666;'>Aucune donnée de capacité trouvée.</p>";
            }
        } catch (PDOException $e) {
            echo "<div class='error'>";
            echo "<strong>Erreur :</strong> " . htmlspecialchars($e->getMessage());
            echo "</div>";
        }
        ?>

    </div>
</body>

</html>