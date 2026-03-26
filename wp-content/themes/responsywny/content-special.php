	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopadding">
<a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id());; ?>" title="<?php the_title_attribute(); ?>"  data-lightbox="my-gallery">
		
		<div class="custompostinside-thumbnail">
			
			<?php if ( has_post_thumbnail() ) { ?>
			<?php the_post_thumbnail(); ?>
			
			

	        <?php } else { ?>
            <img src="<?php bloginfo('template_directory'); ?>/images/thumbnail.jpg"  alt="<?php the_title(); ?>">
            <?php } ?>
			
			
		</div></a>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopadding-2">
        <div class="custompost-entryinside">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<div class="diver"></div>
		</header>


		<div class="entry-content clearfix">
			<?php the_content(); ?>

			<a class="return" href="<?php echo get_post_type_archive_link( 'special' );?>">zurück</a>
		</div><!-- .entry-content -->

		</div>
</div>		
		<div class="clearfix"></div>
		

	</article><!-- #post-## -->

