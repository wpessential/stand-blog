<?php
function small_banner_shortcode($atts, $content = null)
{
  $args = array(

    'banner_title' => '',
    'banner_heading' => '',
    'download' => '',
  );

  $atts = shortcode_atts($args, $atts, 'small_banner');
  extract($atts); // convert associate array into variable and their value
  ob_start();

  ?>

  <section class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-content">
            <div class="row">
              <div class="col-lg-8">
                <span>
                  <?php echo esc_html($banner_title); ?>
                </span>
                <h4>
                  <?php echo esc_html($banner_heading); ?>
                </h4>
              </div>

              <div class="col-lg-4">
                <div class="main-button">
                  <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">
                    <?php echo esc_html($download); ?>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <?php   
  return ob_get_clean();
}
