  <?php 
  /*
  Template name: Fenster
   */
 ?>

<?php include('custom-header.php'); ?>
  
     <!-- MAIN CONTENT
     ================================================== -->
     <main id="custompost-content" role="main">
      <div class="container clearfix">
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="cp-maintitle">Fenster</div>
        <div class="cp-maindesc">verkauf, montage, service</div>
        </div>
          
     <!-- CONTENT
     ================================================== -->
     <?php
     $temp = $wp_query;
     $wp_query = null;
     $wp_query = new WP_Query();
     $wp_query->query('showposts=6&post_type=special&orderby=name&order=ASC'.'&paged='.$paged);?>

    <?php $i = 1; ?>
    <?php if ( have_posts() ) : ?>

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post();?>
        <?php  if($i % 4 == 0) {echo '<div class="clearfix"></div>';} ?>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="custompost-entry clearfix">
                  <?php
                  /* Include the Post-Format-specific template for the content.
                   * If you want to override this in a child theme, then include a file
                   * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                   */
                  get_template_part( 'special', get_post_format() );
                  ?>

          </div>
        </div>
        <?php $i++; endwhile; ?>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php
                       /* Pagination */
                       if (function_exists('custom_pagination')) {
                       custom_pagination($custom_query->max_num_pages,"",$paged);
                       }
                    ?>
              </div>
        <?php wp_reset_postdata(); ?>
                          
        <?php else : ?>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <div id="content">
                  <?php get_template_part( 'content', 'none' ); ?>
                </div>
                           
              </div>

            <?php get_sidebar(); ?>  
        <?php endif; ?>    

     <!-- END MAIN CONTENT
     ================================================== -->                  
   </div>
 </div>
</main>
<?php get_footer(); ?>
