<?php
function blog_entries($atts, $content = null)
{
  $user_inputs = array(

    'post_counts' => '',
    'author_name' => '',
    'big_banner_title' => '',
    'big_banner_heading' => '',
    'small_banner_title' => '',
    'small_banner_heading' => '',
    'download_btn' => '',
    'sidebar_id'=>'',




  );
  $atts = shortcode_atts($user_inputs, $atts, 'blogs');
  extract($atts); // convert associate array into variable and their value
  ob_start();

  $_args = [
    // 'posts_count' => $post_counts,
    //'cat' => 10,
    'author_name' => $author_name,
  ];
  // The Query.
  $the_query = new WP_Query($_args);
  if ($the_query->have_posts()) {



    ?>
  



    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>
                    <?php echo esc_html($small_banner_title); ?>
                  </span>
                  <h4>
                    <?php echo esc_html($small_banner_heading); ?>
                  </h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a href="https://templatemo.com/tm-551-stand-blog" target="_parent">
                      <?php echo esc_html($download_btn); ?>
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
} ?>