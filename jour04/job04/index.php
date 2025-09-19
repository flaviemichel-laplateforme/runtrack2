
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 04 - Job 04</title>
 
</head>
<body>
    <div class="container">
        <h1>Formulaire </h1>
        <form action="" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>*



            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <input type="submit" value="Envoyer">
        </form>
        <?php
        // Vérifier si des données POST existent avec isset() seulement
        if (isset($_POST['nom']) && isset($_POST['prenom'])) {
            // Compter manuellement les arguments POST
            $count = 0;
            if (isset($_POST['nom'])) $count++;
            if (isset($_POST['prenom'])) $count++;

            echo "Le nombre d'arguments POST envoyés est: " . $count . "<br>";
            echo "Données reçues :<br>";
            
            // Afficher chaque donnée avec isset()
            if (isset($_POST['nom'])) {
                echo "Nom : " . $_POST['nom'] . "<br>";
            }
            if (isset($_POST['prenom'])) {
                echo "Prénom : " . $_POST['prenom'] . "<br>";
            }
        } else {
            echo "Aucune donnée POST reçue. Remplissez le formulaire ci-dessus.";
        }

  
        ?>
        </div>

        <div>
        <table>
            <H2>TABLEAU</H2>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
           
            <?php
            // Afficher les données dans un tableau HTML sans fonctions système
            if (isset($_POST['nom'])) {
                echo "<tr><td>Nom</td><td>" . $_POST['nom'] . "</td></tr>";
            }
            if (isset($_POST['prenom'])) {
                echo "<tr><td>Prénom</td><td>" . $_POST['prenom'] . "</td></tr>";
            }
           
            ?> 
            <style>
                table, th, td {
                    border: 1px solid black;
                    border-collapse: collapse;
                }
                th, td {
                    padding: 10px;
                }
                th {
                    background-color: #f2f2f2;
                }
                
            </style>
        </table>
    </div>
</body>
</html>
