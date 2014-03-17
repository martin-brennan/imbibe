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
							
							<!-- Categories of the post & edit post link-->
							<table style="width: 100%; border: 0;">
								<tr style="background-color: transparent;">
									<td style="border: 0;">
										<?php echo dvk_social_sharing(); ?>
									</td>
									<td style="text-align:right; border: 0;">
										<p>Posted under <em><?php the_category(', '); ?></em> <?php edit_post_link('Edit Post'); ?>.</p>
									</td>
								</tr>
							</table>

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