<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include("array.php");


    ?>
    <h1>1. Affichez les lettres de Stab avec une boucle foreach</h1>
    <?php
    foreach ($abcd as $abcde) {
        echo " " . $abcde;

    }
    ?>
    <br>
    <hr>
    <h1>2. Affichez les lettres de Stab avec une boucle foreach en affichant aussi la clef de chaque élément</h1>
    <?php
    $i = 0;
    foreach ($abcd as $abcde) {

        $i++;
        echo $i . " => " . $abcde . " | ";
    }
    ?>

    <br>
    <hr>
    <h1>3. Affichez les jours de la semaine avec une boucle foreach en affichant aussi la clef de chaque élément</h1>
    <?php
    $i = 0;
    foreach ($days as $day) {
        $i++;
        echo $i . " => " . $day . " ";

    }

    ?>

    <br>
    <hr>
    <h1>4. Affichez le jour actuel de la semaine en français avec la fonction date() et la variable SsemaineFr</h1>

    <?php
echo $days[date("N")];
    ?>

    <br>
    <hr>
    <h1>5. Affichez la liste des prénoms du tableau $classe avec une boucle foreach</h1>
    <?php

    foreach ($web1 as $prenom) {
        echo $prenom["prenom"] . " ";

    }

    ?>

    <br>
    <hr>
    <h1>6. Affichez la liste des 'nom', 'age' et 'note' du tableau $classe18 avec une boucle foreach avec un retour à la
        ligne entre chaque élément</h1>
    <?php

    foreach ($web1 as $eleve) {
        echo "Name: " . $eleve["nom"] . " | Age: " . $eleve["age"] . " | Note: " . $eleve["note"] . "<br>";

    }


    ?>

    <br>
    <hr>
    <h1>7. Affichez la liste des 'nom', 'age' et 'note' du tableau $classe18 avec une boucle foreach en affichant aussi
        la clef de chaque élément</h1>
    <?php

    foreach ($countryCode as $country) {
        echo "<br>";
        echo   $country[0] . " |  " . $country[1] . " |  " . $country[2] . " |  " . $country[3] . " | " . "<br>";
    }
    ?>

</body>

</html>