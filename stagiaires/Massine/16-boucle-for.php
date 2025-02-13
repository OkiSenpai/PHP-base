<!-- exe1 -->
<?php
for ($i = 0; $i <= 10; $i++) {
    echo "$i ";
}
?>
<br>
<!-- exe2 -->
<?php
for ($i = 0; $i <= 20; $i++) {
    if ($i % 2 === 0) {
        echo "$i ";
    } else {
        echo " ";
    }
}
?>
<!-- exe3 -->
<br>
<?php
$sum = 0;
for($i = 0;$i <= 20;$i++){
    $sum = $sum + $i;
    echo "$sum ";
}
?>
<br>
<!-- exe4 -->
 <?php
for($i = 0;$i <= 20;$i++){
    if($i % 2 === 0){
        echo $i." est pair. | ";
    }else{
        echo $i." est impair. | ";
    }
}
?>
<br>
<!-- exe5 -->
<?php
$sum = 0;
for($i = 0;$i <= 20;$i++){
    if($sum % 2 === 0){
        echo $sum." est pair. | ";
    }else{
        echo $sum." est impair. | ";
    }
    $sum = $sum +$i;
}
?>
<br>
<!-- exe6 -->
<?php
for($i = 1;$i <= 5;$i++){
    for($j = 1;$j <= 5;$j++){
        echo $i."x".$j." = ".$i*$j." | " ;
    }
    echo "<br>";
}
    