<? 
/**
* USTAWIENIA GLOWNE
 */

function szybkikontakt_wpisy_specjalne() {
  $labels = array(
    'name'               => _x( 'Fenster angebot', 'post type general name' ),
    'singular_name'      => _x( 'Fenster angebot', 'post type singular name' ),
    'add_new'            => _x( 'Dodaj nowy', 'book' ),
    'add_new_item'       => __( 'Dodaj nowy wpis' ),
    'edit_item'          => __( 'Edytuj wpis' ),
    'new_item'           => __( 'Nowy wpis' ),
    'all_items'          => __( 'Wszystkie wpisy' ),
    'view_item'          => __( 'Zobacz wpis' ),
    'search_items'       => __( 'Szukaj wpisu' ),
    'not_found'          => __( 'Nie znaleziono żadnych wpisów.' ),
    'not_found_in_trash' => __( 'Nie znaleziono żadnych wpisów w koszu.' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Fenster angebot'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'fenster angebot',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail'),
    'has_archive'   => true,
    'rewrite' => array( 'slug' => 'fenster', 'with_front' => true ),

  );
  register_post_type( 'special', $args ); 
}
add_action( 'init', 'szybkikontakt_wpisy_specjalne' );





function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'type'            => 'list',
    'prev_text'       =>  __( '<'),
    'next_text'       => __( '>'),
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<div class='custompost-pagination'>";
    echo $paginate_links;
    echo "</div>";
  }

};
  /** 
   * Posts_per_page] 
   */
  function my_post_queries( $query ) {

    if(is_tax()){
        $query->set('posts_per_page', 6);
      }
    }
  add_action( 'pre_get_posts', 'my_post_queries' );
  
  
  
 
  