<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | Design de produit</title>
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
				<img src="img/img-produit/thumbnails/grum.jpg" alt="Découvrez le projet de design de produit Grum."/>
			  	<figcaption>
			  	  	<h3>Grum</h3>
			  	  	<p>Gamme de mobiliers à assembler.</p>
			  	</figcaption><a href="grum.php"></a>
			</figure>
			<figure class="item">
				<img src="img/img-produit/thumbnails/catoast.jpg" alt="Découvrez le projet de design de produit ça toast."/>
			  	<figcaption>
			  	  	<h3>Catoast!</h3>
			  	  	<p>Grille croque-monsieur.</p>
			  	</figcaption><a href="catoast.php"></a>
			</figure>
			<figure class="item">
				<img src="img/img-produit/thumbnails/retail.jpg" alt="Découvrez les gammes de mobiliers sur-mesure dessinées par le design Lambert Roudil"/>
			  	<figcaption>
			  	  	<h3>Mobiliers</h3>
			  	  	<p>Créations de mobiliers sur-mesure.</p>
			  	</figcaption><a href="retail.php"></a>
			</figure>
			<figure class="item">
				<img src="img/img-produit/thumbnails/gk-chair.jpg" alt="Découvrez le projet de chaise en bambou !"/>
			  	<figcaption>
			  	  	<h3>Bamboo Chair</h3>
			  	  	<p>Assise en bambou.</p>
			  	</figcaption><a href="gk-chair.php"></a>
			</figure>
			<figure class="item">
				<img src="img/img-produit/thumbnails/shoes.jpg" alt="Découvrez les chaussures pour femme pensées par Lambert Roudil !"/>
			  	<figcaption>
			  	  	<h3>Shoes</h3>
			  	  	<p>Créations de chaussures pour femme.</p>
			  	</figcaption><a href="shoes.php"></a>
			</figure>
		</main>

		<?php
			include('partials/footer.php');
		?>
