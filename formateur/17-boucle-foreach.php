<?php
/*
 * Les boucles foreach
 */

include 'array.php';
/*
 * 1) Affichez chaque élément du tableau avec une boucle foreach
 */
$tab = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j");

echo '<p>1) Affichez les lettres de $tab avec une boucle foreach<br>';

foreach($tab as $value){
    echo $value." ";
}



echo "</p>";

/*
 * 2) Affichez chaque élément du tableau $tab avec une boucle foreach
 * en affichant aussi la clef de chaque élément
 */

echo '<p>2) Affichez les lettres de $tab avec une boucle foreach en affichant aussi la clef de chaque élément<br>';

foreach($tab as $clef => $valeur){
    // ! la virgule ne passe qu'avec echo (pas print ni attribution de variables), préférer le "."
    echo $clef," => ",$valeur," | ";
}

echo "</p>";


/*
 * 3) Affichez chaque élément du tableau $semaineFr avec une boucle foreach
 * en affichant aussi la clef de chaque élément
 */

echo '<p>3) Affichez les jours de la semaine avec une boucle foreach en affichant aussi la clef de chaque élément<br>';

foreach($semaineFr as $k => $v):
    echo "$k => $v | ";
endforeach;

echo "</p>";

/*
 * 4) Affichez le jour actuel de la semaine en français avec la fonction date() et la variable $semaineFr
 */

echo '<p>4) Affichez le jour actuel de la semaine en français avec la fonction date() et la variable $semaineFr<br>';
// var_dump($semaineFr);
// https://www.php.net/manual/fr/function.date.php
// https://www.php.net/manual/fr/datetime.format.php

$jour = $semaineFr[date("N")];
echo $jour;

echo "</p>";

/*
 * 5) Affichez la liste des prénoms du tableau $classe avec une boucle foreach
 */

echo '<p>5) Affichez la liste des prénoms du tableau $classe avec une boucle foreach<br>';

foreach($classe as $classe2){
    echo "$classe2 ";
}

echo "</p>";

/*
 * 6) Affichez la liste des 'nom', 'age' et 'note' du tableau $classe18 avec une boucle foreach
 * avec un retour à la ligne entre chaque élément
 */

echo '<p>6) Affichez la liste des \'nom\', \'age\' et \'note\' du tableau $classe18 avec une boucle foreach avec un retour à la ligne entre chaque élément<br>';

// PHP 'triche' en acceptant les clef de type string sans les guillemets (à éviter), si on souhaite ne mettre les guillemets, les brackets (accolades) protègent la variable (à privilégier)
foreach($classe18 as $x){
    echo "nom : ".$x['nom']." | âge : {$x['age']} | note : $x[note] <br>";
}

echo "</p>";

/*
 * 7) Avec 2 boucles foreach, affichez tous les champs la liste des pays du tableau $countryCode
 */

echo '<p>7) Avec 2 boucles foreach, affichez tous les champs la liste des pays du tableau $countryCode<br>';

foreach($countryCode as $country){
    foreach($country as $values){
        echo "$values | ";
    }
    echo "<br>";
}


echo "</p>";