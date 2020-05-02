<?php
defined ( 'ABSPATH' ) || exit ();

add_filter ( 'woocommerce_get_customer_payment_tokens', 'wc_braintree_filter_payment_tokens', 10, 3 );
add_filter ( 'wc_order_statuses', 'wc_braintree_merge_order_statuses' );
add_filter ( 'body_class', 'wc_braintree_add_body_class' );
add_filter ( 'woocommerce_payment_complete_order_status', 'wc_braintree_payment_complete_order_status', 99, 3 );
add_action ( 'woocommerce_payment_token_deleted', 'wc_braintree_woocommerce_payment_token_deleted', 10, 2 );
add_filter ( 'woocommerce_payment_gateways', 'wc_braintree_payment_gateways' );
add_filter ( 'wc_braintree_localize_script_local-payment', 'wc_braintree_local_payment_params', 10, 2 );
add_action ( 'woocommerce_after_checkout_form', 'wc_braintree_enqueue_local_payments' );

/**
 * Webhooks
 */
add_action ( 'wc_braintree_webhook_notification_' . \Braintree\WebhookNotification::CHECK, 'wc_braintree_webhook_check' );
add_action ( 'wc_braintree_webhook_notification_' . \Braintree\WebhookNotification::LOCAL_PAYMENT_COMPLETED, 'wc_braintree_local_payment_completed', 10, 2 );

/**
 * **** Template Hooks *****
 */
add_action ( 'woocommerce_checkout_before_customer_details', 'wc_braintree_banner_checkout_template' );
add_action ( 'woocommerce_after_add_to_cart_button', 'wc_braintree_show_product_checkout_gateways' );
// add_action('woocommerce_before_template_part', 'wc_braintree_deprecated_template_check', 10, 3);