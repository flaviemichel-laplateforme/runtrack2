<?php
/*Job 05
Créer un formulaire qui contient une liste déroulante nommée "style" et un bouton
submit. 
La liste déroulante doit proposer au moins "style1", "style2" et "style3. 
Créer 3 fichiers css nommés "style1.css", "style2.css" et "style3.css". 
Chaque style doit avoir
des effets sur le design du formulaire, la couleur de background, la police d'écriture...
Lorsque l'on valide le formulaire, le style sélectionné doit être inclus et donc le visuel
doit changer. */

// Récupérer le style sélectionné
$styleChoisi = "style1"; // Style par défaut
if (isset($_POST['style'])) {
    $styleSelectionne = $_POST['style'];
    if ($styleSelectionne === "Style1") {
        $styleChoisi = "style1";
    } elseif ($styleSelectionne === "Style2") {
        $styleChoisi = "style2";
    } elseif ($styleSelectionne === "Style3") {
        $styleChoisi = "style3";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Formulaires</title>
    <!-- LE LIEN CSS DYNAMIQUE SE MET ICI -->
    <link rel="stylesheet" type="text/css" href="<?php echo $styleChoisi; ?>.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="container">
        <h1>Formulaire de contact</h1>

        <form action="" method="post" class="style-form">
            <label for="style">Choisir son style:</label>
            <select id="style" name="style" required>
                <option value="Style1" <?php echo (isset($_POST['style']) && $_POST['style'] === 'Style1') ? 'selected' : ''; ?>>Style1 - Bleu Moderne</option>
                <option value="Style2" <?php echo (isset($_POST['style']) && $_POST['style'] === 'Style2') ? 'selected' : ''; ?>>Style2 - Vert Nature</option>
                <option value="Style3" <?php echo (isset($_POST['style']) && $_POST['style'] === 'Style3') ? 'selected' : ''; ?>>Style3 - Sombre Orange</option>
            </select>
            <input type="submit" value="Changer de style" class="btn-submit">
        </form>

        <div class="info">
            <p>Style actuel : <strong><?php echo $styleChoisi; ?></strong></p>
        </div>
    </div>
</body>

</html>