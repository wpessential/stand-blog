<?php

namespace WPEssential\Theme\StandBlog\Utility;
final class Kirki
{
	public static function constructor ()
	{
		add_filter( 'wpe/kirki/register/panels', [ __CLASS__, 'panels' ] );
		add_filter( 'wpe/kirki/register/sections', [ __CLASS__, 'sections' ] );
		add_filter( 'wpe/kirki/register/controls', [ __CLASS__, 'controls' ] );
	}

	public static function panels ( $list )
	{
		return [ '' ];
	}

	public static function sections ( $list )
	{
		return [ 'footer-section' ];
	}

	public static function controls ( $list )
	{
		return [ 'footer-controls' ];
	}
}

