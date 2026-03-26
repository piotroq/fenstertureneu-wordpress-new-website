<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(). '/style2.css' ?>' type='text/css' media='all' />

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

