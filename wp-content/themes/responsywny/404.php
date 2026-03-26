<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header(); ?>
 <!-- MAIN CONTENT
================================================== -->
    <main id="main-content" role="main">
        <div class="container">
            <div class="row">
                <!-- CONTENT
================================================== -->
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <div id="content">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Podanej strony nie znaleziono lub nie istnieje.', 'szybkikontakt' ); ?></h1>
                    <div class="diver"></div>
				</header><!-- .page-header -->

				<div class="entry-content">
					<p><?php _e( 'Podanej strony nie znaleziono lub nie istnieje. Spróbuj użyć wyszukiwarki.', 'szybkikontakt' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->

      </div>
                </div>

				    <?php get_sidebar(); ?>
			</div>
        </div>
    </main>
<?php get_footer(); ?>
