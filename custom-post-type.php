<?php
if ( ! defined( 'WPINC' ) ) {
	die;
}

/* * *********************** */
/* Attachment Category */
/* * *********************** */
if (!function_exists('tw_attachment_cat_register')){
    add_action('init', 'tw_attachment_cat_register', 10);
    function tw_attachment_cat_register() {
        register_taxonomy("attachment_cat", array("attachment"), array("hierarchical" => true, "label" => esc_html__("Media Categories", 'waves'), "singular_label" => esc_html__("Media Category", 'waves'), 'rewrite' => array( 'slug' => 'attachment_category')));
    }
} 
 
/* * *********************** */
/* Custom post type: Partner */
/* * *********************** */
// if(!post_type_exists( 'partner' )){
//     if (!function_exists('tw_partner_register')){
//         add_action('init', 'tw_partner_register', 10);
//         function tw_partner_register() {
//             $slug = 'partner';
//             if(function_exists('waves_option')){
//                 $slug = waves_option('partner_slug', 'partner');
//             }
             
//             $labels = array(
//                 'name' => esc_html__('Partners','waves'),
//                 'singular_name' => esc_html__('Partner', 'waves'),
//                 'add_new' => esc_html__('Add New', 'waves'),
//                 'add_new_item' => esc_html__('Add New Partner', 'waves'),
//                 'edit_item' => esc_html__('Edit Partner', 'waves'),
//                 'new_item' => esc_html__('New Partner', 'waves'),
//                 'all_items' => esc_html__('All Partners', 'waves'),
//                 'view_item' => esc_html__('View Partner', 'waves'),
//                 'search_items' => esc_html__('Search Partners', 'waves'),
//                 'not_found' =>  esc_html__('No Partner found', 'waves'),
//                 'not_found_in_trash' => esc_html__('No Partner found in Trash', 'waves'),
//                 'menu_name' => esc_html__('Partners', 'waves')
//             );    
//             $args = array(
//                 'labels' => $labels,
//                 'public' => true,
//                 'has_archive' => false,
//                 'publicly_queryable' => true,
//                 'exclude_from_search' => false,
//                 'show_ui' => true,
//                 'hierarchical' => false,
//                 'show_in_rest'  => true,
//                 'rest_base' => $slug . 's',
//                 'menu_icon' => 'dashicons-tagcloud',
//                 'rewrite' => array( 'slug' => $slug),
//                 'supports' => array('title', 'editor', 'author', 'page-attributes', 'thumbnail', 'custom-fields', 'revisions')
//             );
//             register_post_type('partner', $args);
//             register_taxonomy("partner_cat", array("partner"), array("hierarchical" => true, "label" => esc_html__("Partner Categories", 'waves'), "singular_label" => esc_html__("Partner Category", 'waves'), 'rewrite' => array( 'slug' => $slug.'_category')));
//             register_taxonomy("partner_sale", array("partner"), array("hierarchical" => true, "label" => esc_html__("Partner Sales", 'waves'), "singular_label" => esc_html__("Partner Sales", 'waves'), 'rewrite' => array( 'slug' => $slug.'_category')));
//             register_taxonomy("partner_tag", array("partner"), array("hierarchical" => true, "label" => esc_html__("Partner Tags", 'waves'), "singular_label" => esc_html__("Partner Tags", 'waves'), 'rewrite' => array( 'slug' => $slug.'_tag')));
//             flush_rewrite_rules();
//         }
//     }

//     if (!function_exists('tw_partner_edit_columns')){
//         add_filter('manage_edit-partner_columns', 'tw_partner_edit_columns');
//         function tw_partner_edit_columns($columns){	
//             $newcolumns = array(
//                 "cb" => "<input type=\"checkbox\" />",
//                 "title" => esc_html__("Partner Title", 'waves'),
//                 "partner_cat" => esc_html__("Categories", 'waves'),
//                 "partner_sale" => esc_html__("Sales", 'waves'),
//                 "partner_tag" => esc_html__("Tags", 'waves'),
//             );
//             $columns= array_merge($newcolumns, $columns);
//             return $columns;
//         }
//     }
// }
 
