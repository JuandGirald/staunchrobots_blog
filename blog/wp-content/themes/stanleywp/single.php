<?php
/**
 * Single Posts Template
 *
 *
 * @file           single.php
 * @package        StanleyWP
 * @author         Brad Williams & Carlos Alvarez
 * @copyright      2011 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Single_Post_.28single.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>


  <?php if ( have_posts() ) : ?>

  <?php while ( have_posts() ) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="white">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">

           
          <h1><?php the_title(); ?></h1>
          <p class="post-meta">Posted on <?php the_time('F j, Y'); ?> by <?php the_author_meta( 'display_name' ); ?>  <?php edit_post_link('edit post','&nbsp;&nbsp;&nbsp;<small>[ ',' ]</small>'); ?></p>
          <?php if ( has_post_thumbnail() ) : ?>
          <p><?php the_post_thumbnail(); ?></p>
          <?php endif; ?>
          <section class="post-entry">
            <?php the_content(); ?>
            <?php custom_link_pages( array('before' => '<nav class="pagination"><ul>' . __( '' ),
                                           'after' => '</ul></nav>',
                                           'next_or_number' => 'next_and_number', // activate parameter overloading
                                           'nextpagelink' => __( '&rarr;' ),
                                           'previouspagelink' => __( '&larr;' ),
                                           'pagelink' => '%',
                                           'echo' => 1 )); ?>
          </section><!-- end of .post-entry -->
          <footer class="article-footer">
            <?php if ( bi_get_data( 'enable_disable_tags', '1' ) == '1' ) {?>
            <div class="post-data">
              <?php the_tags( __( 'TAGS:', 'gents' ) . ' ', ' - ', '<br />' ); ?>
            </div><!-- end of .post-data -->
            <?php } ?>

            <div class="post-edit"><?php edit_post_link( __( 'Edit', 'gents' ) ); ?></div>
          </footer>
        </div>
        <div class="col-md-4" id="sidebar-right">
         <?php dynamic_sidebar('footer-left'); ?>
         <a href="/blog"><img id="logo-bug" src="<?php bloginfo('url')?>/wp-content/themes/stanleywp/css/images/logo.png" /></a>
        </div>
      </div>
    </div>
  </div>
</article><!-- end of #post-<?php the_ID(); ?> -->

                <div class="container">
                  <div class="row">
                    <div class="col-lg-8">

                      <?php comments_template( '', true ); ?>

                    </div>
                  </div>
                </div>

              <?php endwhile; ?>

              <?php if (  $wp_query->max_num_pages > 1 ) : ?>

              <div class="container">
                <div class="row">
                  <div class="col-lg-8">

                    <nav class="navigation">
                     <div class="previous"><?php next_posts_link( __( '&#8249; Older posts', 'gents' ) ); ?></div>
                     <div class="next"><?php previous_posts_link( __( 'Newer posts &#8250;', 'gents' ) ); ?></div>
                   </nav><!-- end of .navigation -->

                 </div>
               </div>
             </div>
           <?php endif; ?>

         <?php else : ?>

         <article id="post-not-found" class="hentry clearfix">

           <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <header>
                 <h1 class="title-404"><?php _e( '404 &#8212; Fancy meeting you here!', 'gents' ); ?></h1>
               </header>
               <section>
                 <p><?php _e( 'Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'gents' ); ?></p>
               </section>
               <footer>
                 <h6><?php _e( 'You can return', 'gents' ); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e( 'Home', 'gents' ); ?>"><?php _e( '&#9166; Home', 'gents' ); ?></a> <?php _e( 'or search for the page you were looking for', 'gents' ); ?></h6>
                 <?php get_search_form(); ?>
               </footer>

             </div>
             <div class="col-md-4" id="sidebar-right">
               <?php dynamic_sidebar('footer-left'); ?>
               <a href="/blog"><img id="logo-bug" src="<?php bloginfo('url')?>/wp-content/themes/stanleywp/css/images/logo.png" /></a>
             </div>
           </div>
           
         </div>

       </article>


     <?php endif; ?>



   <?php get_footer(); ?>
