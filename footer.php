<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<!---==============footer start =================-->
<div class="footer_area footer_two" id="footer_contents">
   <div class="container">
      <section class="newsteller mr_bottom_minus_110 style_two"
         style="background-image:url(<?php the_field('imagine_colaboreaza', 'options'); ?>)">
         <div class="auto-container">
            <div class="inner_stell">
               <div class="row">
                  <div class="col-md-12">
                     <div class="content">
                        <h2>
                           <?php the_field('titlu_colaboreaza', 'options'); ?>
                        </h2>
                        <p>
                           <?php the_field('descriere_colaboreaza', 'options'); ?>
                        </p>
                     </div>
                     <div class="theme_btn_all color_two">
                        <a href="/contact" target="_blank" rel="nofollow" class="theme-btn two">Contacteaza-ne</a>
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
                           $colaboreaza = get_field('descriere_colaboreaza', 'options');
                           echo substr($colaboreaza, 0, 150)."...";
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
                     <h2>Informatii</h2>
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
                                 <li class="menu-item"><a href="/intrebari-frecvente">Intrebari Frecvente</a></li>
                                 <li class="menu-item"><a href="/optiuni-de-livrare">Optiuni de Livrare</a></li>
                                 <li class="menu-item"><a href="/politica-de-retur">Politica de retur</a></li>
                                 <li class="menu-item"><a href="/politica-de-confidentialitate">Politica de
                                       confidentialitate</a></li>
                                 <li class="menu-item"><a href="/politica-cookie">Politica privind cookie-urile</a></li>
                                 <li class="menu-item"><a href="/termeni-si-conditii">Termeni si Conditii</a></li>
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
                     <h2>Magazin</h2>
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
                           $categories = get_categories(
                              array(
                                 'orderby' => 'name',
                                 'order' => 'ASC',
                                 /**
                                  * ADAUGI PARENT ASTA
                                  */
                                 'parent' => 0
                                 /**
                                  * DOAR ASTA SA ADAUGI!!!
                                  */
                              ));

                           foreach ($categories as $category) {
                              $category_link = sprintf(
                                 '<a href="%1$s" alt="%2$s">%3$s</a>',
                                 esc_url(get_category_link($category->term_id)),
                                 esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)),
                                 esc_html($category->name)
                              );

                              echo '<li class="menu-item">' . sprintf(esc_html__('%s', 'textdomain'), $category_link) . '</li> ';
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
                     <h2>Date contact</h2>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="mr_bottom_20"></div>
               <!--===============spacing==============-->
               <div class="footer_widgets get_in_touch_foo light_color">
                  <div class="get_intouch_inrfo">
                     <div class="foo_cont_inner">
                        <div class="top">
                           <h6> Despre noi</h6>
                           <p>
                              <?php the_field('companie', 'options'); ?>
                           </p>
                           <p>
                              <?php the_field('adresa', 'options'); ?>
                           </p>
                        </div>
                        <div class="bottom">
                           <h6> Contact</h6>
                           <div class="con_content">
                              <h5> Telefon :</h5>
                              <a href="tel:<?php the_field('telefon_contact', 'options'); ?>">
                                 <?php the_field('telefon_contact', 'options'); ?>
                              </a>
                           </div>
                           <div class="con_content">
                              <h5> Email:</h5>
                              <a href="mail:<?php the_field('email', 'options'); ?>">
                                 <?php the_field('email', 'options'); ?>
                              </a>
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
                     Copyright &copy;
                     <?php echo date('Y'); ?>
                     <?php the_field('companie', 'options'); ?>. Toate drepturile rezervate.
                  </div>
               </div>
               <div class="col-lg-4 col-md-12 col-sm-12">
                  <div class="nav_link_v_one text-md-end">
                     <ul>
                        <li>
                           <a href="/termeni-si-conditii" target="_blank" rel="nofollow">Termeni si conditii</a>
                        </li>
                        <li>
                           <a href="/politica-de-confidentialitate" target="_blank" rel="nofollow">Politica de
                              confidentialitate</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <hr />
               <div class="col-lg-12 col-md-12 col-sm-12 text-center footer_copy_content">
                  Website realizat de 
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
            <input type="search" class="search" placeholder="Cauta..." value="" name="s" title="Cauta in site" />
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
                  <input type="search" class="search" placeholder="Cauta..." value="" name="s" title="Cauta in site" />
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
                           <label> Nume / Companie<br />
                              <input type="text" name="name" value="" size="40" aria-required="true"
                                 aria-invalid="false" placeholder="Introdu Nume / Companie" />
                              <br />
                              <i class="fa fa-user"></i><br />
                           </label>
                        </p>
                        <p><label> Email<br />
                              <input type="email" name="email" value="" size="40" aria-required="true"
                                 aria-invalid="false" placeholder="Introdu Email" />
                              <br />
                              <i class="fa fa-envelope"></i><br />
                           </label>
                        </p>
                        <p><label> Telefon<br />
                              <input type="number" name="phone" value="" size="40" aria-required="true"
                                 aria-invalid="false" placeholder="Introdu telefon" />
                              <br />
                              <i class="fa fa-envelope"></i><br />
                           </label>
                        </p>
                        <p>
                           <label> Subiect<br />
                              <input type="text" name="subject" value="" size="40" aria-required="true"
                                 aria-invalid="false" placeholder="Subiect" />
                              <br />
                              <i class="fa fa-folder"></i><br />
                           </label>
                        </p>
                        <p>
                           <label> Mesaj<br />
                              <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                 aria-invalid="false" placeholder="Scrie mesaj"></textarea>
                              <br />
                              <i class="fa fa-comments"></i><br />
                           </label>
                        </p>
                        <p>
                           <label for="terms">
                              <input type="checkbox" id="terms" name="terms">
                              Sunt de acord cu <a href="/termeni-si-conditii">Termeni si conditii</a> a
                              <?php the_field('companie', 'options'); ?>
                           </label>
                        </p>
                        <p><input type="submit" value="Trimite" /></p>
                     </form>
                  </div>
               </div>
               <div class="col-lg-7 col-md-12 about_company_inner">
                  <div class="abt_content">
                     <div class="logo">
                        <img src="<?php the_field('logo_header', 'options'); ?>" alt="img" class="company_logo_modal">
                     </div>
                     <div class="text">
                        <p>
                           <?php the_field('descriere_colaboreaza', 'options'); ?>
                        </p>
                        <a href="/despre_noi">Citeste mai mult...</a>
                     </div>
                     <div class="post_contet_modal">
                        <h2> Produse noi</h2>
                        <div class="post_enable">

                           <?php
                           $recent_posts = wp_get_recent_posts(
                              array(
                                 'numberposts' => 5, // Number of recent posts thumbnails to display
                                 'post_status' => 'publish',
                                 'post_type' => 'produs',
                                 'orderby' => 'ID',
                                 'order' => 'DESC', // Show only the published posts
                                 'meta_query' => array(
                                    array(
                                       'key' => 'produs_nou',
                                       'value' => '"da"',
                                       'compare' => 'LIKE'
                                    )
                                 )
                              )
                           );

                           foreach ($recent_posts as $post_item) {
                              if (has_post_thumbnail($post_item["ID"])) {
                                 $image = wp_get_attachment_image_src(get_post_thumbnail_id($post_item['ID']), 'single-post-thumbnail');
                              } else {
                                 $image = array("/wp/wp-content/uploads/noproduct.png");
                              }
                              ?>

                              <div class="modal_post_grid">
                                 <a href="<?php echo $post_item['guid'] ?>">
                                    <img width="852" height="812" src="<?php echo $image[0]; ?>"
                                       class="main_img wp-post-image" alt="img" />
                                 </a>
                              </div>

                              <?php

                           }
                           ?>

                        </div>
                     </div>
                     <div class="copright">
                        Copyright &copy;
                        <?php echo date('Y'); ?>
                        <?php the_field('companie', 'options'); ?>. Toate drepturile rezervate.
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
                     if (isset($_COOKIE['produse'])) {

                        echo "<form action='/wp/cerere-oferta' method='post'>";

                        $oferta = "<h4>Produse adaugate:</h4>";
                        $obj = json_decode(stripslashes($_COOKIE['produse']));
                        $i = 0;

                        if ($obj) {
                           foreach ($obj as $item => $value) {
                              echo "<input type='hidden' name='oferta[]' value='{$value->cod};{$value->nume} - {$value->cantitate}' /> ";
                              echo "<input type='hidden' name='cantitate-{$value->cod}' value='{$value->cantitate}' /> ";
                              echo "<p>" . "- " . $value->nume . "-" . $value->cantitate . "buc" . "<a href='stergere-produs-cos?id={$value->cod}' title='Sterge Produs'> [ x ]</a></p>";
                              echo "<hr/>";
                              $i++;

                           }
                        }

                        if ($i == 0) {

                           ?>

                           Nu aveti produse selectate pentru <br /><strong>Cerere Oferta</strong><br /> Accesati <a
                              href="/wp/magazin">Magazin Produse</a>

                           <?php
                        } else {
                           echo "<input type='submit' name='csubmit' class='btn btn-primary' value='Cerere oferta'></form>";

                        }
                     } else {
                        ?>
                        Nu aveti produse selectate pentru <br /><strong>Cerere Oferta</strong><br /> Accesati <a
                           href="/wp/magazin">Magazin Produse</a>

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
<?php wp_footer(); ?>

<!---========================== javascript ==========================-->


<script>
   function onClick(e) {
      e.preventDefault();
      grecaptcha.enterprise.ready(async () => {
         const token = await grecaptcha.enterprise.execute('6LfkF18pAAAAAHMzfNqnpNdGHxpsyg4Xj6Sovgir', { action: 'LOGIN' });
      });
   }
</script>
</body>

</html>