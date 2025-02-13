<!DOCTYPE html>
<html>
<head>
  <title><?php echo date("H:i"); // heure et minute ?></title>
</head>
<body>
  <?php 
    $date = date("Y-m-d H:i:s");
  ?>
  <h1><?php echo $date; ?></h1>
  <p>Il est <?php echo date("H:i:s"); // heure, minute et seconde ?></p>
</body>
</html>





