

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 04 - Job 05</title>
 
</head>
<body>
    <div>
        <h1>Formulaire de connexion</h1>
        <form action="" method="post">
            <label for="username">Identifiant :</label>
            <input type="text" id="username" name="username" required>*

            <label for="password">Mot de passe :</label>
            <input type="text" id="password" name="password" required>

            <input type="submit" value="Se connecter">
        </form>
        <?php
        // Vérifier si les données ont été envoyées
        if (isset($_POST['username']) && isset($_POST['password'])) {
            
            // Récupérer les valeurs des champs
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            // Vérifier les identifiants (attention à la casse)
            if ($username === 'John' && $password === 'Rambo') {
                echo "C'est pas ma guerre";
            } else {
                echo "Votre pire cauchemar";
            }
        }
        ?>

        </div>

        <div>
        
    </div>
</body>
</html>
