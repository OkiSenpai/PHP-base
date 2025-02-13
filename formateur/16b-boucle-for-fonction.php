<h3>Exemple 5</h3>
<p>Création et utilisation d'une fonction utilisateur</p>
<?php
/**
 * @param int $begin
 * @param int $last
 * @return string
 */
function afficheSomme($begin=1,$last=20){
    // on va ne permettre que les integer
    $begin = (int) $begin;
    $last = (int) $last;
    // si le début est plus grand que la fin, on envoie "calcul impossible" et on arrête le script
    if($begin>$last) return "calcul impossible car $begin est plus grand que $last";
    $sortie = "<h4>Nous allons additionner les chiffre de $begin à $last</h4><p>";
    $somme = 0;
    $line = 1;
    for($i=$begin;$i<=$last;$i++){
        $somme+=$i;
        // autre ternaire
        $pair = $somme % 2 === 0 ? "pair" : "impair";
        $sortie .= "$line) La somme de (".($somme-$i)."+$i) est $pair : $somme <br>" . PHP_EOL;
        $line++;
    }
    return "$sortie</p>";
}

// appel de la fonction
echo afficheSomme();
echo "<hr>";
echo afficheSomme(10,30);
echo "<hr>";
echo afficheSomme(5,50);
echo "<hr>";
echo afficheSomme(50,5);
echo "<hr>";
echo afficheSomme(10,10);
echo "<hr>";
echo afficheSomme("5","25"); // transtypage
echo "<hr>";
echo afficheSomme(3.23,50); // transtypage non fonctionnel (déprécié)

// les variables internes à afficheSomme ne sont pas globales
//echo $sortie;
//echo $somme;
?>