<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="UTF-8">
	<title>IPSSI Restaurant</title>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i|Roboto:400,500" rel="stylesheet">
    <?php foreach ($links as $link) : ?>
        <?= $link ?>
    <?php endforeach ?>

</head>

<body>

	<header class="header-area">
		<div class="container">
			<div class="header-wrap">
				<div class="header-top d-flex justify-content-between align-items-center navbar-expand-md">
					<div class="col menu-left">
						<a class="active" href="index2.html">Accueil</a>
						
						

						<a  href="menu.html" >Menu</a>

					</div>

					<nav class="col navbar navbar-expand-md justify-content-end">

				
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
							<span class="lnr lnr-menu"></span>
						</button>

						<!-- Navbar links -->
						<div class="collapse navbar-collapse menu-right" id="collapsibleNavbar">
							<ul class="navbar-nav justify-content-center w-100">
								<li class="nav-item hide-lg">
									<a class="nav-link" href="index2.html">Accueil</a>
								</li>
								
								<li class="nav-item hide-lg">
									<a class="nav-link" href="menu.html">Menu</a>
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
															<li><a class="dropdown-item" href="Order.html">Commande en Ligne</a></li>
															
															<li><a class="dropdown-item" href="booking.html">Réservation</a></li>
														</ul>
										</div>
									</li>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="logout.php">Deconnexion</a>
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
							<h4>Restaurant IPSSI</h4>
							<div class="" id="mc_embed_signup">
										</div>
										<div class="info"></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>