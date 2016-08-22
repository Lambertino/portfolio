		<footer class="col-xs-12" id="contact">
			<div class="row text-center no-margin">
				<div class="hidden-xs col-sm-offset-1 col-sm-1 logo-contact">
					<img src="img/logo-lr.svg" alt="logo Lambert Roudil">
				</div>
				<div class="col-sm-2 signature">
					<p class="hidden-xs" id="name">LAMBERT ROUDIL</p>
				</div>
				<div class="hidden-xs col-sm-4">
					<?php echo '<p class="clock">'.date('d m Y').'</p>'; ?>
				</div>
				<div class="col-xs-12 col-sm-4">
					<a href="mailto:roudil.lambert@gmail.com?subject=SweetWords">
						<p id="link"><i class="glyphicon glyphicon-envelope"></i> roudil.lambert@gmail.com</p>
					</a>
				</div>
			</div>
		</footer>

	<!-- scripts -->
	<script src="js/particles.js"></script>
	<script src="js/app.js"></script>

	<!-- stats.js -->
	<script src="js/lib/stats.js"></script>
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

	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scroll.js"></script>
	</body>
</html>
