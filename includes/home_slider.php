<?php
function home_slider($atts, $content = null)
{
  $user_inputs = array(

    'post_counts' => '',
    'author_name' => '',


  );
  $atts = shortcode_atts($user_inputs, $atts, 'slider');
  extract($atts); // convert associate array into variable and their value
  ob_start();

  $_args = [
    'posts_count' => $post_counts,
    //'cat' => 10,
    'author_name' => $author_name,
  ];
  // The Query.
  $the_query = new WP_Query($_args);
  if ($the_query->have_posts()) {
    ?>

    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel owl-loaded owl-drag">
          <div class="owl-stage-outer">
            <div class="owl-stage"
              style="transform: translate3d(-5537px, 0px, 0px); transition: all 0s ease 0s; width: 9492px;">
              <?php while ($the_query->have_posts()) {
                $the_query->the_post();
                ?>
                <div class="owl-item" style="width: 781px; margin-right: 10px;">

                  <div class="item">
                    <?php the_post_thumbnail('standblog-slider') ?>
                    <div class="item-content">
                      <div class="main-content">
                        <div class="meta-category">
                          <span>
                            <?php the_category(', '); ?>
                          </span>
                        </div>
                        <a href="post-details.html">
                          <h4>
                            <?php the_title() ?>
                          </h4>
                        </a>
                        <ul class="post-info">
                          <li><a href="#">
                              <?php echo get_the_author_link(); ?>
                            </a></li>
                          <li><a href="#">
                              <?php echo get_the_date(); ?>
                            </a></li>
                          <li><a href="#">
                              <?php echo get_comments_number(); ?> Comments
                            </a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>


          <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span
                aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span
                aria-label="Next">›</span></button></div>
          <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button"
              class="owl-dot"><span></span></button></div>
        </div>
      </div>
    </div>


    <?php



  }








  return ob_get_clean();
}
