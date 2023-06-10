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
        'type' => 'attach_image',
        'heading' => esc_html__( 'Client Image', 'waves'),
        'param_name' => 'image',
        'value' => '',
        "admin_label" => true,
    ),
    array(
        'type' => 'param_group',
        'heading' => esc_html__('Elements', 'waves'),
        'param_name' => 'markers',
        "group" => esc_html__("Pages", 'waves'),
        'value' => urlencode( json_encode( array(
                array(
                    'title' => esc_html__('Element', 'waves'),
                    'content' => esc_html__('Content', 'waves'),
                ),   
        ) ) ),
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Element Title', 'waves'),
                'param_name' => 'page_title',
                'value' => esc_html__( 'Your Heading', 'waves'),
                "admin_label" => true,
            ),
            array(
                    'type' => 'attach_image',
                    'heading' => esc_html__( 'Upload Custom Marker Image', 'waves'),
                    'description' => esc_html__( 'Default Marker located in ict/assets/images directory', 'waves'),
                    'param_name' => 'icon',
                    'value' => ''
                ),  
        ),
    ),
);

$params=array_merge(
    $params,
    $waves_element_options['general'],
);
vc_map(array(
    "name" => esc_html__( "Client Item", 'waves'),
    "base" => "tw_client_item",
    "content_element" => true,
    "as_child" => array('only' => 'tw_client'),
    "icon" => "", // Simply pass url to your icon here
    "params" => $params,
));
class WPBakeryShortCode_tw_client_item extends WPBakeryShortCode{}