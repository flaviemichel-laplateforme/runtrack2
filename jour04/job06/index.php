<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 04 - Job 06</title>

</head>

<body>
    <div>

        <form action="" method="get">
            <label for="nombre">Nombre</label>
            <input type="number" id="nombre" name="nombre">
            <input type="submit" value="Vérifier">
        </form>

        <?php

        if (isset($_GET["nombre"])) {
            $nombre = $_GET["nombre"];

            if ($nombre % 2 === 0) { /* - Utiliser l'opérateur modulo (%) pour tester si le nombre est divisible par 2 */
                echo "Nombre pair";    /* - Si $nombre % 2 === 0, c'est pair */
            } else {  /* - Sinon, c'est impair */
                echo "Nombre impair";
            }
        }

        ?>
    </div>
</body>

</html>