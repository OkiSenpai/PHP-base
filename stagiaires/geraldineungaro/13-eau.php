<?php

$t = 50;
if ($t<=0){
    echo "l'eau est solide";
}elseif ($t>=1 and $t<=99){
    echo "liquide";
}else {
    echo "gazeux";
}
