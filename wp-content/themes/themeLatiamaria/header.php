<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <!--[if gte IE 9]>
          <style type="text/css">
            .gradient {
               filter: none;
            }
          </style>
        <![endif]-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="main-banner">
        <div class="bg-banner">
            
            <div class="container">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" alt="La tia Maria"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"> </a>
            </div>            
        </div>

    </div>
    <nav id="main-nav">
      <div class="container">
        <i class="nav-mobile">nav</i>      
      <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'items_wrap' => '<ul class="nav">%3$s</ul>')); ?> 
      <?php wp_nav_menu(array('theme_location' => 'social', 'container' => false, 'items_wrap' => '<ul class="social_nav">%3$s</ul>')); ?> 

      </div>
    </nav>
