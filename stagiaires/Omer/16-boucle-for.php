<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    // Créez une copie du fichier 16-boucle-for.php dans votre espace stagiaire, puis créez les boucles for telles qu'indiquées dans les commentaires
    
    // Créez une copie du fichier 16-boucle-for.php dans votre espace stagiaire, puis créez les boucles for telles qu'indiquées dans les commentaires
    

    // 1. Affichez les chiffres de 10 à 1
    
    ?>
    <h1>1. Affichez les chiffres de 10 à 1</h1>
    <?php
    for ($i = 10; $i >= 1; $i--) {
        echo $i;
    }
    ?>
    <br>
    <hr>

    <h1> 2. Affichez les chiffres pair de 0 à 20! </h1>
    <?php
    for ($i = 0; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            echo $i;
        }
    }
    ?>

    <br>
    <hr>

    <h1> 3. Affichez les chiffres de 1 à 20 avec une boucles for en calculant la some de ses nombre </h1>
    <?php
    $somme = 0;
    for ($i = 1; $i <= 20; $i++) {

        $somme += $i;
        echo $i . " ";

    }
    echo "<br>";

    echo "la somme est de : " . $somme;

    ?>

    <br>
    <hr>

    <h1> 4. Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres et en affichant à
        chaque tour si le nombre est pair ou impair </h1>
    <?php
    $somme = 0;
    for ($i = 1; $i <= 20; $i++) {
        $somme += $i;
        echo $i . " ";
        if ($i % 2 == 0) {
            echo " pair ";
        } else {
            echo " impair ";
        }

    }
    echo " $somme";
    ?>
    <br>
    <hr>
    <h1> 5. Affichez la somme des nombres de 1 à 20 à chaque tour avec une boucle for et en affichant à chaque tour si
        la
        somme est pair ou impair</h1>
    <?php
    $somme = 0;
    for ($i = 1; $i <= 20; $i++) {
        $somme += $i;
        echo $somme . " ";
        if ($somme % 2 == 0) {
            echo " pair ";
        } else {
            echo " impair ";
        }

    }

    ?>

    <br>
    <hr>
    <h1> 6. Utilisez deux boucles for imbriquées pour afficher une table de multiplication de 1 à 5.</h1>
    <?php

    for ($a = 1; $a <= 5; $a++) {
        echo "<br>";
        for ($b = 1; $b <= 5; $b++) {
            echo $a . "x" . $b . "=" . $a * $b . " | ";

        }
    }

    ?>
</body>

</html>