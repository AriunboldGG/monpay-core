<?php 
global $waves_element_options;
$params=array_merge(
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Login", 'waves'),
    "description" => esc_html__( "Login.", 'waves' ),
    "base" => "tw_login",
    "class" => "",
    "icon" => "",
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_login extends WPBakeryShortCode{}