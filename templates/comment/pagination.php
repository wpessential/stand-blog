<?php
the_comments_pagination(
	[
		'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'wpessential' ) . '</span>',
		'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'wpessential' ) . '</span>'
	]
);
