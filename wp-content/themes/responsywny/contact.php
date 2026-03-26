<?php
/*
Template Name: Kontakt
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

  <!-- BANNER FULLWIDTH
     ================================================== -->
     <section id="banner-section"></section>

  <!-- MAIN CONTENT
  ================================================== -->

  <main role="main" id="contact">
      <div class="container clearfix">
          <div class="row">
              <!-- CONTENT
  ================================================== -->

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div id="contactcontent">
                  <?php while ( have_posts() ) : the_post(); ?>
                      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                          <header class="entry-header">
                              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                          </header>
                          <!-- .entry-header -->
                          <div class="entry-content clearfix">
                              <div class="contact-content">
                              <?php the_content(); ?>
                              </div>
                              <div class="contact-form">
                              <?php echo do_shortcode( '[contact-form-7 id="16" title="Formularz 1"]' ); ?>
                              </div>
                          </div>
                  </div>
                  <!-- .entry-content -->
                  <footer class="entry-footer"></footer>
                  <!-- .entry-footer -->
                  </article>
                  <?php endwhile; // end of the loop. ?>
                  <!-- #post-## -->
              </div>
          </div>
      </div>
      </div>
  </main>
  <!-- CONTACT WITH MAP - ONECOLUMNPAGE
================================================== -->
<section id="contact4">
<div class="container clearfix">
<div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<section id="google-maps" class="google-maps">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2474.8370471801218!2d7.129636310664924!3d51.66281982212272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8fb1c250efb43%3A0xa797d0809545e498!2sH%C3%BClsstra%C3%9Fe+31%2C+45772+Marl%2C+Niemcy!5e0!3m2!1spl!2spl!4v1525699204252" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>

 </div>
</div>
</div>

</section>

        <!-- FOOTER
    ================================================== -->
    <?php get_footer(); ?>
