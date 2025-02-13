<?php

$randomNum = mt_rand(0,10);

if ($randomNum >= 0 && $randomNum <= 3) {
    echo "$randomNum : Nul, étudie la prochaine fois";
} elseif ($randomNum >= 4 && $randomNum <= 5) {
    echo "$randomNum : Peut mieux faire";
} elseif ($randomNum >= 6 && $randomNum <= 7) {
    echo "$randomNum : Bien";
} else {
    echo "Tres bien";
}