<?php
global $waves_element_options;
$params=array(
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Title', 'waves'),
        'param_name' => 'title',
        'description' => esc_html__( 'Enter accordion section title.', 'waves')
    ),
    array(
        'type' => 'textarea_html',
        'heading' => esc_html__('Content', 'waves' ),
        'param_name' => 'content',
        "admin_label" => true,
        'value' => esc_html__( 'Description', 'waves' ),
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Section", 'waves'),
    'base' => 'vc_accordion_tab',
    'allowed_container_element' => 'vc_row',
    'is_container' => true,
    'content_element' => false,
    "params" => $params,
    'js_view' => 'VcAccordionTabView',
));