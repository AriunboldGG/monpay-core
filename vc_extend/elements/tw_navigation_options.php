<?php 
global $waves_element_options;
$params=array(
  
    // array(
    //     'type' => 'dropdown',
    //     'heading' => esc_html__( 'Choose Column', 'waves'),
    //     'value' => array(
    //         esc_html__('Column 2', 'waves') => 'col1',
    //         esc_html__('Column 2', 'waves') => 'col2',
    //         esc_html__('Column 3', 'waves') => 'col3',
    //         esc_html__('Column 4', 'waves') => 'col4',
    //     ),
    //     'param_name' => 'column',
    //     'std' => 'col2',
    //     'description' => esc_html__( 'Select Column ?', 'waves'),
    // ),
);
$params=array_merge(
    $params,
    $waves_element_options['general'],
);

vc_map(array(
    "name" => esc_html__( "Navigation", 'waves'),
    "description" => esc_html__( "Display your Partners Images with Tooltip.", 'waves' ),
    "base" => "tw_navigation",
    "as_parent" => array('only' => 'tw_navigation_item'),
    "content_element" => true,
    'show_settings_on_create' => false,
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
    'default_content' => '[tw_navigation_item title="Hover title"][tw_navigation_item title="Hover title"]',
    "js_view" => 'VcColumnView'
));
class WPBakeryShortCode_tw_navigation extends WPBakeryShortCodesContainer{}