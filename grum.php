<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil, projet Grum'</title>
		<meta name="description" content="La gamme Grum’ composée d’une chaise, d’une assise, d’un bureau et d’un fauteuil est une création en collaboration avec le designer Jean-Marie GUENO. Les recherches quant à cette gamme sont orientées sur l’élégance et la distinction sur une base écologique. En effet, il s’agit de n’utiliser pour ces mobiliers ni colle, ni clous, ni vis afin que l’usager puisse monter et démonter l'assise aisément sans outil." />
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

			<?php include('nav-product.php');?>

			<div class="logo-company">
				<img src="img/img-produit/grum/logo-grum.svg" alt="logo de la gamme de mobilier grum">
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
						<img src="img/img-produit/grum/chaise-grum.jpg" alt="gamme de mobilier grum créée par le designer Lambert Roudil"/>
					</div>
					<div class="item">
						<img src="img/img-produit/grum/chaise-grum-profil.jpg" alt="gamme de mobilier grum créée par le designer Lambert Roudil"/>
					</div>
					<div class="item">
						<img src="img/img-produit/grum/chaise-assise.jpg" alt="gamme de mobilier grum créée par le designer Lambert Roudil"/>
					</div>
					<div class="item">
						<img src="img/img-produit/grum/assise-grum.jpg" alt="gamme de mobilier grum créée par le designer Lambert Roudil"/>
					</div>
					<div class="item">
						<img src="img/img-produit/grum/assise-grum2.jpg" alt="gamme de mobilier grum créée par le designer Lambert Roudil"/>
					</div>
					<div class="item">
						<img src="img/img-produit/grum/assise-grum-detail.jpg" alt="gamme de mobilier grum créée par le designer Lambert Roudil"/>
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
				<h1>Grum, l'écologie facile</h1>
				<p>La gamme «Grum’» composée d’une chaise, d’une assise, d’un bureau et
					d’un fauteuil est une création en collaboration avec le designer Jean-Marie GUENO.</p>
				<p>Les recherches quant à cette gamme sont orientées sur l’élégance et la distinction
					sur une base écologique. En effet, il s’agit de n’utiliser pour ces mobiliers ni
					colle, ni clous, ni vis afin que l’usager puisse monter et démonter aisément l'assise sans
					outil.</p>
				<p>Cette gamme repose sur un système de découpe de montant et de travers aux
					courbes élégantes et élancées. Les travers viennent s’emboiter dans les découpes et propose
					ainsi une installation stable et efficace.</p>
			</div>

		</main>

<?php
	include('footer.php');
?>
