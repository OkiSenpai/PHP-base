<h1>if elseif et else</h1>
<h2>Succession de if elseif (ou else if) et else</h2>
<p><?php

$random = mt_rand(-100,200);

// var_dump($random);

if($random<=0){
    print "L'eau est solide à ".$random."°";
}elseif($random<100){
    echo "L'eau est liquide à {$random}°";
}else{
    echo "L'eau est gazeuse à {$random}°";
}
?></p>

<h2>Version template</h2>

<?php if($random<=0): ?>
    <p>L'eau est solide à <?=$random?>°</p>
<?php elseif($random<100): ?>
    <p>L'eau est liquide à <?=$random?>°</p>   
<?php else: ?>
    <p>L'eau est gazeux à <?=$random?>°</p>  
<?php endif ?>