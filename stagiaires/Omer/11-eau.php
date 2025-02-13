<?php


// Créez un fichier 11-eau.php qui affiche suivant une température allant de -100 à 200 °,
// l'état de l'eau (solide en dessous de 0 compris) (liquide entre 1 et 99°) (gazeux à partir de 100°) :

// si j'ai bien compris ça sont des exemple?
// L'eau est solide à -7°
// L'eau est liquide à 33°
// L'eau est gazeuse à 105°


$temerature = rand(-100, 200);


if ($temerature <= 0) {
    echo "L'eau est solide  à  $temerature";
} else if ($temerature >= 100) {
    echo "L'eau est gazeux  à $temerature";
} else {
    echo "L'eau est liquide  à $temerature";
}
?>