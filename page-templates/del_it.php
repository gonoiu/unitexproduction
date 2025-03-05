<?php
ob_start();
/**
 * Template Name: Stergere produs din cart IT
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header('page');


$id=$_GET['id'];

function unsetValue(array $array, $value, $strict = TRUE)
{
    if(($key = array_search($value, $array, $strict)) !== FALSE) {
        unset($array[$key]);
    }
    return $array;
}

if(isset($_COOKIE['produse_it'])){

$produse=json_decode(stripslashes($_COOKIE['produse_it']));

foreach($produse as $key => $value){    

if($value->cod == $id){
    unset($produse[$key]);
}
    
}


$encoded=json_encode($produse);


setcookie("produse_it", $encoded, time() + (86400 * 30), "/");
header("Refresh:0; url=/wp/it/richiesta-di-offerta-2/");


}




?>

<div id="content" class="site-content ">
   <!---about--->
   <section class="about-section">
      <!--===============spacing==============-->
      <div class="pd_top_90"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row">
            <div class="col-xl-12 col-lg-12 ">
               <h4>Produse ramase: </h4>
               <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents table table-striped" cellspacing="0">
               <thead>
                  <tr>
                     <th class="product-name">Cod</th>
                     <th class="product-name">Produs</th>
                     <th class="product-name">Cantitate</th>
                  </tr>
               </thead>
               <tbody>
                  <tr class="woocommerce-cart-form__cart-item cart_item">
                     <?php
                     
                     if(isset($_COOKIE['produse_it'])){
                        $obj = json_decode(stripslashes($_COOKIE['produse_it']));
                        if($obj){
                        foreach($obj as $item => $value){
                           if($value->cod !== $id){
                           $nume=explode(";",$value->nume)[1];
                           echo "<tr>";
                           echo "<td>{$value->cod}</td>";
                           echo "<td>{$nume}</td>";
                           echo "<td>{$value->cantitate}</td>";
                           echo "</tr>";
                           }
                           
                        }
            
                        }
            
                     }
                     ?>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
      </div>
   </section>
</div>

<?php get_footer(); ?>
