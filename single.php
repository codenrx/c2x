<?php get_header(); ?>

<section class="single-page">
  <div class="section-title-area"></div>
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      global $post;
  ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>
        <?php
        if (has_post_thumbnail()) {
        ?>
          <div class="image">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
          </div>
        <?php
        }
        ?>

        <div class="content">
          <div class="category">
            <?php
            $categories = wp_get_post_categories($post->ID);
            foreach ($categories as $category) {
              echo "<a style='margin-right: 15px;' href=" . get_category_link($category) . ">" . get_the_category_by_ID($category) . "</a>";
            }
            ?>
          </div>
          <div class="title">
            <?php the_title(); ?>
          </div>
          <div class="texts">
            <?php
            the_content();
            wp_link_pages();
            ?>
          </div>
          <div class="tags">
            <?php
            the_tags();
            ?>
          </div>
          <div class="meta">
            <div class="date"><?php echo get_the_date(); ?></div>
            <a href class="comments"><?php comments_number(); ?></a>
            <div class="socials">
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
      </div>
  <?php }
  } ?>
</section>

<section class="next-prev-posts">
  <?php
  $previous = get_previous_post();
  $next = get_next_post();
  if (get_previous_post()) {
  ?>
    <div class="prev-post">
      <div class="image">
        <?php
        if (has_post_thumbnail()) {
        ?>
          <img src="<?php echo get_the_post_thumbnail_url($previous); ?>" alt="" />
        <?php } ?>
      </div>
      <div class="content">
        <a href="<?php the_permalink($previous); ?>"><i class="fa fa-angle-double-left"></i>Previous post</a>
        <p><?php echo get_the_title($previous) ?></p>
      </div>
    </div>
  <?php
  }
  if (get_next_post()) {
  ?>
    <div class="next-post">
      <div class="content">
        <a href="<?php the_permalink($next); ?>">Next post<i class="fa fa-angle-double-right"></i></a>
        <p><?php echo get_the_title($next) ?></p>
      </div>
      <div class="image">
        <?php
        if (has_post_thumbnail()) {
        ?>
          <img src="<?php echo get_the_post_thumbnail_url($next); ?>" alt="" />
        <?php } ?>
      </div>
    </div>
  <?php } ?>
</section>

<?php
if (comments_open() || get_comments_number()) {
  comments_template();
}
?>

<?php get_footer(); ?>