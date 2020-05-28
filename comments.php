<?php
if (post_password_required()) {
  return;
}
?>
<section class="comments-section">
  <h4 class="comments-title">Comments</h4>
  <div class="comment-lists">
    <?php if (have_comments()) { ?>
      <?php
      $comments = get_comments(array(
        'post_id'   => get_the_ID(),
        'status'    => 'approve',
        'order'     => 'DESC',
        'parent'    => 0,
      ));
      ?>
      <?php foreach ($comments as $comment) : ?>
        <div id="comment-<?php echo $comment->comment_ID; ?>" <?php comment_class("comment-item"); ?>>
          <div class="comment-meta">
            <div class="name"><?php comment_author(); ?></div>
            <div class="comment-action">
              <div class="date"><?php comment_date(); ?></div>
              <a class="reply_form" data-comment-id="<?php echo $comment->comment_ID; ?>" href="javascript:void(0);">Reply</a>
            </div>
          </div>
          <div class="comment-content">
            <?php comment_text(); ?>
          </div>
          <?php
          $sub_comments = get_comments(array(
            'post_id'   => get_the_ID(),
            'status'    => 'approve',
            'order'     => 'ASC',
            'parent'    => $comment->comment_ID,
          ));
          ?>
          <?php foreach ($sub_comments as $subcomment) : ?>
            <div id="comment-<?php echo $subcomment->comment_ID; ?>" <?php comment_class("comment-item sub-comment"); ?>>
              <div class="comment-meta">
                <div class="name"><?php comment_author($subcomment->comment_ID); ?></div>
                <div class="comment-action">
                  <div class="date"><?php comment_date(false, $subcomment->comment_ID); ?></div>
                </div>
              </div>
              <div class="comment-content">
                <?php comment_text($subcomment->comment_ID); ?>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      <?php endforeach ?>
      <?php the_comments_pagination(); ?>
    <?php } ?>
    <div class="comment-form" id="main-comment-section">
      <?php
      comment_form([
        'comment_field' => '<textarea cols="40" rows="10" name="comment" placeholder="Your Message *"></textarea><br />',
        'fields' => [
          'author' => '<input type="text" name="author" placeholder="Your Name *" /> <br />',
          'email' => '<input type="email" name="email" placeholder="Your Email *" /><br />',
          'url' => '<input type="text" name="url" placeholder="Your Website *" /><br />'
        ],
        'class_submit' => 'submit-btn',
        'label_submit' => __('Submit Comment', 'c2x'),
        'title_reply' => __('<h4>LEAVE A REPLY</h4>', 'c2x'),
        // 'title_reply_after' => __( '<a class="title_reply" href="">close</a>', 'c2x' ),
      ]);
      ?>
    </div>
  </div>
</section>