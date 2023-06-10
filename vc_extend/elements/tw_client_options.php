<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Title', 'waves'),
        'param_name' => 'title',
        'value' => '',
        "admin_label" => true,
    ),
    // array(
    //     'type' => 'dropdown',
    //     'heading' => esc_html__( 'Choose Hover Style', 'waves'),
    //     'value' => array(
    //         esc_html__('Style 1', 'waves') => 'style-1',
    //         esc_html__('Style 2', 'waves') => 'style-2',
    //     ),
    //     'param_name' => 'hover',
    //     'std' => '',
    // ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Choose Column', 'waves'),
        'value' => array(
            esc_html__('Column 2', 'waves') => 'col2',
            esc_html__('Column 3', 'waves') => 'col3',
            esc_html__('Column 4', 'waves') => 'col4',
            esc_html__('Column 5', 'waves') => 'col5',
            esc_html__('Column 6', 'waves') => 'col6',
        ),
        'param_name' => 'column',
        'std' => 'col2',
        'description' => esc_html__( 'Select Column ?', 'waves'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Set the Opacity', 'waves'),
        'param_name' => 'opacity',
        'value' => '0.4',
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general'],
    $waves_element_options['other']['carousel']
);

$params=waves_rep_param($params,array(
    'uk_light' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'items' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'center' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'dots' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'dots-each' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'nav' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'loop' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'auto-width' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'autoplay' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'autoplay-hover-pause' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'autoplay-timeout' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'tw_dimension_type' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'tw_dimension_height' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
));
vc_map(array(
    "name" => esc_html__( "Clients", 'waves'),
    "description" => esc_html__( "Display your Partners Images with Tooltip.", 'waves' ),
    "base" => "tw_client",
    "as_parent" => array('only' => 'tw_client_item'),
    "content_element" => true,
    'show_settings_on_create' => false,
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
    'default_content' => '[tw_client_item title="Hover title"][tw_client_item title="Hover title"][tw_client_item title="Hover title"][tw_client_item title="Hover title"][tw_client_item title="Hover title"][tw_client_item title="Hover title"]',
    "js_view" => 'VcColumnView'
));
class WPBakeryShortCode_tw_client extends WPBakeryShortCodesContainer{}