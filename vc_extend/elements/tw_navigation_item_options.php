<?php 
global $waves_element_options;
$params=array_merge(
    $params,
    $waves_element_options['general'],
    $waves_element_options['other']['icon'],
);
$params=array(
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Prev Page', 'waves'),
        'param_name' => 'main_title',
        'value' => esc_html__( 'Өмнөх хуудас/Дараах хуудас', 'waves'),
        "admin_label" => true,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Page Title', 'waves'),
        'param_name' => 'top_title',
        'value' => esc_html__( 'Шилжих хуудасны нэр', 'waves'),
        "admin_label" => true,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'link', 'waves'),
        "value" =>esc_html__('#', 'waves'),
        'param_name' => 'link',
        "admin_label" => true,
    ),
     array(
        'type' => 'attach_image',
        'heading' => esc_html__( 'Choose Image', 'waves'),
        'param_name' => 'image',
        'value' => '',
    ),
);
vc_map(array(
    "name" => esc_html__( "Navigation Item", 'waves'),
    "base" => "tw_navigation_item",
    "content_element" => true,
    "as_child" => array('only' => 'tw_hereglegch'),
    "icon" => "", // Simply pass url to your icon here
    "params" => $params,
));
class WPBakeryShortCode_tw_navigation_item extends WPBakeryShortCode{}