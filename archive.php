<?php
/*
Template Name: Archives with Content
*/
?>

<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="onecol"></div>
		<div class="tencol">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<div class="post">
			  <h1 id="post-<?php the_ID(); ?>"><?php the_title();?></h1>
			  <div class="entrytext">
			   <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			  </div>
			</div>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			<?php endwhile; endif; ?>			
			<div>

				<h2>Archives by Month:</h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>

				<h2>Archives by Subject:</h2>
				<ul>
					<?php wp_list_categories(); ?>
				</ul>

			</div>
		</div>
		<div class="onecol"></div>
	</div>
	<?php get_footer(); ?>