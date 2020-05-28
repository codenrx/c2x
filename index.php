<?php get_header(); ?>

<section class="blog-posts">
  <?php if (get_theme_mod("c2x_posts_page_title")) : ?>
    <div class="section-title-area">
      <h4><?php echo get_theme_mod("c2x_posts_page_title"); ?></h4>
      <p>
        <?php echo get_theme_mod("c2x_posts_page_subtitle"); ?>
      </p>
    </div>
  <?php else : ?>
    <br><br><br>
  <?php endif ?>
  <div class="posts">
    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        global $post;
    ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
          <div class="image">
            <?php
            if (has_post_thumbnail()) {
            ?>
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
            <?php } ?>
          </div>
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
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="text">
              <?php the_excerpt(); ?>
            </div>
            <div class="meta">
              <div class="date"><?php echo get_the_date(); ?></div>
              <a href class="comments"><?php comments_number(); ?></a>
            </div>
          </div>
        </div>
    <?php }
    } ?>
  </div>
  <div class="loadmore"><?php next_posts_link("Load More"); ?></div>
</section>

<?php get_footer(); ?>