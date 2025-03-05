<?php
/**
 * Template Name: Intrebari
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
    <div class="container">
        <div class="row default_row">
            <div class="full_width_box">
            <!--===============spacing==============-->
            <div class="pd_top_70"></div>
            <!--===============spacing==============-->
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <?php include_once('meniu_stanga.php'); ?>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <section class="faq_section type_two">
                        <div class="block_faq">
                            <div class="accordion">
                                <dl>

                                <?php if(have_rows('intrebari_frecvente')):?>
                                    <?php while(have_rows('intrebari_frecvente')): the_row();
                                        $intrebare = get_sub_field('intrebare');
                                        $raspuns = get_sub_field('raspuns');
                                    ?>
                                        <dt class="faq_header active">
                                            <?php echo $intrebare; ?>?<span class="icon-play"></span>
                                        </dt>
                                        <dd class="accordion-content hide" style="display:block;">
                                            <p>
                                            <?php echo $raspuns; ?>               
                                            </p>
                                        </dd>
                                    <?php endwhile;?>
                                <?php endif;?>
                                
                                </dl>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_70"></div>
            <!--===============spacing==============-->
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>