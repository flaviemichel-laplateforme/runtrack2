<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apprentissage PHP - Syntaxe Globale</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        .section { margin: 20px 0; padding: 15px; border: 1px solid #ccc; }
        .code { background: #f4f4f4; padding: 10px; margin: 10px 0; }
        h2 { color: #2c3e50; }
        .result { background: #e8f5e8; padding: 5px; margin: 5px 0; }
    </style>
</head>
<body>
    <h1>🚀 APPRENTISSAGE PHP - SYNTAXE GLOBALE</h1>

    <?php
    // ===============================================
    // 1. VARIABLES ET TYPES DE DONNÉES
    // ===============================================
    echo '<div class="section">';
    echo '<h2>1. VARIABLES ET TYPES DE DONNÉES</h2>';
    
    // Variables (toujours commencer par $)
    $nom = "Alice";                    // String (chaîne)
    $age = 25;                         // Integer (entier)
    $prix = 19.99;                     // Float (décimal)
    $estMajeur = true;                 // Boolean (vrai/faux)
    $rien = null;                      // Null (vide)
    
    echo '<div class="code">';
    echo '$nom = "Alice";<br>';
    echo '$age = 25;<br>';
    echo '$prix = 19.99;<br>';
    echo '$estMajeur = true;<br>';
    echo '$rien = null;<br>';
    echo '</div>';
    
    echo '<div class="result">';
    echo "Nom: $nom, Age: $age ans, Prix: $prix €<br>";
    echo "Est majeur: " . ($estMajeur ? "Oui" : "Non") . "<br>";
    echo '</div>';
    echo '</div>';

    // ===============================================
    // 2. TABLEAUX (ARRAYS)
    // ===============================================
    echo '<div class="section">';
    echo '<h2>2. TABLEAUX (ARRAYS)</h2>';
    
    // Tableau indexé
    $fruits = ["pomme", "banane", "orange"];
    
    // Tableau associatif
    $personne = [
        "nom" => "Jean",
        "age" => 30,
        "ville" => "Paris"
    ];
    
    // Tableau multidimensionnel
    $etudiants = [
        ["nom" => "Marie", "note" => 18],
        ["nom" => "Paul", "note" => 15]
    ];
    
    echo '<div class="code">';
    echo '$fruits = ["pomme", "banane", "orange"];<br>';
    echo '$personne = ["nom" => "Jean", "age" => 30];<br>';
    echo '</div>';
    
    echo '<div class="result">';
    echo "Premier fruit: " . $fruits[0] . "<br>";
    echo "Nom: " . $personne["nom"] . ", Age: " . $personne["age"] . "<br>";
    echo "Premier étudiant: " . $etudiants[0]["nom"] . " (note: " . $etudiants[0]["note"] . ")<br>";
    echo '</div>';
    echo '</div>';

    // ===============================================
    // 3. OPÉRATEURS
    // ===============================================
    echo '<div class="section">';
    echo '<h2>3. OPÉRATEURS</h2>';
    
    $a = 10;
    $b = 3;
    
    echo '<div class="code">';
    echo '$a = 10; $b = 3;<br>';
    echo 'Addition: $a + $b<br>';
    echo 'Soustraction: $a - $b<br>';
    echo 'Multiplication: $a * $b<br>';
    echo 'Division: $a / $b<br>';
    echo 'Modulo: $a % $b<br>';
    echo 'Concaténation: $a . " et " . $b<br>';
    echo '</div>';
    
    echo '<div class="result">';
    echo "Addition: " . ($a + $b) . "<br>";
    echo "Soustraction: " . ($a - $b) . "<br>";
    echo "Multiplication: " . ($a * $b) . "<br>";
    echo "Division: " . ($a / $b) . "<br>";
    echo "Modulo: " . ($a % $b) . "<br>";
    echo "Concaténation: " . $a . " et " . $b . "<br>";
    echo '</div>';
    echo '</div>';

    // ===============================================
    // 4. CONDITIONS (IF/ELSE)
    // ===============================================
    echo '<div class="section">';
    echo '<h2>4. CONDITIONS (IF/ELSE)</h2>';
    
    $note = 16;
    
    echo '<div class="code">';
    echo '$note = 16;<br>';
    echo 'if ($note >= 18) {<br>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;echo "Excellent";<br>';
    echo '} elseif ($note >= 14) {<br>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;echo "Bien";<br>';
    echo '} elseif ($note >= 10) {<br>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;echo "Passable";<br>';
    echo '} else {<br>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;echo "Insuffisant";<br>';
    echo '}<br>';
    echo '</div>';
    
    echo '<div class="result">';
    if ($note >= 18) {
        echo "Résultat: Excellent";
    } elseif ($note >= 14) {
        echo "Résultat: Bien";
    } elseif ($note >= 10) {
        echo "Résultat: Passable";
    } else {
        echo "Résultat: Insuffisant";
    }
    echo '</div>';
    echo '</div>';

    // ===============================================
    // 5. BOUCLES
    // ===============================================
    echo '<div class="section">';
    echo '<h2>5. BOUCLES</h2>';
    
    echo '<div class="code">';
    echo '// Boucle FOR<br>';
    echo 'for ($i = 1; $i <= 5; $i++) {<br>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;echo $i . " ";<br>';
    echo '}<br><br>';
    
    echo '// Boucle WHILE<br>';
    echo '$j = 1;<br>';
    echo 'while ($j <= 3) {<br>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;echo "Tour $j ";<br>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;$j++;<br>';
    echo '}<br><br>';
    
    echo '// Boucle FOREACH<br>';
    echo 'foreach ($fruits as $fruit) {<br>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;echo $fruit . " ";<br>';
    echo '}<br>';
    echo '</div>';
    
    echo '<div class="result">';
    echo "Boucle FOR: ";
    for ($i = 1; $i <= 5; $i++) {
        echo $i . " ";
    }
    echo "<br>";
    
    echo "Boucle WHILE: ";
    $j = 1;
    while ($j <= 3) {
        echo "Tour $j ";
        $j++;
    }
    echo "<br>";
    
    echo "Boucle FOREACH: ";
    foreach ($fruits as $fruit) {
        echo $fruit . " ";
    }
    echo '</div>';
    echo '</div>';

    // ===============================================
    // 6. FONCTIONS
    // ===============================================
    echo '<div class="section">';
    echo '<h2>6. FONCTIONS</h2>';
    
    // Fonction simple
    function saluer($nom) {
        return "Bonjour " . $nom . "!";
    }
    
    // Fonction avec valeur par défaut
    function calculer($a, $b, $operation = "+") {
        if ($operation === "+") {
            return $a + $b;
        } elseif ($operation === "*") {
            return $a * $b;
        }
        return "Opération non supportée";
    }
    
    echo '<div class="code">';
    echo 'function saluer($nom) {<br>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;return "Bonjour " . $nom . "!";<br>';
    echo '}<br><br>';
    
    echo 'function calculer($a, $b, $operation = "+") {<br>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;if ($operation === "+") {<br>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return $a + $b;<br>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;}<br>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;return "Autre";<br>';
    echo '}<br>';
    echo '</div>';
    
    echo '<div class="result">';
    echo saluer("Marie") . "<br>";
    echo "5 + 3 = " . calculer(5, 3) . "<br>";
    echo "5 * 3 = " . calculer(5, 3, "*") . "<br>";
    echo '</div>';
    echo '</div>';

    // ===============================================
    // 7. SUPERGLOBALES
    // ===============================================
    echo '<div class="section">';
    echo '<h2>7. SUPERGLOBALES</h2>';
    
    echo '<div class="code">';
    echo '$_GET - Données URL<br>';
    echo '$_POST - Données formulaire<br>';
    echo '$_SESSION - Variables de session<br>';
    echo '$_COOKIE - Cookies<br>';
    echo '$_SERVER - Infos serveur<br>';
    echo '</div>';
    
    echo '<div class="result">';
    echo "Méthode de requête: " . $_SERVER['REQUEST_METHOD'] . "<br>";
    echo "URL actuelle: " . $_SERVER['REQUEST_URI'] . "<br>";
    if (!empty($_GET)) {
        echo "Paramètres GET: ";
        foreach ($_GET as $key => $value) {
            echo "$key = $value ";
        }
    } else {
        echo "Aucun paramètre GET (ajoutez ?nom=test dans l'URL)";
    }
    echo '</div>';
    echo '</div>';

    // ===============================================
    // 8. FORMULAIRE SIMPLE
    // ===============================================
    echo '<div class="section">';
    echo '<h2>8. FORMULAIRE SIMPLE</h2>';
    
    echo '<form method="get" action="">';
    echo '<label>Votre nom: </label>';
    echo '<input type="text" name="nom_test" placeholder="Entrez votre nom">';
    echo '<input type="submit" value="Envoyer">';
    echo '</form>';
    
    if (isset($_GET['nom_test']) && !empty($_GET['nom_test'])) {
        echo '<div class="result">';
        echo "Bonjour " . htmlspecialchars($_GET['nom_test']) . "!";
        echo '</div>';
    }
    echo '</div>';

    // ===============================================
    // 9. GESTION D'ERREURS
    // ===============================================
    echo '<div class="section">';
    echo '<h2>9. GESTION D\'ERREURS</h2>';
    
    echo '<div class="code">';
    echo 'if (isset($variable)) {<br>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;// La variable existe<br>';
    echo '}<br><br>';
    
    echo 'if (!empty($chaine)) {<br>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;// La chaîne n\'est pas vide<br>';
    echo '}<br><br>';
    
    echo 'if (is_numeric($nombre)) {<br>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;// C\'est un nombre<br>';
    echo '}<br>';
    echo '</div>';
    
    $test_var = "123";
    echo '<div class="result">';
    echo "Variable \$test_var = \"$test_var\"<br>";
    echo "isset(): " . (isset($test_var) ? "Oui" : "Non") . "<br>";
    echo "empty(): " . (empty($test_var) ? "Oui" : "Non") . "<br>";
    echo "is_numeric(): " . (is_numeric($test_var) ? "Oui" : "Non") . "<br>";
    echo '</div>';
    echo '</div>';

    // ===============================================
    // 10. CONSEILS ET BONNES PRATIQUES
    // ===============================================
    echo '<div class="section">';
    echo '<h2>10. CONSEILS ET BONNES PRATIQUES</h2>';
    
    echo '<div class="code">';
    echo '// 1. Toujours fermer les balises PHP avec ?><br>';
    echo '// 2. Utiliser des noms de variables clairs<br>';
    echo '// 3. Indenter le code proprement<br>';
    echo '// 4. Valider les données utilisateur<br>';
    echo '// 5. Utiliser htmlspecialchars() pour l\'affichage<br>';
    echo '// 6. Commenter le code complexe<br>';
    echo '// 7. Utiliser isset() avant d\'accéder aux variables<br>';
    echo '</div>';
    echo '</div>';
    ?>

    <div class="section">
        <h2>🎯 RÉSUMÉ SYNTAXE PHP</h2>
        <div class="code">
            <strong>Balises PHP:</strong> &lt;?php ... ?&gt;<br>
            <strong>Variables:</strong> $nom = "valeur";<br>
            <strong>Affichage:</strong> echo "texte";<br>
            <strong>Concaténation:</strong> $a . $b<br>
            <strong>Conditions:</strong> if ($test) { ... } else { ... }<br>
            <strong>Boucles:</strong> for, while, foreach<br>
            <strong>Fonctions:</strong> function nom($param) { return $result; }<br>
            <strong>Tableaux:</strong> $array = [1, 2, 3] ou $array["key"] = "value"<br>
            <strong>Formulaires:</strong> $_GET, $_POST<br>
        </div>
    </div>

    <p><strong>🚀 Maintenant vous connaissez la syntaxe PHP de base ! Pratiquez avec des exercices simples.</strong></p>
</body>
</html>