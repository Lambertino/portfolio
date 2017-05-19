<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | AIDAMT</title>
		<meta name="description" content="Webdesign du site de l'AIDAMT, la médecine du travail dans les Côtes d'Armor." />
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
				<a href="http://www.aidamt.fr/" target="_blank">
					<img src="img/img-web/aidamt/logotype-aidamt.svg"
						 alt="AIDAMT, la médecine du travail dans les côtes d'Armor"
						 width="250">
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
						<img src="img/img-web/aidamt/mockup.jpg" alt="interface du site intranet de aidamt annuaire sur un ordinateur de bureau blanc."/>
					</div>
					<div class="item">
						<img src="img/img-web/aidamt/mockup-1.jpg" alt="interface du site intranet de aidamt annuaire sur un ordinateur de bureau blanc."/>
					</div>
					<div class="item">
						<img src="img/img-web/aidamt/mockup-2.jpg" alt="interface du site intranet de aidamt annuaire."/>
					</div>
					<div class="item">
						<img src="img/img-web/aidamt/mockup-3.jpg" alt="interface du site intranet de aidamt portail."/>
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
				<h1>Aidamt</h1>
				<p>
					Webdesign et intégration du site de l'AIDAMT, médecine du travail dans les Côtes d'Amor (22). Cette
					nouvelle plateforme permet aux entreprises d'adhérer facilement à l'association et de soumettre leur
					demande de visite personnalisée directement.
				</p>
				<p>
					L’AIDAMT, Service Interentreprises de Santé au Travail est une association d’employeurs, à but non lucratif.
					L'AIDAMT est agréée par le Ministère du Travail pour assurer sa mission sur le département des Côtes
					d'Armor à l'exception de l'arrondissement de Dinan. Elle emploie plus de 50 intervenants "terrain"
					(médecins, infirmiers, ASST, IPRP) et 35 assistantes médicales et personnels administratifs.
				</p>
				<p>Symfony, HTML-5, SCSS, jQuery</p>
				<a href="http://www.aidamt.fr/" class="btn btn-ghost" target="_blank">
					<strong>Visite du site</strong>
				</a>
				<?php require_once('partials/back-list-web.php'); ?>
			</div>

		</main>

		<?php include('partials/footer.php'); ?>
