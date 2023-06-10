<?php 
global $waves_element_options;

$params=array(
    array(
      'type' => 'dropdown',
      'heading' => esc_html__( 'Slider dots?', 'waves'),
      'param_name' => 'slider_dots',
      'value' => array(
          esc_html__( 'True', 'waves') => 'true',
          esc_html__( 'False', 'waves') => 'false',
      ),
      'std' => 'true',
    ),
    array(
      'type' => 'dropdown',
      'heading' => esc_html__( 'Slider height', 'waves'),
      'param_name' => 'slider_height',
      'value' => array(
          esc_html__( 'Large', 'waves') => 'large',
          esc_html__( 'Medium', 'waves') => 'medium',
          esc_html__( 'Small', 'waves') => 'small',
      ),
      'std' => 'medium',
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Sliders", 'waves'),
    "base" => "tw_slider",
    "as_parent" => array('only' => 'tw_slider_item'),
    "content_element" => true,
    'show_settings_on_create' => false,
    "icon" => "",
    "category" => 'ThemeWaves',
    "params" => $params,
    'default_content' => '[tw_slider_item title="Title"][tw_slider_item title="Title"][tw_slider_item title="Title"]',
    "js_view" => 'VcColumnView'
));

class WPBakeryShortCode_tw_slider extends WPBakeryShortCodesContainer{}