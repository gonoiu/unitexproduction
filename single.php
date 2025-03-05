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
$pid=get_the_ID();
$pnume=get_the_title($pid);
$pdesc=get_the_content($pid);
$category_detail=get_the_category($pid);//$post->ID
$image = wp_get_attachment_image_src( get_post_thumbnail_id($pid), 'single-post-thumbnail' );


/**
 * DEFINIM LIMBA PE CARE O FOLOSESTE SITE-UL
 */

 // VARIABILA CU CARE LUCREZI ESTE LANG
$lang = "ro";


 foreach (explode("/", $_SERVER['REQUEST_URI']) as $item) {

   // IT
   if ($item == 'it') {
      $lang = "it";
   }
   /** EN */
   if ($item == 'en') {
      $lang = "en";
   }

}


switch ($lang){

   case "it":
      $cod = "Codice";
      $material = "Materiale";
      $wll="WLL (tonnellata)";
      $lungime = "Lunghezza";
      $diametru = "Diametro";
      $sf = "Fattore di sicurezza";
      $culoare = "Colore";
      $cantitate="Quantità";
      $pret="Tariffa";
      $total="Totale";
      $doritioferta = "Vuoi l'offerta?";
      $addcart = "Aggiungi al carrello";
      $viewcart = "Vedi cestino";
      $descriere = "Descrizione";
      $info = "Informazioni aggiuntive";
      $produseasemanatoare = "Prodotti Simili";
      $categorie = "Categoria:";
      $viewp = "Vedi il prodotto";

      break;

      case "en":
         $cod = "Code";
       $material = "Material";
       $wll="WLL (ton)";
       $length = "Length";
       $diametru = "Diameter";
       $sf = "Safety factor";
       $culoare = "Color";
       $cantitate="Quantity";
       $pret="Value";
       $total="Total";
       $doritioferta = "Do you want the offer?";
       $addcart = "Add to cart";
       $viewcart = "View basket";
       $descriere = "Description";
       $info = "Additional information";
       $produseasemanatoare = "Similar Products";
       $categorie = "Category:";
       $viewp = "See product";
       break;

       case "ro":
         $cod = "Cod";
       $material = "Material";
       $wll="WLL (tona)";
       $lungime = "Lungime";
       $diametru = "Diametru";
       $sf = "Factor de siguranță";
       $culoare = "Culoare";
       $cantitate="Cantitate";
       $pret="Tarif";
       $total="Total";
       $doritioferta = "Vrei oferta?";
       $addcart = "Adaugă în coș";
       $viewcart = "Vezi coșul";
       $descriere = "Descriere";
       $info = "Informații suplimentare";
       $produseasemanatoare = "Produse similare";
       $categorie = "Categorie:";
       $viewp = "Vizualizare produs";
       break;

}

?>

   <div id="content" class="site-content ">

      <ul>
         <?//php pll_the_languages(); ?>
      </ul>
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
                          

<?php
$pimg = 0;
$args = array(
   'post_parent'    => get_the_ID(), // your post id
   'post_type'      => 'attachment',
   'numberposts'    => -1, // show all
   'post_status'    => 'any',
   'post_mime_type' => 'image',
   'orderby'        => 'menu_order',
   'order'           => 'ASC'
);

$images = get_posts($args);


foreach($images as $key => $value){
   $pimg++;


   ?>
   <li data-thumb="<?php echo wp_get_attachment_url($value->ID); ?>">
      <img src="<?php echo wp_get_attachment_url($value->ID); ?>" class="img-fluid" alt="img" />
   </li>
<?php



}


