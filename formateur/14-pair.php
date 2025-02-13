<?php

$hasard= mt_rand(1,20);

if($hasard % 2 === 0){
    echo 'La variable $hasard vaut: '."$hasard et est pair";
}else{
    echo 'La variable $hasard vaut: '."$hasard et est impair";
}
?>
<hr>
<?php
# Sans modulo avec gettype
// on peut se passer des accolades pour le if, elseif, else, mais
// on ne peut qu'utiliser qu'une ligne
if(gettype($hasard/2)==="integer")
    echo 'La variable $hasard vaut: '."$hasard et est pair";
else
    echo 'La variable $hasard vaut: '."$hasard et est impair";
?>
<hr>
<?php
// ternaire (condition ? true : false)
echo $hasard % 2 == 0
        ? 'La variable $hasard vaut: '."$hasard et est pair" 
        : 'La variable $hasard vaut: '."$hasard et est impair";
?>
<hr>