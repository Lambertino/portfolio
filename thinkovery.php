<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | Thinkovery</title>
		<meta name="description" content="Agence nantaise, thinkovery.com vulgarise les savoirs scientifiques les plus divers, via de courtes vidéos donnant la parole à des experts. Ce projet est un travail de mise en page rigoureux (choix de la typographie, rythme des paragraphes etc...) afin de rendre la lecture confortable et plus fluide." />
		<?php require_once('partials/head.php'); ?>
		<meta property="og:title" content="Lambert Roudil vous présente sa création de mise en page pour l'éditeur nantais Thinkovery." />
		<meta property="og:url" content="http://www.lambertroudil.com/thinkovery.php" />
	</head>

	<body>

		<!-- header -->
		<?php require_once('partials/header.php'); ?>

		<main id="pages-work">

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
				<p>
					Magazine nantais, <a href="http://www.thinkovery.com/" target="_blank">Thinkovery</a> vulgarise les
					savoirs scientifiques les plus divers avec des vidéos donnant la parole à des experts, des articles, et des infographies.
				</p>
				<p>
					Avec le magazine "Thinkovery", tiré à 11.000 exemplaires avec des articles relativement brefs dans
					l'ensemble, l'agence propose 150 pages au graphisme particulièrement soigné.
				</p>
				<p>
					Ce projet est un travail de mise en page rigoureux (choix de la typographie, rythme des paragraphes etc...)
					afin de rendre la lecture confortable et fluide.
				</p>
				<?php require_once('partials/back-list-print.php'); ?>
			</div>

		</main>

		<?php
			include('partials/footer.php');
		?>
