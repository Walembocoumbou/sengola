<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );

function sengola_theme_stylesheets() {
    // Déclarer jQuery
    wp_enqueue_script('jquery' );
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 'sengola-wafers-style', get_stylesheet_uri(), '', null, 'all', '1.0'  );
    // Déclarer les autres fichiers CSS
    wp_enqueue_style( 'sengola-wafers-main',  get_template_directory_uri() .'/css/main.css', array(), null, 'all', '1.0'  );
    wp_enqueue_style( 'sengola-wafers-normalize',  get_template_directory_uri() .'/css/normalize.css', array(), null, 'all', '1.0' );
}
add_action( 'wp_enqueue_scripts', 'sengola_theme_stylesheets' );

function get_the_top_ancestor_id() {
	global $post;
	if ( $post->post_parent ) {
		$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
		return $ancestors[0];
	} else {
		return $post->ID;
	}
}

/* Add Featured Image Support To Your WordPress Theme */
function add_featured_image_support_to_your_wordpress_theme() {
	add_theme_support( 'post-thumbnails' );
    add_image_size( 'micro-thumbnail', 50, 50);
	add_image_size( 'small-thumbnail', 150, 150, true );
	add_image_size( 'single-post-image', 960, 250, true );
	add_theme_support( 'post-formats', [
		'aside',
		'gallery',
		'link',
		'image',
		'quote',
		'status',
		'video',
		'audio',
		'chat',
		'standard'
	] );
}

add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme' );

function register_my_sidebars(){
    register_sidebar(
        array(
            'name' => "Sidebar gauche",
            'id' => 'gauchesidebar',
            'description' => "La sidebar gauche",
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );
   
    register_sidebar(
        array(
            'name' => "Sidebar droite",
            'id' => 'droitesidebar',
            'description' => "La sidebar droite",
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name' => "Sidebar droite_2",
            'id' => 'droitesidebar_2',
            'description' => "La sidebar droite_2",
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );
 
    register_sidebar(
        array(
            'name' => "Sidebar du footer",
            'id' => 'footer-sidebar',
            'description' => "La sidebar du footer",
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );
 }
 add_action('widgets_init', 'register_my_sidebars');