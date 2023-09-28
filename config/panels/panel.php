<?php
new \Kirki\Panel(
    'panel_1',
    [
        'priority'=>10,
        'title'=>esc_html__('My first panel','standblog'),
        'description'=>esc_html__('This is the first panel created','standblog')
    ]
    );


// Kirki::add_panel('panel_1', array(
//     'priority' => 10,
//     'title' => esc_html__('Panel 1', 'standblog'),
// ));
