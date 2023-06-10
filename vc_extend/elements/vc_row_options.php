<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Content Width', 'waves'),
        'param_name' => 'content_width',
        'value' => array(
            esc_html__('100% - Fullwidth ', 'waves')      => 'container-fluid',
            esc_html__('1400px - Boxed Stretch', 'waves') => 'container',
        ),
        'std' => 'container',
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_remove_param( "vc_row", "rtl_reverse" );
vc_remove_param( "vc_row", "full_width" );
vc_remove_param( "vc_row", "gap" );
vc_remove_param( "vc_row", "full_height" );
vc_remove_param( "vc_row", "columns_placement" );
vc_remove_param( "vc_row", "equal_height" );
vc_remove_param( "vc_row", "content_placement" );
vc_remove_param( "vc_row", "video_bg" );
vc_remove_param( "vc_row", "video_bg_url" );
vc_remove_param( "vc_row", "video_bg_parallax" );
vc_remove_param( "vc_row", "parallax" );
vc_remove_param( "vc_row", "parallax_image" );
vc_remove_param( "vc_row", "parallax_speed_video" );
vc_remove_param( "vc_row", "parallax_speed_bg" );
vc_remove_param( "vc_row", "el_id" );
vc_remove_param( "vc_row", "disable_element" );
vc_remove_param( "vc_row", "el_class" );
vc_remove_param( "vc_row", "css" );
vc_remove_param( "vc_row", "css_animation" );
vc_add_params( 'vc_row', $params );
vc_map_update( 'vc_row', array('js_view' => 'ICTRowView') );