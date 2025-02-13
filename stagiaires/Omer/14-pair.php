<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    //Créez un fichier 14-pair.php Une variable donne un numérique au hasard entre 1 et 20, si il est pair affichez 'Le nombre est pair.', sinon 'le nombre est impair.
    


    $chiffre = rand(1, 20);

    echo $chiffre . "<br>";
    if ($chiffre % 2 == 0) {
        ?>
        <h1> Le nombre est pair.</h1>
        <?php
    } else { ?>

        <h1>Le nombre est impair.</h1>
        <?php
    }

    switch ($chiffre) {
        case $chiffre % 2 == 0:
            echo "Le nombre est pair.";
            break;
        default:
            echo "Le nombre est impair.";
            break;
    }
    ?>




</body>

</html>