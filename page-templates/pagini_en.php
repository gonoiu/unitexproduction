<?php
/**
 * Template Name: Pagini EN
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
            <section class="creote-progress">
                <!--===============spacing==============-->
                <div class="pd_top_80"></div>
                <!--===============spacing==============-->
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <?php include_once('meniu_stanga_en.php'); ?>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="content_box_cn style_one">
                        <div class="txt_content">
                            <h3><a href="#" target="_blank" rel="nofollow"><?php the_title(); ?></a></h3>
                            <p><?php the_content(); ?></p>
                        </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_20"></div>
                        <!--===============spacing==============-->
                    </div>
                </div>

                <!--===============spacing==============-->
                <div class="pd_bottom_50"></div>
                <!--===============spacing==============-->
            </section>
            </div>
        </div>
    </div>
</div>

<?php get_footer('en'); ?>