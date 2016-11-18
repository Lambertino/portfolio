<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil, projet Thinkovery</title>
		<meta name="description" content="Agence nantaise, thinkovery.com vulgarise les savoirs scientifiques les plus divers, via de courtes vidéos donnant la parole à des experts. Ce projet est un travail de mise en page rigoureux (choix de la typographie, rythme des paragraphes etc...) afin de rendre la lecture confortable et plus fluide." />
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

			<?php include('nav-graphism.php');?>

			<div class="logo-company">
				<img id="img-thinkovery" src="img/img-graphisme/thinkovery/logo-thinkovery.svg" alt="logo de l'entreprise Thinkovery, magazine culturel">
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
						<img src="img/img-graphisme/thinkovery/broyer.jpg" alt="mise en page d'un article du magazine culturel Thinkovery"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/thinkovery/broyer-1.jpg" alt="mise en page d'un article du magazine culturel Thinkovery"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/thinkovery/accoucher.jpg" alt="mise en page d'un article du magazine culturel Thinkovery"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/thinkovery/accoucher-1.jpg" alt="mise en page d'un article du magazine culturel Thinkovery"/>
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
				<h1>Thinkovery</h1>
				<p>Agence nantaise, thinkovery.com vulgarise les savoirs scientifiques les plus divers, via de courtes vidéos donnant la parole à des experts.</p>
				<p>Avec le magazine "Thinkovery", tiré à 11.000 exemplaires avec des articles relativement brefs dans l'ensemble, l'agence nous propose 150 pages au graphisme particulièrement soigné</p>
				<p>Ce projet est un travail de mise en page rigoureux (choix de la typographie, rythme des paragraphes etc...) afin de rendre la lecture confortable et plus fluide.</p>
			</div>

		</main>

<?php
	include('footer.php');
?>
