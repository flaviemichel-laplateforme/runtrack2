<?php
// Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
// submit. 
// Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
// session. 
// Afficher l’ensemble des prénoms.
// Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste.

session_start();

if (isset($_POST["prenom"])){
    $prenom = htmlspecialchars($_POST["prenom"]);
    $_SESSION["prenom"]= $prenom;{
        $_SESSION['prenoms'][] = $prenom;
    }
}

?>








<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <h1>Formulaire</h1>

    <form action="" method="post">
        <label  for="prenom">Prénom</label>
        <input  type="text" name="prenom">
        <button type="submit">Envoyer</button>
    </form>

    <?php
    if (isset($_SESSION["prenom"] )){
          echo  $_SESSION['prenom'];
    }

        
    
?>
    
    
    


</body>
</html>