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
                'heading' => esc_html__( 'App Title', 'waves'),
                'param_name' => 'page_title',
                'value' => esc_html__( 'App Heading', 'waves'),
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
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Choose Library, Set Icon', 'waves'),
                'value' => array(
                    esc_html__('None', 'waves') => 'none',
                    esc_html__('Image', 'waves') => 'fi_image',
                ),
                'std' =>'fi_image',
                'param_name' => 'icon',
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__('Thumbnail Image', 'waves'),
                'param_name' => 'fi_image',
                'dependency' => array(
                    'element' => 'icon',
                    'value' => 'fi_image',
                ),
            ),
        ),
    ),
     array(
        'type' => 'attach_image',
        'heading' => esc_html__( 'Choose Image', 'waves'),
        'param_name' => 'image',
        'value' => '',
    ),
);
vc_map(array(
    "name" => esc_html__( "Hereglegch Item", 'waves'),
    "base" => "tw_hereglegch_item",
    "content_element" => true,
    "as_child" => array('only' => 'tw_hereglegch'),
    "icon" => "", // Simply pass url to your icon here
    "params" => $params,
));
class WPBakeryShortCode_tw_hereglegch_item extends WPBakeryShortCode{}