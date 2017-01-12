<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil et Seize par Seize</title>
		<meta name="description" content="Développement du site d'actualités musicales seize par seize" />
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<meta name="theme-color" content="#59ABE3"/>

		<link rel="icon" type="image/png" href="img/favicon.ico" >
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="web/styles/screen.min.css">
	</head>

	<body>

		<!-- header -->
		<?php require_once('header.php'); ?>

		<main id="pages-work">

			<?php include('nav-web.php');?>

			<div class="logo-company">
				<a href="http://16x16.fr/" target="_blank">
					<img src="img/img-web/16x16/logotype.png" alt="logotype du site d'actualités musicales seize par seize">
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
						<img src="img/img-web/16x16/16x16-1.jpg" alt="interface du site 16x16.fr sur ordinateur portable"/>
					</div>
					<div class="item">
						<img src="img/img-web/16x16/16x16-2.jpg" alt="interface du site 16x16.fr sur mobile"/>
					</div>
					<div class="item">
						<img src="img/img-web/16x16/16x16-3.jpg" alt="interface du site 16x16.fr sur ordinateur portable et iMac"/>
					</div>
					<div class="item">
						<img src="img/img-web/16x16/16x16-4.jpg" alt="interface du site 16x16.fr sur tablette"/>
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
				<h1>16x16</h1>
				<p>
					Développement du site francophone d'actualités musicales du rédacteur mélomane <strong>Olivier Périllat</strong>.<br>
					Véritable Diggers' Song du rap français, Olivier Périllat aka <strong>"Zitoun"</strong>, nous propose sa sélection et
					ses analyses de rap indépendant. L'une des principales démarches du site est d'apporté au rap indépendant
					un public et une couverture médiatique en France pour diffuser cet art souvent méprisé.
				</p>
				<p>HTML, CSS, Wordpress</p>
				<a href="http://16x16.fr/" class="btn btn-ghost" target="_blank">
					<strong>Visite du site</strong>
				</a>
			</div>

		</main>

<?php
	include('footer.php');
?>
