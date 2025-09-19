<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jour 04 - Job 06</title>
 
    </head>
<body>
    <div>
        <!-- ÉTAPE 1: Corriger le formulaire -->
        <!-- - Corriger l'attribut "metod" en "method" -->
        <!-- - Changer le type de l'input de "nombre" à "text" ou "number" -->
        <form action="" method="get">
            <label for="nombre">Nombre</label>
            <input type="number" id="nombre" name="nombre">
            <input type="submit" value="Vérifier">
        </form>

        <?php
        /* ÉTAPE 2: Vérifier si des données GET ont été envoyées */
        /* - Utiliser isset() pour vérifier si le champ 'nombre' existe dans $_GET */

       if (isset($_GET["nombre"])){
            $nombre = $_GET["nombre"];/* ÉTAPE 3: Récupérer la valeur */
         /* - Stocker $_GET['nombre'] dans une variable */
        
        /* ÉTAPE 4: Vérifier si c'est pair ou impair */
       if ($nombre % 2 === 0 ) { /* - Utiliser l'opérateur modulo (%) pour tester si le nombre est divisible par 2 */
        echo "Nombre pair";    /* - Si $nombre % 2 === 0, c'est pair */
       } else {  /* - Sinon, c'est impair */
        echo "Nombre impair";
       }
        }
        
       
    
      
        
        /* ÉTAPE 5: Afficher le résultat */
        /* - echo "Nombre pair" ou echo "Nombre impair" selon le cas */
        
        ?>
    </div>
</body>
</html>