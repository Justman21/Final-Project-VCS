<?php

// Įjungiame post thumbnail

add_theme_support( 'post-thumbnails' );

// Apsibrėžiame stiliaus failus ir skriptus

if( !defined('THEME_FOLDER') ) {
	define('THEME_FOLDER', get_bloginfo('template_url'));
}

function theme_scripts(){

	if ( !is_admin() ) {

		//wp_register_script(handle, path, dependency, version, load_in_footer);

		// tik jei naudoji jquery pvz ajax link'a ir vietoj 2.1.1 savo jquery versija(turi matytis nuorodoj).
		// wp_deregister_script('jquery'); 
		// wp_register_script('jquery', THEME_FOLDER . '/assets/js/jquery-2.1.1.js', false, '2.1.1', true); 
		

		//Registration
		wp_register_script('js_main', THEME_FOLDER . '/assets/scripts/script.js', array(), '1.0', true);
	

		//Loading
		wp_enqueue_script('js_main');
    }
}
add_action('wp_enqueue_scripts', 'theme_scripts');


function theme_stylesheets(){

	if( defined('THEME_FOLDER') ) {
		//wp_register_style(handle, path, dependency, version, devices);	

		//Registration
		
		wp_register_style('font1', "https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap&subset=latin-ext", array(), false, 'all');
		wp_register_style('font2', "https://fonts.googleapis.com/css?family=Raleway:400,700,900&display=swap&subset=latin-ext", array(), false, 'all');
		wp_register_style('main-css', THEME_FOLDER . '/assets/css/style.css', array('font1','font2'), false, 'all');

		//Loading
		wp_enqueue_style('font1');
		wp_enqueue_style('font2');
		wp_enqueue_style('main-css');
	}
}
add_action('wp_enqueue_scripts', 'theme_stylesheets');

// Apibrėžiame navigacijas

function register_theme_menus() {
   
	register_nav_menus(array( 
        'primary-navigation' => __( 'Primary Navigation' ) 
    ));
}

add_action( 'init', 'register_theme_menus' );

// Apibrėžiame widgets juostas

#$sidebars = array( 'Footer Widgets', 'Blog Widgets' );

if( isset($sidebars) && !empty($sidebars) ) {

	foreach( $sidebars as $sidebar ) {

		if( empty($sidebar) ) continue;

		$id = sanitize_title($sidebar);

		register_sidebar(array(
			'name' => $sidebar,
			'id' => $id,
			'description' => $sidebar,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
	}
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

//CUSTOM IRASAS

add_action( 'init', 'work_in_progress_posts_init' );
/**
 * Register a project post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function work_in_progress_posts_init() {
	$labels = array(
		'name'               => _x( 'Progress blocks', 'post type general name', 'vcs-starter' ),
		'singular_name'      => _x( 'Progress block', 'post type singular name', 'vcs-starter' ),
		'menu_name'          => _x( 'Progress blocks', 'admin menu', 'vcs-starter' ),
		'name_admin_bar'     => _x( 'Progress blocks', 'add new on admin bar', 'vcs-starter' ),
		'add_new'            => _x( 'Add New', 'Progress block', 'vcs-starter' ),
		'add_new_item'       => __( 'Add New progress block', 'vcs-starter' ),
		'new_item'           => __( 'New progress block', 'vcs-starter' ),
		'edit_item'          => __( 'Edit progress block', 'vcs-starter' ),
		'view_item'          => __( 'View progress block', 'vcs-starter' ),
		'all_items'          => __( 'All progress blocks', 'vcs-starter' ),
		'search_items'       => __( 'Search progress block', 'vcs-starter' ),
		'parent_item_colon'  => __( 'Parent progress block:', 'vcs-starter' ),
		'not_found'          => __( 'No progress block found.', 'vcs-starter' ),
		'not_found_in_trash' => __( 'No progress block found in Trash.', 'vcs-starter' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'vcs-starter' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => __('progress-blocks') ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail')
	);

	register_post_type( 'Progress blocks', $args );
}