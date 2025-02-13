
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="?prenom=Massine">Prénom</a></li>
        <li><a href="?nom=Abgar">Abgar</a></li>
        <li><a href="?age=23">Age</a></li>
        <li><a href="?AnneeNaissance=2001">Année de Naissance</a></li>
    </ul>
    <?php
    echo $_GET['AnneeNaissance'];
    ?>
</body>
</html>