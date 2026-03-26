<? 
/**
* USTAWIENIA GLOWNE
 */

function szybkikontakt_wpisy_specjalne2() {
  $labels = array(
    'name'               => _x( 'Türen angebot', 'post type general name' ),
    'singular_name'      => _x( 'Türen angebot', 'post type singular name' ),
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
    'menu_name'          => 'Türen angebot'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Türen angebot',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail'),
    'has_archive'   => true,
    'rewrite' => array( 'slug' => 'turen', 'with_front' => true ),

  );
  register_post_type( 'special2', $args ); 
}
add_action( 'init', 'szybkikontakt_wpisy_specjalne2' );

