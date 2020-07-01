<?php
/*
Plugin Name: Cj-gym -  Post Types
Plugin URI:
Description: Add Post Types in cj-gym Theme
Version: 1.0.0
Author: Jefferson Campos (CjDev)
Author URI:
Text Domain: cjtheme
*/

if(!defined('ABSPATH')) die();


// Class Post Type
if(!function_exists('cjtheme_class_post_type')):
    function cjtheme_class_post_type() {
        $labels = array(
            'name'                  => _x('Clases', 'Post Type Genelal Name', 'cjtheme'),
            'singular_name'         => _X('Clase', 'Post Type Singular Name', 'cjtheme'),
            'menu_name'             => __('Clases', 'cjtheme'),
            'name_admin_bar'        => __('Clase', 'cjtheme'),
            'archives'              => __('Archivo', 'cjtheme'),
            'attributes'            => __('Atributos', 'cjtheme'),
            'parent_item_colon'     => __('Clase Padre', 'cjtheme'),
            'all_items'             => __('Todas Las Clases', 'cjtheme'),
            'add_new_item'          => __('Agregar Clase', 'cjtheme'),
            'add_new'               => __('Agregar Clase', 'cjtheme'),
            'new_item'              => __('Nueva Clase', 'cjtheme'),
            'edit_item'             => __('Editar Clase', 'cjtheme'),
            'update_item'           => __('Actualizar Clase', 'cjtheme'),
            'view_item'             => __('Ver Clase', 'cjtheme'),
            'view_items'            => __('Ver Clases', 'cjtheme'),
            'search_items'          => __('Buscar Clase', 'cjtheme'),
            'not_found'             => __('No Encontrado', 'cjtheme'),
            'not_found_in_trash'    => __('No Encontrado En Papelera', 'cjtheme'),
            'featured_image'        => __('Imagen Destacada', 'cjtheme'),
            'set_featured_image'    => __('Guardar Imagen Destacada', 'cjtheme'),
            'remove_featured_image' => __('Eliminar Imagen Destacada', 'cjtheme'),
            'use_featured_image'    => __('Utilizar Imagen Destacada', 'cjtheme'),
            'insert_into_item'      => __('Insertar en Clase', 'cjtheme'),
            'uploaded_to_this_item' => __('Agregado en Clase', 'cjtheme'),
            'items_list'            => __('Lista de Clases', 'cjtheme'),
            'items_list_navigation' => __('Mavegación de Clases', 'cjtheme'),
            'filter_items_list'     => __('Filtrar Clases', 'cjtheme')
        );
        $args = array(
            'label'             => __('Clase', 'cjtheme'),
            'description'       => __('Clases para el Sitio Web', 'cjtheme'),
            'labels'            => $labels,
            'supports'          => array('title', 'editor', 'thumbnail'),
            'hierarchical'      => true, // true = post,  false = page
            'public'            => true,
            'show_ui'           => true,
            'show_in_menu'      => true,
            'menu_position'     => 6,
            'menu_icon'         => 'dashicons-welcome-learn-more',
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export'        => true,
            'has_archive'       => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'   => 'page'
        );
        register_post_type('cjtheme_class', $args);
    }
endif;
add_action( 'init', 'cjtheme_class_post_type', 0);


