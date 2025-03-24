<?php
/**
 * Variable product add to cart
 *
 * @version 3.5.5
 */

defined('ABSPATH') || exit;

global $product;
$attribute_keys = array_keys($attributes);
do_action('woocommerce_before_add_to_cart_form'); ?>

<form class="variations_form cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint($product->get_id()); ?>" data-product_variations="<?php echo htmlspecialchars(json_encode($available_variations), ENT_QUOTES, 'UTF-8'); ?>">

    <?php do_action('woocommerce_before_variations_form'); ?>

    <?php if (empty($available_variations) && false !== $available_variations) : ?>
        <p class="stock out-of-stock"><?php esc_html_e('This product is currently out of stock and unavailable.', 'woocommerce'); ?></p>
    <?php else : ?>
        <table class="variations" cellspacing="0">
            <tbody>
                <?php foreach ($attributes as $attribute_name => $options) : ?>
                    <tr>
                        <td class="label"><label for="<?php echo esc_attr(sanitize_title($attribute_name)); ?>"><?php echo wc_attribute_label($attribute_name); ?></label></td>
                        <td class="value">
                            <?php
                            wc_dropdown_variation_attribute_options(array(
                                'options'   => $options,
                                'attribute' => $attribute_name,
                                'product'   => $product,
                            ));
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="single_variation_wrap">
            <div class="flex-container">
                <div class="variation-dropdown">
                    <?php do_action('woocommerce_before_single_variation'); ?>
                    <?php do_action( 'woocommerce_single_variation' ); ?>
                </div>

            </div>
        </div>

    <?php endif; ?>

    <?php do_action('woocommerce_after_variations_form'); ?>
</form>

<?php do_action('woocommerce_after_add_to_cart_form'); ?>
