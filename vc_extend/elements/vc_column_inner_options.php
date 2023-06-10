<?php 
global $waves_element_options;
$params=array_merge(
    $waves_element_options['general']
);
vc_remove_param( "vc_column_inner", "rtl_reverse" );
vc_remove_param( "vc_column_inner", "el_id" );
vc_remove_param( "vc_column_inner", "el_class" );
vc_remove_param( "vc_column_inner", "css" );
vc_remove_param( "vc_column_inner", "offset" );
vc_add_params( 'vc_column_inner', $params );