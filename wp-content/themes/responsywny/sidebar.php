<?php
/**
 * The sidebar containing the main widget area.
 *
 */

if ( ! is_active_sidebar( 'pierwszy-boczny' ) ) {
	return;
}
?>
  <!-- SIDEBAR
================================================== -->
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <aside id="sidebar" role="complementary">
                          <?php dynamic_sidebar( 'pierwszy-boczny' ); ?>
                    </aside>
				</div>