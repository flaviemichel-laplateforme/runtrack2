<?php
// Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
// submit. 
// Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
// session. 
// Afficher l’ensemble des prénoms.
// Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste.

// Démarrer la session
session_start();

// Vérifier si le bouton reset a été cliqué
if (isset($_POST['reset'])) {
    unset($_SESSION['prenoms']); // Réinitialiser la liste des prénoms
}

// Vérifier si le formulaire a été soumis
if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']); // Sécuriser l'entrée

    // Si le tableau n'existe pas encore dans la session, on le crée
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = [];
    }

    // Ajouter le prénom dans le tableau de session
    $_SESSION['prenoms'][] = $prenom;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des prénoms avec reset</title>
</head>

<body>
    <h1>Entrez votre prénom</h1>

    <!-- Formulaire pour ajouter un prénom -->
    <form method="post" action="">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <button type="submit">Envoyer</button>
    </form>

    <!-- Formulaire pour réinitialiser la liste -->
    <form method="post" action="" style="margin-top: 10px;">
        <button type="submit" name="reset">Reset</button>
    </form>

    <?php
    // Afficher tous les prénoms stockés dans la session
    if (isset($_SESSION['prenoms']) && !empty($_SESSION['prenoms'])) {
        echo "<h2>Liste des prénoms saisis :</h2>";
        echo "<ul>";
        foreach ($_SESSION['prenoms'] as $p) {
            echo "<li>" . $p . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Aucun prénom saisi pour le moment.</p>";
    }
    ?>
</body>

</html>