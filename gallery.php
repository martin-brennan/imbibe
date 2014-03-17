<?php
/*
Template Name: Gallery
*/
?>
<!-- Get the header.php file -->
	<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="onecol"></div>
			<div class="tencol">
			<h1 class="navy">Gallery</h1>
			<?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
			</div>
			<div class="onecol"></div>
		</div>
<?php get_footer(); ?>