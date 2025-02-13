<?php
echo "1) Affichez les nombres de 10 à 1 <br>";
for ($i = 10; $i > 0; $i--) {
  echo $i . " ";
}

echo "<br> <br> 2) Affichez les nombres pairs de 0 à 20 avec une boucle for <br>";
for ($i = 0; $i < 20; $i += 2) {
  echo $i . " ";
}

echo "<br> <br> 3) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres <br>";
$sum = 0;
for ($i = 0; $i <= 20; $i++) {
  echo $i . " ";
  $sum += $i;
}
echo "<br> La somme des nombres de 1 à 20 est: $sum ";

echo "<br> <br> 4) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres et en affichant à chaque tour si le nombre est pair ou impair <br>";
$sum = 0;
for ($i = 0; $i <= 20; $i++) {
  if ($i % 2 == 0) {
    echo "$i est pair <br>";
  } else {
    echo "$i est impair <br>";
  }

  $sum += $i;
}

echo "La somme des nombres de 1 à 20 est: $sum ";

echo "<br> <br> Affichez la somme des nombres de 1 à 20 à chaque tour avec une boucle for et en affichant à chaque tour si la somme est pair ou impair <br>";

$sum = 1;

for ($i = 0; $i <= 20; $i++) {
  if ($sum % 2 == 0) {
    echo "$sum est pair <br>";
  } else {
    echo "$sum est impair <br>";
  }

  $sum += $i;
}

echo "La somme des nombres de 1 à 20 est: $sum ";

echo "<br> <br> Affichez la somme des nombres de 1 à 20 à chaque tour avec une boucle for et en affichant à chaque tour si la somme est pair ou impair <br>";


for ($i = 1; $i <= 5; $i++) {
  for ($j = 0; $j <= 10; $j++) {
    $res = $i * $j;
    echo "$i x $j = $res <br>";
  }
}
