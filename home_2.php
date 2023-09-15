<?php
// function home_shortcode($atts, $content = null)
{
    // $args = array(
    //     'slider_image1'=>'',
    //     'slider_image2'=>'',
    //     'slider_image3'=>'',
    //     'slider_image4'=>'',
    //     'slider_image5'=>'',
    //     'slider_image6'=>'',
    //     'slider_image7'=>'',
    //     'slider_image8'=>'',
    //     'slider_image9'=>'',
    //     'slider_image10'=>'',
    //     'slider_image11'=>'',
    //     'slider_image12'=>'',
    //     'slider_image13'=>'',
    //     'p1_image' => '',
    //     'p1_catg' => '',
    //     'p1_heading1' => '',
    //     'p1_author' => '',
    //     'p1_date' => '',
    //     'p1_desc' => '',
    //     'small_heading' => '',
    //     'main_heading' => '',


    // );

    // $atts = shortcode_atts($args, $atts, 'home');
    // extract($atts); // convert associate array into variable and their value
    // ob_start();
    ?>
    <!-- <div class="main-banner header-text">
        <div class="container-fluid">
            <div class="owl-banner owl-carousel owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(-8976px, 0px, 0px); transition: all 0s ease 0s; width: 21544px;">
                        <div class="owl-item cloned" style="width: 1785.33px; margin-right: 10px;">
                            <div class="item">
                            <?php if ($slider_image1) {
                                            echo wp_get_attachment_image(85, "full");
                                            // this fucntion is used as <img> in html 
                                        } ?>
                                <div class="item-content">
                                    <div class="main-content">
                                        <div class="meta-category">
                                            <span>Fashion</span>
                                        </div>
                                        <a href="post-details.html">
                                            <h4>Responsive and Mobile Ready Layouts</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 18, 2020</a></li>
                                            <li><a href="#">48 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 1785.33px; margin-right: 10px;">
                            <div class="item">
                            <?php if ($slider_image2) {
                                            echo wp_get_attachment_image(84, "full");
                                            // this fucntion is used as <img> in html 
                                        } ?>
                                <div class="item-content">
                                    <div class="main-content">
                                        <div class="meta-category">
                                            <span>Nature</span>
                                        </div>
                                        <a href="post-details.html">
                                            <h4>Cras congue sed augue id ullamcorper</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 24, 2020</a></li>
                                            <li><a href="#">64 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 1785.33px; margin-right: 10px;">
                            <div class="item">
                            <?php if ($slider_image3) {
                                            echo wp_get_attachment_image(83, "full");
                                            // this fucntion is used as <img> in html 
                                        } ?>
                                <div class="item-content">
                                    <div class="main-content">
                                        <div class="meta-category">
                                            <span>Lifestyle</span>
                                        </div>
                                        <a href="post-details.html">
                                            <h4>Suspendisse nec aliquet ligula</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 26, 2020</a></li>
                                            <li><a href="#">72 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1785.33px; margin-right: 10px;">
                            <div class="item">
                            <?php if ($slider_image4) {
                                            echo wp_get_attachment_image(81, "full");
                                            // this fucntion is used as <img> in html 
                                        } ?>
                                <div class="item-content">
                                    <div class="main-content">
                                        <div class="meta-category">
                                            <span>Fashion</span>
                                        </div>
                                        <a href="post-details.html">
                                            <h4>Morbi dapibus condimentum</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 12, 2020</a></li>
                                            <li><a href="#">12 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1785.33px; margin-right: 10px;">
                            <div class="item">
                                <?php if ($slider_image5) {
                                                echo wp_get_attachment_image(78, "full");
                                                // this fucntion is used as <img> in html 
                                            } ?>
                                <div class="item-content">
                                    <div class="main-content">
                                        <div class="meta-category">
                                            <span>Nature</span>
                                        </div>
                                        <a href="post-details.html">
                                            <h4>Donec porttitor augue at velit</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 14, 2020</a></li>
                                            <li><a href="#">24 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 1785.33px; margin-right: 10px;">
                            <div class="item">
                            <?php if ($slider_image6) {
                                            echo wp_get_attachment_image(33, "full");
                                            // this fucntion is used as <img> in html 
                                        } ?>
                                <div class="item-content">
                                    <div class="main-content">
                                        <div class="meta-category">
                                            <span>Lifestyle</span>
                                        </div>
                                        <a href="post-details.html">
                                            <h4>Best HTML Templates on TemplateMo</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 16, 2020</a></li>
                                            <li><a href="#">36 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 1785.33px; margin-right: 10px;">
                            <div class="item">
                            <?php if ($slider_image7) {
                                            echo wp_get_attachment_image(28, "full");
                                            // this fucntion is used as <img> in html 
                                        } ?>
                                <div class="item-content">
                                    <div class="main-content">
                                        <div class="meta-category">
                                            <span>Fashion</span>
                                        </div>
                                        <a href="post-details.html">
                                            <h4>Responsive and Mobile Ready Layouts</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 18, 2020</a></li>
                                            <li><a href="#">48 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 1785.33px; margin-right: 10px;">
                            <div class="item">
                            <?php if ($slider_image8) {
                                            echo wp_get_attachment_image(25, "full");
                                            // this fucntion is used as <img> in html 
                                        } ?>
                                <div class="item-content">
                                    <div class="main-content">
                                        <div class="meta-category">
                                            <span>Nature</span>
                                        </div>
                                        <a href="post-details.html">
                                            <h4>Cras congue sed augue id ullamcorper</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 24, 2020</a></li>
                                            <li><a href="#">64 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1785.33px; margin-right: 10px;">
                            <div class="item">
                            <?php if ($slider_image9) {
                                            echo wp_get_attachment_image(22, "full");
                                            // this fucntion is used as <img> in html 
                                        } ?>
                                <div class="item-content">
                                    <div class="main-content">
                                        <div class="meta-category">
                                            <span>Lifestyle</span>
                                        </div>
                                        <a href="post-details.html">
                                            <h4>Suspendisse nec aliquet ligula</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 26, 2020</a></li>
                                            <li><a href="#">72 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 1785.33px; margin-right: 10px;">
                            <div class="item">
                            <?php if ($slider_image10) {
                                            echo wp_get_attachment_image(19, "full");
                                            // this fucntion is used as <img> in html 
                                        } ?>
                                <div class="item-content">
                                    <div class="main-content">
                                        <div class="meta-category">
                                            <span>Fashion</span>
                                        </div>
                                        <a href="post-details.html">
                                            <h4>Morbi dapibus condimentum</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 12, 2020</a></li>
                                            <li><a href="#">12 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 1785.33px; margin-right: 10px;">
                            <div class="item">
                            <?php if ($slider_image11) {
                                            echo wp_get_attachment_image(16, "full");
                                            // this fucntion is used as <img> in html 
                                        } ?>
                                <div class="item-content">
                                    <div class="main-content">
                                        <div class="meta-category">
                                            <span>Nature</span>
                                        </div>
                                        <a href="post-details.html">
                                            <h4>Donec porttitor augue at velit</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 14, 2020</a></li>
                                            <li><a href="#">24 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 1785.33px; margin-right: 10px;">
                            <div class="item">
                            <?php if ($slider_image12) {
                                            echo wp_get_attachment_image(33, "full");
                                            // this fucntion is used as <img> in html 
                                        } ?>
                                <div class="item-content">
                                    <div class="main-content">
                                        <div class="meta-category">
                                            <span>Lifestyle</span>
                                        </div>
                                        <a href="post-details.html">
                                            <h4>Best HTML Templates on TemplateMo</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 16, 2020</a></li>
                                            <li><a href="#">36 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span
                            aria-label="Previous">‹</span></button><button type="button" role="presentation"
                        class="owl-next"><span aria-label="Next">›</span></button></div>
                <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button
                        role="button" class="owl-dot"><span></span></button></div>
            </div>
        </div>
    </div> -->

    <!-- Banner Ends Here -->

    <!-- <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="row">
                            <div class="col-lg-8">
                                <span>
                                    <?php echo esc_html($small_heading); ?>
                                    <span>
                                        <h4>
                                            <?php echo esc_html($main_heading); ?>
                                        </h4>
                            </div>
                            <div class="col-lg-4">
                                <div class="main-button">
                                    <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog"
                                        target="_parent">Download Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        
                                        <?php if ($p1_image) {
                                            echo wp_get_attachment_image(72, "full");
                                            // this fucntion is used as <img> in html 
                                        } ?>
                                    </div>
                                    <div class="down-content">
                                        <span>
                                            <?php echo esc_html($p1_catg); ?>
                                        </span>
                                        <a href="post-details.html">
                                            <h4>
                                                <?php echo esc_html($p1_heading1); ?>
                                            </h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">
                                                    <?php echo esc_html($p1_author); ?>
                                                </a></li>
                                            <li><a href="#">
                                                    <?php echo esc_html($p1_date); ?>
                                                </a></li>
                                            <li><a href="#">12 Comments</a></li>
                                        </ul>
                                        <p>
                                            <?php echo esc_html($p1_desc); ?>
                                        </p>
                                        <div class="post-options">
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-tags"></i></li>
                                                        <li><a href="#">Beauty</a>,</li>
                                                        <li><a href="#">Nature</a></li>
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
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="assets/images/blog-post-02.jpg" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span>Healthy</span>
                                        <a href="post-details.html">
                                            <h4>Etiam id diam vitae lorem dictum</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 24, 2020</a></li>
                                            <li><a href="#">36 Comments</a></li>
                                        </ul>
                                        <p>You can support us by contributing a little via PayPal. Please contact <a
                                                rel="nofollow" href="https://templatemo.com/contact"
                                                target="_parent">TemplateMo</a> via Live Chat or Email. If you have any
                                            question or feedback about this template, feel free to talk to us. Also, you may
                                            check other CSS templates such as <a rel="nofollow"
                                                href="https://templatemo.com/tag/multi-page"
                                                target="_parent">multi-page</a>, <a rel="nofollow"
                                                href="https://templatemo.com/tag/resume" target="_parent">resume</a>, <a
                                                rel="nofollow" href="https://templatemo.com/tag/video"
                                                target="_parent">video</a>, etc.</p>
                                        <div class="post-options">
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-tags"></i></li>
                                                        <li><a href="#">Best Templates</a>,</li>
                                                        <li><a href="#">TemplateMo</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="post-share">
                                                        <li><i class="fa fa-share-alt"></i></li>
                                                        <li><a href="#">Facebook</a>,</li>
                                                        <li><a href="#">Twitter</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="assets/images/blog-post-03.jpg" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span>Fashion</span>
                                        <a href="post-details.html">
                                            <h4>Donec tincidunt leo nec magna</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 14, 2020</a></li>
                                            <li><a href="#">48 Comments</a></li>
                                        </ul>
                                        <p>Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque
                                            tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue,
                                            vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra
                                            leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur
                                            nibh, in vehicula eros orci vel neque.</p>
                                        <div class="post-options">
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-tags"></i></li>
                                                        <li><a href="#">HTML CSS</a>,</li>
                                                        <li><a href="#">Photoshop</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="post-share">
                                                        <li><i class="fa fa-share-alt"></i></li>
                                                        <li><a href="#">Facebook</a>,</li>
                                                        <li><a href="#">Twitter</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="main-button">
                                    <a href="blog.html">View All Posts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sidebar-item search">
                                    <form id="search_form" name="gs" method="GET" action="#">
                                        <input type="text" name="q" class="searchText" placeholder="type to search..."
                                            autocomplete="on">
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item recent-posts">
                                    <div class="sidebar-heading">
                                        <h2>Recent Posts</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li><a href="post-details.html">
                                                    <h5>Vestibulum id turpis porttitor sapien facilisis scelerisque</h5>
                                                    <span>May 31, 2020</span>
                                                </a></li>
                                            <li><a href="post-details.html">
                                                    <h5>Suspendisse et metus nec libero ultrices varius eget in risus</h5>
                                                    <span>May 28, 2020</span>
                                                </a></li>
                                            <li><a href="post-details.html">
                                                    <h5>Swag hella echo park leggings, shaman cornhole ethical coloring</h5>
                                                    <span>May 14, 2020</span>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item categories">
                                    <div class="sidebar-heading">
                                        <h2>Categories</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li><a href="#">- Nature Lifestyle</a></li>
                                            <li><a href="#">- Awesome Layouts</a></li>
                                            <li><a href="#">- Creative Ideas</a></li>
                                            <li><a href="#">- Responsive Templates</a></li>
                                            <li><a href="#">- HTML5 / CSS3 Templates</a></li>
                                            <li><a href="#">- Creative &amp; Unique</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item tags">
                                    <div class="sidebar-heading">
                                        <h2>Tag Clouds</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li><a href="#">Lifestyle</a></li>
                                            <li><a href="#">Creative</a></li>
                                            <li><a href="#">HTML5</a></li>
                                            <li><a href="#">Inspiration</a></li>
                                            <li><a href="#">Motivation</a></li>
                                            <li><a href="#">PSD</a></li>
                                            <li><a href="#">Responsive</a></li>
                                        </ul>
                                    </div>
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
} ?>