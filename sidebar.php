		<div class="fourcol last">
			<div id="sidebar">
				<!-- start search box -->
				<h4>Search</h4>
				<div class="search-side">
					<?php get_search_form(); ?>
				</div>
				<!-- end search box -->

				<!-- start about box -->
				<h4>About</h4>
				<div class="about-side">
					<p class="about-side"><?php bloginfo(description); ?>&nbsp;<a href="/about/">Read more...</a></p>
				</div>
				<div class="clearfix"></div>
				<!-- end about box -->

				<!-- start recent articles box -->
				<h4>Recent Arcticles</h4>
				<ul class="recent-posts">
				  <?php
				    $archive_query = new WP_Query('showposts=5');
				    while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
				  <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
				  <?php endwhile; ?>
				</ul>
				<!-- end recent articles box -->

				<!-- Start subscribe -->
				<h4>Subscribe</h4>
				<p><a href="http://feeds.feedburner.com/imbibe" rel="alternate" type="application/rss+xml"><img src="http://www.feedburner.com/fb/images/pub/feed-icon16x16.png" alt="" style="vertical-align:middle;border:0"/></a>&nbsp;<a href="http://feeds.feedburner.com/imbibe" rel="alternate" type="application/rss+xml">Subscribe to imbibe</a></p>
				<a href="http://feedburner.google.com/fb/a/mailverify?uri=imbibe&amp;loc=en_US">Subscribe to imbíbe via Email</a>
				<p><a href="http://feeds.feedburner.com/imbibe"><img src="http://feeds.feedburner.com/~fc/imbibe?bg=cc5632&amp;fg=FFFFFF&amp;anim=0" height="26" width="88" style="border:0" alt="" /></a></p>
				<div class="fb-like" data-href="https://www.facebook.com/imbibeblog" data-send="true" data-width="345" data-show-faces="true"></div>
				<!-- End subscribe -->

				<!-- Start tags -->
				<h4>Tags</h4>
				<div class="tag-cloud">
					<?php wp_tag_cloud($args = array(
					    'smallest'                  => 12, 
					    'largest'                   => 24,
					    'unit'                      => 'px', 
					    'number'                    => 30,  
					    'format'                    => 'flat',
					    'orderby'                   => 'name', 
					    'order'                     => 'ASC',
					    'exclude'                   => null, 
					    'include'                   => null, 
					    'topic_count_text_callback' => default_topic_count_text,
					    'link'                      => 'view', 
					    'taxonomy'                  => 'post_tag', 
					    'echo'                      => true )); ?>
				</div>
				<!-- End tags -->
			</div>
		</div>
	</div><!-- end of row div -->
</div><!-- end of container div for posts -->
