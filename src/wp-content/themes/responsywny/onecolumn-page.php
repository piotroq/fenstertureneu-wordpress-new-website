<?php
/*
Template Name: Strona bez widgetow
*/

get_header(); ?>

 <main id="main-content" role="main">
        <div class="container">
            <div class="row">
 <!-- CONTENT
================================================== -->
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="onecolumnpage">

                    <?php while ( have_posts() ) : the_post(); ?>

						    <?php get_template_part( 'content', 'page' ); ?>

					<?php endwhile; // end of the loop. ?>

                  </div>
                </div>
			</div>
        </div>
    </main>
<?php get_footer(); ?>
