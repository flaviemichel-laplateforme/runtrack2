<!-- En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, récupérez le nombre total d’étudiants dans une colonne nommée “nb_etudiants”.
Affichez le résultat de cette requête dans un tableau html. La première ligne de votre
tableau html doit contenir le nom du champs-->

<?php
// Connexion à la base de données avec PDO
$dsn = "mysql:host=localhost;dbname=jour09;charset=utf8";
$username = "root"; // remplace si nécessaire
$password = "";     // remplace si nécessaire

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour récupérer tous les étudiants
    $sql = "SELECT COUNT(*) FROM etudiants";
    $stmt = $pdo->query($sql);

    // Récupération de toutes les données
    $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Vérification s'il y a des résultats
    if (count($etudiants) > 0) {
        echo "<table border='1' cellpadding='5' cellspacing='0'>";

        // Affichage de l'en-tête avec les noms des colonnes
        echo "<thead><tr>";
        foreach (array_keys($etudiants[0]) as $colonne) {
            echo "<th>" . htmlspecialchars($colonne) . "</th>";
        }
        echo "</tr></thead>";

        // Affichage des données
        echo "<tbody>";
        foreach ($etudiants as $etudiant) {
            echo "<tr>";
            foreach ($etudiant as $valeur) {
                echo "<td>" . htmlspecialchars($valeur) . "</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";

        echo "</table>";
    } else {
        echo "Aucun étudiant trouvé.";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
