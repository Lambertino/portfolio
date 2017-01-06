<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<title>Lambert Roudil, designer global-Portfolio</title>
		<meta name="description" content="Lambert Roudil, designer global vous propose la construction de l'identité visuelle de votre entreprise ainsi que le développement de votre site internet. " />
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<meta name="theme-color" content="#59ABE3"/>

		<link rel="icon" type="image/png" href="img/favicon.ico" >
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="web/styles/screen.min.css">

		<meta property="og:title" content="Lambert Roudil, designer global vous propose la construction de l'identité visuelle de votre entreprise ainsi que le développement de votre site internet." />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://www.lambertroudil.com/" />
		<meta property="og:image" content="http://www.lambertroudil.com/img/og-image.jpg" />

		<script type="text/javascript">
		    window.smartlook||(function(d) {
		    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
		    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
		    c.charset='utf-8';c.src='//rec.smartlook.com/recorder.js';h.appendChild(c);
		    })(document);
		    smartlook('init', '3699a677e70c105230101bc85da89cffd32ddbf2');
		</script>
	</head>

	<body>

		<!-- header -->
		<?php require_once('header.php'); ?>

		<main class="homepage">

			<section class="row col-xs-12 my-introduction">
				<!-- particles.js container -->
				<div id="particles-js"></div>

				<!-- Lambert Roudil introduction -->
				<div class="container">
					<div class="col-sm-12 col-md-7 my-introduction-ct">
						<h1>Lambert Roudil</h1>
						<p>
							Je suis designer global - graphiste, webdesigner, intégrateur, designer produit et d'espace -
							nantais, passionné par l'image, le web et par conséquent, par mon travail.
						</p>
						<h2>Bienvenue sur mon portfolio !</h2>
						<p><strong>Découvrez le par-ici</strong></p>
						<figure class="direction center-block">
							<a href="#portfolio" class="scroll">
								<img src="img/arrow-down.png" class="float" alt="scrollez vers le bas pour consulter le portfolio de Lambert Roudil">
							</a>
						</figure>
					</div>
				</div>
			</section>
			<!--/end section introduction-->

			<?php require_once('work.php'); ?>

			<section class="row text-center skills">
				<div class="col-sm-12">
					<div class="container">
						<section class="item col-sm-6">
							<h3>2012</h3>
							<p>BTS Design de produit en alternance<br>à l' École de Design Nantes Atlantique</p>
						</section>

						<section class="item col-sm-6">
							<h3>2013</h3>
							<p>Volontariat aux Philippines<br>au sein de l'ONG Gawad Kalinga</p>
						</section>

						<section class="item col-sm-6">
							<h3>2015</h3>
							<p>Diplôme de développeur/intégrateur web<br>à la 3W Academy</p>
						</section>

						<section class="item col-sm-6">
							<h3>2016</h3>
							<p>Webdesigner / intégrateur<br>au sein de l'agence nantaise <a href="http://www.toog.fr" target="_blank">Toog</a></p>
						</section>
					</div>
				</div>
				<canvas id="canvas"></canvas>
			</section>

		</main>
<?php require_once('footer.php'); ?>
