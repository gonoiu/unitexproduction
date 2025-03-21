<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>


<!DOCTYPE html>
<html lang="en-US">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <title><?php the_field('titlu_website', 'options'); ?></title>

   <meta name="description" content="<?php the_field('descriere_website', 'options'); ?>">
	<meta name="keywords" content="<?php the_field('cuvinte_cheie', 'options'); ?>">
   <meta name="author" content="webetwas">
   
   <!-- Google Fonts -->
   <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Spartan%3A400%2C500%2C600%2C700%2C800%2C900%7CInter%3A300%2C400%2C500%2C600%2C700%2C800%2C900&subset=latin%2Clatin-ext' type='text/css' media='all' />
   <!-- Google Fonts -->
   <!-- Style -->
   <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/bootstrap.min.css' type='text/css' media='all' />
   <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/owl.css' type='text/css' media='all' />
   <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/swiper.min.css' type='text/css' media='all' />
   <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/jquery.fancybox.min.css' type='text/css' media='all' />
   <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/icomoon.css' type='text/css' media='all' />
   <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/flexslider.css' type='text/css' media='all' />
   <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/font-awesome.min.css' type='text/css' media='all' />
   <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/style.css' type='text/css' media='all' />
   <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/scss/elements/theme-css.css' type='text/css' media='all' />
   <link rel='stylesheet' id="creote-color-switcher-css" href='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/scss/elements/color-switcher/color5.css' type='text/css' media='all' />
   <!-- Style-->
   <!----woocommerce---->
   <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/woocommerce-layout.css' type='text/css' media='all' />
   <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/woocommerce.css' type='text/css' media='all' />
   <!----woocommerce---->

   <!-- Fav Icon -->
   <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/favicon_io/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/favicon_io/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/favicon_io/favicon-16x16.png">
   <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/favicon_io/site.webmanifest">
   <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/favicon_io/favicon.ico" type="image/x-icon">
   <!-- Fav Icon -->

   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/whatsapp/css/font-awesome.css">
   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/whatsapp/css/right-menu.css">

<!--catalog-->
   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/css/catalog.css">
<!--catalog-->

<!--WhatsApp Icons-->
   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/whatsapp/css/whatsapp.css">
   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/whatsapp/css/font-awesome.css">
   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/whatsapp/css/right-menu.css">
<!--WhatsApp Icons-->

<!-- Your code -->
<script src="https://www.google.com/recaptcha/enterprise.js?render=6LfkF18pAAAAAHMzfNqnpNdGHxpsyg4Xj6Sovgir"></script>
<!-- Your code -->

</head>

<body class="home theme-creote page-home-default-one">

<!--WhatsApp Icons-->
<div id="whatsapp">
    <a href="https://api.whatsapp.com/send/?phone=<?php the_field('whatsapp', 'options'); ?>&text&app_absent=0" target="_blank" class="wtsapp">
        <i class="fa fa-whatsapp"></i>
    </a>
</div>
<!--WhatsApp Icons-->

<!--catalog-->
   <?php
      $file = get_field('catalog_en', 'options');
         if( $file ): ?>
         <div id="mySidenav" class="sidenav">
            <a href="<?php echo $file; ?>" target="_blank" class="catalog">
               <i class="fa fa-file-pdf-o padding-icon fa-2x pull-left" aria-hidden="true"></i>Catalogare
            </a>
         </div>
   <?php endif; ?>
