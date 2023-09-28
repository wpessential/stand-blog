<?php
new \Kirki\Section (
    'tag_section',
    [
        'priority'=>100,
        'title'=>esc_html__('Tag Section','standblog'),
        'description'=>esc_html__('This section is for Tag page setting','standblog'),
        'panel'=>'blog_settings',
    ]
    );