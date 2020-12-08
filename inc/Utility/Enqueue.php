<?php

namespace WPEssential\Theme\StandBlog\Utility;
final class Enqueue
{
	public static function constructor ()
	{
		add_filter( 'wpe/frontend/css', [ __CLASS__, 'enqueue_css' ], 1000 );
		add_filter( 'wpe/frontend/js', [ __CLASS__, 'enqueue_js' ], 1000 );
		add_filter( 'wpe/localization', [ __CLASS__, 'localization' ], 1000 );
	}

	public static function enqueue_js ( $list )
	{
		return wp_parse_args(
			[
				'bootstrap',
				'owl-carousel',
				'slick',
				'isotope',
				'accordions',
				'standblog-script',
			],
			$list
		);

	}

	public static function enqueue_css ( $list )
	{
		$style_list = [
			'bootstrap',
			'standblog-style',
			'standblog-respnosive',
			'standblog-color'
		];
		if ( is_rtl() ) {
			$style_list[ 'standblog-theme-rtl-style' ];
		}
		return wp_parse_args( $style_list, $list );
	}

	public static function localization ( $localization )
	{
		return wp_parse_args(
			[
				'stand_blog' => Stand_Blog_T_DIR
			],
			$localization
		);
	}
}

