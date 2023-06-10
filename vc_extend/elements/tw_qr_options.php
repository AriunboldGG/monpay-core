<?php 
$params=array(
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Title', 'waves'),
        'param_name' => 'title',
        'value' => '',
        "admin_label" => true,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Top Title', 'waves'),
        'param_name' => 'top_title',
        'value' => '',
        "admin_label" => true,
    ),
    array(
        'type' => 'attach_image',
        'heading' => esc_html__( 'QR Image', 'waves'),
        'param_name' => 'image',
        'value' => '',
        "admin_label" => true,
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Bottom Text', 'waves'),
        'param_name' => 'bottom_title',
        'value' => '',
        "admin_label" => true,
        
    ),
    array(
        'type' => 'tw_number',
        'min' => -1,
        'heading' => esc_html__( 'Active item number', 'waves'),
        'description' => esc_html__('First item number - 0', 'waves'),
        'param_name' => 'open_item',
        'value' => 0,
        "admin_label" => true,
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general'],);
vc_map(array(
    "name" => esc_html__( "QR Code", 'waves'),
    "base" => "tw_qr",
    "content_element" => true,
    // "as_child" => array('only' => 'tw_client'),
    "icon" => "", // Simply pass url to your icon here
    "params" => $params,
));
class WPBakeryShortCode_tw_qr extends WPBakeryShortCode{}