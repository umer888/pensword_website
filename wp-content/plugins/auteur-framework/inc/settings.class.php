<?php
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
if (!class_exists(' G5P_Inc_Settings')) {
    class  G5P_Inc_Settings
    {
        private static $_instance;

        public static function getInstance()
        {
            if (self::$_instance == NULL) {
                self::$_instance = new self();
            }

            return self::$_instance;
        }

        /**
         * Get Main Layout
         *
         * @param bool $default
         * @return mixed|void
         */
        public function get_main_layout($default = false)
        {
            $defaults = array();
            if ($default) {
                $defaults[''] = array(
                    'label' => esc_html__('Inherit', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/default.png'),
                );
            }
            $config = apply_filters('gsf_options_main_layout', array(
                'wide' => array(
                    'label' => esc_html__('Wide', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/layout-wide.png'),
                ),
                'boxed' => array(
                    'label' => esc_html__('Boxed', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/layout-boxed.png'),
                ),
                'framed' => array(
                    'label' => esc_html__('Framed', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/layout-framed.png'),
                ),
                'bordered' => array(
                    'label' => esc_html__('Bordered', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/layout-bordered.png'),
                )
            ));

            $config = wp_parse_args($config, $defaults);
            return $config;
        }

        /**
         * Get Sidebar Layout
         *
         * @param bool $inherit
         * @return mixed|void
         */
        public function get_sidebar_layout($inherit = false)
        {
            $config = apply_filters('gsf_options_sidebar_layout', array(
                'none' => array(
                    'label' => esc_html__('Full Width', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/sidebar-none.png'),
                ),
                'left' => array(
                    'label' => esc_html__('Left Sidebar', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/sidebar-left.png'),
                ),
                'right' => array(
                    'label' => esc_html__('Right Sidebar', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/sidebar-right.png'),
                )
            ));

            if ($inherit) {
                $config = array(
                        '' => array(
                            'label' => esc_html__('Inherit', 'auteur-framework'),
                            'img' => G5P()->pluginUrl('assets/images/theme-options/default.png'),
                        )
                    ) + $config;
            }
            return $config;
        }

        /**
         * Get Sidebar Width
         *
         * @param bool $inherit
         * @return array|mixed|void
         */
        public function get_sidebar_width($inherit = false)
        {
            $config = apply_filters('gsf_options_sidebar_width', array(
                'small' => esc_html__('Small (1/4)', 'auteur-framework'),
                'large' => esc_html__('Large (1/3)', 'auteur-framework')
            ));
            if ($inherit) {
                $config = array(
                        '' => esc_html__('Inherit', 'auteur-framework')
                    ) + $config;
            }
            return $config;
        }

        /**
         * Get Toggle
         *
         * @param bool $inherit
         * @return array
         */
        public function get_toggle($inherit = false)
        {
            $config = array(
                'on' => esc_html__('On', 'auteur-framework'),
                'off' => esc_html__('Off', 'auteur-framework')
            );

            if ($inherit) {
                $config = array('' => esc_html__('Inherit', 'auteur-framework')) + $config;
            }
            return $config;
        }

        /**
         * Get Header Customize Nav Required
         *
         * @return array
         */
        public function get_header_customize_nav_required()
        {
            return apply_filters('gsf_options_header_customize_nav_required', array('header-1', 'header-2', 'header-3', 'header-5', 'header-7', 'header-8', 'header-9', 'header-11', 'header-12'));
        }

        /**
         * Get Header Customize Left Required
         *
         * @return array
         */
        public function get_header_customize_left_required()
        {
            return apply_filters('gsf_options_header_customize_left_required', array('header-4', 'header-6'));
        }

        /**
         * Get Header Customize Right Required
         *
         * @return array
         */
        public function get_header_customize_right_required()
        {
            return apply_filters('gsf_options_header_customize_right_required', array('header-4', 'header-6'));
        }

        /**
         * Get Search Ajax Post Type
         *
         * @return array
         */
        public function get_search_ajax_popup_post_type()
        {

            $output = array(
                'post' => esc_html__('Post', 'auteur-framework'),
                'page' => esc_html__('Page', 'auteur-framework'),
            );

            if (class_exists('WooCommerce')) {
                $output['product'] = esc_html__('Product', 'auteur-framework');
            }


            return apply_filters('gsf_options_get_search_popup_ajax_post_type', $output);
        }

        /**
         * Get Maintenance Mode
         *
         * @return array
         */
        public function get_maintenance_mode()
        {
            return apply_filters('gsf_options_maintenance_mode', array(
                '2' => 'On (Custom Page)',
                '1' => 'On (Standard)',
                '0' => 'Off',
            ));
        }

        /**
         * Get Header Layout
         *
         * @return array
         */
        public function get_header_layout()
        {
            return apply_filters('gsf_options_header_layout', array(
                'header-1' => array(
                    'img' => G5P()->pluginUrl('assets/images/theme-options/header-1.jpg'),
                    'label' => esc_html__('Header 1', 'auteur-framework')
                ),
                'header-2' => array(
                    'img' => G5P()->pluginUrl('assets/images/theme-options/header-2.jpg'),
                    'label' => esc_html__('Header 2', 'auteur-framework')
                ),
                'header-3' => array(
                    'img' => G5P()->pluginUrl('assets/images/theme-options/header-3.jpg'),
                    'label' => esc_html__('Header 3', 'auteur-framework')
                ),
                'header-4' => array(
                    'img' => G5P()->pluginUrl('assets/images/theme-options/header-4.jpg'),
                    'label' => esc_html__('Header 4', 'auteur-framework')
                ),
                'header-5' => array(
                    'img' => G5P()->pluginUrl('assets/images/theme-options/header-5.jpg'),
                    'label' => esc_html__('Header 5', 'auteur-framework')
                ),
                'header-6' => array(
                    'img' => G5P()->pluginUrl('assets/images/theme-options/header-6.jpg'),
                    'label' => esc_html__('Header 6', 'auteur-framework')
                ),
                'header-7' => array(
                    'img' => G5P()->pluginUrl('assets/images/theme-options/header-7.png'),
                    'label' => esc_html__('Header 7', 'auteur-framework')
                ),
                'header-8' => array(
                    'img' => G5P()->pluginUrl('assets/images/theme-options/header-8.jpg'),
                    'label' => esc_html__('Header 8', 'auteur-framework')
                ),
                'header-9' => array(
                    'img' => G5P()->pluginUrl('assets/images/theme-options/header-9.jpg'),
                    'label' => esc_html__('Header 9', 'auteur-framework')
                ),
                'header-10' => array(
                    'img' => G5P()->pluginUrl('assets/images/theme-options/header-10.jpg'),
                    'label' => esc_html__('Header 10', 'auteur-framework')
                ),
                'header-11' => array(
                    'img' => G5P()->pluginUrl('assets/images/theme-options/header-11.jpg'),
                    'label' => esc_html__('Header 11', 'auteur-framework')
                ),
                'header-12' => array(
                    'img' => G5P()->pluginUrl('assets/images/theme-options/header-12.jpg'),
                    'label' => esc_html__('Header 12', 'auteur-framework')
                ),
            ));
        }

        /**
         * Get Navigation Layout
         *
         * @return array
         */
        public function get_navigation_style()
        {
            return apply_filters('gsf_options_navigation_style', array(
                'navigation-1' => array(
                    'img' => G5P()->pluginUrl('assets/images/theme-options/menu-1.jpg'),
                    'label' => esc_html__('Style 1', 'auteur-framework')
                ),
                'navigation-2' => array(
                    'img' => G5P()->pluginUrl('assets/images/theme-options/menu-2.jpg'),
                    'label' => esc_html__('Style 2', 'auteur-framework')
                ),
            ));
        }

        /**
         * Get Header Customize
         *
         * @return array
         */
        public function get_header_customize()
        {
            $settings = array(
                'search' => esc_html__('Search', 'auteur-framework'),
                'social-networks' => esc_html__('Social Networks', 'auteur-framework'),
                'sidebar' => esc_html__('Sidebar', 'auteur-framework'),
                'custom-html' => esc_html__('Custom Html', 'auteur-framework'),
                'canvas-sidebar' => esc_html__('Canvas Sidebar', 'auteur-framework')
            );
            if(defined( 'YITH_WCWL' ) && function_exists('yith_wcwl_object_id')) {
                $settings['wishlist'] = esc_html__('Wishlist', 'auteur-framework');
            } elseif(isset($settings['wishlist'])) {
                unset($settings['wishlist']);
            }
            if (class_exists('WooCommerce')) {
                $settings['shopping-cart'] = esc_html__('Shopping Cart', 'auteur-framework');
                $settings['my-account'] = esc_html__('My Account', 'auteur-framework');
            } else {
                if(isset($settings['shopping-cart'])) {
                    unset($settings['shopping-cart']);
                }
                if(isset($settings['my-account'])) {
                    unset($settings['my-account']);
                }
            }
            return apply_filters('gsf_options_header_customize', $settings);
        }

        public function get_mobile_header_customize()
        {
            $settings = array(
                'search' => esc_html__('Search', 'auteur-framework'),
                'social-networks' => esc_html__('Social Networks', 'auteur-framework'),
                'custom-html' => esc_html__('Custom Html', 'auteur-framework'),
            );
            if(defined( 'YITH_WCWL' ) && function_exists('yith_wcwl_object_id')) {
                $settings['wishlist'] = esc_html__('Wishlist', 'auteur-framework');
            } elseif(isset($settings['wishlist'])) {
                unset($settings['wishlist']);
            }
            if (class_exists('WooCommerce')) {
                $settings['shopping-cart'] = esc_html__('Shopping Cart', 'auteur-framework');
                $settings['my-account'] = esc_html__('My Account', 'auteur-framework');
            } else {
                if(isset($settings['shopping-cart'])) {
                    unset($settings['shopping-cart']);
                }
                if(isset($settings['my-account'])) {
                    unset($settings['my-account']);
                }
            }
            return apply_filters('gsf_options_mobile_header_customize', $settings);
        }

        /**
         * Get Header Mobile Layout
         *
         * @return array
         */
        public function get_header_mobile_layout()
        {
            return apply_filters('gsf_options_header_mobile_layout', array(
                'header-1' => array(
                    'img' => G5P()->pluginUrl('assets/images/theme-options/header-mobile-layout-1.png'),
                    'label' => esc_html__('Layout 1', 'auteur-framework')
                ),
                'header-2' => array(
                    'img' => G5P()->pluginUrl('assets/images/theme-options/header-mobile-layout-2.png'),
                    'label' => esc_html__('Layout 2', 'auteur-framework')
                ),
                'header-3' => array(
                    'img' => G5P()->pluginUrl('assets/images/theme-options/header-mobile-layout-3.png'),
                    'label' => esc_html__('Layout 3', 'auteur-framework')
                )
            ));
        }


        /**
         * Get Bottom Bar Layout
         *
         * @param bool $inherit
         * @return array|mixed|void
         */
        public function get_border_layout($inherit = false)
        {
            $config = apply_filters('gsf_options_border_layout', array(
                'none' => esc_html__('None', 'auteur-framework'),
                'full' => esc_html__('Full', 'auteur-framework'),
                'container' => esc_html__('Container', 'auteur-framework')
            ));

            if ($inherit) {
                $config = array(
                        '' => esc_html__('Inherit', 'auteur-framework')
                    ) + $config;
            }
            return $config;
        }

        /**
         * Get Loading Animation
         *
         * @return array
         */
        public function get_loading_animation()
        {
            return apply_filters('gsf_options_loading_animation', array(
                '' => esc_html__('None', 'auteur-framework'),
                'chasing-dots' => esc_html__('Chasing Dots', 'auteur-framework'),
                'circle' => esc_html__('Circle', 'auteur-framework'),
                'cube' => esc_html__('Cube', 'auteur-framework'),
                'double-bounce' => esc_html__('Double Bounce', 'auteur-framework'),
                'fading-circle' => esc_html__('Fading Circle', 'auteur-framework'),
                'folding-cube' => esc_html__('Folding Cube', 'auteur-framework'),
                'pulse' => esc_html__('Pulse', 'auteur-framework'),
                'three-bounce' => esc_html__('Three Bounce', 'auteur-framework'),
                'wave' => esc_html__('Wave', 'auteur-framework'),
            ));
        }

        /**
         * Get Top Drawer Mode
         *
         * @return mixed|void
         */
        public function get_top_drawer_mode()
        {
            return apply_filters('gsf_options_top_drawer_mode', array(
                'hide' => esc_html__('Hide', 'auteur-framework'),
                'toggle' => esc_html__('Toggle', 'auteur-framework'),
                'show' => esc_html__('Show', 'auteur-framework')
            ));
        }

        /**
         * Get Color Skin default
         *
         * @return mixed|void
         */
        public function &get_color_skin_default()
        {
            $skin_default = array(
                array(
                    'skin_id' => 'skin-light',
                    'skin_name' => esc_html__('Light', 'auteur-framework'),
                    'background_color' => '#fff',
                    'text_color' => '#696969',
                    'text_hover_color' => '',
                    'heading_color' => '#333',
                    'disable_color' => '#ababab',
                    'border_color' => '#ededed'
                ),
                array(
                    'skin_id' => 'skin-dark',
                    'skin_name' => esc_html__('Dark', 'auteur-framework'),
                    'background_color' => '#222',
                    'text_color' => 'rgba(255,255,255,0.7)',
                    'text_hover_color' => '',
                    'heading_color' => '#fff',
                    'disable_color' => '#ababab',
                    'border_color' => 'rgba(255,255,255,0.3)'
                ),
            );
            return $skin_default;
        }


        /**
         * Get Color Skin
         *
         * @param bool $default
         * @return array
         */
        public function get_color_skin($default = false)
        {
            $skins = array();
            if ($default) {
                $skins[] = esc_html__('Inherit', 'auteur-framework');
            }
            $custom_color_skin = G5P()->optionsSkin()->get_color_skin();
            if (is_array($custom_color_skin)) {
                foreach ($custom_color_skin as $key => $value) {
                    if (isset($value['skin_name']) && isset($value['skin_id'])) {
                        $skins[$value['skin_id']] = $value['skin_name'];
                    }

                }
            }
            return $skins;
        }

        public function getPresetPostType()
        {
            $settings = array(
                'page_404' => array(
                    'title' => esc_html__('404 Page', 'auteur-framework')
                ),
                'post' => array(
                    'title' => esc_html__('Blog', 'auteur-framework'),
                    'preset' => array(
                        'blog' => array(
                            'title' => esc_html__('Blog Listing', 'auteur-framework'),
                        ),
                        'single_blog' => array(
                            'title' => esc_html__('Single Blog', 'auteur-framework'),
                            'is_single' => true,
                        )
                    )
                )
            );

            if (class_exists('WooCommerce')) {
                $settings = array_merge($settings, array(
                    'product' => array(
                        'title' => esc_html__('Woocommerce', 'auteur-framework'),
                        'preset' => array(
                            'archive_product' => array(
                                'title' => esc_html__('Product Listing', 'auteur-framework'),
                                'category' => 'product_cat',
                                'tag' => 'product_tag',
                                'is_archive' => true,
                            ),
                            'single_product' => array(
                                'title' => esc_html__('Single Product', 'auteur-framework'),
                                'is_single' => true,
                            ),
                            'product_author' => array(
                                'title' => esc_html__('Single Author Page', 'auteur-framework'),
                                'is_single' => true,
                                'category' => 'product_author'
                            )
                        )
                    )
                ));
            }
            if (class_exists('Tribe__Events__Main')) {
                $settings = array_merge($settings, array(
                    Tribe__Events__Main::POSTTYPE => array(
                        'title' => esc_html__('Events', 'auteur-framework'),
                        'preset' => array(
                            'archive_events' => array(
                                'title' => esc_html__('Events Listing', 'auteur-framework'),
                                'category' => 'tribe_events_cat',
                                'is_archive' => true,
                            ),
                            'single_event' => array(
                                'title' => esc_html__('Single Event', 'auteur-framework'),
                                'is_single' => true,
                            )
                        )
                    )
                ));
            }
            return apply_filters('gsf_options_preset', $settings);
        }

        public function get_custom_post_layout_settings()
        {
            $settings = array(
                'search' => array(
                    'title' => esc_html__('Search Listing', 'auteur-framework')
                )
            );

            return apply_filters('gsf_options_custom_post_layout_settings', $settings);
        }

        /**
         * Get social networks default
         *
         * @return array
         */
        public function get_social_networks_default()
        {
            $social_networks = array(
                array(
                    'social_name' => esc_html__('Facebook', 'auteur-framework'),
                    'social_id' => 'social-facebook',
                    'social_icon' => 'fab fa-facebook-f',
                    'social_link' => '',
                    'social_color' => '#3b5998'
                ),
                array(
                    'social_name' => esc_html__('Twitter', 'auteur-framework'),
                    'social_id' => 'social-twitter',
                    'social_icon' => 'fab fa-twitter',
                    'social_link' => '',
                    'social_color' => '#1da1f2'
                ),
                array(
                    'social_name' => esc_html__('Pinterest', 'auteur-framework'),
                    'social_id' => 'social-pinterest',
                    'social_icon' => 'fab fa-pinterest',
                    'social_link' => '',
                    'social_color' => '#bd081c'
                ),
                array(
                    'social_name' => esc_html__('Dribbble', 'auteur-framework'),
                    'social_id' => 'social-dribbble',
                    'social_icon' => 'fab fa-dribbble',
                    'social_link' => '',
                    'social_color' => '#00b6e3'
                ),
                array(
                    'social_name' => esc_html__('LinkedIn', 'auteur-framework'),
                    'social_id' => 'social-linkedIn',
                    'social_icon' => 'fab fa-linkedin',
                    'social_link' => '',
                    'social_color' => '#0077b5'
                ),
                array(
                    'social_name' => esc_html__('Vimeo', 'auteur-framework'),
                    'social_id' => 'social-vimeo',
                    'social_icon' => 'fab fa-vimeo',
                    'social_link' => '',
                    'social_color' => '#1ab7ea'
                ),
                array(
                    'social_name' => esc_html__('Tumblr', 'auteur-framework'),
                    'social_id' => 'social-tumblr',
                    'social_icon' => 'fab fa-tumblr',
                    'social_link' => '',
                    'social_color' => '#35465c'
                ),
                array(
                    'social_name' => esc_html__('Skype', 'auteur-framework'),
                    'social_id' => 'social-skype',
                    'social_icon' => 'fab fa-skype',
                    'social_link' => '',
                    'social_color' => '#00aff0'
                ),
                array(
                    'social_name' => esc_html__('Google+', 'auteur-framework'),
                    'social_id' => 'social-google-plus',
                    'social_icon' => 'fab fa-google-plus',
                    'social_link' => '',
                    'social_color' => '#dd4b39'
                ),
                array(
                    'social_name' => esc_html__('Flickr', 'auteur-framework'),
                    'social_id' => 'social-flickr',
                    'social_icon' => 'fab fa-flickr',
                    'social_link' => '',
                    'social_color' => '#ff0084'
                ),
                array(
                    'social_name' => esc_html__('YouTube', 'auteur-framework'),
                    'social_id' => 'social-youTube',
                    'social_icon' => 'fab fa-youtube',
                    'social_link' => '',
                    'social_color' => '#cd201f'
                ),
                array(
                    'social_name' => esc_html__('Foursquare', 'auteur-framework'),
                    'social_id' => 'social-foursquare',
                    'social_icon' => 'fab fa-foursquare',
                    'social_link' => '',
                    'social_color' => '#f94877'
                ),
                array(
                    'social_name' => esc_html__('Instagram', 'auteur-framework'),
                    'social_id' => 'social-instagram',
                    'social_icon' => 'fab fa-instagram',
                    'social_link' => '',
                    'social_color' => '#405de6'
                ),
                array(
                    'social_name' => esc_html__('GitHub', 'auteur-framework'),
                    'social_id' => 'social-gitHub',
                    'social_icon' => 'fab fa-github',
                    'social_link' => '',
                    'social_color' => '#4078c0'
                ),
                array(
                    'social_name' => esc_html__('Xing', 'auteur-framework'),
                    'social_id' => 'social-xing',
                    'social_icon' => 'fab fa-xing',
                    'social_link' => '',
                    'social_color' => '#026466'
                ),
                array(
                    'social_name' => esc_html__('Behance', 'auteur-framework'),
                    'social_id' => 'social-behance',
                    'social_icon' => 'fab fa-behance',
                    'social_link' => '',
                    'social_color' => '#1769ff'
                ),
                array(
                    'social_name' => esc_html__('Deviantart', 'auteur-framework'),
                    'social_id' => 'social-deviantart',
                    'social_icon' => 'fab fa-deviantart',
                    'social_link' => '',
                    'social_color' => '#05cc47'
                ),
                array(
                    'social_name' => esc_html__('Sound Cloud', 'auteur-framework'),
                    'social_id' => 'social-soundCloud',
                    'social_icon' => 'fab fa-soundcloud',
                    'social_link' => '',
                    'social_color' => '#ff8800'
                ),
                array(
                    'social_name' => esc_html__('Yelp', 'auteur-framework'),
                    'social_id' => 'social-yelp',
                    'social_icon' => 'fab fa-yelp',
                    'social_link' => '',
                    'social_color' => '#af0606'
                ),
                array(
                    'social_name' => esc_html__('RSS Feed', 'auteur-framework'),
                    'social_id' => 'social-rss',
                    'social_icon' => 'fas fa-rss',
                    'social_link' => '',
                    'social_color' => '#f26522'
                ),
                array(
                    'social_name' => esc_html__('VK', 'auteur-framework'),
                    'social_id' => 'social-vk',
                    'social_icon' => 'fab fa-vk',
                    'social_link' => '',
                    'social_color' => '#45668e'
                ),
                array(
                    'social_name' => esc_html__('Email', 'auteur-framework'),
                    'social_id' => 'social-email',
                    'social_icon' => 'fas fa-envelope',
                    'social_link' => '',
                    'social_color' => '#4285f4'
                ),

            );
            return $social_networks;
        }

        public function get_social_networks()
        {
            $social_networks = G5P()->options()->get_social_networks();
            $options = array();
            if (is_array($social_networks)) {
                foreach ($social_networks as $social_network) {
                    $options[$social_network['social_id']] = $social_network['social_name'];
                }
            }
            return $options;
        }

        /**
         * Get social share
         *
         * @return array
         */
        public function get_social_share()
        {
            $social_share = array(
                'facebook' => esc_html__('Facebook', 'auteur-framework'),
                'twitter' => esc_html__('Twitter', 'auteur-framework'),
                'google' => esc_html__('Google +', 'auteur-framework'),
                'linkedin' => esc_html__('Linkedin', 'auteur-framework'),
                'tumblr' => esc_html__('Tumblr', 'auteur-framework'),
                'pinterest' => esc_html__('Pinterest', 'auteur-framework'),
                'email' => esc_html__('Email', 'auteur-framework'),
                'telegram' => esc_html__('Telegram', 'auteur-framework'),
                'whatsapp' => esc_html__('WhatsApp', 'auteur-framework')
            );
            return $social_share;
        }

        /**
         * Get Post Layout
         *
         * @param bool $inherit
         * @return array|mixed|void
         */
        public function get_post_layout($inherit = false)
        {
            $config = apply_filters('gsf_options_post_layout', array(
                'large-image' => array(
                    'label' => esc_html__('Large Image', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/blog-large-image.png'),
                ),
                'medium-image' => array(
                    'label' => esc_html__('Medium Image', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/blog-medium-image.png'),
                ),
                'grid' => array(
                    'label' => esc_html__('Grid', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/blog-grid.png'),
                ),
                'masonry' => array(
                    'label' => esc_html__('Masonry', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/blog-masonry.png'),
                ),
            ));
            if ($inherit) {
                $config = array(
                        '' => array(
                            'label' => esc_html__('Inherit', 'auteur-framework'),
                            'img' => G5P()->pluginUrl('assets/images/theme-options/default.png'),
                        ),
                    ) + $config;
            }
            return $config;
        }

        public function get_single_post_layout($inherit = false)
        {
            $config = apply_filters('gsf_options_single_post_layout', array(
                'layout-1' => array(
                    'label' => esc_html__('Layout 1', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/post-layout-1.png'),
                ),
                'layout-2' => array(
                    'label' => esc_html__('Layout 2', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/post-layout-2.png'),
                ),
                'layout-3' => array(
                    'label' => esc_html__('Layout 3', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/post-layout-3.jpg'),
                ),
                'layout-4' => array(
                    'label' => esc_html__('Layout 4', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/post-layout-4.jpg'),
                ),
                'layout-5' => array(
                    'label' => esc_html__('Layout 5', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/post-layout-5.png'),
                ),
                'layout-6' => array(
                    'label' => esc_html__('Layout 6', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/post-layout-6.png'),
                ),
                'layout-7' => array(
                    'label' => esc_html__('Layout 7', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/post-layout-7.png'),
                ),

            ));
            if ($inherit) {
                $config = array(
                        '' => array(
                            'label' => esc_html__('Inherit', 'auteur-framework'),
                            'img' => G5P()->pluginUrl('assets/images/theme-options/default.png'),
                        ),
                    ) + $config;
            }
            return $config;
        }

        /**
         * Get Post Columns
         *
         * @param bool $inherit
         * @return array|mixed|void
         */
        public function get_post_columns($inherit = false)
        {
            $config = apply_filters('gsf_options_post_columns', array(
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6'
            ));

            if ($inherit) {
                $config = array(
                        '' => esc_html__('Inherit', 'auteur-framework')
                    ) + $config;
            }

            return $config;
        }

        /**
         * Get Post Columns Gap
         *
         * @param bool $inherit
         * @return array|mixed|void
         */
        public function get_post_columns_gutter($inherit = false)
        {
            $config = apply_filters('gsf_options_post_columns_gutter', array(
                'none' => esc_html__('None', 'auteur-framework'),
                '10' => '10px',
                '20' => '20px',
                '30' => '30px',
                '50' => '50px',
                '70' => '70px'
            ));

            if ($inherit) {
                $config = array(
                        '' => esc_html__('Inherit', 'auteur-framework')
                    ) + $config;
            }

            return $config;
        }

        /**
         * Get Post Paging Mode
         *
         * @param bool $inherit
         * @return array|mixed|void
         */
        public function get_post_paging_mode($inherit = false)
        {
            $config = apply_filters('gsf_options_post_paging_mode', array(
                'pagination' => esc_html__('Pagination', 'auteur-framework'),
                'pagination-ajax' => esc_html__('Ajax - Pagination', 'auteur-framework'),
                'next-prev' => esc_html__('Ajax - Next Prev', 'auteur-framework'),
                'load-more' => esc_html__('Ajax - Load More', 'auteur-framework'),
                'infinite-scroll' => esc_html__('Ajax - Infinite Scroll', 'auteur-framework')
            ));

            if ($inherit) {
                $config = array(
                        '' => esc_html__('Inherit', 'auteur-framework')
                    ) + $config;
            }

            return $config;
        }

        public function get_post_paging_small_mode($inherit = false)
        {
            $config = apply_filters('gsf_options_post_paging_small_mode', array(
                'none' => esc_html__('None', 'auteur-framework'),
                'pagination-ajax' => esc_html__('Ajax - Pagination', 'auteur-framework'),
                'next-prev' => esc_html__('Ajax - Next Prev', 'auteur-framework'),
                'load-more' => esc_html__('Ajax - Load More', 'auteur-framework'),
            ));

            if ($inherit) {
                $config = array(
                        '' => esc_html__('Inherit', 'auteur-framework')
                    ) + $config;
            }

            return $config;
        }

        public function get_swatches_taxomnomies() {
            $attribute_array = array();
            $attribute_taxonomies = wc_get_attribute_taxonomies();
            if ( ! empty( $attribute_taxonomies ) ) {
                foreach ( $attribute_taxonomies as $tax ) {
                    $type = $tax->attribute_type;
                    if ('select' !== $type) {
                        if (wc_attribute_taxonomy_name($tax->attribute_name)) {
                            $attribute_array['pa_' . $tax->attribute_name] = $tax->attribute_label;
                        }
                    }
                }
            }
            return $attribute_array;
        }

        /**
         * Get Animation
         *
         * @param $inherit
         * @return array|mixed|void
         */
        public function get_animation($inherit = false)
        {
            $config = apply_filters('gsf_options_animation', array(
                'none' => esc_html__('None', 'auteur-framework'),
                'top-to-bottom' => esc_html__('Top to bottom', 'auteur-framework'),
                'bottom-to-top' => esc_html__('Bottom to top', 'auteur-framework'),
                'left-to-right' => esc_html__('Left to right', 'auteur-framework'),
                'right-to-left' => esc_html__('Right to left', 'auteur-framework'),
                'appear' => esc_html__('Appear from center', 'auteur-framework')
            ));

            if ($inherit) {
                $config = array(
                        '' => esc_html__('Inherit', 'auteur-framework')
                    ) + $config;
            }

            return $config;
        }

        /**
         * Get Related Post Algorithm
         *
         * @param bool $inherit
         * @return array|mixed|void
         */
        public function get_related_post_algorithm($inherit = false)
        {
            $config = apply_filters('gsf_options_related_post_algorithm', array(
                'cat' => esc_html__('by Category', 'auteur-framework'),
                'tag' => esc_html__('by Tag', 'auteur-framework'),
                'author' => esc_html__('by Author', 'auteur-framework'),
                'cat-tag' => esc_html__('by Category & Tag', 'auteur-framework'),
                'cat-tag-author' => esc_html__('by Category & Tag & Author', 'auteur-framework'),
                'random' => esc_html__('Randomly', 'auteur-framework')
            ));

            if ($inherit) {
                $config = array(
                        '' => esc_html__('Inherit', 'auteur-framework')
                    ) + $config;
            }

            return $config;

        }

        /**
         * Get Related Product Algorithm
         *
         * @param bool $inherit
         * @return array|mixed|void
         */
        public function get_related_product_algorithm()
        {
            $config = apply_filters('gsf_options_related_product_algorithm', array(
                'cat' => esc_html__('by Category', 'auteur-framework'),
                'tag' => esc_html__('by Tag', 'auteur-framework'),
                'cat-tag' => esc_html__('by Category & Tag', 'auteur-framework')
            ));
            return $config;

        }

        public function get_product_catalog_layout($inherit = false)
        {
            $config = apply_filters('gsf_options_product_catalog_layout', array(
                'grid' => array(
                    'label' => esc_html__('Grid', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/shop-grid.png'),
                ),
                'list' => array(
                    'label' => esc_html__('List', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/shop-list.jpg'),
                ),
                'metro-01' => array(
                    'label' => esc_html__('Metro 01', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/layout-metro-01.png'),
                ),
                'metro-02' => array(
                    'label' => esc_html__('Metro 02', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/layout-metro-02.png'),
                ),
                'metro-03' => array(
                    'label' => esc_html__('Metro 03', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/layout-metro-03.png'),
                ),
                'metro-04' => array(
                    'label' => esc_html__('Metro 04', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/layout-metro-04.png'),
                ),
                'metro-05' => array(
                    'label' => esc_html__('Metro 05', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/layout-metro-05.png'),
                ),
            ));
            if ($inherit) {
                $config = array(
                        '' => array(
                            'label' => esc_html__('Inherit', 'auteur-framework'),
                            'img' => G5P()->pluginUrl('assets/images/theme-options/default.png'),
                        ),
                    ) + $config;
            }
            return $config;
        }

        public function get_image_ratio($inherit = false)
        {
            $config = apply_filters('gsf_options_image_ratio', array(
                '1x1' => '1:1',
                '4x3' => '4:3',
                '3x4' => '3:4',
                '16x9' => '16:9',
                '9x16' => '9:16',
                'custom' => esc_html__('Custom', 'auteur-framework')
            ));
            if ($inherit) {
                $config = array(
                        '' => esc_html__('Inherit', 'auteur-framework'),
                    ) + $config;
            }
            return $config;
        }

        public function get_product_single_layout($inherit = false)
        {
            $config = apply_filters('gsf_options_product_single_layout', array(
                'layout-01' => array(
                    'label' => esc_html__('Layout 01', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/single-product-1.jpg')
                ),
                'layout-02' => array(
                    'label' => esc_html__('Layout 02', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/single-product-2.jpg')
                ),
            ));
            if ($inherit) {
                $config = array(
                        '' => array(
                            'label' => esc_html__('Inherit', 'auteur-framework'),
                            'img' => G5P()->pluginUrl('assets/images/theme-options/default.png'),
                        ),
                    ) + $config;
            }
            return $config;
        }

        public function get_product_image_hover_effect($inherit = false)
        {
            $config = apply_filters('gsf_product_image_hover_effect', array(
                'none' => esc_html__('None', 'auteur-framework'),
                'change-image' => esc_html__('Change Image', 'auteur-framework'),
                'flip-back' => esc_html__('Flip Back', 'auteur-framework')
            ));

            if ($inherit) {
                $config = array(
                        '' => esc_html__('Inherit', 'auteur-framework')
                    ) + $config;
            }

            return $config;
        }

        public function get_portfolio_hover_effect($inherit = false)
        {
            $config = apply_filters('gsf_portfolio_hover_effect', array(
                'none' => esc_html__('None', 'auteur-framework'),
                'suprema' => esc_html__('Suprema', 'auteur-framework'),
                'layla' => esc_html__('Layla', 'auteur-framework'),
                'bubba' => esc_html__('Bubba', 'auteur-framework'),
                'jazz' => esc_html__('Jazz', 'auteur-framework')
            ));

            if ($inherit) {
                $config = array(
                        '' => esc_html__('Inherit', 'auteur-framework')
                    ) + $config;
            }

            return $config;
        }

        public function get_portfolio_layout($inherit = false)
        {
            $config = apply_filters('gsf_options_portfolio_layout', array(
                'grid' => array(
                    'label' => esc_html__('Grid', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/portfolio-grid.png'),
                ),
                'masonry' => array(
                    'label' => esc_html__('Masonry', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/portfolio-masonry.png'),
                ),
                'scattered' => array(
                    'label' => esc_html__('Scattered', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/portfolio-masonry-sd.png'),
                ),
                'justified' => array(
                    'label' => esc_html__('Justified', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/portfolio-justified.jpg'),
                ),
                'metro-1' => array(
                    'label' => esc_html__('Metro 01', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/layout-metro-01.png')
                ),
                'metro-2' => array(
                    'label' => esc_html__('Metro 02', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/layout-metro-02.png')
                ),
                'metro-3' => array(
                    'label' => esc_html__('Metro 03', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/layout-metro-03.png')
                ),
                'metro-4' => array(
                    'label' => esc_html__('Metro 04', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/layout-metro-04.png')
                ),
                'metro-5' => array(
                    'label' => esc_html__('Metro 05', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/layout-metro-05.png')
                ),
                'metro-6' => array(
                    'label' => esc_html__('Metro 06', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/portfolio-metro-06.jpg')
                ),
                'metro-7' => array(
                    'label' => esc_html__('Metro 07', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/portfolio-metro-07.jpg')
                ),

                'carousel-3d' => array(
                    'label' => esc_html__('Carousel 3D', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/portfolio-3d-carousel.png')
                ),
            ));
            if ($inherit) {
                $config = array(
                        '' => array(
                            'label' => esc_html__('Inherit', 'auteur-framework'),
                            'img' => G5P()->pluginUrl('assets/images/theme-options/default.png')
                        ),
                    ) + $config;
            }
            return $config;
        }

        public function get_portfolio_item_skin($inherit = false)
        {
            $config = apply_filters('gsf_options_portfolio_item_skin', array(
                'portfolio-item-skin-01' => array(
                    'label' => esc_html__('Skin 01', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/portfolio-skin-1.jpg')
                ),
                'portfolio-item-skin-02' => array(
                    'label' => esc_html__('Skin 02', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/portfolio-skin-2.jpg')
                ),
                'portfolio-item-skin-03' => array(
                    'label' => esc_html__('Skin 03', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/portfolio-skin-3.jpg')
                ),
                'portfolio-item-skin-04' => array(
                    'label' => esc_html__('Skin 04', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/portfolio-skin-4.jpg')
                ),
                'portfolio-item-skin-05' => array(
                    'label' => esc_html__('Skin 05', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/portfolio-skin-5.jpg')
                )
            ));
            if ($inherit) {
                $config = array(
                        '' => array(
                            'label' => esc_html__('Inherit', 'auteur-framework'),
                            'img' => G5P()->pluginUrl('assets/images/theme-options/default.png')
                        ),
                    ) + $config;
            }
            return $config;
        }

        public function get_portfolio_details_default()
        {
            $configs = array(
                array(
                    'title'    => esc_html__('Date','auteur-framework'),
                    'id'  => 'portfolio_details_date',
                ),
                array(
                    'title'    => esc_html__('Client','auteur-framework'),
                    'id'  => 'portfolio_details_client',
                ),
                array(
                    'title'    => esc_html__('My Team','auteur-framework'),
                    'id'  => 'portfolio_details_team',
                ),
                array(
                    'title'    => esc_html__('Awards','auteur-framework'),
                    'id'  => 'portfolio_details_award',
                ),

            );
            return apply_filters('gsf_portfolio_details_default',$configs);
        }

        public function get_single_portfolio_layout($inherit = false)
        {
            $config = apply_filters('gsf_options_single_portfolio_layout', array(
                'layout-1' => array(
                    'label' => esc_html__('Layout 1', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/single-portfolio-layout-1.jpg'),
                ),
                'layout-2' => array(
                    'label' => esc_html__('Layout 2', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/single-portfolio-layout-2.jpg'),
                ),
                'layout-3' => array(
                    'label' => esc_html__('Layout 3', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/single-portfolio-layout-3.png'),
                ),
                'layout-4' => array(
                    'label' => esc_html__('Layout 4', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/single-portfolio-layout-4.png'),
                ),
            ));
            if ($inherit) {
                $config = array(
                        '' => array(
                            'label' => esc_html__('Inherit', 'auteur-framework'),
                            'img' => G5P()->pluginUrl('assets/images/theme-options/default.png'),
                        ),
                    ) + $config;
            }
            return $config;
        }

        public function get_single_portfolio_gallery_layout($inherit = false)
        {
            $config = apply_filters('gsf_options_single_portfolio_gallery_layout', array(
                'carousel' => array(
                    'label' => esc_html__('Slider', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/portfolio-gallery-carousel.png'),
                ),
                'thumbnail' => array(
                    'label' => esc_html__('Gallery', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/portfolio-gallery-thumbnail.png'),
                ),
                'carousel-center' => array(
                    'label' => esc_html__('Slider Center', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/portfolio-gallery-carousel-center.png'),
                ),
                'grid' => array(
                    'label' => esc_html__('Grid', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/portfolio-gallery-grid.png'),
                ),
                'carousel-3d' => array(
                    'label' => esc_html__('Slider 3D', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/portfolio-3d-carousel.png'),
                ),
                'metro-1' => array(
                    'label' => esc_html__('Metro', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/portfolio-gallery-metro-1.jpg'),
                ),
                'metro-2' => array(
                    'label' => esc_html__('Metro', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/portfolio-gallery-metro-2.jpg'),
                )
            ));
            if ($inherit) {
                $config = array(
                        '' => array(
                            'label' => esc_html__('Inherit', 'auteur-framework'),
                            'img' => G5P()->pluginUrl('assets/images/theme-options/default.png'),
                        ),
                    ) + $config;
            }
            return $config;
        }

        public function get_portfolio_related_algorithm($inherit = false)
        {
            $config = apply_filters('gsf_options_portfolio_related_algorithm', array(
                'cat' => esc_html__('by Category', 'auteur-framework'),
                'author' => esc_html__('by Author', 'auteur-framework'),
                'cat-author' => esc_html__('by Category & Author', 'auteur-framework'),
                'random' => esc_html__('Randomly', 'auteur-framework')
            ));

            if ($inherit) {
                $config = array(
                        '' => esc_html__('Inherit', 'auteur-framework')
                    ) + $config;
            }

            return $config;

        }
    }
}