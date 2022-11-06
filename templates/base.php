<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title> KUET Restaurant</title>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i|Roboto:400,500" rel="stylesheet">
    <?php foreach ($links as $link) : ?>
        <?= $link ?>
    <?php endforeach ?>
	<!--
			CSS
			============================================= -->

	<!-- <link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/availability-calendar.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/main.css"> -->
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header-area">
		<div class="container">
			<div class="header-wrap">
				<div class="header-top d-flex justify-content-between align-items-center navbar-expand-md">
					<div class="col menu-left">
						<a class="active" href="index2.html">Home</a>
						
						

						<a  href="menu.html" >menu</a>
						<a href="about2.html">about</a>

					</div>

					<div class="col-3 logo">
						<a href="index2.html"><img class="mx-auto" src="img/logo.png" alt="" width="270" height="100"></a>
					</div>
					<nav class="col navbar navbar-expand-md justify-content-end">

						<!-- Toggler/collapsibe Button -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
							<span class="lnr lnr-menu"></span>
						</button>

						<!-- Navbar links -->
						<div class="collapse navbar-collapse menu-right" id="collapsibleNavbar">
							<ul class="navbar-nav justify-content-center w-100">
								<li class="nav-item hide-lg">
									<a class="nav-link" href="index2.html">Home</a>
								</li>
								
								<li class="nav-item hide-lg">
									<a class="nav-link" href="menu.html">menu</a>
								</li>

							
								<li class="nav-item hide-lg">
									<a class="nav-link" href="about.php">about</a>
								</li>
								<!-- Dropdown -->

<!-- 
								<li class="nav-item dropdown">
									<a class="nav-link" href="booking.html">
									Booking
									</a> -->
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
											Book & Order
										</a>
										<div class="dropdown-menu">
												<style>
														ul.a {
															list-style-type: square;
														}
														
														
														</style>
														
														
														
														<ul class="a">
															<li>       	<a class="dropdown-item" href="Order.html">Online Ordering</a>                </li>
															
															<li>       		<a class="dropdown-item" href="booking.html">Booking</a>          </li>
														</ul>
										
									
										</div>
									</li>
									
								</li>
								<li class="nav-item">
									<a class="nav-link" href="gallery.html">Gallery</a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href="logout.php">Logout</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
    
    <footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-4  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h4>Chickens</h4>
							<div class="" id="mc_embed_signup">
								<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								 method="get">
									<div class="input-group">
										<input type="text" class="form-control" name="EMAIL" placeholder="Search Chickens" onfocus="this.placeholder = ''"
										 onblur="this.placeholder = 'Search Burgers '" required="" type="email">
										<div class="input-group-btn">
											<button class="btn btn-default" type="search">
												<span class="lnr lnr-arrow-right"></span>
											</button>
										</div>
										<div class="info"></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom row align-items-center justify-content-between">
					<p class="footer-text m-0 col-lg-6 col-md-12">This Project is made with
						<span class="lnr lnr-heart"></span> by <a href="#">Saikan</a></p>
					<div class="col-lg-6 col-sm-12 footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
						<a href="#"><i class="fa fa-whatsapp"></i></a>
					</div>
				</div>
			</div>
		</footer>