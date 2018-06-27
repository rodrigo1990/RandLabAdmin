<?php
require_once("clases/Novedad.php"); 

$nov = new Novedad();


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>RANDLAB - SITIO OFICIAL</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<!-- <link type="text/css" rel="stylesheet" href="css/magnific-popup.css" /> -->

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link type="text/css" rel="stylesheet" href="css/animate.css" />
	
	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/animate.css">

	<!-- OWL CARROUSEL -->
	<link rel="stylesheet" href="owlcarousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="owlcarousel/dist/assets/owl.theme.default.min.css">

	<!-- FANCY BOX -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.4/jquery.fancybox.min.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<style>
	    .img-responsive {
              display: block;
              /*max-width: 100%;*/
              max-width: 100%;
              height: auto;
            }

        .gal-image{
        	height: 150px;
        	width: 150px;

        }
	    
	</style>
</head>

<body>
    
    <!--<img id="stickPrice" class='img-responsive' style="float: right;position: fixed;right: -1vw;z-index: 2000;top:7%;margin-top:0%;display:none" src="../sticks/stick7900.png">-->
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.html">
							<img class="logo" src="img/logo.png" alt="logo"  >
							<img class="logo-alt" src="img/logo-alt.png" alt="logo" >
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">Acerca De Randlab</a></li>
					<li><a href="#portfolio">Productos</a></li>
					<!-- <li class="has-dropdown"><a href="#blog">Blog</a>
						<ul class="dropdown">
							<li><a href="blog-single.html">blog post</a></li>
						</ul>
					</li> -->
					<li><a href="#novedades">Novedades</a></li>
					<li><a href="#contact">Contactanos</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">BIENVENIDOS</h1>
							<p class="white-text"><b>Randlab</b> es un orgulloso y apasionado proveedor de la industria equina en todo el mundo. Nuestra misíon en la industria veterinaria consiste en proporcionar medicamentos veterinarios nuevos, innovadores y rentables para veterinarios equinos y propietarios de caballos.
							</p>

							<p class="white-text">Es una empresa familiar del pais de origen y se centra en las relaciones con clientes que comenzó en 2004.Desde entonces el negocio se ha expandido para incluir oficinas en Nueva Zelanda, Dubai, Singapur, China, Malasia, Belgica, Chipre, Argentina y mas recientemente, Estados Unidos.
							</p>
							<!--  <a href="#about"><button class="white-btn">¿Quienes somos?</button></a>
							<a href="#portfolio"><button class="main-btn">Portfolio</button></a>-->
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Acerca de Randlab</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-3">
					<div class="about">
						<hr>
						<h3>Calidad</h3>
						<p>Nuestro compromiso con la calidad comienza con la obtención de los  insumos y materias primas para nuestros productos.<br>
						Ademas fabricamos todos nuestros productos en instalaciones aprobadas por GMP a través del regulador australiano APVMA.
						Seguimos cuidadosamente cada lote de nuestro producto fabricado con estrictas pruebas de control de calidad (QA) en laboratorios independientes aprobados por el gobierno.</p>
						<a href="#" style="display:none;">Read more</a>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-3">
					<div class="about">
						<hr>
						<h3>Servicio</h3>
						<p>Tenemos una filosofía simple con nuestro servicio: el cliente es lo primero y la relación es de gran valor para Randlab. <br> Nos enorgullecemos del nivel personal de servicio que ofrecemos a nuestro veterinario, mayorista y socios institucionales de todo el mundo. <br> Contáctenos para conocer nuestros productos y servicios.</p>
						<a href="#" style="display:none;">Read more</a>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-3">
					<div class="about">
						<hr>
						<h3>Cuidado</h3>
						<p>Randlab se preocupa mucho por su participación en la comunidad equina y veterinaria a nivel mundial. Estamos activos en organizaciones benéficas de equinos y veterinarios seleccionados en todo el mundo. <br>
						Puede encontrar Randlab en todas las conferencias veterinarias equinas importantes y eventos educativos adicionales.
						</p>
						<a href="#" style="display:none;">Read more</a>
					</div>
				</div>
				<!-- /about -->

				<div class="col-md-3">
					<div class="about">
						<hr>
						<h3>Valor</h3>
						<p>Randlab entiende que ser dueño de caballos para cualquier necesidad puede ser costoso. También entendemos y apoyamos a los veterinarios equinos al proporcionar nuestros productos a un nivel competitivo de costos. <br>
						Nuestro compromiso con estos cuatro pilares ha asegurado que podamos continuar creciendo, investigando nuevos productos y entregando productos que satisfagan las necesidades de los dueños de caballos y veterinarios equinos por igual.

						</p>
						<a href="#" style="display:none;">Read more</a>
					</div>
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->


	<!-- Portfolio -->
	<div id="portfolio" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Productos</h2>
				</div>
				<!-- /Section header -->

				<!-- Work -->
				<div class="col-md-3 col-xs-6 work">
					<h3 class="text-center">Gastropell Daily</h3>
					<img class="img-responsive" src="./img/productos/gastropell.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<!-- <span>Categoria</span> -->
						<h3>Gastropell Daily</h3>
						<div class="work-link">
							<a style="display:none;" href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox a-button" data-toggle="modal" data-target="#gastropell" ><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-3 col-xs-6 work">
					<h3 class="text-center">Equinate I.V. 4ml </h3>
					<img class="img-responsive" src="./img/productos/Equinate.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<h3>Equinate I.V. 4ml</h3>
						<div class="work-link">
							<a style="display:none;" href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox a-button" data-toggle="modal" data-target="#equinate4" ><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-3 col-xs-6 work">
					<h3 class="text-center">Equinate I.V. 2m </h3>
					<img class="img-responsive" src="./img/productos/equinate2ml.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<h3>Equinate I.V. 2m</h3>
						<div class="work-link">
							<a style="display:none;" href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox a-button" data-toggle="modal" data-target="#equinate2" ><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-3 col-xs-6 work">
					<h3 class="text-center">Ovu-mate</h3>
					<img class="img-responsive" src="./img/productos/ovumate.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<h3>Ovu-mate</h3>
						<div class="work-link">
							<a style="display:none;" href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox a-button" data-toggle="modal" data-target="#ovu" ><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-3 col-xs-6 work">
					<h3 class="text-center">Arthropen Vet 250</h3>
					<img class="img-responsive" src="./img/productos/arthropen250.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<h3>Arthropen Vet 250</h3>
						<div class="work-link">
							<a style="display:none;" href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox a-button" data-toggle="modal" data-target="#arth250" ><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-3 col-xs-6 work">
					<h3 class="text-center">Arthropen Vet 100</h3>
					<img class="img-responsive" src="./img/productos/arthropen100.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<h3>Arthropen Vet 100</h3>
						<div class="work-link">
							<a style="display:none;" href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox a-button" data-toggle="modal" data-target="#arth100" ><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>

				<!-- Work -->
				<div class="col-md-3 col-xs-6 work">
					<h3 class="text-center">Meloxicam</h3>
					<img class="img-responsive" src="./img/productos/meloxicam.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<h3>Meloxicam</h3>
						<div class="work-link">
							<a style="display:none;" href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox a-button" data-toggle="modal" data-target="#melo" ><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>


				<!-- Work -->
				<div class="col-md-3 col-xs-6 work">
					<h3 class="text-center">Airway Tmps</h3>
					<img class="img-responsive" src="./img/productos/airway.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<h3>Airway Tmps</h3>
						<div class="work-link">
							<a style="display:none;" href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox a-button" data-toggle="modal" data-target="#air" ><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Portfolio -->

	<!-- Service -->
	<div id="service" class="section md-padding"style="display:none;">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row" style="display:none">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Servicios</h2>
				</div>
				<!-- /Section header -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-diamond"></i>
						<h3>Maecenas tempus</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-rocket"></i>
						<h3>Condimentum</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-cogs"></i>
						<h3>Semper Libero</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-diamond"></i>
						<h3>Rhoncus</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-pencil"></i>
						<h3>Semper Libero</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-flask"></i>
						<h3>Tellus Eget </h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
					</div>
				</div>
				<!-- /service -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Service -->


	<!-- Why Choose Us -->
	<div id="features" class="section md-padding bg-grey" style="display:none;">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row" style="display:none;">

				<!-- why choose us content -->
				<div class="col-md-6">
					<div class="section-header">
						<h2 class="title">Servicios</h2>
					</div>
					<p>Molestie at elementum eu facilisis sed odio. Scelerisque in dictum non consectetur a erat. Aliquam id diam maecenas ultricies mi eget mauris. Ultrices sagittis orci a scelerisque purus.</p>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Quis varius quam quisque id diam vel quam elementum.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Mauris augue neque gravida in fermentum.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Orci phasellus egestas tellus rutrum.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
					</div>
				</div>
				<!-- /why choose us content -->

				<!-- About slider -->
				<div class="col-md-6">
					<div id="about-slider" class="owl-carousel owl-theme">
						<img class="img-responsive" src="./img/about1.jpg" alt="">
						<img class="img-responsive" src="./img/about2.jpg" alt="">
						<img class="img-responsive" src="./img/about1.jpg" alt="">
						<img class="img-responsive" src="./img/about2.jpg" alt="">
					</div>
				</div>
				<!-- /About slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Why Choose Us -->


	<!-- Numbers -->
	<div id="numbers" class="section sm-padding" style="display:none;">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background2.jpg');display:none;">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row" style="display:none;">

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-users"></i>
						<h3 class="white-text"><span class="counter">451</span></h3>
						<span class="white-text">fusce id velit</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-trophy"></i>
						<h3 class="white-text"><span class="counter">12</span></h3>
						<span class="white-text">feugiat nisl</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-coffee"></i>
						<h3 class="white-text"><span class="counter">154</span>K</h3>
						<span class="white-text">Fermentum</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-file"></i>
						<h3 class="white-text"><span class="counter">45</span></h3>
						<span class="white-text">Scelerisqu</span>
					</div>
				</div>
				<!-- /number -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->

	<!-- Pricing -->
	<div id="pricing" class="section md-padding" style="display:none;">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Precios</h2>
				</div>
				<!-- /Section header -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Plan Basico</span>
							<div class="price">
								<h3>$XX<span class="duration">/ mes</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>1GB Almacenamiento</p>
							</li>
							<li>
								<p>100 Cuentas Email</p>
							</li>
							<li>
								<p>24/24 Soporte</p>
							</li>
						</ul>
						<div class="price-btn">
							<button style="display:none;" class="outline-btn">Comprar ahora</button>
						</div>
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Silver plan</span>
							<div class="price">
								<h3>$XX<span class="duration">/ mes</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>1GB Almacenamiento</p>
							</li>
							<li>
								<p>100 Cuentas Email</p>
							</li>
							<li>
								<p>24/24 Soporte</p>
							</li>
						</ul>
						<div class="price-btn">
							<button style="display:none;" class="outline-btn">Comprar ahora</button>
						</div>
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Gold plan</span>
							<div class="price">
								<h3>$XX<span class="duration">/ mes</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>1GB Almacenamiento</p>
							</li>
							<li>
								<p>100 Cuentas Email</p>
							</li>
							<li>
								<p>24/24 Soporte</p>
							</li>
						</ul>
						<div class="price-btn">
							<button style="display:none;" class="outline-btn">Comprar ahora</button>
						</div>
					</div>
				</div>
				<!-- /pricing -->

			</div>
			<!-- Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Pricing -->


	<!-- Testimonial -->
	<div id="testimonial" class="section md-padding" style="display:none;">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background3.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Testimonial slider -->
				<div class="col-md-10 col-md-offset-1">
					<div id="testimonial-slider" class="owl-carousel owl-theme">

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="./img/perso1.jpg" alt="">
								<h3 class="white-text">Cliente</h3>
								<span>Puesto</span>
							</div>
							<p class="white-text">Molestie at elementum eu facilisis sed odio. Scelerisque in dictum non consectetur a erat. Aliquam id diam maecenas ultricies mi eget mauris.</p>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="./img/perso2.jpg" alt="">
								<h3 class="white-text">Cliente</h3>
								<span>Puesto</span>
							</div>
							<p class="white-text">Molestie at elementum eu facilisis sed odio. Scelerisque in dictum non consectetur a erat. Aliquam id diam maecenas ultricies mi eget mauris.</p>
						</div>
						<!-- /testimonial -->

					</div>
				</div>
				<!-- /Testimonial slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Testimonial -->

	<!-- Team -->
	<div id="team" class="section md-padding" style="display:none;">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Nuestro equipo</h2>
				</div>
				<!-- /Section header -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/team1.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Empleado</h3>
							<span>Puesto</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/team2.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Empleado</h3>
							<span>Puesto</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/team3.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Empleado</h3>
							<span>Puesto</span>
						</div>
					</div>
				</div>
				<!-- /team -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Team -->

	<!-- Blog -->
	<div id="novedades" class="section md-padding bg-grey" style="display:block;">

	

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Novedades</h2>
				</div>
				<!-- /Section header -->

				<!-- blog -->
				<div class="col-md-12 ">
					<div class="background-nov">
						<div class="cont">
							<!--  <div class="container" style="padding:50px">-->
								<div class="owl-carousel owl-theme" style="">
								<?php 
									$nov->listarNovedadesUser();

								 ?>
									
									
								</div>
							<!--</div> container -->
							
						</div>
						<div class="overlay"></div>
						
					</div>

					
				</div>
				<!-- /blog -->

				

			</div>
			<!-- /Row -->


	</div>
	<!-- /novedades -->


	<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Contacto</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-sm-3">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Teléfono</h3>
						<p>+549 11 3479 9999</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-3">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>ventas@randlab.com</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-3">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Dirección</h3>
						<p>San Isidro, Buenos Aires</p>
					</div>
				</div>
				<!-- /contact -->
				
				<!-- contact -->
				<div class="col-sm-3">
					<div class="contact">
						<i class="fa fa-file"></i>
						<h3>Sede Australia</h3>
						<p><a href="http://www.randlab.com.au" target="_blank">www.randlab.com.au</a> </p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact form -->
				<div class="col-md-8 col-md-offset-2">
					<form class="contact-form" action="mail-landing.php" method="POST">
						<input type="text" name="nombre" id="nombre" class="input" placeholder="Nombre" required>
						<input type="email" name="email" id="email" class="input" placeholder="Email" required>
						<input type="text" class="input" name="asunto" id="asunto" placeholder="Asunto" required>
						<textarea class="input" name="mensaje" id="mensaje" placeholder="Mensaje" required></textarea>
						<button  class="main-btn">¡Enviar!</button>
					</form>
				</div>
				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->


	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.html"><img src="img/logo-alt.png" alt="logo" style=""></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
					 <li><a href="https://www.facebook.com/randlab.ivan.1" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/RandlabArg" target="_blank"><i class="fa fa-twitter"></i></a></li>
						
						<li><a href="https://www.instagram.com/randlabargentina/" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<!--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2017. Todos los derechos reservados. Diseñado por <a href="https://www.legioncreativa.com.ar" target="_blank">Legion Creativa</a></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->
	<?php include("includes/modals.html"); ?>
	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<!--  <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>-->
	<script type="text/javascript" src="js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.4/jquery.fancybox.min.js"></script>
	<script src="owlcarousel/docs/assets/vendors/jquery.min.js"></script>
	<script type="text/javascript">
		var $jQueryOwl = $.noConflict();
	</script>
	<script src="owlcarousel/dist/owl.carousel.js"></script>
	<script>
		  $jQueryOwl('.owl-carousel').owlCarousel({
		    loop:false,
		    margin:10,
		    autoplay:true,
		    autoplayTimeout:7500,
		    nav:true,
		    dots:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        1200:{
		            items:1
		        }
		    }
		})
	</script>
	<script>
		$("a.grouped_elements").fancybox();
	</script>
	<!-- RESIZE ME -->
	<script type="text/javascript" src="js/jquery.ae.image.resize.min.js"></script>
	<script>
    $(function() {
      $jQueryOwl( ".resizeme" ).aeImageResize({ height: 300, width: 100 });
    });
  </script>

