<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil, designer global-Portfolio</title>
		<meta name="description" content="Création du site internet et de l'identité visuelle du groupe Grand Large dont l'activité est la tôlerie industrielle, mécanique, soudure, peinture et montage. Site responsive, code durable, compatible avec tous les navigateurs." />
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<meta name="theme-color" content="#59ABE3"/>
		<link rel="icon" type="image/png" href="img/favicon.png" >
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/homepage.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/pages-work.css">
		<script type="text/javascript" src="js/jquery.1.6.2.js"></script>
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
		<script type="text/javascript" src="js/modernizr.custom.33604.js"></script>
	</head>

	<body>

		<!-- header -->
		<?php require_once('header.php'); ?>

		<main id="pages-work">

			<?php include('nav-web.php');?>

			<div class="logo-company">
				<img src="img/img-web/grand-large/logo-grandlarge.svg" alt="logo du groupe Grand Large spécialisé dans la tôlerie">
			</div>

			<!-- carousel project -->
			<div id="carousel-project" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				 	<li data-target="#carousel-project" data-slide-to="0" class="active"></li>
				 	<li data-target="#carousel-project" data-slide-to="1"></li>
				 	<li data-target="#carousel-project" data-slide-to="2"></li>
				 	<li data-target="#carousel-project" data-slide-to="3"></li>
				 	<li data-target="#carousel-project" data-slide-to="4"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/img-web/grand-large/grandlarge.jpg" alt="construction de l'identité visuelle du groupe Grand Large"/>
					</div>
					<div class="item">
						<img src="img/img-web/grand-large/grandlarge0.jpg" alt="construction de l'identité visuelle du groupe Grand Large"/>
					</div>
					<div class="item">
						<img src="img/img-web/grand-large/grandlarge2.jpg" alt="construction de l'identité visuelle du groupe Grand Large"/>
					</div>
					<div class="item">
						<img src="img/img-web/grand-large/grandlarge1.jpg" alt="construction de l'identité visuelle du groupe Grand Large"/>
					</div>
					<div class="item">
						<img src="img/img-web/grand-large/grandlarge3.jpg" alt="construction de l'identité visuelle du groupe Grand Large"/>
					</div>
					<div class="item">
						<img src="img/img-web/grand-large/grandlarge4.jpg" alt="construction de l'identité visuelle du groupe Grand Large"/>
					</div>
					<div class="item">
						<img src="img/img-web/grand-large/grandlarge5.jpg" alt="construction de l'identité visuelle du groupe Grand Large"/>
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
				<h1>Grand Large</h1>
				<p>Création du site internet et de l'identité visuelle du groupe Grand Large dont l'activité est la tôlerie industrielle, mécanique, soudure, peinture et montage.</p>
				<p>Le terme « webdesign » désigne la discipline consistant à structurer les éléments graphiques d'un site web afin de traduire, à travers une dimension esthétique, l'identité visuelle de la société ou de l'organisation.</p>
				<p>Le développement de ce site internet s'est organisé en plusieurs étapes:</p>
				<ul>
					<li><strong>L'analyse</strong> de l'activité de l'entreprise et définition de la stratégie digitale;</li>
					<li><strong>Etude</strong> des mots-clés pour le référencement naturel;</li>
					<li><strong>Conception</strong> de l'ergonomie du site internet;</li>
					<li><strong>Réalisation</strong> de son design sur mesure</li>
					<li><strong>Développement</strong> du site internet avec possibilité de modifications à la demande.</li>
					<li><strong>Un site responsive:</strong> facilite la navigation des internautes sur les smartphones et tablettes avec un design qui s'adapte parfaitement à tous les écrans, pour une audience maximale.</li>
				</ul>
			</div>

		</main>

<?php
	include('footer.php');
?>
