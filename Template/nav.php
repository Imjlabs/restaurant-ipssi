<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="./src/css/style.css">
</head>
<body>
    <nav>
        <a href="index.php"><h1>Restaurant</h1></a>
        <div>
            <a class="link" href="./index.php">Accueil</a>
            <a class="link" href="./index.php?action=menu">La carte</a>
            <a class="link" href="./index.php?action=history">Notre histoire</a>
            <a class="link" href="./index.php?action=reservation">Réservation</a>
            <a class="link" href="./index.php?action=contact">Contact</a>
            <a class="link" href="./index.php?action=connection">Connexion</a>
        </div>
    </nav>
</body>
</html>