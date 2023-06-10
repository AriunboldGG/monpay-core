<?php 
$params=array(
   
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Main Title', 'waves'),
        'param_name' => 'main_title',
        'value' => esc_html__( 'Your Heading', 'waves'),
        "admin_label" => true,
    ),
    array(
        'type' => 'textarea_html',
        'heading' => esc_html__( 'Description', 'waves'),
        'param_name' => 'content',
        'std' => 'Your Description',
    ),
    array(
        'type' => 'vc_link',
        'heading' => esc_html__('Link', 'waves'),
        'param_name' => 'link',
        'value' => '',
        'description' => esc_html__( 'Insert link URL', 'waves'),
    ),
     array(
        'type' => 'attach_image',
        'heading' => esc_html__( 'Choose Image', 'waves'),
        'param_name' => 'image',
        'value' => '',
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Button Color', 'waves'),
        'param_name' => 'button_color',
        'value' => '',
        // "admin_label" => true
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Image Box Shadow', 'waves'),
        'param_name' => 'fi_bgcolor',
        // 'dependency' => array(
        //     'element' => 'icon',
        //     'value' => array('ionicons', 'fontawesome', 'openiconic', 'typicons', 'entypo', 'linecons', 'pixelicons', 'eticons'),
        // ),
        'value' => '',
    ),
    array(
        "type" => "colorpicker",
        'heading' => esc_html__('Background color', 'waves'),
        'param_name' => 'bg_color',
        'value' => '',
    ),
);
$params=array_merge(
    $waves_element_options['other']['icon'],
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Simple Item", 'waves'),
    "base" => "tw_simple_item",
    "content_element" => true,
    "as_child" => array('only' => 'tw_simple'),
    "icon" => "", // Simply pass url to your icon here
    "params" => $params,
));
class WPBakeryShortCode_tw_simple_item extends WPBakeryShortCode{}