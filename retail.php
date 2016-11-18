<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil, projets mobiliers sur mesure</title>
		<meta name="description" content="Le retail-design est la création d’espace de commerce ou plus précisément l'étude de l’agencement intérieur pour valoriser les produits vendus, soigner l’esthétisme extérieur pour inciter les consommateurs à entrer. Le designer Lambert Roudil vous présente l'ensemble de ses collections de mobilier destinées aux magasins." />
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

			<?php include('nav-product.php');?>

			<div class="logo-company">
				<img src="img/img-produit/mobilier/logo-mobilier.svg" alt="logo de la gamme de mobilier sur-mesure">
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
						<img src="img/img-produit/mobilier/mobilier5.jpg" alt="mobilier sur mesure créé par le designer Lambert Roudil"/>
					</div>
					<div class="item">
						<img src="img/img-produit/mobilier/mobilier6.jpg" alt="mobilier sur mesure créé par le designer Lambert Roudil" />
					</div>
					<div class="item">
						<img src="img/img-produit/mobilier/mobilier.jpg" alt="mobilier sur mesure créé par le designer Lambert Roudil" />
					</div>
					<div class="item">
						<img src="img/img-produit/mobilier/mobilier1.jpg" alt="mobilier sur mesure créé par le designer Lambert Roudil" />
					</div>
					<div class="item">
						<img src="img/img-produit/mobilier/mobilier2.jpg" alt="mobilier sur mesure créé par le designer Lambert Roudil" />
					</div>
					<div class="item">
						<img src="img/img-produit/mobilier/mobilier3.jpg" alt="mobilier sur mesure créé par le designer Lambert Roudil" />
					</div>
					<div class="item">
						<img src="img/img-produit/mobilier/mobilier4.jpg" alt="mobilier sur mesure créé par le designer Lambert Roudil" />
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
				<h1>Le mobilier sur-mesure</h1>
				<p>Le retail-design est la création d’espace de commerce ou plus précisément l'étude de
				 l’agencement intérieur pour valoriser les produits vendus, soigner l’esthétisme extérieur pour inciter les consommateurs à entrer.</p>
				<p>C'est dans le cadre de cette étude que j'ai pu concevoir ces différents mobiliers-
					sur-mesure destinés à habiller des espaces commerciaux ainsi que des hôtels.</p>
				<p>Les mobiliers sont réalisés afin d'optimiser l'accueil du client à travers une structure
				 prenant en compte les normes handicapées et un aspect pratique pour les employés qui y travaillent.</p>
			</div>

		</main>

<?php
	include('footer.php');
?>
