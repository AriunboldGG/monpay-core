<?php 
global $waves_element_options;

$params=array(
    array(
        'type' => 'attach_image',
        'heading' => esc_html__( 'Choose Image', 'waves'),
        'param_name' => 'image',
        'value' => ''
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Name', 'waves'),
        'param_name' => 'name',
        'value' => esc_html__( 'Your name', 'waves'),
        "admin_label" => true,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Position', 'waves'),
        'param_name' => 'positoin',
        'value' => esc_html__( 'Your name', 'waves'),
        "admin_label" => true,
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Team", 'waves'),
    "description" => esc_html__( "Team.", 'waves' ),
    "base" => "mp_team",
    "class" => "",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_mp_team extends WPBakeryShortCode{}