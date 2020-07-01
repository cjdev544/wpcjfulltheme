<?php 
    if(!function_exists('cjtheme_excerpt_more')):
        function cjtheme_excerpt_more() {
            return '<a href="'.get_permalink().'">'.__(' Leer más...', 'cjtheme').'<i class="fab fa-readme"></i></a>';
        }
    endif;
    add_filter('excerpt_more', 'cjtheme_excerpt_more');

    if(!function_exists('cjtheme_excerpt_length')):
        function cjtheme_excerpt_length() {
            return 40;
        }
    endif;
    add_filter('excerpt_length', 'cjtheme_excerpt_length');
?>