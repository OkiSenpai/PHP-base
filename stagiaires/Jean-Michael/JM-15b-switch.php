<?php

$a = mt_rand(0,10);
switch($a){
    case $a <= 3 : echo "$a : Nul, étudie la prochaine fois"; break;
    case $a <= 5 : echo "$a : Peut mieux faire"; break;
    case $a <= 7 : echo "$a : Bien"; break;
    default : echo "$a : Très bien";
}

$a = mt_rand(0,10);

switch($a){
    case 0 :
    case 1 :
    case 2 :
    case 3 :
        echo "$a : Nul, étudie la prochaine fois"; break;
    case 4 : 
    case 5 :
        echo "$a : Peut mieux faire"; break;
    case 6 : 
    case 7 :
        echo "$a : Bien"; break;
    default : 
        echo "$a : Très bien";
}

?>