<?php
/*
 * Les boucles for
 */

/*
 * 1) Affichez les nombres de 10 à 1 avec une boucle for
 */

echo "<p>1) Affichez les nombres de 10 à 1 avec une boucle for<br>";

// utilisation de la décrémentation ($i--)
for($i=10; $i>=1; $i--){
    echo "$i ";
}

echo "</p>";

/*
 * 2) Affichez les nombres pairs de 0 à 20 avec une boucle for
 */

echo "<p>2) Affichez les nombres pairs de 0 à 20 avec une boucle for<br> 
Ne pas utiliser les { et } ne fonctionne que sur une ligne (qui finit au ;), le ||| n'est affiché qu'après la boucle for<br>";

for($i=0;$i<=20;$i+=2)
    echo "$i ";



echo "</p>";

/*
 * 3) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres
 */

echo "<p>3) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres<br>";
// variable hors de la boucle
$somme = 0;
for($i=1;$i<=20;$i++){
    echo "$i ";
    // echo 'somme = '.$somme.'+='.$i."<br>" ;
    // on ajoute $i à la $somme
    $somme+=$i;

}
// affichage de la somme
// $somme = (string) $somme; // conversion en string
// echo gettype($somme); // affichage du type
echo "- La somme des nombres est égal à : ".$somme;
echo "</p>";

/*
 * 4) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres
 * et en affichant à chaque tour si le nombre est pair ou impair (utilisez l'opérateur modulo %)
 */

echo "<p>4) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres et en affichant à chaque tour si le nombre est pair ou impair<br>";

// variable hors de la boucle
$somme = 0;
for($i=1;$i<=20;$i++){
    // if et else sans { } !!! ne fonctionne que pour une ligne d'instruction : echo "$i - pair | "; pour le if et echo "$i - impair | "; pour le else
    if($i % 2 ===0)
        echo "$i - pair | ";
    else
        echo "$i - impair | ";

    $somme+=$i;

}
echo "- La somme des nombres est égal à : ".$somme;
echo "</p>";

/*
 * 5) Affichez la somme des nombres de 1 à 20 à chaque tour avec une boucle for
 * et en affichant à chaque tour si la somme est pair ou impair
 */

echo "<p>5) Affichez la somme des nombres de 1 à 20 à chaque tour avec une boucle for et en affichant à chaque tour si la somme est pair ou impair<br><br>";

$somme = 0;
for($i=1;$i<=20;$i++){
    $somme+=$i;
    // if else
    if($somme % 2 ===0){
        echo "La somme est pair : $somme | ";
    }else{
        echo "La somme est impair : $somme | ";
    }

}
echo "<hr>";
$somme = 0;
for($i=1;$i<=20;$i++) {
    $somme += $i;
    // ternaire
    echo $somme % 2 === 0 ? "La somme est pair : $somme | " : "La somme est impair : $somme | ";
}
echo "<hr>";
$somme = 0;
for($i=1;$i<=20;$i++){
    $somme+=$i;
    // autre ternaire
    $pair = $somme % 2 === 0 ? "pair" : "impair";
    echo "La somme est $pair : $somme | ";
    }
echo "</p>";
?>

<h3>Exemple 5</h3>
<p>Création et utilisation d'une fonction utilisateur</p>
<?php
function afficheSomme(){
    $sortie = "";
    $somme = 0;
    for($i=1;$i<=20;$i++){
        $somme+=$i;
        // autre ternaire
        $pair = $somme % 2 === 0 ? "pair" : "impair";
        $sortie = $sortie . "La somme est $pair : $somme <br> ";
    }
    return $sortie;
}

// appel de la fonction
echo afficheSomme();

?>

<?php

/*
 * 6) Utilisez deux boucles for imbriquées pour afficher une table de multiplication de 1 à 5.
 * La table doit être formatée de manière lisible, par exemple :
    // 1 x 1 = 1   1 x 2 = 2   ...   1 x 5 = 5
    // 2 x 1 = 2   2 x 2 = 4   ...   2 x 5 = 10
    // ...
    // 5 x 1 = 5   5 x 2 = 10  ...   5 x 5 = 25
 * Vous aurez besoin de concaténer des chaînes de caractères avec l'opérateur ".".
 * Vous obtiendrez 5 lignes de 5 multiplications chacune.
 */

echo "<p>6) Utilisez deux boucles for imbriquées pour afficher une table de multiplication de 1 à 5.<br>";


echo "</p>";