<?php

/*
| Exercice 15b | Créez un fichier `15b-switch.php` qui affiche suivant un chiffre au hasard entre 0 et 10.

En utilisant switch

vous affiche : Si il est de 0 à 3  : "{$chiffre} : Nul, étudie la prochaine fois", Si de 4 à 5 : "{$chiffre} : Peut mieux faire" , Si de 6 à 7 : "{$chiffre} : Bien", Sinon "{$chiffre} : Très bien" |
*/

$rand = mt_rand(0,10);

switch($rand){
    case 0:
    case 1:
    case 2:
    case 3:
        echo "$rand : Nul, étudie la prochaine fois";
        break;
    case 4:
    case 5:
        echo "$rand : Peut mieux faire";
        break;
    case 6:
    case 7:
        echo "$rand : Bien";
        break;
    default:
        echo "$rand : Très bien";
}