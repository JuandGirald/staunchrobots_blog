<?php get_header(); ?>
<div class="content" id="blog-holder">  
<div id="content">
	<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
		?>
		<article>
		<div <?php post_class(); ?>>
			<h1><?php the_title(); ?></h1>
			<?php
				the_content();
			?>
		</div>
		</article>
	<?php
			endwhile;
		else:
			get_template_part('404');
		endif;
	?>
	
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>