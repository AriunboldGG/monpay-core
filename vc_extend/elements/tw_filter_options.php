<?php 
global $waves_element_options;

$params=array(
    array(
        'type' => 'tw_category',
        'size' => 10,
        'heading' => esc_html__( 'Post category', 'waves'),
        'value' => 'partner_cat',
        'std' => '',
        'param_name' => 'cats',
        'description' => esc_html__( 'Select category.', 'waves'),
    ),
    array(
        'type' => 'tw_number',
        'min' => -1,
        'heading' => esc_html__( 'Count', 'waves'),
        'param_name' => 'posts_per_page',
        'value' => '12',
        "admin_label" => true,
        'description' => esc_html__( 'Only integer value.', 'waves'),
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Filter", 'waves'),
    "description" => esc_html__( "Main Partners with and Customizable options.", 'waves' ),
    "base" => "tw_filter",
    "class" => "",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_filter extends WPBakeryShortCode{}