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
			)
		);

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));


		//     =================================================================

		//  registering images sizes for use
		add_image_size('standblog-blog-post', 370, 340, true); // we used it in function the_post_thumbnail(blog-post)
		add_image_size('standblog-slider', 520, 450, true);
		add_image_size('standblog-home-post', 770, 340, true);
		add_image_size('standblog-about-image', 1170, 550, true);
		add_image_size('standblog-post-details', 770, 340, true);
		add_image_size('standblog-comment-pics', 100, 100, true);


		///////////////////////////////////////////////////////////

		////     //// ///// /////// /////     //////    ////  ///     ///                                                    
		// //  //  // //      //   //   //    //   // //   //   //  //                                          
		//   //    // /////   //   ///////    //////  //   //     //                                          
		//         // //      //   //   //    //   // //   //   //  //                                           
		//         // /////   //   //   //    //////   ////   ///     ///                                  

		// These lines of code add actions to WordPress. Actions are events that trigger specific functions.
		add_action('add_meta_boxes', 'create_metabox', 10, 2);

		// This is the beginning of a function called "my_metabox," which creates a custom meta box.
		function create_metabox($post_type, $post)
		{

			// These lines define an array of screen names where the meta box should appear (posts and pages).
			$screens_name = ['post', 'page'];

			// This line converts the $post variable into an array.
			$args = (array) $post;

			// This line adds a custom meta box to the specified screens with a title and callback function.
			add_meta_box('my_test_meta_box', __('Metabox for Banner', 'register-metabox'), 'my_metabox_callback', $screens_name, 'advanced', 'high', $args);



		}
		///////////////////////////////////////////////////////////////////////////////////////


		add_action('save_post', 'save_my_metabox', 10, 1);
		// This is the beginning of a function called "save_my_metabox," which handles saving data from the meta box.
		function save_my_metabox($post_id)
		{
			// Check if our nonce is set (a security token).
			if (!isset($_POST['register_metabox_nonce_verification_nonce'])) {
				return $post_id;
			}

			// Retrieve the nonce from the form.
			$nonce = $_POST['register_metabox_nonce_verification_nonce'];

			// Verify that the nonce is valid for security.
			if (!wp_verify_nonce($nonce, 'register_metabox_nonce_verification')) {
				return $post_id;
			}

			// Check if the WordPress system is doing an autosave, and if so, do nothing.
			if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
				return $post_id;
			}


			$show = $_POST['banner_show'] ?? '';
			// Update the post's metadata with the "banner_title" value.
			update_post_meta($post_id, 'banner_show', $show);

			// Get the value from the "banner_title" field in the form or provide an empty string if not set.
			$title = $_POST['banner_title'] ?? '';
			// Update the post's metadata with the "banner_title" value.
			update_post_meta($post_id, 'banner_title', $title);

			// Get the value from the "banner_subtitle" field in the form or provide an empty string if not set.
			$subtitle = $_POST['banner_subtitle'] ?? '';
			// Update the post's metadata with the "banner_subtitle" value.
			update_post_meta($post_id, 'banner_subtitle', $subtitle);

			$image = $_POST['banner_image'] ?? '';
			// Update the post's metadata with the "banner_image" value.
			update_post_meta($post_id, 'banner_image', $image);
		}

		////////////////////////////////////////////////////////////////////////////////////////////////////

		// This is the beginning of a function called "my_metabox_callback," which displays the content of the meta box.
		function my_metabox_callback($args)
		{
			// Add a security nonce field to the form.we will set ut here first and then we used it above
			wp_nonce_field('register_metabox_nonce_verification', 'register_metabox_nonce_verification_nonce');

			$show = get_post_meta($args->ID, 'banner_show', true);
			// Get the current value of the "banner_title" meta field.
			$banner_title = get_post_meta($args->ID, 'banner_title', true);
			// Get the current value of the "banner_subtitle" meta field.
			$banner_subtitle = get_post_meta($args->ID, 'banner_subtitle', true);
			// Get the current value of the "banner_image" meta field.
			$image = get_post_meta($args->ID, 'banner_image', true);
			?>

			<label for="show_banner" style="width:150px; display:inline-block;">Show Banner</label>
			<input type="checkbox" name="show_banner" id="Show_banner" >
			<br>
			<br>
			
			<!-- Display an input field for "banner_title" with a label. -->
			<label for="banner_title" style="width:150px; display:inline-block;">
				<?php echo esc_html__('Banner Title', 'register-metabox'); ?>
			</label>
			<input type="text" name="banner_title" id="banner_title" class="banner_title"
				value="<?php echo esc_attr($banner_title); ?>" style="width:300px;" />
			<br>
			<br>

			<!-- Display an input field for "banner_subtitle" with a label. -->
			<label for="banner_subtitle" style="width:150px; display:inline-block;">
				<?php echo esc_html__('Banner Subtitle', 'register-metabox'); ?>
			</label>l
			<input type="text" name="banner_subtitle" id="banner_subtitle" class="banner_subtitle"
				value="<?php echo esc_attr($banner_subtitle); ?>" style="width:300px;" />
			<br>
			<br>

			<label for="banner_image" style="width:150px; display:inline-block;">
			<?php echo esc_html__('Banner Image', 'register-metabox'); ?>
			</label>
			<input type="text" name="baner_image" id="banner_image" 
			value="<?php echo esc_attr($image); ?>" style="width:300px;" />


			<?php
		}



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
			'id' => 'sidebar-1',
			// on the basis of id we are going to use this sidebar
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
add_action('init', 'register_shortcode'); // register the code using this hook
function register_shortcode()
{ // cstom function to registers short code which is being included in this function below 
	include_once(get_template_directory() . '\includes\about_shortcode.php'); // this will include the code from about_shortcode


	include_once(get_template_directory() . '\includes\home_slider.php');
	include_once(get_template_directory() . '\includes\home_shortcode.php');
	include_once(get_template_directory() . '\includes\big_banner_shortcode.php');
	include_once(get_template_directory() . '\includes\contact_shortcode.php');
	include_once(get_template_directory() . '\includes\blog_entries_shortcode.php');
	include_once(get_template_directory() . '\includes\small_banner_shortcode.php');






	add_shortcode('about', 'firstabout'); // this adds  the short code in function first_about and it has the tag about
	add_shortcode('slider', 'home_slider');
	add_shortcode('home', 'home_shortcode');
	add_shortcode('big_banner', 'big_banner_shortcode');
	add_shortcode('contact', 'contact_us');
	add_shortcode('blogs', 'blog_entries');
	add_shortcode('small_banner', 'small_banner_shortcode');



}