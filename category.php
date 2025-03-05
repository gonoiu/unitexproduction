<?php
/**
 * Template Name: Magazin Subcategorii
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header('page');

/**
 * TRANSLATE
 */

/** RO */
$translatec = "Vezi categorie";
$translatep = "Vezi produs";
$lang = "ro";
foreach (explode("/", $_SERVER['REQUEST_URI']) as $item) {

    // IT
    if ($item == 'it') {
        $translatec = "Visualizzazione per categoria";
        $translatep = "Vista del prodotto";
        $lang = "it";
    }
    /** EN */
    if ($item == 'en') {
        $translatec = "View category";
        $translatep = "View product";
        $lang = "en";
    }

}




?>

<div id="content" class="site-content ">

    <main id="main" class="site-main" role="main">
        <!-- Categoria: 
        <?//php 
        $imguri = get_stylesheet_directory_uri();
        function category_has_parent($catid)
        {
            $category = get_category($catid);
            if ($category->category_parent > 0) {
                return true;
            }
            return false;
        }
        $categories = get_queried_object();
        $cat_id = $categories->cat_ID;
        echo $categories->name;
        $children = get_categories(array('child_of' => $cat_id, 'hide_empty' => 1));
        ?> -->
        <div class="container">


            <div class="row">
                <div class="col-lg-12">
                    <section class="product_shop_section four_column product_wrapper_grid style_one">
                        <!--===============default spacing==============-->
                        <div class="pd_top_90"></div>
                        <!--===============default spacing==============-->
                        <div class="grid_show_case grid_layout clearfix">

                            <?php


                            if (!get_term_children($cat_id, "category")) {
                                $args = array(

                                    'category' => $cat_id,
                                    'post_type' => 'produs',
                                    'hide_empty' => 1,
                                    'nopaging'    => true
                                );
                                $my_posts = get_posts($args);


                                foreach ($my_posts as $post) {


                                    /**
                                     * ALEX: POZA DEFAULT?
                                     */
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                                    if (empty($image)) {
                                        $image[0] = $imguri . "/assets/assets/images/no-image.jpg";

                                    }
                                    /**
                                     * SFARSIT POZA DEFAULT
                                     */
                                    $produsinro = get_field( "field_65ad4ae83064a", $post->ID);
                               
                                    echo "
                                        <div class='project-wrapper grid_box'>
                                            <div class='product_box type_one'>
                                                <div class='inner_box'>
                                                    ";
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
                                                        <a href='{$post->guid}' class='creote_quick_view_btn'>{$translatep}</a>              
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                                }


                            } else {

                                $categories = get_categories(
                                    array(
                                        'hide_empty' => 1,
                                        'parent' => $cat_id
                                        // 'child_of' => $cat_id,
                            


                                    )
                                );
                                //    print_r($categories);
                                //     die();
                            

                                foreach ($categories as $category) {

                                    $catlink = get_category_link($category->term_id);
                                    $catname = $category->name;
                                    if ($catname == 'Non categorizzato') {
                                        continue;
                                    }
    
                                    if ($catname == 'Uncategorized') {
                                        continue;
                                    }
    
                                    if ($catname != 'Fara categorie') {
                                        /**
                                         * ALEX: VERIFICAM DACA CATEGORIA ARE POZE!
                                         */
                                        if (empty(z_taxonomy_image_url($category->term_id))) {
                                            $catimg = $imguri . "/assets/assets/images/no-image.jpg";

                                        } else {
                                            $catimg = z_taxonomy_image_url($category->term_id);
                                        }


                                        /**
                                         * SFARSIT IMPLEMENTARE POZE
                                         */
                                        echo "
                                                <div class='project-wrapper grid_box'>
                                                    <div class='product_box type_one'>
                                                        <div class='inner_box'>";

                                                                //                 if ($lang == 'ro') {
                                                                //                     echo "  <span class='onsale'>
                                                                //     <img src='{$imguri}/assets/assets/images/made-in-romania.png' class='img-fluid' alt='img'>
                                                                // </span>";

                                                                //                 }

                                                                    echo "  <div class='image_box'>
                                                            <a href='{$catlink}' class='creote_quick_view_btn'>
                                                                <img src='{$catimg}' class='img-fluid' alt='img'>               
                                                            </a>                                              
                                                        </div>
                                                    </div>

                                                    <div class='content_box'>
                                                    <h2><a href='{$catlink}'>{$catname}</a></h2>

                                                    <div class='cart_btn'>
                                                        <a href='{$catlink}' class='creote_quick_view_btn'>{$translatec}</a>              
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        ";

                                    }
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

</div>

<?php get_footer(); ?>