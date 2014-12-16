<?php
/**
 * Default Page Header
 *
 * @package WP-Bootstrap
 * @subpackage WP-Bootstrap
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-57-precomposed.png">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>  data-spy="scroll" data-target=".bs-docs-sidebar" data-offset="10">
    <div class="navbar navbar-inverse navbar-relative-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="/" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                    <?php bloginfo('name'); ?></a>
                <?php wp_nav_menu(
                        array(
                            'menu' => 'main-menu',
                            'container_class' => 'nav-collapse collapse',
                            'menu_class' => 'nav',
                            'fallback_cb' => '',
                            'menu_id' => 'main-menu',
                            'walker' => new Bootstrapwp_Walker_Nav_Menu()
                        )
                    ); ?>
            </div>
        </div>
    </div>
    <?php 
    $items = wp_get_nav_menu_items('Main Menu');
    //find the menu item for twitter; used in styling below
    $twitter_menu_id = false;
    foreach($items as $key => $value){
      if('twitter' == strtolower($value->title)){
        $twitter_menu_id = $value->ID;
      } elseif ('blog' == strtolower($value->title)){
      ?>
        <script type="text/javascript">
          var blogMenuId = "#menu-item-<?= $value->ID?>";
          jQuery(document).ready(function(){
            jQuery(blogMenuId).addClass('selected')
          });
        </script>
      <?php
      }
    }
      
    if($twitter_menu_id) {
    ?>
    <style type="text/css">
     li#menu-item-<?php echo $twitter_menu_id; ?> {
      background-image: url(/blog/wp-content/themes/stanleywp/css/images/twitter-small.png);
      background-repeat: no-repeat;
      text-indent: -9999px; 
      background-position:0.5em;
      margin-right: 20px;
    }
    
    </style>
    <?php } ?>
    <!-- End Header. Begin Template Content -->