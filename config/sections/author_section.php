<?php
new \Kirki\Section (
    'author_section',
    [
        'priority'=>100,
        'title'=>esc_html__('Author Section','standblog'),
        'description'=>esc_html__('This section is for Author page setting','standblog'),
        'panel'=>'blog_settings',
    ]
    );