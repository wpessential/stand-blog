<?php
/**
 * First, let's set the maximum content width based on the theme's
 * design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if (!isset($content_width)) {
	$content_width = 800; /* pixels */
}

if (!function_exists('myfirsttheme_setup')):
	/**
	 * Sets up theme defaults and registers support for various
	 * WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme
	 * hook, which runs before the init hook. The init hook is too late
	 * for some features, such as indicating support post thumbnails.
	 */
	function myfirsttheme_setup()
	{
		add_theme_support('post-thumbnails');
		add_theme_support('title-tag');
		add_theme_support('responsive-embeds');
		add_theme_support('editor-styles');
		add_theme_support('html5', array('style', 'script'));
		add_theme_support('automatic-feed-links');
		/**
		 * Make theme available for translation.
		 * Translations can be placed in the /languages/ directory.
		 */
		load_theme_textdomain('myfirsttheme', get_template_directory() . '/languages');

		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support('automatic-feed-links');

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support('post-thumbnails');
		add_theme_support("widgets");
		remove_theme_support('widgets-block-editor');

		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus(
			array(
				'primary' => __('Primary Menu', 'myfirsttheme'),
				'secondary' => __('Secondary Menu', 'myfirsttheme'),
			));

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
	}
endif; // myfirsttheme_setup
add_action('after_setup_theme', 'myfirsttheme_setup');
// add_action('init', 'myfirsttheme_setup');




//  registering and enqueing new files





if (!function_exists('enqueue_files')) {
	function enqueue_files()
	{
		// Register the CSS file
		wp_register_style('flex-slider-style', get_template_directory_uri() . '/assets/css/flexs-lider.css', array(), '1.0');
		wp_register_style('fontawesome-style', get_template_directory_uri() . '/assets/css/fontawesome.css', array(), '1.0');
		wp_register_style('owl-style', get_template_directory_uri() . '/assets/css/owl.css', array(), '1.0');
		wp_register_style('templatemo-stand-blog-style', get_template_directory_uri() . '/assets/css/templatemo-stand-blog.css', array(), '1.0');


		wp_register_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0');

		// Enqueue the CSS file



		wp_enqueue_style('bootstrap');


		// wp_enqueue_style('flex-slider-style');
		wp_enqueue_style('fontawesome-style');
		wp_enqueue_style('templatemo-stand-blog-style');
		wp_enqueue_style('owl-style');
		// ===================================================

		// Register the JavaScript file
		wp_register_script('accordions-script', get_template_directory_uri() . '/assets/js/accordions.js', array(), '1.0', true);
		wp_register_script('custom-script', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0', true);
		wp_register_script('isotope-script', get_template_directory_uri() . '/assets/js/isotope.js', array(), '1.0', true);
		wp_register_script('owl-script', get_template_directory_uri() . '/assets/js/owl.js', array(), '1.0', true);
		wp_register_script('slick-script', get_template_directory_uri() . '/assets/js/slick.js', array(), '1.0', true);
		wp_register_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0', true);


		// Enqueue the JavaScript file
		wp_enqueue_script('jquery');

		wp_enqueue_script('bootstrap');
		wp_enqueue_script('custom-script');
		wp_enqueue_script('owl-script');
		wp_enqueue_script('slick-script');
		wp_enqueue_script('isotope-script');
		wp_enqueue_script('accordions-script');
		// =====================================================
	}
}
add_action('wp_enqueue_scripts', 'enqueue_files');


function standblog_sidebars()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar 1', 'standblog'),
			'id' => 'sidebar-1', // on the basis of id we are going to use this sidebar
			'description' => esc_html__('This is sidebar.', 'standblog'),
			'before_widget' => '<div class="col-lg-12"><div id="%1$s" class="%2$s sidebar-item">',
			'after_widget' => '</div></div>',
			'before_title' => '<div class="sidebar-heading"><h2>',
			'after_title' => '</h2></div>',
		)
	);
}
add_action('widgets_init', 'standblog_sidebars');


/* Register shortcode for contact page 


*/


// 
add_action('init', 'register_shortcode');// register the code using this hook
function register_shortcode(){ // cstom function to registers short code which is being included in this function below 
  include_once(get_template_directory().'\includes\about_shortcode.php');  // this will include the code from about_shortcode

  
  include_once(get_template_directory().'\includes\home_slider.php');
  include_once(get_template_directory().'\includes\home_shortcode.php');
  include_once(get_template_directory().'\includes\contact_shortcode.php');

  add_shortcode('about', 'firstabout');// this adds  the short code in function first_about and it has the tag about
  add_shortcode('slider', 'home_slider'); 
  add_shortcode('home', 'home_shortcode');
  add_shortcode('contact','contact_us');

 
}