<?php

// <!-- Job 11

// En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
// SQL, sélectionnez la capacité moyenne des salles. Affichez le résultat de cette requête
// dans un tableau html. La première ligne de votre tableau html doit contenir le nom des
// champs. Les suivantes doivent contenir les données présentes dans votre base de
// données. -->

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
    echo "<div style='background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px;'>";
    echo "<strong>Erreur :</strong> " . htmlspecialchars($e->getMessage());
    echo "</div>";
}
?>

</div>
</body>

</html>