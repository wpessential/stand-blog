<?php
get_header();

$banner_show = get_theme_mod('author_banner_display_setting');
$banner_title = get_theme_mod('author_title_setting');
$banner_subtitle = get_theme_mod('author_subtitle_setting');
$banner_image = get_theme_mod('author_background_setting');
echo do_shortcode("[big_banner banner_show='$banner_show' banner_title='$banner_title' banner_subtitle='$banner_subtitle' banner_image='$banner_image']"); // adding big banner 

?>
<section class="blog-posts grid-system">
  <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    <div class="row">
                        <?php while (have_posts()):
                            the_post();

                            ?>

                            <div class="col-lg-6">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <?php the_post_thumbnail('standblog-blog-post') ?>
                                    </div>
                                    <div class="down-content">
                                    <?php if(true== get_theme_mod('author_category_setting')){ ?>
                                        <span>
                                            <?php the_category(', '); ?>
                                        </span>
                                        <?php } ?>
                                        <a href="post-details.html">
                                            <h4>
                                                <?php the_title() ?>
                                            </h4>
                                        </a>
                                        <ul class="post-info">
                                        <?php if(true== get_theme_mod('author_author_setting')){ ?>
                                            <li>
                                                <?php echo get_the_author_posts_link(); // gets the author link but wheb we clikck on it it will use the slug in the searchbar and and show all related post to the author ?>
                                            </li>
                                            <?php } ?>
                                            <?php if(true== get_theme_mod('author_post_date_setting')){ ?>
                                            <li>
                                                <a
                                                    href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d')); // this will show the datew but as we click on it it will show the post which were posted on that date?>">
                                                    <?php echo get_the_date(); ?>
                                                </a>
                                            </li>
                                            <?php } ?>
                                            <?php if(true== get_theme_mod('author_post_comments_setting')){ ?>
                                            <li><a href="#">
                                                    <?php echo get_comments_number(); ?> Comments
                                                </a></li>
                                        </ul>
                                        <?php } ?>
                                        <?php the_excerpt() ?>

                                        <div class="post-options">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul class="post-tags">
                                                    <?php if(true== get_theme_mod('author_tags_setting')){ ?>
                                                        <li><i class="fa fa-tags"></i></li>
                                                        <?php the_tags('<li>', ', ', '</li>') ?>
                                                    </ul>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <?php endwhile; ?>
                        <!-- for pagination  starts here  -->
                        <div class="col-lg-12">
                            <ul class="page-numbers">
                                <li>
                                    <?php

                                    $page_navigation = array(
                                        'prev_text' => '<i class="fa fa-angle-double-left"></i>',
                                        'next_text' => '<i class="fa fa-angle-double-right"></i>',
                                    );


                                    echo paginate_links($page_navigation); ?>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <?php if (is_active_sidebar('sidebar-1')) { ?>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="row">
                            <?php dynamic_sidebar('sidebar-1'); ?>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
  </div>
</section>

<?php

get_footer();