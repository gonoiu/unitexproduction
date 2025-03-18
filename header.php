<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$bootstrap_version = get_theme_mod('understrap_bootstrap_version', 'bootstrap4');
$navbar_type = get_theme_mod('understrap_navbar_type', 'collapse'); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <?php wp_head(); ?>
   </head>

   <body <?php body_class("home theme-creote page-home-default-one"); ?> <?php understrap_body_attributes(); ?>>

      <!--WhatsApp Icons-->
      <div id="whatsapp">
         <a href="https://api.whatsapp.com/send/?phone=<?php the_field('whatsapp', 'options'); ?>&text&app_absent=0"
            target="_blank" class="wtsapp">
            <i class="fa fa-whatsapp"></i>
         </a>
      </div>
      <!--WhatsApp Icons-->



      <!--catalog-->
      <?php
      $file = get_field('catalog_en', 'options');
      if ($file): ?>
         <div id="mySidenav" class="sidenav">
            <a href="<?php echo $file; ?>" target="_blank" class="catalog">
               <i class="fa fa-file-pdf-o padding-icon fa-2x pull-left" aria-hidden="true"></i>Catalog
            </a>
         </div>
      <?php endif; ?>
      <!--catalog-->



      <div id="wrapper_full" class="content_all_warpper">
         <!----mini cart----->
         <div class="mini_cart_togglers fixed_cart">
            <div class="mini-cart-count">
               <span class="cart-count">
                  <?php echo WC()->cart->get_cart_contents_count(); ?>
               </span>
            </div>
            <i class="icon-shopping-cart"></i>
         </div>


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
                                          <small>Locatie</small>
                                          <span>
                                             <?php the_field('adresa', 'options') ?>
                                          </span>
                                       </div>
                                    </div>
                                    <div class="contntent email">
                                       <i class="icon-email"></i>
                                       <div class="text">
                                          <small>Email</small>
                                          <a href="mailto:<?php the_field('email', 'options'); ?>">
                                             <?php the_field('email', 'options'); ?>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="right_side common_css">
                                    <div class="contntent phone">
                                       <i class="icon-phone-call"></i>
                                       <div class="text">
                                          <small>Telefon</small>
                                          <a href="tel:<?php the_field('telefon_contact', 'options'); ?>">
                                             <?php the_field('telefon_contact', 'options'); ?>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="contntent media">
                                       <i class="icon-share"></i>
                                       <div class="text">
                                          <small>Share</small>
                                          <a href="<?php the_field('facebook', 'options'); ?>" target="_blank"
                                             rel="nofollow">
                                             <i class="fa fa-facebook"></i>
                                          </a>
                                          <a href="<?php the_field('instagram', 'options'); ?>" target="_blank"
                                             rel="nofollow">
                                             <i class="fa fa-instagram"></i>
                                          </a>
                                          <a href="<?php the_field('linkedin', 'options'); ?>" target="_blank"
                                             rel="nofollow">
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
                     <div class="auto-container main-header-bar">
                        <div class="row align-items-center">
                           <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9 logo_column ">
                              <div class="header_logo_box">
                                 <a href="/" class="logo navbar-brand" style="">
                                    <img src="<?php the_field('logo_header', 'options'); ?>" alt="" class="logo_default"
                                       style="border-radius: 30px 0 0 30px;">
                                    <img src="<?php the_field('logo_header', 'options'); ?>" alt="" class="logo__sticky"
                                       style="width: 300px">
                                 </a>
                              </div>
                              <?php
                              // Show category menu only on front page
                              if (is_front_page()): ?>
                              <div class="menu-box-absolute-position">
                                 <?php
                                 $args = array(
                                    'taxonomy' => 'product_cat',
                                    'orderby' => 'name',
                                    'order' => 'ASC',
                                    'hide_empty' => false,
                                    'parent' => 0,
                                 );

                                 $product_categories = get_terms($args);

                                 if (!empty($product_categories) && !is_wp_error($product_categories)) {
                                    foreach ($product_categories as $category) {
                                       $category_link = get_term_link($category);
                                       if (is_wp_error($category_link)) {
                                          continue;
                                       }
                                       echo '<div class="product-category">';
                                       echo '<a href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a>';
                                       echo '</div>';
                                    }
                                 }
                                 ?>

                              </div>
                              <?php endif; ?>
                           </div>
                           <div class="col-lg-9 col-md-3 col-sm-3 col-xs-3 menu_column">
                              <div class="navbar_togglers hamburger_menu">
                                 <span class="line"></span>
                                 <span class="line"></span>
                                 <span class="line"></span>
                              </div>
                              <div class="header_content_collapse">
                                 <div class="header_menu_box">
                                    <div class="navigation_menu">
                                       <ul id="myNavbar" class="navbar_nav">


                                          <li class="menu-item nav-item">

                                             <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="header_right_content">
                                    <ul>
                                       <li>
                                          <button type="button" class="search-toggler"><i
                                                class="icon-search"></i></button>
                                       </li>
                                       <li>
                                          <button type="button" class="contact-toggler"><i
                                                class="icon-bar"></i></button>
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
                  <?php include_once('banner.php'); ?>

                  <!---slider-end---->
