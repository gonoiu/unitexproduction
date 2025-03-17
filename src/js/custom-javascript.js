// Add your custom JS here.

jQuery(document).ready(function($) {
    function updateCartCount() {
        $.ajax({
            url: wc_ajax_url.toString().replace('%%endpoint%%', 'update_mini_cart_count'),
            type: 'GET',
            success: function(count) {
                $('.cart-count').text(count);
            }
        });
    }

    // Update cart count when item is added or removed
    $(document.body).on('added_to_cart removed_from_cart', function() {
        updateCartCount();
    });
});
