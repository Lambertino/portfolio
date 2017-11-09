<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | AMEBAT</title>
		<meta name="description" content="Développement du site de l'AMEBAT, le Service de Santé au Travail du Bâtiment et des Travaux Publics" />
		<?php require_once('partials/head.php'); ?>
		<meta property="og:title" content="Lambert Roudil, vous présente le site de l'AMEBAT, le Service de Santé au Travail du Bâtiment et des Travaux Publics." />
		<meta property="og:url" content="http://www.lambertroudil.com/amebat.php" />
	</head>

	<body>

		<!-- header -->
		<?php require_once('partials/header.php'); ?>

		<main id="pages-work">

			<div class="logo-company">
				<a href="http://amebat.fr/" target="_blank">
					<img src="img/img-web/amebat/logotype-amebat.png" alt="logotype de l'AMEBAT, le Service de Santé au Travail du Bâtiment et des Travaux Publics">
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
				 	<li data-target="#carousel-project" data-slide-to="4"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/img-web/amebat/amebat-5.jpg" alt="logotype de l'AEMABT illustré sur un bloc-note"/>
					</div>
					<div class="item">
						<img src="img/img-web/amebat/amebat-1.jpg" alt="interface du site de l'AMEBAT sur ordinateur portable"/>
					</div>
					<div class="item">
						<img src="img/img-web/amebat/amebat-2.jpg" alt="interface du site de l'AMEBAT sur mobile"/>
					</div>
					<div class="item">
						<img src="img/img-web/amebat/amebat-3.jpg" alt="interface du site de l'AMEBAT sur tablette"/>
					</div>
					<div class="item">
						<img src="img/img-web/amebat/amebat-4.jpg" alt="interface du site de l'AMEBAT sur ordinateur portable"/>
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
				<h1>AMEBAT</h1>
				<p>
					L’ <strong>AMEBAT</strong> : « Service de Santé au Travail du Bâtiment et des Travaux Publics » est une association
					créé en 1985 par les Organismes Professionnelles d’employeurs du BTP, pour permettre aux entreprises
					de satisfaire à leurs obligations en matière de santé au travail, en mettant à leur disposition des
					moyens de prévention par le biais d’équipes pluridisciplinaires, afin de préserver la santé physique
					et mentale des salariés tout au long de leur parcours professionnel.
				</p>
				<p>
					Développement du site de <strong>l'AMEBAT</strong>. L'utilisation du CMS <a href="https://bolt.cm/" target="_blank">Bolt</a>
					se justifie par son inferface d'administration userfriendly. Ainsi, l'équipe de l'AMEBAT peut
					administrer ses actualités quotidiennes, ses offres d'emploi et sa documentation facilement et rapidement.
				</p>
				<p>HTML, SCSS, jQuery, Bolt</p>
				<a href="http://amebat.fr/" class="btn btn-ghost" target="_blank">
					<strong>Visite du site</strong>
				</a>
				<?php require_once('partials/back-list-web.php'); ?>
			</div>

		</main>

		<?php
			include('partials/footer.php');
		?>
