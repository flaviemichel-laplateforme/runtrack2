<?php
/* triangle de 5 de hauteur */

echo "<pre>";
$hauteur = 5; // hauteur du triangle

for ($i = 1; $i <= $hauteur; $i++) {
    // Espaces pour centrer
    echo str_repeat(" ", $hauteur - $i);

    if ($i === 1) {
        // Sommet du triangle
        echo "/\\";
    } elseif ($i === $hauteur) {
        // Base : un /, des underscores, puis un \
        echo "/" . str_repeat("_", ($i - 1) * 2) . "\\";
    } else {
        // Milieu : un /, des espaces vides, puis un \
        echo "/" . str_repeat(" ", ($i - 1) * 2) . "\\";
    }

    echo "\n";
}
echo "</pre>";
?>

