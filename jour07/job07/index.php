<?php
// Ouverture de la balise PHP pour écrire du code PHP

// ========== FONCTION GRAS  ==========
function gras($str) {
    $result = '';
    $i = 0;
    $len = strlen($str);
    
    while ($i < $len) {
        if (($str[$i] >= 'A' && $str[$i] <= 'Z')) {
            // Début d'un mot avec majuscule
            $mot = '';
            while ($i < $len && (($str[$i] >= 'A' && $str[$i] <= 'Z') || ($str[$i] >= 'a' && $str[$i] <= 'z'))) {
                $mot .= $str[$i++];
            }
            $result .= '<b>' . $mot . '</b>';
        } else if (($str[$i] >= 'a' && $str[$i] <= 'z')) {
            // Mot commençant par minuscule
            while ($i < $len && (($str[$i] >= 'A' && $str[$i] <= 'Z') || ($str[$i] >= 'a' && $str[$i] <= 'z'))) {
                $result .= $str[$i++];
            }
        } else {
            $result .= $str[$i++];
        }
    }
    return $result;
}

// ========== FONCTION CESAR OPTIMISÉE ==========
function cesar($str, $decalage = 2) {
    $result = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $c = $str[$i];
        if ($c >= 'a' && $c <= 'z') {
            $result .= chr((ord($c) - ord('a') + $decalage) % 26 + ord('a'));
        } else if ($c >= 'A' && $c <= 'Z') {
            $result .= chr((ord($c) - ord('A') + $decalage) % 26 + ord('A'));
        } else {
            $result .= $c;
        }
    }
    return $result;
}

// ========== FONCTION PLATEFORME OPTIMISÉE ==========
function plateforme($str) {
    $result = '';
    $i = 0;
    $len = strlen($str);
    
    while ($i < $len) {
        if (($str[$i] >= 'A' && $str[$i] <= 'Z') || ($str[$i] >= 'a' && $str[$i] <= 'z')) {
            $mot = '';
            while ($i < $len && (($str[$i] >= 'A' && $str[$i] <= 'Z') || ($str[$i] >= 'a' && $str[$i] <= 'z'))) {
                $mot .= $str[$i++];
            }
            // Vérifie si se termine par "me" (case insensitive)
            $len_mot = strlen($mot);
            if ($len_mot >= 2 && (substr($mot, -2) === 'me' || substr($mot, -2) === 'Me' || 
                                  substr($mot, -2) === 'mE' || substr($mot, -2) === 'ME')) {
                $result .= $mot . '_';
            } else {
                $result .= $mot;
            }
        } else {
            $result .= $str[$i++];
        }
    }
    return $result;
}

// ========== FONCTION HTMLSPECIALCHARS OPTIMISÉE ==========
function htmlspecialchars_manuel($str) {
    $result = '';
    $replacements = ['<' => '&lt;', '>' => '&gt;', '&' => '&amp;', '"' => '&quot;', "'" => '&#039;'];
    
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        $result .= isset($replacements[$char]) ? $replacements[$char] : $char;
    }
    return $result;
}

// Fermeture de la balise PHP
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <h1>Formulaire de transformation de texte</h1>
    
    <form method="POST" action="">
        <div>
            <label for="str">Texte à transformer</label>
            <input type="text" id="str" name="str" placeholder="Entrez votre texte ici" required>
        </div>

        <div>
            <label for="fonction">Fonctions</label>
            <select id="fonction" name="fonction" required>
                <option value="">-- Choisissez une fonction --</option>
                <option value="gras">Gras</option>
                <option value="cesar">César (décalage de caractères)</option>
                <option value="plateforme">Plateforme (ajouter _ aux mots en "me")</option>
            </select>
        </div>

        <div>
            <button type="submit">Transformer le texte</button>
        </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['str']) && isset($_POST['fonction'])) {
        $texte = $_POST['str'];
        $fonction = $_POST['fonction'];
        
        echo "<h2>Résultat :</h2>";
        echo "<p><strong>Texte original :</strong> " . htmlspecialchars_manuel($texte) . "</p>";
        
        switch ($fonction) {
            case 'gras':
                echo "<p><strong>Résultat (gras) :</strong> " . gras($texte) . "</p>";
                break;
            case 'cesar':
                echo "<p><strong>Résultat (césar) :</strong> " . htmlspecialchars_manuel(cesar($texte)) . "</p>";
                break;
            case 'plateforme':
                echo "<p><strong>Résultat (plateforme) :</strong> " . htmlspecialchars_manuel(plateforme($texte)) . "</p>";
                break;
            default:
                echo "<p>Veuillez choisir une fonction.</p>";
                break;
        }
    }
    ?>
    
</body>
</html>