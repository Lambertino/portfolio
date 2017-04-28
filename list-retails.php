<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | Design d'espace</title>
		<meta name="description" content="" />
		<meta charset="UTF-8">
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

		<main id="pages-list" class="text-center">
			<figure class="item">
				<img src="img/img-espace/thumbnails/5e-avenue.jpg" alt="Découvrez le projet de 5e Avenue, galerie marchande située en plein centre ville de St Nazaire."/>
			  	<figcaption>
			  	  	<h3>5e Avenue</h3>
			  	  	<p>Galerie marchande située en plein centre ville de St Nazaire.</p>
			  	</figcaption><a href="5e-avenue.php"></a>
			</figure>
			<figure class="item">
				<img src="img/img-espace/thumbnails/carre-vert.jpg" alt="Découvrez le projet Carré Vert, aménagements d'appartements."/>
			  	<figcaption>
			  	  	<h3>Le Carré Vert</h3>
			  	  	<p>Aménagements d'appartements de types 2,3,4,5 dans la résidence "Le Carré Vert" à Nantes.</p>
			  	</figcaption><a href="carre-vert.php"></a>
			</figure>
		</main>

		<?php
			include('partials/footer.php');
		?>
