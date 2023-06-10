<?php 
$params=array(
    array(
        'type' => 'attach_image',
        'heading' => esc_html__( 'Choose Image', 'waves'),
        'param_name' => 'image',
        'value' => '',
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Description', 'waves'),
        'param_name' => 'top_title',
        'value' => esc_html__( 'Your Description', 'waves'),
        "admin_label" => true,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Button Title', 'waves'),
        'param_name' => 'page_title',
        'value' => esc_html__( 'Your Heading', 'waves'),
        "admin_label" => true,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'link', 'waves'),
        "value" =>esc_html__('#', 'waves'),
        'param_name' => 'link',
        "admin_label" => true,
    ),
    array(
        'type' => 'param_group',
        'heading' => esc_html__('Markers', 'waves'),
        'param_name' => 'markers',
        "group" => esc_html__("Store", 'waves'),
        'value' => '',
        "admin_label" => true,
        'params' => array(
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
    $waves_element_options['general'],
    $params,
);
vc_map(array(
    "name" => esc_html__( "Menu Bottom", 'waves'),
    "description" => esc_html__( "Customizable Snazzy Map.", 'waves' ),
    "base" => "tw_menu_bottom",
    "content_element" => true,
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_menu_bottom extends WPBakeryShortCode{}