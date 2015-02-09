<?php
/*Menu functions*/


register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'primary-menu' ),
) );

require_once('wp_bootstrap_navwalker.php');

add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary Menu', 'test' ) );
        } endif;


function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . 'bootstrap-3.3.2-dist/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );
function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . 'bootstrap-3.3.2-dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

/*Featured Images*/

add_theme_support('post-thumbnails');

?>