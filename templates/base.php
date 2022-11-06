<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="UTF-8">
	<title>IPSSI Restaurant</title>
    <link rel="stylesheet" href="./src/css/linearicons.css">
    <link rel="stylesheet" href="./src/css/font-awesome.min.css">
    <link rel="stylesheet" href="./src/css/availability-calendar.css">
    <link rel="stylesheet" href="./src/css/magnific-popup.css">
    <link rel="stylesheet" href="./src/css/nice-selec.css">
    <link rel="stylesheet" href="./src/css/owl.carousel.css">
    <link rel="stylesheet" href="./src/css/bootstrap.css">
    <link rel="stylesheet" href="./src/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="./src/css/main.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./src/css/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="./src/css/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="./src/css/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="./src/css/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="./src/css/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="./src/css/util3.css">
	<link rel="stylesheet" type="text/css" href="./src/css/main3.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i|Roboto:400,500" rel="stylesheet">

</head>

<body>

	<header class="header-area">
		<div class="container">
			<div class="header-wrap">
				<div class="header-top d-flex justify-content-between align-items-center navbar-expand-md">
					<div class="col menu-left">

						<a class="active" href="./">Accueil</a>
						<a  href="./?action=menu" >Menu</a>

					</div>
					<nav class="col navbar navbar-expand-md justify-content-end">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
							<span class="lnr lnr-menu"></span>
						</button>
						<!-- Navbar links -->
						<div class="collapse navbar-collapse menu-right" id="collapsibleNavbar">
							<ul class="navbar-nav justify-content-center w-100">
								<li class="nav-item hide-lg">
									<a class="nav-link" href="./">Accueil</a>
								</li>
								
								<li class="nav-item hide-lg">
									<a class="nav-link" href="./?action=menu">Menu</a>
								</li>

							



									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
											Résersation et Commande
										</a>
										<div class="dropdown-menu">
											<style>
												ul.a {
													list-style-type: square;
												}
											</style>
											<ul class="a">
												<li>
													<a class="dropdown-item" href="./?action=reservation">Réservations</a>
												</li>
											</ul>
											<ul class="a">
												<li>
													<a class="dropdown-item" href="./?action=order">Commande en Ligne</a>
												</li>
											</ul>
										</div>
									</li>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href="./?action=login">Connexion</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
    <?= $content ?>
    <footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>© Restaurant IPSSI 2022</h4>
						<!-- <div class="" id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								method="get">
								<div class="input-group">
									<input type="text" class="form-control" name="EMAIL" placeholder="Rechercher Poulet" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Rechercher Burger'" required="" type="email">
									<div class="input-group-btn">
										<button class="btn btn-default" type="search">
											<span class="lnr lnr-arrow-right"></span>
										</button>
									</div>
									<div class="info"></div>
								</div>
							</form>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</footer>
	<?php foreach ($scripts as $script) : ?>
		<?= $script; ?>
	<?php endforeach; ?>
</body>