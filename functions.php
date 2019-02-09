<?php



// setup scripts and extra css 
function jupiter_files(){
	wp_enqueue_script('boostrap_js', get_theme_file_uri('/js/bootstrap.js'), NULL, '1.0', true);
	wp_enqueue_style('font_google', '//fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons');

	wp_enqueue_style('jupiter_main_styles', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts','jupiter_files');


function jupiter_features(){

	add_theme_support('title-tag');
}
add_action('after_setup_theme','jupiter_features');


//setup menu 

function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}


add_action( 'init', 'wpb_custom_new_menu' );

// Sidebar widget locations

function wpb_init_widgets($id){
register_sidebar(array(
	'name' => 'Sidebar',
	'id' => 'sidebar',
	'before_widget' => '<div class="p-3">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>'
));}

add_action('widgets_init', 'wpb_init_widgets');