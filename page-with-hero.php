<?php
/*
* Template Name: Page With Hero
*/
get_header("hero");
?>

<section class="hero">
<div class="row">
  <div class="col-4 hero-text">
    <h4><?php echo get_theme_mod( "c2x_title", "I'm Nirab" ); ?></h4>
    <p>
      <?php echo get_theme_mod( "c2x_shortTitle", "Whether blog you’re about to create – personal blog, travel blog, instagram blog, we’ve have solution for you. Start blogging today." ); ?>
    </p>
  </div>
  <div class="col-6 hero-image">
    <img src="<?php echo get_theme_mod( 'c2x_photo' ); ?>" alt="My Photo" />
  </div>
</div>
</section>
</header>
<?php
while (have_posts()) {
  the_post();
  the_content();
	wp_link_pages();
}
?>
<?php
if(comments_open() || get_comments_number()){
    comments_template();
}
?>
<?php get_footer(); ?>