<?php
$a = mt_rand(-256,256);
if($a <= 0 ){
    echo "l eau est solide à : $a °";
} elseif($a <= 100){
    echo "l eau liquide à : $a °";
} else{
    echo "l eau est gazeuse à : $a °";
}
?>