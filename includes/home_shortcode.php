<?php





function home_shortcode($atts, $content = null)
{
  $args = array(

    'post_counts' => 10,
    'cat' => '',
    'sidebar' => 'show',
    'sidebar_name' => 'sidebar-1',
    'banner_heading_1' => '',
    'banner_heading_2' => '',
    'download' => '',
    'btn_link' => '',
    'btn_title' => '',




  );

  $atts = shortcode_atts($args, $atts, 'home');
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
                  <?php echo esc_html($banner_heading_1); ?>
                </span>
                <h4>
                  <?php echo esc_html($banner_heading_2); ?>
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



  <div class="blog-posts">
    <div class="container">
      <?php if ($sidebar == 'show') { ?>
        <div class="row">
          <div class="col-lg-8">
          <?php } ?>

          <div class="all-blog-posts">
            <div class="row">
              <?php
              $_args = [
                'posts_count' => 2,
                //'cat' => 10,
                'author_name' => 'admin',
              ];
              // The Query.
              $the_query = new WP_Query($_args);
              if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                  $the_query->the_post();
                  ?>
                  <div class="col-lg-12">
                    <div class="blog-post">
                      <div class="blog-thumb">
                        <?php
                        the_post_thumbnail('standblog-home-post'); ?>
                      </div>
                      <div class="down-content">
                        <span>
                          <?php the_category(', '); ?>
                        </span>
                        <a href="post-details.html">
                          <h4>
                            <?php the_title(); ?>
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
                        <p>
                          <?php the_excerpt(); ?>
                        </p>
                        <div class="post-options">
                          <div class="row">
                            <div class="col-6">
                              <ul class="post-tags">
                                <li><i class="fa fa-tags"></i></li>
                                <li><a href="#">
                                    <?php the_tags('<li>', ', ', '</li>'); ?>
                                  </a></li>
                              </ul>
                            </div>
                            <div class="col-6">
                              <ul class="post-share">
                                <li><i class="fa fa-share-alt"></i></li>
                                <li><a href="#">Facebook</a>,</li>
                                <li><a href="#"> Twitter</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php }
              }
              wp_reset_postdata();
              ?>
            </div>
            <div class="col-lg-12">
          <div class="main-button">
            <a href="<?php echo esc_url($btn_link); ?>"><?php echo esc_html($btn_title); ?></a>
          </div>
        </div>
          </div>
          <?php if ($sidebar == 'show') { ?>
          </div>
        <?php } ?>

        <?php if ($sidebar == 'show') { ?>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <?php dynamic_sidebar($sidebar_name); ?>
              </div>
            </div>
          </div>
        <?php } ?>

        <?php if ($sidebar == 'show') { ?>
        </div>
      <?php } ?>
    </div>
  </div>
  </div>





  <?php

  return ob_get_clean();
}