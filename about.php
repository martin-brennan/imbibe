<?php
/*
Template Name: About
*/
?>
<!-- Get the header.php file -->
	<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="eightcol">
				<h1 class="red">About</h1>
				<?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
			</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>