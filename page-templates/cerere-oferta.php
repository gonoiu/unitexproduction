<?php
/**
 * Template Name: Cerere oferta
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
	get_header('page');
?>

  <!--===============PAGE CONTENT==============-->
  <div id="content" class="site-content ">
   <!---about--->
   <section class="about-section">
      <!--===============spacing==============-->
      <div class="pd_top_90"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row">
            <div class="col-xl-12 col-lg-12 ">
            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents table table-striped" cellspacing="0">
               <thead>
                  <tr>
                     <th class="product-name">Cod</th>
                     <th class="product-name">EAN</th>
                     <th class="product-name">Produs</th>
                     <th class="product-name">Cantitate</th>
                     <th></th>
                     
                  </tr>
               </thead>
               <tbody>
                  <tr class="woocommerce-cart-form__cart-item cart_item">
                     <td>cod</td>
                     <td>ean</td>
                     <td>produs</td>
                     <td>cantitate</td>
                     <td></td>
                  </tr>
               </tbody>
            </table>
            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_70"></div>
      <!--===============spacing==============-->
   </section>
   <!---about end--->

	<!--===============PAGE CONTENT END==============-->
	</div>

<?php
	get_footer();
?>
