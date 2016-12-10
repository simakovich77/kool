

<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
global $woocommerce_loop;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>



	<div class="col-md-4 col-sm-6">

<div class="product-item">
                        

                        <div class="product-content">





								<?php
								/**
								 * woocommerce_before_shop_loop_item hook.
								 *
								 * @hooked woocommerce_template_loop_product_link_open - 10
								 */
								do_action( 'woocommerce_before_shop_loop_item' );

								/**
								 * woocommerce_before_shop_loop_item_title hook.
								 *
								 * @hooked woocommerce_show_product_loop_sale_flash - 10
								 * @hooked woocommerce_template_loop_product_thumbnail - 10
								 */
								do_action( 'woocommerce_before_shop_loop_item_title' );

								/**
								 * woocommerce_shop_loop_item_title hook.
								 *
								 * @hooked woocommerce_template_loop_product_title - 10
								 */
								do_action( 'woocommerce_shop_loop_item_title' );



								/**
								 * woocommerce_after_shop_loop_item_title hook.
								 *
								 * @hooked woocommerce_template_loop_rating - 5
								 * @hooked woocommerce_template_loop_price - 10
								 */
								do_action( 'woocommerce_after_shop_loop_item_title' );

								/**
								 * woocommerce_after_shop_loop_item hook.
								 *
								 * @hooked woocommerce_template_loop_product_link_close - 5
								 * @hooked woocommerce_template_loop_add_to_cart - 10
								 */


								?>






							<form class="cart" method="post" enctype='multipart/form-data'>
								<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

								<?php if ( ! $product->is_sold_individually() )
									woocommerce_quantity_input( array(
										'min_value' => apply_filters( 'woocommerce_quantity_input_min', 1, $product ),
										'max_value' => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product )
									) );
								?>

								<input type="hidden" name="add-to-cart" value="<?php

								echo esc_attr( $product->id ); ?>" />



								<div class="btn-toolbar text-center">
									<button type="submit" class="btn btn-primary pull-right">Add to cart</button>
								</div>

								<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
							</form>






</div>


</div>
</div>