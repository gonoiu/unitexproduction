<?php
/**
 * Template Name: Magazin categorii
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header('page'); 
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <section class="product_shop_section four_column product_wrapper_grid style_one">
                        <!--===============default spacing==============-->
                        <div class="pd_top_90"></div>
                        <!--===============default spacing==============-->
                        <div class="grid_show_case grid_layout clearfix">

                            <?php

                            $categories = get_categories(
                                array(
                                    'hide_empty' => 1,
                                    'taxonomy' => 'category',
                                    'parent' => 0
                                )
                            );
                            $imguri = get_stylesheet_directory_uri();


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

                                                //                 if ($lang == "ro") {
                                                //                                         echo "<span class='onsale'>
                                                // <img src='{$imguri}/assets/assets/images/made-in-romania.png' class='img-fluid' alt='img'>
                                                // </span>";
                                                //                                     }
                                                echo "<div class='image_box'>
                                                        <a href='{$catlink}' class='creote_quick_view_btn'>
                                                            <img src='{$catimg}' class='img-fluid' alt='img'>               
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

<?php

switch ($lang) {

    case "en":
      get_footer("en");
      break;
    case "ro":
      get_footer();
      break;
    case "it":
      get_footer("it");
      break;
  
  
  }
?>