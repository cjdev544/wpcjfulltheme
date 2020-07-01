<?php 
// https://codex.wordpress.org/Customizing_the_Login_Form

if(!function_exists('cjtheme_login_scripts')):
    function cjtheme_login_scripts() {
        wp_enqueue_style('custom-propierties', get_stylesheet_directory_uri().'/css/custom_properties.css', array('custom-properties'), '1.0.0', 'all');
        wp_enqueue_style('login-page-css', get_template_directory_uri().'/css/login_page.css', array('custom-properties'), '1.0.0', 'all');

        wp_enqueue_script('jquery');
        wp_enqueue_script('login_page', get_template_directory_uri().'/js/login_page.js', array('jquery'), '1.0.0', true);
    }
endif;
add_action( 'login_enqueue_scripts', 'cjtheme_login_scripts');


if(!function_exists('cjtheme_login_logo_url')):
    function cjtheme_login_logo_url() {
        return home_url();
    }
endif;
add_filter( 'login_headerurl', 'cjtheme_login_logo_url');


// if(!function_exists('cjtheme_login_logo_url_title')):
//     function cjtheme_login_logo_url_title() {
//         return get_bloginfo('name').'|'.get_bloginfo('description');
//     }
// endif;
// add_filter( 'login_headertitle', 'cjtheme_login_logo_url_title');



function wpdoc_customize_login_headertext( $headertext ) {
    $headertext = esc_html__( 'Saludos de prueba', 'cjtheme' );
    return $headertext;
}
add_filter( 'login_headertext', 'wpdoc_customize_login_headertext' );