<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil, projet carré vert</title>
		<meta name="description" content="Propositions 3D originales d'aménagements d'appartement de types 2,3,4,5 dans la résidence Le Carré Vert à Nantes." />
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<meta name="theme-color" content="#59ABE3"/>

		<link rel="icon" type="image/png" href="img/favicon.png" >
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="web/styles/screen.min.css">

		<script type="text/javascript" src="js/jquery.1.6.2.js"></script>
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
		<script type="text/javascript" src="js/modernizr.custom.33604.js"></script>
	</head>

	<body>

		<!-- header -->
		<?php require_once('header.php'); ?>

		<main id="pages-work">

			<?php include('nav-retail.php');?>

			<div class="logo-company">
				<img src="img/img-espace/lecarrevert/logo-carrevert.svg" alt="logo de la résidence Carré-vert">
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
						<img src="img/img-espace/lecarrevert/lecarrevert.jpg" alt="aménagement d'intérieur pour la résidence carré vert"/>
					</div>
					<div class="item">
						<img src="img/img-espace/lecarrevert/lecarrevert1.jpg" alt="aménagement d'intérieur pour la résidence carré vert"/>
					</div>
					<div class="item">
						<img src="img/img-espace/lecarrevert/lecarrevert2.jpg" alt="aménagement d'intérieur pour la résidence carré vert"/>
					</div>
					<div class="item">
						<img src="img/img-espace/lecarrevert/lecarrevert3.jpg" alt="aménagement d'intérieur pour la résidence carré vert"/>
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
				<h1>Le Carré vert</h1>
				<p>L'aménagement intérieur ou décoration d'intérieur est une discipline visant à la disposition des espaces bâti intérieur.
					L'aménagement intérieur est en lien entre la décoration, le design, l'ergonomie et l'architecture.</p>
				<p>Proposition originale d'aménagements d'appartement de types 2,3,4,5 dans la résidence "Le Carré Vert" à Nantes.</p>
				<p>“L’architecture actuelle s’occupe de la maison, de la maison ordinaire et courante pour hommes normaux et courants.
					Elle laisse tomber les palais. Voilà un signe des temps.” <strong>Le Corbusier</strong></p>
			</div>

		</main>

<?php
	include('footer.php');
?>