<!--catalog-->

   <div id="wrapper_full" class="content_all_warpper">
      <!----mini cart----->
      <div class="mini_cart_togglers fixed_cart">
         <div class="mini-cart-count">
          <?php

               /* COUNT PRODUSE IN COS */

               $i=0;
               if(isset($_COOKIE['produse_it'])){
                  $oferta="<h4>Prodotti nel carrello</h4>";
                  $obj = json_decode(stripslashes($_COOKIE['produse_it']));
                  if($obj){

                  
                  foreach($obj as $item => $value){
                  
                  $i++;

                  
                  }}
                  
                  
                  }



               echo $i;
               ?>
         </div>
         <i class="icon-shopping-cart"></i>
      </div>
      <!----mini cart----->

   <div id="page" class="page_wapper hfeed site">
      
      <div id="wrapper_full" class="content_all_warpper">
         <!----page-header----->

         
         <!----header----->
         <div class="header_area " id="header_contents">
            <div class="top_bar style_one">
               <div class="auto-container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="top_inner">
                           <div class="left_side common_css">
                              <div class="contntent address">
                                 <i class="icon-placeholder"></i>
                                 <div class="text">
                                    <small>Posizione</small>
                                    <span><?php the_field('adresa', 'options')?></span>
                                 </div>
                              </div>
                              <div class="contntent email">
                                 <i class="icon-email"></i>
                                 <div class="text">
                                    <small>Email</small>
                                    <a href="mailto:<?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a>
                                 </div>
                              </div>
                           </div>
                           <div class="right_side common_css">
                              <div class="contntent phone">
                                 <i class="icon-phone-call"></i>
                                 <div class="text">
                                    <small>Telefono</small>
                                    <a href="tel:<?php the_field('telefon_contact', 'options'); ?>"><?php the_field('telefon_contact', 'options'); ?></a>
                                 </div>
                              </div>
                              <div class="contntent media">
                                 <i class="icon-share"></i>
                                 <div class="text">
                                    <small>Share</small>
                                    <a href="<?php the_field('facebook', 'options'); ?>" target="_blank" rel="nofollow">
                                       <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="<?php the_field('instagram', 'options'); ?>" target="_blank" rel="nofollow">
                                       <i class="fa fa-instagram"></i>
                                    </a>
									         <a href="<?php the_field('linkedin', 'options'); ?>" target="_blank" rel="nofollow">
                                       <i class="fa fa-linkedin"></i>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <header class="header header_default style_one style_two_remade get_sticky_header">
               <div class="auto-container">
                  <div class="row align-items-center">
                     <div class="col-lg-2 col-md-9 col-sm-9 col-xs-9 logo_column">
                        <div class="header_logo_box">
                           <a href="/" class="logo navbar-brand">
                              <img src="<?php the_field('logo_header', 'options'); ?>" alt="" class="logo_default" style="border-radius: 30px 0 0 30px;">
                              <img src="<?php the_field('logo_header', 'options'); ?>" alt="" class="logo__sticky">
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-10 col-md-3 col-sm-3 col-xs-3 menu_column">
                        <div class="navbar_togglers hamburger_menu">
                           <span class="line"></span>
                           <span class="line"></span>
                           <span class="line"></span>
                        </div>
                        <div class="header_content_collapse">
                           <div class="header_menu_box">
                              <div class="navigation_menu">
                                 <ul id="myNavbar" class="navbar_nav">
                                    <!-- 
                                       <li class="menu-item nav-item"><a href="/" class="nav-link"> <span>Acasa</span></a></li>
                                       <li class="menu-item nav-item"><a href="/despre-noi" class="nav-link"> <span>Despre noi</span></a></li>
                                       <li class="menu-item nav-item"><a href="/magazin" class="nav-link"> <span>Magazin</span></a></li>
                                       <li class="menu-item nav-item"><a href="/contact" class="nav-link"> <span>Contact</span></a></li> 
                                    -->
                                    

                                    <li class="menu-item nav-item">
                                  
                                       <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="header_right_content">
                              <ul>
                                 <li>
                                    <button type="button" class="search-toggler"><i class="icon-search"></i></button>
                                 </li>
                                 <li>
                                    <button type="button" class="contact-toggler"><i class="icon-bar"></i></button>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </header>
            <!-- end of the loop -->
         </div>
         <!----header----->
                  <!--===============PAGE CONTENT ==============-->
         <div id="content" class="site-content ">

            <!---slider---->
            <?php include_once('banner-it.php'); ?>
          
            <!---slider-end---->