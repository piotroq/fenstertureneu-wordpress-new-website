<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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

                    <?php while ( have_posts() ) : the_post(); ?>

						    <?php get_template_part( 'content', 'page' ); ?>

					<?php endwhile; // end of the loop. ?>

                  </div>
                </div>

				    <?php get_sidebar(); ?>
			</div>
        </div>
    </main>
<?php get_footer(); ?>
