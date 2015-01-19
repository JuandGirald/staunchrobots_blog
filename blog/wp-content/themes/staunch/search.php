<?php get_header(); ?>
<div class="content" id="blog-holder">
	<div id="content">
	<?php if (have_posts()) : ?>
		<h1>Search Results</h1>
		<p>
			Your search topic <strong><?php echo esc_html($s); ?></strong> returned the following articles:
		</p>
		<?php
			while (have_posts()) : the_post();
				get_template_part('loop');
			endwhile;
		?>

		<div class="pagination"><div class="hold"><div class="hold2"><?php wp_pagenavi(); ?></div></div></div>

	<?php else : ?>

		<h1>Search Results</h1>
		<p>
			Sorry, but your search term <strong><?php echo esc_html($s); ?></strong> returned <strong>0</strong> results.
		</p>

	<?php endif; ?>
	</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>