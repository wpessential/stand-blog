<?php
function contact_us($atts, $content = null)
{
  $user_inputs = array(

    'big_banner_title' => '',
    'big_banner_heading' => '',



  );
  $atts = shortcode_atts($user_inputs, $atts, 'big_banner');
  extract($atts); // convert associate array into variable and their value
  ob_start();






  ?>

<div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>
                  <?php echo esc_html($big_banner_title); ?>
                </h4>
                <h2>
                  <?php echo esc_html($big_banner_heading); ?>
                </h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>