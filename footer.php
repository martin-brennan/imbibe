	<?php wp_footer(); ?>
	
	<div id="footer" class="container">
		<div id="screen-footer" class="row">
			<div class="onecol"></div>
			<div class="sixcol">
				<div class="footer-title">
					Drop Us A Line
				</div>
			</div>
			<div class="fourcol">
				<div class="footer-greeting">
					Hit us up on twitter at <a href="http://twitter.com/imbibeblog">@imbibeblog</a> or email us at <a href="mailto:imbibeblog@gmail.com">imbibeblog@gmail.com</a>!
				</div> 
				<!-- <div class="contact">
					Hit us up on twitter at <a href="http://twitter.com/imbibeblog">@imbibeblog</a> or email us at <a href="mailto:imbibeblog@gmail.com">imbibeblog@gmail.com</a>!
				</div> -->
			</div>
			<div class="onecol last"></div>
		</div>
		<div id="screen-footer-sub" class="row">
			<div class="threecol"></div>
			<div class="sixcol">
				<div class="footer-nav">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/archive/">Archive</a></li>
						<li><a href="/about/">About</a></li>
						<li style="padding: 0;"><a href="/gallery/">Gallery</a></li>
					</ul>
					<p class="copyright">&copy; Michael Fitz-Payne and Martin Brennan <?php echo strftime("%Y"); ?></p>
				</div>
			</div>
			<div class="threecol"></div>
		</div>
		<div id="mobile-footer" class="row" style="display: none">
			<div class="threecol"></div>
			<div class="sixcol">
				<div class="footer-nav">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/archive/">Archive</a></li>
						<li><a href="/about/">About</a></li>
						<li style="padding: 0;"><a href="/gallery/">Gallery</a></li>
					</ul>
					<p class="copyright">&copy; Michael Fitz-Payne and Martin Brennan <?php echo strftime("%Y"); ?></p>
				</div>
			</div>
			<div class="threecol"></div>
		</div>
	</div>
	<!-- Load javascript files -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/cocktails.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/css3-mediaqueries.js"></script>
	</body>
</html>