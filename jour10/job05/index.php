<?php
/*
Job 05
En utilisant php, connectez-vous à la base de données "jour09". A l'aide d'une requête
SQL, récupérez l'ensemble des informations des étudiants qui ont moins de 18 ans.
Affichez le résultat de cette requête dans un tableau html. La première ligne de votre
tableau html doit contenir le nom des champs. Les suivantes doivent contenir les
données présentes dans votre base de données.
*/
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 05 - Étudiants de moins de 18 ans</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f5f5f5; }
        .container { max-width: 1000px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; }
        h1 { color: #333; text-align: center; border-bottom: 3px solid #007bff; padding-bottom: 10px; }
        table { border-collapse: collapse; width: 100%; margin: 20px 0; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #007bff; color: white; font-weight: bold; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        tr:hover { background-color: #e3f2fd; }
        .no-data { text-align: center; color: #666; padding: 20px; }
        .error { background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des Étudiants de moins de 18 ans</h1>

<?php 05
En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, récupérez l’ensemble des informations des étudiants qui ont moins de 18 ans.
Affichez le résultat de cette requête dans un tableau html. La première ligne de votre
tableau html doit contenir le nom des champs. Les suivantes doivent contenir les
données présentes dans votre base de données. -->

<?php
// Connexion à la base de données avec PDO
$dsn = "mysql:host=localhost;dbname=jour09;charset=utf8mb4";
$username = "root"; // remplace si nécessaire
$password = "";     // remplace si nécessaire

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour récupérer les étudiants de moins de 18 ans
    $sql = "SELECT * FROM etudiants WHERE DATEDIFF(CURDATE(), naissance) / 365.25 < 18";
    $stmt = $pdo->query($sql);

    // Récupération de toutes les données
    $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Vérification s'il y a des résultats
    if (count($etudiants) > 0) {
        echo "<table>";

        // Affichage de l'en-tête avec les noms des colonnes
        echo "<thead><tr>";
        foreach (array_keys($etudiants[0]) as $colonne) {
            echo "<th>" . htmlspecialchars(ucfirst($colonne)) . "</th>";
        }
        echo "</tr></thead>";

        // Affichage des données
        echo "<tbody>";
        foreach ($etudiants as $etudiant) {
            echo "<tr>";
            foreach ($etudiant as $valeur) {
                echo "<td>" . htmlspecialchars($valeur ?? '') . "</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";

        echo "</table>";
        echo "<p><strong>Total : " . count($etudiants) . " étudiant(s) de moins de 18 ans</strong></p>";
    } else {
        echo "<div class='no-data'>";
        echo "<p>Aucun étudiant de moins de 18 ans trouvé dans la base de données.</p>";
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
