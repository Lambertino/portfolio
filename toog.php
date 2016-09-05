<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil, designer global-Portfolio</title>
		<meta name="description" content="Développement du site vitrine du designer Jean-Marie Guéno,www.jeanmariegueno.com, diplômé en arts appliqués de l’école Pivaut. Le designer, à la croisée des chemins entre le monde de l’art et celui l'entreprise, trouve son inspiration au cœur du pays guérandais entre marais salants et cité médiévale." />
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

		<main id="pages-work" class="col-sm-12">

			<?php include('nav-web.php');?>

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
				<a href="http://www.toog.fr" target="_blank"><strong>
					<i class="glyphicon glyphicon-send"></i> visite du site</strong>
				</a>
			</div>

		</main>

<?php
	include('footer.php');
?>