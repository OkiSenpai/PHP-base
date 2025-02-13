\\affiche suivant un chiffre au hasard entre 0 et 10, vous affiche : Si il est de 0 à 3 : "{$chiffre} : Nul, étudie la prochaine fois", Si de 4 à 5 : "{$chiffre} : Peut mieux faire" , Si de 6 à 7 : "{$chiffre} : Bien", Sinon "{$chiffre} : Très bien"
<?php
$chiffre = rand(0,10);
if ($chiffre >= 0 && $chiffre <= 3) {
    echo "{$chiffre} : Nul";
} elseif ($chiffre >= 4 && $chiffre <=5) {
    echo "{$chiffre} : Peut mieux faire";
} elseif ($chiffre >= 6 && $chiffre <=7) {
    echo "{$chiffre} : Bien";
} else {
    echo "{$chiffre} : Très bien";

}



?>