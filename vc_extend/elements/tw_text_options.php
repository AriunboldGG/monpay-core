<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'textarea_html',
        'heading' => esc_html__('Content', 'waves' ),
        'param_name' => 'content',
        "admin_label" => true,
        'value' => esc_html__( 'Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.', 'waves' ),
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Text Block", 'waves' ),
    "base" => "tw_text",
    "icon" => "",
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_text extends WPBakeryShortCode{}