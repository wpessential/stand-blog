<div class="blog-post">
	<?php do_action( 'wpe_post_format', get_post_format(), 'stand_blog_350x322' ); ?>
    <div class="down-content">
        <span><?php the_category( ', ' ); ?></span>
        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
        <ul class="post-info">
            <li><?php the_author_link(); ?></li>
            <li>
                <a href="<?php echo esc_url( get_day_link( '', '', '' ) ); ?>"><?php echo get_the_date(); ?></a>
            </li>
            <li>
                <a href="<?php echo esc_url( get_comments_link() ); ?>">
					<?php
					echo get_comments_number_text(
						esc_html__( 'No Comment', 'stand-blog' ),
						esc_html__( '01', 'stand-blog' )
					)
					?>
                </a>
            </li>
        </ul>
		<?php the_excerpt(); ?>
        <div class="post-options">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="post-tags">
                        <li><i class="fa fa-tags"></i></li>
						<?php echo str_replace( [ '<a', '</a>' ], [ '<li><a', '</a></li>' ], get_the_tag_list( '', ', ' ) ); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>