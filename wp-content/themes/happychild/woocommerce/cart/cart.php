<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

wc_print_notices();

do_action( 'woocommerce_before_cart' ); ?>

<form action="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" method="post">

<?php do_action( 'woocommerce_before_cart_table' ); ?>
<div class="post_title">
	<h1><?php woocommerce_page_title(); ?></h1>
</div>
<table class="shop_table cart" cellspacing="0">
	<thead>
		<tr>
			<th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
			<th class="product-price a-center"><?php _e( 'Price', 'woocommerce' ); ?></th>
			<th class="product-quantity a-center"><?php _e( 'Quantity', 'woocommerce' ); ?></th>
			<th class="product-subtotal a-center"><?php _e( 'Total', 'woocommerce' ); ?></th>
			<th class="product-remove a-center">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php do_action( 'woocommerce_before_cart_contents' ); ?>

		<?php
		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				?>
				<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

					<td class="product-name">
						<div class="product-thumbnail">
							<?php
							$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

							if ( ! $_product->is_visible() )
								echo $thumbnail;
							else
								printf( '<a href="%s">%s</a>', $_product->get_permalink(), $thumbnail );
							?>
						</div>
						<div class="product_detail">
							<?php
								$categories = wp_get_post_terms($product_id,'product_cat');
								if($categories){ echo '<div class="product_cat">'.$categories[0]->name.' ></div>'; }
								if ( ! $_product->is_visible() )
									echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
								else
									echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', $_product->get_permalink(), $_product->get_title() ), $cart_item, $cart_item_key );

								// Meta data
								echo WC()->cart->get_item_data( $cart_item );

								// Backorder notification
								if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) )
									echo '<p class="backorder_notification">' . __( 'Available on backorder', 'woocommerce' ) . '</p>';
							?>
						</div>
					</td>

					<td class="product-price a-center">
						<?php
							echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
						?>
					</td>

					<td class="product-quantity a-center">
						<?php
							if ( $_product->is_sold_individually() ) {
								$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
							} else {
								$product_quantity = woocommerce_quantity_input( array(
									'input_name'  => "cart[{$cart_item_key}][qty]",
									'input_value' => $cart_item['quantity'],
									'max_value'   => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
									'min_value'   => '0'
								), $_product, false );
							}

							echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key );
						?>
					</td>

					<td class="product-subtotal a-center">
						<?php
							echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
						?>
					</td>
					<td class="product-remove a-center">
						<?php
						echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="%s" class="remove" title="%s"><i class="fa fa-times"></i></a>', esc_url( WC()->cart->get_remove_url( $cart_item_key ) ), __( 'Remove this item', 'woocommerce' ) ), $cart_item_key );
						?>
					</td>
				</tr>
				<?php
			}
		}
		?>

	</tbody>
	<tfoot>
		<?php do_action( 'woocommerce_cart_contents' ); ?>
		<tr>
			<td colspan="5" class="actions">

				<?php if ( WC()->cart->coupons_enabled() ) { ?>
					<div class="coupon">

						<label for="coupon_code"><?php _e( 'Coupon', 'woocommerce' ); ?>:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php _e( 'Coupon code', 'woocommerce' ); ?>" /> <input type="submit" class="btn btn-bordered-2 white" name="apply_coupon" value="<?php _e( 'Apply Coupon', 'woocommerce' ); ?>" />

						<?php do_action('woocommerce_cart_coupon'); ?>

					</div>
				<?php } ?>

				<button class="btn btn-bordered-2 white" name="update_cart" ><i class="fa fa-refresh"></i><?php _e( 'Update Cart', 'woocommerce' ); ?></button>
				<input type="submit" class="btn btn-danger proceed_to_checkout" name="proceed" value="<?php _e( 'Proceed to Checkout', 'woocommerce' ); ?>" />

				<?php //do_action( 'woocommerce_proceed_to_checkout' ); ?>

				<?php wp_nonce_field( 'woocommerce-cart' ); ?>
			</td>
		</tr>

		<?php do_action( 'woocommerce_after_cart_contents' ); ?>
	</tfoot>
</table>

<?php do_action( 'woocommerce_after_cart_table' ); ?>

</form>

<div class="cart-collaterals">
	<div class="row">
		<div class="col-md-6 col-xs-12 col-sm-6">
			<?php woocommerce_cart_totals(); ?>
		</div>
		<div class="col-md-6 col-xs-12 col-sm-6">
			<?php woocommerce_shipping_calculator(); ?>
		</div>
	</div>
</div>
<?php //do_action( 'woocommerce_cart_collaterals' ); ?>

<?php do_action( 'woocommerce_after_cart' ); ?>
