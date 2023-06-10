<?php
global $waves_element_options;
    
$params=array(
    array(
        'type' => 'param_group',
        'heading' => esc_html__('Markers', 'waves'),
        'param_name' => 'markers',
        "group" => esc_html__("Markers & More", 'waves'),
        'value' => urlencode( json_encode( array(
                array(
                    'title' => esc_html__('Marker 1', 'waves'),
                    'content' => esc_html__('Content 1', 'waves'),
                ),
                array(
                    'title' => esc_html__('Marker 2', 'waves'),
                    'content' => esc_html__('Content 2', 'waves'),
                )
        ) ) ),
        'params' => array(
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Upload Custom Marker Image', 'waves'),
                'description' => esc_html__( 'Default Marker located in lvly/assets/images directory', 'waves'),
                'param_name' => 'icon',
                'value' => ''
            ),
        ),
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Markers", 'waves'),
    "description" => esc_html__( "Customizable Snazzy Map.", 'waves' ),
    "base" => "tw_map",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_map extends WPBakeryShortCode{}