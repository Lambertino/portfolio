<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | Regional Partner</title>
		<meta name="description" content="Création du site Regional Partner, service d'aide au développement et à l'implantation d'entreprises." />
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
				<a href="https://www.regional-partner.com/" target="_blank">
					<img src="img/img-web/regional-partner/logotype-regional-partner.svg"
						 alt="Regional Partner, service d'aide au développement et à l'implantation d'entreprises."
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
						<img src="img/img-web/regional-partner/regional-partner-1.jpg" alt="interface du site intranet de aidamt annuaire sur un ordinateur de bureau blanc."/>
					</div>
					<div class="item">
						<img src="img/img-web/regional-partner/regional-partner-2.jpg" alt="interface du site intranet de aidamt annuaire sur un ordinateur de bureau blanc."/>
					</div>
					<div class="item">
						<img src="img/img-web/regional-partner/regional-partner-3.jpg" alt="interface du site intranet de aidamt annuaire."/>
					</div>
					<div class="item">
						<img src="img/img-web/regional-partner/regional-partner-4.jpg" alt="interface du site intranet de aidamt portail."/>
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
				<h1>Regional Partner</h1>
				<p>
					UI / UX, webdesign, intégration et développement web du site de Regional Partner.
				</p>
				<p>
					Regional Partner est le leader de la détection de projets d'investissement, au service de l’attractivité
					des territoires.
				</p>
				<p>
					Forte d’une équipe de 16 collaborateurs sur ses sites de Vannes et Lyon, Regional Partner conçoit,
					met en oeuvre et traite les contacts issus d'actions marketing multicanal et digitales dédiées à la
					promotion des territoires et des services aux entreprises proposés par les collectivités locales et
					leurs agences de développement.
				</p>
				<p><strong>Technologies utilisées : </strong>Bolt, Twig, HTML-5, SCSS, jQuery</p>
				<a href="https://www.regional-partner.com/" class="btn btn-ghost" target="_blank">
					<strong>Visite du site</strong>
				</a>
				<?php require_once('partials/back-list-web.php'); ?>
			</div>

		</main>

		<?php include('partials/footer.php'); ?>
