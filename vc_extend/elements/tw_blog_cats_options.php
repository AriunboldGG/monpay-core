<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'tw_category',
        'size' => 10,
        'heading' => esc_html__( 'Post category', 'waves'),
        'value' => 'category',
        'std' => '',
        'param_name' => 'cats',
        'description' => esc_html__( 'Select category.', 'waves'),
    ),
    array(
        'type' => 'tw_number',
        'min' => -1,
        'heading' => esc_html__( 'Нэг хуудсанд харуулах нийтлэлийн тоо', 'waves'),
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
    "name" => esc_html__( "Blog Category", 'waves'),
    "base" => "tw_blog_cats",
    "class" => "",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_blog_cats extends WPBakeryShortCode{}