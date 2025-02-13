<?php
$a = mt_rand(0,10);
switch($a){
    case $a <= 3 : echo "$a : Nul, étudie la prochaine fois"; break;
    case $a <= 5 : echo "$a : Peut mieux faire"; break;
    case $a <= 7 : echo "$a : Bien"; break;
    default : echo "$a : Très bien";
}