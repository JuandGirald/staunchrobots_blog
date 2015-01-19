<?php get_header(); ?> 
<div class="content" id="blog-holder">
	<div id="content">
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_post_thumbnail('full')?>
			<h1><?php the_title(); ?></h1>
			<p class="meta">Posted on <?php the_time('F jS, Y') ?> by <?php the_author(); ?></p>
			<?php the_content();?>
		<?php  comments_template(); ?>
		
		<?php endwhile; else: ?>

			<?php get_template_part('404'); ?>

		<?php endif; ?>
	</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>