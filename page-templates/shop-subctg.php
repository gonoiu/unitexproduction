<?php
/**
 * Template Name: Magazin Subcategorii
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

    <main id="main" class="site-main" role="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <section class="product_shop_section four_column product_wrapper_grid style_one">
                    <!--===============default spacing==============-->
                    <div class="pd_top_90"></div>
                    <!--===============default spacing==============-->
                    <div class="grid_show_case grid_layout clearfix">
       
                        <?php
                        echo get_the_title();

                        $categories = get_categories(array(
                            'hide_empty' => 1,
                            'taxonomy' => 'category'
                        ));
                        $imguri= get_stylesheet_directory_uri();

                        foreach($categories as $category) {
                            
                        $catlink=get_category_link($category->term_id);
                        $catname=$category->name;
                        if($catname != 'Fara categorie'){
                        echo "
                            <div class='project-wrapper grid_box'>
                                <div class='product_box type_one'>
                                    <div class='inner_box'>
                                    <span class='onsale'>
                                        <img src='{$imguri}/assets/assets/images/made-in-romania.png' class='img-fluid' alt='img'>
                                    </span>
                                    <div class='image_box'>
                                        <a href='{$catlink}' class='creote_quick_view_btn'>
                                            <img src='{$imguri}/assets/assets/images/products/product-1-min.png' class='img-fluid' alt='img'>               
                                        </a>                                              
                                        </div>
                                    </div>
                                    <div class='content_box'>
                                    <h2><a href='{$catlink}'>{$catname}</a></h2>
                                    <div class='cart_btn'>
                                        <a href='{$catlink}' class='creote_quick_view_btn'>{$catname}</a>              
                                    </div>
                                    </div>
                                </div>
                            </div>
                        ";

                        }
                        }

                        ?>

                        
                    </div>
                    <!--===============default spacing==============-->
                    <div class="pd_bottom_50"></div>
                    <!--===============default spacing==============-->
                    </section>
                </div>
            </div>
        </div>
        </main>
        <!---newsteller--->

</div>

<?php get_footer(); ?>