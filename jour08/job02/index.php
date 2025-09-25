<?php
// La syntaxe de base de setcookie() est la suivante :
// setcookie(name, value, expire, path, domain, secure, httponly). 

// Créez un cookie nommé "nbvisites". A chaque fois que la page est visitée, ajoutez 1.
// Afficher le contenu du cookie.
// Ajoutez un bouton nommé "reset" qui permet de réinitialiser ce compteur.

// Gestion du reset avec DESTRUCTION du cookie
if (isset($_POST['reset'])) {
    // MÉTHODE 1: Détruire complètement le cookie (date d'expiration passée)
    setcookie("nbvisites", "", time() - 3600, "/");
    $nbVisites = 0;
    $cookieDetruit = true;
   
} else {
    $cookieDetruit = false;
    
    // Vérifier si le cookie existe
    if (isset($_COOKIE['nbvisites'])) {
        // Incrémenter la valeur du cookie
        $nbVisites = $_COOKIE['nbvisites'] + 1;
    } else {
        // Si le cookie n'existe pas, initialiser à 1
        $nbVisites = 1;
    }
    
    // Créer/mettre à jour le cookie (valable 1 an)
    setcookie("nbvisites", $nbVisites, time() + 365*24*60*60, "/");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur avec Destruction de Cookie</title>
</head>
<body>
    <h1>Compteur avec Destruction de Cookie</h1>
    
    <p>Nombre de visites : <?php echo $nbVisites; ?></p>
    
    <form method="post">
        <button type="submit" name="reset">RESET (Détruire Cookie)</button>
    </form>
    

</body>
</html>