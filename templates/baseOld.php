<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="./src/css/style.css">
    <?php foreach ($links as $link) : ?>
        <?= $link ?>
    <?php endforeach ?>
</head>
<body>
    <nav>
        <a class="title_nav" href="index.php"><h1>Restaurant</h1></a>
        <div>
            <a class="link_nav" href="./">Accueil</a>
            <a class="link_nav" href="./?action=menu">Menu</a>
            <a class="link_nav" href="./?action=reservation">Réservation</a>
            
            <?php

            if (!isset($_SESSION['user'])) {
                
                ?>

                <a class="link_nav" href="./?action=login"><button class="button_nav">Connexion</button></a>
                <a class="link_nav" href="./?action=registration"><button class="button_nav">Inscription</button></a>

                <?php
            }
            else {

                ?>

                <a class="link_nav" href="./?action=logout">Deconnexion</a>

                <?php
            }

            ?>

        </div>
    </nav>
    <section>
        <?= $content ?>
    </section>
    <footer>
        <div class="bloc">
            <h1 class="title_footer">Informations principales</h1>
            <p class="information">Tout les jours de 11h à 23h</p>
            <p class="information">25 Rue Claude Tillier, 75012 Paris</p>
            <p class="information">01 72 11 23 12</p>
            <p class="information">restaurant@gmail.com</p>
        </div>
        <div class="bloc">
            <h1 class="title_footer">Navigation</h1>
            <p class="information"><a class="link_footer" href="./index.php">Accueil</a></p>
            <p class="information"><a class="link_footer" href="./index.php?action=menu">Menu</a></p>
            <p class="information"><a class="link_footer" href="./index.php?action=reservation">Réservation</a></p>
        </div>
        <div class="bloc">
            <h1 class="title_footer">Politique</h1>
            <p class="information">Mentions légales</p>
            <p class="information">Conditions générales d'utilisations</p>
            <p class="information">Politique de confidentialité</p>
        </div>
    </footer>
    <?php foreach ($scripts as $script) : ?>
        <?= $script ?>
    <?php endforeach ?>
</body>
</html>