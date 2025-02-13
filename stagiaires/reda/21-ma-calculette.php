<?php
function calculSimple($nb1, $nb2, $opertator)
{

  switch ($opertator) {
    case '+':
      return  $nb1 + $nb2;
      break;
    case '-':
      return  $nb1 - $nb2;
      break;
    case '*':
      return $nb1 * $nb2;
      break;
    case '/':
      if ($nb1 == 0 || $nb2 == 0) {
        return 'Operation Impossible';
      } else {
        return $nb1 / $nb2;
      }
      break;
    default:
      echo 'Operation Impossible';
  }
  // A completer

}

// A changer
$resutat = calculSimple($_POST['nombre1'], $_POST['nombre2'], $_POST['operation']);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ma calculette</title>
</head>

<body>
  <h1>Calculatrice Simplifiée</h1>
  <form action="" method="post">
    <label for="nombre1">Nombre 1 :</label>
    <input type="number" name="nombre1" id="nombre1" required>
    <br><br>

    <label for="operation">Opération :</label>
    <select name="operation" id="operation" required>
      <option value="+">Addition (+)</option>
      <option value="-">Soustraction (-)</option>
      <option value="*">Multiplication (*)</option>
      <option value="/">Division (/)</option>
    </select>
    <br><br>

    <label for="nombre2">Nombre 2 :</label>
    <input type="number" name="nombre2" id="nombre2" required>
    <br><br>

    <button type="submit">Calculer</button>
  </form>
  <h2>Résultat</h2>
  <p><?php
      if (isset($resutat)) {
        echo $resutat;
      }
      ?></p>
</body>

</html>