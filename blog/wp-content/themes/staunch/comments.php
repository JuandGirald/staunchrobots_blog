<?php

// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');

if ( post_password_required() ) {
	?> <p>This post is password protected. Enter the password to view comments.</p> <?php
	return;
}
	
function theme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	
	<li>
		<div <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
			<p class="fn"><?php comment_author_link(); ?></p>
			<p class="meta"><?php comment_date('n.d.y'); ?> </p>
			<?php if ($comment->comment_approved == '0') : ?>
			<p>Your comment is awaiting moderation.</p>
			<?php else: ?>
			<?php comment_text(); ?>
			<?php endif; ?>
			
			<?php
				comment_reply_link(array_merge( $args, array(
					'reply_text' => 'Reply',
					'before' => '<p class="reply-link">',
					'after' => '</p>',
					'depth' => $depth,
					'max_depth' => $args['max_depth']
				))); ?>
		</div>
	<?php }
	
	function theme_comment_end() { ?>
		</li>
	<?php }
?>
<div class="comments-holder">
<?php if ( have_comments() ) : ?>

<div class="section comments" id="comments">

	<h3><?php comments_number('No Comments', '1 Comment', 'Comments (%)' );?></h3>

	<ol class="commentlist">
		<?php wp_list_comments(array(
			'callback' => 'theme_comment',
			'end-callback' => 'theme_comment_end'
			)); ?>
	</ol>
	<?php /*
	<div class="navigation">
		<div class="next"><?php previous_comments_link('&laquo; Older Comments') ?></div>
		<div class="prev"><?php next_comments_link('Newer Comments &raquo;') ?></div>
	</div>
	*/?>

</div>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p>Comments are closed.</p>

	<?php endif; ?>
	
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<div class="section respond" id="respond">
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<fieldset>
			<h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>
	
			<div class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></div>
		
			<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
			<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
			<?php else : ?>
			
			<?php if ( is_user_logged_in() ) : ?>

			<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
			
			<?php else : ?>
			<div class="desc">Your email address will not be published. Required fields are marked *</div>
			<p class="name">
				<label for="author">Name</label>
				<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" />
			</p>
			<p class="email">
				<label for="email">Email </label>
				<input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" />
			</p>
			<p class="website">
				<label for="website">Website </label>
				<input type="text" name="website" id="website" value="<?php echo esc_attr($comment_author_url); ?>" />
			</p>
			<?php endif; ?>
			<p>
				<label for="comment">Comment</label>
				<textarea name="comment" id="comment" cols="100%" rows="10"></textarea>
			</p>
			<p>
				<input name="submit" type="submit" id="submit" value="Submit" />
			</p>
			
			<?php
				comment_id_fields();
				do_action('comment_form', $post->ID);
			?>
			
			<?php endif; ?>

		</fieldset>
	</form>
</div>

<?php endif; ?>
</div>
