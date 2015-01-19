<?php get_header(); global $curr_page;?> 
	<?php 
		$banner = get_field('_banner','options');
	?>
	<?php if($banner):?>
		<section id="banner">
			<div class="content">
				<img src="<?php echo $banner?>" alt="main banner" class="main-banner">
			</div>
		</section>
	<?php endif;?>
	<div class="content" id="blog-holder">
		<div id="content">
		<?php 
			if (have_posts()) : 
				while (have_posts()) : the_post(); 
					get_template_part('loop');
				endwhile;
		?>
		<div class="navigation">
			<div class="prev"><?php next_posts_link('← Previous Posts') ?></div>
			<div class="next"><?php previous_posts_link('Next Posts →'); ?></div>
		</div>
		
		</div>
		<?php get_sidebar();?>
		
	</div>
	<?php 
			else : 
				get_template_part('404');
			endif;
		?>
<?php get_footer(); ?>