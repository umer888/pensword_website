<?php
/**
 * 
 * @author PaymentPlugins
 * @since 3.1.7
 * @package Braintree/Traits
 *
 */
trait WC_Braintree_Settings_Trait{

	public function get_tab_title() {
		return $this->tab_title;
	}

	public function admin_settings_tabs($tabs) {
		$tabs[ $this->id ] = $this->get_tab_title ();
		return $tabs;
	}

	public function get_prefix() {
		return $this->plugin_id . $this->id . '_';
	}

	public function is_active($key) {
		return $this->get_option ( $key ) === 'yes';
	}
	
	public function get_custom_attribute_html($attribs) {
		if (! empty ( $attribs[ 'custom_attributes' ] ) && is_array ( $attribs[ 'custom_attributes' ] )) {
			foreach ( $attribs[ 'custom_attributes' ] as $k => $v ) {
				if (is_array ( $v )) {
					$attribs[ 'custom_attributes' ][ $k ] = htmlspecialchars ( wp_json_encode ( $v ) );
				}
			}
		}
		return parent::get_custom_attribute_html ( $attribs );
	}
	
	public function generate_multiselect_html($key, $data) {
		$value = ( array ) $this->get_option ( $key, array() );
		$data[ 'options' ] = array_merge ( array_flip ( $value ), $data[ 'options' ] );
		return parent::generate_multiselect_html ( $key, $data );
	}
	
	public function output_settings_nav() {
		include braintree ()->plugin_path () . 'includes/admin/views/html-settings-nav.php';
	}
}