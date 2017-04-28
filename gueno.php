<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | Jean-Marie Guéno</title>
		<meta name="description" content="Développement du site vitrine du designer Jean-Marie Guéno,www.jeanmariegueno.com, diplômé en arts appliqués de l’école Pivaut. Le designer, à la croisée des chemins entre le monde de l’art et celui l'entreprise, trouve son inspiration au cœur du pays guérandais entre marais salants et cité médiévale." />
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
				<a href="http://jeanmariegueno.com/" target="_blank"><img src="img/img-web/gueno/logo-gueno.png" alt="logo du designer Jean-Marie Gueno jeanmariegueno.com"></a>
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
						<img src="img/img-web/gueno/mockup-jm-gueno-1.jpg" alt="interface du site jeanmariegueno.com sur i-mac"/>
					</div>
					<div class="item">
						<img src="img/img-web/gueno/mockup-jm-gueno-2.jpg" alt="interface du site jeanmariegueno.com sur i-phone-6"/>
					</div>
					<div class="item">
						<img src="img/img-web/gueno/mockup-jm-gueno-3.jpg" alt="interface du site jeanmariegueno.com sur tablette"/>
					</div>
					<div class="item">
						<img src="img/img-web/gueno/mockup-jm-gueno-4.jpg" alt="interface du site jeanmariegueno.com sur i-mac"/>
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
				<h1>Jean-Marie Guéno</h1>
				<p>Développement du site vitrine du designer <strong>Jean-Marie Guéno</strong> diplômé en arts appliqués de l’école Pivaut.</p>
				<p>HTML, CSS, jQuery, Bootstrap</p>
				<a href="http://jeanmariegueno.com/" class="btn btn-ghost" target="_blank"><strong>
					Visite du site</strong>
				</a>
				<?php require_once('partials/back-list-web.php'); ?>
			</div>

		</main>

		<?php
			include('partials/footer.php');
		?>
