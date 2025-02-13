<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<?php

// Créez une copie du fichier 18-boucle-while.php dans votre espace stagiaire, puis créez les boucles while telles qu'indiquées dans les commentaires



$i = 0;

do{
    echo "$i ";
    $i++;
}while($i<=10);
// Affiche : 0 1 2 3 4 5 6 7 8 9 10
echo "<br>";

// même si la condition est fausse, les instructions sont exécutées au moins une fois
$page = 1;
$pageNb = 1;
echo "Page";
do{
    echo " $page";
    $page++;
}while($page<=$pageNb);
// Affiche : Page 1

echo "<br>";

// si on a plus de pages :
$page = 1;
$pageNb = 4;
echo "Page";
do{
    echo " $page";
    $page++;
}while($page<=$pageNb);
// Affiche : Page 1 2 3 4

?>
    
</body>
</html>