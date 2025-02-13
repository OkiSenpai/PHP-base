<?php

for ($i = 10; $i > 0; $i--) {
    echo $i;
}
?>
<br>
<?php
for ($i = 0; $i < 22; $i++) {
    if ($i % 2 == 0) {
        echo $i;
    }
}
?>
<br>

<?php
$num=0;
for ($i = 1; $i < 21; $i++) {
    echo $num+=$i;  
}
echo " la somme des nombres de 1 a 20 est : $num";

?>

<?php

for ($i = 1; $i < 21; $i++) {
    if ($i % 2 == 0) {
        echo "$i - pair | ";
    } else {
        echo "$i - impair | ";
    }
}

?>
<?php
$num = 0;
for ($i = 1; $i < 21; $i++) {
    $resultat = $num+=$i;
    if ($resultat % 2 == 1) {
        echo "la some est $num est impair | ";
    } else {
        echo "la some est $num est pair | ";
    }
}
?>

<?php
for ($i=1; $i < 6; $i++) { 
    for ($j=1; $j < 6; $j++) { 
        $res = $i*$j;
        echo "| $i x $j = $res | <br> ";
    }
}
?>