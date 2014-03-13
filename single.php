	<!-- Get the header.php file -->
	<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="onecol"></div>
			<div class="tencol">
			<!-- The Loop -->
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<article>
						<!-- Post title -->
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

						<!-- Post subtitle -->
						<?php $subtitle = get_post_meta($post->ID, 'subtitle', $single = true);
						if($subtitle !== '') { ?>
						<table class="subtitle">
							<tr>
								<td>—</td>
								<td>
									<h2>
										
												<?php echo $subtitle; ?>
									</h2>
								</td>
								<td>—</td>
							</tr>
						</table>
						<?php } ?>

						<!-- Post content up until <!--more>-->
						<div class="post-area">
							<!-- Author and date of the post, as well as edit link. -->
							<p class="post-meta"><em><?php the_time('l jS F, Y'); ?></em></p>
							
							<!-- Categories of the post & edit post link-->
							<p class="categories">Posted under <?php the_category(', '); ?> <?php edit_post_link('Edit Post'); ?></p>
							<div class="clearfix"></div>

							<!-- Post content -->
							<?php the_content(); ?>
							<div class="clearfix"></div>
						</div>

						<!-- Post comments -->
						<p><?php comments_template(); ?></p>
						</article>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="onecol"></div>
	</div>
	<?php get_footer(); ?>