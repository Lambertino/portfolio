<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | Gawad Kalinga</title>
		<meta name="description" content="L'association Gawad Kalinga, créée en 2003 lutte contre la pauvreté aux Philippines en apportant aux populations défavorisées les ressources matérielles, morales et humaines nécessaires pour garantir un développement durable. Le nom de l’organisme vient du tagalog et veut dire prendre soin." />
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
				<img src="img/img-produit/gk-chair/logo-gk.svg" alt="logo de l'ONG Gawad Kalinga">
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
						<img src="img/img-graphisme/gk/gk.jpg" alt="logo de l'ONG Gawad Kalinga"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/gk/gk1.jpg" alt="logo de l'ONG Gawad Kalinga"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/gk/gk2.jpg" alt="logo de l'ONG Gawad Kalinga"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/gk/gk3.jpg" alt="logo de l'ONG Gawad Kalinga"/>
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
				<h1>Gawad Kalinga</h1>
				<a href="http://gk-france.fr/" class="btn btn-ghost" target="_blank">En savoir plus sur Gawad Kalinga</a>
				<?php require_once('partials/back-list-print.php'); ?>
			</div>

		</main>

		<?php
			include('partials/footer.php');
		?>
