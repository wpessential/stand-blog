<?php
get_header();

add_filter( 'wpe/before/loop/classes', function ( $list )
{
	return "{$list} row";
} );
add_filter( 'wpe/before/loop/post/classes', function ( $list )
{
	return "{$list} col-lg-12";
} );
?>
    <section class="blog-posts grid-system">
        <div class="container">
			<?php do_action( 'wpe_before_loop' ); ?>
            <div class="col-lg-8">
                <div class="all-blog-posts">
					<?php
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							do_action( 'wpe_detail_loop' );
						}
					}
					?>
					<?php comments_template(); ?>
                </div>
            </div>
            <div class="col-lg-4">
				<?php do_action( 'wpe_default_sidebar' ); ?>
            </div>
			<?php do_action( 'wpe_after_loop' ); ?>
        </div>
    </section>
<?php ?>
<?php
do_action( 'wpe_default_sidebar' );
get_footer();
