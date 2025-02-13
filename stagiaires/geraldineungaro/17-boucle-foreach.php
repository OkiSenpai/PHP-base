<?php
/*
 * Les boucles foreach
 */
/*
 * 1) Affichez chaque élément du tableau avec une boucle foreach
 */

echo '<p>1) Affichez les lettres de $tab avec une boucle foreach<br>';

$tab = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j");

foreach($tab as $tab1){
    echo "$tab1 ";
}


echo "</p>";

/*
 * 2) Affichez chaque élément du tableau $tab avec une boucle foreach
 * en affichant aussi la clef de chaque élément
 */

echo '<p>2) Affichez les lettres de $tab avec une boucle foreach en affichant aussi la clef de chaque élément<br>';

foreach($tab as $clef => $tab1){
    echo "$tab1$clef  ";
}


echo "</p>";


/*
 * 3) Affichez chaque élément du tableau $semaineFr avec une boucle foreach
 * en affichant aussi la clef de chaque élément
 */

echo '<p>

3) Affichez les jours de la semaine avec une boucle foreach en affichant aussi la clef de chaque élément<br>';

$jour = array("lundi","mardi","mercredi","jeudi","vendredi","samedi", "dimanche");

foreach($jour as $clef => $jour){
    echo "$jour $clef  ";
}


echo "</p>";

/*
 * 4) Affichez le jour actuel de la semaine en français avec la fonction date() et la variable $semaineFr
 */

echo '<p>4) Affichez le jour actuel de la semaine en français avec la fonction date() et la variable $semaineFr<br>';

$jour = array("lundi","mardi","mercredi","jeudi","vendredi","samedi", "dimanche");
echo date ("l");
echo date('d m Y H:i');


echo "</p>";

/*
 * 5) Affichez la liste des prénoms du tableau $classe avec une boucle foreach
 */

echo '<p>5) Affichez la liste des prénoms du tableau $classe avec une boucle foreach<br>';

$classe = array ("Jean","Eric", "Julie", "Luc", "Pierre", "Paul", "Jacques","hélène", "Anne");

foreach($classe as $classe1 => $classe){
    echo "$classe ";
}



echo "</p>";

/*
 * 6) Affichez la liste des 'nom', 'age' et 'note' du tableau $classe18 avec une boucle foreach
 * avec un retour à la ligne entre chaque élément
 */

echo '<p>6) Affichez la liste des \'nom\', \'age\' et \'note\' du tableau $classe18 avec une boucle foreach avec un retour à la ligne entre chaque élément<br>';



$classe18 = array("nom" => "Élève 1 | :","age" => " âge : 15 | ","note |" => "note :20");

foreach($classe18 as $classe1 => $classe18 ){
    echo "$classe18";
}



echo "</p>";

/*
 * 7) Avec 2 boucles foreach, affichez tous les champs la liste des pays du tableau $countryCode
 */

echo '<p>7) Avec 2 boucles foreach, affichez tous les champs la liste des pays du tableau $countryCode<br>';





echo "</p>";

?>