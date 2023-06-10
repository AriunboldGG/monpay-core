<?php 
$params=array(
    array(
        'type' => 'attach_image',
        'heading' => esc_html__( 'Choose Image', 'waves'),
        'param_name' => 'image',
        'value' => ''
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Title', 'waves'),
        "value" =>esc_html__('Creativity', 'waves'),
        'param_name' => 'title',
        "admin_label" => true,
    ),
    array(
        'type' => 'textarea_html',
        'heading' => esc_html__( 'Content', 'waves'),
        'param_name' => 'content',
        'value' => esc_html__('Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.', 'waves')
    ),
    // //image&icon
    // array(//
    //     'type' => 'attach_image',
    //     'heading' => esc_html__( 'Icon', 'waves'),
    //     'param_name' => 'image_icon',
    //     'value' => '',
    //     "admin_label" => true,
    // ),
    //Button Link & Text
    array(
        'type' => 'vc_link',
        'heading' => esc_html__('Button Link & Text', 'waves'),
        'param_name' => 'link',
        'value' => esc_html__('url:#|title:Your%20Button', 'waves'),
        "admin_label" => true
    ),
);
vc_map(array(
    "name" => esc_html__( "Tulbur Item", 'waves'),
    "base" => "tw_tulbur_item",
    "content_element" => true,
    "as_child" => array('only' => 'tw_tulbur'),
    "icon" => "", // Simply pass url to your icon here
    "params" => $params,
));
class WPBakeryShortCode_tw_tulbur_item extends WPBakeryShortCode{}


//  array(
//     array(
//         'type' => 'vc_link',
//         'heading' => esc_html__('Button Link & Text', 'waves'),
//         'param_name' => 'link',
//         'value' => esc_html__('url:#|title:Your%20Button', 'waves'),
//         "admin_label" => true
//     ),
//      array(
//         'type' => 'textfield',
//         'heading' => esc_html__( 'Top Text Button', 'waves'),
//         "value" =>esc_html__('Илүү хялбар бай', 'waves'),
//         'param_name' => 'top_text_button',
//         "admin_label" => true,
//     ),
//  )