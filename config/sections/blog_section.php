<?php
new \Kirki\Section (
    'blog_section',
    [
        'priority'=>100,
        'title'=>esc_html__('Blog Section','standblog'),
        'description'=>esc_html__('this section is for Blog page setting','standblog'),
        'panel'=>'blog_settings',
    ]
    );