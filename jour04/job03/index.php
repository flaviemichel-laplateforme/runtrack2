<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 04 - Job 03</title>

</head>

<body>
    <div>
        <h1>Formulaire </h1>
        <form action="" method="post">
            <label for="nom">NOM : </label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom : </label>
            <input type="text" id="prenom" name="prenom" required>

            <input type="submit" value="Envoyer">
        </form>
        <?php
        // === TRAITEMENT DES DONNÉES POST ===

        // Vérifier si des données POST ont été envoyées
        // On utilise isset() pour vérifier l'existence des champs 'nom' et 'prenom'
        if (isset($_POST['nom']) && isset($_POST['prenom'])) {

            // Récupérer les valeurs des champs dans des variables
            $names = $_POST['nom'];
            $prenoms = $_POST['prenom'];

            // Vérifier que les champs ne sont pas vides
            if ($names !== "" && $prenoms !== "") {

                // === COMPTAGE MANUEL DES ARGUMENTS POST ===
                // On compte manuellement sans utiliser count() ou autres fonctions
                $count = 0;

                // Vérifier chaque champ individuellement et incrémenter le compteur
                if (isset($_POST['nom'])) {
                    $count++; // +1 pour le champ 'nom'
                }
                if (isset($_POST['prenom'])) {
                    $count++; // +1 pour le champ 'prenom'
                }

                // Afficher le résultat du comptage
                echo "Le nombre d'arguments POST envoyés est: " . $count . "<br>";
            } else {
                // Message si les champs sont vides
                echo "Veuillez remplir tous les champs requis.";
            }
        } else {
            // Message si aucune donnée POST n'a été envoyée
            echo "Aucune donnée POST reçue. Remplissez le formulaire ci-dessus.";
        }
        ?>
    </div>
</body>

</html>