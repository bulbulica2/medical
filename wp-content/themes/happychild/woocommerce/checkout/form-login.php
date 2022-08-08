<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( is_user_logged_in() || 'no' === get_option( 'woocommerce_enable_checkout_login_reminder' ) ) return;

$info_message = __( 'Returning customer?', 'woocommerce' ).' '.__( 'Click here to login', 'woocommerce' );
?>
<div class="accordion">
	<ul>
		<li>
			<h3><?php echo $info_message; ?></h3>
			<section>
				<?php
					woocommerce_login_form(
						array(
							'message'  => __( 'If you have shopped with us before, please enter your details in the boxes below.', 'happychild' ),
							'redirect' => get_permalink( wc_get_page_id( 'checkout' ) ),
							'hidden'   => false
						)
					);
				?>
			</section>
		</li>
	</ul>
</div>