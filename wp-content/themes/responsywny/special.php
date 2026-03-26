
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<div class="thumbnail">
					
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail('szybkikontakt-thumbnail');
						} else { ?>
						<img src="<?php bloginfo('template_directory'); ?>/images/thumbnail.jpg" width="360" height="225" alt="<?php the_title(); ?>">
						<?php } ?>
					
		</div>
		</a>
		<div class="content-entry">
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' );
			endif;
			?>

		<?php if(get_post_meta($post->ID, 'fenster_desc', true)): ?>
		<?php $myField= get_post_meta($post->ID, 'fenster_desc', true); echo wpautop( $myField, true );?>
		<?php endif; ?>

			<a href="<?php the_permalink(); ?>" class="more-link">mehr sehen</a>


		</div>


	</article><!-- #post -->