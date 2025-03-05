<section class="slider style_one pag_position_two">
   <div class="banner_carousel owl-carousel owl_nav_none owl_dots_block theme_carousel owl-theme"
      data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
      
      <?php if(have_rows('banner')):?>
         <?php while(have_rows('banner')): the_row();
            $text_1 = get_sub_field('text_principal');
            $text_2 = get_sub_field('text_secundar');
            $img_bk = get_sub_field('imagine_background');
            $img_rp = get_sub_field('imagine_reprezentativa');
            $button = get_sub_field('button');
         ?>
            <div class="slide-item">
               <div class="slide-item-content content_left">
                  <div class="image-layer" style="background-image:url(<?php echo $img_bk; ?>)"></div>
                  <div class="auto-container">
                     <div class="d-flex align-items-center">
                        <div class="col-lg-7 col-md-12  col-sm-12 col-xs-12">
                           <div class="slider_content">
                              <h2 style="color: white;"><?php echo $text_1; ?></h2>
                              <h6><?php echo $text_2; ?></h6>
                              <a href="<?php echo $button; ?>" target="_blank" rel="nofollow" class="theme-btn one  animated _zoomIn">
                                 Citeste mai mult... </a>
                           </div>
                        </div>
                        <div class="col-lg-5 col-md-12  col-sm-12 col-xs-12 image_column">
                           <div class="slider_image">
                              <img src="<?php echo $img_rp; ?>" class="img-fluid" alt="chingi">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <?php endwhile;?>
      <?php endif;?>
   </div>
</section>