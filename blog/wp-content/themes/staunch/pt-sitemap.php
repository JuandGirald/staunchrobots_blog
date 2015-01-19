<?php
/*
 * Template Name: Sitemap
*/

get_header();
?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div <?php post_class(); ?>>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>

			<h2>Pages</h2>
			<ul class="xoxo pages">
				<li><a href="<?php bloginfo( 'siteurl' ); ?>" title="<?php bloginfo( 'name' ); ?>">Home</a></li>
				<?php wp_list_pages('title_li='); ?>
			</ul>

			<h2>Blog Posts</h2>
			<ul class="xoxo post-archives">
				<?php wp_get_archives( array( 'type' => 'postbypost' ) ); ?>
			</ul>

			<h2>Category Archives</h2>
			<ul class="xoxo category-archives">
				<?php wp_list_categories( array( 'feed' => __('RSS'), 'show_count' => true, 'use_desc_for_title' => false, 'title_li' => false ) ); ?>
			</ul>
		</div>

	<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>