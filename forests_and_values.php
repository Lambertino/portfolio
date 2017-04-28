<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | Forests & Values</title>
		<meta name="description" content="Webdesign du site Forests and Values, consulting forestier." />
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<meta name="theme-color" content="#59ABE3"/>

		<link rel="icon" type="image/png" href="img/favicon.ico" >
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="web/styles/screen.min.css">
	</head>

	<body>

		<!-- header -->
		<?php require_once('partials/header.php'); ?>

		<main id="pages-work">

			<div class="logo-company">
				<a href="http://forests-and-values.fr/" target="_blank">
					<img src="img/img-web/forests-values/logotype-forests-values.svg"
						 alt="Cliquez pour accéder directement au site internet de Forests & Values sur un nouvel onglet."
						 width="300">
				</a>
			</div><br>

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
						<img src="img/img-web/forests-values/mockup-1.jpg" alt="Logotype de Forests & Values sur une image d'arrière-plan flou représentant une forêt avec un soleil levant."/>
					</div>
					<div class="item">
						<img src="img/img-web/forests-values/mockup-2.jpg" alt="interface du site de Forests & Values sur une tablette et un téléphone portable couchés sur le sol."/>
					</div>
					<div class="item">
						<img src="img/img-web/forests-values/mockup-3.jpg" alt="interface du site de Forests & Values sur un ordinateur portable"/>
					</div>
					<div class="item">
						<img src="img/img-web/forests-values/mockup-4.jpg" alt="interface du site de Forests & Values sur un ordinateur de bureau"/>
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
				<h1>Forests and Values</h1>
				<p>
					Forest & Values est une société créée en 2010, elle est une émanation de <a href="http://www.forestryclubdefrance.com/" target="_blank">Forestry Club de France</a>.
					Sa principale mission est de déployer l’ensemble des services du groupe sur les continents sud-américain,
					nord-américain, africain ou encore en asiatique.
				</p>
				<p>
					Depuis fin 2016, Forests and Values se spécialise sur la thématique des inventaires forestiers et
					plus précisément sur l’articulation entre les différentes sources de données possibles pour maximiser
					le rendement des actifs forestiers.
				</p>
				<p>
					Webdesign et intégration du site <strong>Forests & Values</strong>.
				</p>
				<p>HTML, SCSS, jQuery</p>
				<a href="http://forests-and-values.fr/" class="btn btn-ghost" target="_blank">
					<strong>Visite du site</strong>
				</a>
				<?php require_once('partials/back-list-web.php'); ?>
			</div>

		</main>

		<?php include('partials/footer.php'); ?>
