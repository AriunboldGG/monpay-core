<?php 
global $waves_element_options;
$params=array_merge(
    $waves_element_options['general']
);
vc_remove_param( "vc_row_inner", "rtl_reverse" );
vc_remove_param( "vc_row_inner", "gap" );
vc_remove_param( "vc_row_inner", "equal_height" );
vc_remove_param( "vc_row_inner", "content_placement" );
vc_remove_param( "vc_row_inner", "el_id" );
vc_remove_param( "vc_row_inner", "disable_element" );
vc_remove_param( "vc_row_inner", "el_class" );
vc_remove_param( "vc_row_inner", "css" );
vc_add_params( 'vc_row_inner', $params );
vc_map_update( 'vc_row_inner', array('js_view' => 'ICTRowInnerView') );