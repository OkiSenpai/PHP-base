<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eau</title>
</head>

<body>
  <form method="post">
    <label for="temp">Metter une temperature entre -100 a 200</label></br>
    <input type="text" type="temp" id="temp" name="temp" required>
    <button type="submit">submit</button>
  </form>
</body>

</html>
<?php
if (isset($_POST["temp"])) {
  if (!is_numeric($_POST["temp"])) {
    echo "Veuillez introduire un chiffre";
  }

  if ($_POST["temp"] < -100 || $_POST["temp"] > 200) {
    echo "Veuillez introduire un chiffre entre -100 ou 200";
  }

  if ($_POST["temp"] <= 0) {
    echo "l'état de l'eau est solid";
  } elseif ($_POST["temp"] < 100) {
    echo "l'état de l'eau est liquide";
  } else {
    echo "l'état de l'eau est gazeuse";
  }
}



?>