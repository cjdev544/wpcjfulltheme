<?php

if(!function_exists('cjtheme_customize_register')):
    function cjtheme_customize_register($wp_customize) {
        $wp_customize->get_setting('blogname')->transport='postMessage';
        $wp_customize->get_setting('blogdescription')->transport='postMessage';

        if(isset($wp_customize->selective_refresh)) {
            $wp_customize->selective_refresh->add_partial('blogname', array(
                'selector' => '.WP-Header-title',
                'render_callback' => 'cjtheme_customize_blogname'
            ));
            $wp_customize->selective_refresh->add_partial('blogdescription', array(
                'selector' => '.WP-Header-description',
                'render_callback' => 'cjtheme_customize_blogdescription'
            ));
        }
    }
endif;
add_action('customize_register', 'cjtheme_customize_register');



function cjtheme_customize_blogname() {
    bloginfo('name');
}

function cjtheme_customize_blogdescription() {
    bloginfo('description');
}
