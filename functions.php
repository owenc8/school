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

	wp_enqueue_style( 
		'school-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' ),
		'all'
	);

	// wp_enqueue_script(
    // 'mindset-scroll-to-top', 
    // get_theme_file_uri( 'assets/js/scroll-to-top.js' ), 
    // array(), 
    // wp_get_theme()->get( 'Version' ), 
    // array( 'strategy' => 'defer' ) 
	// );



	
}
add_action( 'wp_enqueue_scripts', 'school_enqueues' );

function mindset_setup() {
    //load style.css file in block editor
	add_editor_style( get_stylesheet_uri() );

}  
add_action( 'after_setup_theme', 'mindset_setup' );




// function mindset_add_custom_image_sizes( $size_names ) {
// 	$new_sizes = array(
// 		'400x500' => __( '400x500', 'mindset-theme' ),
// 		'200x250' => __( '200x250', 'mindset-theme' ),
//         '400x200' => __( '400x200', 'mindset-theme' ),
// 		'800x400' => __( '800x400', 'mindset-theme' ),
// 	);
// 	return array_merge( $size_names, $new_sizes );
// }
// add_filter( 'image_size_names_choose', 'mindset_add_custom_image_sizes' );
//custom blocks 
require get_theme_file_path() . '/school-blocks/school-blocks.php';
//custom types and taxonomies
require get_template_directory() . '/inc/post-types-taxonomies.php';