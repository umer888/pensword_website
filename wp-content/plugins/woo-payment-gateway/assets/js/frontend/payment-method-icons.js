jQuery(function($){
	icons = {
			params: wc_braintree_payment_method_icons_params,
			init: function(){
				this.add_icons();
			},
			add_icons: function(){
				$rows = $('.woocommerce-MyAccount-paymentMethods tr.payment-method');
				$.each(icons.params.tokens, function(index, token){
					$td = $rows.eq(token.index).find('td.woocommerce-PaymentMethod--method');
					$td.prepend(icons.params.icons[token.card_type]);
				})
			}
	}
	icons.init()
})