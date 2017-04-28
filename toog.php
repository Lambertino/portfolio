<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | Toog</title>
		<meta name="description" content="Développement du site vitrine de l'agence web nantaise Toog,www.toog.fr" />
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

		<main id="pages-work" class="col-sm-12">

			<div class="logo-company">
				<a href="http://www.toog.fr" target="_blank">
					<img src="img/img-web/toog/logotype-toog.png" alt="logo de l'entreprise Toog, http://www.toog.fr">
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
						<img src="img/img-web/toog/mobile.jpg" alt="interface du site toog.fr sur téléphone portable"/>
					</div>
					<div class="item">
						<img src="img/img-web/toog/tablet.jpg" alt="interface du site toog.fr sur tablette iPad"/>
					</div>
					<div class="item">
						<img src="img/img-web/toog/laptop.jpg" alt="interface du site toog.fr sur ordinateur portable"/>
					</div>
					<div class="item">
						<img src="img/img-web/toog/desktop.jpg" alt="interface du site toog.fr sur ordinateur de bureau"/>
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
				<h1>Toog</h1>
				<p>
					TOOG est une agence web située à Nantes, spécialisée dans la création et le développement de sites
					internet, applications web, plateformes digitales.
				</p>
				<p>
					Web design et intégration du site de l'agence Toog mettant en valeur ses compétences, son portfolio,
					son équipe et ses références. La navigation a été élaboré le plus simplement possible afin de montrer
					l'essentiel au visiteur et client potentiel le plus directement, d'où le choix d'un One-Page.
				</p>
				<p>HTML, CSS, jQuery, Bootstrap</p>
				<a href="http://www.toog.fr" class="btn btn-ghost" target="_blank">
					<strong>Visite du site</strong>
				</a>
				<?php require_once('partials/back-list-web.php'); ?>
			</div>

		</main>

		<?php
			include('partials/footer.php');
		?>
