<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | MGS Industries</title>
		<meta name="description" content="Développement du site de MGS Industries, créé et met au point des produits de sécurité antidérapants pour l’industrie et particuliers" />
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
				<a href="http://www.antiderapant-agrain.com/" target="_blank">
					<img src="img/img-web/mgs/mgs-industries-logotype.png" alt="logotype de MGS Industries, créé et met au point des produits de sécurité antidérapants">
				</a>
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
						<img src="img/img-web/mgs/mgs-1.jpg" alt="logotype de MGS Industries avec matière métallisée pour mettre en avant son service de découpe laser"/>
					</div>
					<div class="item">
						<img src="img/img-web/mgs/mgs-2.jpg" alt="présentation de l'interface du site de MGS Industries sur mobile"/>
					</div>
					<div class="item">
						<img src="img/img-web/mgs/mgs-3.jpg" alt="présentation de l'interface du site de MGS Industries sur iMac."/>
					</div>
					<div class="item">
						<img src="img/img-web/mgs/mgs-4.jpg" alt="Le site de MGS Industries s'adapte très bien sur portable, tablette et ordinateur de bureau."/>
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
				<h1>MGS Industries</h1>
				<p>
					Depuis près de vingt ans, <strong>MGS Industries</strong> créé et met au point des produits de sécurité
					antidérapants pour l’industrie et particuliers.
				</p>
				<p>
					Refonte du site de <strong>MGS Industries</strong>. L'utilisation du CMS <a href="https://bolt.cm/" target="_blank">Bolt</a>
					se justifie par son inferface d'administration userfriendly. Ainsi, l'équipe de MGS Industries peut
					administrer son catalogue de produit et ses actualités avec la fonctionnalité multilingue.
				</p>
				<p>HTML, SCSS, jQuery, Bolt</p>
				<a href="http://www.antiderapant-agrain.com/" class="btn btn-ghost" target="_blank">
					<strong>Visite du site</strong>
				</a>
				<?php require_once('partials/back-list-web.php'); ?>
			</div>

		</main>

		<?php
			include('partials/footer.php');
		?>
