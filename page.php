<?php

get_header();


echo do_shortcode('[big_banner]'); // adding big banner 

while (have_posts()) {

    the_post();
    the_content();
}


get_footer();



