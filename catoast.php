<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | Projet étudiant ça Toast</title>
		<meta name="description" content="Le grille pain ça Toast est en réalité un grille croque monsieur pour remplacer le banal sandwich par un déjeuner chaud dans la cafétéria ou autre lieu de pause. Il est facilement transportable, léger et amuse par son aspect pop" />
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
					<img src="img/img-produit/ca-toast/logo-catoast.svg" alt="logo du grille pain ça toast">
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
							<img src="img/img-produit/ca-toast/catoast.jpg" alt="image représentant le concept grille pain de Lambert Roudil"/>
						</div>
						<div class="item">
							<img src="img/img-produit/ca-toast/catoast1.jpg" alt="image représentant le concept grille pain de Lambert Roudil"/>
						</div>
						<div class="item">
							<img src="img/img-produit/ca-toast/catoast2.jpg" alt="image représentant le concept grille pain de Lambert Roudil"/>
						</div>
						<div class="item">
							<img src="img/img-produit/ca-toast/catoast3.jpg" alt="image représentant le concept grille pain de Lambert Roudil"/>
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
					<h1>Ca Toast !</h1>
					<p>
						Le grille pain "Ca Toast" est en réalité un grille croque monsieur pour remplacer le banal
						sandwich par un déjeuner chaud dans la cafétéria ou autre lieu de pause. Il est facilement
						transportable, léger et amuse par son aspect "pop".
					</p>
					<?php require_once('partials/back-list-products.php'); ?>
				</div>

		</main>

		<?php include('partials/footer.php');?>
