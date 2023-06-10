<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Style', 'waves'),
        'value' => array(
            esc_html__('Style 1', 'waves') => 'style1',
            esc_html__('Style 2', 'waves') => 'style2',
        ),
        'param_name' => 'style',
        'std' => 'style1',
        'description' => esc_html__( 'Select Column ?', 'waves'),
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general'],
);

vc_map(array(
    "name" => esc_html__( "Tulbur", 'waves'),
    "description" => esc_html__( "Display your Partners Images with Tooltip.", 'waves' ),
    "base" => "tw_tulbur",
    "as_parent" => array('only' => 'tw_tulbur_item'),
    "content_element" => true,
    'show_settings_on_create' => false,
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
    'default_content' => '[tw_tulbur_item title="Hover title"][tw_tulbur_item title="Hover title"][tw_tulbur_item title="Hover title"][tw_tulbur_item title="Hover title"][tw_tulbur_item title="Hover title"][tw_tulbur_item title="Hover title"]',
    "js_view" => 'VcColumnView'
));
class WPBakeryShortCode_tw_tulbur extends WPBakeryShortCodesContainer{}