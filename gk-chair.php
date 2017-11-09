<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | Bamboo Chair</title>
		<meta name="description" content="La bamboo chair a été conçue en bambou et métal et a été créée dans le cadre d'un volontariat avec l'ONG Gawad Kalinga sur l'île de Palawan aux Philippines. Celle-ci est destinée au design d'intérieur des maisons du village Gawad Kalinga à Alimanguan dans la région de San Vicente." />
		<?php require_once('partials/head.php'); ?>
		<meta property="og:title" content="Lambert Roudil, vous présente sa création : la bamboo chair." />
		<meta property="og:url" content="http://www.lambertroudil.com/gk-chair.php" />
	</head>

	<body>

		<!-- header -->
		<?php require_once('partials/header.php'); ?>

		<main id="pages-work">

			<div class="logo-company">
				<img src="img/img-produit/gk-chair/logo-gk.svg" alt="logo de la chaise dans le cadre d'un volontariat avec l'ONG Gawad Kalinga">
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
						<img src="img/img-produit/gk-chair/gk-chair.jpg" alt="chaise en bambou réalisé aux Philippines avec l'ONG Gawad Kalinga"/>
					</div>
					<div class="item">
						<img src="img/img-produit/gk-chair/gk-chair2.jpg" alt="chaise en bambou réalisé aux Philippines avec l'ONG Gawad Kalinga"/>
					</div>
					<div class="item">
						<img src="img/img-produit/gk-chair/gk-chair3.jpg" alt="chaise en bambou réalisé aux Philippines avec l'ONG Gawad Kalinga"/>
					</div>
					<div class="item">
						<img src="img/img-produit/gk-chair/gk-chair4.jpg" alt="chaise en bambou réalisé aux Philippines avec l'ONG Gawad Kalinga"/>
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
				<h1>Bamboo chair</h1>
				<p>Cette chaise conçue en bambou et métal a été créée dans le cadre d'un volontariat avec l'ONG "Gawad Kalinga" sur l'île de Palawan
					aux Philippines. Celle-ci est destinée au design d'intérieur des maisons du village Gawad Kalinga à Alimanguan dans la région de
					San Vicente.</p>
				<p>L'association Gawad Kalinga, créée en 2003 lutte contre la pauvreté aux Philippines en apportant aux populations défavorisées
					les ressources matérielles, morales et humaines nécessaires pour garantir un développement durable. Le nom de l’organisme vient du
					tagalog et veut dire « prendre soin ».</p>
				<a href="http://gk-france.fr/" class="btn btn-ghost" target="_blank">En savoir plus sur Gawad Kalinga</a>
				<?php require_once('partials/back-list-products.php'); ?>
			</div>

		</main>

		<?php
			include('partials/footer.php');
		?>