// Instructors Post Type
if(!function_exists('cjtheme_instrutor_post_type')):
    function cjtheme_instrutor_post_type() {
        $labels = array(
            'name'                  => _x('Instructores', 'Post Type Genelal Name', 'cjtheme'),
            'singular_name'         => _X('Instructor', 'Post Type Singular Name', 'cjtheme'),
            'menu_name'             => __('Instructores', 'cjtheme'),
            'name_admin_bar'        => __('Instructor', 'cjtheme'),
            'archives'              => __('Archivo', 'cjtheme'),
            'attributes'            => __('Atributos', 'cjtheme'),
            'parent_item_colon'     => __('Instructor Padre', 'cjtheme'),
            'all_items'             => __('Todos Los Instructores', 'cjtheme'),
            'add_new_item'          => __('Agregar Instructor', 'cjtheme'),
            'add_new'               => __('Agregar Instructor', 'cjtheme'),
            'new_item'              => __('Nuevo Instructor', 'cjtheme'),
            'edit_item'             => __('Editar Instructor', 'cjtheme'),
            'update_item'           => __('Actualizar Instructor', 'cjtheme'),
            'view_item'             => __('Ver Instructor', 'cjtheme'),
            'view_items'            => __('Ver Instructores', 'cjtheme'),
            'search_items'          => __('Buscar Instructor', 'cjtheme'),
            'not_found'             => __('No Encontrado', 'cjtheme'),
            'not_found_in_trash'    => __('No Encontrado En Papelera', 'cjtheme'),
            'featured_image'        => __('Imagen Destacada', 'cjtheme'),
            'set_featured_image'    => __('Guardar Imagen Destacada', 'cjtheme'),
            'remove_featured_image' => __('Eliminar Imagen Destacada', 'cjtheme'),
            'use_featured_image'    => __('Utilizar Imagen Destacada', 'cjtheme'),
            'insert_into_item'      => __('Insertar en Instructor', 'cjtheme'),
            'uploaded_to_this_item' => __('Agregado en Instructor', 'cjtheme'),
            'items_list'            => __('Lista de Instructores', 'cjtheme'),
            'items_list_navigation' => __('Mavegación de Instructores', 'cjtheme'),
            'filter_items_list'     => __('Filtrar Instructores', 'cjtheme')
        );
        $args = array(
            'label'             => __('Instructor', 'cjtheme'),
            'description'       => __('Instructores para el Sitio Web', 'cjtheme'),
            'labels'            => $labels,
            'supports'          => array('title', 'editor', 'thumbnail'),
            'hierarchical'      => true, // true = post,  false = page
            'public'            => true,
            'show_ui'           => true,
            'show_in_menu'      => true,
            'menu_position'     => 7,
            'menu_icon'         => 'dashicons-universal-access',
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export'        => true,
            'has_archive'       => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'   => 'page'
        );
        register_post_type('cjtheme_instructors', $args);
    }
endif;
add_action( 'init', 'cjtheme_instrutor_post_type', 0);


// Coments Post Type
if(!function_exists('cjtheme_coments_post_type')):
    function cjtheme_coments_post_type() {
        $labels = array(
            'name'                  => _x('Testimoniales', 'Post Type Genelal Name', 'cjtheme'),
            'singular_name'         => _X('Testimonial', 'Post Type Singular Name', 'cjtheme'),
            'menu_name'             => __('Testimoniales', 'cjtheme'),
            'name_admin_bar'        => __('Testimonial', 'cjtheme'),
            'archives'              => __('Archivo', 'cjtheme'),
            'attributes'            => __('Atributos', 'cjtheme'),
            'parent_item_colon'     => __('Testimonial Padre', 'cjtheme'),
            'all_items'             => __('Todos Los Testimoniales', 'cjtheme'),
            'add_new_item'          => __('Agregar Testimonial', 'cjtheme'),
            'add_new'               => __('Agregar Testimonial', 'cjtheme'),
            'new_item'              => __('Nuevo Testimonial', 'cjtheme'),
            'edit_item'             => __('Editar Testimonial', 'cjtheme'),
            'update_item'           => __('Actualizar Testimonial', 'cjtheme'),
            'view_item'             => __('Ver Testimonial', 'cjtheme'),
            'view_items'            => __('Ver Testimoniales', 'cjtheme'),
            'search_items'          => __('Buscar Testimonial', 'cjtheme'),
            'not_found'             => __('No Encontrado', 'cjtheme'),
            'not_found_in_trash'    => __('No Encontrado En Papelera', 'cjtheme'),
            'featured_image'        => __('Imagen Destacada', 'cjtheme'),
            'set_featured_image'    => __('Guardar Imagen Destacada', 'cjtheme'),
            'remove_featured_image' => __('Eliminar Imagen Destacada', 'cjtheme'),
            'use_featured_image'    => __('Utilizar Imagen Destacada', 'cjtheme'),
            'insert_into_item'      => __('Insertar en Testimonial', 'cjtheme'),
            'uploaded_to_this_item' => __('Agregado en Testimonial', 'cjtheme'),
            'items_list'            => __('Lista de Testimoniales', 'cjtheme'),
            'items_list_navigation' => __('Mavegación de Testimoniales', 'cjtheme'),
            'filter_items_list'     => __('Filtrar Testimoniales', 'cjtheme')
        );
        $args = array(
            'label'             => __('Testimonial', 'cjtheme'),
            'description'       => __('Testimoniales para el Sitio Web', 'cjtheme'),
            'labels'            => $labels,
            'supports'          => array('title', 'editor', 'thumbnail'),
            'hierarchical'      => true, // true = post,  false = page
            'public'            => true,
            'show_ui'           => true,
            'show_in_menu'      => true,
            'menu_position'     => 8,
            'menu_icon'         => 'dashicons-format-quote',
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export'        => true,
            'has_archive'       => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'   => 'page'
        );
        register_post_type('cjtheme_coments', $args);
    }
