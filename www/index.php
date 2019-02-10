<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Andare Oltre</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- foglio di stile per il popup del login  -->
	<link rel="stylesheet" href="css/loginPopup.css">

	<!-- script js per il popup del login  -->
	<script src="js/scriptLogin.js"></script>
	
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<!-- inclusione del codice php per gestire il login -->
	<?php
		include "php/indexLogin.php";
	?>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
				<nav class="fh5co-nav" role="navigation">
					<div class="top-menu">
						<div class="container">
							<div class="row">
								<div class="col-xs-11 text-right menu-1">
									<ul>
										<li class="active"><a href="index.php">Home</a></li>
										<li class="has-dropdown">
											<a href="partecipare.php">Come partecipare</a>
											<ul class="dropdown">
												<li><a href="scuole.php">Scuole</a></li>
												<li><a href="partners.php">Partners</a></li>
												<li><a href="studenti.php">Studenti</a></li>
											</ul>
										</li>
										<li><a href="scuole.php">Scuole</a></li>
										<li><a href="organizzazioni.php">Organizzazioni</a></li>
										<li><a href="progetti.php">I nostri progetti</a></li>
										<li><a href="contatti.php">Contatti</a></li>
										<li><a href="gallery.php">Galleria</a></li>
										<li class="btn-cta"  onclick=""><a href="#"><span>Login</span></a></li>
										<li class="btn-cta"><a href="registrati.php"><span>Registrati</span></a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
				</nav>
				
				<aside id="fh5co-hero" class="js-fullheight">
					<div class="flexslider js-fullheight">
						<ul class="slides">
						<li style="background-image: url(images/img_bg_1.jpg);">
							<div class="overlay-gradient"></div>
							<div class="container">
								<div class="row">
									<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
										<div class="slider-text-inner">
											<h1>Andare Oltre</h1>
												<!--<h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>-->
												<p>L’Istituto di Formazione Professionale Alberghiero di Rovereto è ospitato in un edificio risalente al 1904 sorto come Istituto Pellagrologico.

													L’ asilo dei pellagrosi, oggi restituito in splendida e rinnovata veste alla città, fu inaugurato nel 1905 grazie all'opera del medico roveretano Guido De Probizer (1849 -1929 ).    
													L'Istituto Pellagrologico costituì la prima rocca per la difesa contro la pellagra, il duro morbo che desolava la vita delle comunità rurali trentine di fine Ottocento. Uomo di studio, di cuore e di azione, Guido De Probizer volle che l'Istituto sorgesse in una delle più belle posizioni di Rovereto: un visibile faro di civiltà, dal quale il tenace medico tesseva una capillare azione riparatrice contro gli effetti della pellagra.
												</p>
										</div>
									</div>
								</div>
							</div>
						</li>
							
						</ul>
					</div>
				</aside>
		
				<!-- inizio codice del popup di login -->
				<div id="idLogin" class="modal">
  
					<form class="modal-content animate" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
		
						<span onclick="document.getElementById('idLogin').style.display='none'" class="close" title="Close Modal">&times;</span>
			
						<div class="container">
							<div class="row form-group">
								<label for="uname" class="labelUP"><b>Username</b></label>
								<input type="text" placeholder="Enter Mail" name="mail" value="<?=$mail?>" class="login-input form-control" required>
							</div>
							<div class="row form-group">
								<label for="psw" class="labelUP"><b>Password</b></label>
								<input type="password" placeholder="Enter Password" name="psw" class="login-input form-control" required>
							</div>
							<button type="submit" name="login" class="form-btn btn btn-primary">Login</button>
							<label>
								<input type="checkbox" checked="checked" name="remember"> Remember me
							</label>
						</div>

						<div class="container" style="background-color:#f1f1f1">
							<span class="psw">Forgot <a href="#">password?</a></span>
						</div>
					</form>
		
				</div>
				<!-- fine codice del popup di login -->
				
				<div id="fh5co-counter" class="fh5co-counters fh5co-bg-section">
					<div class="container">
						<div class="row">
							<div class="col-md-4 text-center animate-box">
								<span class="icon"><i class="icon-user"></i></span>
								<span class="fh5co-counter js-counter" data-from="0" data-to="129" data-speed="5000" data-refresh-interval="50"></span>
								<span class="fh5co-counter-label">Volontari</span>
							</div>
							<div class="col-md-4 text-center animate-box">
								<span class="icon"><i class="icon-home"></i></span>
								<span class="fh5co-counter js-counter" data-from="0" data-to="3" data-speed="5000" data-refresh-interval="50"></span>
								<span class="fh5co-counter-label">Scuole</span>
							</div>
							<div class="col-md-4 text-center animate-box">
								<span class="icon"><i class="icon-users"></i></span>
								<span class="fh5co-counter js-counter" data-from="0" data-to="12" data-speed="5000" data-refresh-interval="50"></span>
								<span class="fh5co-counter-label">Partner</span>
							</div>
						</div>
					</div>
				</div>
				
			<div id="fh5co-event" class="fh5co-bg-section">
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Le nostre attività</h2>
							<p>Un tempo la formazione professione professionale era gestito dall’Enalc.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 text-center animate-box">
							<div class="services">
								<span class="icon">
									<i class="icon-home"></i>
								</span>
								<div class="desc">
									<h3><a href="#">Cena di natale</a></h3>
									<p class="date-event">25/12/2019</p>
									<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services">
								<span class="icon">
									<i class="icon-home"></i>
								</span>
								<div class="desc">
									<h3><a href="#">Casa di Riposo rovereto</a></h3>
									<p class="date-event">20/01/2019</p>
									<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services">
								<span class="icon">
									<i class="icon-home"></i>
								</span>
								<div class="desc">
									<h3><a href="#">Pranzo</a></h3>
									<p class="date-event">23/01/2019</p>
									<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
								</div>
							</div>
						</div>
						
						<div class="col-md-12 text-center animate-box">
							<p><a class="btn btn-primary btn-lg btn-learn" href="#">View More</a></p>
						</div>
					</div>
				</div>
			</div>
			
			<div id="fh5co-project">
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Scuole coinvolte</h2>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
						<a href="#"><img src="images/scuola1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive"></a>
						<h3>Istituto Tecnico Tecnologico Buonarroti - Pozzo</h3>
						<span>Via Brigata Acqui, 15, 38122 Trento TN</span>
					</div>
					<div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
						<a href="#"><img src="images/scuola2.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive"></a>
						<h3>Alberghiero Trentino di Rovereto</h3>
						<span>Viale dei Colli, 17, 38068 Rovereto TN</span>
					</div>
					<div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
						<a href="#"><img src="images/scuola3.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive"></a>
						<h3>Alberghiero Trentino di Levico</h3>
						<span>Via Giorgio Ziehl, 5, 38056 Levico Terme TN</span>
					</div>
				</div>
			</div>
			
			<footer id="fh5co-footer" role="contentinfo">
				<div class="container">
					<div class="row row-pb-md">
						<div class="col-md-3 fh5co-widget">
							<h4>Andare Oltre</h4>
							<p>L’Istituto di Formazione Professionale Alberghiero di Rovereto è ospitato in un edificio risalente al 1904 sorto come Istituto Pellagrologico. </p>
						</div>
						<div class="col-md-3 col-md-push-1">
							<h4>Navigazione</h4>
							<ul class="fh5co-footer-links">
								<li class="active"><a href="index.php">Home</a></li>
								<li>
									<a href="partecipare.php">Come partecipare</a>
									<ul class="dropdown">
										<li><a href="scuole.php">Scuole</a></li>
										<li><a href="partners.php">Partners</a></li>
										<li><a href="studenti.php">Studenti</a></li>
									</ul>
								</li>
								<li><a href="scuole.php">Scuole</a></li>
								<li><a href="organizzazioni.php">Organizzazioni</a></li>
								<li><a href="progetti.php">I nostri progetti</a></li>
								<li><a href="contatti.php">Contatti</a></li>
								<li><a href="galleria.php">Galleria</a></li>
								<li class="btn-cta"><a href="login.php"><span>Login</span></a></li>
								<li class="btn-cta"><a href="registrati.php"><span>Registrati</span></a></li>
							</ul>
						</div>

						<div class="col-md-3 col-md-push-1">
							<h4>Contatti</h4>
							<ul class="fh5co-footer-links">
								<li>Viale dei Colli, 17, 38068 Rovereto TN</li>
								<li><a href="tel://+39 0464 439164">+39 0464 439164</a></li>
								<li><a href="mailto:andareoltre.com">info@yoursite.com</a></li>
								<li><a href="http://gettemplates.co">gettemplates.co</a></li>
							</ul>
						</div>

					</div>

					<div class="row copyright">
						<div class="col-md-12 text-center">
							<p>
								<small class="block">&copy;Tutti i diritti riservati.</small> 
								<small class="block">Designed by <a href="http://buonarroti.tn.it/" target="_blank">I.T.T. Buonarroti</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
							</p>
							<p>
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
								</ul>
							</p>
						</div>
					</div>

				</div>
			</footer>
				
		</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

