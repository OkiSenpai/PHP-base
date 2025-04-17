<?php

// Crée un fichier nommé 20-ma-fonction.php dans laquelle tu crée une fonction nommée estPair qui vérifie si un entier est pair, puis dans le même fichier testez la fonction !

function estPair()
{
    $randomNum = rand(1, 100);
    if ($randomNum % 2 === 0) {
        echo $randomNum . " est pair";
    } else {
        echo $randomNum . " est inpair";
    }
}

estPair();



