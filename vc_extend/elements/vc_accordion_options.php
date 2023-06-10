<?php
global $waves_element_options;
$params=array_merge(
    $waves_element_options['general']
);
vc_map(array(
    'name' => esc_html__( 'Accordion', 'waves'),
    'base' => 'vc_accordion',
    'show_settings_on_create' => false,
    'is_container' => true,
    'icon' => 'waves-element-icon',
    "category" => 'ThemeWaves',
    "params" => $params,
    'custom_markup' => '<div class="wpb_accordion_holder wpb_holder clearfix vc_container_for_children">%content%</div><div class="tab_controls"><a class="add_tab" title="' . esc_html__( 'Add section', 'waves') . '"><span class="vc_icon"></span> <span class="tab-label">' . esc_html__( 'Add section', 'waves') . '</span></a></div>',
    'default_content' => '[vc_accordion_tab title="' . esc_html__( 'Section 1', 'waves') . '"][/vc_accordion_tab][vc_accordion_tab title="' . esc_html__( 'Section 2', 'waves') . '"][/vc_accordion_tab]',
    'js_view' => 'VcAccordionView',
));