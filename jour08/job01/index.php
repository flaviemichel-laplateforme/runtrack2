<?php
// Créez une variable de session nommée “nbvisites”. 
// A chaque fois que la page est visitée, ajoutez 1. 
// Afficher le contenu de cette variable.
// Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.

session_start();

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}

if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}

$_SESSION['nbvisites']++;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de Visites - Session</title>
</head>

<body>
    <div>
        <div><?php echo $_SESSION['nbvisites']; ?></div>

        <form action="" method="post">
            <button type="submit" name="reset">RESET</button>
        </form>
    </div>

</body>

</html>