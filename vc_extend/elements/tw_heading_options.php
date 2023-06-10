<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Sub Title', 'waves'),
        'param_name' => 'sub_title',
        'value' => esc_html__( 'Your sub title', 'waves'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Main Title', 'waves'),
        'param_name' => 'title',
        'value' => esc_html__( 'Your Heading', 'waves'),
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
        'type' => 'dropdown',
        'heading' => esc_html__( 'Add Line?', 'waves'),
        'param_name' => 'flipbox_line',
        'value' => array(
            esc_html__( 'Enable', 'waves') => 'line',
            esc_html__( 'Disable', 'waves') => 'unline'
        ),
        // 'std' => 'flipbox',
        // 'dependency' => array(
        //     'element' => 'flipbox',
        //     'value' => array( 'flipbox' ),
        // ),
    ),
    array(
        'type' => 'textarea_html',
        'heading' => esc_html__( 'Description', 'waves'),
        'param_name' => 'content',
        'std' => 'Your Description',
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Heading Choose Align', 'waves'),
        'param_name' => 'title_align',
        'value' => array(
            esc_html__( 'Center', 'waves') => 'text-center',
            esc_html__( 'Left', 'waves') => 'text-left',
            esc_html__( 'Right', 'waves') => 'text-right'
        ),
        'std' => 'text-center',
    ),
    // array(
    //     'type' => 'dropdown',
    //     'heading' => esc_html__( 'Heading Main Title Max Width', 'waves'),
    //     'param_name' => 'main_title_max_width',
    //     'value' => array(
    //         esc_html__( '1/2', 'waves') => 'col-lg-6',
    //         esc_html__( '2/3', 'waves') => 'col-lg-8',
    //         esc_html__( 'Full', 'waves') => 'col'
    //     ),
    //     'std' => 'col',
    // ),
    /**button */
    array(
        'type' => 'vc_link',
        'heading' => esc_html__('Button Link & Text', 'waves'),
        'param_name' => 'link',
        'value' => esc_html__('url:#|title:Your%20Button', 'waves'),
        "admin_label" => true
    ),
    array(
        'type' => 'attach_image',
        'heading' => esc_html__( 'Upload Icon', 'waves'),
        'description' => esc_html__( 'Default Marker located in lvly/assets/images directory', 'waves'),
        'param_name' => 'image',
        'value' => ''
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Heading", 'waves'),
    "base" => "tw_heading",
    "class" => "",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_heading extends WPBakeryShortCode{
    /**
    * Used to get field name in vc_map function for google_fonts, font_container and etc..
    *
    * @param $key
    *
    * @since 4.4
    * @return bool
    */
    protected function getField( $key ) {
            return isset( $this->fields[ $key ] ) ? $this->fields[ $key ] : false;
    }

    /**
    * Get param value by providing key
    *
    * @param $key
    *
    * @since 4.4
    * @return array|bool
    */
    protected function getParamData( $key ) {
            return WPBMap::getParam( $this->shortcode, $this->getField( $key ) );
    }
}