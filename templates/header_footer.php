<!DOCTYPE html>
<html lang="fr">

<!-- Header à mettre dans la template-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
    <title>Réservation Table restaurant</title>
</head>

<!-- Header à mettre dans la template-->

<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/restaurant" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Accueil</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Menu</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Réservation</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">A propos de nous</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2"> Connexion</button>
                <button type="button" class="btn btn-primary">Inscription</button>
            </div>
        </header>
    </div>

    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
        <div class="col mb-3">
            <p class="text-muted">© <?= date('Y') ?></p>
        </div>

        <div class="col mb-3">

        </div>

        <div class="col mb-3">
            <h5>Pour plus d'informations</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Notre Histoire</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Nos Dirigeants</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Nos Chiffres</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Espace presse</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Aide en ligne</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQ</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contacts</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Votre Avis</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Recrutement</h5>
            <p>Vous souhaitez postulez ? envoyez votre cv à restaurant@restaurant.com</p>
        </div>
    </footer>
</body>

</html>