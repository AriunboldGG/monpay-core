<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Main Title', 'waves'),
        'param_name' => 'main_title',
        'value' => '',
        "admin_label" => true,
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Choose Hover Style', 'waves'),
        'value' => array(
            esc_html__('Style 1', 'waves') => 'style-1',
            esc_html__('Style 2', 'waves') => 'style-2',
        ),
        'param_name' => 'hover',
        'std' => '',
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Choose Column', 'waves'),
        'value' => array(
            esc_html__('Column 2', 'waves') => 'col2',
            esc_html__('Column 3', 'waves') => 'col3',
            esc_html__('Column 4', 'waves') => 'col4',
            esc_html__('Column 5', 'waves') => 'col5',
            esc_html__('Column 6', 'waves') => 'col6',
        ),
        'param_name' => 'column',
        'std' => 'col2',
        'description' => esc_html__( 'Select Column ?', 'waves'),
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general'],
);
vc_map(array(
    "name" => esc_html__( "Iconbox With Style", 'waves'),
    "description" => esc_html__( "Display your Partners Images with Tooltip.", 'waves' ),
    "base" => "tw_iconbox",
    "as_parent" => array('only' => 'tw_iconbox_item'),
    "content_element" => true,
    'show_settings_on_create' => false,
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
    'default_content' => '[tw_iconbox_item title="Hover title"][tw_iconbox_item title="Hover title"][tw_iconbox_item title="Hover title"][tw_iconbox_item title="Hover title"][tw_iconbox_item title="Hover title"][tw_iconbox_item title="Hover title"]',
    "js_view" => 'VcColumnView'
));
class WPBakeryShortCode_tw_iconbox extends WPBakeryShortCodesContainer{}