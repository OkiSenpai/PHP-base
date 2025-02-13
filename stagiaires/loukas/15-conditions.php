<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>note</title>
</head>

<body>
  <form method="post">
    <label for="note">Introduisez un nombre entre 1 et 10</label><br />
    <input type="text" id="note" name="note">
    <button type="submit">Envoyé</button>
  </form>
</body>

</html>

<?php
if (isset($_POST["note"])) {
  if ($_POST["note"] < 0 || $_POST["note"] > 10) {
    echo "Veuillez introduire un chiffre entre 1 ou 10 <br>";
  } else {
    $note = $_POST["note"];
    if ($note <= 3) {
      echo "$note: Nul, étudie la prochaine fois";
    } elseif ($note <= 5) {
      echo "$note: Peut mieux faire";
    } elseif ($note <= 7) {
      echo "$note: Bien";
    } else {
      echo "$note: Très bien";
    }
  }
}
?>