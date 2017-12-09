<?php
function columnist_widgets_init() {
	// Sidebar Widget Area
	register_sidebar(array('name'=>'Sidebar',
		'description'   => __( 'Main sidebar.', 'the-columnist' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget-side %2$s">',
		'after_widget' 	=> '</aside>',
		'before_title' 	=> '<h2>',
		'after_title' 	=> '</h2>',
	));
	// Footer Widget Area
	register_sidebar(array('name'=>'Footer',
		'description'   => __( 'Three-column footer widget area.', 'the-columnist' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget-wide %2$s">',
		'after_widget' 	=> '</aside>',
		'before_title' 	=> '<h2>',
		'after_title' 	=> '</h2>',
	));
	// Featured Sidebar Widget Area
	register_sidebar(array('name'=>'Sidebar Featured',
		'description'   => __( 'Widget area in featured section.', 'the-columnist' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget-wide %2$s">',
		'after_widget' 	=> '</aside>',
		'before_title' 	=> '<h2>',
		'after_title' 	=> '</h2>',
	));
}	
add_action( 'widgets_init', 'columnist_widgets_init' );

if ( ! isset( $content_width ) ) {
	$content_width = 580;
}

if ( ! function_exists( 'columnist_scripts' ) ) :	
	function columnist_scripts() {
	
		global $wp_styles;
	
		// CSS
		wp_enqueue_style( 'columnist-main', get_stylesheet_uri() );
		
		// Menu Script
		wp_enqueue_script('columnist-menu-js', get_template_directory_uri() . "/js/menu4.js", array( 'jquery' ));

		//slider
		wp_enqueue_script('jssor-slider', get_template_directory_uri() . "/js/jssor.slider.mini.js", array( 'jquery' ));	
		
		// masonry Script
		if (get_theme_mod('columnist_homepage_gridwidth', '2') > '1'  && is_home()) {
			wp_enqueue_script('columnist-masonry-js', get_template_directory_uri() . "/js/masonry.min.js", array( 'jquery' ));				
			}

		if (get_theme_mod('columnist_archive_gridwidth', '2') > '1'  && is_archive()) {
			wp_enqueue_script('columnist-masonry-js', get_template_directory_uri() . "/js/masonry.min.js", array( 'jquery' ));				
			}	
		
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' ); };
		
		//Google fonts
		include get_template_directory() . '/bit/font-include.php';
	}
endif;

add_action('wp_enqueue_scripts','columnist_scripts'); //script enqueue ends

if ( ! function_exists( 'columnist_setup' ) ) :
	function columnist_setup() {
		// Translations can be filed in the /lang/ directory
		load_theme_textdomain( 'columnist', get_template_directory() . '/lang/' );
		add_editor_style();	//editor styles
		add_theme_support( 'title-tag' );	
		add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'status',  'quote' ) ); 	//post formats support
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo' );
		add_theme_support( 'html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption') ); //enable html5
		register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'the-columnist' ),
		) );	//one menu below the logo	
	}
endif;

add_action( 'after_setup_theme', 'columnist_setup' ); //setup ends


//image sizes
if ( ! function_exists( 'columnist_add_image_size' ) ) :
	function columnist_add_image_size() {
		add_image_size( 'columnist-list-thumb', 70, 70, true ); 
		add_image_size( 'columnist-blog-thumb', 700, 350, true );
	}
endif;
add_action( 'after_setup_theme', 'columnist_add_image_size' ); //setup

// category id in body and post class
function columnist_category_id_class($classes) {
	global $post;
	foreach((get_the_category($post->ID)) as $category)
	$classes [] = 'cat-' . $category->cat_ID . '-id';
	return $classes;
}
	
add_filter('post_class', 'columnist_category_id_class');

// Copyright in footer
function columnist_footer(){
 	$columnist_footer = get_theme_mod('columnist_footer_copyright');

 	if(empty($columnist_footer)){
		echo 'Built using <a class="footer-credits" href="'.esc_url('http://poisonedcoffee.com/columnist/').'">the columnist theme</a>';
  	} else {
		echo esc_attr( $columnist_footer );
  }
}

//Customizer stuff
require get_template_directory() . '/bit/customizer.php';
require get_template_directory() . '/bit/customizer-sanitize.php';
?>