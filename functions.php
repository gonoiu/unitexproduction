<?php
/**
 * UnderStrap functions and definitions
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts() {
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );

	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );



/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles() {

	// Get the theme data.
	$the_theme = wp_get_theme();

	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles  = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";

	wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get( 'Version' ), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// // Load WooCommerce functions if WooCommerce is activated.
// if ( class_exists( 'WooCommerce' ) ) {
// 	$understrap_includes[] = '/woocommerce.php';
// }

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}

// Options ACF.
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page();
    
}

add_action( 'acf/init', 'set_acf_settings' );
function set_acf_settings() {
    acf_update_setting( 'enable_shortcode', false );
}

add_filter( 'acf/admin/prevent_escaped_html_notice', '__return_true' );

// function mytheme_enqueue_woocommerce_styles() {
//     if (class_exists('WooCommerce')) {
//         wp_enqueue_style('woocommerce-styles', get_template_directory_uri() . '/woocommerce.css');
//     }
// }
// add_action('wp_enqueue_scripts', 'mytheme_enqueue_woocommerce_styles');

// add_action('template_redirect', function() {
//     if (is_shop() || is_product_category() || is_product_taxonomy()) {
//         global $template;
//         error_log('WooCommerce Archive Template Used: ' . $template);
//     }
// });
// add_action('wp_enqueue_scripts', function() {
//     wp_enqueue_style('woocommerce-general', WC()->plugin_url() . '/assets/css/woocommerce.css');
//     wp_enqueue_style('woocommerce-layout', WC()->plugin_url() . '/assets/css/woocommerce-layout.css');
//     wp_enqueue_style('woocommerce-smallscreen', WC()->plugin_url() . '/assets/css/woocommerce-smallscreen.css');
// }, 100);
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('woocommerce-general', plugins_url('woocommerce/assets/css/woocommerce.css'), [], null);
    wp_enqueue_style('woocommerce-layout', plugins_url('woocommerce/assets/css/woocommerce-layout.css'), [], null);
    wp_enqueue_style('woocommerce-smallscreen', plugins_url('woocommerce/assets/css/woocommerce-smallscreen.css'), [], null, 'only screen and (max-width: 768px)');
}, 999);


function custom_theme_enqueue_styles() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Spartan%3A400%2C500%2C600%2C700%2C800%2C900%7CInter%3A300%2C400%2C500%2C600%2C700%2C800%2C900&subset=latin%2Clatin-ext', false, null, 'all');

    // Stylesheets
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/assets/css/bootstrap.min.css', false, null, 'all');
    wp_enqueue_style('owl', get_stylesheet_directory_uri() . '/assets/assets/css/owl.css', false, null, 'all');
    wp_enqueue_style('swiper', get_stylesheet_directory_uri() . '/assets/assets/css/swiper.min.css', false, null, 'all');
    wp_enqueue_style('fancybox', get_stylesheet_directory_uri() . '/assets/assets/css/jquery.fancybox.min.css', false, null, 'all');
    wp_enqueue_style('icomoon', get_stylesheet_directory_uri() . '/assets/assets/css/icomoon.css', false, null, 'all');
    wp_enqueue_style('flexslider', get_stylesheet_directory_uri() . '/assets/assets/css/flexslider.css', false, null, 'all');
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/assets/assets/css/font-awesome.min.css', false, null, 'all');
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/assets/assets/css/style.css', false, null, 'all');
    wp_enqueue_style('theme-css', get_stylesheet_directory_uri() . '/assets/assets/css/scss/elements/theme-css.css', false, null, 'all');
    wp_enqueue_style('color-switcher', get_stylesheet_directory_uri() . '/assets/assets/css/scss/elements/color-switcher/color5.css', false, null, 'all');

    // WooCommerce Stylesheets
    wp_enqueue_style('woocommerce-layout', get_stylesheet_directory_uri() . '/assets/assets/css/woocommerce-layout.css', false, null, 'all');
    wp_enqueue_style('woocommerce', get_stylesheet_directory_uri() . '/assets/assets/css/woocommerce.css', false, null, 'all');

    // Catalog Stylesheet
    wp_enqueue_style('catalog', get_stylesheet_directory_uri() . '/assets/assets/css/catalog.css', false, null, 'all');

    // WhatsApp Icons Styles
    wp_enqueue_style('whatsapp', get_stylesheet_directory_uri() . '/assets/whatsapp/css/whatsapp.css', false, null, 'all');
    wp_enqueue_style('whatsapp-font-awesome', get_stylesheet_directory_uri() . '/assets/whatsapp/css/font-awesome.css', false, null, 'all');
    wp_enqueue_style('whatsapp-right-menu', get_stylesheet_directory_uri() . '/assets/whatsapp/css/right-menu.css', false, null, 'all');
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');


// function enqueue_custom_scripts() {
//     // Define script directory
//     $script_dir = get_stylesheet_directory_uri() . '/assets/assets/js/';

//     // Register scripts
//     wp_enqueue_script('jquery-custom', $script_dir . 'jquery-3.6.0.min.js', array('jquery'), null, true);
//     wp_enqueue_script('bootstrap', $script_dir . 'bootstrap.min.js', array('jquery-custom'), null, true);
//     wp_enqueue_script('fancybox', $script_dir . 'jquery.fancybox.js', array('jquery-custom'), null, true);
//     wp_enqueue_script('style-switcher', $script_dir . 'jQuery.style.switcher.min.js', array(), null, true);
//     wp_enqueue_script('flexslider', $script_dir . 'jquery.flexslider-min.js', array('jquery-custom'), null, true);
//     wp_enqueue_script('color-scheme', $script_dir . 'color-scheme.js', array(), null, true);
//     wp_enqueue_script('owl-carousel', $script_dir . 'owl.js', array('jquery-custom'), null, true);
//     wp_enqueue_script('swiper', $script_dir . 'swiper.min.js', array('jquery-custom'), null, true);
//     wp_enqueue_script('isotope', $script_dir . 'isotope.min.js', array('jquery-custom'), null, true);
//     wp_enqueue_script('countdown', $script_dir . 'countdown.js', array('jquery-custom'), null, true);
//     wp_enqueue_script('parallax', $script_dir . 'simpleParallax.min.js', array(), null, true);
//     wp_enqueue_script('appear', $script_dir . 'appear.js', array('jquery-custom'), null, true);
//     wp_enqueue_script('countTo', $script_dir . 'jquery.countTo.js', array('jquery-custom'), null, true);
//     wp_enqueue_script('sharer', $script_dir . 'sharer.js', array(), null, true);
//     wp_enqueue_script('validation', $script_dir . 'validation.js', array('jquery-custom'), null, true);
    
//     // Main script
//     wp_enqueue_script('creote-extension', $script_dir . 'creote-extension.js', array('jquery-custom'), null, true);
// }

function custom_woocommerce_category_list() {
    $args = array(
        'taxonomy'     => 'product_cat',
        'orderby'      => 'name',
        'order'        => 'ASC',
        'hide_empty'   => true,
    );

    $categories = get_terms( $args );

    if ( ! empty( $categories ) ) {
        echo '<h5>Categorii</h5>';
        echo '<ul class="custom-category-list">';
        foreach ( $categories as $category ) {
            $link = get_term_link( $category );
            echo '<li><a href="' . esc_url( $link ) . '">' . esc_html( $category->name ) . '</a></li>';
        }
        echo '</ul>';
    }
}

// Use this where you want to display the list
add_shortcode( 'category_list', 'custom_woocommerce_category_list' );

function custom_woocommerce_loop_columns() {
    return 3; // Change this number to set the number of columns
}
add_filter('loop_shop_columns', 'custom_woocommerce_loop_columns', 20);

function update_mini_cart_count() {
    echo WC()->cart->get_cart_contents_count();
    wp_die();
}
add_action('wp_ajax_update_mini_cart_count', 'update_mini_cart_count');
add_action('wp_ajax_nopriv_update_mini_cart_count', 'update_mini_cart_count');


function custom_enqueue_footer_scripts() {
    // List of script files
    $scripts = [
        'jquery-3.6.0.min.js',
        'bootstrap.min.js',
        'jquery.fancybox.js',
        'jQuery.style.switcher.min.js',
        'jquery.flexslider-min.js',
        'color-scheme.js',
        'owl.js',
        'swiper.min.js',
        'isotope.min.js',
        'countdown.js',
        'simpleParallax.min.js',
        'appear.js',
        'jquermini_cart_togglers y.countTo.js',
        'sharer.js',
        'validation.js',
        'creote-extension.js' // Main script file
    ];

    // Base path for assets
    $base_path = get_stylesheet_directory_uri() . '/assets/assets/js/';

    // Enqueue each script
    foreach ($scripts as $script) {
        wp_enqueue_script( 
            str_replace('.js', '', $script), // Handle name
            $base_path . $script, 
            ['jquery'], // Dependencies
            null, // Version
            true // Load in footer
        );
    }
}
add_action('wp_enqueue_scripts', 'custom_enqueue_footer_scripts');

add_filter('woocommerce_get_price_html', function($price, $product) {
    if ($product->is_type('variable')) {
        return '<span class="price-label">Price: </span>' . $price;
    }
    return $price;
}, 10, 2);

add_filter('woocommerce_format_sale_price', function($price, $regular_price, $sale_price) {
    return '<span class="woocommerce-Price-amount amount">' . wc_price($sale_price) . '</span>';
}, 10, 3);

add_filter('woocommerce_show_variation_price', '__return_true');

add_filter('woocommerce_available_variation', function($data, $product, $variation) {
    $data['price_html'] = '<span class="price-label">Price: </span>' . $variation->get_price_html();
    return $data;
}, 10, 3);
