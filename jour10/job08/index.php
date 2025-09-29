<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 08 - Capacité totale des salles</title>
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
        }

        h1 {
            color: #333;
            text-align: center;
            border-bottom: 3px solid #17a2b8;
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
            background-color: #17a2b8;
            color: white;
            font-weight: bold;
        }

        td {
            background-color: #f8f9fa;
            font-size: 18px;
            font-weight: bold;
            color: #17a2b8;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Capacité Totale des Salles</h1>

        <?php
        /*
Job 08
En utilisant php, connectez-vous à la base de données "jour09". A l'aide d'une requête
SQL, sélectionnez dans une colonne nommée "capacite_totale" la somme des capacités
des salles. Affichez le résultat de cette requête dans un tableau html.
*/
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=jour09", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT SUM(capacite) AS capacite_totale FROM salles";
            $stmt = $pdo->query($sql);

            echo "<table border='1'>";
            echo "<th>capacite_totale</th>";

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row['capacite_totale'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        ?>