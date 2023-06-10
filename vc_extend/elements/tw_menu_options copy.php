<?php 
global $waves_element_options, $wp_registered_sidebars;

$custom_menus = array();
if ( 'vc_edit_form' === vc_post_param( 'action' ) && vc_verify_admin_nonce() ) {
	$menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
	if ( is_array( $menus ) && ! empty( $menus ) ) {
		foreach ( $menus as $single_menu ) {
			if ( is_object( $single_menu ) && isset( $single_menu->name, $single_menu->term_id ) ) {
				$custom_menus[ $single_menu->name ] = $single_menu->term_id;
			}
		}
	}
}

$params=array(
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Widget title', 'waves' ),
        'param_name' => 'title',
        'description' => esc_html__( 'What text use as a widget title. Leave blank to use default widget title.', 'waves' ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Menu', 'waves' ),
        'param_name' => 'nav_menu',
        'value' => $custom_menus,
        'description' => empty( $custom_menus ) ? sprintf( esc_html__( 'Custom menus not found. Please visit %sAppearance > Menus%s page to create new menu.', 'waves' ), '<b>', '</b>' ) : esc_html__( 'Select menu to display.', 'waves' ),
        'admin_label' => true,
        'save_always' => true,
    ),
    array(
        'type' => 'el_id',
        'heading' => esc_html__( 'Element ID', 'js_composer' ),
        'param_name' => 'el_id',
        'description' => sprintf( esc_html__( 'Enter element ID (Note: make sure it is unique and valid according to %sw3c specification%s).', 'js_composer' ), '<a href="https://www.w3schools.com/tags/att_global_id.asp" target="_blank">', '</a>' ),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Extra class name', 'js_composer' ),
        'param_name' => 'el_class',
        'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'js_composer' ),
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__('Scroll', 'waves'),
        'param_name' => 'scroll',
        'value' => array(esc_html__('Yes', 'waves') => 'true'),
        'std' => 'false',
    ),
    array(
        'type' => 'attach_image',
        'heading' => esc_html__( 'Choose Image', 'waves'),
        'param_name' => 'image',
        'value' => ''
    ),

);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Menu", 'waves'),
    "description" => esc_html__( "Main Blog Posts with Styles and Customizable options.", 'waves' ),
    "base" => "tw_menu",
    "class" => "",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_menu extends WPBakeryShortCode{}