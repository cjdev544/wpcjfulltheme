<?php
// https://codex.wordpress.org/Dashboard_Witgets_API
// https://codex.wordpress.org/Plugin_API/Admin_Screen_Reference
// https://codex.wordpress.org/Administration_Screens
// https://codex.wordpress.org/Adding_Administration_Menus

if(!function_exists('cjtheme_add_editor_styles')):
    function cjtheme_add_editor_styles() {
        global $google_fonts;
        add_editor_style($google_fonts);
        add_editor_style('css/custom_properties.css');
        add_editor_style('css/custom_editor_style.css');
    }
endif;
add_action( 'admin_init', 'cjtheme_add_editor_styles');


if(!function_exists('cjtheme_user_contactmethods')):
    function cjtheme_user_contactmethods() {
        $data_user['facebook']=__('Facebook', 'cjtheme');
        $data_user['twitter']=__('Twitter', 'cjtheme');
        return $data_user;
    }
endif;
add_filter( 'user_contactmethods', 'cjtheme_user_contactmethods');