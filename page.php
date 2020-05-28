<?php get_header(); ?>

    <section class="single-page">
      <div class="section-title-area">
        <h4><?php single_post_title(); ?></h4>
         <?php
            if ( function_exists('the_subtitle') )
                echo "<p>".the_subtitle()."</p>";
            ?>
      </div>
      <?php
            while (have_posts()) {
              the_post();
        ?>
      <div class="page-content">
        <div class="image">
        	<?php
            if (has_post_thumbnail()){
            	?>
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="featured image" />
              <?php
            }
            ?>
        </div>
        <div class="content">
          <div class="texts">
            <?php 
	              the_content();
	              wp_link_pages();
            ?>
          </div>
        </div>
      </div>
      <?php
            if(comments_open() || get_comments_number()){
              comments_template();
            }
         ?>
  <?php } ?>
    </section>

<?php get_footer(); ?>