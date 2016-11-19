<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil et Listo</title>
		<meta name="description" content="Exposition du logotype de la start-up française Listo" />
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<meta name="theme-color" content="#59ABE3"/>

		<link rel="icon" type="image/png" href="img/favicon.ico" >
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="web/styles/screen.min.css">
	</head>

		<body>

			<!-- header -->
			<?php require_once('header.php'); ?>

			<main id="pages-work">

				<?php include('nav-graphism.php');?>

				<div class="logo-company">
					<img src="img/img-graphisme/listo/logotype-listo.png" class="img-responsive" alt="logo de la start-up française Listo">
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
							<img src="img/img-graphisme/listo/listo-1.jpg" alt="construction de l'identité visuelle de la start up Listo"/>
						</div>
						<div class="item">
							<img src="img/img-graphisme/listo/listo-2.jpg" alt="élaboration de la carte de visite de la start Up Listo"/>
						</div>
						<div class="item">
							<img src="img/img-graphisme/listo/listo-4.jpg" alt="construction de l'icône mobile de la start Up Listo"/>
						</div>
						<div class="item">
							<img src="img/img-graphisme/listo/listo-3.jpg" alt="déclinaison du logotype sur fond bleu San Marino de la start Up Listo"/>
						</div>
						<div class="item">
							<img src="img/img-graphisme/listo/listo-5.jpg" alt="déclinaison du logotype sur fond noir de la start Up Listo"/>
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
					<h1>Listo</h1>
					<p>Élaboration du logotype de la start-up française <strong>Listo</strong></p>
					<p>
						Il est le résultat d’un brief suivi d’une recherche créative approfondie visant à représenter et
						valoriser l'image de la start-up dont l'objectif est de faciliter la gestion des salariés dans les PME.
					</p>
					<p>
						Le logotype a été construit de manière à ce que celui-ci soit lisible facilement, simple, unique
						et non sujet à confusion avec les logos de ses concurrents.
					</p>
				</div>

			</main>

<?php include('footer.php'); ?>
