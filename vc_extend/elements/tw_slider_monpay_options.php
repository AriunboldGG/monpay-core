<?php 
global $waves_element_options;

$params=array(
    array(
        "type" => "dropdown",
        "heading" => esc_html__("Layout Style", 'waves'),
        'group' => esc_html($waves_element_options['groups']['slider']),
        "param_name" => "layout",
        'value' => array(
            esc_html__( 'Default', 'waves') => '',
            esc_html__( 'With Icon Box', 'waves') => 'with-icon-box',
        ),
        'std' => ''
    ),
);
$params=array_merge(
    $params,
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
$params=waves_rep_param_def($params,array(
    'tw_dimension_type'=>'fullscreen-offset',
    'uk_light'=>'true',
    'custom_class'=>'tw-page-title-only-bg',
    'nav'=>'true',
    'animation_customize'=>'true',
    'animation_custom'=>'target:.tw-heading>*; cls:uk-animation-slide-bottom-medium; delay: 400;',
));
vc_map(array(
    'name' => esc_html__( 'Slider Monpay', 'waves'),
    "description" => esc_html__( "FullScreen or Custom Height Slider.", 'waves' ),
    'base' => 'tw_slider_monpay',
    'show_settings_on_create' => false,
    'is_container' => true,
    'icon' => '', // Simply pass url to your icon here
    'category' => 'ThemeWaves',
    'params' => $params,
    'custom_markup' => '<div class="wpb_accordion_holder wpb_holder clearfix vc_container_for_children" data-tw-slider-item="' . esc_html__('Slide', 'waves') . '">%tw_slider_content%</div><div class="tab_controls" style="width: 100%; margin-top: 20px;"><a class="add_tab" title="' . esc_html__('Add slide', 'waves') . '" style="color: white;"><i class="vc-composer-icon vc-c-icon-add"></i> <span class="tab-label">' . esc_html__('Add slide', 'waves') . '</span></a></div>',
    'default_content' => '[tw_slider_item title="Title"][tw_slider_item title="Title"][tw_slider_item title="Title"]',
    'js_view' => 'IctSliderView',
));

class WPBakeryShortCode_tw_slider_monpay extends WPBakeryShortCode{}