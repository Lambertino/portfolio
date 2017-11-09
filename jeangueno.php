<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | Jean Guéno</title>
		<meta name="description" content="Développement du site de l’entreprise Jean Guéno qui met au service de ses clients son savoir-faire en matière de construction gros œuvre et maisons individuelles." />
		<?php require_once('partials/head.php'); ?>
		<meta property="og:title" content="Lambert Roudil, vous présente sa création de site internet pour l'entreprise de construction Jean Guéno." />
		<meta property="og:url" content="http://www.lambertroudil.com/jeangueno.php" />
	</head>

	<body>

		<!-- header -->
		<?php require_once('partials/header.php'); ?>

		<main id="pages-work">

			<div class="logo-company">
				<a href="http://www.jeangueno.com" target="_blank"><img src="img/img-web/jeangueno/logo-gueno.png" alt="logo de l'entreprise Jean Gueno, jeangueno.com"></a>
			</div>

			<!-- carousel project -->
			<div id="carousel-project" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				 	<li data-target="#carousel-project" data-slide-to="0" class="active"></li>
				 	<li data-target="#carousel-project" data-slide-to="1"></li>
				 	<li data-target="#carousel-project" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/img-web/jeangueno/mockup-1.jpg" alt="interface du site jeanmariegueno.com sur i-mac"/>
					</div>
					<div class="item">
						<img src="img/img-web/jeangueno/mockup-2.jpg" alt="interface du site jeanmariegueno.com sur i-phone-6"/>
					</div>
					<div class="item">
						<img src="img/img-web/jeangueno/mockup-3.jpg" alt="interface du site jeanmariegueno.com sur tablette"/>
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
				<h1>Jean Guéno</h1>
				<p>
					L’entreprise Jean Guéno met au service de ses clients son savoir-faire en matière de construction
					gros œuvre et maisons individuelles.
				</p>
				<p>
					Développement du site vitrine de l'entreprise <strong>Jean Guéno</strong>. L'utilisation du célèbre
					CMS WordPress se justifie par son inferface d'administration userfriendly. Ainsi, l'équipe Jean Guéno
					peut administrer ses actualités quotidiennes facilement et mettre à jour ses réalisations rapidement.
				</p>
				<p>HTML, CSS, jQuery, WordPress</p>
				<a href="http://www.jeangueno.com" class="btn btn-ghost" target="_blank"><strong>
					Visite du site</strong>
				</a>
				<?php require_once('partials/back-list-web.php'); ?>
			</div>

		</main>

		<?php
			include('partials/footer.php');
		?>
