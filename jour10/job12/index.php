<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 12 - Étudiants nés entre 1998 et 2018</title>
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
            border-bottom: 3px solid #6f42c1;
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
            background-color: #6f42c1;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:hover {
            background-color: #e8e3f0;
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
        <h1>Étudiants nés entre 1998 et 2018</h1>

        <?php
        /*
Job 12
En utilisant php, connectez-vous à la base de données "jour09". A l'aide d'une requête
SQL, sélectionnez le prénom, le nom et la date de naissance des étudiants qui sont nés
entre 1998 et 2018. Affichez le résultat de cette requête dans un tableau html.
*/

        try {
            // Connexion PDO à la base de données "jour09"
            $pdo = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8mb4", "root", "");

            // Configuration PDO pour les exceptions
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Requête SQL pour sélectionner les étudiants nés entre 1998 et 2018
            $sql = "SELECT prenom, nom, naissance FROM etudiants WHERE YEAR(naissance) BETWEEN 1998 AND 2018";

            // Exécution de la requête
            $stmt = $pdo->query($sql);

            // Récupération de tous les résultats
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($results) > 0) {
                echo "<table>";
                echo "<thead><tr><th>Prénom</th><th>Nom</th><th>Date de naissance</th></tr></thead>";
                echo "<tbody>";

                foreach ($results as $row) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['prenom']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['naissance']) . "</td>";
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