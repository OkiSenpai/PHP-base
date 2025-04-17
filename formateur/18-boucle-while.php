<?php
/*
 * Les boucles while
 */

echo "<p>1) Calculez la somme des entiers de 1 à 10 avec la boucle while<br>";

$somme = 0;

$i=1;
while($i<=10){
    $somme += $i;
    $i++;  
}

// ligne qui doit devenir fonctionnelle :
echo "La somme des entiers de 1 à 10 est : $somme";

echo "</p>";

echo "<p>2) Affichez une table de multiplication (de 1 à 10 au hasard) en utilisant la boucle while<br>";

$hasard = rand(1,10);

$i=0;
while($i<=10){
    echo ($hasard*$i)." ";
    $i++;
}

echo "</p>";

echo "<p>3) Affichez la factorielle d'un nombre au hasard entre 3 et 12 en utilisant la boucle while<br>
La factorielle d'un nombre entier positif n, notée n!, est le produit de tous les entiers positifs inférieurs ou égaux à n.<br><br>
Par exemple : <br>3! = 3 x 2 x 1 = 6 <br> 5! = 5 x 4 x 3 x 2 x 1 = 120 <br> 
7! = 7 x 6 x 5 x 4 x 3 x 2 x 1 = 5040
<br><br>";
$hasard = rand(3,12);
$resultat = 1;
$string = "$hasard! = ";

while($hasard>0){
    // calcul
    $resultat *= $hasard;
    // gestion de la chaîne de sortie avec if et else
    /*if($hasard>1){
        $string .= "$hasard x ";
    }else{
        $string .= "$hasard = ";
    }*/
    // ternaire
    $string .= $hasard>1 ? "$hasard x " : "$hasard = ";
    $hasard--;
}
echo $string.$resultat;

echo "</p>";


