<?php
new \Kirki\Section (
    'search_section',
    [
        'priority'=>100,
        'title'=>esc_html__('Search Section','standblog'),
        'description'=>esc_html__('This section is for Search page setting','standblog'),
        'panel'=>'blog_settings',
    ]
    );