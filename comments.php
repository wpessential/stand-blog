<?php
add_action('init', 'register_shortcode');
function register_shortcode()
{
  include_once(get_template_directory() . '/includes/shortcode-contact.php');
  include_once(get_template_directory() . '/includes/shortcode-child.php');
  add_shortcode('parent-contact', 'my_test_example');
  add_shortcode('child-contact', 'child_shortcode');

}

function my_test_example($atts, $content = null)
{
  $args = array(
    'map_title' => '',
    'map_link' => '',
    'feedback_title' => '',
    'contact_form' => '',
  );

  $atts = shortcode_atts($args, $atts, 'parent-contact');
  extract($atts);
  ob_start();
  ?>

  <section class="container">
    <div class="row pad-bot-1">
      <div class="grid_8">
        <h2>
          <?php echo esc_html($map_title); ?>
        </h2>
        <div class="grid_inside">
          <div class="grid_5">
            <div class="map_wrapper">

              <iframe id="map_canvas" src="<?php echo esc_url($map_link); ?>"></iframe>
            </div>
          </div>
          <?php echo do_shortcode($content); ?>


        </div>
      </div>
      <div class="grid_4">
        <h2>
          <?php echo esc_html($feedback_title); ?>
        </h2>
        <div id="contact-form">
          <?php echo do_shortcode('[contact-form-7 id="' . $contact_form . '"]'); ?>
        </div>

      </div>
    </div>
  </section>


  <?php


  return ob_get_clean();
}