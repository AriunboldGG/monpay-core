<?php
function waves_product_categories_widget_register() {
    register_widget("waves_product_categories_widget");
}
add_action( 'widgets_init', 'waves_product_categories_widget_register' );
class waves_product_categories_widget extends WP_Widget {
    
    function __construct() {
        $widget_ops = array('classname' => 'stylee-product-categories-widget widget woocommerce widget_product_categories', 'description' => 'display categories.');
        parent::__construct('stylee-product-categories-widget', 'Stylee: Product Categories', $widget_ops);
    }
    
    function widget( $args, $instance ) {
        global $ict_widget_product_cats;
        if( empty( $ict_widget_product_cats ) ){
            $ict_widget_product_cats = array();
        }
        extract( $args );
        extract(shortcode_atts(array(
            'title' => 'Бүтээгдэхүүний Ангилал',
            'type' => 'all',
            'product_cat' => '',
        ), $instance));
        $title = apply_filters( 'widget_title', $instance['title'] );
        /* Doing the Validate */
        $allowed_tags = array(
            'aside' => array(
                    'id' => array(),
                    'class' => array()
            ),
            'div' => array(
                    'id' => array(),
                    'class' => array()
            ),
            'h3' => array(
                'class' => array()
            ),
            'span' => array(
                'class' => array()
            )
        );

        $term_args = array(
            // 'fields'       => 'ids',
            'parent'       => 0,
            // 'hierarchical' => true,
            'hide_empty'   => true,
        );
        if ( $type == 'include' ) {
            $term_args['include'] = array( $product_cat );
        } elseif ( $type == 'exclude' ) {
            $term_args['exclude'] = array( $product_cat );
        }
        $parent_product_cats = get_terms( 'product_cat', $term_args );
        
        $output = '';
        $page_cat_id_default = 0;
        $page_cat_id = 0;
        if ( is_product_category() ) {
            $qry_product_cat_slug = get_query_var( 'product_cat' );
            if ( $qry_product_cat_slug ) {
                $qry_crr_cat = get_term_by( 'slug', $qry_product_cat_slug, 'product_cat');

                if ( $qry_crr_cat && ! empty( $qry_crr_cat->term_id ) ) {
                    $page_cat_id_default = intval( $qry_crr_cat->term_id );
                }
                // if ( ! $show ) {
                    // while ( $qry_crr_cat && ! empty( $qry_crr_cat->parent ) ) {
                    //     $qry_crr_cat = get_term_by( 'id', $qry_crr_cat->parent, 'product_cat');
                    // }
                    if ( $qry_crr_cat ) {
                        if ( ! empty( $qry_crr_cat->parent ) ) {
                            $ancestors = get_ancestors( $qry_crr_cat->term_id, 'product_cat' );
                            if( ! empty( $ancestors[0] ) ){
                                $page_cat_id = $ancestors[0];
                            }
                        } elseif ( ! empty( $qry_crr_cat->term_id ) ) {
                            $page_cat_id = $qry_crr_cat->term_id;
                        }
                    }
                // }
            }
        }
        foreach( $parent_product_cats as $parent_product_cat ) {
            // if ( $show || empty( $page_cat_id ) || intval( $page_cat_id ) === intval( $parent_product_cat->term_id ) || in_array( intval( $parent_product_cat->term_id ), $ict_widget_product_cats ) ) {
            if ( intval( $page_cat_id ) === intval( $parent_product_cat->term_id ) || in_array( intval( $parent_product_cat->term_id ), $ict_widget_product_cats ) ) {
                $output .= '<li class="cat-item cat-parent">';
                    $parent_selected = ict_is_filter_active( 'filter_product_cat', $parent_product_cat->term_id ) || $page_cat_id_default === intval( $parent_product_cat->term_id );
                    $output .= '<a href="#" class="ict-filter-link" data-filter="filter_product_cat" data-filter-val="'.$parent_product_cat->term_id.'">'.$parent_product_cat->name.'</a>';
                    $output .= '<span class="count">('.$parent_product_cat->count.')</span>';
                    $child_product_cats = get_terms( 'product_cat', array( 'parent' => $parent_product_cat->term_id, 'hide_empty' => true, ) );
                    if ( $child_product_cats ) {
                        $output .= '<ul class="children">';
                            $output .= '<li class="cat-item select-all'.( $parent_selected?' chosen':'' ).'">';
                                $output .= '<a href="#" class="ict-filter-link" data-filter="filter_product_cat" data-filter-val="'.$parent_product_cat->term_id.'">Бүгд<span class="count">('.$parent_product_cat->count.')</span></a>';
                                // $output .= '<span class="count">('.$parent_product_cat->count.')</span>';
                            $output .= '</li>';
                            foreach ( $child_product_cats as $child_product_cat ) {
                                $child_selected = ict_is_filter_active( 'filter_product_cat', $child_product_cat->term_id ) || $page_cat_id_default === intval( $child_product_cat->term_id );
                                $output .= '<li class="cat-item'.( ( $parent_selected || $child_selected )?' chosen':'' ).'">';
                                    $output .= '<a href="#" class="ict-filter-link" data-filter="filter_product_cat" data-filter-val="'.$child_product_cat->term_id.'">'.$child_product_cat->name.'<span class="count">('.$child_product_cat->count.')</span></a>';
                                    // $output .= '<span class="count">('.$child_product_cat->count.')</span>';
                                $output .= '</li>';
                            }
                        $output .= '</ul>';
                    }
                $output .= '</li>';
            }
        }
        if ( $output ) {
            echo isset( $before_widget ) ? wp_kses( $before_widget, $allowed_tags ) : '';
            if ( ! empty( $title ) ) {
                echo wp_kses( $before_title, $allowed_tags ) . esc_html( $title ) . wp_kses( $after_title, $allowed_tags );
            }
                echo '<ul class="product-categories">';
                    echo $output;
                echo '</ul>';
            if ( isset( $after_widget ) ) {
                echo wp_kses( $after_widget, $allowed_tags );
            }
        }
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        /* Strip tags (if needed) and update the widget settings. */
        $instance['title']       = sanitize_text_field( $new_instance['title'] );
        $instance['type']        = strip_tags( $new_instance['type'] );
        // $instance['show']        = strip_tags( $new_instance['show'] );
        $instance['product_cat'] = strip_tags( $new_instance['product_cat'] );
        // $instance['hierarchical']   = strip_tags( $new_instance['hierarchical'] );
        // $instance['post_category']  = wp_unslash( $_REQUEST['post_category'] );
        return $instance;
    }

