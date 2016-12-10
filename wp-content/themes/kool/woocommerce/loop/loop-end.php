

<?php
/**
 * Product Loop End
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-end.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */


?>



</div>

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

    <button type="submit" class="single_add_to_cart_button button alt"><?php echo $product->single_add_to_cart_text(); ?></button>

    <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
</form>
</div>
</div>
