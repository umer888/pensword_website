<?php

namespace PaymentPlugins;

defined ( 'ABSPATH' ) || exit ();

/**
 *
 * @author PaymentPlugins
 * @since 3.1.7
 * @package Braintree/Classes
 *         
 */
class WC_Braintree_Constants {

	const PAYMENT_METHOD_TOKEN = '_payment_method_token';

	const VERSION = '_wc_braintree_version';

	const MERCHANT_ACCOUNT_ID = '_merchant_account_id';

	const ENVIRONMENT = '_wc_braintree_environment';

	const TRANSACTION_STATUS = '_transaction_status';

	const AUTH_EXP = '_authorization_exp_at';

	const BRAINTREE_CC = 'braintree_cc';

	const BRAINTREE_CREDIT_CARD = 'braintree_credit_card';

	const BRAINTREE_PAYPAL = 'braintree_paypal';

	const BRAINTREE_GOOGLEPAY = 'braintree_googlepay';

	const BRAINTREE_APPLEPAY = 'braintree_applepay';

	const BRAINTREE_VENMO = 'braintree_venmo';

	const TOKEN_CHECK = 'wc_braintree_token_check';
}