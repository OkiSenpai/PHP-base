<?php
function estPair($chiffre, $gras=true,$italique=false){
    
    $result = $chiffre;
    $result .=($chiffre%2===0)
            ?" est un nombre pair"
            :" est un nombre impair";
    $result = $gras ? "<strong>$result</strong>": $result;
    $result = $italique ? "<em>$result</em>": $result;
    return $result;
}

echo estPair(gras:false, chiffre:5);
echo "<br>";
echo estPair(3,true,true);
echo "<br>";
echo estPair(chiffre:4,italique:true);
echo "<br>";
echo estPair(true, 5);