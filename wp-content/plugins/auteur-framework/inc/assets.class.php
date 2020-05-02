<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

if (!class_exists('G5P_Inc_Assets')) {
	class G5P_Inc_Assets {
		private static $_instance;
		public static function getInstance()
		{
			if (self::$_instance == NULL) {
				self::$_instance = new self();
			}

			return self::$_instance;
		}


		public function registerScript() {

			wp_register_script(G5P()->assetsHandle('vc-backend'), G5P()->helper()->getAssetUrl('assets/js/vc-backend.min.js'), array('jquery'), G5P()->pluginVer(), true);
            wp_register_script(G5P()->assetsHandle('admin-portfolio'), G5P()->helper()->getAssetUrl('assets/js/admin-portfolio.min.js'), array('jquery'), G5P()->pluginVer(), true);
            wp_register_script(G5P()->assetsHandle('dashboard-system-status'), G5P()->helper()->getAssetUrl('assets/js/dashboard-system-status.min.js'), array('jquery'), G5P()->pluginVer(), true);

            wp_register_script('powertip', G5P()->helper()->getAssetUrl('assets/vendors/jquery.powertip/jquery.powertip.min.js'), array('jquery'), '1.2.0', true);
            wp_register_script(G5P()->assetsHandle('post-format'), G5P()->helper()->getAssetUrl('assets/js/post-format.min.js'), array('jquery'), G5P()->pluginVer(), true);
		}
		public function registerStyle() {

			/**
			 * Framework style
			 */
            wp_register_style(G5P()->assetsHandle('vc-backend'), G5P()->helper()->getAssetUrl('assets/css/vc-backend.min.css'), array(), G5P()->pluginVer());
			wp_register_style(G5P()->assetsHandle('admin-bar'), G5P()->helper()->getAssetUrl('assets/css/admin-bar.min.css'), array(), G5P()->pluginVer());
            wp_register_style(G5P()->assetsHandle('admin-portfolio'), G5P()->helper()->getAssetUrl('assets/css/admin-portfolio.min.css'), array(), G5P()->pluginVer());
            wp_register_style(G5P()->assetsHandle('dashboard'), G5P()->helper()->getAssetUrl('assets/css/dashboard.min.css'), array(), G5P()->pluginVer());

            wp_register_style('powertip', G5P()->helper()->getAssetUrl('assets/vendors/jquery.powertip/jquery.powertip.css'), array(), '1.2.0');
            wp_register_style('powertip-dark', G5P()->helper()->getAssetUrl('assets/vendors/jquery.powertip/jquery.powertip-dark.min.css'), array(), '1.2.0');

		}

		public function dequeue_resource () {
		    wp_dequeue_style('yith-wcwl-font-awesome');
        }

        public function dequeue_resource_admin() {
            $screen         = get_current_screen();
            $screen_id      = $screen ? $screen->id : '';

            if ( function_exists('wc_get_screen_ids') && !in_array( $screen_id, wc_get_screen_ids() ) ) {
                wp_dequeue_style( 'woocommerce_admin_styles' );
            }
        }


	}
}