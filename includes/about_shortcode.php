<?php
function firstabout($atts, $content = null)
{
  $args = array(
    'image' => '',
    'para_1' => '',
    'para_2' => '',
    'title_1' => '',
    'desc_1' => '',
    'title_2' => '',
    'desc_2' => '',
    'title_3' => '',
    'desc_3' => '',
    'title_4' => '',
    'desc_4' => '',
    'title_5' => '',
    'desc_5' => '',
    'title_6' => '',
    'desc_6' => '',
    'title_7' => '',
    'desc_7' => '',
    'title_8' => '',
    'desc_8' => '',
    'title_9' => '',
    'desc_9' => '',
    'show_icon' => '',
    'show_fb' => '',
    'fb_link' => '',
    'show_twitter' => '',
    'twitter_link' => '',
    'show_behance' => '',
    'behance_link' => '',
    'show_linkedin' => '',
    'linkedin_link' => '',
    'banner_title' => '',
    'banner_heading' => '',


  );

  $atts = shortcode_atts($args, $atts, 'about'); // args : which are given by us 
  // atts : which are given by users 
  // about: it is tage which is used woth function

  extract($atts); // convert associate array into variable and their value
  ob_start();
  ?>

  <div class="heading-page header-text">
    <section class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-content">
              <h4><?php echo esc_html($banner_title)  ?></h4>
              <h2><?php echo esc_html($banner_heading)  ?></h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>



  <section class="about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <?php if ($image) {
            echo wp_get_attachment_image(60, "'standblog-about-image'");
            // this fucntion is used as <img> in html 
          } ?>
          <p>
            <?php echo esc_html($para_1); ?>
          </p>
          <p>
            <?php echo esc_html($para_2); ?>
          </p>
        </div>
      </div>
      <?php if ($title_1 || $desc_1 || $title_2 || $desc_2) { ?>
        <div class="row">
          <div class="col-lg-6">
            <?php if ($title_1) { ?>
              <h4>
                <?php echo esc_html($title_1) ?>
              </h4>
            <?php } ?>
            <?php if ($desc_1) { ?>
              <p>
                <?php echo esc_html($desc_1); ?>
              </p>
            </div>
          <?php } ?>
          <div class="col-lg-6">
            <?php if ($title_2) { ?>
              <h4>
                <?php echo esc_html($title_2) ?>
              </h4>
            <?php } ?>
            <?php if ($desc_2)
              ; { ?>
              <p>
                <?php echo esc_html($desc_2); ?>
              </p>
            <?php } ?>
          </div>
        </div>
      <?php } ?>

      <?php if ($title_3 || $desc_3 || $title_4 || $desc_4 || $title_5 || $desc_5) { ?>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <?php if ($title_3)
              ; { ?>
              <h4>
                <?php echo esc_html($title_3) ?>
              </h4>
            <?php } ?>
            <?php if ($desc_3)
              ; { ?>
              <p>
                <?php echo esc_html($desc_3); ?>
              </p>
            <?php } ?>

          </div>
          <div class="col-lg-4 col-md-6">
            <?php if ($title_4)
              ; { ?>
              <h4>
                <?php echo esc_html($title_4) ?>
              </h4>
            <?php } ?>
            <?php if ($desc_4)
              ; { ?>
              <p>
                <?php echo esc_html($desc_4); ?>
              </p>
            <?php } ?>
          </div>


          <div class="col-lg-4">
            <?php if ($title_5)
              ; { ?>
              <h4>
                <?php echo esc_html($title_5) ?>
              </h4>
            <?php } ?>
            <?php if ($desc_5)
              ; { ?>
              <p>
                <?php echo esc_html($desc_5); ?>
              </p>
            <?php } ?>
          </div>
        </div>
      <?php } ?>
      <?php if ($title_6 || $desc_6 || $title_7 || $desc_7 || $title_8 || $desc_8 || $title_9 || $desc_9) { ?>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <?php if ($title_6)
              ; { ?>
              <h4>
                <?php echo esc_html($title_6) ?>
              </h4>
            <?php } ?>
            <?php if ($desc_6)
              ; { ?>
              <p>
                <?php echo esc_html($desc_6); ?>
              </p>
            <?php } ?>
          </div>
          <div class="col-lg-3 col-md-6">
            <?php if ($title_7)
              ; { ?>
              <h4>
                <?php echo esc_html($title_7) ?>
              </h4>
            <?php } ?>
            <?php if ($desc_7)
              ; { ?>
              <p>
                <?php echo esc_html($desc_7); ?>
              </p>
            <?php } ?>
          </div>
          <div class="col-lg-3 col-md-6">
            <?php if ($title_8)
              ; { ?>
              <h4>
                <?php echo esc_html($title_8) ?>
              </h4>
            <?php } ?>
            <?php if ($desc_8)
              ; { ?>
              <p>
                <?php echo esc_html($desc_8); ?>
              </p>
            <?php } ?>
          </div>
          <div class="col-lg-3 col-md-6">
            <?php if ($title_9)
              ; { ?>
              <h4>
                <?php echo esc_html($title_9) ?>
              </h4>
            <?php } ?>
            <?php if ($desc_9)
              ; { ?>
              <p>
                <?php echo esc_html($desc_9); ?>
              </p>
            <?php } ?>
          </div>
        </div>
      <?php } ?>

      <?php if ($show_icon == 'true') { ?>
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <?php if ($show_fb == 'true') { ?>
                <li>
                  <a href="<?php echo esc_url($fb_link); ?>">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
              <?php } ?>
              <?php if ($show_twitter == 'true') { ?>
                <li>
                  <a href="<?php echo esc_url($twitter_link); ?>">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
              <?php } ?>
              <?php if ($show_behance == 'true') { ?>
                <li>
                  <a href="<?php echo esc_url($behance_link); ?>">
                    <i class="fa fa-behance"></i>
                  </a>
                </li>
              <?php } ?>
              <?php if ($show_linkedin == 'true') { ?>
                <li>
                  <a href="<?php echo esc_url($linkedin_link); ?>">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      <?php } ?>



    </div>
  </section>


  <?php
  return ob_get_clean();
}