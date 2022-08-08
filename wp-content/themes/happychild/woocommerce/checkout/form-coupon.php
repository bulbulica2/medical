<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

if ( ! WC()->cart->coupons_enabled() ) {
	return;
}

$info_message = __( 'Have a coupon?', 'woocommerce' ).' '.__( 'Click here to enter your code', 'woocommerce' );
?>

<div class="accordion">
	<ul>
		<li>
			<h3><?php echo $info_message; ?></h3>
			<section>
				<form class="checkout_coupon" method="post">
					<div class="row">
						<div class="col-md-4 col-xs-12 col-sm-4">
							<div class="form-group">
								<input type="text" name="coupon_code" class="input-text" placeholder="<?php _e( 'Coupon code', 'woocommerce' ); ?>" id="coupon_code" value="" />
							</div>
						</div>
						<div class="col-md-4 col-xs-12 col-sm-4">
							<input type="submit" class="btn btn-danger" name="apply_coupon" value="<?php _e( 'Apply Coupon', 'woocommerce' ); ?>" />
						</div>
						<div class="col-md-4 col-xs-12 col-sm-4"></div>
					</div>
				</form>
			</section>
		</li>
	</ul>
</div>