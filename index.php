	<!-- Get the header.php file -->
	<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="eightcol">
				<!-- The Loop -->
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<!-- Post title -->
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

						<!-- Post subtitle -->
						<h2>
							<?php
								$subtitle = get_post_meta($post->ID, 'subtitle', $single = true);
								if($subtitle !== '') {
									echo $subtitle;
								}
							?>
						</h2>

						<!-- Post content up until <!--more>-->
						<div class="post-area">
							<!-- Author and date of the post, as well as edit link. -->
							<p class="post-meta">Written by <em><?php the_author(); ?></em> on <em><?php the_time('F, j Y'); ?></em>&nbsp;
								<a href="<?php comments_link(); ?>">
									<img src="<?php bloginfo('template_url'); ?>/img/comment.png" alt="comments" />&nbsp;<?php comments_number( '0', '1', '%' ); ?>
								</a>.
							</p>
							<div class="clearfix"></div>

							<!-- Post content -->
							<?php the_content("Read on..."); ?>

							<!-- Post comments -->
							<p><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?> <?php edit_post_link('Edit Post'); ?></p>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<!-- Check if there is more than one page of posts, if there are then display the page navigation links -->
				<?php if ( $wp_query->max_num_pages > 1 ) : ?>
					<p><?php next_posts_link('Older Posts'); ?></p>
					<p><?php previous_posts_link('Newer Posts'); ?></p>
				<?php else: ?>
					<p>No newer/older posts</p>
				<?php endif; ?>
			</div>
	<!-- Get the footer.php file -->
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>