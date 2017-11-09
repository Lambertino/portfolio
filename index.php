<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil, webdesigner, intégrateur - Portfolio</title>
		<meta name="description" content="Lambert Roudil, designer global vous propose la construction de l'identité visuelle de votre entreprise ainsi que le développement de votre site internet. " />
		<?php require_once('partials/head.php'); ?>
		<meta property="og:title" content="Lambert Roudil, designer global vous présente l'ensemble de ses créations web, print, produit et espace." />
		<meta property="og:url" content="http://www.lambertroudil.com/" />
	</head>

	<body>

		<!-- header -->
		<?php require_once('partials/header.php'); ?>

		<main class="homepage">

			<section class="row col-xs-12 my-introduction">
				<!-- particles.js container -->
				<div id="particles-js"></div>

				<!-- Lambert Roudil introduction -->
				<div class="container">
					<div class="col-sm-12 col-md-7 my-introduction-ct">
						<h1>Lambert Roudil</h1>
						<p>
							Je suis designer global - graphiste, webdesigner, intégrateur, designer produit et d'espace -
							passionné par l'image, le web et par conséquent, par mon travail.
						</p>
						<h2>Bienvenue sur mon portfolio !</h2>
						<p><strong>Découvrez le par-ici</strong></p>
						<figure class="direction center-block">
							<a href="#portfolio" class="scroll">
								<img src="img/ui-kit/arrow-down.png"
									 class="float"
									 alt="scrollez vers le bas pour consulter le portfolio de Lambert Roudil">
							</a>
						</figure>
					</div>
				</div>
			</section>
			<!--/end section introduction-->

			<!-- Design fields -->
			<div id="portfolio" class="row">
				<div class="works col-sm-12 no-padding">
					<a href="list-web.php">
						<section id="bloc-web" class="col-xs-12 col-sm-6 item">
							<img src="img/icons/web.svg" alt="lien vers les créations webdesign" class="animated infinite">
							<p class="item-category">Web</p>
						</section>
					</a>

					<a href="list-products.php">
						<section id="bloc-product" class="col-xs-12 col-sm-6 item">
							<img src="img/icons/produit.svg" alt="lien vers les créations produits" class="animated infinite">
							<p class="item-category">Produit</p>
						</section>
					</a>

					<a href="list-print.php">
						<section id="bloc-graphism" class="col-xs-12 col-sm-6 item">
							<img src="img/icons/graphisme.svg" alt="lien vers les créations graphiques" class="animated infinite">
							<p class="item-category">Print</p>
						</section>
					</a>

					<a href="list-retails.php">
						<section id="bloc-retail-design" class="col-xs-12 col-sm-6 item">
							<img src="img/icons/espace.svg" alt="lien vers les créations aménagement" class="animated infinite">
							<p class="item-category">Espace</p>
						</section>
					</a>
				</div>
			</div>

			<section class="row text-center skills">
				<div class="col-sm-12">
					<div class="container">
						<section class="item col-sm-6">
							<h3>2012</h3>
							<p>BTS Design de produit en alternance<br>à l' École de Design Nantes Atlantique</p>
						</section>

						<section class="item col-sm-6">
							<h3>2013</h3>
							<p>Volontariat aux Philippines<br>au sein de l'ONG Gawad Kalinga</p>
						</section>

						<section class="item col-sm-6">
							<h3>2015</h3>
							<p>Diplôme de développeur/intégrateur web<br>à la 3W Academy</p>
						</section>

						<section class="item col-sm-6">
							<h3>2016</h3>
							<p>Webdesigner / intégrateur<br>au sein de l'agence nantaise Toog</p>
						</section>
						<section class="item col-sm-12 last">
							<h3>2017</h3>
							<p>Webdesigner / Intégrateur / Développeur<br>dans l'entreprise Regional Partner à Vannes</p>
						</section>
						<div class="row text-center">
							<a href="resume.php" class="btn btn-ghost">En savoir plus</a>
						</div>
					</div>
				</div>
			</section>

		</main>

		<?php require_once('partials/footer.php'); ?>
