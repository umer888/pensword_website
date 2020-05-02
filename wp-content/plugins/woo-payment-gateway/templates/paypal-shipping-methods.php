<?php
/**
 * @version 3.0.0
 * @package Braintree/Templates
 */
WC ()->cart->calculate_totals ();
$gateway = WC()->payment_gateways()->payment_gateways()['braintree_paypal'];
$packages = $gateway->get_shipping_packages();
$chosen_shipping_methods = WC ()->session->get ( 'chosen_shipping_methods', array() );
?>
<div class="paypal-shipping-methods">
	<div class="container">
		<div class="paypal-logo">
			<img
				src="<?php echo braintree()->assets_path() . 'img/paypal/paypal_long.svg'?>" />
		</div>
		<div class="content">
		<?php foreach($packages as $i => $package):?>
			<label><img class="location" src="<?php echo braintree()->assets_path() . 'img/location.svg' ?>"/>&nbsp;<?php _e('Ship to', 'woo-payment-gateway')?></label>
			<div class="shipping-address">
			<?php echo WC()->countries->get_formatted_address(array_merge(array('first_name' => WC()->customer->get_shipping_first_name(), 'last_name' => WC()->customer->get_shipping_last_name()), $package['destination']))?>
			</div>
			<label><img class="truck" src="<?php echo braintree()->assets_path() . 'img/truck.svg' ?>"/>&nbsp;<?php _e('Shipping Methods', 'woo-payment-gateway')?></label>
			<ul class="shipping-methods">
				<?php if ($package['rates']):?>
					<?php foreach($package['rates'] as $method):?>
					<li class="shipping-method">
						<?php printf('<input type="radio" name="wc_shipping_method[%1$s]" data-index="%1$s" id="wc_shipping_method_%1$s_%2$s" value="%2$s" %3$s/>', $i, esc_attr($method->id), checked($method->id, isset($chosen_shipping_methods[$i]) ? $chosen_shipping_methods[$i] : '', false))?>
						<?php printf('<label class="shipping-label" for="wc_shipping_method_%1$s_%2$s">%3$s</label>', $i, esc_attr($method->id), wc_cart_totals_shipping_method_label( $method ))?>
					</li>
					<?php endforeach;?>
				<?php else:?>
				<?php _e('There are no shipping methods available for the address selected.', 'woo-payment-gateway');?>
				<?php endif;?>
			</ul>
			<?php wc_braintree_get_template('paypal-cart-totals.php', array('gateway' => $gateway))?>
		<?php endforeach;?>
		<div class="button-container">
				<button id="place_order" class="place-order"><?php _e('Place Order', 'woocommerce')?></button>
				<button id="close" class="close"><?php _e('Cancel', 'woocommerce')?></button>
			</div>
		</div>
	</div>
</div>
<div id="preloaderSpinner" class="preloader spinner"
	style="display: none;">
	<div class="spinWrap">
		<p class="spinnerImage"></p>
		<p class="spinLoader"></p>
		<p class="loadingMessage" id="spinnerMessage"></p>
		<p class="loadingSubHeading" id="spinnerSubHeading"></p>
	</div>
</div>