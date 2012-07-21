	<!-- Get the header.php file -->
	<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="twelvecol last">
				<div class="four-wrap">
					<?php
						$i = rand(0,10);
						if ($i >= 0 && $i <=3) {
							echo "<h1 class='red'>Taxi!</h1>" . 
							"<p class='fourcontent'>Looks like you’ve had a few too many, whatever you’re looking for isn’t here. You may want to<br/>" . 
							"visit the <a href='archive/'>archives</a>, <a href='/'>go home</a>, or try finding what you’re looking for below.</p>";
						} elseif ($i >= 4 && $i <= 7) {
							echo "<h1 class='red'>Something's Missing!</h1>" . 
							"<p class='fourcontent'>Looks like something is missing. Ah yes, it’s time for a refill! Head over to the<br/> 
							<a href='/archive/'>archives</a> for some ideas, <a href='/'>go home</a>, or try finding what you’re looking for below.</p>";
						} elseif ($i >= 8 && $i <= 10) {
							echo "<h1 class='red'>How Embarrassing!</h1>" . 
							"<p class='fourcontent'>We’ll never live this one down! Oh well, at least we won’t remember it in the morning. Look for some<br/>
							amnesia medicine in the <a href='/archive/'>archives</a>, <a href='/'>go home</a>, or try finding what you’re looking for below.</p>";
						}
					?>
					<div class="search-404">
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Get the footer.php file -->
	<?php get_footer(); ?>