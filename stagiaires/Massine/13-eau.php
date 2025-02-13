<?php
$temp = mt_rand(-100,200);
if ($temp <= 0){
    echo "l'eau est solide";
}elseif($temp > 0 && $temp < 99){
    echo "l'eau est liquide";
}elseif($temp >= 100){
    echo "l'eau est gazeuse";
}else{
    echo "Cette température n'est pas valide";
}