?>

                           <?php
                              $imguri = get_stylesheet_directory_uri();
                              if ($pimg == 0) {
                                 ?>

                              <li data-thumb="<?php echo $imguri . "/assets/assets/images/no-image.jpg"; ?>">

                              <img src="<?php echo $imguri . "/assets/assets/images/no-image.jpg"; ?>" class="img-fluid" alt="img" />
                              <?php

                              }

                           ?>
                           
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                     <div class="summary entry-summary">
                        <h1 class="product_title entry-title"><?php echo $pnume;?></h1>
                        <div class="woocommerce-product-details__short-description">
                           <?php 
                              $culoare = get_field('culoare');
                              $latime_banda = get_field('latime_banda');
                              $standard_en = get_field('standard_en');
                              $greutate = get_field('greutate');
                              $sarcina_rupere = get_field('sarcina_rupere');
                              $c_ridicare = get_field('capacitate_de_ridicare');
                              $c_utilizare = get_field('coeficient_de_utilizare');
                           ?>

                           <p><?php the_content();?></p>

                           <p>
                              <?php if(!empty($culoare)):  ?>
                                 Culoare: <?php echo $culoare; ?><br/>
                              <?php endif; ?>

                              <?php if(!empty($latime_banda)):  ?>
                                 Latima banda: <?php echo $latime_banda; ?> mm<br/>
                              <?php endif; ?>

                              <?php if(!empty($standard_en)):  ?>
                                 Standard EN: <?php echo implode( ' ,' ,[the_field('standard_en')]); ?><br/>
                              <?php endif; ?>

                              <?php if(!empty($greutate)):  ?>
                                 Greutate: <?php echo $greutate; ?> kg<br/>
                              <?php endif; ?>

                              <?php if(!empty($sarcina_rupere)):  ?>
                                 Sarcina rupere: <?php echo $sarcina_rupere; ?><br/>
                              <?php endif; ?>

                              <?php if(!empty($c_ridicare)):  ?>
                                 Capacitate de ridicare: <?php echo implode( ' ,' ,[the_field('c_ridicare')]); ?><br/>
                              <?php endif; ?>

                              <?php if(!empty($c_utilizare)):  ?>
                                 Coeficient de utilizare: <?php echo $c_utilizare; ?><br/>
                              <?php endif; ?>

                           </p>
                           
                           <p>
                              <?php if(have_rows('nota')): ?>
                                 <?php while(have_rows('nota')): the_row();?>
                                    <?php if(get_row_layout() == 'chinga_ancorare'): ?>
                                          <?php
                                             $text = get_sub_field('text');
                                             $link = get_sub_field('link');
                                          ?>
                                          <p><strong><a href="<?php echo $link; ?>"><?php echo $text; ?></a></strong></p>
                                    <?php endif; ?>   
                                 <?php endwhile;?>
                              <?php endif; ?>
                           </p>

                           <p>
                              <?php if(have_rows('nota')): ?>
                                 <?php while(have_rows('nota')): the_row();?>
                                    <?php if(get_row_layout() == 'chinga_ridicare'): ?>
                                          <?php
                                             $text = get_sub_field('text');
                                             $link = get_sub_field('link');
                                          ?>
                                          <p><strong><a href="<?php echo $link; ?>"><?php echo $text; ?></a></strong></p>
                                    <?php endif; ?>   
                                 <?php endwhile;?>
                              <?php endif; ?>
                           </p>

                        </div>
                        
                        <div class="product_meta">
                           <span class="posted_in"><?php echo $categorie; ?>
                              <a href="" rel="tag">
                                 <?php
                                    foreach($category_detail as $cd){
                                       echo "<a href='".get_category_link($cd->cat_ID)."'>".$cd->cat_name."</a>, ";
                                     
                                    }
                                 ?>
                              </a>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>

               <!--tabel-->
                  <div class="row default_row">
                     <div class="full_width_box">
                         <!--===============spacing==============-->
                         <div class="pd_top_90"></div>
                         <!--===============spacing==============-->
                           <form class="woocommerce-cart-form" action=
                           <?php

                                    if($lang == "ro"){
                                       echo '/cerere-oferta-nou';
                                    }
                                    if($lang == "en"){
                                       echo '/en/proc-oferta-en';
                                    }
                                    if($lang == "it"){
                                       echo '/it/richiesta-di-offerta';
                                    }
                                    


