<?php
$temperature = mt_rand(-100,200); 
if ($temperature<= 0){
    echo "l'état de l'eau est solide à $temperature °C";
}elseif ($temperature> 0 && $temperature<= 99){
    echo "l'état de l'eau est liquide à $temperature °C";
}else {
    echo "l'état de l'eau est gazeux à $temperature °C";
}












?>
