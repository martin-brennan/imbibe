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
						<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

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
							<p class="post-meta"><em><?php the_time('l jS F, Y'); ?></em> — <?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?> <?php edit_post_link('Edit Post'); ?></p>

							<div class="clearfix"></div>
							<!-- Post content -->
							<?php the_content("Read on..."); ?>

							<div class="clearfix"></div>
						</div>
					</article>
					<?php endwhile; ?>
				<?php endif; ?>
				<!-- Check if there is more than one page of posts, if there are then display the page navigation links -->
				<?php if ( $wp_query->max_num_pages > 1 ) : ?>
				<div class="pager">
					<table style="width:100%">
						<tr>
							<td style="text-align:left">
								<?php previous_posts_link('<< Newer Posts'); ?>
							</td>
							<td style="text-align:right">
								<?php next_posts_link('Older Posts >>'); ?>
							</td>
						</tr>
					</table>
				</div>
				<?php endif; ?>
			</div>
			<div class="onecol"></div>
	</div><!-- end of row div -->
</div>
	<?php get_footer(); ?>