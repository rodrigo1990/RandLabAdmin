<?php 
if(!isset($_POST['email'])){
	header("Location:index.php");
}else{
require("class.phpmailer.php");
        $mail = new PHPMailer();
        $mail->Host = "localhost";
        $mail->IsHTML(true);

        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Username = "mcd77.1990@gmail.com";
        $mail->Password = "Javierjavier1990";
        $mail->Port = "465";

        $mail->From = $_POST['email'];
        $mail->FromName = $_POST['nombre'];
        $mail->Subject = "Consulta desde Web Ranldab ".$_POST['asunto']."";

        //reemplazar por email de ranldab
      	$mail->AddAddress("mcd77.1990@gmail.com","Usuario");


      	$cuerpo=$_POST["mensaje"];





      	$mail->Body = $cuerpo;
      	$mail->AltBody = "";
      	$mail->CharSet = 'UTF-8';
      	$mail->Send();



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="../animate.css" />



	<style>
	h1{
		color:#EFC23A;
	}

	footer {
  position: absolute !important;
  bottom: 0;
  width: 100%;
  }

	</style>
</head>
<body>
	<div class="landing-text-cont" style="text-align:center;">
		<a href="index.php"><img src="img/logo-big.png" alt="RANDLAB"></a>
		<h1>¡Gracias, estamos procesando tu consulta!</h1>
		<h2>En breve, nos pondremos en contacto</h2>
	</div>
	
	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
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
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
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
	<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
<?php }//else ?>