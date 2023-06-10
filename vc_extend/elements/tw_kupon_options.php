<?php
global $waves_element_options;
$params=array(
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
        'value' => ''
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Choose Align', 'waves'),
        'param_name' => 'align',
        'value' => array(
            esc_html__( 'Center', 'waves') => 'text-center',
            esc_html__( 'Left', 'waves') => 'text-left',
            esc_html__( 'Right', 'waves') => 'text-right'
        ),
        'std' => 'text-center',
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Kupon", 'waves'),
    "base" => "tw_kupon",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_kupon extends WPBakeryShortCode{}