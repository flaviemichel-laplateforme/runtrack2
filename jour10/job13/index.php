<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 13 - Salles et leurs étages</title>
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
        <h1>Salles et leurs Étages</h1>

        <?php
        /*
Job 13
En utilisant php, connectez-vous à la base de données "jour09". A l'aide d'une requête
SQL, sélectionnez récupérer le nom des salles et le nom de leur étage. Affichez le
résultat de cette requête dans un tableau html.
*/

        try {
            // Connexion PDO à la base de données "jour09"
            $pdo = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8mb4", "root", "");

            // Configuration PDO pour les exceptions
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Requête SQL avec jointure pour récupérer le nom des salles et le nom de leur étage
            $sql = "SELECT salles.nom AS nom_salle, etage.nom AS nom_etage 
                    FROM salles 
                    INNER JOIN etage ON salles.id_etage = etage.id";

            // Exécution de la requête
            $stmt = $pdo->query($sql);

            // Récupération de tous les résultats
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($results) > 0) {
                echo "<table>";

                // Affichage de l'en-tête avec les noms des champs
                echo "<thead><tr>";
                foreach (array_keys($results[0]) as $colonne) {
                    echo "<th>" . htmlspecialchars(ucwords(str_replace('_', ' ', $colonne))) . "</th>";
                }
                echo "</tr></thead>";

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
                echo "<p style='text-align: center; margin-top: 20px;'><strong>Total : " . count($results) . " étudiant(s) trouvé(s)</strong></p>";
            } else {
                echo "<div class='no-data'>";
                echo "<p>Aucun étudiant né entre 1998 et 2018 trouvé.</p>";
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