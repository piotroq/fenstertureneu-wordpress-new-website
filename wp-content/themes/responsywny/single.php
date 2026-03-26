<?php
/**
 * The template for displaying all single posts.
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

						    <?php get_template_part( 'content', 'single' ); ?>

					     	<?php
							   // If comments are open or we have at least one comment, load up the comment template
							   if ( comments_open() || get_comments_number() ) :
								  comments_template();
							   endif;
						     ?>

					<?php endwhile; // end of the loop. ?>
				</div><!-- .content -->
            </div><!-- .col-lg-8 -->


				    <?php get_sidebar(); ?>
			</div>
        </div>
    </main>
<?php get_footer(); ?>
