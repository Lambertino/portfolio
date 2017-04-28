<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | Malvam</title>
		<meta name="description" content="Créations de flyers pour les prestations et animations musicales de l'entreprise Malvam." />
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
				<img src="img/img-graphisme/malvam/logotype-malvam.png" alt="logotype de l'entreprise nantaise Malvam, prestations et animations musicales">
			</div><br>

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
						<img src="img/img-graphisme/malvam/malvam-1.jpg" alt="Flyer pour la prestation musicale du DJ TOMA pour Malvam."/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/malvam/malvam-2.jpg" alt="Flyer pour la prestation musicale du DJ MC Chazz pour Malvam."/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/malvam/malvam-3.jpg" alt="Flyer pour la prestation musicale du DJ Karlson pour Malvam."/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/malvam/malvam-4.jpg" alt="Flyer pour la prestation musicale du DJ Tapps pour Malvam."/>
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
				<h1>Malvam</h1>
				<p>
					La stratégie de <a href="http://malvam.com/" target="_blank">Malvam</a> est transversale et s’inscrit
					autour de trois axes majeurs&nbsp;:
				</p>
				<ul>
					<li><small>l'organisation de concerts,</small></li>
					<li><small>l'<a href="https://youtu.be/c2fUxfTessY" target="_blank">animation musicale</a>,</small></li>
					<li><small>le booking de DJ et MC.</small></li>
				</ul>
				<p>
					Malvam a aussi pour objectif le développement de jeunes talents artistique&nbsp;: l'entreprise les accompagne
					tout au long de leur carrière au niveau artistique mais aussi au niveau extra-professionnel.
				</p>
				<p>
					Créations originales de flyers pour chacune des prestations musicales que propose Malvam.
				</p>
				<?php require_once('partials/back-list-print.php'); ?>
			</div>

		</main>

		<?php include('partials/footer.php'); ?>
