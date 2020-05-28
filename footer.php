<footer>
      <div class="social-icons">
        <?php if (get_theme_mod("c2x_facebook")): ?>
          <a href="<?php echo get_theme_mod( "c2x_facebook"); ?>"><i class="fa fa-facebook"></i></a>
        <?php endif ?>
        <?php if (get_theme_mod("c2x_twitter")): ?>
          <a href="<?php echo get_theme_mod( "c2x_twitter"); ?>"><i class="fa fa-twitter"></i></a>
        <?php endif ?>
        <?php if (get_theme_mod("c2x_instagram")): ?>
          <a href="<?php echo get_theme_mod( "c2x_instagram"); ?>"><i class="fa fa-instagram"></i></a>
        <?php endif ?>
        <?php if (get_theme_mod("c2x_behance")): ?>
          <a href="<?php echo get_theme_mod( "c2x_behance"); ?>"><i class="fa fa-behance"></i></a>
        <?php endif ?>
        <?php if (get_theme_mod("c2x_dribbble")): ?>
          <a href="<?php echo get_theme_mod( "c2x_dribbble"); ?>"><i class="fa fa-dribbble"></i></a>
        <?php endif ?>
        <?php if (get_theme_mod("c2x_github")): ?>
          <a href="<?php echo get_theme_mod( "c2x_github"); ?>"><i class="fa fa-github"></i></a>
        <?php endif ?>
      </div>
      <div class="cpr_text">© 2020 C2X • Created with ❤️ by CodenRx</div>
    </footer>
  </body>
  <?php wp_footer(); ?>
</html>
