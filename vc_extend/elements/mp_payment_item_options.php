<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Payment Layout', 'waves'),
        'param_name' => 'layout',
        'value' => array(
            esc_html__('Left Image', 'waves')=>'',
            esc_html__('Right Image', 'waves')=>'right',
        ),
        'std' => '',
        "admin_label" => true,
    ),
    array(
        'type' => 'attach_image',
        'heading' => esc_html__( 'Choose Image', 'waves'),
        'param_name' => 'image',
        'value' => '',
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Main Title', 'waves'),
        'param_name' => 'main_title',
        'value' => esc_html__( 'Your Heading', 'waves'),
        "admin_label" => true,
    ),
    array(
        'type' => 'textarea_html',
        'heading' => esc_html__( 'Description', 'waves'),
        'param_name' => 'content',
        'std' => 'Your Description',
    ),
    array(
        'type' => 'attach_image',
        'heading' => esc_html__( 'Choose Icon Image', 'waves'),
        'param_name' => 'icon_image',
        'value' => '',
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Link Description', 'waves'),
        'param_name' => 'desc',
        'value' => esc_html__( 'Илүү хялбар бай', 'waves'),
        "admin_label" => true,
    ),
    array(
        'type' => 'vc_link',
        'heading' => esc_html__('Link', 'waves'),
        'param_name' => 'link',
        'value' => '',
        'description' => esc_html__( 'Insert link URL', 'waves'),
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Monpay Item", 'waves'),
    "base" => "mp_payment_item",
    "content_element" => true,
    "as_child" => array('only' => 'mp_payment'),
    "icon" => "", // Simply pass url to your icon here
    "params" => $params,
));
class WPBakeryShortCode_mp_payment_item extends WPBakeryShortCode{}