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
    switch ($note) {
      case 0:
      case 1:
      case 2:
      case 3:
        echo "$note: Nul, étudie la prochaine fois";
        break;
      case 4:
      case 5:
        echo "$note: Peut mieux faire";
        break;
      case 6:
      case 7:
        echo "$note: Bien";
        break;
      case 8:
      case 9:
      case 10:
        echo "$note: Bien";
        break;
      default:
        echo "$note problematique";
    }
  }
}
?>