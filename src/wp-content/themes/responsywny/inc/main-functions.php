<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function szybkikontakt_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'szybkikontakt_body_classes' );

if ( version_compare( $GLOBALS['wp_version'], '4.1', '<' ) ) :
	/**
	 * Filters wp_title to print a neat <title> tag based on what is being viewed.
	 *
	 * @param string $title Default title text for current view.
	 * @param string $sep Optional separator.
	 * @return string The filtered title.
	 */
	function szybkikontakt_wp_title( $title, $sep ) {
		if ( is_feed() ) {
			return $title;
		}

		global $page, $paged;

		// Add the blog name
		$title .= get_bloginfo( 'name', 'display' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title .= " $sep $site_description";
		}

		// Add a page number if necessary:
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
			$title .= " $sep " . sprintf( __( 'Page %s', 'szybkikontakt' ), max( $paged, $page ) );
		}

		return $title;
	}
	add_filter( 'wp_title', 'szybkikontakt_wp_title', 10, 2 );

	/**
	 * Title shim for sites older than WordPress 4.1.
	 *
	 * @link https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
	 * @todo Remove this function when WordPress 4.3 is released.
	 */
	function szybkikontakt_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
	}
	add_action( 'wp_head', 'szybkikontakt_render_title' );
endif;

/**
 * Trims a string of words to a specified number of characters.
 */
function trim_characters($text, $length = 130, $append = '&hellip;') {

	$length = (int)$length;
	$text = trim( strip_tags( strip_shortcodes($text) ) );
	$text = preg_replace('/\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', '', $text);

	if ( strlen($text) > $length ) {
		$text = substr($text, 0, $length + 1);
		$words = preg_split("/[\s]|&nbsp;/", $text, -1, PREG_SPLIT_NO_EMPTY);
		preg_match("/[\s]|&nbsp;/", $text, $lastchar, 0, $length);
		if ( empty($lastchar) )
			array_pop( $words );

		$text = implode( ' ', $words ) . $append;
	}

	return $text;
}

/**
 * Add numeric pagination.
 */
if ( !function_exists( 'sk_pagination' ) ) {
	
	function sk_pagination() {	
				
	    $prev_arrow = is_rtl() ? '&rarr;' : '&larr;';
		$next_arrow = is_rtl() ? '&larr;' : '&rarr;';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=>  __( '<'),
				'next_text'		=> __( '>'),
			 ) );
		}
	}
	
};

// ShortCode
function RowShortCode() {
	return '<div class="clearfix"></div>';
}
add_shortcode('row', 'RowShortCode');

/* Thumbnail Size */
add_image_size( 'szybkikontakt-thumbnail', 720, 520, array( 'center', 'center' ) );
add_image_size( 'szybkikontakt-thumbnail-main', 720, 450, array( 'center', 'center' ) );

// START Photo LightBox
add_filter('wp_get_attachment_link', 'addlightboxrel_replace');
add_filter('the_content', 'addlightboxrel_replace');
function addlightboxrel_replace ($content)
{	global $post;
	$pattern = "/<a(.*?)href=('|\")(.*?).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>/i";
  	$replacement = '<a$1href=$2$3.$4$5 data-lightbox="my-gallery[%LIGHTID%]"$6>';
    $content = preg_replace($pattern, $replacement, $content);
	$content = str_replace("%LIGHTID%", $post->ID, $content);
    return $content;
};
// END Photo LightBox

// Remove 10px from images with text caption
add_filter('shortcode_atts_caption', 'fixExtraCaptionPadding');

function fixExtraCaptionPadding($attrs)
{
    if (!empty($attrs['width'])) {
        $attrs['width'] -= 10;
    }
    return $attrs;
};


function szybkikontakt_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
    
	// Add Wordpress Title
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'szybkikontakt' ),
		'secondary' => __( 'Secondary menu in left sidebar', 'szybkikontakt' ),
	) );
	
   // Enable Admin Styles.
   add_editor_style( array( 'css/editor-style.css' ) );

}
add_action( 'after_setup_theme', 'szybkikontakt_setup' );

function szybkikontakt_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )
		$args['show_home'] = "Home";
	return $args;
}
add_filter( 'wp_page_menu_args', 'szybkikontakt_page_menu_args' );


/*Add noindex to low value pages*/
function add_noindex_tags(){
	# Get page number for paginated archives.
	$paged = intval( get_query_var( 'paged' ) );
	
	# Add noindex tag to all archive, search and 404 pages.
	if( is_archive() || is_search() || is_404() )
	echo '<meta name="robots" content="noindex,follow">';
		
	# Add noindex tag to homepage paginated pages.  
	if(( is_home() || is_front_page() ) && $paged >= 2 )
	echo '<meta name="robots" content="noindex,follow">';
}
add_action('wp_head','add_noindex_tags', 4 );


