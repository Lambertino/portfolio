	<footer class="col-xs-12">
		<div class="row text-center no-margin">
			<div class="hidden-xs col-sm-offset-1 col-sm-1 logo-contact">
				<img src="img/logotype-lambert-roudil-footer.png" alt="Bienvenue sur le site de Lambert Roudil, vous êtes en bas de page">
			</div>
			<div class="col-sm-2">
				<p class="hidden-xs"">Lambert Roudil</p>
			</div>
			<div class="hidden-xs col-sm-4">
				<?php echo '<p class="clock">'.date('d m Y').'</p>'; ?>
			</div>
			<div class="col-xs-12 col-sm-4">
				<a href="mailto:roudil.lambert@gmail.com?subject=SweetWords">
					<p id="link">roudil.lambert@gmail.com</p>
				</a>
			</div>
		</div>
	</footer>

	<!-- scripts -->
	<script type="text/javascript" src="web/scripts/jquery.1.6.2.js"></script>
	<script type="text/javascript" src="web/scripts/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="web/scripts/scripts.js"></script>
	<script type="text/javascript" src="web/scripts/modernizr.custom.33604.js"></script>
	<script type="text/javascript" src="web/scripts/particles.js"></script>
	<script type="text/javascript" src="web/scripts/app.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="web/scripts/scroll.js"></script>

	<!-- stats.js -->
	<script>
		var count_particles, stats, update;
		stats = new Stats;
		stats.setMode(0);
		stats.domElement.style.position = 'absolute';
		stats.domElement.style.left = '0px';
		stats.domElement.style.top = '0px';
		document.body.appendChild(stats.domElement);
		count_particles = document.querySelector('.js-count-particles');
		update = function() {
		  stats.begin();
		  stats.end();
		  if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
		    count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
		  }
		  requestAnimationFrame(update);
		};
		requestAnimationFrame(update);
	</script>

	</body>
</html>
