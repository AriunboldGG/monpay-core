<?php 
global $waves_element_options;
$params=array(
  
);
$params=array_merge(
    $params,
    $waves_element_options['general'],
);

vc_map(array(
    "name" => esc_html__( "Payment", 'waves'),
    "description" => esc_html__( "Display your Partners Images with Tooltip.", 'waves' ),
    "base" => "mp_payment",
    "as_parent" => array('only' => 'mp_payment_item'),
    "content_element" => true,
    'show_settings_on_create' => false,
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
    'default_content' => '[mp_payment_item title="Hover title"][mp_payment_item title="Hover title"]',
    "js_view" => 'VcColumnView'
));
class WPBakeryShortCode_mp_payment extends WPBakeryShortCodesContainer{}