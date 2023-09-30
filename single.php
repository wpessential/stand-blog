<?php
get_header();

while (have_posts()):
  the_post();

  echo do_shortcode('[big_banner meta_banner="1"]'); // adding big banner 
  ?>

  <section class="blog-posts grid-system">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="all-blog-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="blog-post">
                  <div class="blog-thumb">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="down-content">
                    <?php if (true == get_theme_mod('blog_detail_category_setting')) { ?>
                      <span>
                        <?php
                        the_category();
                        ?>
                      </span>
                    <?php } ?>
                    <h4>
                      <?php the_title() ?>
                    </h4>
                    <ul class="post-info">
                      <?php if (true == get_theme_mod('blog_detail_author_setting')) { ?>

                        <li>
                          <?php echo get_the_author_posts_link(); ?>
                        </li>
                      <?php } ?>
                      <?php if (true == get_theme_mod('blog_detail_post_date_setting')) { ?>
                        <li><a href="#">
                            <?php echo get_the_date() ?>
                          </a></li>
                      <?php } ?>
                      <?php if (true == get_theme_mod('blog_detail_post_comments_setting')) { ?>
                        <li> <a href="">
                            <?php echo get_comments_number() ?>Comments
                          </a></li>
                      <?php } ?>
                    </ul>
                    <p>
                      <?php the_content() ?>
                    </p>
                    <div class="post-options">
                      <div class="row">
                        <div class="col-6">
                          <ul class="post-tags">
                            <?php if (true == get_theme_mod('blog_detail_tags_setting')) { ?>
                              <li><i class="fa fa-tags"></i></li>
                              <?php the_tags('<li>', ', ', '</li>') ?>
                            <?php } ?>
                          </ul>
                        </div>
                        <div class="col-6">
                          <ul class="post-share">
                            <?php if (true == get_theme_mod('blog_detail_social_media_share_setting')) { ?>
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            <?php } ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <?php comments_template(); // includes comments.php?>
              </div>
            </div>
          </div>
        </div>
        <?php if (is_active_sidebar('sidebar-1')): ?>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <?php dynamic_sidebar('sidebar-1'); ?>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php

endwhile;
get_footer();