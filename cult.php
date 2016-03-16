<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil, designer global-Portfolio</title>
		<meta name="description" content="Cult est un panel d'illustration se présentant sous la forme de pochoir représentant des personnalités dans le milieu musical. Cette gamme de tee-shirt a été développé par la marque Exxo7" />
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

				<?php include('nav-graphism.php');?>

				<div class="logo-company">
					<img src="img/img-graphisme/exxo/logo-cult.svg" alt="logo de la gamme de tee-shirt Cult">
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
					 	<li data-target="#carousel-project" data-slide-to="5"></li>
					 	<li data-target="#carousel-project" data-slide-to="6"></li>
					 	<li data-target="#carousel-project" data-slide-to="7"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/img-graphisme/exxo/exxo.jpg" alt="gamme de tee shirt cult' commandée par la marque EXXO7"/>
						</div>
						<div class="item">
							<img src="img/img-graphisme/exxo/exxo1.jpg" alt="gamme de tee shirt cult' commandée par la marque EXXO7"/>
						</div>
						<div class="item">
							<img src="img/img-graphisme/exxo/exxo2.jpg" alt="gamme de tee shirt cult' commandée par la marque EXXO7"/>
						</div>
						<div class="item">
							<img src="img/img-graphisme/exxo/exxo3.jpg" alt="gamme de tee shirt cult' commandée par la marque EXXO7"/>
						</div>
						<div class="item">
							<img src="img/img-graphisme/exxo/exxo4.jpg" alt="gamme de tee shirt cult' commandée par la marque EXXO7"/>
						</div>
						<div class="item">
							<img src="img/img-graphisme/exxo/exxo5.jpg" alt="gamme de tee shirt cult' commandée par la marque EXXO7"/>
						</div>
						<div class="item">
							<img src="img/img-graphisme/exxo/exxo6.jpg" alt="gamme de tee shirt cult' commandée par la marque EXXO7"/>
						</div>
						<div class="item">
							<img src="img/img-graphisme/exxo/exxo7.jpg" alt="gamme de tee shirt cult' commandée par la marque EXXO7"/>
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

				<div class="description"></div>
			</div>

		</main>

<?php
	include('footer.php');
?>
