<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil, projet Shoes design</title>
		<meta name="description" content="Le styliste modéliste imagine et crée les modèles qui composent les collections de demain. Il a la responsabilité de développer une ligne complète de produits en correspondance avec l’image de la marque en adoptant une méthodologie stricte. Lambert Roudil vous présente ses modèles créés pour Miss Coquines." />
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

			<?php include('nav-product.php');?>

			<div class="logo-company">
				<img src="img/img-produit/shoes/logo-shoes.svg" alt="logo de la gamme de chaussure pour les magasins Miss Coquines">
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
						<img src="img/img-produit/shoes/shoes1.jpg" alt="chaussures collection hiver pour les magasins Miss Coquines"/>
					</div>
					<div class="item">
						<img src="img/img-produit/shoes/shoes.jpg" alt="chaussures collection hiver pour les magasins Miss Coquines"/>
					</div>
					<div class="item">
						<img src="img/img-produit/shoes/shoes2.jpg" alt="chaussures collection hiver pour les magasins Miss Coquines"/>
					</div>
					<div class="item">
						<img src="img/img-produit/shoes/shoes3.jpg" alt="chaussures collection hiver pour les magasins Miss Coquines"/>
					</div>
					<div class="item">
						<img src="img/img-produit/shoes/shoes4.jpg" alt="chaussures collection hiver pour les magasins Miss Coquines"/>
					</div>
					<div class="item">
						<img src="img/img-produit/shoes/shoes5.jpg" alt="chaussures collection hiver pour les magasins Miss Coquines"/>
					</div>
					<div class="item">
						<img src="img/img-produit/shoes/shoes6.jpg" alt="chaussures collection hiver pour les magasins Miss Coquines"/>
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
				<h1>Shoes design</h1>
				<p>Le styliste modéliste imagine et crée les modèles qui composent les collections de demain. Il a la responsabilité de développer une ligne complète de produits en correspondance avec l’image de la marque en adoptant une méthodologie stricte:</p>
				<ul>
					<li>- Repérer et évaluer des tendances par saison;</li>
					<li>- Réaliser un book de croquis pour présenter des modèles de chaussures : formes, hauteurs de talons, semelles…</li>
					<li>- Définir des thèmes et des lignes de chaussures (volumes, hauteurs de tiges…), sélectionner les matières et les couleurs</li>
					<li>- Elaborer un plan de collection, selon le nombre de lignes et de modèles définis par le chef de produit</li>
					<li>- Présenter les collections en interne et auprès des acheteurs.</li>
					<li>- Superviser la réalisation des prototypes jusqu’à leur mise au point.</li>
				</ul>
			</div>
		</main>

<?php
	include('footer.php');
?>
