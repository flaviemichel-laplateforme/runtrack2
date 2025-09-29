<!-- En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, récupérez la superficie totale des étages dans une colonne nommée
“superficie_totale”. Affichez le résultat de cette requête dans un tableau html. La
première ligne de votre tableau html doit contenir le nom des champs. Les suivantes
doivent contenir les données présentes dans votre base de données. -->

<?php
// Connexion à la base de données avec PDO
$dsn = "mysql:host=localhost;dbname=jour09;charset=utf8";
$username = "root"; // remplace si nécessaire
$password = "";     // remplace si nécessaire

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour récupérer la superficie totale des étages
    $sql = "SELECT SUM(superficie) AS superficie_totale FROM etage";
    $stmt = $pdo->query($sql);

    // Récupération de toutes les données
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Vérification s'il y a des résultats
    if (count($result) > 0 && $result[0]['superficie_totale'] !== null) {
        echo "<table border='1' cellpadding='5' cellspacing='0'>";

        // Affichage de l'en-tête avec les noms des colonnes
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
                echo "<td>" . number_format($valeur, 2) . " m²</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";

        echo "</table>";
    } else {
        echo "Aucune donnée de superficie trouvée.";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
