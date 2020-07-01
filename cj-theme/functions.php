<?php
/**
* CjTheme: Wordpress Theme functions and definitions
*
* @link https://developer.wordpress.org/themes/basic/theme-functions/	
*
* @package WordPress
* @subpackage cjtheme
* @since 1.0.0		
* @version 1.0.0 	
*/

// Global Variables
global $google_fonts;
global $font_awesome;
global $hamburgers;

$google_fonts = 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap';
$font_awesome='https://pro.fontawesome.com/releases/v5.10.0/css/all.css';
$hamburgers= 'https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css';


// ****************************************************
if(!isset($content_width)){
	$content_width=800;
}

if( !function_exists('cjtheme_scripts')):
	function cjtheme_scripts() {
        global $google_fonts;
        global $font_awesome;
		global $hamburgers;

		// Styles
		// Google Fonts
		wp_enqueue_style('fonts', $google_fonts, array(), '1.0.0', 'all');
        // Font-awesome
		wp_enqueue_style('font-awesome', $font_awesome, array(), '5.10.0', 'all');
		// Hamburgers
		wp_enqueue_style('hamburgers', $hamburgers, array(), '1.1.3', 'all');
		// Custom Properties
		wp_enqueue_style('custom-properties', get_template_directory_uri().'/css/custom-properties.css', array('fonts'), '1.0.0', 'all');
		// Custom Editor Style
		wp_enqueue_style('custom-editor-style', get_template_directory_uri().'/css/custom_editor_style.css', array('custom-properties'), '1.0.0', 'all');
		// LightBox
		if(is_page('galeria')):
			wp_enqueue_style('lightboxCSS', get_template_directory_uri().'/css/lightbox.min.css', array('fonts'), '2.11.0', 'all');
		endif;
		// BxSlider
		if(is_page('inicio')):
			wp_enqueue_style('BxSliderCSS', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css', array(), '4.2.12', 'all');
		endif;
		// Custom Style
		wp_enqueue_style('style', get_stylesheet_uri(), array('fonts', 'font-awesome', 'hamburgers', 'custom-properties', 'custom-editor-style'), '1.0.0', 'all');

    		// Scripts
		// Jquery
		wp_enqueue_script('jquery');
		// LightBox
		if(is_page('galeria')):
			wp_enqueue_script('lightboxJS', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.0', true);
		endif;
		// BxSliderJS
		if(is_page('inicio')):
			wp_enqueue_script('BxSliderJS', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array('jquery'), '4.2.12', true);
		endif;
        // Custom Scripts
		wp_register_script('custom-script', get_template_directory_uri() . '/script.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script('custom-script');
    }
    
endif;
    add_action('wp_enqueue_scripts', 'cjtheme_scripts');
    

// Menus
if(!function_exists('cjtheme_menus')):
    function cjtheme_menus() {
        register_nav_menus(array(
            'main_menu' => __('Menú Principal', 'cjtheme'),
            'social_menu' => __('Menú Redes Sociales', 'cjtheme')
        ));
    }
endif;
add_action('init', 'cjtheme_menus');


// Sidebars
if(!function_exists('cjtheme_sidebars')):
	function cjtheme_sidebars() {
		register_sidebar(array(
			'name' => __('Sidebar Principal', 'cjtheme'),
			'id' => 'main_sidebar',
			'description' => __('Este es el sidebar principal', 'cjtheme'),
			'before_widget' => '<article id="%1$" class="Widget %2$s">',
			'after_widget' => '</article>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));

		register_sidebar(array(
			'name' => __('Sidebar Segundario', 'cjtheme'),
			'id' => 'second_sidebar',
			'description' => __('Este es el sidebar principal', 'cjtheme'),
			'before_widget' => '<article id="%1$" class="Widget %2$s">',
			'after_widget' => '</article>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));
	}
endif;
add_action( 'widgets_init', 'cjtheme_sidebars');


// Suport
if(!function_exists('cjtheme_setup')):
	function cjtheme_setup() {
		load_theme_textdomain('cjtheme', get_template_directory_uri().'/languages');

		add_theme_support('post-thumbnails');

		add_theme_support('html5', array(
			'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption'
		));

        //https://codex.wwordpress.org/Post_Formats
        // Formatos diferentes para las entradas
		add_theme_support('post-formats', array(
			'aside',
			'gallery',
			'link',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat'
		));

		add_image_size('min', 350, 350, true);
		add_image_size('portrait', 350, 724, true);
		add_image_size('box', 400, 375, true);
		add_image_size('mid', 700, 400, true);
		add_image_size('big', 966, 644, true);

		//Permite que los themes y plugins administren el titulo, si se activa, no debe usarse wp_title()
		add_theme_support('title-tag');

		//Activa Feeds RSS
		add_theme_support('automatic-feed-links');

		//Ocultar Tags innecesarion del head
		//Version de Wordpress
		remove_action('wp_head', 'wp_generator');

		//Imprime sugerencias de recursos para los navegadores, para precargar, pre-renderizar y pre-conectarse a sitios web
		remove_action('wp_head', 'wp_resource_hints', 2);

		//Muestre el enlace al punto final del servicio Really Simple Discovery
		remove_action('wp_head', 'rsd_link');

		//Muestre el enlace al archivo de manifiesto de Windows Live Writer
		remove_action('wp_head', 'wlwmanifest_link');

		//Inyectar rel=shorlink en el encabezado si se define un shortlink para la pagina actual
		// remove_action('wp_head', 'wp_shortlink_wp_head');
		
		//Quitar script para soporte a emojis
		//remove_action('wp_print_styles'), 'print_emoji_styles');
		//remove_action('wp_head', 'print_emoji_detection_script', 7);

		//Quitar la barra de administracion en el frontend
		add_filter('show_admin_bar', '__return_false');

		// Utilizar el editor antiguo de WordPress
		add_filter('use_block_editor_for_post', '__return_false', 10);
	}
endif;
add_action( 'after_setup_theme', 'cjtheme_setup');


require_once get_template_directory().'/inc/custom-admin.php';

require_once get_template_directory().'/inc/custom-description.php';

require_once get_template_directory().'/inc/custom-excerpt.php';

require_once get_template_directory().'/inc/custom-header.php';

// require_once get_template_directory().'/inc/custom-hero.php';

require_once get_template_directory().'/inc/custom-login.php';

require_once get_template_directory().'/inc/customizer.php';

require_once get_template_directory().'/inc/querys.php';