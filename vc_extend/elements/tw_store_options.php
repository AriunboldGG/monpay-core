<?php 
global $waves_element_options;

$defMarker=ICT_DIR.'assets/images/map-marker.png';

$params=array(
    array(
        'type' => 'param_group',
        'heading' => esc_html__('Markers', 'waves'),
        'param_name' => 'markers',
        "group" => esc_html__("Markers & More", 'waves'),
        'value' => '',
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Title', 'waves'),
                'param_name' => 'title',
                'value' => '',
                "admin_label" => true,
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Link', 'waves'),
                'param_name' => 'link',
                'value' => '',
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Store Image', 'waves'),
                'param_name' => 'image',
                'value' => '',
            ),
        ),
    ),
);

$params=array_merge(
    $params,
    $waves_element_options['general']
);


vc_map(array(
    "name" => esc_html__( "Store", 'waves'),
    "base" => "tw_store",
    "content_element" => true,
  //  "as_child" => array('only' => 'tw_store'),
    "icon" => "", // Simply pass url to your icon here
    "params" => $params,
));
class WPBakeryShortCode_tw_store extends WPBakeryShortCode{}
