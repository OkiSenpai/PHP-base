<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Variables</title>
</head>
<body>
    <h1>Test des variables GET</h1>
     <ul>
        <li><a href="12-GET.php?nom=abdelkader">Nom = Abdelkader</a></li>
        <li><a href="12-GET.php?prenom=Nordine">Prénom = Nordine</a></li>
        <li><a href="12-GET.php?ville=bruxelle">Ville = bruxelle</a></li>
        <li><a href="12-GET.php?age=49">Âge = 49</a></li>
     </ul>
   <h2>Affichage des variables GET :</h2>
     <p>
        <?php
        if (isset($_GET['nom'])) {
            echo "Nom : " . $_GET['nom'] . "<br>";
        }
        if (isset($_GET['prenom'])) {
            echo "Prénom : " .$_GET['prenom'] . "<br>";
        }
        if (isset($_GET['ville'])) {
            echo "Ville : " . $_GET['ville']. "<br>";
        }
        if (isset($_GET['age'])) {
            echo "Âge : " . $_GET['age'] . "<br>";
        }
        ?>
     </p>
</body>
</html>
