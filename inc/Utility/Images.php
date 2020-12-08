<?php

namespace WPEssential\Theme\StandBlog\Utility;
final class Images
{
	public static function constructor ()
	{
		add_filter( 'wpe/register/images/size', [ __CLASS__, 'register' ], 1000 );
	}

	public static function register ( $list )
	{
		return wp_parse_args(
			[
				'350x322' => [
					'name'  => 'stand_blog_350x322',
					'size'  => [
						'w' => 350,
						'h' => 322
					],
					'croup' => true
				],
				'1110x490' => [
					'name'  => 'stand_blog_1110x490',
					'size'  => [
						'w' => 1110,
						'h' => 490
					],
					'croup' => true
				]
			],
			$list
		);
	}
}

