<?php

$randomNum = mt_rand(0, 10);
switch ($randomNum) {
    case ($randomNum >= 0 && $randomNum <= 3):
        echo "$randomNum : Nul, étudie la prochaine fois";
        break;
    case ($randomNum >= 4 && $randomNum <= 5):
        echo "$randomNum : Peut mieux faire";
        break;
    case ($randomNum >= 6 && $randomNum <= 7):
        echo "$randomNum : Bien";
        break;
    default:
        echo "Tres bien";
        break;
}