/* * *********************** */
/* Custom post type: Banner */
/* * *********************** */
if(!post_type_exists( 'banner' )){
    if (!function_exists('tw_banner_register')){
        add_action('init', 'tw_banner_register', 10);
        function tw_banner_register() {
            $slug = 'banner';
            if(function_exists('waves_option')){
                $slug = waves_option('banner_slug', 'banner');
            }
             
            $labels = array(
                'name' => esc_html__('Banner','waves'),
                'singular_name' => esc_html__('Banner', 'waves'),
                'add_new' => esc_html__('Add New', 'waves'),
                'add_new_item' => esc_html__('Add New Banner', 'waves'),
                'edit_item' => esc_html__('Edit Banner', 'waves'),
                'new_item' => esc_html__('New Banner', 'waves'),
                'all_items' => esc_html__('All Banners', 'waves'),
                'view_item' => esc_html__('View Banner', 'waves'),
                'search_items' => esc_html__('Search Banners', 'waves'),
                'not_found' =>  esc_html__('No Banner found', 'waves'),
                'not_found_in_trash' => esc_html__('No Banner found in Trash', 'waves'),
                'menu_name' => esc_html__('Banners', 'waves')
            );    
            $args = array(
                'labels' => $labels,
                'public' => true,
                'has_archive' => false,
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'show_ui' => true,
                'hierarchical' => false,
                'show_in_rest'  => true,
                'rest_base' => $slug . 's',
                'menu_icon' => 'dashicons-tagcloud',
                'rewrite' => array( 'slug' => $slug),
                'supports' => array('title', 'editor', 'author', 'page-attributes', 'thumbnail', 'custom-fields', 'revisions')
            );
            register_post_type('banner', $args);
            // register_taxonomy("banner_cat", array("banner"), array("hierarchical" => true, "label" => esc_html__("Banner Categories", 'waves'), "singular_label" => esc_html__("Banner Category", 'waves'), 'rewrite' => array( 'slug' => $slug.'_category')));
            // register_taxonomy("banner_sale", array("banner"), array("hierarchical" => true, "label" => esc_html__("Banner Sales", 'waves'), "singular_label" => esc_html__("Banner Sales", 'waves'), 'rewrite' => array( 'slug' => $slug.'_category')));
            // register_taxonomy("banner_tag", array("banner"), array("hierarchical" => true, "label" => esc_html__("Banner Tags", 'waves'), "singular_label" => esc_html__("Banner Tags", 'waves'), 'rewrite' => array( 'slug' => $slug.'_tag')));
            flush_rewrite_rules();
        }
    }

    if (!function_exists('tw_banner_edit_columns')){
        add_filter('manage_edit-banner_columns', 'tw_banner_edit_columns');
        function tw_banner_edit_columns($columns){	
            $newcolumns = array(
                "cb" => "<input type=\"checkbox\" />",
                "title" => esc_html__("Banner Title", 'waves'),
                "banner_cat" => esc_html__("Categories", 'waves'),
                "banner_sale" => esc_html__("Sales", 'waves'),
                "banner_tag" => esc_html__("Tags", 'waves'),
            );
            $columns= array_merge($newcolumns, $columns);
            return $columns;
        }
    }
}


/* * *********************** */
/* Custom post type: ICT Content Block */
/* * *********************** */
if(!post_type_exists( 'lovelyblock' )){

    if (!function_exists('tw_lovelyblock_register')){
        add_action('init', 'tw_lovelyblock_register', 10);
        function tw_lovelyblock_register() {
            $slug = 'lovelyblock';
             
            $labels = array(
                'name' => esc_html__('Content Blocks','waves'),
                'singular_name' => esc_html__('Content Block', 'waves'),
                'add_new' => esc_html__('Add New', 'waves'),
                'add_new_item' => esc_html__('Add New', 'waves'),
                'edit_item' => esc_html__('Edit Block', 'waves'),
                'new_item' => esc_html__('New Content Block', 'waves'),
                'all_items' => esc_html__('Content Blocks', 'waves'),
                'view_item' => esc_html__('View Content Block', 'waves'),
                'search_items' => esc_html__('Search Content Blocks', 'waves'),
                'not_found' =>  esc_html__('No Content Block found', 'waves'),
                'not_found_in_trash' => esc_html__('No Content Block found in Trash', 'waves'),
                'menu_name' => esc_html__('Content Block', 'waves')
            );    
            $args = array(
                'labels' => $labels,
                'public' => true,
                'has_archive' => false,
                'publicly_queryable' => true,
                'exclude_from_search' => true,
                'show_ui' => true,
                'hierarchical' => false,
                'show_in_rest'  => true,
                'rest_base' => $slug . 's',
                'menu_icon' => 'dashicons-tagcloud',
                'rewrite' => array( 'slug' => $slug),
                'supports' => array('title', 'editor', 'author', 'revisions')
            );
            register_post_type('lovelyblock', $args);
            register_taxonomy("lovelyblock_cat", array("lovelyblock"), array("hierarchical" => true, "label" => esc_html__("Block Categories", 'waves'), "singular_label" => esc_html__("Block Category", 'waves'), 'rewrite' => array( 'slug' => $slug.'_category')));
            flush_rewrite_rules();
        }
    }

    if (!function_exists('tw_lovelyblock_edit_columns')){
        add_filter('manage_edit-lovelyblock_columns', 'tw_lovelyblock_edit_columns');
        function tw_lovelyblock_edit_columns($columns){	
            $newcolumns = array(
                "cb" => "<input type=\"checkbox\" />",
                "title" => esc_html__("Block Title", 'waves'),
                "lovelyblock_cat" => esc_html__("Categories", 'waves'),
            );
            $columns= array_merge($newcolumns, $columns);
            return $columns;
        }
    }
}

