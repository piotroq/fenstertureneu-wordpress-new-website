<?
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/main-functions.php';
require get_template_directory() . '/inc/metabox.php';

require get_template_directory() . '/inc/specialposts-functions.php';
require get_template_directory() . '/inc/fenster.php';

require get_template_directory() . '/inc/special2posts-functions.php';
require get_template_directory() . '/inc/turen.php';

function szybkikontakt_widgets_init() {
/**
 * START Sidebar Boczny
 */	
	register_sidebar( array(
		'name'          => __( 'Boczny Widget', 'szybkikontakt' ),
		'id'            => 'pierwszy-boczny',
		'description' => __( 'Boczny Widget', 'szybkikontakt' ),
		'before_widget' => '<div class="widget-icon"></div><div class="entry-sidebar"><div id="%1$s" class="%2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="entry-title">',
		'after_title'   => '</h2>',
	) );
/**
 * END Sidebar Boczny
 */	


/**
 * START Sidebar Footer
 */

     // Pierwszy widget w stopce.
	 register_sidebar( array(
		'name'          => __( 'Pierwszy Widget w Stopce', 'szybkikontakt' ),
		'id'            => 'first-footer-widget-area',
		'description'   => __( 'Opcjonaly obszar pod stopke.', 'szybkikontakt' ),
		'before_widget' => '<li><div class="sidebar-footer-entry"><div id="%1$s" class="%2$s">',
		'after_widget'  => '</div></div></li>',
		'before_title'  => '<h2 class="entry-title">',
		'after_title'   => '</h2>',
	) );

		register_sidebar( array(
		'name'          => __( 'Drugi  Widget w Stopce', 'szybkikontakt' ),
		'id'            => 'second-footer-widget-area',
		'description'   => __( 'Opcjonaly obszar pod stopke.', 'szybkikontakt' ),
		'before_widget' => '<li><div class="sidebar-footer-entry"><div id="%1$s" class="%2$s">',
		'after_widget'  => '</div></div></li>',
		'before_title'  => '<h2 class="entry-title">',
		'after_title'   => '</h2>',
	) );

		register_sidebar( array(
		'name'          => __( 'Trzeci Widget w Stopce', 'szybkikontakt' ),
		'id'            => 'third-footer-widget-area',
		'description'   => __( 'Opcjonaly obszar pod stopke.', 'szybkikontakt' ),
		'before_widget' => '<li><div class="sidebar-footer-entry"><div id="%1$s" class="%2$s">',
		'after_widget'  => '</div></div></li>',
		'before_title'  => '<h2 class="entry-title">',
		'after_title'   => '</h2>',
	) );

/**
 * END Sidebar Footer
 */


}
add_action( 'widgets_init', 'szybkikontakt_widgets_init' );

/**
 * Load Jquery
 */
function my_init() {
	if (!is_admin()) {
		wp_deregister_script('jquery'); 
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js', false, '1.8.2');  
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'my_init');

/**
 * Styles and Scripts
 */
function szybkikontakt_scripts() {
	// Updated 14.12.2015
	// Sekcja CSS
	wp_enqueue_style( 'szybkikontakt-bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), '4.2.3', 'all' );
	wp_enqueue_style( 'szybkikontakt-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all' );
	wp_enqueue_style( 'szybkikontakt-lightbox', get_template_directory_uri() . '/css/lightbox.css', array(), '2.8.1', 'all' );
	wp_enqueue_style( 'szybkikontakt-style', get_stylesheet_uri() );
    // Sekcja JavaScript
    wp_enqueue_script( 'szybkikontakt-bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array(), '4.2.3', true);
	wp_enqueue_script( 'szybkikontakt-lightbox', get_template_directory_uri() . '/js/lightbox.min.js', array(), '2.8.1', true);
	wp_enqueue_script( 'szybkikontakt-whcookies', get_template_directory_uri() . '/js/whcookies.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script( 'szybkikontakt-menu', get_template_directory_uri() . '/js/menu.js', array('jquery'), '1.0.0', true);		
}
add_action( 'wp_enqueue_scripts', 'szybkikontakt_scripts' );


/**
 *  IE Styles
 */
if( !function_exists( 'ie_scripts' ) ) {
	function ie_scripts() {
	 	echo '<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->';
	   	echo ' <!--[if lt IE 9]>';
	    echo ' <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>';
	    echo ' <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
	   	echo ' <![endif]-->';
   	}
   	add_action( 'wp_head', 'ie_scripts' );
}; // end if