?>
                           
                            method="post">
                              <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents table table-striped" cellspacing="0">
                                 <thead>
                                    <tr>
                                       <th class="product-name"><?php echo $cod; ?></th>
                                       <th class="product-name"><?php echo $material; ?></th>
                                       <th class="product-name"><?php echo $wll; ?></th>
                                       <th class="product-name"><?php echo $lungime; ?></th>
                                       <th class="product-quantity"><?php echo $diametru; ?></th>
                                       <th class="product-name"><?php echo $sf; ?></th>
                                       <th class="product-name"><?php echo $culoare; ?></th>
                                       <th class="product-name text-center"><?php echo $cantitate; ?></th>
                                       <th class="product-name text-center"><?php echo $pret; ?></th>
                                       <th class="product-name text-center"><?php echo $total; ?></th>
                                       <th class="text-center"><?php echo $doritioferta; ?></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                       if( get_field('tabel', $pid) ) {
                                          while( the_repeater_field('tabel', $pid) ) {
                                    ?>

                                    <?php
                                       $cod = get_sub_field('cod_produs');
                                       $material = get_sub_field('material');
                                       $wll = get_sub_field('wll');
                                       $lungime = get_sub_field('lungime');
                                       $diametru = get_sub_field('diametru');
                                       $factor = get_sub_field('factor_de_siguranta');
                                       $culoare = get_sub_field('culoare');
                                    ?>
                                       <tr class="woocommerce-cart-form__cart-item cart_item">
                                          <td><?php echo $cod;?></td>
                                          <td class="text-center"><?php echo $material; ?></td>
                                          <td class="text-center"><?php echo $wll; ?></td>
                                          <td class="text-center"><?php echo $lungime; ?></td>
                                          <!-- <td class="text-center"><?php echo explode(".",$diametru)[1]; ?></td>  -->
                                          <td class="text-center"><?php echo $diametru; ?></td>
                                          <td class="text-center"><?php echo $factor; ?></td>
                                          <td class="text-center"><?php echo $culoare; ?></td>
                                          
                                          <!-- <?php if( $fisa ){ ?>
                                             <td class="text-center">
                                                <a href="<?php echo $fisa['url']; ?>" target="_blank"><i class="icon icon-pdf"></i></a>
                                             </td>
                                          <?php
                                           } 
                                             else
                                                {
                                                   echo "<td> - </td>";
                                                }
                                          ?> -->

                                          <td class="product-quantity" data-title="<?php echo $cantitate; ?>">
                                             <div class="quantity text-center">
                                                <label class="screen-reader-text" for="quantity_637c9d01773f8"><?php echo $cantitate; ?></label>
                                                
                                                <input type="number" id="quantity_637c9d01773f8" class="input-text qty text text-center" step="1" min="0" max="" name="cantitate-<?php echo get_sub_field('cod_produs');?>" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="">
                                         
                                             </div>
                                          </td>

                                          <td></td>
                                          <td></td>

                                          <td class="text-center">
                                             <input type='checkbox' style="border: solid 1px #236af2" name='oferta[]' class='form-control' value='<?php echo get_sub_field('cod_produs').";".$pnume;  ;?>' />
                                          </td>
                                       </tr>
                                    <?php
                                       } 
                                    }
                                    ?>
                                 </tbody>
                              </table>

                              <div class="form-check form-check-inline">
                                 <input type="submit" name="csubmit" class='btn btn-danger' value='<?php echo $addcart; ?>' />
                              </div>
                              
                              <div class="form-check form-check-inline">
                                 <input type='button' class='btn btn-danger' onclick="document.querySelector('.mini_cart_togglers').click();" value='<?php echo $viewcart; ?>'></input>
                              </div>

                            </form>
                         <!--===============spacing==============-->
                         <div class="pd_bottom_90"></div>
                         <!--===============spacing==============-->
                     </div>
                  </div>

                  <!--tabel-->


               <div class="row">
                  <div class="col-lg-12">
                     <div class="woocommerce-tabs wc-tabs-wrapper">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                 data-bs-target="#profile-tab-pane" type="button" role="tab"
                                 aria-controls="profile-tab-pane" aria-selected="false">
                                 <?php echo $descriere; ?>
                              </button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                 data-bs-target="#contact-tab-pane" type="button" role="tab"
                                 aria-controls="contact-tab-pane" aria-selected="false">
                                 <?php echo $info; ?>
                              </button>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                           <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel"
                              aria-labelledby="profile-tab" tabindex="0">

                              <div class="content_box">
                                 <h2><?php echo $descriere; ?></h2>

                                 <?php 
                                    $culoare = get_field('culoare');
                                    $latime_banda = get_field('latime_banda');
                                    $standard_en = get_field('standard_en');
                                    $greutate = get_field('greutate');
                                    $sarcina_rupere = get_field('sarcina_rupere');
                                    $c_ridicare = get_field('capacitate_de_ridicare');
                                    $c_utilizare = get_field('coeficient_de_utilizare');
                                 ?>
                              
                                 <p>
                                    <?php if(!empty($culoare)):  ?>
                                       Culoare: <?php echo $culoare; ?><br/>
                                    <?php endif; ?>

                                    <?php if(!empty($latime_banda)):  ?>
                                       Latima banda: <?php echo $latime_banda; ?> mm<br/>
                                    <?php endif; ?>

                                    <?php if(!empty($standard_en)):  ?>
                                       Standard EN: <?php echo implode( ' ,' ,[the_field('standard_en')]); ?><br/>
                                    <?php endif; ?>

                                    <?php if(!empty($greutate)):  ?>
                                       Greutate: <?php echo $greutate; ?> kg<br/>
                                    <?php endif; ?>

                                    <?php if(!empty($sarcina_rupere)):  ?>
                                       Sarcina rupere: <?php echo $sarcina_rupere; ?><br/>
                                    <?php endif; ?>

                                    <?php if(!empty($c_ridicare)):  ?>
                                       Capacitate de ridicare: <?php echo implode( ' ,' ,[the_field('c_ridicare')]); ?><br/>
                                    <?php endif; ?>

                                    <?php if(!empty($c_utilizare)):  ?>
                                       Coeficient de utilizare: <?php echo $c_utilizare; ?><br/>
                                    <?php endif; ?>
                                 </p>
                                 
                              </div>

                           </div>
                           <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                              aria-labelledby="contact-tab" tabindex="0">
                              <div class="content_box">
                                 <h2><?php echo $info; ?></h2>
                                
                                 <table class="woocommerce-product-attributes shop_attributes" style="border: solid 1px #D7D6D6">
                                    <tbody>
                                          <?php if(!empty($greutate)): ?>
                                             <tr class="woocommerce-product-attributes-item" style="border: solid 1px #D7D6D6;">
                                                <th class="woocommerce-product-attributes-item__label" style="border: solid 1px #D7D6D6">Greutate (kg)</th>
                                                <td class="woocommerce-product-attributes-item__value"><?php the_field('greutate')?> kg</td>
                                             </tr>
                                          <?php endif; ?>

                                          <?php if(!empty($latime_banda)): ?>
                                             <tr class="woocommerce-product-attributes-item"  style="border: solid 1px #D7D6D6">
                                                <th class="woocommerce-product-attributes-item__label" style="border: solid 1px #D7D6D6">Latime banda</th>
                                                <td class="woocommerce-product-attributes-item__value"><?php the_field('latime_banda'); ?> mm</td>
                                             </tr>
                                          <?php endif; ?>

                                          <?php if(!empty($dimensiuni)): ?>
                                             <tr class="woocommerce-product-attributes-item" style="border: solid 1px #D7D6D6">
                                                <th class="woocommerce-product-attributes-item__label" style="border: solid 1px #D7D6D6">Dimensiuni</th>
                                                <td class="woocommerce-product-attributes-item__value"><p><?php the_field('dimensiuni'); ?>aici punem toate dimensiunile</p></td>
                                             </tr>
                                          <?php endif; ?>
               
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <?php ?>
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
                     <h2><?php echo $produseasemanatoare; ?></h2>
                     <div class="product_related_posts theme_carousel owl-theme owl-carousel">

                        <?php
                           $args = array(            
                              'category' => $category_detail[0]->cat_ID,
                              'post_type'=> 'produs',
                              'posts_per_page' => 4,
                              'exclude' => $pid
                           );
                           $my_posts = get_posts( $args );
                           foreach($my_posts as $post){
                              $imguri= get_stylesheet_directory_uri();
                              $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                              if (empty($image)) {
                                 $image[0] = $imguri . "/assets/assets/images/no-image.jpg";
                              
                              }

                              $produsinro = get_field( "field_65ad4ae83064a", $post->ID);
                               
                           

                                                         
                              echo "
                                 <div class='project-wrapper grid-item'>
                                    <div class='product_box type_one'>
                                       <div class='inner_box'>";
                                       if ($produsinro[0] == 'da') {
                                          echo "  <span class='onsale'><img src='{$imguri}/assets/assets/images/made-in-romania.png' class='img-fluid' alt='img'></span>";
                                      }
                                                           

                                      echo "
                                       <div class='image_box'>
                                             <a href='{$post->guid}' class='creote_quick_view_btn'>
                                                <img src='{$image[0]}' class='img-fluid' alt='img'>               
                                             </a>                                              
                                             </div>
                                       </div>
                                       <div class='content_box'>
                                       <h2><a href='{$post->guid}'>{$post->post_title}</a></h2>
                                       <div class='cart_btn'>
                                             <a href='{$post->guid}' class='creote_quick_view_btn'>{$viewp}</a>              
                                       </div>
                                       </div>
                                    </div>
                                 </div>
                                 ";
                              }
                        ?>
                  </div>
               </div>
            </div>
         </section>
         
      </main>
      <!--===============default spacing==============-->
         <div class="pd_bottom_50"></div>
      <!--===============default spacing==============-->

   </div>

<?php

if($lang == "en"){
get_footer('en');
}

if($lang == "ro"){
   get_footer();
   }
   if($lang == "it"){
      get_footer('it');
      }
?>