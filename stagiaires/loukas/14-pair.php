<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pair</title>
</head>

<body>
  <form method="post">
    <label for="number">Introduisez un nombre entre 1 et 20</label></br>
    <input type="text" id="number" name="number" require>
    <button type="submit">Envoyé</button>
  </form>
</body>

</html>

<?php
if (isset($_POST["number"])) {
  if ($_POST["number"] < 0 || $_POST["number"] >= 20) {
    echo "Veuillez introduire un chiffre entre 1 ou 20 <br>";
  } else {
    $number = $_POST["number"];
    if ($number % 2 == 0) {
      echo "$number est pair";
    } else {
      echo "$number est impair";
    }
  }
}
?>