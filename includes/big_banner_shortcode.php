<?php
function big_banner_shortcode($atts, $content = null)
{
  $user_inputs = array(
    'meta_banner' => 0,
    'banner_title' => '',
    'banner_subtitle' => '',
    'banner_image' => '',
    'banner_show' => 0,
  );

  $atts = shortcode_atts($user_inputs, $atts, 'big_banner');
  extract($atts); // convert associate array into variable and their value
  ob_start();

  // This retrieve the inputs from Meta Box
  switch ($meta_banner) {
    case '1':
      $page_id = get_queried_object_id(); // get the id of the post

      if ($page_id) {
        $banner_show = get_post_meta($page_id, 'show_banner', true);

        $banner_subtitle = get_post_meta($page_id, 'banner_subtitle', true);
        //print_r($big_banner_subtitle);exit;
        $banner_title = get_post_meta($page_id, 'banner_title', true);
        //print_r($big_banner_title);exit;
        $banner_image = get_post_meta($page_id, 'banner_image', true);
      }

      break;
  }

  $banner_image = wp_get_attachment_image_url($banner_image, "full"); // we are over riding the variable 
  // global $wp_query;
// print_r($wp_query);exit;


  if (!$banner_show) {
    return;
  }

  ?>

  <div class="heading-page header-text">
    <section class="page-heading" style="background-image:url(<?php echo $banner_image ?>)">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-content">
              <h4>
                <?php echo esc_html($banner_subtitle); ?>
              </h4>
              <h2>
                <?php echo esc_html($banner_title); ?>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


  <?php
  return ob_get_clean();
}