
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 04 - Job 02</title>
 
</head>
<body>
    <div class="container">
        <h1>Formulaire </h1>
        <form action="" method="get">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <input type="submit" value="Envoyer">
        </form>
        <?php
        // Vérifier si des données GET existent avec isset() seulement
        if (isset($_GET['name']) || isset($_GET['prenom'])) {
            // Compter manuellement les arguments GET
            $count = 0;
            if (isset($_GET['name'])) $count++;
            if (isset($_GET['prenom'])) $count++;

            echo "Le nombre d'arguments GET envoyés est: " . $count . "<br>";
            echo "Données reçues :<br>";
            
            // Afficher chaque donnée avec isset()
            if (isset($_GET['name'])) {
                echo "Nom : " . $_GET['name'] . "<br>";
            }
            if (isset($_GET['prenom'])) {
                echo "Prénom : " . $_GET['prenom'] . "<br>";
            }
        } else {
            echo "Aucune donnée GET reçue. Remplissez le formulaire ci-dessus.";
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
            if (isset($_GET['name'])) {
                echo "<tr><td>Nom</td><td>" . $_GET['name'] . "</td></tr>";
            }
            if (isset($_GET['prenom'])) {
                echo "<tr><td>Prénom</td><td>" . $_GET['prenom'] . "</td></tr>";
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
