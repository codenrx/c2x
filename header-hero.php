<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ) ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="home-header" style="background-image: url('<?php echo get_theme_mod( "c2x_background" ); ?>');">
      <nav class="header">
        <a href="<?php echo home_url("/"); ?>">
          <div class="logo">
            <?php if (has_custom_logo()): ?>
            <img src="<?php echo wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' )[0]; ?>">
            <?php else: ?>
              <?php bloginfo('name'); ?>
          <?php endif ?>
          </div>
        </a>
        <div class="menu-bars">
          <i class="fa fa-bars"></i>
        </div>
        <?php
              if( has_nav_menu( 'header' ) ){
                wp_nav_menu([
                  'theme_location' => 'header',
                  'menu_class' => 'header-menu',
                  'container' => false,
                  'fallback_cb' => false,
                  'depth' => 1,
                  'link_after' => '<span></span>'
                ]);
              }
            ?>
      </nav>
<div class="page-loader"><div class="loader">Loading...</div></div>