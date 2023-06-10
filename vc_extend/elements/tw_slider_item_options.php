<?php 
global $waves_element_options;
$defMarker=ICT_DIR.'assets/images/map-marker.png';
$params=array(
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Main Title', 'waves'),
        'param_name' => 'top_title',
        'value' => 'Үндэсний төлбөрийн шийдэл',
        "admin_label" => true,
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Main Title HTML Tag', 'waves'),
        'param_name' => 'heading_tag',
        'value' => $waves_element_options['other']['heading_tag'],
        'std' => 'h4',
    ),
    array(
        'type' => 'textarea_html',
        'heading' => esc_html__( 'Description', 'waves'),
        'param_name' => 'description',
        'value' => 'Бид өдөр тутмын амьдралдаа санхүүгийн үйлчилгээг зогсолтгүй ашигладаг ба илүү аюулгүй, хялбар, хурдан шийдлийг сонгодог.',
        "admin_label" => true,
    ),
    //Button Link & Text & Image
    array(
        'type' => 'vc_link',
        'heading' => esc_html__('Button Link & Text', 'waves'),
        'param_name' => 'link',
        'value' => esc_html__('url:#|title:Your%20Button', 'waves'),
        "admin_label" => true
    ),
   //Rating App Store
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Ratting Number', 'waves'),
        "value" =>esc_html__('4.8', 'waves'),
        'param_name' => 'bottom_title_rate',
        "admin_label" => true,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Ratting Title', 'waves'),
        "value" =>esc_html__('App Store үнэлгээ', 'waves'),
        'param_name' => 'bottom_title_icon',
        "admin_label" => true,
    ), 
    /*Markers*/ 
    array(
        'type' => 'param_group',
        'heading' => esc_html__('Markers', 'waves'),
        'param_name' => 'markers',
        "group" => esc_html__("Markers & More", 'waves'),
        'value' => '',
        'params' => array(
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Store Image', 'waves'),
                'param_name' => 'image',
                'value' => '',
            ),
        ),
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Slider Item", 'waves'),
    "base" => "tw_slider_item",
    "content_element" => true,
    "as_child" => array('only' => 'tw_slider'),
    "icon" => "", // Simply pass url to your icon here
    "params" => $params,
));
class WPBakeryShortCode_tw_slider_item extends WPBakeryShortCode{}