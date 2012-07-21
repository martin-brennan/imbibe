	<?php wp_footer(); ?>
	
	<div id="footer" class="container">
		<div id="screen-footer" class="row">
			<div class="fivecol">
				<div class="footer-title">
					Drop Us A Line
				</div>
				<div class="footer-greeting">
					We always like to hear from like-minded <br/>
					contemporaries and liquor connoisseurs.
				</div>
				<div class="footer-nav">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/archive/">Archive</a></li>
						<li><a href="/about/">About</a></li>
						<li><a href="/gallery/">Gallery</a></li>
					</ul>
					<p class="copyright">&copy; Michael Fitz-Payne and Martin Brennan 2012</p>
				</div>
			</div>
			<div class="onecol">

			</div>
			<div class="sixcol last">
				<div class="contact">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

				<?php endif; ?>
				</div>
			</div>
		</div>
		<div id="mobile-footer" class="row" style="display: none">
			<div class="twelvecol">
				<div class="footer-nav">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/archive/">Archive</a></li>
						<li><a href="/about/">About</a></li>
						<li><a href="/gallery/">Gallery</a></li>
					</ul>
					<p class="copyright">&copy; Michael Fitz-Payne and Martin Brennan 2012</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Load javascript files -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/cocktails.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/css3-mediaqueries.js"></script>
	</body>
</html>