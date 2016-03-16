<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil, designer global-Portfolio</title>
		<meta name="description" content="Lambert Roudil, designer global vous propose la construction de l'identité visuelle de votre entreprise ainsi que le développement de votre site internet. " />
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

		<main>
			<section class="row col-xs-12" id="my-introduction">
				<!-- particles.js container -->
				<div id="particles-js"></div>

				<!-- Lambert Roudil introduction -->
				<div class="container">
					<div class="col-sm-12 col-md-7 welcome-text">
						<h1>LAMBERT ROUDIL	</h1>
						<p>Je suis designer global - graphiste, webdesigner, intégrateur, designer produit et d'espace - nantais, passionné par l'image, le web et par conséquent, par mon travail.</p>
						<h2>Bienvenue sur mon portfolio !</h2>
						<p><strong>Découvrez le par-ici</strong></p>
						<figure class="direction">
							<img class="arrow-down" src="img/arrow-down.svg" alt="flèche indiquant le portfolio de Lambert Roudil">
						</figure>
					</div>
				</div>
			</section>
			<!--/end section introduction-->

			<?php require_once('work.php'); ?>

			<section class="row col-xs-12" id="skills">
				<div class="container">
					<h2>Mon parcours</h2>
					<div class="col-xs-12 col-sm-4 text-center">
						<img class="pochoir" src="img/skills.svg" alt="le parcours du designer Lambert Roudil, ancien étudiant de L'Ecole de Design Nantes Atlantique">
					</div>
					<div class="col-xs-12 col-sm-8 skills-description">
						<p><strong>2012 - </strong>BTS Design de produit en alternance à l' École de Design Nantes Atlantique.</p>
							<ul>
								<li><strong>CFP International</strong><br>
									Designer - Création de mobiliers, aménagements d’intérieur et d'identités visuelles.</li>
								<li><strong>Touang Maroquinerie</strong><br>
									Designer/Styliste - Création de chaussures et retail design (Anais, pécari, Miss Coquines);</li>
								<li><strong>ONG Gawad Kalinga</strong><br>
									Designer - Création de mobiliers, jouets, d’identités visuelles (logo, packaging, flyers) pour les entrepreneurs sociaux de Gawad Kalinga</li>
							</ul>
						<p><strong>2015 - </strong>Diplôme de développeur/intégrateur web à la 3W Academy, école dont le but est de former les développeurs-intégrateurs web dont l’économie numérique a besoin.</p>
							<ul>
								<li><strong>TOOG</strong><br>
									Graphiste / Web designer / Intégrateur</li>
							</ul>
					</div>
				</div>
			</section>
			<!--/end row-->

			<section class="row col-xs-12" id="presta">
				<div class="container">
					<h2>Mes prestations</h2>
					<div class="col-xs-12 col-sm-4 text-center">
						<img src="img/picto-logo.svg" alt="">
						<h3>Logotypes</h3>
						<p>Création et livraison d'un éventail de créations logo sur mesure avec possibilité de développer
							votre identité visuelle: carte de visite, flyers, lettres à en-tête etc...</p>
					</div>
					<div class="col-xs-12 col-sm-4 text-center">
						<img src="img/picto-web.svg" alt="">
						<h3>Sites internet</h3>
						<p>Sites "sur mesure", wordpress etc... L'étape 1 est la préparation d'un zoning, l'étape 2 est la maquette qui permettra de visualiser l'emplacement des principaux éléments de votre futur site internet. Etape 3: le dev !</p>
					</div>
					<div class="col-xs-12 col-sm-4 text-center">
						<img src="img/picto-furniture.svg" alt="">
						<h3>Mobiliers</h3>
						<p>Parce qu’un projet n’est pas voué à rester sur le papier ou à l'écran, tous les éléments nécessaires à la fabrication, tels que des plans de définitions, sont mis à votre disposition. Je vous garantis la validation de tous les aspects esthétiques, ergonomiques et techniques du projet.</p>
					</div>
				</div>
			</section>
			<!--/end row-->
		</main>
<?php require_once('footer.php'); ?>
