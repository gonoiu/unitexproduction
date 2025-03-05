<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?> 

<!---==============footer start =================-->
      <div class="footer_area footer_two" id="footer_contents">
         <div class="container">
            <section class="newsteller mr_bottom_minus_110 style_two" style="background-image:url(<?php the_field('imagine_colaboreaza', 'options'); ?>)">
               <div class="auto-container">
                  <div class="inner_stell">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="content">
                              <h2><?php the_field('titlu_colaboreaza_en', 'options'); ?></h2>
                              <p><?php the_field('descriere_colaboreaza_en', 'options'); ?></p>
                           </div>
                           <div class="theme_btn_all color_two">
                              <a href="/contact_en" rel="nofollow" class="theme-btn two">Contact Us</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <div class="footer_widgets_wrap bg_dark_2">
            <!--===============spacing==============-->
               <div class="pd_top_100"></div>
               <div class="pd_top_100"></div>
            <!--===============spacing==============-->
            <div class="container">
               <div class="row">
                  <div class="col-xl-2 col-lg-6 col-md-12 col-sm-12">
                     <div class="footer_widgets about_company light_color">
                        <div class="about_company_inner">
                           <div class="footer_logo">
                              <a href="#" target="_blank" rel="nofollow">
                                 <img src="<?php the_field('logo_footer', 'options'); ?>" alt="logo" />
                              </a>
                           </div>
                           <!--===============spacing==============-->
                              <div class="mr_bottom_20"></div>
                           <!--===============spacing==============-->
                           <div class="content_box">
                              <p> 
                                 <?php 

                                 /**
                                  * IMPORTANT!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                                  * FOLOSESTE GETFIELD
                                  */
                                    $colaboreaza = get_field('descriere_colaboreaza_en', 'options');  
                                    echo substr( $colaboreaza,0,150)."..."; 
                                 ?>
                              </p>
                           </div>
                        </div>
                     </div>
                 
                  </div>
                  <div class="col-lg-1 hidden-lg"></div>
                  <div class="col-xl-2 col-lg-3 col-md-6 col-sm-12">
                     <div class="footer_widgets wid_tit style_one">
                        <div class="fo_wid_title">
                           <h2>Information</h2>
                        </div>
                     </div>
                     <!--===============spacing==============-->
                        <div class="mr_bottom_20"></div>
                     <!--===============spacing==============-->
                     <div class="footer_widgets clearfix navigation_foo light_color style_one">
                        <div class="navigation_foo_box">
                           <div class="navigation_foo_box">
                              <div class="navigation_foo_inner">
                                 <div class="menu-information-container">
                                    <ul class="menu">
                                       <li class="menu-item"><a href="/frequent-questions">Frequent questions</a></li>
                                       <li class="menu-item"><a href="/delivery-options">Delivery Options</a></li>
                                       <li class="menu-item"><a href="/return-policy">Return policy</a></li>
                                       <li class="menu-item"><a href="/cookie-policy">Cookie Policy</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-2 col-lg-3 col-md-6 col-sm-12">
                     <div class="footer_widgets wid_tit style_one">
                        <div class="fo_wid_title">
                           <h2>Shop</h2>
                        </div>
                     </div>
                     <!--===============spacing==============-->
                     <div class="mr_bottom_20"></div>
                     <!--===============spacing==============-->
                     <div class="footer_widgets clearfix navigation_foo light_color style_one">
                        <div class="navigation_foo_box">
                           <div class="navigation_foo_inner">
                              <ul class="menu">
                                 <?php
                                    $categories = get_categories( array(
                                       'orderby' => 'name',
                                       'order'   => 'ASC',
                                       /**
                                        * ADAUGI PARENT ASTA
                                        */
                                       'parent' => 0
                                       /**
                                        * DOAR ASTA SA ADAUGI!!!
                                        */
                                    ) );

                                    foreach( $categories as $category ) {
                                       if($category->name !== 'Uncategorized'){
                                       $category_link = sprintf( 
                                          '<a href="%1$s" alt="%2$s">%3$s</a>',
                                          esc_url( get_category_link( $category->term_id ) ),
                                          esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                                          esc_html( $category->name )
                                       );
                                       
                                       echo '<li class="menu-item">' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</li> ';
                                    }
                                    
                                    }
                                 ?>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-1 hidden-lg"></div>
                  <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                     <div class="footer_widgets wid_tit style_one">
                        <div class="fo_wid_title">
                           <h2>Contact data</h2>
                        </div>
                     </div>
                     <!--===============spacing==============-->
                     <div class="mr_bottom_20"></div>
                     <!--===============spacing==============-->
                     <div class="footer_widgets get_in_touch_foo light_color">
                        <div class="get_intouch_inrfo">
                           <div class="foo_cont_inner">
                              <div class="top">
                                 <h6> About Us</h6>
                                 <p><?php the_field('companie', 'options'); ?></p>
                                 <p><?php the_field('adresa', 'options'); ?></p>
                              </div>
                              <div class="bottom">
                                 <h6> Contact Us</h6>
                                 <div class="con_content">
                                    <h5> Phone :</h5>
                                    <a href="tel:<?php the_field('telefon_contact', 'options'); ?>"><?php the_field('telefon_contact', 'options'); ?></a>
                                 </div>
                                 <div class="con_content">
                                    <h5> Email:</h5>
                                    <a href="mail:<?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <?php
                     $sal_img = get_field('sal', 'options');
                     $sol_img = get_field('sol', 'options');
                     $sal_link = get_field('link_sal', 'options');
                     $sol_link = get_field('link_sol', 'options');
                  ?>

                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-center">
                     <a href="<?php echo $sal_link; ?>" target="_blank">
                        <img src="<?php echo $sal_img; ?>" style="width:250px; height:auto">
                     </a>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-center">
                  <a href="<?php echo $sol_link; ?>" target="_blank">
                        <img src="<?php echo $sol_img; ?>" style="width:250px; height:auto">
                     </a>
                  </div>
               </div>
            <!--===============spacing==============-->
               <div class="pd_bottom_40"></div>
            <!--===============spacing==============-->
         </div>
         <div class="footer_copy_right bg_dark_3">
            <!--===============spacing==============-->
               <div class="pd_top_20"></div>
            <!--===============spacing==============-->
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-8 col-md-12 col-sm-12">
                     <div class="footer_copy_content">
                        Copyright &copy; <?php echo date('Y'); ?> <?php the_field('companie', 'options'); ?>. All rights reserved.
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                     <div class="nav_link_v_one text-md-end">
                        <ul>
                           <li>
                              <a href="/terms-and-conditions" rel="nofollow">Terms and conditions</a>
                           </li>
                           <li>
                              <a href="/privacy-policy" rel="nofollow">Privacy policy</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <hr/>
                  <div class="col-lg-12 col-md-12 col-sm-12 text-center footer_copy_content">
                     Website by 
                     <a href="http://webetwas.com">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/webetwas.png" alt="realizare pagini web">
                     </a>
                  </div>
               </div>
            </div>
            <!--===============spacing==============-->
               <div class="pd_bottom_20"></div>
            <!--===============spacing==============-->
         </div>
      </div>
      <!---==============footer end =================-->
      <!---==============mobile menu =================-->
      <div class="crt_mobile_menu">
         <div class="menu-backdrop"></div>
         <nav class="menu-box">
            <div class="close-btn"><i class="icon-close"></i></div>
            <form role="search" method="get" action="#">
               <input type="search" class="search" placeholder="Search..." value="" name="s" title="Search the site" />
               <button type="submit" class="sch_btn"> <i class="icon-search"></i></button>
            </form>
            <div class="menu-outer">
               <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
         </nav>
      </div>
      <!---==============mobile menu end =================-->
      <!---==============search popup =================-->
      <div id="search-popup" class="search-popup">
         <div class="close-search"><i class="fa fa-times"></i></div>
         <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
               <fieldset>
                  <form role="search" method="get" action="#">
                     <input type="search" class="search" placeholder="Search..." value="" name="s" title="Search the site" />
                     <button type="submit" class="sch_btn"> <i class="icon-search"></i></button>
                  </form>
               </fieldset>
            </div>
         </div>
      </div>
      <!---==============search popup end =================-->
      <!---==============modal popup =================-->
      <div class="modal_popup one">
         <div class="modal-popup-inner">
            <div class="close-modal"><i class="fa fa-times"></i></div>
            <div class="modal_box">
               <div class="row">
                  <div class="col-lg-5 col-md-12 form_inner">
                     <div class="form_content">
                        <form class="contact-form" method="post" action="sendemail.php">
                           <p>
                              <label> Name / Company<br />
                                 <input type="text" name="name" value="" size="40" aria-required="true"
                                    aria-invalid="false" placeholder="Enter Name / Company" />
                                 <br />
                                 <i class="fa fa-user"></i><br />
                              </label>
                           </p>
                           <p><label> Email<br />
                                 <input type="email" name="email" value="" size="40" aria-required="true"
                                    aria-invalid="false" placeholder="Enter Email" />
                                 <br />
                                 <i class="fa fa-envelope"></i><br />
                              </label>
                           </p>
						   <p><label> Phone<br />
                                 <input type="number" name="phone" value="" size="40" aria-required="true"
                                    aria-invalid="false" placeholder="Enter phone"/>
                                 <br />
                                 <i class="fa fa-phone"></i><br />
                              </label>
                           </p>
                           <p>
                              <label> Subject<br />
                                 <input type="text" name="subject" value="" size="40" aria-required="true"
                                    aria-invalid="false" placeholder="Subject" />
                                 <br />
                                 <i class="fa fa-folder"></i><br />
                              </label>
                           </p>
                           <p>
                              <label> Message<br />
                                 <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                    aria-invalid="false" placeholder="Write message"></textarea>
                                 <br />
                                 <i class="fa fa-comments"></i><br />
                              </label>
                           </p>
                           <p><input type="submit" value="Send Email" /></p>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-12 about_company_inner">
                     <div class="abt_content">
                        <div class="logo">
                           <img src="<?php the_field('logo_header', 'options'); ?>" alt="img" class="company_logo_modal">
                        </div>
                        <div class="text">
                           <p><?php the_field('descriere_colaboreaza_en', 'options');?></p>
                           <a href="/about-us">Read more...</a>
                        </div>
                        <div class="post_contet_modal">
                           <h2> New Products</h2>
                           <div class="post_enable">
                              <div class="modal_post_grid">
                                 <a href="#">
                                    <img width="852" height="812" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/blog/blog-image-9.jpg"
                                       class="main_img wp-post-image" alt="img" />
                                 </a>
                              </div>
                              <div class="modal_post_grid">
                                 <a href="#">
                                    <img width="852" height="812" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/blog/blog-image-8.jpg"
                                       class="main_img wp-post-image" alt="img" />
                                 </a>
                              </div>
                              <div class="modal_post_grid">
                                 <a href="#">
                                    <img width="852" height="812" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/blog/blog-image-7.jpg"
                                       class="main_img wp-post-image" alt="img" />
                                 </a>
                              </div>
                              <div class="modal_post_grid">
                                 <a href="#">
                                    <img width="852" height="812" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/blog/blog-image-6.jpg"
                                       class="main_img wp-post-image" alt="img" />
                                 </a>
                              </div>
                              <div class="modal_post_grid">
                                 <a href="#">
                                    <img width="852" height="812" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/blog/blog-image-5.jpg"
                                       class="main_img wp-post-image" alt="img" />
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="copright">
                           Copyright &copy; <?php echo date('Y'); ?> <?php the_field('companie', 'options'); ?>. All rights reserved.
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!---==============modal popup end=================-->
       <!---==============cerere oferte=================-->
       <div class="side_bar_cart" id="mini_cart">
         <div class="cart_overlay"></div>
         <div class="cart_right_conten">
            <div class="close">
               <div class="close_btn_mini"><i class="icon-close"></i></div>
            </div>
            <div class="cart_content_box">
               <div class="contnet_cart_box">
                  <div class="widget_shopping_cart_content">
                     <p class="woocommerce-mini-cart__empty-message">
                     
                     <?php
                           /* VERIFICAM DACA AVEM PRODUSE IN COS */
                           if(isset($_COOKIE['produse_en'])){

                           echo "<form action='/wp/en/offer-request' method='post'>";
                           
                           $oferta="<h4>Products in cart:</h4>";
                           $obj = json_decode(stripslashes($_COOKIE['produse_en']));
                           $i=0;

                           if($obj){
                           foreach($obj as $item => $value){
                              echo "<input type='hidden' name='oferta[]' value='{$value->cod};{$value->nume} - {$value->cantitate}' /> ";
                              echo "<input type='hidden' name='cantitate-{$value->cod}' value='{$value->cantitate}' /> ";
                              echo "<p>". "- " .$value->nume. "-" .$value->cantitate. "buc" . "<a href='stergere-produs-en?id={$value->cod}' title='Delete from cart'> [ x ]</a></p>";
                              echo "<hr/>";
                              $i++;

                           }
                           }

                           if($i == 0){

                        ?>

You have no products selected for <br /><strong>Offer Request</strong><br/> Go to <a href="/wp/it/shop">Products Store</a>

                        <?php
                        }
                           else
                        {
                        echo "<input type='submit' name='csubmit' class='btn btn-primary' value='Request offer'></form>";

                        }
                        }
                        else

                        {
                     ?>
                     
                     You have no products selected for <br /><strong>Offer Request</strong><br/> Go to <a href="/wp/it/shop">Products Store</a>
                     <?php

                     }

                     ?>




                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!---==============cerere oferte=================-->
   
   </div>
   <!-- Back to top with progress indicator-->
   <div class="prgoress_indicator">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
      <!---========================== javascript ==========================-->
      <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/jquery-3.6.0.min.js'></script>
      <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/bootstrap.min.js'></script>
      <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/jquery.fancybox.js'></script>
      <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/jQuery.style.switcher.min.js'></script>
      <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/jquery.flexslider-min.js'></script>
      <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/color-scheme.js'></script>
      <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/owl.js'></script>
      <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/swiper.min.js'></script>
      <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/isotope.min.js'></script>
      <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/countdown.js'></script>
      <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/simpleParallax.min.js'></script>
      <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/appear.js'></script>
      <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/jquery.countTo.js'></script>
      <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/sharer.js'></script>
      <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/validation.js'></script>

      <!-- main-js -->
      <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/js/creote-extension.js'></script>
      <!---========================== javascript ==========================-->
  </body>
  </html>