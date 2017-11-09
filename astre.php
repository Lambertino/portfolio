<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | Astre</title>
		<meta name="description" content="Webdesign du site Astre, solution des flux locaux, nationaux et internationaux du transport." />
		<?php require_once('partials/head.php'); ?>
		<meta property="og:title" content="Lambert Roudil, vous présente les sites Astre, solution des flux locaux, nationaux et internationaux du transport." />
		<meta property="og:url" content="http://www.lambertroudil.com/astre.php" />
	</head>

	<body>

		<!-- header -->
		<?php require_once('partials/header.php'); ?>

		<main id="pages-work">

			<div class="logo-company">
				<img src="img/img-web/astre/logotype-astre.svg"
					 alt="logotype de la société Astre, soleil entouré de étoiles jaunes sur un fond bleu."
					 width="300">
			</div><br>

			<!-- carousel project -->
			<div id="carousel-project" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				 	<li data-target="#carousel-project" data-slide-to="0" class="active"></li>
				 	<li data-target="#carousel-project" data-slide-to="1"></li>
				 	<li data-target="#carousel-project" data-slide-to="2"></li>
				 	<li data-target="#carousel-project" data-slide-to="3"></li>
				 	<li data-target="#carousel-project" data-slide-to="4"></li>
				 	<li data-target="#carousel-project" data-slide-to="4"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/img-web/astre/mockup.jpg" alt="interface du site intranet de Astre annuaire sur un ordinateur de bureau blanc."/>
					</div>
					<div class="item">
						<img src="img/img-web/astre/mockup-5.jpg" alt="interface du site intranet de Astre annuaire."/>
					</div>
					<div class="item">
						<img src="img/img-web/astre/mockup-1.jpg" alt="interface du site intranet de Astre portail."/>
					</div>
					<div class="item">
						<img src="img/img-web/astre/mockup-2.jpg" alt="interface du site intranet de Astre portail sur une tablette."/>
					</div>
					<div class="item">
						<img src="img/img-web/astre/mockup-3.jpg" alt="interface du site intranet de Astre portail sur un ordinateur portable."/>
					</div>
					<div class="item">
						<img src="img/img-web/astre/mockup-4.jpg" alt="interface du site intranet de Astre portail sur un ordinateur portable."/>
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
				<h1>Astre</h1>
				<p>
					Webdesign et intégration des sites intranet Astre : le portail et l'annuaire réservés aux <em>Astriens</em>.
				</p>
				<p>
					La société Astre développe jour après jour un réseau solide de solutions intelligentes dans les domaines
					du transport et de la logistique et s'appuie sur ses nouvelles plateformes web pour proposer un service
					adapté et optimal pour ses Astriens.
				</p>
				<p>Sketch, InVision, HTML, SCSS, jQuery</p>
				<?php require_once('partials/back-list-web.php'); ?>
			</div>

		</main>

		<?php include('partials/footer.php'); ?>
