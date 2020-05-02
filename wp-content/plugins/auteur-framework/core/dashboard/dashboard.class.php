<?php
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
if ( ! class_exists( 'G5P_Core_Dashboard' ) ) {
	class G5P_Core_Dashboard {
		private static $_instance;

		public static function getInstance() {
			if ( self::$_instance == null ) {
				self::$_instance = new self();
			}

			return self::$_instance;
		}

		public function init() {
			add_action( 'admin_menu', array( $this, 'admin_menu' ), 1 );
			add_action( 'admin_bar_menu', array( $this, 'admin_bar_menu' ), 81 );
			add_action('admin_enqueue_scripts', array($this, 'admin_enqueue'));


            add_action('admin_bar_menu',array($this,'presetMenu'),100);
            if ($this->is_dashboard_page('install_demo')) {
                $this->install_demo()->init();
            }

            if ($this->is_dashboard_page('system')) {
                $this->system_status()->init();
            }
		}

        public function admin_enqueue() {

            if ($this->is_dashboard_page()) {
                wp_enqueue_style(G5P()->assetsHandle('dashboard'));
            }

        }

		public function admin_menu() {
			$current_theme      = wp_get_theme();
			$current_theme_name = $current_theme->get( 'Name' );
			add_menu_page(
				$current_theme_name,
				$current_theme_name,
				'manage_options',
				'gsf_welcome',
				array( $this, 'render_content' ),
				'dashicons-lightbulb',
				30
			);

			$pages = $this->get_config_pages();
			foreach ( $pages as $key => $value ) {
			    if (isset($value['link'])) continue;
				add_submenu_page(
					'gsf_welcome',
					$value['page_title'],
					$value['menu_title'],
					'manage_options',
					"gsf_{$key}",
					$value['function_binder']
				);
			}
		}

		public function get_config_pages() {
			return apply_filters( 'gsf_dashboard_menu', array(
				'welcome'      => array(
					'page_title'      => esc_html__( 'Welcome', 'auteur-framework' ),
					'menu_title'      => esc_html__( 'Welcome', 'auteur-framework' ),
					'function_binder' => array($this->welcome(),'render_content'),
				),
				'plugins'      => array(
					'page_title'      => esc_html__( 'Plugins', 'auteur-framework' ),
					'menu_title'      => esc_html__( 'Plugins', 'auteur-framework' ),
					'function_binder' => array($this->plugins(),'render_content')
				),
				'install_demo' => array(
					'page_title'      => esc_html__( 'Install Demo', 'auteur-framework' ),
					'menu_title'      => esc_html__( 'Install Demo', 'auteur-framework' ),
					'function_binder' => array($this->install_demo(),'render_content')
				),
                'system'      => array(
                    'page_title'      => esc_html__( 'System', 'auteur-framework' ),
                    'menu_title'      => esc_html__( 'System', 'auteur-framework' ),
                    'function_binder' => array($this->system_status(),'render_content')
                ),
                'fonts_management' => array(
                    'menu_title' => esc_html__( 'Fonts Management', 'auteur-framework' ),
                    'link' => admin_url('admin.php?page=gsf_fonts_management')
                ),
                'skin_options' => array(
                    'menu_title' => esc_html__( 'Skins Options', 'auteur-framework' ),
                    'link' => admin_url('admin.php?page=gsf_skins')
                ),
                'theme_options' => array(
                    'menu_title' => esc_html__( 'Theme Options', 'auteur-framework' ),
                    'link' => admin_url('admin.php?page=gsf_options')
                )
			) );
		}

		public function render_content() {

		}

		public function admin_bar_menu($admin_bar) {
			$current_theme = wp_get_theme();
			$current_theme_name = $current_theme->get('Name');

			$admin_bar->add_node(array(
				'id' => 'gsf-parent-welcome',
				'title' => sprintf('<span class="ab-icon"></span><span class="ab-label">%s</span>',$current_theme_name),
				'href' => admin_url("admin.php?page=gsf_welcome"),
			));

			$pages = $this->get_config_pages();

			foreach ($pages as $key => $value) {
			    $href = isset($value['link']) ? $value['link'] : admin_url("admin.php?page=gsf_{$key}");
				$admin_bar->add_node(array(
					'id' => "{$key}",
					'title' => $value['menu_title'],
					'href' => $href,
					'parent' => 'gsf-parent-welcome'
				));
			}
		}

        /**
         * @return G5P_Dashboard_System_Status
         */
        public function system_status() {
		    return G5P_Dashboard_System_Status::getInstance();
        }

        /**
         * @return G5P_Dashboard_Welcome
         */
        public function welcome() {
            return G5P_Dashboard_Welcome::getInstance();
        }

        /**
         * @return G5P_Dashboard_Plugins
         */
        public function plugins() {
            return G5P_Dashboard_Plugins::getInstance();
        }

        /**
         * @return G5P_Dashboard_Install_Demo
         */
        public function install_demo(){
		    return G5P_Dashboard_Install_Demo::getInstance();
        }

        public function is_dashboard_page($page = '') {
            global $pagenow;
            if ($pagenow === 'admin.php' && !empty($_GET['page'])) {
                $current_page = $_GET['page'];
                $current_page = preg_replace('/gsf_/','',$current_page);
                if ($page) {
                    return $current_page === $page;
                } else {
                    $pages = $this->get_config_pages();
                    return array_key_exists($current_page,$pages);
                }
            }
            return false;
        }

        public function presetMenu($admin_bar) {
            if (!is_admin_bar_showing()) {
                return;
            }

            $preset = G5P()->helper()->getCurrentPreset();
            if (!empty($preset)) {
                $admin_bar->add_node(array(
                    'id'    => 'preset',
                    'title' => sprintf('<span class="ab-icon"></span><span class="ab-label">%s</span>',esc_html__('Edit Preset', 'auteur-framework')),
                    'href'  => admin_url("admin.php?page=gsf_options&_gsf_preset={$preset}"),
                    'meta' => array(
                        'target' => '_blank',
                    )
                ));
            }

        }
	}
}