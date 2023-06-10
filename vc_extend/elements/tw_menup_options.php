<?php
global $waves_element_options;
$params=array(
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Menu Title', 'waves'),
        'param_name' => 'menu_title',
        'value' => esc_html__( 'Your Heading', 'waves'),
        "admin_label" => true,
    ),
    array(
        'type' => 'param_group',
        'heading' => esc_html__('Page', 'waves'),
        'param_name' => 'markers',
        "group" => esc_html__("Pages", 'waves'),
        'value' => urlencode( json_encode( array(
                array(
                    'title' => esc_html__('Page', 'waves'),
                    'content' => esc_html__('Content', 'waves'),
                ),   
        ) ) ),
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Page Title', 'waves'),
                'param_name' => 'page_title',
                'value' => esc_html__( 'Your Heading', 'waves'),
                "admin_label" => true,
            ),
            array(
                'title' => esc_html__('Marker 1', 'waves'),
                'type' => 'textfield',
                'heading' => esc_html__( 'link', 'waves'),
                "value" =>esc_html__('#', 'waves'),
                'param_name' => 'link',
                "admin_label" => true,
            ),  
        ),
    ),
    // array(
    //     'type' => 'param_group',
    //     'heading' => esc_html__('Menu Bottom', 'waves'),
    //     'param_name' => 'elements',
    //     "group" => esc_html__("Bottom Elements", 'waves'),
    //     'value' => urlencode( json_encode( array(
    //             array(
    //                 'title' => esc_html__('Element', 'waves'),
    //                 'content' => esc_html__('Content', 'waves'),
    //             ),   
    //     ) ) ),
    //     'params' => array(
    //         array(
    //             'type' => 'textfield',
    //             'heading' => esc_html__( 'Page Title', 'waves'),
    //             'param_name' => 'page_title',
    //             'value' => esc_html__( 'Your Heading', 'waves'),
    //             "admin_label" => true,
    //         ),
    //         array(
    //             'title' => esc_html__('Marker 1', 'waves'),
    //             'type' => 'textfield',
    //             'heading' => esc_html__( 'link', 'waves'),
    //             "value" =>esc_html__('#', 'waves'),
    //             'param_name' => 'link',
    //             "admin_label" => true,
    //         ),  
    //     ),
    // ),
    // array(
    //     'type' => 'attach_image',
    //     'heading' => esc_html__( 'Upload Custom Marker Image', 'waves'),
    //     'description' => esc_html__( 'Default Marker located in ict/assets/images directory', 'waves'),
    //     'param_name' => 'image',
    //     'value' => ''
    // ),
);
$params=array_merge(
    $params,
    $waves_element_options['general'],
    // $waves_element_options['other']['button']
);
vc_map(array(
    "name" => esc_html__( "Page Menu", 'waves'),
    "description" => esc_html__( "Customizable Snazzy Map.", 'waves' ),
    "base" => "tw_menup",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_menup extends WPBakeryShortCode{}