</body>

</html>
<!--
	<div class="owl-carousel owl-theme" style="">
								<div>
					<div class='container'>
						<h1>Titulo 1</h1>
						<h4>20/03/2018</h4>	
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel viverra tortor. Quisque ut turpis auctor, sodales quam ultrices, ultrices felis. Maecenas viverra posuere risus ut gravida. Vestibulum cursus dui at quam molestie ullamcorper. Pellentesque convallis dolor in tempor mattis. Nunc porttitor finibus libero ut consequat. Nullam efficitur orci at pulvinar pharetra. Maecenas pulvinar venenatis turpis sit amet bibendum. Donec lacus est, iaculis a eleifend eget, consectetur eget felis. Maecenas rutrum erat id accumsan pulvinar. Suspendisse aliquam congue neque sit amet lobortis. Vivamus at mi metus.</p>
						



 <ul class="flex">
												 <a data-fancybox='gallery1' href='uploads/nov1/1.jpg' data-caption="Quisque accumsan ut lorem in commodo. Vivamus dolor lacus, tempus quis ex eget, elementum ullamcorper purus. Duis dictum velit eu ante posuere, sit amet tempus nisi viverra. Nunc interdum lorem non tempus lobortis. Integer porttitor egestas auctor.">
												</a>
												<li>
													<a data-fancybox='gallery1' href='uploads/nov1/1.jpg' data-caption="Quisque accumsan ut lorem in commodo. Vivamus dolor lacus, tempus quis ex eget, elementum ullamcorper purus. Duis dictum velit eu ante posuere, sit amet tempus nisi viverra. Nunc interdum lorem non tempus lobortis. Integer porttitor egestas auctor.">
														<div class="gal-image" style='background:url(uploads/nov1/1.jpg);background-repeat: no-repeat; background-size: contain;background-position:center; '></div>
													</a> 
												</li>
												<li>
													<a data-fancybox='gallery1' href='uploads/nov1/2.png' data-caption="Quisque accumsan ut lorem in commodo. Vivamus dolor lacus, tempus quis ex eget, elementum ullamcorper purus. Duis dictum velit eu ante posuere, sit amet tempus nisi viverra. Nunc interdum lorem non tempus lobortis. Integer porttitor egestas auctor." >
														<div class="gal-image" style='background:url(uploads/nov1/2.jpg);background-repeat: no-repeat; background-size: contain;background-position:center; '></div>
													</a>
												</li>
												<li>
													<a data-fancybox='gallery1' href='uploads/nov1/3.jpg' data-caption="Quisque accumsan ut lorem in commodo. Vivamus dolor lacus, tempus quis ex eget, elementum ullamcorper purus. Duis dictum velit eu ante posuere, sit amet tempus nisi viverra. Nunc interdum lorem non tempus lobortis. Integer porttitor egestas auctor.">
														<div class="gal-image" style='background:url(uploads/nov1/3.jpg);background-repeat: no-repeat; background-size: contain;background-position:center; '></div>
													</a>
												</li>
												<li>
													<a data-fancybox='gallery1' href='uploads/nov1/4.jpg' data-caption="Quisque accumsan ut lorem in commodo. Vivamus dolor lacus, tempus quis ex eget, elementum ullamcorper purus. Duis dictum velit eu ante posuere, sit amet tempus nisi viverra. Nunc interdum lorem non tempus lobortis. Integer porttitor egestas auctor.">
														<div class="gal-image" style='background-image:url(uploads/nov1/4.jpg);background-repeat: no-repeat; background-size: contain;background-position:center;  '></div>
													</a>
												</li>
												<li>
													<a data-fancybox='gallery1' href='uploads/nov1/5.jpg' data-caption="Quisque accumsan ut lorem in commodo. Vivamus dolor lacus, tempus quis ex eget, elementum ullamcorper purus. Duis dictum velit eu ante posuere, sit amet tempus nisi viverra. Nunc interdum lorem non tempus lobortis. Integer porttitor egestas auctor.">
														<div class="gal-image" style='background-image:url(uploads/nov1/5.jpg);background-repeat: no-repeat; background-size: contain;background-position:center;'></div>
													</a>
												</li>
												<li>
													<a data-fancybox='gallery1' href='uploads/nov1/6.jpg' data-caption="Quisque accumsan ut lorem in commodo. Vivamus dolor lacus, tempus quis ex eget, elementum ullamcorper purus. Duis dictum velit eu ante posuere, sit amet tempus nisi viverra. Nunc interdum lorem non tempus lobortis. Integer porttitor egestas auctor.">
														<div class="gal-image" style='background-image:url(uploads/nov1/6.jpg);background-repeat: no-repeat; background-size: contain;background-position:center;'></div>
													</a>

												</li>
										
											</ul>
									</div>
								</div>	
								</div>-->