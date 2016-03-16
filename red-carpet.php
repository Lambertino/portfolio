<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil, designer global-Portfolio</title>
		<meta name="description" content="Red Carpet est une entreprise sociale liée à l'ONG Gawad Kalinga basée aux Philippines." />
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
				<h1></h1>
				<p></p>
				<p></p>
			</div>

		</main>

<?php
	include('footer.php');
?>
