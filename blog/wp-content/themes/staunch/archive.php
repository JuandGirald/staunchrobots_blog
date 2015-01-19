<?php get_header();?>
<div class="content" id="blog-holder">
 
	<div id="content">
	<?php
		if (have_posts()) : 
			$post = $posts[0];
			
			if(is_category()) {
	?>
			<h1><?php single_cat_title(); ?></h1>
			<?php } elseif(is_tag()) { ?>
			<h1><?php single_tag_title(); ?></h1>
			<?php } elseif (is_day()) { ?>
			<h1><?php the_time('F jS, Y'); ?></h1>
			<?php } elseif (is_month()) { ?>
			<h1><?php the_time('F, Y'); ?></h1>
			<?php } elseif (is_year()) { ?>
			<h1><?php the_time('Y'); ?></h1>
			<?php } elseif (is_author()) { ?>
			<h1>Author Archive</h1>
			<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h1>Blog Archives</h1>
			<?php } ?>
			
		<?php 
			while (have_posts()) : the_post();
				get_template_part('loop');
			endwhile; 
		?>
		<div class="navigation">
			<div class="prev"><?php next_posts_link('← Previous Post') ?></div>
			<div class="next"><?php previous_posts_link('Next Post →'); ?></div>
		</div>
	<?php 
		else : 
			get_template_part('404');
		endif; 
	?>
	</div>
	<?php get_sidebar();?>
</div>
<?php get_footer(); ?>