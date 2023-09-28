<?php
new \Kirki\Section (
    'blog_detail_section',
    [
        'priority'=>100,
        'title'=>esc_html__('Blog Detail','standblog'),
        'description'=>esc_html__('This section is for Category page setting','standblog'),
        'panel'=>'blog_settings',
    ]
    );