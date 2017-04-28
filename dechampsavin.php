<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | deChampsavin</title>
		<meta name="description" content="Développement du site deChampsavin, arboriste, élagueur, conseils à Nantes" />
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
				<a href="http://dechampsavin.fr/" target="_blank">
					<img src="img/img-web/dechampsavin/logotype-dechampsavin.png" alt="logotype deChampsavin, arboriste, élagueur, conseils à Nantes">
				</a>
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
						<img src="img/img-web/dechampsavin/de-champsavin-2.jpg" alt="présentation de plusieurs interfaces du site dechampsavin sur mobile"/>
					</div>
					<div class="item">
						<img src="img/img-web/dechampsavin/de-champsavin-1.jpg" alt="Le site deChampsavin est responsive : il s'adapte sur mobile, tablette, ordinateur portable et ordinateur de bureau."/>
					</div>
					<div class="item">
						<img src="img/img-web/dechampsavin/de-champsavin-3.jpg" alt="interface du site deChampsavin sur ordinateur portable"/>
					</div>
					<div class="item">
						<img src="img/img-web/dechampsavin/de-champsavin-4.jpg" alt="interface du site deChampsavin sur ordinateur de bureau"/>
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
				<h1>deChampsavin</h1>
				<p>
					La société <strong>deChampsavin</strong> est arboriste, élagueur et vous apporte ses conseils. C'est
					une entreprise engagée dans l'éco-responsabilité travaillant avec des collaborateurs passionnés qui
					aiment la nature et les arbres et ne cessent d'apprendre pour mieux travailler sur cette matière vivante.
					C'est un métier à risques qui nécessite une parfaite maîtrise des techniques d'élagages et d'abattages.
					<a href="http://dechampsavin.fr/" target="_blank">Visitez leur site</a> pour en apprendre plus sur
					cette entreprise dynamique !
				</p>
				<p>
					Développement du site <strong>deChampsavin</strong> avec le CMS <a href="https://bolt.cm/" target="_blank">Bolt</a>.
					Le site est entièrement administrable. Ainsi, l'équipe deChampsavin peut facilement mettre à jour l'ensemble
					de ses contenus et informations.
				</p>
				<p>HTML, SCSS, jQuery, Bolt</p>
				<a href="http://dechampsavin.fr/" class="btn btn-ghost" target="_blank">
					<strong>Visite du site</strong>
				</a>
				<?php require_once('partials/back-list-web.php'); ?>
			</div>

		</main>

		<?php
			include('partials/footer.php');
		?>
