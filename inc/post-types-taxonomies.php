<?php
function school_register_custom_post_types() {
       $labels = array(
        'name'                  => _x( 'students', 'post type general name', 'FWD school' ),
        'singular_name'         => _x( 'student', 'post type singular name', 'FWD school' ),
        'menu_name'             => _x( 'students', 'admin menu', 'FWD school' ),
        'add_new'               => _x( 'Add New', 'student', 'FWD school' ),
        'add_new_item'          => __( 'Add New student', 'FWD school' ),
        'new_item'              => __( 'New Student', 'FWD school' ),
        'edit_item'             => __( 'Edit Student', 'FWD school' ),
        'view_item'             => __( 'View Student', 'FWD school'  ),
        'all_items'             => __( 'All Studentss', 'FWD school' ),
        'search_items'          => __( 'Search students', 'FWD school' ),
        'parent_item_colon'     => __( 'Parent students:', 'FWD school' ),
        'not_found'             => __( 'No students found.', 'FWD school' ),
        'not_found_in_trash'    => __( 'No students found in Trash.', 'FWD school' ),
        'item_link'             => __( 'Student link.', 'FWD school' ),
        'item_link_description' => __( 'A link to a student.', 'FWD school' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'students' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-heart',
        'supports'           => array( 'title', 'editor' ),
        'template'           => array( array( 'core/pullquote' ) ),
        'template_lock'      => 'all'
    );

    register_post_type( 'school-student', $args );
   

}
add_action( 'init', 'school_register_custom_post_types' );

function school_register_taxonomies() {

}
add_action( 'init', 'school_register_taxonomies' );

function school_rewrite_flush() {
    school_register_custom_post_types();
    school_register_taxonomies();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'school_rewrite_flush' );