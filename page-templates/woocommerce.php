<?php
/*
 * Template Name: Clean Woocommerce
 */

get_header('page'); // Load the header-page.php file if it exists
?>

<main id="primary" class="site-main">
    <div class="container">
        <?php
        while (have_posts()) : the_post();
            the_content(); // Outputs Gutenberg content
        endwhile;
        ?>
    </div>
</main>

<br>
<br>

<?php get_footer(); // Load the footer.php file ?>