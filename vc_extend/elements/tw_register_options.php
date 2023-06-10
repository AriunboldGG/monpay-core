<?php 
global $waves_element_options;
$params=array_merge(
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Register", 'waves'),
    "base" => "tw_register",
    "class" => "",
    "icon" => "",
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_register extends WPBakeryShortCode{}