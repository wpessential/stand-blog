<?php
new \Kirki\Section (
    'section_1',
    [
        'priority'=>150,
        'title'=>esc_html__('First Section','standblog'),
        'description'=>esc_html__('This is the first section created','standblog'),
        'panel'=>'panel_1',
    ]
    );


// Kirki::add_section('section_1', array(
//     'priority' => 160,
//     'title' => esc_html__('First Section', 'standblog'),
//     'description' => esc_html__('This is the first section created', 'standblog'),
//     'panel' => 'panel_1', // Assign this section to a panel.
// ));
// 