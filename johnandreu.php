<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | John Andreu</title>
		<meta name="description" content="Développement du site vitrine et de l'identité visuelle de John Andreu, ostéopathe des plus prestigieux SPA et palaces parisiens, tels que le Fouquet's et le George V." />
		<?php require_once('partials/head.php'); ?>
		<meta property="og:title" content="Lambert Roudil, vous présente sa création de site internet pour l'ostéopathe John Andreu." />
		<meta property="og:url" content="http://www.lambertroudil.com/johnandreu.php" />
	</head>

	<body>

		<!-- header -->
		<?php require_once('partials/header.php'); ?>

		<main id="pages-work">

			<div class="logo-company">
				<a href="http://www.lambertroudil.com/johnandreu/" target="_blank"><img src="img/img-web/john-andreu/johnandreu1.png" alt="création du site de l'ostéopathe John Andreu"></a>
			</div>

			<!-- carousel project -->
			<div id="carousel-project" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				 	<li data-target="#carousel-project" data-slide-to="0" class="active"></li>
				 	<li data-target="#carousel-project" data-slide-to="1"></li>
				 	<li data-target="#carousel-project" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/img-web/john-andreu/johnandreu5.jpg" alt="construction du site internet de l'ostéopathe John Andreu"/>
					</div>
					<div class="item">
						<img src="img/img-web/john-andreu/johnandreu3.jpg" alt="construction du site internet de l'ostéopathe John Andreu"/>
					</div>
					<div class="item">
						<img src="img/img-web/john-andreu/johnandreu4.jpg" alt="construction du site internet de l'ostéopathe John Andreu"/>
					</div>
					<div class="item">
						<img src="img/img-web/john-andreu/johnandreu2.jpg" alt="construction du site internet de l'ostéopathe John Andreu"/>
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
				<h1>John Andreu</h1>
				<p>
					Développement du site vitrine et de l'identité visuelle de <strong>John Andreu</strong> ostéopathe
					des plus prestigieux SPA et palaces parisiens, tels que le Fouquet's et le George V.
				</p>
				<a href="http://www.lambertroudil.com/johnandreu/" class="btn btn-ghost" target="_blank">
					<strong>Visite du site de John Andreu</strong>
				</a>
				<?php require_once('partials/back-list-web.php'); ?>
			</div>

		</main>

		<?php
			include('partials/footer.php');
		?>
