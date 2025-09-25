<?php
// ; ; Créez un formulaire de connexion qui contient un input de type de text nommé
// ; ; “prenom” et un bouton submit nommé “connexion”. 
// ; Lorsque l’on valide le formulaire, le
// ; ; prénom est ajouté dans un cookie. Si un utilisateur a déjà entré son prénom, n'affichez
// ; ; plus le formulaire de connexion. A la place, écrivez “Bonjour prenom !” et ajouter un
// ; ; bouton “Déconnexion” nommé “deco”. Lorsque l’utilisateur se déconnecte, il faut à
// ; ; nouveau afficher le formulaire de connexion.

if (isset($_POST['connexion'])) {
    setcookie("prenom", $_POST['prenom'], time() + 365 * 24 * 60 * 60, "/");
}

if (isset($_COOKIE["prenom"])) {
    echo "Bonjour " . htmlspecialchars($_COOKIE["prenom"]) . " !";
    echo '<form method="post" action="">
            <input type="submit" name="deco" value="Déconnexion">
          </form>';
}

if (isset($_POST['deco'])) {
    setcookie("prenom", "", time() - 3600, "/");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion avec Cookie</title>
</head>

<body>
    <?php if (!isset($_COOKIE["prenom"])): ?>
        <form method="post" action="">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>

</html>