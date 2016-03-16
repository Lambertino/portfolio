<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil, designer global-Portfolio</title>
		<meta name="description" content="Boobs est une marque de lingerie fictive. Présentation de son site vitrine et de l'identité visuelle de la marque de lingerie Boobs" />
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
					<img src="img/img-web/boobs/logo-boobs.png" class="img-responsive" alt="logo du magasin de lingerie Boobs">
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
							<img src="img/img-web/boobs/boobs.jpg" alt="construction de l'identité visuelle du magasin de lingerie Boobs"/>
						</div>
						<div class="item">
							<img src="img/img-web/boobs/boobs1.jpg" alt="construction de l'identité visuelle du magasin de lingerie Boobs"/>
						</div>
						<div class="item">
							<img src="img/img-web/boobs/boobs2.jpg" alt="construction de l'identité visuelle du magasin de lingerie Boobs"/>
						</div>
						<div class="item">
							<img src="img/img-web/boobs/boobs3.jpg" alt="construction de l'identité visuelle du magasin de lingerie Boobs"/>
						</div>
						<div class="item">
							<img src="img/img-web/boobs/boobs4.jpg" alt="construction de l'identité visuelle du magasin de lingerie Boobs"/>
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
					<h1>Boobs</h1>
					<p>Développement du site vitrine et de l'identité visuelle de la marque de lingerie "Boobs"</p>
					<p>Un site vitrine présente votre entreprise, qui elle est, où elle se situe et ce qu'elle fait. C'est une source d'informations, bien plus qu'une carte de visite, pour vos clients et vos futurs clients. C'est un premier support indispensable pour une communication sur internet, pour vous faire connaître et être reconnu comme professionnel dans votre activité. Je propose un site vitrine adapté à votre activité et à vos valeurs.</p>
					<p>Tout le monde n'est pas sensible à l'identité d'une entreprise, il faut donc la construire en connaissant sa cible. La marque "Boobs" a une cible féminine, entre 20 et 40 ans avec un pouvoir d'achat moyen. Je me suis donc appuyé sur ces études dans la construction du logo et ses déclinaisons: carte de visite, lettre à en-tête, flyers...</p>
				</div>

		</main>

<?php include('footer.php'); ?>
