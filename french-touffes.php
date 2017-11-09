<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil | les French touffes</title>
		<meta name="description" content="Élaboration du logotype de la marque française les French touffes lancée par la mannequin parisienne Aude Auffret" />
		<?php require_once('partials/head.php'); ?>
		<meta property="og:title" content="Lambert Roudil, vous présente la marque française les French touffes lancée par la mannequin parisienne Aude Auffret." />
		<meta property="og:url" content="http://www.lambertroudil.com/french-touffes.php" />
	</head>

	<body>

		<!-- header -->
		<?php require_once('partials/header.php'); ?>

		<main id="pages-work">

			<div class="logo-company">
				<img src="img/img-graphisme/french-touffes/logotype-french-touffes.png" alt="logotype du fashion blog les French Touffes">
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
						<img src="img/img-graphisme/french-touffes/french-touffes-1.jpg" alt="tee-shirt de la marque les French Touffes"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/french-touffes/french-touffes-2.jpg" alt=""/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/french-touffes/french-touffes-3.jpg" alt=""/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/french-touffes/french-touffes-4.jpg" alt=""/>
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
				<h1>les French touffes</h1>
				<p>
					Élaboration du logotype de la marque française les French touffes lancée par la mannequin parisienne
					<a href="http://www.audeauffret.book.fr/" target="_blank">Aude Auffret</a>.
				</p>
				<?php require_once('partials/back-list-print.php'); ?>
			</div>

		</main>

		<?php
			include('partials/footer.php');
		?>
