<?php

get_header();


echo do_shortcode('[big_banner meta_banner="1"]'); // adding big banner 

while (have_posts()) {

    the_post();
    the_content();
}


get_footer();



