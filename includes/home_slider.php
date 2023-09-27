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
        <div class="owl-banner owl-carousel">


          <?php while ($the_query->have_posts()) {
            $the_query->the_post();
            ?>
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
                    <li>
                      <?php echo get_the_author_posts_link(); ?>
                    </li>
                    <li>
                      <a href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d')); ?>">
                        <?php echo get_the_date(); ?>
                      </a>
                    </li>
                    <li><a href="#">
                        <?php echo get_comments_number(); ?> Comments
                      </a></li>
                  </ul>
                </div>
              </div>
            </div>
          <?php }
          wp_reset_postdata(); // whenever we use custom loop
          ?>

        </div>

      </div>

    </div>





    <?php



  }








  return ob_get_clean();
}