	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="custompost-entryinside">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<div class="diver"></div>
		</header>


		<div class="entry-content clearfix">
			<?php the_content(); ?>

			<a class="return" href="<?php echo get_post_type_archive_link( 'special2' );?>">zurück</a>
		</div><!-- .entry-content -->

		</div>		
		<div class="clearfix"></div>
		

	</article><!-- #post-## -->

