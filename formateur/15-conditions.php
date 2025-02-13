<?php

/*
| Exercice 15 | Créez un fichier `15-conditions.php` qui affiche suivant un chiffre au hasard entre 0 et 10, vous affiche : Si il est de 0 à 3  : "{$chiffre} : Nul, étudie la prochaine fois", Si de 4 à 5 : "{$chiffre} : Peut mieux faire" , Si de 6 à 7 : "{$chiffre} : Bien", Sinon "{$chiffre} : Très bien" |
*/

$rand = mt_rand(0,10);


if($rand <= 3){
    echo "$rand : Nul, étudie la prochaine fois";
}elseif($rand <=5){
    echo "$rand : Peut mieux faire";
}elseif($rand <=7){
    echo "$rand : Bien";
}else{
    echo "$rand : Très bien";
}

