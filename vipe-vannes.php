<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | VIPE Vannes</title>
		<meta name="description" content="Création de la landing page promouvant le territoire de Vannes." />
		<?php require_once('partials/head.php'); ?>
		<meta property="og:title" content="Lambert Roudil vous présente la création de la landing page promouvant le territoire de Vannes." />
		<meta property="og:url" content="http://www.pole-implantation.org/vannes/" />
	</head>

	<body>

		<!-- header -->
		<?php require_once('partials/header.php'); ?>

		<main id="pages-work">

			<div class="logo-company">
				<a href="http://www.pole-implantation.org/vannes/" target="_blank">
					<img src="img/img-web/vannes/logotype-vipe-vannes.png"
						 alt="logotype de VIPE Vannes, agence de développement économique, technopole vannetaise"
						 class="img-responsive">
				</a>
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
						<img src="img/img-web/vannes/vipe-vannes-1.jpg" alt="VIPE Vannes s'emploie à créer un écosystème favorable à l'innovation, à l'émergence de nouveaux projets et leur implantation en Bretagne"/>
					</div>
					<div class="item">
						<img src="img/img-web/vannes/vipe-vannes-2.jpg" alt="VIPE Vannes, agence de développement économique, technopole vannetaise."/>
					</div>
					<div class="item">
						<img src="img/img-web/vannes/vipe-vannes-3.jpg" alt="Interface de la landing page VIPE Vannes destinée à promouvoir le territoire vannetais."/>
					</div>
					<div class="item">
						<img src="img/img-web/vannes/vipe-vannes-4.jpg" alt="La landing page est un site responsive s'adaptant sur mobile, tablette et ordinateur de bureau."/>
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

			<article class="description">
				<h1>VIPE Vannes</h1>
				<p>
					<strong>Agence de développement économique & Technopole</strong>
				</p>
				<p>
					L'agence créée par les chefs d'entreprises a pour mission le
					développement économique et l'accompagnement de l'innovation
					pour créer ou développer votre entreprise à Vannes en Bretagne.
				</p>
				<p>
					Elle est organisée en 3 pôles d'activités :
				</p>
				<ul>
					<li>Hébergement et services aux entreprises,</li>
					<li>Technopole (accompagnement de projets innovants),</li>
					<li>Agence de développement (prospection économique , animation et promotion).</li>
				</ul>
				<p>
					Au sein de <a href="/regional-partner.php">Regional Partner</a>,
					mise en place d'une landing page française afin de promouvoir
					la ville de Vannes. Un chat en ligne est intégré et un conseiller
					est à l'écoute pour toute demande des entreprises.
				</p>
				<p><strong>Technologies utilisées : </strong>PHP, HTML-5, SCSS, jQuery</p>
				<a href="http://www.pole-implantation.org/vannes/" class="btn btn-ghost" target="_blank">
					<strong>Visite du site</strong>
				</a>
				<?php require_once('partials/back-list-web.php'); ?>
			</article>

		</main>

		<?php include('partials/footer.php'); ?>
