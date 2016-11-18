<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil, projet Owly Fruit</title>
		<meta name="description" content="Owly fruit est une entreprise philippine spécialisée dans les smoothies, boissons réalisées à partir de fruits et légumes frais." />
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
					<img src="img/img-graphisme/owly-fruit/logo-owlyfruit.svg" alt="logo de l'entreprise owly fruit, glaces et smoothies naturels">
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
						<img src="img/img-graphisme/owly-fruit/owlyfruit.jpg" alt="développement de l'identité visuelle d'owly fruit"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/owly-fruit/owlyfruit1.jpg" alt="développement de l'identité visuelle d'owly fruit"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/owly-fruit/owlyfruit2.jpg" alt="développement de l'identité visuelle d'owly fruit"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/owly-fruit/owlyfruit3.jpg" alt="développement de l'identité visuelle d'owly fruit"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/owly-fruit/owlyfruit4.jpg" alt="développement de l'identité visuelle d'owly fruit"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/owly-fruit/owlyfruit5.jpg" alt="développement de l'identité visuelle d'owly fruit"/>
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
				<h1>Owly fruit !</h1>
				<p>Owly fruit est une entreprise philippine spécialisée dans les smoothies, boissons réalisées à partir de fruits et légumes frais.</p>
				<p>L'identité visuelle de la marque "Owly fruit" est unique et lui permet de se distinguer des autres acteurs du marché, nombreux. Celle-ci est déclinée en plusieurs supports: logo, flyers, carte de visite, panneau publicitaire, emballages. Ainsi, la chartre graphique peut être utilisée comme un outil de travail à part entière !</p>
			</div>

		</main>

<?php
	include('footer.php');
?>
