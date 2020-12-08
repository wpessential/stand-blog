<?php

namespace WPEssential\Theme\StandBlog\Utility;

final class Sidebars
{
	public static function constructor ()
	{
		add_filter( 'wpe/register/sidebars', [ __CLASS__, 'register' ], 1000 );
	}

	public static function register ( $list )
	{
		$list[ 'main-sidebar' ][ 'before_widget' ] = '<div class="col-lg-12"><div id="%1$s" class="wpe-widget widget sidebar-item %2$s">';
		$list[ 'main-sidebar' ][ 'after_widget' ]  = '</div></div>';
		return $list;
	}
}

