<?php 
$params=array(
    array(
        'type' => 'attach_image',
        'heading' => esc_html__( 'Iconbox Image', 'waves'),
        'param_name' => 'image',
        'value' => '',
        "admin_label" => true,
    ),
    array(
        "type" => "colorpicker",
        'heading' => esc_html__('Background Icon Color', 'waves'),
        'param_name' => 'bg_color',
        'value' => '',
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Description', 'waves'),
        'param_name' => 'title',
        'value' => '',
        "admin_label" => true,
    ),
    
);

$params=array_merge(
    $params,
    $waves_element_options['general'],
);
vc_map(array(
    "name" => esc_html__( "Iconbox Item", 'waves'),
    "base" => "tw_iconbox_item",
    "content_element" => true,
    "as_child" => array('only' => 'tw_iconbox'),
    "icon" => "", // Simply pass url to your icon here
    "params" => $params,
));
class WPBakeryShortCode_tw_iconbox_item extends WPBakeryShortCode{}