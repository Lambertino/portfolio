<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | Bretagne VIP</title>
		<meta name="description" content="Webdesign et développement du site Bretagne VIP, conciergerie privée et professionnelle du grand Ouest." />
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
				<a href="http://bretagnevip.com/" target="_blank">
					<img src="img/img-web/bretagne-vip/logotype-bretagne-vip.svg"
						 alt="Bretagne VIP, conciergerie privée et professionnelle du grand Ouest."
						 width="250">
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
						<img src="img/img-web/bretagne-vip/mockup.jpg" alt="interface du site intranet de aidamt annuaire sur un ordinateur de bureau blanc."/>
					</div>
					<div class="item">
						<img src="img/img-web/bretagne-vip/mockup-1.jpg" alt="interface du site intranet de aidamt annuaire sur un ordinateur de bureau blanc."/>
					</div>
					<div class="item">
						<img src="img/img-web/bretagne-vip/mockup-2.jpg" alt="interface du site intranet de aidamt annuaire."/>
					</div>
					<div class="item">
						<img src="img/img-web/bretagne-vip/mockup-3.jpg" alt="interface du site intranet de aidamt portail."/>
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
				<h1>Bretagne VIP</h1>
				<p>
					Webdesign, intégration et développement web du site de Bretagne VIP.
				</p>
				<p>
					Bretagne VIP est la conciergerie privée et professionnelle du grand Ouest au service des particuliers,
					entreprises, administrations et collectivités.
				</p>
				<p>Bolt, Twig, HTML-5, SCSS, jQuery</p>
				<a href="http://bretagnevip.com/" class="btn btn-ghost" target="_blank">
					<strong>Visite du site</strong>
				</a>
				<?php require_once('partials/back-list-web.php'); ?>
			</div>

		</main>

		<?php include('partials/footer.php'); ?>
