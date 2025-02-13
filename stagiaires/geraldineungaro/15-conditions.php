<?php

$a=rand(0,10);
if ($a<=3){
    echo "Nul, étudie la prochaine fois";
}elseif ($a<=5){
    echo "Peut mieux faire";
}elseif ($a<=7){
    echo "Bien";
}else {
    echo "Très bien";
}

echo $a;