<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 04 - Job 07 - Dessiner une maison</title>
</head>
<body>
    <div>
        <h1>Générateur de maison</h1>
        
        <!-- ÉTAPE 1: Créer le formulaire -->
        <!-- MÉTHODE: -->
        <!-- 1. Balise <form action="" method="get"> -->
        <!-- 2. <label for="largeur">Largeur :</label> -->
        <!-- 3. <input type="number" id="largeur" name="largeur" required> -->
        <!-- 4. Répéter pour "hauteur" -->
        <!-- 5. <input type="submit" value="Dessiner"> -->
        <!-- 6. </form> -->
        <form action="" method="get">
            <input placeholder="largeur" type="text" name="largeur">
            <input placeholder="hauteur" type="text" name="hauteur">
            <input type="submit">

        </form>
        <pre>

       <!-- /*  ÉTAPE 2: Ajouter les balises <pre> pour préserver les espaces*/ -->
        <!-- <pre> -->
        <?php
        /* ÉTAPE 3: Vérifier si les données ont été envoyées */
        /* MÉTHODE: */
        /* if (isset($_GET['largeur']) && isset($_GET['hauteur'])) { */
        /*     // Code à exécuter si les deux champs existent */
        /* } */

        if (isset($_GET ['largeur'] ) && (isset($_GET []) ))

        /* ÉTAPE 4: Récupérer et valider les valeurs */
        /* MÉTHODE: */
        /* $largeur = $_GET['largeur']; */
        /* $hauteur = $_GET['hauteur']; */
        /* if ($largeur > 0 && $hauteur > 0) { */
        /*     // Continuer seulement si valeurs valides */
        /* } */
         
            // Dessiner le toit
            $i = 1;
            while ($i <= $hauteur) {}
                // Espaces avant le "/"
                $j = 0;
                while ($j < ($largeur - $i)) {
                    echo " ";
                    $j++;
                }
                
                // Afficher "/"
                echo "/";
            }
          

        /* ÉTAPE 5: Dessiner le toit (triangle) */
        /* MÉTHODE DÉTAILLÉE: */
        /* for ($i = 1; $i <= $hauteur; $i++) { */
        /*     // 5.1: Calculer espaces avant "/" */
        /*     $espaces_avant = $hauteur - $i; */
        /*     for ($j = 0; $j < $espaces_avant; $j++) { */
        /*         echo " "; */
        /*     } */
        /*     */
        /*     // 5.2: Afficher "/" */
        /*     echo "/"; */
        /*     */
        /*     // 5.3: Calculer espaces entre "/" et "\" */
        /*     $espaces_milieu = ($i - 1) * 2; */
        /*     for ($k = 0; $k < $espaces_milieu; $k++) { */
        /*         echo " "; */
        /*     } */
        /*     */
        /*     // 5.4: Afficher "\" */
        /*     echo "\\"; */
        /*     */
        /*     // 5.5: Retour à la ligne */
        /*     echo "\n"; */
        /* } */
       
        // for ($i = 1; $i <= $hauteur; $i++) {


        
        /* ÉTAPE 6: Dessiner les murs (rectangle) */
        /* MÉTHODE DÉTAILLÉE: */
        /* for ($j = 1; $j <= $hauteur; $j++) { */
        /*     // 6.1: Afficher "|" à gauche */
        /*     echo "|"; */
        /*     */
        /*     // 6.2: Vérifier si première ou dernière ligne */
        /*     if ($j === 1 || $j === $hauteur) { */
        /*         // 6.3: Ligne avec underscores */
        /*         $largeur_mur = $largeur * 2 - 2; */
        /*         for ($k = 0; $k < $largeur_mur; $k++) { */
        /*             echo "_"; */
        /*         } */
        /*     } else { */
        /*         // 6.4: Ligne avec espaces */
        /*         $largeur_mur = $largeur * 2 - 2; */
        /*         for ($k = 0; $k < $largeur_mur; $k++) { */
        /*             echo " "; */
        /*         } */
        /*     } */
        /*     */
        /*     // 6.5: Afficher "|" à droite + retour ligne */
        /*     echo "|\n"; */
        /* } */
        
        /* ÉTAPE 7: Alternative avec boucles WHILE (sans fonctions système) */
        /* MÉTHODE WHILE: */
        /* $i = 1; */
        /* while ($i <= $hauteur) { */
        /*     $j = 0; */
        /*     while ($j < $espaces_avant) { */
        /*         echo " "; */
        /*         $j++; */
        /*     } */
        /*     $i++; */
        /* } */
        
        ?>
        </pre>
    </div>
</body>
</html>
