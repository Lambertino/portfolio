<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil et les French touffes</title>
		<meta name="description" content="Élaboration du logotype de la marque française les French touffes lancée par la mannequin parisienne" />
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

				<?php include('nav-graphism.php');?>

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
				</div>
			</div>

		</main>

<?php
	include('footer.php');
?>
