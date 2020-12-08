<?php
do_action( 'wpe_setup_theme' );
// Add Shortcode
//function img_shortcode ( $atts, $content = null )
//{
//
//	// Attributes
//	extract( shortcode_atts(
//		[
//			'width'  => '500',
//			'height' => '500',
//		],
//		$atts
//	) );
//
//	// Return image HTML code
//	return '<img src="http://localhost/shadab_org/wp-content/themes/stand-blog/assets/images/girl.jpg' . $content . '" width="' . $width . '" height="' . $height . '">';
//
//}
//
//add_shortcode( 'shortcode_image', 'img_shortcode' );
add_shortcode( 'img', 'img_shortcode' );
function img_shortcode ( $atts )
{
	extract( $atts );
	if ( ! $id ) {
		return;
	}

	return wp_get_attachment_image(
		$id,
		$size = [
			$width,
			$height,

		] );
}

