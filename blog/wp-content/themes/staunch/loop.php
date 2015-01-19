<article> 
	<?php if(has_post_thumbnail()):?>
		<?php echo the_post_thumbnail('thumb');?>
	<?php endif;?>
	<div class="text-holder">
		<h2><a rel="bookmark" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		<p class="meta">Posted on <a href="<?php echo get_month_link(get_the_time('Y'), get_the_time('m')); ?>"><?php the_time('F j, Y');?></a> by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a></p>		<?php /*			$content = get_the_content();			$trimmed_content = wp_trim_words( $content, 40, '...<a href="'. get_permalink() .'">Read More »</a>' );			echo '<p class="short-text">'.$trimmed_content.'</p>';		*/?>
		<p><?php the_excerpt();?></p>
		<div class="more"><a href="<?php the_permalink();?>">Read More »</a></div>
	</div>
</article>