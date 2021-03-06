<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | Sensass !</title>
		<meta name="description" content="Développement du site vitrine et de l'identité visuelle de l'agence de communication (fictive) Sensass !" />
		<?php require_once('partials/head.php'); ?>
		<meta property="og:title" content="Lambert Roudil vous présente la création de l'agence web fictive Sensass." />
		<meta property="og:url" content="http://www.lambertroudil.com/sensass.php" />
	</head>

	<body>

		<!-- header -->
		<?php require_once('partials/header.php'); ?>

		<main id="pages-work">

			<div class="logo-company">
				<a href="http://www.lambertroudil.com/sensass/" target="_blank"><img src="img/img-web/sensass/logo-sensass.svg" alt="logo de l'agence fictive Sensass"></a>
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
						<img src="img/img-web/sensass/sensass.jpg" alt="construction du site internet de l'agence de communication Sensass!"/>
					</div>
					<div class="item">
						<img src="img/img-web/sensass/sensass1.jpg" alt="construction du site internet de l'agence de communication Sensass!"/>
					</div>
					<div class="item">
						<img src="img/img-web/sensass/sensass2.jpg" alt="carte de visite de l'agence de communication Sensass!"/>
					</div>
					<div class="item">
						<img src="img/img-web/sensass/sensass3.jpg" alt="tarif des prestations de l'agence de communication Sensass!"/>
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
				<h1>Sensass!</h1>
				<p>Développement du site vitrine et de l'identité visuelle de l'agence de communication <strong>Sensass !</strong></p>
				<a href="http://www.lambertroudil.com/sensass/" class="btn btn-ghost" target="_blank">Visite du site</a>
				<?php require_once('partials/back-list-web.php'); ?>
			</div>

		</main>

		<?php
			include('partials/footer.php');
		?>
