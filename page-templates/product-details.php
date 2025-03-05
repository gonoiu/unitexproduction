<?php
/**
 * Template Name: Detalii Produs
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header('page');
?>
   <div id="content" class="site-content ">
      <!--===============default spacing==============-->
      <div class="pd_top_90"></div>
      <!--===============default spacing==============-->
      <main id="main" class="site-main products_single" role="main">
         <section class="default_single_product">
            <div class="auto-container">
               <div class="row align-items-center">
                  <div class="col-lg-6 col-md-12">
                     <div class="flexslider">
                        <ul class="slides">
                           <li data-thumb="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/products/product-2-min.png">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/products/product-2-min.png" class="img-fluid" alt="img" />
                           </li>
                           <li data-thumb="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/products/product-3-min.png">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/products/product-3-min.png" class="img-fluid" alt="img" />
                           </li>
                           <li data-thumb="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/products/product-4-min.png">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/products/product-4-min.png" class="img-fluid" alt="img" />
                           </li>
                           <li data-thumb="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/products/product-5-min.png">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/products/product-5-min.png" class="img-fluid" alt="img" />
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                     <div class="summary entry-summary">
                        <h1 class="product_title entry-title">Denumire produs</h1>
                        <div class="woocommerce-product-details__short-description">
                           <p>
                           Lorem ipsum dolor sit amet consectetur adipiscing elit venenatis, sagittis vitae ultrices euismod fringilla aptent placerat fusce, arcu ornare turpis proin sem etiam enim. 
                           Condimentum senectus primis lacinia interdum congue magnis ac eros natoque massa, bibendum pellentesque elementum turpis cursus sagittis viverra pharetra ad, lectus duis diam 
                           ultricies euismod nulla accumsan orci ullamcorper. Condimentum accumsan potenti hac luctus bibendum cras enim placerat, hendrerit parturient molestie phasellus cursus ornare 
                           pretium suspendisse tincidunt, metus id ante ac auctor purus fringilla.
                           </p>
                        </div>
                        
                        <div class="product_meta">
                           <span class="posted_in">Categorie: 
                              <a href="" rel="tag">Lanturi</a>,
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row default_row">
                     <div class="full_width_box">
                         <!--===============spacing==============-->
                         <div class="pd_top_90"></div>
                         <!--===============spacing==============-->
                           <form class="woocommerce-cart-form" action="request-offer.php" method="post">
                              <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents table table-striped" cellspacing="0">
                                 <thead>
                                    <tr>
                                       <th class="product-remove"><span class="screen-reader-text"></span></th>
                                       <th class="product-name">Cod</th>
                                       <th class="product-name">Produs</th>
                                       <th class="product-name">Lungime (m)</th>
                                       <th class="product-name">Greutate</th>
                                       <th class="product-name">Descriere</th>
                                       <th class="product-quantity">Cantitate</th>
                                       <th class="product-name">Fisa</th>
                                       <th class="product-name"></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr class="woocommerce-cart-form__cart-item cart_item">
                                       <td class="product-remove">
                                          <a href="#" class="remove" aria-label="Remove this item" data-product_id="2650" data-product_sku="">×</a>						
                                       </td>
                                       <td class="product-name">sku</td>
                                       <td class="product-name" data-title="Product">produs</td>
                                       <td class="product-name" data-title="Lungime">lungime</td>
                                       <td>greutatae</td>
                                       <td></td>
                                       <td>cantitate</td>
                                       <td><a href="" class="product-name"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                                       <td>
                                          <a href="#" target="_blank" rel="nofollow" class="theme-btn four">Cere oferta <i class="icon-right-arrow"></i></a>
                                       </td>
                                    </tr>
                                    <tr class="woocommerce-cart-form__cart-item cart_item">
                                       <td class="product-remove">
                                          <a href="#" class="remove" aria-label="Remove this item" data-product_id="2650" data-product_sku="">×</a>						
                                       </td>
                                       <td class="product-name">sku</td>
                                       <td class="product-name" data-title="Product">produs</td>
                                       <td class="product-name" data-title="Lungime">lungime</td>
                                       <td>greutatae</td>
                                       <td></td>
                                       <td>cantitate</td>
                                       <td><a href="" class="product-name"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                                       <td>
                                          <a href="#" target="_blank" rel="nofollow" class="theme-btn four">Cere oferta <i class="icon-right-arrow"></i></a>
                                       </td>
                                    </tr>
                                    <tr class="woocommerce-cart-form__cart-item cart_item">
                                       <td class="product-remove">
                                          <a href="#" class="remove" aria-label="Remove this item" data-product_id="2650" data-product_sku="">×</a>						
                                       </td>
                                       <td class="product-name">sku</td>
                                       <td class="product-name" data-title="Product">produs</td>
                                       <td class="product-name" data-title="Lungime">lungime</td>
                                       <td>greutatae</td>
                                       <td></td>
                                       <td>cantitate</td>
                                       <td><a href="" class="product-name"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                                       <td>
                                          <a href="#" target="_blank" rel="nofollow" class="theme-btn four">Cere oferta <i class="icon-right-arrow"></i></a>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </form>
                         <!--===============spacing==============-->
                         <div class="pd_bottom_90"></div>
                         <!--===============spacing==============-->
                     </div>
                  </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="woocommerce-tabs wc-tabs-wrapper">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                 data-bs-target="#profile-tab-pane" type="button" role="tab"
                                 aria-controls="profile-tab-pane" aria-selected="false">
                                 Descriere
                              </button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                 data-bs-target="#contact-tab-pane" type="button" role="tab"
                                 aria-controls="contact-tab-pane" aria-selected="false">
                                 Informatii aditionale
                              </button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                 data-bs-target="#legenda" type="button" role="tab"
                                 aria-controls="legenda" aria-selected="false">
                                 Legenda
                              </button>
                           </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                           <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel"
                              aria-labelledby="profile-tab" tabindex="0">

                              <div class="content_box">
                                 <h2>Descriere</h2>
                                 <p>
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit fames neque dignissim, tempus suscipit eget eu nullam praesent risus nisi metus commodo, 
                                    in sociis integer massa magna mauris lobortis auctor at. Scelerisque dapibus torquent accumsan arcu facilisi cubilia curae tempus nisi, suscipit
                                     maecenas cras iaculis euismod vehicula hendrerit. Himenaeos sollicitudin quam duis hac tempor porttitor pretium, fringilla rhoncus taciti aliquam 
                                     pellentesque consequat accumsan, torquent bibendum class convallis rutrum magnis.
                                 </p>
                              </div>

                           </div>
                           <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                              aria-labelledby="contact-tab" tabindex="0">
                              <div class="content_box">
                                 <h2>Informatii aditionale</h2>
                                
                                 <table class="woocommerce-product-attributes shop_attributes" style="border: solid 1px #D7D6D6">
                                    <tbody>
                                       <tr class="woocommerce-product-attributes-item" style="border: solid 1px #D7D6D6">
                                          <th class="woocommerce-product-attributes-item__label" style="border: solid 1px #D7D6D6">Greutate</th>
                                          <td class="woocommerce-product-attributes-item__value">Nu se aplică</td>
                                       </tr>
                                       <tr class="woocommerce-product-attributes-item"  style="border: solid 1px #D7D6D6">
                                          <th class="woocommerce-product-attributes-item__label" style="border: solid 1px #D7D6D6">Dimensiuni</th>
                                          <td class="woocommerce-product-attributes-item__value">Nu se aplică</td>
                                       </tr>
                                       <tr class="woocommerce-product-attributes-item" style="border: solid 1px #D7D6D6">
                                          <th class="woocommerce-product-attributes-item__label" style="border: solid 1px #D7D6D6">Capacitate de Ridicare</th>
                                          <td class="woocommerce-product-attributes-item__value"><p>4 Tone</p></td>
                                       </tr>
                                       <tr class="woocommerce-product-attributes-item" style="border: solid 1px #D7D6D6">
                                          <th class="woocommerce-product-attributes-item__label" style="border: solid 1px #D7D6D6">Model</th>
                                          <td class="woocommerce-product-attributes-item__value"><p>DT, TE, TLX</p></td>
                                       </tr>
                                       <tr class="woocommerce-product-attributes-item" style="border: solid 1px #D7D6D6">
                                          <th class="woocommerce-product-attributes-item__label" style="border: solid 1px #D7D6D6">Lungime / Desfasurata (m)</th>
                                          <td class="woocommerce-product-attributes-item__value"><p>0.5 -1 m, 1 – 2 m, 1.5 – 3 m, 10 – 20 m, 2 – 4 m, 2.5 – 5 m, 3 – 6 m, 3.5 – 7 m, 4- 8 m, 4.5 – 9 m, 5 – 10 m, 6 – 12 m, 7 – 14 m, 8 – 16 m, 9 – 18 m</p></td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="legenda" role="tabpanel"
                              aria-labelledby="contact-tab" tabindex="0">
                              <div class="content_box">
                                 <h2>Legenda</h2>
                                 <table class="woocommerce-product-attributes shop_attributes">
                                    <tbody>
                                       <tr
                                          class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_books">
                                          <th class="woocommerce-product-attributes-item__label">1</th>
                                          <td class="woocommerce-product-attributes-item__value">
                                             <p>2</p>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="related products">
            <div class="auto-container">
               <div class="row gutter_30px">
                  <div class="col-lg-12">
                     <h2>Produse asemanatoare</h2>
                     <div class="product_related_posts theme_carousel owl-theme owl-carousel">
                        <div class="project-wrapper grid-item">
                           <div class="product_box type_one">
                              <div class="inner_box">
                                 <div class="image_box">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/products/product-1-min.png" class="img-fluid" alt="img">
                                 </div>
                              </div>
                              <div class="content_box">
                                 <h2><a href="">Denumire produs</a></h2>
                                
                                 <div class="cart_btn">
                                    <a href="" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" rel="nofollow">vezi Produs</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="project-wrapper grid-item">
                           <div class="product_box type_one">
                              <div class="inner_box">
                                 <div class="image_box">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/products/product-5-min.png" class="img-fluid" alt="img">
                                 </div>

                              </div>
                              <div class="content_box">
                                 <h2><a href="">Denumire produs</a></h2>

                                 <div class="cart_btn">
                                    <a href=""
                                       class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" rel="nofollow">vezi Produs</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div
                           class="project-wrapper grid-item product type-product status-publish last instock product_cat-coaching product_cat-employee-relation product_cat-recruiting has-post-thumbnail virtual sold-individually purchasable product-type-simple">
                           <div class="product_box type_one">
                              <div class="inner_box">
                                 <div class="image_box">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/products/product-9-min.png" class="img-fluid" alt="img">
                                 </div>
                              </div>
                              <div class="content_box">
                                 <h2><a href="">Denumire produs</a></h2>

                                 <div class="cart_btn">
                                    <a href="" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" rel="nofollow">vezi Produs</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         
      </main>
      <!--===============default spacing==============-->
      <div class="pd_bottom_50"></div>
   <!--===============default spacing==============-->

   </div>

<?php get_footer(); ?>