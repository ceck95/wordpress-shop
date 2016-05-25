<?php
/**
 * Empty cart page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

wc_print_notices();

?>

<?php do_action('woocommerce_cart_is_empty'); ?>

<div class="empty-cart-block">
	<i class="icon-shopping-cart"></i>
	
	<h2>Giỏ hàng trống</h2>	
	<p><a class="btn active big filled" href="<?php echo get_permalink(woocommerce_get_page_id('shop')); ?>"><span><?php _e('Quay lại shop', ETHEME_DOMAIN) ?></span></a></p>
	
</div>