
<?php include('custom-header.php'); ?>
     <!-- MAIN CONTENT
     ================================================== -->
     <main id="main-content" role="main">
     	<div class="container clearfix">
     		<div class="row">
                    <!-- CONTENT
                    ================================================== -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    	<div id="content">

                          <?php while ( have_posts() ) : the_post(); ?>

                             <?php get_template_part( 'content', 'special' ); ?>

                             <?php
    							   // If comments are open or we have at least one comment, load up the comment template
                             if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                            ?>

                        <?php endwhile; // end of the loop. ?>

                    </div>
                </div>
 
            </div>
        </div>
    </main>
    <?php get_footer(); ?>