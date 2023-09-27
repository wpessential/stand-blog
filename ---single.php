<?php
get_header();

while (have_posts()):
  the_post();
  ?>

  <div class="heading-page header-text">
    <section class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-content">
              <h4>Post Details</h4>
              <h2>Single blog post</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Banner Ends Here -->

  <section class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-content">
            <div class="row">
              <div class="col-lg-8">
                <span>Stand Blog HTML5 Template</span>
                <h4>Creative HTML Template For Bloggers!</h4>
              </div>
              <div class="col-lg-4">
                <div class="main-button">
                  <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="blog-posts grid-system">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="all-blog-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="blog-post">
                  <div class="blog-thumb">
                    <?php the_post_thumbnail('standblog-post-details'); ?>
                  </div>
                  <div class="down-content">
                    <span>
                      <?php the_category(', '); ?>
                    </span>
                    <h4>
                      <?php the_title(); ?>
                    </h4>
                    <ul class="post-info">
                      <li>
                        <?php echo get_the_author_link(); ?>
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
                    <?php the_content(); ?>
                    <div class="post-options">
                      <div class="row">
                        <div class="col-6">
                          <ul class="post-tags">
                            <li><i class="fa fa-tags"></i></li>
                            <?php the_tags('<li>', ', ', '</li>'); ?>
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
              <?php comments_template();   // includes comments.php?>
            </div>
          </div>
        </div>
        <?php if (is_active_sidebar('sidebar-1')): ?>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <?php dynamic_sidebar('sidebar-1'); ?>
                <!--  we will add the related widgets in a side from dashboard like category ,tags etc they are already present there
            
            
            we will add search widget from the dashboard and then it will take its html and csss from the searchform.php-->
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