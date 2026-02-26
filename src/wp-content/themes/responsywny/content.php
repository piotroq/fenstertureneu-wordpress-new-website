<?php
/**
 * Content Main Blog List
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

     <header class="entry-header">
        <?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' );
			endif;
		?>

     </header><!-- .entry-header -->

       <div class="blog-header">
        <!-- Opublikowano -->
        <div class="entry-date"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <?php echo get_the_date( get_option('date_format') ); ?></div>
        <!-- Koniec Opublikowano. -->
       </div>

     <div class="entry-content clearfix">
        <?php the_content('mehr sehen'); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'szybkikontakt' ),
				'after'  => '</div>',
			) );
		?>
	  </div><!-- .entry-content -->

      <footer class="blog-footer">
      <!-- Kategoria -->
      <div class="entry-cat"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> Kategorie: <?php the_category(', ') ?></div>
      <!-- Koniec Kategoria -->
      </footer>

</article><!-- #post -->
