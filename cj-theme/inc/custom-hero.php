<?php

if(!function_exists('cjtheme_hero_image')):
    function cjtheme_hero_image() {
        // Get de front page ID
        $front_page_ID = get_option('page_on_front');
        // Get Image ID
        $img_ID = get_field('imagen_hero', $front_page_ID);
        // Get Image
        $img = wp_get_attachment_image_src($img_ID, 'full')[0];
        // Style CSS
        wp_register_style('custom', false);
        wp_enqueue_style('custom');

        $img_hero_css = "
            body.home .Header {
                background-image: linear-gradient(rgba(0,0,0,.75), rgba(0,0,0,.75)), url($img);
                background-attachment: fixed;
            }
        ";

        wp_add_inline_style('custom', $img_hero_css);
    }
endif;
add_action( 'init', 'cjtheme_hero_image');