endif;
add_action( 'init', 'cjtheme_coments_post_type', 0);


// Coments Post Type
if(!function_exists('cjtheme_comentsotro_post_type')):
    function cjtheme_comentsotro_post_type() {
        $labels = array(
            'name'                  => _x('Título e Imagen de Fondo Testimoniales', 'Post Type Genelal Name', 'cjtheme'),
            'singular_name'         => _X('Imagen de Fondo Testimonial', 'Post Type Singular Name', 'cjtheme'),
            'menu_name'             => __('Imagen de Fondo Testimoniales', 'cjtheme'),
            'name_admin_bar'        => __('Imagen de Fondo Testimonial', 'cjtheme'),
            'archives'              => __('Archivo', 'cjtheme'),
            'attributes'            => __('Atributos', 'cjtheme'),
            'parent_item_colon'     => __('Imagen de Fondo Testimonial Padre', 'cjtheme'),
            'all_items'             => __('Todos Los Imagen de Fondo Testimoniales', 'cjtheme'),
            'add_new_item'          => __('Agregar el Título y la Imagen de Fondo de la sección Testimoniales', 'cjtheme'),
            'add_new'               => __('Agregar el Título y la Imagen de Fondo de la sección Testimoniales', 'cjtheme'),
            'new_item'              => __('Nuevo Imagen de Fondo Testimonial', 'cjtheme'),
            'edit_item'             => __('Editar Imagen de Fondo Testimonial', 'cjtheme'),
            'update_item'           => __('Actualizar Imagen de Fondo Testimonial', 'cjtheme'),
            'view_item'             => __('Ver Imagen de Fondo Testimonial', 'cjtheme'),
            'view_items'            => __('Ver Imagen de Fondo Testimoniales', 'cjtheme'),
            'search_items'          => __('Buscar Imagen de Fondo Testimonial', 'cjtheme'),
            'not_found'             => __('No Encontrado', 'cjtheme'),
            'not_found_in_trash'    => __('No Encontrado En Papelera', 'cjtheme'),
            'featured_image'        => __('Imagen Destacada', 'cjtheme'),
            'set_featured_image'    => __('Guardar Imagen Destacada', 'cjtheme'),
            'remove_featured_image' => __('Eliminar Imagen Destacada', 'cjtheme'),
            'use_featured_image'    => __('Utilizar Imagen Destacada', 'cjtheme'),
            'insert_into_item'      => __('Insertar en Imagen de Fondo Testimonial', 'cjtheme'),
            'uploaded_to_this_item' => __('Agregado en Imagen de Fondo Testimonial', 'cjtheme'),
            'items_list'            => __('Lista de Imagen de Fondo Testimoniales', 'cjtheme'),
            'items_list_navigation' => __('Mavegación de Imagen de Fondo Testimoniales', 'cjtheme'),
            'filter_items_list'     => __('Filtrar Imagen de Fondo Testimoniales', 'cjtheme')
        );
        $args = array(
            'label'             => __('Imagen de Fondo Testimonial', 'cjtheme'),
            'description'       => __('Imagen de Fondo Testimoniales para el Sitio Web', 'cjtheme'),
            'labels'            => $labels,
            'supports'          => array('title', 'thumbnail'),
            'hierarchical'      => true, // true = post,  false = page
            'public'            => true,
            'show_ui'           => true,
            'show_in_menu'      => true,
            'menu_position'     => 8,
            'menu_icon'         => 'dashicons-format-image',
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export'        => true,
            'has_archive'       => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'   => 'page'
        );
        register_post_type('cjtheme_comentsotro', $args);
    }
endif;
add_action( 'init', 'cjtheme_comentsotro_post_type', 0);