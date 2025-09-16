<?php
/* triangle de 5 de hauteur */

echo "<pre>";
$hauteur = 5; // hauteur du triangle

for ($i = 1; $i <= $hauteur; $i++) {
    // Espaces pour centrer
    for ($j = 0; $j < $hauteur - $i; $j++) {
        echo " ";
    }

    if ($i === 1) {
        // Sommet du triangle
        echo "/\\";
    } elseif ($i === $hauteur) {
        // Base : un /, des underscores, puis un \
        echo "/";
        for ($k = 0; $k < ($i - 1) * 2; $k++) {
            echo "_";
        }
        echo "\\";
    } else {
        // Milieu : un /, des espaces vides, puis un \
        echo "/";
        for ($k = 0; $k < ($i - 1) * 2; $k++) {
            echo " ";
        }
        echo "\\";
    }

    echo "\n";
}
echo "</pre>";
?>

