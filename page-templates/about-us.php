<?php
/**
 * Template Name: Despre noi EN
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
            <div class="col-xl-6 col-lg-12 ">
               <div class="about_content position-relative z_99">
                  <div class="title_all_box style_one text-left  dark_color">
                     <div class="title_sections">
                        <div class="before_title">WE</div>
                        <h2><?php the_field('slogan_en', 'options'); ?></h2>
                     </div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_15"></div>
                  <!--===============spacing==============-->
                  <div class="extra_content image_with_content dark_color">
                     <div class="simple_image">
                        <img src="<?php the_field('produs_in_romania', 'options'); ?>" alt="img">
                        <h2> Since 2006, <br> in Romania</h2>
                     </div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_20"></div>
                  <!--===============spacing==============-->
                  <div class="description_box">
                     <p><?php the_content(); ?></p>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_25"></div>
                  <!--===============spacing==============-->
                  <div class="theme_btn_all color_one">
                     <a href="/contact-us" target="_blank" rel="nofollow" class="theme-btn five">Contact Us<i
                           class="icon-right-arrow"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-12">
               <div class="image_boxes style_two">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/shape-1.png" class="background_image" alt="image">
                  <div class="image one">
                     <img src="<?php the_field('imagine_stg'); ?>" class="img-fluid" alt="image">
                  </div>
                  <div class="image two">
                     <img src="<?php the_field('imagine_dr'); ?>" class="img-fluid" alt="image">
                     <div class="video_box">
                        <a href="https://youtu.be/_0taP2MEpxs?feature=shared" class="lightbox-image"><i class="icon-play"></i></a>
                     </div>
                  </div>
                  <div class="authour_quotes">
                     <i class="icon-quote"></i>
                     <h6><?php the_field('companie', 'options'); ?></h6>
                     <p>Member of the Unitex Group</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_70"></div>
      <!--===============spacing==============-->
   </section>
   <!---about end--->

            <!---tab---->
         <section class="tab-section bg_op_1" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/tab-sec-bg.jpg);">
         <!--===============spacing==============-->
               <div class="pd_top_100"></div>
         <!--===============spacing==============-->
            <div class="container">
               <div class="row">
                  <div class="tabs_all_box tabs_all_box_start type_one">
                     <div class="tab_over_all_box">
                        <div class="tabs_header clearfix">
                           <ul class="showcase_tabs_btns nav-pills nav clearfix">
                              <li class="nav-item">
                                 <a href="/intrebari-frecvente" class="nav-link active">Intrebari Frecvente</a>
                              </li>
                              <li class="nav-item">
                                 <a href="/politica-de-retur" class="nav-link">Politica de retur</a>
                              </li>
                              <li class="nav-item">
                                 <a href="/optiuni-de-livrare" class="nav-link">Optiuni de livrare</a>
                              </li>
                              <li class="nav-item">
                                 <a href="/shop" class="nav-link" >Products</a>
                              </li>
                              <li class="nav-item">
                                 <a href="/contact-us" class="nav-link">Contact Us</a>
                              </li>
                           </ul>
                           <div class="toll_free">
                              <a href="tel:<?php the_field('telefon_contact', 'options'); ?>"> <i class="icon-phone-call"></i>Call for details</a>
                           </div>
                        </div>
                        <div class="s_tab_wrapper">
                           <div class="s_tabs_content">
                              <div class="s_tab fade active-tab show">
                                 <div class="tab_content one"
                                    style="background-image:url(<?php the_field('back_istoria_noastra'); ?>)">
                                    <div class="content_image">
                                       <h6>Our history</h6>

                                       <h2>Accessible &amp; Flexible</h2>

                                       <p>aici adaugam un text</p>

                                       <a href="tel:<?php the_field('telefon_contact', 'options'); ?>" target="_blank" rel="nofollow" class="rd_more">
                                          Call now <i class="icon-right-arrow"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <!--===============spacing==============-->
            <div class="pd_bottom_90"></div>
         <!--===============spacing==============-->
      </section>
      <!---tab-end--->
              <!---team--->
      <section class="team-section">
               <!--===============spacing==============-->
            <div class="pd_top_80"></div>
               <!--===============spacing==============-->
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="title_all_box style_one  dark_color">
                           <div class="title_sections">
                              <h2>Echipa Noastra</h2>
                           </div>
                        </div>
                    </div>
                     <!--===============spacing==============-->
                     <div class="mr_bottom_30"></div>
                     <!--===============spacing==============-->
                  	</div>
                  	<div class="row">
					  	<div class="swiper-slide">
							<div class="image">
                        <?php if(have_rows('echipa')):?>
                           <?php while(have_rows('echipa')): the_row();
                              $nume = get_sub_field('nume');
                              $img = get_sub_field('imagine');
                              $functie = get_sub_field('functie');
                           ?>
                              
                              <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                 <div class="team_box style_one">
                                    <div class="team_box_outer">
                                       <div class="member_image">
                                          <img src="<?php echo $img ?>" alt="<?php echo $nume; ?>" />
                                       </div>
                                       <div class="about_member">
                                          <div class="share_media">
                                             <ul class="first">
                                                <li class="text">Share</li>
                                                <li><i class="fa fa-share-alt"></i></li>
                                             </ul>
                                             <ul>
                                                <li class="shar_alt"><i class="fa fa-share-alt"></i></li>
                                                <li>
                                                   <a href="<?php the_field('facebook'); ?>" target="_blank"> 
                                                      <i class="fa fa-facebook"> </i>
                                                   </a>
                                                </li>
                                                <li>
                                                   <a href="<?php the_field('linkedin'); ?>" target="_blank"> 
                                                      <i class="fa fa-linkedin"> </i>
                                                   </a>
                                                </li>
                                                <li>
                                                   <a href="<?php the_field('instagram'); ?>" target="_blank"> 
                                                      <i class="fa fa-instagram"> </i>
                                                   </a>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="authour_details">
                                             <span><?php echo $functie; ?></span>
                                             <h6><?php echo $nume; ?></h6>
                                          </div>
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

                	</div>
            	</div>
               <!--===============spacing==============-->
               <div class="pd_bottom_60"></div>
               <!--===============spacing==============-->
            </section>
            <!---team-end--->

	<!--===============PAGE CONTENT END==============-->
	</div>

<?php
	get_footer('en');
?>
