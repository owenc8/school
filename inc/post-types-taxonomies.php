<?php
function school_register_custom_post_types() {
    //students Post type
    $labels = array(
        'name'                  => _x( 'Students', 'post type general name', 'FWD school' ),
        'singular_name'         => _x( 'student', 'post type singular name', 'FWD school' ),
        'menu_name'             => _x( 'Students', 'admin menu', 'FWD school' ),
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

    //staff post type
    $labels = array(
            'name'                  => _x( 'Staff', 'post type general name', 'FWD school' ),
            'singular_name'         => _x( 'staff', 'post type singular name', 'FWD school' ),
            'menu_name'             => _x( 'Staff', 'admin menu', 'FWD school' ),
            'add_new'               => _x( 'Add New', 'staff', 'FWD school' ),
            'add_new_item'          => __( 'Add New staff', 'FWD school' ),
            'new_item'              => __( 'New Staff', 'FWD school' ),
            'edit_item'             => __( 'Edit Staff', 'FWD school' ),
            'view_item'             => __( 'View Staff', 'FWD school'  ),
            'all_items'             => __( 'All Staff', 'FWD school' ),
            'search_items'          => __( 'Search staff', 'FWD school' ),
            'parent_item_colon'     => __( 'Parent Staff:', 'FWD school' ),
            'not_found'             => __( 'No staff found.', 'FWD school' ),
            'not_found_in_trash'    => __( 'No staff found in Trash.', 'FWD school' ),
            'item_link'             => __( 'Staff link.', 'FWD school' ),
            'item_link_description' => __( 'A link to a staff.', 'FWD school' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'staff' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-universal-access',
        'supports'           => array( 'title', 'editor' ),
        'template'           => array( array( 'core/pullquote' ) ),
        'template_lock'      => 'all'
    );

    register_post_type( 'school-staff', $args );
   

}
add_action( 'init', 'school_register_custom_post_types' );

function school_register_taxonomies() {

    // student catgeory taxonomy
    $labels = array(
        'name'                  => _x( 'Student categories', 'taxonomy general name', 'FWD school' ),
        'singular_name'         => _x( 'Student category', 'taxonomy singular name', 'FWD school' ),
        'search_items'          => __( 'Search Student categories', 'FWD school' ),
        'all_items'             => __( 'All Student category', 'FWD school' ),
        'parent_item'           => __( 'Parent Student category', 'FWD school' ),
        'parent_item_colon'     => __( 'Parent Student category:', 'FWD school' ),
        'edit_item'             => __( 'Edit Student category', 'FWD school' ),
        'view_item'             => __( 'View Student category', 'FWD school' ),
        'update_item'           => __( 'Update Student category', 'FWD school' ),
        'add_new_item'          => __( 'Add New Student category', 'FWD school' ),
        'new_item_name'         => __( 'New Student category Name', 'FWD school' ),
        'template_name'         => __( 'Student category Archives', 'FWD school' ),
        'menu_name'             => __( 'Student category', 'FWD school' ),
        'not_found'             => __( 'No Student categories found.', 'FWD school' ),
        'no_terms'              => __( 'No Student categories', 'FWD school' ),
        'items_list_navigation' => __( 'Student categories list navigation', 'FWD school' ),
        'items_list'            => __( 'Student categories list', 'FWD school' ),
        'item_link'             => __( 'Student category Link', 'FWD school' ),
        'item_link_description' => __( 'A link to a Student category.', 'FWD school' ),
        );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'student-categories' ),
    );
    register_taxonomy( 'school-student-category', array( 'school-student' ), $args );


}
add_action( 'init', 'school_register_taxonomies' );

function school_rewrite_flush() {
    school_register_custom_post_types();
    school_register_taxonomies();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'school_rewrite_flush' );