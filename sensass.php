<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil, designer global-Portfolio</title>
		<meta name="description" content="Développement du site vitrine et de l'identité visuelle de l'agence de communication (fictive) Sensass !" />
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<meta name="theme-color" content="#59ABE3"/>
		<link rel="icon" type="image/png" href="img/favicon.png" >
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/homepage.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/pages-work.css">
		<script type="text/javascript" src="js/jquery.1.6.2.js"></script>
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
		<script type="text/javascript" src="js/modernizr.custom.33604.js"></script>
	</head>

	<body>

		<!-- header -->
		<?php require_once('header.php'); ?>

		<main id="pages-work">

			<?php include('nav-web.php');?>

			<div class="logo-company">
				<a href="http://www.lambertroudil.com/sensass/" target="_blank"><img src="img/img-web/sensass/logo-sensass.svg" alt="logo de l'agence fictive Sensass"></a>
			</div>

			<!-- carousel project -->
			<div id="carousel-project" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				 	<li data-target="#carousel-project" data-slide-to="0" class="active"></li>
				 	<li data-target="#carousel-project" data-slide-to="1"></li>
				 	<li data-target="#carousel-project" data-slide-to="2"></li>
				 	<li data-target="#carousel-project" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/img-web/sensass/sensass.jpg" alt="construction du site internet de l'agence de communication Sensass!"/>
					</div>
					<div class="item">
						<img src="img/img-web/sensass/sensass1.jpg" alt="construction du site internet de l'agence de communication Sensass!"/>
					</div>
					<div class="item">
						<img src="img/img-web/sensass/sensass2.jpg" alt="carte de visite de l'agence de communication Sensass!"/>
					</div>
					<div class="item">
						<img src="img/img-web/sensass/sensass3.jpg" alt="tarif des prestations de l'agence de communication Sensass!"/>
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-project" role="button" data-slide="prev">
				  	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				  	<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-project" role="button" data-slide="next">
				  	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				  	<span class="sr-only">Next</span>
				</a>
			</div>
			<!-- /end carousel project -->

			<div class="description">
				<h1>Sensass!</h1>
				<p>Développement du site vitrine et de l'identité visuelle de l'agence de communication <strong>Sensass !</strong></p>
				<a href="http://www.lambertroudil.com/sensass/" target="_blank"><strong>
					<i class="glyphicon glyphicon-send"></i> visite du site de l'agence Sensass !</strong>
				</a>
			</div>

		</main>

<?php
	include('footer.php');
?>
