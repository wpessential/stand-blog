<?php
class Simplewidget extends WP_Widget
{
    function SimpleWidget(){
        $widget_options= array(
        'classname' => 'simple-widget',
        'description' =>'Just a simple widgets');
        parent::WP_Widget('simple_widget','Simple Widget',$widget_options);

    }
    function widget($args,$instance){
        extract($args,EXTR_SKIP);
        $title($instance ['body']) ? $instance['title'] : 'A simnple widget';
        $body = ($instance['body']) ? $instance['body'] : 'a simple message';
        
        echo $before_widget;
        echo $before_title . $title . $after_title;
        echo $body;
    }
    function update(){

    }
    function form(){

    }
}

function simple_widget_init(){
    register_widget("SimpleWidget");
}
add_action('widgets_init','simpl_widget_init');







?>