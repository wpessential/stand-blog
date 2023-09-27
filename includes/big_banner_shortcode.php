<?php
function big_banner_shortcode($atts, $content = null)
{
  $user_inputs = array(
    'page_id' => 0,
  );

  $atts = shortcode_atts($user_inputs, $atts, 'big_banner');
  extract($atts); // convert associate array into variable and their value
  ob_start();


  // global $wp_query;
// print_r($wp_query);exit;

  if (!$page_id) {
    $page_id = get_queried_object_id(); // get the id of the post
  }

  if (!$page_id) {
    return;
  }

  $show_banner = get_post_meta($page_id, 'show_banner', true);

  if (!$show_banner) {
    return;
  }

  $big_banner_subtitle = get_post_meta($page_id, 'banner_subtitle', true);
  //print_r($big_banner_subtitle);exit;
  $big_banner_title = get_post_meta($page_id, 'banner_title', true);
  //print_r($big_banner_title);exit;
  $banner_image = get_post_meta($page_id, 'banner_image', true);
  $banner_image = wp_get_attachment_image_url($banner_image, "full");// we are over riding the variable 

  ?>

  <div class="heading-page header-text">
    <section class="page-heading" style="background-image:url(<?php echo $banner_image ?>)">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-content">
              <h4>
                <?php echo esc_html($big_banner_subtitle); ?>
              </h4>
              <h2>
                <?php echo esc_html($big_banner_title); ?>
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