    function form($instance) {
        //Output admin widget options form
        extract(shortcode_atts(array(
            'title' => 'Бүтээгдэхүүний Ангилал',
            'type' => 'all',
            // 'show' => '',
            'product_cat' => '',
        ), $instance));
        $parent_product_cats = array(''=>'Сонгоно уу');
        $categories = get_terms( array(
            'orderby'    => 'name',
            'parent'     => 0,
            'pad_counts' => false,
            // 'hierarchical' => 1,
            'hide_empty'   => false,
        ) );
        foreach( $categories as $category ) {
            if ( $category->taxonomy == 'product_cat' ) {
                // $parent_product_cats[ $category->slug ] = $category->name;
                $parent_product_cats[ $category->term_id ] = $category->name;
            }
        } ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'waves');?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($title); ?>"  />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('type')); ?>"><?php esc_html_e('Type:', 'waves');?></label>
            <select class="widefat" id="<?php echo esc_attr($this->get_field_id('type')); ?>" name="<?php echo esc_attr($this->get_field_name('type')); ?>">
                <option value="all" <?php if ($type == 'all') print 'selected="selected"'; ?>><?php esc_html_e('Бүгдийг', 'waves');?></option>
                <option value="include" <?php if ($type == 'include') print 'selected="selected"'; ?>><?php esc_html_e('Сонгосоныг', 'waves');?></option>
                <option value="exclude" <?php if ($type == 'exclude') print 'selected="selected"'; ?>><?php esc_html_e('Сонгоогүйг', 'waves');?></option>
            </select>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('product_cat')); ?>"><?php esc_html_e('Categories:', 'waves');?></label>
            <select class="widefat" id="<?php echo esc_attr($this->get_field_id('product_cat')); ?>" name="<?php echo esc_attr($this->get_field_name('product_cat')); ?>"><?php
                foreach ( $parent_product_cats as $key => $val) {
                    echo '<option value="'.$key.'"'.($key == $product_cat ?' selected="selected"':'').'>'.$val.'</option>';
                } ?>
            </select>
        </p>
        <?php
    }
}