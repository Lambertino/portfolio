<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | Lecaninole</title>
		<meta name="description" content="Création du blog lecaninole.fr, le blog des petits plaisirs éco-responsables" />
		<?php require_once('partials/head.php'); ?>
		<meta property="og:title" content="Lambert Roudil, vous présente sa création de site internet pour la blogueuse Léna Nicole, lecaninole.fr" />
		<meta property="og:url" content="http://www.lambertroudil.com/lecaninole.php" />
	</head>

	<body>

		<!-- header -->
		<?php require_once('partials/header.php'); ?>

		<main id="pages-work">

			<div class="logo-company">
				<a href="http://www.lecaninole.fr" target="_blank">
					<img src="img/img-web/lecaninole/logotype-lecaninole.svg"
						 alt="logotype du blog lecaninole.fr, le blog des petits plaisirs éco-responsables"
						 width="300">
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
						<img src="img/img-web/lecaninole/lecaninole-1.jpg" alt="interface du blog Lecaninole.fr, responsive sur mobile, tablette et ordinateur de bureau"/>
					</div>
					<div class="item">
						<img src="img/img-web/lecaninole/lecaninole-2.jpg" alt="interface du blog Lecaninole.fr, affiché sur un macbook Pro."/>
					</div>
					<div class="item">
						<img src="img/img-web/lecaninole/lecaninole-3.jpg" alt="interface du blog Lecaninole.fr, affiché sur une tablette iPad."/>
					</div>
					<div class="item">
						<img src="img/img-web/lecaninole/lecaninole-4.jpg" alt="interface du blog Lecaninole.fr, affiché sur un iPhone 6 et un iMac."/>
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
				<h1>Lecaninole</h1>
				<p>
					UI / UX, webdesign, intégration et développement web du blog
					<a href="http://www.lecaninole.fr" target="_blank">lecaninole.fr</a>.
				</p>
				<p>
					La blogueuse Léna Nicole vous fait découvrir à travers son blog
					ses expériences presque zéro déchet, ses recettes gourmandes,
					un art de vivre éco-responsable et ses créations en tout genre.
					Un blog qui fait du bien, à lire sans modération avec un chocolat
					chaud et un plaid&nbsp;!
				</p>
				<p>
					Le webdesign de ce site se devait de retranscrire la chaleurosité
					et la simplicité de l'écriture de Léna. Le blog regroupe 4
					catégories d'article&nbsp;: le zéro déchet, bébé écolo, minimalism et
					lifestyle. Un blog simple, facile à lire et chaleureux.
				</p>
				<p><strong>Technologies utilisées : </strong>Bolt, Twig, HTML-5, SCSS, jQuery</p>
				<a href="http://www.lecaninole.fr" class="btn btn-ghost" target="_blank">
					<strong>Visite du site</strong>
				</a>
				<?php require_once('partials/back-list-web.php'); ?>
			</div>

		</main>

		<?php include('partials/footer.php'); ?>
