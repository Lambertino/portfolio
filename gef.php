<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | Global Estuaries Forum</title>
		<meta name="description" content="Développement du site de Global Estuaries Forum, espace pour l'ensemble des acteurs impliqués dans la gestion des estuaires à travers le monde." />
		<?php require_once('partials/head.php'); ?>
		<meta property="og:title" content="Lambert Roudil, vous présente le site de Global Estuaries Forum, espace pour l'ensemble des acteurs impliqués dans la gestion des estuaires à travers le monde." />
		<meta property="og:url" content="http://www.lambertroudil.com/gef.php" />
	</head>

	<body>

		<!-- header -->
		<?php require_once('partials/header.php'); ?>

		<main id="pages-work">

			<div class="logo-company">
				<a href="http://www.globalestuariesforum.com/" target="_blank">
					<img src="img/img-web/gef/logotype-gef.jpg" alt="logotype de Global Estuaries Forum, cliquez pour visiter le site sur un nouvel onglet">
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
						<img src="img/img-web/gef/gef-1.jpg" alt="interface du site de l'AMEBAT sur ordinateur portable"/>
					</div>
					<div class="item">
						<img src="img/img-web/gef/gef-2.jpg" alt="interface du site de l'AMEBAT sur mobile"/>
					</div>
					<div class="item">
						<img src="img/img-web/gef/gef-3.jpg" alt="interface du site de l'AMEBAT sur tablette"/>
					</div>
					<div class="item">
						<img src="img/img-web/gef/gef-4.jpg" alt="interface du site de l'AMEBAT sur ordinateur portable"/>
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
				<h1>Global Estuaries Forum</h1>
				<p>
					Le <strong>Global Estuaries Forum</strong> permet à différents acteurs de débattre des enjeux d’une
					gouvernance plus adaptée pour une croissance économique et durable des estuaires et des moyens de
					fédérer ces territoires afin qu’ils soient perçus et gérés comme des espaces à part entière. Le forum
					rassemble des délégations de décideurs des grands estuaires du monde pour s’attaquer aux grands défis
					économiques et environnementaux de demain.
				</p>
				<p>
					Le CMS <strong>WordPress</strong> a été choisi pour ce projet pour son référencement optimal dans les moteurs de recherche,
					sa facilité d’utilisation pour l'entreprise, sa grande flexibilité et ses nombreux plugins (ici plugin multilingue)...

				</p>
				<a href="http://www.globalestuariesforum.com/" class="btn btn-ghost" target="_blank">
					<strong>Visite du site</strong>
				</a>
				<?php require_once('partials/back-list-web.php'); ?>
			</div>

		</main>

		<?php
			include('partials/footer.php');
		?>
