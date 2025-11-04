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

        if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
            // Récupérer et valider les valeurs
            $largeur = $_GET['largeur'];
            $hauteur = $_GET['hauteur'];

            if ($largeur > 0 && $hauteur > 0) {

                // DESSINER LE TOIT
                $i = 1;
                while ($i <= $hauteur) {
                    // Espaces avant le "/"
                    $j = 0;
                    while ($j < ($hauteur - $i)) {
                        echo " ";
                        $j++;
                    }

                    // Afficher "/"
                    echo "/";

                    // Espaces entre "/" et "\"
                    $k = 0;
                    while ($k < (($i - 1) * 2)) {
                        echo " ";
                        $k++;
                    }

                    // Afficher "\"
                    echo "\\";

                    // Retour à la ligne
                    echo "\n";
                    $i++;
                }

                // DESSINER LES MURS
                $m = 1;
                while ($m <= $hauteur) {
                    echo "|";

                    // Première et dernière ligne : underscores
                    if ($m === 1 || $m === $hauteur) {
                        $n = 0;
                        while ($n < ($largeur * 3.5 - 2)) {
                            echo "_";
                            $n++;
                        }
                    } else {
                        // Lignes du milieu : espaces
                        $n = 0;
                        while ($n < ($largeur * 3.5 - 2)) {
                            echo " ";
                            $n++;
                        }
                    }

                    echo "|\n";
                    $m++;
                }
            } else {
                echo "Veuillez entrer des valeurs positives.";
            }
        }

        ?>
        </pre>
    </div>
</body>

</html>