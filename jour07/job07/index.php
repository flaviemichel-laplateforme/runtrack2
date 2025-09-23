<?php
// Ouverture de la balise PHP pour écrire du code PHP

// ========== FONCTION GRAS ==========
// Fonction qui met en gras les mots commençant par une majuscule
function gras($str) {
    // Utilise une expression régulière pour trouver et remplacer
    // \b = limite de mot (word boundary)
    // ([A-Z][a-z]*) = capture un mot commençant par une majuscule suivi de minuscules
    // \b = fin de limite de mot
    // Remplace par <b>$1</b> où $1 est le mot capturé
    return preg_replace('/\b([A-Z][a-z]*)\b/', '<b>$1</b>', $str);
}

// ========== FONCTION CESAR ==========
// Fonction qui décale chaque caractère selon le décalage donné (par défaut 2)
function cesar($str, $decalage = 2) {
    // Initialise une chaîne vide pour stocker le résultat
    $result = '';
    
    // Parcourt chaque caractère de la chaîne d'entrée
    for ($i = 0; $i < strlen($str); $i++) {
        // Récupère le caractère actuel à la position $i
        $c = $str[$i];
        
        // Vérifie si le caractère est une lettre (a-z ou A-Z)
        if (ctype_alpha($c)) {
            // Détermine la base : 'A' (65) pour majuscules, 'a' (97) pour minuscules
            $base = ctype_upper($c) ? ord('A') : ord('a');
            
            // Calcul du décalage :
            // 1. ord($c) - $base : position dans l'alphabet (0-25)
            // 2. + $decalage : ajoute le décalage
            // 3. % 26 : assure que ça reste dans l'alphabet (z revient à a)
            // 4. + $base : remet dans la bonne casse (majuscule/minuscule)
            // 5. chr() : convertit le code ASCII en caractère
            $result .= chr((ord($c) - $base + $decalage) % 26 + $base);
        } else {
            // Si ce n'est pas une lettre (espace, ponctuation...), on la garde telle quelle
            $result .= $c;
        }
    }
    // Retourne le texte transformé
    return $result;
}

// ========== FONCTION PLATEFORME ==========
// Fonction qui ajoute un underscore aux mots finissant par "me"
function plateforme($str) {
    // Expression régulière qui trouve les mots se terminant par "me"
    // \b = limite de mot
    // (\w*me) = capture n'importe quel mot finissant par "me"
    // \b = fin de limite de mot
    // Remplace par $1_ (le mot capturé + underscore)
    return preg_replace('/\b(\w*me)\b/', '$1_', $str);
}

// Fermeture de la balise PHP
?>

<!DOCTYPE html> <!-- Déclaration du type de document HTML5 -->
<html lang="fr"> <!-- Balise racine HTML avec langue française -->
<head> <!-- En-tête du document (métadonnées) -->
    <!-- Définit l'encodage des caractères en UTF-8 pour supporter les accents -->
    <meta charset="UTF-8">
    <!-- Définit le viewport pour le responsive design (adaptation mobile/tablette) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titre qui apparaît dans l'onglet du navigateur -->
    <title>Formulaire</title>
</head> <!-- Fin de l'en-tête -->
<body> <!-- Début du corps de la page visible -->
    <!-- Titre principal de la page (niveau 1) -->
    <h1>Formulaire de transformation de texte</h1>
    
    <!-- Formulaire qui envoie les données via POST vers la même page -->
    <form method="POST" action="">
        <!-- Première section : champ de saisie du texte -->
        <div>
            <!-- Label associé au champ de saisie (for="str" lie au id="str") -->
            <label for="str">Texte à transformer</label>
            <!-- Champ de saisie de type texte avec :
                 - id="str" : identifiant unique
                 - name="str" : nom utilisé côté serveur ($_POST['str'])
                 - placeholder : texte d'aide qui disparaît à la saisie
                 - required : champ obligatoire (validation HTML5) -->
            <input type="text" id="str" name="str" placeholder="Entrez votre texte ici" required>
        </div>

        <!-- Deuxième section : liste déroulante pour choisir la fonction -->
        <div>
            <!-- Label pour la liste déroulante -->
            <label for="fonction">Fonctions</label>
            <!-- Liste déroulante avec validation obligatoire -->
            <select id="fonction" name="fonction" required>
                <!-- Option par défaut vide (force l'utilisateur à choisir) -->
                <option value="">-- Choisissez une fonction --</option>
                <!-- Option pour la fonction gras -->
                <option value="gras">Gras</option>
                <!-- Option pour la fonction césar -->
                <option value="cesar">César (décalage de caractères)</option>
                <!-- Option pour la fonction plateforme -->
                <option value="plateforme">Plateforme (ajouter _ aux mots en "me")</option>
            </select>
        </div>

        <!-- Troisième section : bouton de validation -->
        <div>
            <!-- Bouton de soumission du formulaire -->
            <button type="submit">Transformer le texte</button>
        </div>
    </form> <!-- Fin du formulaire -->

    <?php
    // ========== TRAITEMENT DU FORMULAIRE ==========
    // Ouverture de la balise PHP pour traiter les données reçues
    
    // Vérifie 3 conditions avant de traiter :
    // 1. $_SERVER['REQUEST_METHOD'] === 'POST' : le formulaire a été soumis via POST
    // 2. isset($_POST['str']) : le champ texte existe et n'est pas null
    // 3. isset($_POST['fonction']) : le champ fonction existe et n'est pas null
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['str']) && isset($_POST['fonction'])) {
        
        // Récupère la valeur du champ texte depuis le formulaire
        $texte = $_POST['str'];
        // Récupère la fonction choisie depuis la liste déroulante
        $fonction = $_POST['fonction'];
        
        // Affiche le titre de la section résultat
        echo "<h2>Résultat :</h2>";
        // Affiche le texte original avec protection XSS (htmlspecialchars)
        // htmlspecialchars() convertit les caractères spéciaux (<, >, &, ") en entités HTML
        echo "<p><strong>Texte original :</strong> " . htmlspecialchars($texte) . "</p>";
        
        // Structure switch pour traiter selon la fonction choisie
        switch ($fonction) {
            // Si l'utilisateur a choisi "gras"
            case 'gras':
                // Appelle la fonction gras() et affiche le résultat
                // Pas de htmlspecialchars ici car on veut garder les balises <b>
                echo "<p><strong>Résultat (gras) :</strong> " . gras($texte) . "</p>";
                break; // Sort du switch
                
            // Si l'utilisateur a choisi "cesar"
            case 'cesar':
                // Appelle la fonction cesar() avec protection XSS
                // htmlspecialchars nécessaire car le résultat peut contenir des caractères spéciaux
                echo "<p><strong>Résultat (césar) :</strong> " . htmlspecialchars(cesar($texte)) . "</p>";
                break; // Sort du switch
                
            // Si l'utilisateur a choisi "plateforme"
            case 'plateforme':
                // Appelle la fonction plateforme() avec protection XSS
                echo "<p><strong>Résultat (plateforme) :</strong> " . htmlspecialchars(plateforme($texte)) . "</p>";
                break; // Sort du switch
                
            // Si aucune fonction valide n'a été sélectionnée (cas par défaut)
            default:
                echo "<p>Veuillez choisir une fonction.</p>";
                break; // Sort du switch
        } // Fin du switch
    } // Fin de la condition if
    // Fermeture de la balise PHP
    ?>
    
</body> <!-- Fin du corps de la page -->
</html> <!-- Fin du document HTML -->