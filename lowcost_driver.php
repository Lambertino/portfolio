<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | Lowcost Driver</title>
		<meta name="description" content="Webdesign du site Lowcost Driver, le VTC à petits prix dans le Morbihan." />
		<?php require_once('partials/head.php'); ?>
		<meta property="og:title" content="Lambert Roudil, vous présente sa création de site internet pour l'entreprise Lowcost Driver." />
		<meta property="og:url" content="http://www.lambertroudil.com/lowcost_driver.php" />
	</head>

	<body>

		<!-- header -->
		<?php require_once('partials/header.php'); ?>

		<main id="pages-work">

			<div class="logo-company">
				<a href="http://www.lowcostdriver.fr/" target="_blank">
					<img src="img/img-web/lowcost-driver/logotype-lowcost-driver.png" alt="Cliquez pour accéder directement au site internet Lowcost Driver sur un nouvel onglet.">
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
						<img src="img/img-web/lowcost-driver/mockup-1.jpg" alt="Plateforme web de Lowcost Driver sur un mobile tenu dans une main féminine."/>
					</div>
					<div class="item">
						<img src="img/img-web/lowcost-driver/mockup-2.jpg" alt="interface du site de Lowcost Driver sur une tablette"/>
					</div>
					<div class="item">
						<img src="img/img-web/lowcost-driver/mockup-3.jpg" alt="interface du site de Lowcost Driver sur un ordinateur portable"/>
					</div>
					<div class="item">
						<img src="img/img-web/lowcost-driver/mockup-4.jpg" alt="interface du site de Lowcost Driver sur un ordinateur de bureau"/>
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
				<h1>Lowcost Driver</h1>
				<p>
					Lowcost Driver propose un service de VTC à petit prix dans le Morbihan(56). Les réservations peuvent
					se faire depuis la <a href="http://www.lowcostdriver.fr/" target="_blank">plateforme web</a> ou par téléphone.
				</p>
				<p>
					Webdesign et intégration du site <strong>Lowcost Driver</strong>.
				</p>
				<p>HTML, SCSS, jQuery</p>
				<a href="http://www.lowcostdriver.fr/" class="btn btn-ghost" target="_blank">
					<strong>Visite du site</strong>
				</a>
				<?php require_once('partials/back-list-web.php'); ?>
			</div>

		</main>

		<?php include('partials/footer.php'); ?>
