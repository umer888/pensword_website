<?php defined ( 'ABSPATH' ) || exit ();?>
<form class="wc-braintre-data-migration" id="data_migration">
	<?php wp_nonce_field('wp_rest')?>
	<p>
		<?php _e('Braintree for WooCommerce give you the ability to migrate your data from other Braintree plugins.', 'woo-payment-gateway')?>
	</p>
	<p>
		<?php _e('By migrating your data, you can seamlessly transition to Braintree for WooCommerce and all data will be in a format this plugin understands.', 'woo-payment-gateway')?>
	</p>
	<label><?php _e('Instructions', 'woo-payment-gateway')?></label>
	<ol>
		<li><?php _e('Select the plugin you wish to migrate data from.', 'woo-payment-gateway')?></li>
		<li><?php _e('Select the data types you want to migrate.', 'woo-payment-gateway')?></li>
		<li><?php _e('Click the Proceed button and your data will be migrated.', 'woo-payment-gateway')?></li>
	</ol>
	<div class="row plugin-options">
		<select name="plugin_id">
			<option value="paypal_powered_by_braintree"><?php _e('WooCommerce PayPal Powered By Braintree', 'woo-payment-gateway')?></option>
		</select>
	</div>
	<div class="row">
		<div class="data-option">
			<label><?php _e('User Data', 'woo-payment-gateway')?></label> <input
				type="checkbox" name="users" value="yes" />
			<div>
				<small><?php _e('Customer payment methods will be loaded automatically the next time they login.', 'woo-payment-gateway')?></small>
			</div>
		</div>
		<div class="data-option">
			<label><?php _e('Order Data', 'woo-payment-gateway')?></label> <input
				type="checkbox" name="orders" value="yes" />
			<div>
				<small><?php _e('Orders will be updated with the payment methods used by this plugin.', 'woo-payment-gateway')?></small>
			</div>
		</div>
		<?php if(wcs_braintree_active()):?>
		<div class="data-option">
			<label><?php _e('Subscription Data', 'woo-payment-gateway')?></label>
			<input type="checkbox" name="subscriptions" value="yes" />
			<div>
				<small><?php _e('Your subscriptions will continue to process automatically without interruption', 'woo-payment-gateway')?></small>
			</div>
		</div>
		<?php endif;?>
	</div>
	<div class="row process">
		<button class="button button-primary api-migration"><?php _e('Proceed', 'woo-payment-gateway')?></button>
	</div>
</form>