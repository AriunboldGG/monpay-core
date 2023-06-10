<?php 
global $waves_element_options;
$params=array(
  
);
$params=array_merge(
    $params,
    $waves_element_options['general'],
);

vc_map(array(
    "name" => esc_html__( "Hereglegch", 'waves'),
    "description" => esc_html__( "Display your Partners Images with Tooltip.", 'waves' ),
    "base" => "tw_hereglegch",
    "as_parent" => array('only' => 'tw_hereglegch_item'),
    "content_element" => true,
    'show_settings_on_create' => false,
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
    'default_content' => '[tw_hereglegch_item title="Hover title"][tw_hereglegch_item title="Hover title"]',
    "js_view" => 'VcColumnView'
));
class WPBakeryShortCode_tw_hereglegch extends WPBakeryShortCodesContainer{}