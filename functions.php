<?php
add_theme_support( 'post-thumbnails' ); 

function theme_enqueue_less() {
	wp_enqueue_style('theme-style', get_bloginfo('template_directory').'/css/style.less', array(), '', 'all');
}
add_action('wp','theme_enqueue_less');
if ( function_exists('register_sidebar') )
    register_sidebar();
?>
<?php function advanced_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	<div class="comment-author-avatar">
		<?php echo get_avatar($comment,$size='64'); ?>
	</div>
	<div class="comment-item-wrap">
		<div class="comment-meta">On <?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?><?php edit_comment_link(__('(Edit)'),'  ','') ?>,
		<a href="<?php the_author_meta( 'user_url'); ?>"><?php printf(__('%s'), get_comment_author_link()) ?></a> said:</div>
		<?php if ($comment->comment_approved == '0') : ?>
	       <em><?php _e('Your comment is awaiting moderation.') ?></em>
	       <br />
	    <?php endif; ?>

	    <div class="comment-text">	
	         <?php comment_text() ?>
	    </div> 
	    <div class="reply">
	      <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	    </div>
	</div>
	<div class="clearfix"></div>
<?php
	} 
?>