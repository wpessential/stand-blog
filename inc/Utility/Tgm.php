<?php

namespace WPEssential\Theme\StandBlog\Utility;
final class Tgm
{
	public static function constructor ()
	{
		add_filter( 'wpe/register/plugins', [ __CLASS__, 'register' ] );
	}

	public static function register ( $list )
	{
		return [
			'wpessential' => [
				'name' => 'WPEssential', // The plugin name.
				'slug' => 'wpessential', // The plugin slug (typically the folder name).
			],
			'kirki'       => [
				'name' => 'Kirki', // The plugin name.
				'slug' => 'kirki', // The plugin slug (typically the folder name).
			],
			'meta-box'    => [
				'name' => 'Meta Box', // The plugin name.
				'slug' => 'Meta Box', // The plugin slug (typically the folder name).
			],
		];
	}
}

