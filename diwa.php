<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil, designer global-Portfolio</title>
		<meta name="description" content="Diwa est une entreprise sociale faisant partie de l'ONG Gawad Kalinga basée aux Philippines. Elle s'est spécialisée dans les huiles essentielles naturelles et dans les huiles de massage. La construction de l'identité de la marque Diwa s'est fondée sur la simplicité et la clarté afin d'utiliser une image identifiable et mémorisable en une seconde." />
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
				<img src="img/img-graphisme/diwa/logo-diwa.svg" alt="logo de l'entreprise Diwa, les huiles essentielles">
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
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/img-graphisme/diwa/diwa.jpg" alt="identité visuelle de l'entreprise diwa"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/diwa/diwa1.jpg" alt="identité visuelle de l'entreprise diwa"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/diwa/diwa2.jpg" alt="identité visuelle de l'entreprise diwa"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/diwa/diwa3.jpg" alt="identité visuelle de l'entreprise diwa"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/diwa/diwa4.jpg" alt="identité visuelle de l'entreprise diwa"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/diwa/diwa5.jpg" alt="identité visuelle de l'entreprise diwa"/>
					</div>
					<div class="item">
						<img src="img/img-graphisme/diwa/diwa3.jpg" alt="identité visuelle de l'entreprise diwa"/>
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
				<h1>Diwa</h1>
				<p>Diwa est une entreprise sociale faisant partie de l'ONG Gawad Kalinga basée aux Philippines. Elle s'est spécialisée dans les huiles essentielles naturelles et dans les huiles de massage.</p>
				<p>L'identité visuelle est l'ensemble des éléments graphiques constituant la signalétique de l'entreprise. Ils permettent d'identifier, de reconnaître immédiatement une entreprise, un organisme, une marque. Les éléments constitutifs de l'identité visuelle sont le nom (de marque), le logotype, l'emblème, la griffe, la couleur, la police et la taille de caractères utilisés.</p>
				<p>La construction de l'identité de la marque "Diwa" s'est fondée sur la simplicité et la clarté afin d'utiliser une image identifiable et mémorisable en une seconde. Sa nouvelle identité est cohérente puisqu'elle est la même sur tous les supports utilisés: flacon, carte de visite, lettre à en-tête, flyers, agendas...</p>
			</div>
		</div>

	</main>

<?php
	include('footer.php');
?>
