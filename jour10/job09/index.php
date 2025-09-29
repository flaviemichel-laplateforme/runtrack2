<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 09 - Salles par capacité décroissante</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
            border-bottom: 3px solid #28a745;
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
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #28a745;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:hover {
            background-color: #e8f5e8;
        }

        .no-data {
            text-align: center;
            color: #666;
            padding: 20px;
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
        <h1>Salles par Capacité Décroissante</h1>

        <?php
        /*
        Job 09
        En utilisant php, connectez-vous à la base de données "jour09". A l'aide d'une requête
        SQL, sélectionnez l'ensemble des informations des salles en les triant par capacité
        décroissante. Affichez le résultat de cette requête dans un tableau html.
        */

        try {
            $pdo = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8mb4", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM salles ORDER BY capacite DESC";
            $stmt = $pdo->query($sql);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($results) > 0) {
                echo "<table>";

                // Affichage dynamique de l'en-tête avec les noms des colonnes
                echo "<thead><tr>";
                foreach (array_keys($results[0]) as $colonne) {
                    echo "<th>" . htmlspecialchars(ucwords(str_replace('_', ' ', $colonne))) . "</th>";
                }
                echo "</tr></thead>";

                // Affichage des données
                echo "<tbody>";
                foreach ($results as $row) {
                    echo "<tr>";
                    foreach ($row as $valeur) {
                        echo "<td>" . htmlspecialchars($valeur ?? '') . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";

                echo "<p style='text-align: center; margin-top: 20px;'>";
                echo "<strong>Total : " . count($results) . " salle(s) trouvée(s), triées par capacité décroissante</strong>";
                echo "</p>";
            } else {
                echo "<div class='no-data'>";
                echo "<p>Aucune salle trouvée dans la base de données.</p>";
                echo "</div>";
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