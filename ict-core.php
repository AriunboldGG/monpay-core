<?php
/**
 * Plugin Name: Monpay - Core Plugin
 * Plugin URI:  http://www.themewaves.com/
 * Description: Extend Visual Composer, Post Types and Widgets.
 * Version:     1.0.0
 * Author:      Themewaves
 * Author URI:  https://themeforest.net/user/themewaves
 * Text Domain: waves
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 * 
 *  
 * @package   ict-core
 * @author    ThemeWaves
 * @license   GPL-2.0+
 * @link      themeforest.net/user/themewaves
 * @copyright 2017 Themewaves
 */
 
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
define('PLUGINNAME', 'waves');
define('ICT_CORE_PLUGIN_DIR', trailingslashit(plugin_dir_url( __FILE__ )));
define('ICT_CORE_PLUGIN_PATH', trailingslashit(plugin_dir_path( __FILE__ )));
if (!function_exists('ict_core_textdomain')){
    add_action( 'plugins_loaded', 'ict_core_textdomain');
    function ict_core_textdomain(){
        load_plugin_textdomain( PLUGINNAME, FALSE, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
    }
}
add_action('wp_enqueue_scripts', 'waves_front_scripts', 20);
function waves_front_scripts (){
    wp_enqueue_script('waves-front-scripts', ICT_CORE_PLUGIN_DIR . 'assets/js/front-scripts.js', array('jquery'), false, true);
}
/**
* Functions
*/
require_once ICT_CORE_PLUGIN_PATH . 'functions.php';
/**
* Custom posts type.
*/
require_once ICT_CORE_PLUGIN_PATH . 'custom-post-type.php';

/**
* Metaboxes.
*/
// if ( is_admin() ) {
    // require_once ( ICT_CORE_PLUGIN_PATH . 'metabox/post-metabox.php' );
    // require_once ( ICT_CORE_PLUGIN_PATH . 'metabox/metabox-render.php' );
    // require_once ( ICT_CORE_PLUGIN_PATH . 'metabox/port-options.php' );
    // require_once ( ICT_CORE_PLUGIN_PATH . 'metabox/post-format.php' );
    // require_once ( ICT_CORE_PLUGIN_PATH . 'metabox/page-options.php' );
    // require_once ( ICT_CORE_PLUGIN_PATH . 'metabox/job-options.php' );
    // require_once ( ICT_CORE_PLUGIN_PATH . 'metabox/prod-options.php' );
// }

/**
* Widgets.
*/
$wavesWidgets=waves_scandir(ICT_CORE_PLUGIN_PATH.'widgets/');
if (is_array($wavesWidgets)) {
    foreach($wavesWidgets as $widget) {
        $widgetFile=ICT_CORE_PLUGIN_PATH.'widgets/'.$widget;
        if (file_exists($widgetFile)) {require_once($widgetFile);}
    }
}




/**
* Customizer Visual Composer
*/
function waves_visual_composer() {
	require_once ICT_CORE_PLUGIN_PATH . 'vc_extend/init.php';
}
add_action( 'vc_before_init', 'waves_visual_composer' );

/**
* Social Share
*/
function waves_entry_share( $layout = '' ) {
    if( $layout == 'layout-2' ) {
        echo  '<li>';
            echo  '<h3 class="portfolio-subtitle">' . esc_html__( 'Share', 'waves' ) . '</h3>';
            echo  '<div class="portfolio-meta">';
                echo  '<div class="entry-share" data-id="' . esc_attr( get_the_id() ) . '">';
                    echo  '<a class="facebook" href="' . esc_url( get_permalink() ) . '" title="Share this">'. esc_html__( 'Facebook', 'waves' ) . ',</a>&nbsp;';
                    echo  '<a class="twitter" href="' . esc_url( get_permalink() ) . '" title="Tweet" data-title="' . esc_attr( get_the_title() ) . '">' . esc_html__( 'Twitter', 'waves' ) . ',</a>&nbsp;';
                    echo  '<a class="google" href="' . esc_url( get_permalink() ) . '" title="Share">' . esc_html__( 'Google', 'waves' ) . '</a>';
                echo  '</div>';
            echo  '</div>';
        echo  '</li>';
    } else {
        echo '<div class="entry-share tw-socials social-hover-color" data-id="' . esc_attr( get_the_id() ) . '">';
            $post_image = ict_image( 'full', true );
            echo '<a class="twitter-share"   href="' . esc_url( get_permalink() ) . '" title="' . esc_html__( 'Tweet', 'waves' ) . '" data-title="' . esc_attr( get_the_title() ) . '" data-id="' . esc_attr( get_the_id() ) . '" data-ajaxurl="' . esc_url( home_url( '/' ) ) . '"><img class="uk-preserve" src="' . ICT_DIR . '/assets/images/twitter-icon.svg " data-uk-svg>/a>';  
            echo '<a class="facebook-share"  href="' . esc_url( get_permalink() ) . '" title="' . esc_html__( 'Share this', 'waves' ) . '"><img class="uk-preserve" src="' . ICT_DIR . '/assets/images/facebook-icon.svg " data-uk-svg></a>';
            echo '<a class="pinterest-share" href="' . esc_url( get_permalink() ) . '" title="' . esc_html__( 'Pin It', 'waves' ) . '" data-title="' . esc_attr( get_the_title() ) . '" data-image="' . esc_attr( $post_image['url'] ) . '"><img class="uk-preserve" src="' . ICT_DIR . '/assets/images/pinterest-icon.svg " data-uk-svg></a>';
        echo '</div>';
    }
}
add_action( 'waves_entry_share', 'waves_entry_share' );


/* Theme Filter added on Plugin */

add_filter('the_content', 'do_shortcode');
add_filter('widget_text', 'do_shortcode');