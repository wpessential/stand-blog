<?php
new \Kirki\Field\Date(
	[
		'settings'    => 'date_setting',
		'label'       => esc_html__( 'Date Control', 'standblog' ),
		'description' => esc_html__( 'This is a date control.', 'standblog' ),
		'section'     => 'section_1',
		'default'     => '2019-01-30',
	]
);