<?php

namespace WPEssential\Theme\StandBlog;

final class Loader
{
	public static function constructor ()
	{
		self::load_files();
		self::start();
		add_action( 'wpe_before_theme_setup', [ __CLASS__, 'init' ], 1000 );
		define( 'WPE_KIRKI', true );

	}

	public static function init ()
	{
		load_theme_textdomain( 'stand-blog', Stand_Blog_T_DIR . 'languages' );
	}

	public static function load_files ()
	{
		require_once Stand_Blog_T_DIR . 'inc/functions.php';
	}

	public static function start ()
	{
		Utility\Enqueue::constructor();
		Utility\RegisterAssets::constructor();
		Utility\Tgm::constructor();
		Utility\kirki::constructor();
		Utility\Images::constructor();
		Utility\Sidebars::constructor();
	}
}
