<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | Red Carpet</title>
		<meta name="description" content="Red Carpet est une entreprise sociale liée à l'ONG Gawad Kalinga basée aux Philippines." />
		<?php require_once('partials/head.php'); ?>
		<meta property="og:title" content="Lambert Roudil, vous présente sa création du logotype Red Carpet, entreprise philippine." />
		<meta property="og:url" content="http://www.lambertroudil.com/red-carpet.php" />
	</head>

	<body>

		<!-- header -->
		<?php require_once('partials/header.php'); ?>

		<main id="pages-work">

			<div class="logo-company">
				<img src="img/img-graphisme/red-carpet/logo-redcarpet.svg" alt="logo de l'entreprise red carpet, entreprise l'ONG Gawad Kalinga">
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
						<img src="img/img-graphisme/red-carpet/redcarpet.jpg" alt="création de l'identité visuelle de red carpet, membre de gawad kalinga"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/red-carpet/redcarpet1.jpg" alt="création de l'identité visuelle de red carpet, membre de gawad kalinga"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/red-carpet/redcarpet2.jpg" alt="création de l'identité visuelle de red carpet, membre de gawad kalinga"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/red-carpet/redcarpet3.jpg" alt="création de l'identité visuelle de red carpet, membre de gawad kalinga"/>
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
				<h1>Red Carpet</h1>
				<?php require_once('partials/back-list-print.php'); ?>
			</div>

		</main>

		<?php
			include('partials/footer.php');
		?>
