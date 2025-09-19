
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 04 - Job 01</title>
 
</head>
<body>
    <div class="container">
        <h1>Formulaire </h1>
        <form action="" method="get">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" value="Envoyer">
        </form>
        <?php
        // Vérifier si des données GET existent avec isset()
        if (isset($_GET['name']) || isset($_GET['email'])) {
            // Compter manuellement les arguments GET
            $count = 0;
            if (isset($_GET['name'])) $count++;
            if (isset($_GET['email'])) $count++;
            
            echo "Le nombre d'arguments GET envoyés est: " . $count . "<br>";
            echo "Données reçues :<br>";
            
            // Afficher chaque donnée avec isset()
            if (isset($_GET['name'])) {
                echo "name : " . $_GET['name'] . "<br>";
            }
            if (isset($_GET['email'])) {
                echo "email : " . $_GET['email'] . "<br>";
            }
        } else {
            echo "Aucune donnée GET reçue. Remplissez le formulaire ci-dessus.";
        }
        ?>
        
    </div>
</body>
</html>
