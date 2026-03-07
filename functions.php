<?php
function school_enqueues() {
	// Load style.css on the front-end
	// Parameters: Unique handle, Source, Dependencies, Version number, Media
	
	//single css file load not in theme 
    wp_enqueue_style( 
	'school-normalize', 
	'https://unpkg.com/@csstools/normalize.css', 
	array(), 
	'12.1.0'
    );
	//main css file
	wp_enqueue_style( 
		'school-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' ),
		'all'
	);

	add_filter( 'enter_title_here', function( $title, $post ) {
    if ( 'student' === $post->post_type ) {
        return 'Add student name';
    }
    return $title;
	}, 10, 2 );

// load front-page(id) light gallery script and style enqueues 
	if (is_page(68)) {

		wp_enqueue_style(
		'lightgallery-css',
		get_theme_file_uri('assets/css/lightgallery-bundle.css'),
		array(),
		wp_get_theme()->get('Version')
		);

		wp_enqueue_script(
		'lightgallery-js', 
		get_theme_file_uri( 'assets/js/lightgallery/lightgallery.umd.js' ), 
		array(),
		wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_script(
		'light-gallery-init',
		get_theme_file_uri('assets/js/lightgallery/light-gallery-init.js'),
		array('lightgallery-js'),
		wp_get_theme()->get('Version'),
		array( 'strategy' => 'defer' )
		);
	}

	if (is_page(123)) {
		//staff css file
		wp_enqueue_style(
			'staff-page-style',                          
			get_template_directory_uri() . '/staff.css', 
			array('school-style'),                            
			wp_get_theme()->get( 'Version' ),                              
			'all'                                      
		);
		
	}
}



add_action( 'wp_enqueue_scripts', 'school_enqueues' );

function school_setup() {
    //load style.css file in block editor
	add_editor_style( get_stylesheet_uri() );

}  
add_action( 'after_setup_theme', 'school_setup' );


function fwd_school_register_image_sizes() {
    add_image_size( '400x500', 400, 500, true );
    add_image_size( '200x250', 200, 250, true );
    add_image_size( '400x200', 400, 200, true );
    add_image_size( '800x400', 800, 400, true );
	add_image_size( '1080x1350', 1080, 1350, true );
}
add_action( 'after_setup_theme', 'fwd_school_register_image_sizes' );

function fwd_school_add_custom_image_sizes( $size_names ) {
	$new_sizes = array(
		'400x500' => __( '400x500', 'FWD school' ),
		'200x250' => __( '200x250', 'FWD school' ),
        '400x200' => __( '400x200', 'FWD school' ),
		'800x400' => __( '800x400', 'FWD school' ),
		'1080x1350' => __('1080x1350', 'FWD school')
	);
	return array_merge( $size_names, $new_sizes );
}
add_filter( 'image_size_names_choose', 'fwd_school_add_custom_image_sizes' );
//custom blocks 
require get_theme_file_path() . '/school-blocks/school-blocks.php';
//custom types and taxonomies
require get_template_directory() . '/inc/post-types-taxonomies.php';

//placeholder changed for student and staff
add_filter( 'enter_title_here', 'change_cpt_title_placeholder', 20, 2 );
function change_cpt_title_placeholder( $title, $post ) {
    if ( 'school-student' == $post->post_type ) {
        $my_title = 'Add student name...';
        return $my_title;
    }elseif('school-staff' == $post->post_type){
		 $my_title = 'Add staff name...';
        return $my_title;
	}
    return $title;
}
