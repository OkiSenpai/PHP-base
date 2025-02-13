<?php

function calculSimple($a, $b, $operation) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b == 0) {
                return 'Erreur : Division par zéro';
            }
            return $a / $b;
        default:
            return 'Opération non reconnue';
    }
}


echo calculSimple(10, 5, '+') . "<br>"; 
echo calculSimple(10, 5, '-') . "<br>";
echo calculSimple(10, 5, '*') . "<br>"; 
echo calculSimple(10, 5, '/') . "<br>"; 
echo calculSimple(10, 0, '/') . "<br>"; 
echo calculSimple(10, 5, '%') . "<br>"; 
?>