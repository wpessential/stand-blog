<?php
get_header();

while (have_posts()):
  the_post();

  echo do_shortcode('[big_banner]'); // adding big banner 
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
                    <span>
                      <?php the_category() ?>
                    </span>
                    <h4>
                      <?php the_title() ?>
                    </h4>
                    <ul class="post-info">
                      <li>
                      <?php echo get_the_author_posts_link(); ?>
                      </li>
                      <li><a href="#">
                          <?php echo get_the_date() ?>
                        </a></li>
                      <li> <a href="">
                          <?php echo get_comments_number() ?>Comments
                        </a></li>
                    </ul>
                    <p>
                      <?php the_content() ?>
                    </p>
                    <div class="post-options">
                      <div class="row">
                        <div class="col-6">
                          <ul class="post-tags">
                            <li><i class="fa fa-tags"></i></li>
                            <?php the_tags('<li>', ', ', '</li>') ?>
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