<?php

$title = "Connexion";
require_once "./Template/nav.php";

?>

<header>
    <link rel="stylesheet" href="./src/css/connection.css">
</header>
<section class="connection">
    <input placeholder="Adresse Mail" type="text" require>
    <input placeholder="Mot de passe" type="password" require>
    <button>Connexion</button>
    <a id="registration" href="index.php?action=registration">Inscription</a>
</section>

<?php

require_once "./Template/footer.php";