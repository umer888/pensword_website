jQuery(function($){
	var settings = {
			init: function(){
				settings.paymentsClient = new google.payments.api.PaymentsClient({
					environment: 'TEST'
				});
				$('.wc-braintree-button-option').on('change', this.render_button);
				this.render_button();
			},
			render_button: function(){
				$('#wc-braintree-button-demo').empty();
				if(settings.paymentsClient){
					var button = settings.paymentsClient.createButton({
						onClick: function(e){
							e.preventDefault();
						},
						buttonColor: $('.wc-braintree-button-color').val(),
						buttonType: $('.wc-braintree-button-type').val()
					});
					$('#wc-braintree-button-demo').append(button);
				}
			}
	};
	settings.init();
})