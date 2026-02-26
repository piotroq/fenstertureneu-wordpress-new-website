<?php
/*
Template Name: Home
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('.content-caption').bxSlider({
            mode: 'fade',
            auto: true,
            pause: 6000,
            controls: true,
            autoControls: false,
            pager: false,
            speed: 1500,
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.cscontent-caption').bxSlider({
            mode: 'horizontal',
            auto: true,
            pause: 6000,
            controls: true,
            autoControls: false,
            pager: false,
            speed: 1500,
        });
    });
</script>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

 <!-- HEADER WITH LOGO AND NAVIGATION
================================================== -->
<header id="main-header" role="banner">
        <div class="container clearfix">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="bglogo">
                    <div id="logo">
                        <a href="<?php echo home_url( '/' ); ?>" class="logo-link"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo" class="logo-img"></a>
                    </div>
                    <div class="bgmenu">
                    <div class="main-nav">
                    <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                     <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
                    </nav>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
    </header>

  <!-- FULL WIDTH SLIDER WITH CAPTION
================================================== -->
  <section id="fullwidth-slider">
        <div class="container-fluid">
            <div class="row">
                <div id="main-caption">
                    <ul class="content-caption">
                        <li><img src="<?php bloginfo('template_directory'); ?>/images/s1.jpg" alt="slide1"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/images/s2.jpg" alt="slide2"></li>                
                    </ul>
                </div>
            </div>
        </div>
    </section>


<!-- 2 BOXY WITH PHOTO
================================================== -->
<section id="main-boxone">
        <div class="container clearfix">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="box">
                        <div class="box-1">
                            <div class="box-photo">
                                <div class="photo"><img src="<?php bloginfo('template_directory'); ?>/images/photobox1.jpg" alt="box 1"></div>
                            </div>
                            <div class="box-content">
                            <?php if(get_post_meta($post->ID, 'Main_Boxes_short-title', true)): ?>
                            <h2 class="entry-title">
                            <?php echo get_post_meta($post->ID, 'Main_Boxes_short-title', true); ?>
                            </h2>
                            <?php endif; ?>

                            <?php if(get_post_meta($post->ID, 'Main_Boxes_short-desc', true)): ?>
                            <?php echo get_post_meta($post->ID, 'Main_Boxes_short-desc', true); ?>
                            <?php endif; ?>

                            <?php if(get_post_meta($post->ID, 'Main_Boxes_short-link', true)): ?>
                            <a href="<?php echo get_post_meta($post->ID, 'Main_Boxes_short-link', true); ?>" class="box-link">mehr sehen</a>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="box">
                        <div class="box-2">
                            <div class="box-photo">
                                <div class="photo"><img src="<?php bloginfo('template_directory'); ?>/images/photobox2.jpg" alt="box 2"></div>
                            </div>
                            <div class="box-content">
                            <?php if(get_post_meta($post->ID, 'Main_Boxes_short-title-2', true)): ?>
                            <h2 class="entry-title">
                            <?php echo get_post_meta($post->ID, 'Main_Boxes_short-title-2', true); ?>
                            </h2>
                            <?php endif; ?>

                            <?php if(get_post_meta($post->ID, 'Main_Boxes_short-desc-2', true)): ?>
                            <?php echo get_post_meta($post->ID, 'Main_Boxes_short-desc-2', true); ?>
                            <?php endif; ?>

                            <?php if(get_post_meta($post->ID, 'Main_Boxes_short-link-2', true)): ?>
                            <a href="<?php echo get_post_meta($post->ID, 'Main_Boxes_short-link-2', true); ?>" class="box-link">mehr sehen</a>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
</section>


      <!-- 1 BOX Unsere produkte
================================================== -->
<section id="main-boxfive">
        <div class="container clearfix">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="box">
                        <div class="box-1">
                            <div class="box-content">
                            <?php if(get_post_meta($post->ID, 'Main_Boxes_short-title-3', true)): ?>
                            <h2 class="entry-title">
                            <?php echo get_post_meta($post->ID, 'Main_Boxes_short-title-3', true); ?>
                            </h2>
                            <?php endif; ?>

                            <?php if(get_post_meta($post->ID, 'Main_Boxes_short-desc-3', true)): ?>
                            <?php echo get_post_meta($post->ID, 'Main_Boxes_short-desc-3', true); ?>
                            <?php endif; ?>
                        </div>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </section>

  <!-- CENTER SLIDER WITH CAPTION
================================================== -->
<section id="center-slider">
        <div class="container clearfix">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="csmain-caption">
                  <ul class="cscontent-caption">
                      <li><img src="<?php bloginfo('template_directory'); ?>/images/p1.png" alt="P1"></li>
                      <li><img src="<?php bloginfo('template_directory'); ?>/images/p2.png" alt="P2"></li>
                  </ul>
                </div>
                </div>
            </div>
        </div>
</section>

 <!-- MAIN CONTENT
================================================== -->
<main id="main-content" role="main">
        <div class="container clearfix">
            <div class="row">
 <!-- ONECOLUMNPAGE CONTENT
================================================== -->
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="onecolumnpage">

                    <?php while ( have_posts() ) : the_post(); ?>

                      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                    		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    	</header><!-- .entry-header -->

                        <div class="entry-content clearfix">

                              <?php the_content(); ?>

                          <?php
                            wp_link_pages( array(
                              'before' => '<div class="page-links">' . __( 'Pages:', 'szybkikontakt' ),
                              'after'  => '</div>',
                            ) );
                          ?>

                        </div><!-- .entry-content -->

                        <footer class="entry-footer"></footer><!-- .entry-footer -->

                      </article><!-- #post-## -->


                    <?php endwhile; // end of the loop. ?>

                  </div>
                </div>
            </div>
        </div>
    </main>


    <!-- FOOTER
================================================== -->
<?php get_footer(); ?>
