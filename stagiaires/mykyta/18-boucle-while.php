<?php

$i = 0;

while($i <= 10){
    echo "$i ";
    $i++;
}
$i = 11;  
 echo "<br>";  // "\n" sur console 
do{  // si $i dépasse les condotoins, alors le boucle sera exécute 1 fois
    echo " $i";
    $i++;
}while($i <= 10);
?>