<?php

new \Kirki\Field\Checkbox_Switch(
	[
		'settings' => 'category_banner_display_setting', // saves values in the database ,serves as ID
		'label' => esc_html__('Banner Show', 'standblog'),
		'description' => esc_html__('Switch On and OFF  to show and hide the banner', 'standblog'),
		'section' => 'category_section', // id of the section in whicg u want to include this control
		'default' => 'on',
		'choices' => [

			0 => esc_html__('hide', 'standblog'),
			1 => esc_html__('show', 'standblog'),
		],

	]
);


new \Kirki\Field\Image(
	[
		'settings' => 'category_background_setting', // saves values in the database ,serves as ID
		'label' => esc_html__('Banner Background', 'standblog'),
		'description' => esc_html__('Select the background image from Media ', 'standblog'),
		'section' => 'category_section',// id of the section in whicg u want to include this control
		'choices' => [
			'save_as' => 'id',
		],
		// Serves as condition if true then proceed same as if(){ ....}
		'active_callback' => [
			[
				'setting' => 'category_banner_display_setting',
				// uss contol ki id jis sa app present control (Background ki id 'background_setting ' ko relate karna chahta hain)
				'operator' => '==',
				'value' => 1, // jis value par ap iss conrrol ko link karna chahta hain
			]
		],
	]
);


new \Kirki\Field\Text(
	[
		'settings' => 'category_title_setting', // saves values in the database ,serves as ID
		'label' => esc_html__('Banner Title', 'standblog'),
		'description' => esc_html__('Enter your banner Title here', 'standblog'),
		'section' => 'category_section', // id of the section in whicg u want to include this control
		'default' => esc_html__('This is a banner Title text field', 'standblog'),
		'priority' => 10,
		'active_callback' => [ // Serves as condition if true then proceed same as if(){ ....}
			[
				'setting' => 'category_banner_display_setting', //  jis cntrol sa link karna chahta hain uss ki id
				'operator' => '==',
				'value' => 1, // jis value par ap iss conrrol ko link karna chahta hain
			]
		],

	]

);

new \Kirki\Field\Text(
	[
		'settings' => 'category_subtitle_setting', // saves values in the database ,serves as ID
		'label' => esc_html__('Banner Subtitle', 'standblog'),
		'description' => esc_html__('Enter your banner subtitle here', 'standblog'),
		'section' => 'category_section', // id of the section in whicg u want to include this control
		'default' => esc_html__('This is a subtitle text field', 'standblog'),
		'priority' => 10,
		'active_callback' => [ // Serves as condition if true then proceed same as if(){ ....}
			[
				'setting' => 'category_banner_display_setting',
				//  jis cntrol sa link karna chahta hain uss ki id
				'operator' => '==',
				'value' => 1,
				// jis value par ap iss conrrol ko link karna chahta hain
			]
		],
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings' => 'category_category_setting', // saves values in the database ,serves as ID
		'label' => esc_html__('Category', 'standblog'),
		'description' => esc_html__('Switch On and OFF  to show and hide the Category of post', 'standblog'),
		'section' => 'category_section', // id of the section in whicg u want to include this control
		'default' => 'on',
		'choices' => [

			0 => esc_html__('hide', 'standblog'),
			1 => esc_html__('show', 'standblog'),
		],

	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings' => 'category_author_setting', // saves values in the database ,serves as ID
		'label' => esc_html__('Show Author', 'standblog'),
		'description' => esc_html__('Switch On and OFF  to show and hide the Author', 'standblog'),
		'section' => 'category_section', // id of the section in whicg u want to include this control
		'default' => 'on',
		'choices' => [

			0 => esc_html__('hide', 'standblog'),
			1 => esc_html__('show', 'standblog'),
		],

	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings' => 'category_post_date_setting', // saves values in the database ,serves as ID
		'label' => esc_html__('Show Date', 'standblog'),
		'description' => esc_html__('Switch On and OFF  to show and hide the Date', 'standblog'),
		'section' => 'category_section', // id of the section in whicg u want to include this control
		'default' => 'on',
		'choices' => [

			0 => esc_html__('hide', 'standblog'),
			1 => esc_html__('show', 'standblog'),
		],

	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings' => 'category_post_comments_setting', // saves values in the database ,serves as ID
		'label' => esc_html__('Show Comments Number', 'standblog'),
		'description' => esc_html__('Switch On and OFF  to show and hide Comments Number on post ', 'standblog'),
		'section' => 'category_section', // id of the section in whicg u want to include this control
		'default' => 'on',
		'choices' => [

			0 => esc_html__('hide', 'standblog'),
			1 => esc_html__('show', 'standblog'),
		],

	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings' => 'category_tags_setting', // saves values in the database ,serves as ID
		'label' => esc_html__('Show Tags', 'standblog'),
		'description' => esc_html__('Switch On and OFF  to show and hide Tags of post ', 'standblog'),
		'section' => 'category_section', // id of the section in whicg u want to include this control
		'default' => 'on',
		'choices' => [

			0 => esc_html__('hide', 'standblog'),
			1 => esc_html__('show', 'standblog'),
		],

	]
);