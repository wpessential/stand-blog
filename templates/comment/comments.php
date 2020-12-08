<?php
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */

if ( post_password_required() ) {
	return;
}
wp_enqueue_script( 'comment-reply' );
do_action( 'wpe_before_comment_section' );
?>
<div id="comments" class="<?php echo apply_filters( 'wpe/comment/area/classes', 'comments-area' ); ?>">
    <div class="row">
        <div class="col-lg-12">
            <div class="sidebar-item comments">
				<?php if ( have_comments() ) : ?>
					<?php do_action( 'wpe_comment_title' ); ?>
                    <div class="content">
						<?php do_action( 'wpe_comment_list' ); ?>
                    </div>
				<?php endif; ?>
				<?php do_action( 'wpe_comments_close' ); ?>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="sidebar-item submit-comment">
				<?php do_action( 'wpe_comment_form' ); ?>
            </div>
        </div>
    </div>
</div>
<?php do_action( 'wpe_after_comment_section' ); ?>
