<?php

namespace WPEssential\Theme\StandBlog\Utility;

final class RegisterAssets
{
	public static string $minify;

	public static function constructor ()
	{
		self::$minify = \WPEssential\Plugins\Utility\RegisterAssets::minify_check();
		add_filter( 'wpe/register/js', [ __CLASS__, 'register_script' ], 10000 );
		add_filter( 'wpe/register/css', [ __CLASS__, 'register_style' ], 10000 );
	}

	public static function register_script ( $list )
	{
		$minify      = self::$minify;
		$script_list = [
			'bootstrap'        => Stand_Blog_T_URI . "assets/js/bootstrap.bundle{$minify}js",
			'owl-carousel'     => Stand_Blog_T_URI . "assets/js/owl-carousel{$minify}js",
			'slick'            => Stand_Blog_T_URI . "assets/js/slick{$minify}js",
			'isotope'          => Stand_Blog_T_URI . "assets/js/isotope{$minify}js",
			'accordions'       => Stand_Blog_T_URI . "assets/js/accordions{$minify}js",
			'standblog-script' => Stand_Blog_T_URI . "assets/js/script{$minify}js"
		];
		return wp_parse_args( $script_list, $list );
	}

	public static function register_style ( $list )
	{
		$minify     = self::$minify;
		$style_list = [
			'bootstrap'            => Stand_Blog_T_URI . "assets/css/bootstrap{$minify}css",
			'standblog-style'      => Stand_Blog_T_URI . "style{$minify}css",
			'standblog-color'      => Stand_Blog_T_URI . "assets/css/color{$minify}css",
			'standblog-responsive' => Stand_Blog_T_URI . "assets/css/responsive{$minify}css"
		];
		if ( is_rtl() ) {
			$style_list[ 'standblog_theme_rtl_style' ] = Stand_Blog_T_DIR . "rtl-style{$minify}css";
		}
		return wp_parse_args( $style_list, $list );
	}

}
