<div class="sidebar-heading">
    <<?php echo apply_filters( 'wpe/comment/title/tag', 'h2' ); ?>
    class="<?php echo apply_filters( 'wpe/comment/title/classes', 'comments-title' ); ?>">
	<?php
	$comments_number = get_comments_number();
	if ( '1' === $comments_number ) {
		/* translators: %s: Post title. */
		printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'wpessential' ), get_the_title() );
	} else {
		printf(
		/* translators: 1: Number of comments, 2: Post title. */
			_nx(
				'%1$s Reply to &ldquo;%2$s&rdquo;',
				'%1$s Comments &ldquo;%2$s&rdquo;',
				$comments_number,
				'comments title',
				'wpessential'
			),
			number_format_i18n( $comments_number ),
			get_the_title()
		);
	}
	?>
</<?php echo apply_filters( 'wpe/comment/title/tag', 'h2' ); ?>>
</div>
