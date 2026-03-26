<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
        <h1 class="entry-title"><?php _e( 'Nic nie znaleziono', 'szybkikontakt' ); ?></h1>
    </header><!-- .page-header -->

	<div class="entry-content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Gotowy do opublikowania swojego pierwszego posta? <a href="%1$s">Zacznij tutaj</a>.', 'szybkikontakt' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Przepraszamy, ale twoja frazja nie została odnaleziona. Spróbuj użyć innego słowa kluczowego.', 'szybkikontakt' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'Brak postów spełniających podane kryteria.', 'szybkikontakt' ); ?></p>


        <?php endif; ?>

     </div><!-- .page-content -->

	<footer class="entry-footer"></footer><!-- .entry-footer -->

</article><!-- #post-## -->
