<?php
new \Kirki\Section (
    'archive_section',
    [
        'priority'=>100,
        'title'=>esc_html__('Archive Section','standblog'),
        'description'=>esc_html__('This section is for Archive page setting','standblog'),
        'panel'=>'blog_settings',
    ]
    );