add_action("manage_posts_custom_column", "ict_custom_columns");
function ict_custom_columns($column) {
    global $post;
    switch ($column) {
        case "partner_cat":
            echo get_the_term_list($post->ID, 'partner_cat', '', ', ', '');
        case "partner_sale":
            echo get_the_term_list($post->ID, 'partner_sale', '', ', ', '');
            break;
        case "partner_tag":
            echo get_the_term_list($post->ID, 'partner_tag', '', ', ', '');
            break;
        case "lovelyblock_cat":
            echo get_the_term_list($post->ID, 'lovelyblock_cat', '', ', ', '');
            break;
    }
}
        
add_action('restrict_manage_posts', 'ict_filter_post_type_by_taxonomy');
function ict_filter_post_type_by_taxonomy() {
	global $typenow;
        $post_types = array(
            'partner' => 'partner_cat',
            'partner' => 'partner_sale',
            'partner' => 'partner_tag',
            'lovelyblock' => 'lovelyblock_cat',
        );
        foreach($post_types as $post_type => $taxonomy){
            if ($typenow == $post_type) {
                    $selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
                    $info_taxonomy = get_taxonomy($taxonomy);
                    wp_dropdown_categories(array(
                            'show_option_all' => esc_html__( "All Categories", 'waves' ),
                            'taxonomy'        => $taxonomy,
                            'name'            => $taxonomy,
                            'hierarchical'    => 1,
                            'orderby'         => 'name',
                            'selected'        => $selected,
                            'show_count'      => true,
                            'hide_empty'      => true,
                    ));
            }
	}
}

 // Page Search
 if ( ! empty( $newData['acf']['page_search'] ) && $newData['acf']['page_search'] === 'enable' && ! empty( $newData['acf']['page_search'] ) ) { 
    $newData['acf']['page_search'] = get_search_form(( $newData['acf']['page_search'] ));
    $query = new WP_Query( array( 's' => 'keyword' ) );
} 

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_616f6c3f373aa',
        'title' => 'partner',
        'fields' => array(
            array(
                'key' => 'field_6170ead942c49',
                'label' => 'Товч мэдээлэл',
                'name' => 'tovch_medeelel',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Товч мэдээлэл',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_6170eb2971e70',
                'label' => 'Агуулга',
                'name' => 'Content',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_6170eb970d6cb',
                'label' => 'Веб сайт холбоос',
                'name' => 'web_link',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_6170ebc70d6cc',
                'label' => 'Утас',
                'name' => 'phone',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_6170ebd90d6cd',
                'label' => 'И-мэйл',
                'name' => 'mail',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_6170dd485e2f4',
                'label' => 'googlemap',
                'name' => 'googlemap',
                'type' => 'google_map_multi',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'center_lat' => '47.920324',
                'center_lng' => '106.8831928',
                'zoom' => '',
                'height' => '',
                'max_pins' => 20,
            ),
            array(
                'key'     => 'field_page_search',
                'label'   => 'Search',
                'name'    => 'page_search',
                'type'    => 'select',
                'choices' => array(
                    'enable'  => 'Enable',
                    'disable' => 'Disable',
                ),
                'default_value' => 'disable',
                'parent' => 'tw_page_metabox',
            ),
            array(
                'key'     => 'field_page_title',
                'label'   => 'Page title',
                'name'    => 'page_title',
                'type'    => 'select',
                'choices' => array(
                    'disable' => 'Disable',
                    'enable'  => 'Enable',
                ),
                'std' => 'Enable',
                'parent' => 'tw_page_metabox',
            ),
            array(
                'key'           => 'field_page_title_grid',
                'label'         => 'Page title grid',
                'name'          => 'page_title_grid',
                'type'          => 'select',
                'choices' => array(
                    '5' => '5/12 + 7/12',
                    '7' => '7/12 + 5/12',
                ),
                'conditional_logic' => array(
                    array(
                        array(
                            'field'    => 'field_page_title',
                            'operator' => '==',
                            'value'    => 'enable',
                        ),
                    ),
                ),
                'parent' => 'tw_page_metabox',
            ),
            array(
                'key'    => 'field_page_title_sub',
                'label'  => 'Page sub title',
                'name'   => 'page_title_sub',
                'type'   => 'textarea',
                'conditional_logic' => array(
                    array(
                        array(
                            'field'    => 'field_page_title',
                            'operator' => '==',
                            'value'    => 'enable',
                        ),
                    ),
                ),
                'parent' => 'tw_page_metabox',
            ),
            array(
                'key'     => 'field_page_title_type',
                'label'   => 'Page title type',
                'name'    => 'page_title_type',
                'type'    => 'select',
                'choices' => array(
                    'color' => 'Color',
                    'gradient_color' => 'Gradient Color /static/',
                    'image' => 'Image',
                ),
                'default_value' => 'color',
                'conditional_logic' => array(
                    array(
                        array(
                            'field'    => 'field_page_title',
                            'operator' => '==',
                            'value'    => 'enable',
                        ),
                    ),
                ),
                'parent' => 'tw_page_metabox',
            ),
            array(
                'key'   => 'field_page_title_color',
                'label' => 'Page title color',
                'name'  => 'page_title_color',
                'type'  => 'color_picker',
                'default_value' => '#F5F5F5',
                'conditional_logic' => array(
                    array(
                        array(
                            'field'    => 'field_page_title_type',
                            'operator' => '==',
                            'value'    => 'color',
                        ),
                    ),
                ),
                'parent' => 'tw_page_metabox',
            ),
            array(
                'key'           => 'field_page_title_image',
                'label'         => 'Page title image',
                'name'          => 'page_title_image',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'full',
                'conditional_logic' => array(
                    array(
                        array(
                            'field'    => 'field_page_title_type',
                            'operator' => '==',
                            'value'    => 'image',
                        ),
                    ),
                ),
                'parent' => 'tw_page_metabox',
            ),
            array(
                'key'     => 'field_page_title_right_side_image_type',
                'label'   => 'Page title right side image?',
                'name'    => 'page_title_right_side_image_type',
                'type'    => 'select',
                'choices' => array(
                    'no'  => 'No',
                    'yes' => 'Yes',
                ),
                'conditional_logic' => array(
                    array(
                        array(
                            'field'    => 'field_page_title',
                            'operator' => '==',
                            'value'    => 'enable',
                        ),
                    ),
                ),
                'parent' => 'tw_page_metabox',
            ),
            array(
                'key'           => 'field_page_title_right_side_image',
                'label'         => 'Page title right side image',
                'name'          => 'page_title_right_side_image',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'full',
                'conditional_logic' => array(
                    array(
                        array(
                            'field'    => 'field_page_title_right_side_image_type',
                            'operator' => '==',
                            'value'    => 'yes',
                        ),
                    ),
                ),
                'parent' => 'tw_page_metabox',
            ),
            array(
                'key' => 'field_page_title_content_color',
                'label' => 'Page title content color',
                'name' => 'page_title_content_color',
                'type' => 'select',
                'choices' => array(
                    'black' => 'Black',
                    'white' => 'White',
                ),
                'conditional_logic' => array(
                    array(
                        array(
                            'field'    => 'field_page_title',
                            'operator' => '==',
                            'value'    => 'enable',
                        ),
                    ),
                ),
                'parent' => 'tw_page_metabox',
            ),
            array(
                'key'     => 'field_page_submenu_type',
                'label'   => 'Page submenu type',
                'name'    => 'page_submenu_type',
                'type'    => 'select',
                'choices' => array(
                    'disable' => 'Disable',
                    'enable'  => 'Enable',
                ),
                'parent' => 'tw_page_metabox',
            ),
            // array(
            //     'key'     => 'field_page_submenu',
            //     'label'   => 'Page submenu',
            //     'name'    => 'page_submenu',
            //     'type'    => 'select',
            //     'choices' => $custom_menus,
            //     'default_value' => 'enable',
            //     'conditional_logic' => array(
            //         array(
            //             array(
            //                 'field'    => 'field_page_submenu_type',
            //                 'operator' => '==',
            //                 'value'    => 'enable',
            //             ),
            //         ),
            //     ),
            //     'parent' => 'tw_page_metabox',
            // ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'partner',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
endif;