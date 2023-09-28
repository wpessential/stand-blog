<?php
new \Kirki\Section (
    'category_section',
    [
        'priority'=>100,
        'title'=>esc_html__('CategorySection','standblog'),
        'description'=>esc_html__('This section is for Category page setting','standblog'),
        'panel'=>'blog_settings',
    ]
    );