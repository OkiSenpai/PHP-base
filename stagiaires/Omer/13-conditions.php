<?php
//Créez un fichier 13-conditions.php qui affiche suivant un chiffre au hasard entre 0 et 10,
// vous affiche : 
//Si il est de 0 à 3 : EXACTEMENT : "{chiffre} : Nul, étudie la prochaine fois",
// Si de 4 à 5 : "{chiffre} : Peut mieux faire" , 
//Si de 6 à 7 : "{chiffre} : Bien", 
//Sinon "{chiffre} : Très bien"



$chiffre = rand(1, 10);
if ($chiffre >= 6 && $chiffre <= 7) {
    echo $chiffre . " : Bien";
} elseif ($chiffre >= 4 && $chiffre <= 5) {
    echo $chiffre . " : Peut mieux faire";

} elseif ($chiffre >= 0 && $chiffre <= 3) {
    echo $chiffre . " : Nul, étudie la prochaine fois";
} else {
    echo $chiffre . " : Très bien";
}

?>