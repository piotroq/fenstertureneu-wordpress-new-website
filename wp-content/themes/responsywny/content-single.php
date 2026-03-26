<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

         <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
         </header>

         <div class="blog-header">
         <!-- Opublikowano -->
             <div class="entry-date"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <?php echo get_the_date( get_option('date_format') ); ?></div>
         <!-- Koniec Opublikowano. -->

         </div>

         <div class="entry-content clearfix">
	        <?php the_content(); ?>
	     </div><!-- .entry-content -->


         <footer class="blog-footer">
         <!-- Kategoria -->
              <div class="entry-cat"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> Kategorie: <?php the_category(', '); ?></div>
         <!-- Koniec Kategoria -->

         </footer><!-- .entry-footer -->
</article><!-- #post-## -->
