<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'first-footer-widget-area' )
		&& ! is_active_sidebar( 'second-footer-widget-area' )
		&& ! is_active_sidebar( 'third-footer-widget-area' )
		
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>

    <section id="main-sidebar-footer">
        <div class="container clearfix">
            <div class="row">			
<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
				    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <ul>
						<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
			    </ul>
				</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
				    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <ul>
						<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
			    </ul>
				</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
				    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <ul>
						<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
			    </ul>
				</div>
<?php endif; ?>

            </div>
        </div>
    </section>