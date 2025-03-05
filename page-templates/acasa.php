<?php
/**
 * Template Name: Acasa
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
	get_header();
?>

      <!---service---->
      <section class="service-section-one bg_light_1">
         <!--===============spacing==============-->
               <div class="pd_top_80"></div>
         <!--===============spacing==============-->
         <div class="container">
            <div class="row">
               <div class="title_all_box style_one text-center dark_color">
                  <div class="title_sections">
                     <h2>Informatii Utile</h2>
                  </div>
                  <!--===============spacing==============-->
                     <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
               </div>
               <div class="invisible_normal_spacing"></div>
               
               <?php if(have_rows('informatii', 'options')):?>
                  <?php while(have_rows('informatii', 'options')): the_row();
                     $titlu = get_sub_field('titlu');
                     $text = get_sub_field('text');
                     $img = get_sub_field('imagine');
                     $link = get_sub_field('link');
                     $icon = get_sub_field('icon');
                  ?>
                     <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="service_box style_four dark_color">
                           <div class="service_content">
                              <div class="image_box">
                                 <img src="<?php echo $img; ?>" class="img-fluid" alt="informatii">
                                 <span class="<?php echo $icon; ?>"></span>
                              </div>
                              <div class="content_inner">
                                 <h2><a href="<?php echo $link['url']; ?>"><?php echo $titlu; ?></a></h2>
                                 <p><?php echo $text; ?></p>
                              </div>
                           </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_30"></div>
                        <!--===============spacing==============-->
                     </div>
                  <?php endwhile;?>
               <?php endif;?>

            </div>
         </div>
         <!--===============spacing==============-->
         <div class="pd_bottom_60"></div>
         <!--===============spacing==============-->
      </section>
      <!---service end---->
      <!---image-box-section---->
      <section class="image-box-section">
         <!--===============spacing==============-->
            <div class="pd_top_80"></div>
         <!--===============spacing==============-->
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
                  <div class="image_boxes style_three">
                     <?php $imagine = the_post_thumbnail(); ?>
                     <!-- <div class="video_box">
                        <a href="https://youtu.be/_0taP2MEpxs?feature=shared" class="lightbox-image"><i class="icon-play"></i></a>
                     </div> -->
                  </div>
               </div>
               <div class="col-xl-6 col-lg-12">
                  <div class="title_all_box style_one dark_color">
                     <div class="title_sections ">
                        <div class="before_title"> <?php the_field('companie', 'options'); ?></div>
                        <h2><?php the_field('slogan', 'options'); ?></h2>

                        <p><?php the_content();?></p>
                     </div>
                  </div>   
                  
               </div>
            </div>
         </div>
         <!--===============spacing==============-->
         <div class="pd_bottom_80"></div>
         <!--===============spacing==============-->
      </section>
      <!---image-box-section-end---->

      <!----information---->
      <section class="information-section">
         <div class="divider_1"></div>
         <!--===============spacing==============-->
         <div class="pd_top_35"></div>
         <!--===============spacing==============-->
         <div class="auto-container">
            <div class="row">
               <div class="col-xl-3 col-lg-6 col-sm-12 col-md-6 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
                  <div class="icon_box_all style_seven">
                     <div class="icon_content">
                        <div class="icon">
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/shipped.png" class="img-fluid svg_image" alt="">
                        </div>
                        <div class="text_box">
                           <h2><a href="#" target="_blank" rel="nofollow">Transport gratuit</a></h2>
                           <p>In functie de cantitatea achizitionata</p>
                        </div>
                     </div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
               </div>
               <div class="col-xl-3 col-lg-6 col-sm-12 col-md-6 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
                  <div class="icon_box_all style_seven">
                     <div class="icon_content">
                        <div class="icon">
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/exchange.png" class="img-fluid svg_image" alt="">
                        </div>
                        <div class="text_box">
                           <h2> <a href="#" target="_blank" rel="nofollow">Retur Gratis</a></h2>
                           <p>Banii inapoi in 30 zile</p>
                        </div>
                     </div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
               </div>
               <div class="col-xl-3 col-lg-6 col-sm-12 col-md-6 mb-sm-5 mb-md-0 mb-lg-0 mb-xl-0">
                  <div class="icon_box_all style_seven">
                     <div class="icon_content">
                        <div class="icon">
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/check.png" class="img-fluid svg_image" alt="">
                        </div>
                        <div class="text_box">
                           <h2><a href="#" target="_blank" rel="nofollow">Plati Securizate</a></h2>
                           <p>Cumparaturi in siguranta</p>
                        </div>
                     </div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
               </div>
               <div class="col-xl-3 col-lg-6 col-sm-12 col-md-6">
                  <div class="icon_box_all style_seven">
                     <div class="icon_content">
                        <div class="icon">
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/product-development.png" class="img-fluid svg_image"
                              alt="">
                        </div>
                        <div class="text_box">
                           <h2><a href="#" target="_blank" rel="nofollow">2500 Produse</a></h2>
                           <p>Aveti tot ce va trebuie</p>
                        </div>
                     </div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
               </div>
            </div>
         </div>

         <div class="divider_1"></div>
         <div class="pd_top_80"></div>
      </section>
      <!----information end---->

      <!---Chingi de ancorare---->
      <section class="service-section-one bg_light_1">
         <!--===============spacing==============-->
               <div class="pd_top_80"></div>
         <!--===============spacing==============-->
         <div class="container">
            <div class="row">
               <div class="title_all_box style_one text-center dark_color">
                  <div class="title_sections">
                     <h2>Chingi de ancorare</h2>
                  </div>
                  <!--===============spacing==============-->
                     <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
               </div>
               <div class="invisible_normal_spacing"></div>
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="service_box style_four dark_color">
                     <img src="<?php the_field('imagine_chingi_ancorare'); ?>" class="img-fluid" alt="">
                  </div>
                  <!--===============spacing==============-->
                     <div class="mr_bottom_30"></div>
                  <!--===============spacing==============-->
               </div>
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="service_box style_four dark_color">
                     
                        <div class="content_inner">
                           <p><?php the_field('descriere_chingi_ancorare'); ?></p>
                        </div>
                  </div>
                  <!--===============spacing==============-->
                        <div class="mr_bottom_30"></div>
                  <!--===============spacing==============-->
               </div>
               <?php if( get_field('link_chingi_ancorare') ): ?>
                  <div class="theme_btn_all color_two text-center">
                     <a href="<?php the_field('link_chingi_ancorare')?>" target="_blank" rel="nofollow" class="theme-btn two">Vezi produse</a>
                  </div>
               <?php endif; ?>
            </div>
         </div>
         <!--===============spacing==============-->
         <div class="pd_bottom_60"></div>
         <!--===============spacing==============-->
      </section>
      <!---service end---->

      <!----product---->
      <section class="product-section">
         <!--===============spacing==============-->
         <div class="pd_top_80"></div>
         <!--===============spacing==============-->
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="title_all_box style_one text-center dark_color">
                     <div class="title_sections">
                        <div class="before_title">
                           Produsele Noastre
                        </div>
                        <h2 class="title">Cereti oferta de pret la produsele dorite</h2>
                     </div>
                     <!--===============spacing==============-->
                     <div class="pd_top_20"></div>
                     <!--===============spacing==============-->
                  </div>

               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="product_shop_section four_column product_wrapper_grid style_three">
                     <div class="grid_show_case grid_layout clearfix">

                     <?php
                        $recent_posts = wp_get_recent_posts(array(
                           'numberposts' => 8, // Number of recent posts thumbnails to display
                           'post_status' => 'publish',
                           'post_type'        => 'produs',
                           'orderby'          => 'ID',
                           'order'            => 'DESC', // Show only the published posts
                           'meta_query' => array(
                              array(
                                 'key'     => 'produse_acasa',
                                 'value'   => '"da"',
                                 'compare' => 'LIKE'
                              )
                        )
                        ));
                        foreach( $recent_posts as $post_item ) {
                           if ( has_post_thumbnail( $post_item["ID"]) ) {
                           $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_item['ID'] ), 'single-post-thumbnail' );
                           }
                           else
                           {
                              $image=array("/wp/wp-content/uploads/noproduct.png");

                           

                           }

                        ?>
                           <div class="project-wrapper grid_box product">
                              <div class="product_box type_three">
                                 <div class="inner_box">
                                    <span class="onsale">Nou!</span>
                                    <div class="image_box">
                                       <img src="<?php echo $image[0];?>" class="img-fluid" alt="img" />
                                       <div class="cart_btn">
                                          <a href="<?php echo $post_item['guid'] ?>" class="button add_to_cart_button">Cere oferta</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="content_box">
                                    <h2><a href="#" alt='<?php echo $post_item['post_title'];?>'><?php echo substr($post_item['post_title'],0,15).".."; ?></a></h2>
                                 </div>
                              </div>
                           </div>
                           
                        <?php }; 
                        
                        ?>
                     </div>
                  </div>
               </div>

            </div>
         </div>
         <!--===============spacing==============-->
         <div class="pd_bottom_50"></div>
         <!--===============spacing==============-->
      </section>
      <!----product end---->

      <!---Chingi tubulare circulare---->
      <section class="service-section-one bg_light_1">
         <!--===============spacing==============-->
               <div class="pd_top_80"></div>
         <!--===============spacing==============-->
         <div class="container">
            <div class="row">
               <div class="title_all_box style_one text-center dark_color">
                  <div class="title_sections">
                     <h2>Chingi tubulare circulare</h2>
                  </div>
                  <!--===============spacing==============-->
                     <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
               </div>
               <div class="invisible_normal_spacing"></div>
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="service_box style_four dark_color">
                     <img src="<?php the_field('imagine_chingi_circulare_tubulare'); ?>" class="img-fluid" alt="informatii">
                  </div>
                  <!--===============spacing==============-->
                     <div class="mr_bottom_30"></div>
                  <!--===============spacing==============-->
               </div>
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="service_box style_four dark_color">
                     
                        <div class="content_inner">
                           <p><?php the_field('descriere_chingi_circulare_tubulare'); ?></p>
                        </div>
                  </div>
                  <!--===============spacing==============-->
                        <div class="mr_bottom_30"></div>
                  <!--===============spacing==============-->
               </div>
               <?php if( the_field('chingi_circulare_tubulare') ): ?>
                  <div class="theme_btn_all color_two text-center">
                     <a href="<?php the_field('chingi_circulare_tubulare'); ?>" target="_blank" rel="nofollow" class="theme-btn two">Vezi produse</a>
                  </div>
               <?php endif; ?>   
            </div>
         </div>
         <!--===============spacing==============-->
         <div class="pd_bottom_60"></div>
         <!--===============spacing==============-->
      </section>
      <!---Chingi tubulare circulare---->
      
      <!---client---->
      <section class="client-brand-section">
         <!--===============spacing==============-->
         <div class="pd_top_80"></div>
         <!--===============spacing==============-->
         <div class="container">
            <div class="row">
               <div class="title_all_box style_one text-center dark_color">
                  <div class="title_sections">
                        <div class="before_title">
                           Parteneri
                        </div>
                        <h2 class="title">Ne gasiti si in ...</h2>
                     </div>
                  <!--===============spacing==============-->
                     <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
               </div>
               <div class="invisible_normal_spacing"></div>
               <div class="col-lg-12">
                  <div class="client_logo_carousel type_one">
                     <div class="swiper-container" data-swiper='{
                        "autoplay": {
                           "delay": 6000
                        },
                        "freeMode": true,
                        "loop": true,
                        "speed": 1000,
                        "centeredSlides": false,
                        "slidesPerView": 4,
                        "spaceBetween": 30,
                        "pagination": {
                           "el": ".swiper-pagination",
                           "clickable": true
                        },
                        "navigation": {
                           "nextEl": ".swiper-button-next",
                           "prevEl": ".swiper-button-prev"
                        },
                        "breakpoints": {
                           "1200": {
                              "slidesPerView": 4 
                           },
                           "1024": {
                              "slidesPerView": 3 
                           },
                           "768": {
                              "slidesPerView": 2 
                           },
                           "576": {
                              "slidesPerView": 1 
                           },
                           "0": {
                              "slidesPerView": 1 
                           }
                        }
                        }'>
                        <div class="swiper-wrapper">
                           <?php if(have_rows('parteneri', 'options')):?>
                              <?php while(have_rows('parteneri', 'options')): the_row();
                                 $titlu = get_sub_field('titlu');
                                 $img = get_sub_field('logo');
                                 $link = get_sub_field('link');
                              ?>
                                 <div class="swiper-slide">
                                    <div class="image">
                                       <?php if( $link ): ?>
                                          <a href="<?php echo $link; ?>">
                                             <img src="<?php echo $img; ?>" alt="<?php echo $titlu; ?>">
                                          </a>
                                       <?php endif; ?>
                                    </div>
                                 </div>
                              <?php endwhile;?>
                           <?php endif;?>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--===============spacing==============-->
         <div class="pd_bottom_80"></div>
         <!--===============spacing==============-->
      </section>
      <!---client-end---->

      <!---Chingi plate cu urechi---->
      <section class="service-section-one bg_light_1">
         <!--===============spacing==============-->
               <div class="pd_top_80"></div>
         <!--===============spacing==============-->
         <div class="container">
            <div class="row">
               <div class="title_all_box style_one text-center dark_color">
                  <div class="title_sections">
                     <h2>Chingi plate cu urechi</h2>
                  </div>
                  <!--===============spacing==============-->
                     <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
               </div>
               <div class="invisible_normal_spacing"></div>
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="service_box style_four dark_color">
                     <img src="<?php the_field('imagine_chingi_plate_cu_urechi'); ?>" class="img-fluid" alt="informatii">
                  </div>
                  <!--===============spacing==============-->
                     <div class="mr_bottom_30"></div>
                  <!--===============spacing==============-->
               </div>
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="service_box style_four dark_color">
                     
                        <div class="content_inner">
                           <p><?php the_field('descriere_chingi_plate_cu_urechi'); ?></p>
                        </div>
                  </div>
                  <!--===============spacing==============-->
                        <div class="mr_bottom_30"></div>
                  <!--===============spacing==============-->
               </div>
               <?php if( the_field('chingi_plate_cu_urechi') ): ?>
                  <div class="theme_btn_all color_two text-center">
                     <a href="<?php the_field('chingi_plate_cu_urechi'); ?>" target="_blank" rel="nofollow" class="theme-btn two">Vezi produse</a>
                  </div>
               <?php endif; ?>   
            </div>
         </div>
         <!--===============spacing==============-->
         <div class="pd_bottom_60"></div>
         <!--===============spacing==============-->
      </section>
      <!---Chingi plate cu urechi---->      
      <!--===============spacing==============-->
      <div class="pd_bottom_60"></div>
         <!--===============spacing==============-->
      
   </div>
   <!--===============PAGE CONTENT END==============-->
<!--===============PAGE CONTENT END==============-->
</div>


<?php
	get_footer();
?>
