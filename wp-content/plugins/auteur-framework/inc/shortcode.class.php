<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
if (!class_exists('G5P_Inc_ShortCode')) {
    class G5P_Inc_ShortCode
    {
        private static $_instance;

        public static function getInstance()
        {
            if (self::$_instance == NULL) {
                self::$_instance = new self();
            }

            return self::$_instance;
        }

        public function init()
        {
            $this->includes();
            // Auto Loader Class
            spl_autoload_register(array($this, 'autoload_class_file'));

            // vc learn map
            add_action('vc_before_mapping', array($this, 'vc_lean_map'));

        }

        /**
         * Auto Loader Class
         *
         * @param $class_name
         */
        public function autoload_class_file($class)
        {

            $file_name = preg_replace('/^WPBakeryShortCode_gsf_/', '', $class);
            if ($file_name !== $class) {
                $file_name = strtolower($file_name);
                $file_name = str_replace('_', '-', $file_name);
                G5P()->loadFile(G5P()->pluginDir("shortcodes/{$file_name}/{$file_name}.php"));
            }
        }

        public function includes()
        {
            G5P()->loadFile(G5P()->pluginDir('shortcodes/shortcode-base.class.php'));
        }

        /**
         * Get Shortcodes category name
         *
         * @return string
         */
        public function get_category_name()
        {
            $current_theme = wp_get_theme();
            return $current_theme['Name'] . ' Shortcodes';
        }

        /**
         * Get List Shortcodes
         *
         * @return mixed|void
         */
        private function get_shortcodes()
        {
            return apply_filters('gsf_shorcodes', array(
                'gsf_banner',
                //'gsf_border',
                'gsf_breadcrumbs',
                'gsf_button',
                'gsf_countdown',
                'gsf_counter',
                'gsf_gallery',
                'gsf_google_map',
                'gsf_heading',
                'gsf_info_box',
                'gsf_lists',
                'gsf_mail_chimp',
                'gsf_menu_column',
                'gsf_our_team',
                'gsf_page_title',
                'gsf_page_subtitle',
                'gsf_partners',
                'gsf_pie_chart',
                'gsf_posts',
                'gsf_pricing_tables',
                'gsf_slider_container',
                'gsf_social_networks',
                'gsf_space',
                'gsf_time_line',
                'gsf_testimonials',
                'gsf_video',
                'gsf_view_demo'
            ));
        }

        public function vc_lean_map()
        {
            $shorcodes = $this->get_shortcodes();
            foreach ($shorcodes as $key) {
                $directory = preg_replace('/^gsf_/', '', $key);
                vc_lean_map($key, null, G5P()->pluginDir('shortcodes/' . str_replace('_', '-', $directory) . '/config.php'));
            }
        }

        /**
         * Get Setting Icon Font
         *
         * @param array $args
         * @return array
         */
        public function vc_map_add_icon_font($args = array())
        {
            $default = array(
                'type' => 'gsf_icon_picker',
                'heading' => esc_html__('Icon', 'auteur-framework'),
                'param_name' => 'icon_font',
                'value' => '',
                'description' => esc_html__('Select icon from library.', 'auteur-framework')
            );

            $default = array_merge($default, $args);
            return $default;
        }

        /**
         * Animation Style
         *
         * @param bool $label
         * @return array
         */
        public function vc_map_add_css_animation($label = true)
        {
            $data = array(
                'type' => 'animation_style',
                'heading' => esc_html__('CSS Animation', 'auteur-framework'),
                'param_name' => 'css_animation',
                'admin_label' => $label,
                'value' => '',
                'settings' => array(
                    'type' => 'in',
                    'custom' => array(
                        array(
                            'label' => esc_html__('Default', 'auteur-framework'),
                            'values' => array(
                                esc_html__('Top to bottom', 'auteur-framework') => 'top-to-bottom',
                                esc_html__('Bottom to top', 'auteur-framework') => 'bottom-to-top',
                                esc_html__('Left to right', 'auteur-framework') => 'left-to-right',
                                esc_html__('Right to left', 'auteur-framework') => 'right-to-left',
                                esc_html__('Appear from center', 'auteur-framework') => 'appear',
                            ),
                        ),
                    ),
                ),
                'description' => esc_html__('Select type of animation for element to be animated when it enters the browsers viewport (Note: works only in modern browsers).', 'auteur-framework'),
                'group' => esc_html__('Animation', 'auteur-framework')
            );
            return apply_filters('vc_map_add_css_animation', $data, $label);
        }


        /**
         * Animation Duration
         *
         * @return array
         */
        public function vc_map_add_animation_duration()
        {
            return array(
                'type' => 'textfield',
                'heading' => esc_html__('Animation Duration', 'auteur-framework'),
                'param_name' => 'animation_duration',
                'value' => '',
                'description' => wp_kses_post(__('Duration in seconds. You can use decimal points in the value. Use this field to specify the amount of time the animation plays. <em>The default value depends on the animation, leave blank to use the default.</em>', 'auteur-framework')),
                'group' => esc_html__('Animation', 'auteur-framework')
            );
        }

        /**
         * Animation Delay
         *
         * @return array
         */
        public function vc_map_add_animation_delay()
        {
            return array(
                'type' => 'textfield',
                'heading' => esc_html__('Animation Delay', 'auteur-framework'),
                'param_name' => 'animation_delay',
                'value' => '',
                'description' => esc_html__('Delay in seconds. You can use decimal points in the value. Use this field to delay the animation for a few seconds, this is helpful if you want to chain different effects one after another above the fold.', 'auteur-framework'),
                'group' => esc_html__('Animation', 'auteur-framework')
            );
        }


        /**
         * Extra Class
         *
         * @return array
         */
        public function vc_map_add_extra_class()
        {
            $args = array(
                'type' => 'gsf_selectize',
                'heading' => esc_html__('Extra class name', 'auteur-framework'),
                'param_name' => 'el_class',
                'tags' => true,
                'std' => '',
                'description' => esc_html__('Style particular content element differently - add a class name and refer to it in custom CSS.', 'auteur-framework'),
            );
            $extra_class = &G5P()->helper()->get_extra_class();
            if (is_array($extra_class) && sizeof($extra_class) > 0) {
                $args['value'] = $extra_class;
            }
            return $args;
        }

        /**
         * Design Options
         *
         * @return array
         */
        public function vc_map_add_css_editor()
        {
            return array(
                'type' => 'css_editor',
                'heading' => esc_html__('CSS box', 'auteur-framework'),
                'param_name' => 'css',
                'group' => esc_html__('Design Options', 'auteur-framework'),
            );
        }

        public function vc_map_add_responsive()
        {
            return array(
                'type' => 'gsf_responsive',
                'heading' => esc_html__('Responsive', 'auteur-framework'),
                'param_name' => 'responsive',
                'group' => esc_html__('Responsive Options', 'auteur-framework'),
                'description' => esc_html__('Adjust column for different screen sizes. Control visibility settings.', 'auteur-framework'),
            );
        }

        public function vc_map_add_color_skin($args = array())
        {
            $default = array(
                'type' => 'dropdown',
                'heading' => esc_html__('Color Skin', 'auteur-framework'),
                'param_name' => 'color_skin',
                'description' => esc_html__('Select color skin.', 'auteur-framework'),
                'value' => $this->get_color_skin(true),
                'std' => '',
                'admin_label' => true,

            );
            $default = array_merge($default, $args);
            return $default;
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
                $skins[esc_html__('Inherit', 'auteur-framework')] = '';
            }
            $custom_color_skin = G5P()->optionsSkin()->get_color_skin();
            if (is_array($custom_color_skin)) {
                foreach ($custom_color_skin as $key => $value) {
                    if (isset($value['skin_name']) && isset($value['skin_id'])) {
                        $skins[$value['skin_name']] = $value['skin_id'];
                    }

                }
            }
            return $skins;
        }

        /**
         * @param array $args
         * @return array
         */
        public function vc_map_add_narrow_category($args = array())
        {
            $category = array();
            $categories = get_categories(array('hide_empty' => '1'));
            if (is_array($categories)) {
                foreach ($categories as $cat) {
                    $category[$cat->name] = $cat->slug;
                }
            }
            $default = array(
                'type' => 'gsf_selectize',
                'heading' => esc_html__('Narrow Category', 'auteur-framework'),
                'param_name' => 'category',
                'value' => $category,
                'multiple' => true,
                'description' => esc_html__('Enter categories by names to narrow output (Note: only listed categories will be displayed, divide categories with linebreak (Enter)).', 'auteur-framework'),
                'std' => ''
            );
            $default = array_merge($default, $args);
            return $default;
        }

        /**
         * @param array $args
         * @return array
         */
        public function vc_map_add_product_category($args = array())
        {
            $category = array();
            $categories = get_categories(array('hide_empty' => '1', 'taxonomy' => 'product_cat'));
            if (is_array($categories)) {
                foreach ($categories as $cat) {
                    $category[$cat->name] = $cat->slug;
                }
            }
            $default = array(
                'type' => 'dropdown',
                'heading' => esc_html__('Category', 'auteur-framework'),
                'param_name' => 'category',
                'value' => $category,
                'description' => esc_html__('Enter categories by names to narrow output (Note: only listed categories will be displayed, divide categories with linebreak (Enter)).', 'auteur-framework'),
                'std' => ''
            );
            $default = array_merge($default, $args);
            return $default;
        }

        /**
         * @param array $args
         * @return array
         */
        public function vc_map_add_product_narrow_categories($args = array())
        {
            $category = array();
            $categories = get_categories(array('hide_empty' => '1', 'taxonomy' => 'product_cat'));
            if (is_array($categories)) {
                foreach ($categories as $cat) {
                    $category[$cat->name] = $cat->slug;
                }
            }
            $default = array(
                'value' => $category,
                'type' => 'gsf_selectize',
                'heading' => esc_html__('Narrow Category', 'auteur-framework'),
                'param_name' => 'category',
                'multiple' => true,
                'description' => esc_html__('Enter categories by names to narrow output (Note: only listed categories will be displayed, divide categories with linebreak (Enter)).', 'auteur-framework'),
                'std' => ''
            );
            $default = array_merge($default, $args);
            return $default;
        }

        /**
         * @param array $args
         * @return array
         */
        public function vc_map_add_event_narrow_categories($args = array())
        {
            $category = array();
            if(class_exists('Tribe__Events__Main')) {
                $categories = get_categories(array('hide_empty' => '1', 'taxonomy' => Tribe__Events__Main::TAXONOMY));
                if (is_array($categories)) {
                    foreach ($categories as $cat) {
                        $category[$cat->name] = $cat->slug;
                    }
                }
            }
            $default = array(
                'value' => $category,
                'type' => 'gsf_selectize',
                'heading' => esc_html__('Narrow Category', 'auteur-framework'),
                'param_name' => 'category',
                'multiple' => true,
                'description' => esc_html__('Enter categories by names to narrow output (Note: only listed categories will be displayed, divide categories with linebreak (Enter)).', 'auteur-framework'),
                'std' => ''
            );
            $default = array_merge($default, $args);
            return $default;
        }
        /**
         * @param array $args
         * @return array
         */
        public function vc_map_add_product_narrow_authors($args = array())
        {
            $category = array();
            $categories = get_categories(array('hide_empty' => '1', 'taxonomy' => 'product_author'));
            if (is_array($categories)) {
                foreach ($categories as $cat) {
                    $category[$cat->name] = $cat->slug;
                }
            }
            $default = array(
                'value' => $category,
                'type' => 'gsf_selectize',
                'heading' => esc_html__('Narrow Authors', 'auteur-framework'),
                'param_name' => 'authors',
                'multiple' => true,
                'std' => ''
            );
            $default = array_merge($default, $args);
            return $default;
        }

        public function vc_map_add_portfolio_category($args = array())
        {
            $category = array();
            $categories = get_categories(array('hide_empty' => '1', 'taxonomy' => 'portfolio_cat'));
            if (is_array($categories)) {
                foreach ($categories as $cat) {
                    $category[$cat->name] = $cat->slug;
                }
            }
            $default = array(
                'type' => 'dropdown',
                'heading' => esc_html__('Category', 'auteur-framework'),
                'param_name' => 'category',
                'value' => $category,
                'description' => esc_html__('Enter categories by names to narrow output (Note: only listed categories will be displayed, divide categories with linebreak (Enter)).', 'auteur-framework'),
                'std' => ''
            );
            $default = array_merge($default, $args);
            return $default;
        }

        /**
         * @param array $args
         * @return array
         */
        public function vc_map_add_portfolio_narrow_categories($args = array())
        {
            $category = array();
            $categories = get_categories(array('hide_empty' => '1', 'taxonomy' => 'portfolio_cat'));
            if (is_array($categories)) {
                foreach ($categories as $cat) {
                    $category[$cat->name] = $cat->slug;
                }
            }
            $default = array(
                'value' => $category,
                'type' => 'gsf_selectize',
                'heading' => esc_html__('Narrow Category', 'auteur-framework'),
                'param_name' => 'category',
                'multiple' => true,
                'description' => esc_html__('Enter categories by names to narrow output (Note: only listed categories will be displayed, divide categories with linebreak (Enter)).', 'auteur-framework'),
                'std' => ''
            );
            $default = array_merge($default, $args);
            return $default;
        }

        public function setOptionImageSizes($post_type = '', $image_size = '', $image_ratio = '', $image_ratio_custom = array())
        {
            if (!empty($image_size)) {
                G5P()->options()->setOptions('' . $post_type . '_image_size', $image_size);
                if (('full' == $image_size) && (!empty($image_ratio))) {
                    G5P()->options()->setOptions('' . $post_type . '_image_ratio', $image_ratio);
                    if (('Custom' == $image_ratio) && (!empty($image_ratio_custom))) {
                        G5P()->options()->setOptions('' . $post_type . '_image_ratio_custom', $image_ratio_custom);
                    }
                }
            }
        }

        public function vc_map_add_our_team_narrow_categories($args = array())
        {
            $category = array();
            $categories = get_categories(array('hide_empty' => '1', 'taxonomy' => 'our_team_cat'));
            if (is_array($categories)) {
                foreach ($categories as $cat) {
                    $category[$cat->name] = $cat->slug;
                }
            }
            $default = array(
                'value' => $category,
                'type' => 'gsf_selectize',
                'heading' => esc_html__('Narrow Category', 'auteur-framework'),
                'param_name' => 'category',
                'multiple' => true,
                'description' => esc_html__('Enter categories by names to narrow output (Note: only listed categories will be displayed, divide categories with linebreak (Enter)).', 'auteur-framework'),
                'std' => ''
            );
            $default = array_merge($default, $args);
            return $default;
        }

        /**
         * @param array $args
         * @return array
         */
        public function vc_map_add_narrow_tag($args = array())
        {
            $tag = array();
            $tags = get_tags(array('hide_empty' => '1'));
            if (is_array($tags)) {
                foreach ($tags as $tg) {
                    $tag[$tg->name] = $tg->slug;
                }
            }
            $default = array(
                'type' => 'gsf_selectize',
                'heading' => esc_html__('Narrow Tag', 'auteur-framework'),
                'param_name' => 'tag',
                'value' => $tag,
                'multiple' => true,
                'description' => esc_html__('Enter tags by names to narrow output).', 'auteur-framework'),
                'std' => ''
            );
            $default = array_merge($default, $args);
            return $default;
        }

        /**
         * @param array $array
         * @return array
         */
        public function switch_array_key_value($array = array())
        {
            $result = array();
            foreach ($array as $key => $value) {
                $result[$value] = $key;
            }
            return $result;
        }

        /**
         * @return array
         */
        public function get_toggle()
        {
            return array(
                esc_html__('On', 'auteur-framework') => '1',
                esc_html__('Off', 'auteur-framework') => '0'
            );
        }

        /**
         * @param array $args
         * @return array
         */
        public function vc_map_add_title($args = array())
        {
            $default = array(
                'type' => 'textfield',
                'heading' => esc_html__('Title', 'auteur-framework'),
                'param_name' => 'title'
            );
            $default = array_merge($default, $args);
            return $default;
        }

        /**
         * @param array $args
         * @return array
         */
        public function vc_map_add_icon_shape($args = array())
        {
            $default = array(
                'type' => 'gsf_button_set',
                'heading' => esc_html__('Icon Shape', 'auteur-framework'),
                'param_name' => 'icon_shape',
                'value' => array(
                    esc_html__('Classic', 'auteur-framework') => 'icon-classic',
                    esc_html__('Circle', 'auteur-framework') => 'icon-circle',
                ),
                'edit_field_class' => 'vc_col-sm-6 vc_column'
            );
            $default = array_merge($default, $args);
            return $default;
        }


        /**
         * @param array $args
         * @return array
         */
        public function vc_map_add_pagination($args = array())
        {
            $default = array(
                'type' => 'gsf_switch',
                'heading' => esc_html__('Show pagination control', 'auteur-framework'),
                'param_name' => 'dots',
                'std' => '',
            );
            $default = array_merge($default, $args);
            return $default;
        }

        /**
         * @param array $args
         * @return array
         */
        public function vc_map_add_navigation($args = array())
        {
            $default = array(
                'type' => 'gsf_switch',
                'heading' => esc_html__('Show navigation control', 'auteur-framework'),
                'param_name' => 'nav',
                'std' => '',
            );
            $default = array_merge($default, $args);
            return $default;
        }

        /**
         * @param array $args
         * @return array
         */
        public function vc_map_add_navigation_position($args = array())
        {
            $default = array(
                'type' => 'dropdown',
                'heading' => esc_html__('Navigation Position', 'auteur-framework'),
                'param_name' => 'nav_position',
                'value' => array(
                    esc_html__('Top Right', 'auteur-framework') => 'nav-top-right',
                    esc_html__('Top left', 'auteur-framework') => 'nav-top-left',
                    esc_html__('Center', 'auteur-framework') => 'nav-center',
                    esc_html__('Bottom Left', 'auteur-framework') => 'nav-bottom-left',
                    esc_html__('Bottom Center', 'auteur-framework') => 'nav-bottom-center',
                    esc_html__('Bottom Right', 'auteur-framework') => 'nav-bottom-right'
                ),
                'std' => 'nav-top-right',
                'dependency' => array('element' => 'nav', 'value' => 'on')
            );
            $default = array_merge($default, $args);
            return $default;
        }

        /**
         * @param array $args
         * @return array
         */
        public function vc_map_add_navigation_style($args = array())
        {
            $default = array(
                'type' => 'gsf_image_set',
                'heading' => esc_html__('Navigation Style', 'auteur-framework'),
                'param_name' => 'nav_style',
                'value' => array(
                    'nav-style-01' => array(
                        'label' => esc_html__('Style 01', 'auteur-framework'),
                        'img' => G5P()->pluginUrl('assets/images/shortcode/navigation-01.jpg'),
                    ),
                    'nav-style-02' => array(
                        'label' => esc_html__('Style 02', 'auteur-framework'),
                        'img' => G5P()->pluginUrl('assets/images/shortcode/navigation-02.jpg'),
                    ),
                    'nav-style-03' => array(
                        'label' => esc_html__('Style 03', 'auteur-framework'),
                        'img' => G5P()->pluginUrl('assets/images/shortcode/navigation-03.jpg'),
                    ),
                ),
                'std' => 'nav-style-02',
                'dependency' => array('element' => 'nav', 'value' => 'on')
            );
            $default = array_merge($default, $args);
            return $default;
        }

        /**
         * @param array $args
         * @return array
         */
        public function vc_map_add_navigation_size($args = array())
        {
            $default = array(
                'type' => 'dropdown',
                'heading' => esc_html__('Navigation Size', 'auteur-framework'),
                'param_name' => 'nav_size',
                'value' => array(
                    esc_html__('Small', 'auteur-framework') => 'nav-small',
                    esc_html__('Normal', 'auteur-framework') => 'nav-normal',
                    esc_html__('Large', 'auteur-framework') => 'nav-large',
                ),
                'std' => 'nav-normal',
                'dependency' => array('element' => 'nav', 'value' => 'on')
            );
            $default = array_merge($default, $args);
            return $default;
        }

        /**
         * @param array $args
         * @return array
         */

        public function vc_map_add_navigation_hover_style($args = array())
        {
            $default = array(
                'type' => 'gsf_image_set',
                'heading' => esc_html__('Navigation Hover Style', 'auteur-framework'),
                'param_name' => 'nav_hover_style',
                'value' => array(
                    'nav-hover-outline' => array(
                        'label' => esc_html__('Style 01', 'auteur-framework'),
                        'img' => G5P()->pluginUrl('assets/images/shortcode/hover-outline.jpg'),
                    ),
                    'nav-hover-bg' => array(
                        'label' => esc_html__('Style 02', 'auteur-framework'),
                        'img' => G5P()->pluginUrl('assets/images/shortcode/hover-background.jpg'),
                    ),
                ),
                'std' => 'nav-hover-outline',
                'dependency' => array('element' => 'nav', 'value' => 'on')
            );
            $default = array_merge($default, $args);
            return $default;
        }

        public function vc_map_add_navigation_hover_scheme($args = array())
        {
            $default = array(
                'type' => 'dropdown',
                'heading' => esc_html__('Navigation Hover Scheme', 'auteur-framework'),
                'param_name' => 'nav_hover_scheme',
                'value' => array(
                    esc_html__('Dark', 'auteur-framework') => 'hover-dark',
                    esc_html__('Light', 'auteur-framework') => 'hover-light',
                    esc_html__('Accent', 'auteur-framework') => 'hover-accent',
                ),
                'std' => 'hover-dark',
                'dependency' => array('element' => 'nav', 'value' => 'on')
            );
            $default = array_merge($default, $args);
            return $default;
        }

        /**
         * @param array $args
         * @return array
         */
        public function vc_map_add_autoplay_enable($args = array())
        {
            $default = array(
                'type' => 'gsf_switch',
                'heading' => esc_html__('Autoplay Enable', 'auteur-framework'),
                'param_name' => 'autoplay',
                'std' => '',
                'edit_field_class' => 'vc_col-sm-6 vc_column'
            );
            $default = array_merge($default, $args);
            return $default;
        }


        /**
         * @param array $args
         * @return array
         */
        public function vc_map_add_autoplay_timeout($args = array())
        {
            $default = array(
                'type' => 'gsf_number',
                'heading' => esc_html__('Autoplay Timeout', 'auteur-framework'),
                'param_name' => 'autoplay_timeout',
                'std' => '5000',
                'edit_field_class' => 'vc_col-sm-6 vc_column',
                'dependency' => array('element' => 'autoplay', 'value' => 'on')
            );
            $default = array_merge($default, $args);
            return $default;
        }

        /**
         * @return array
         */
        public function get_post_filter()
        {
            return array(
                $this->vc_map_add_narrow_category(array(
                    'group' => esc_html__('Posts Filter', 'auteur-framework')
                )),
                $this->vc_map_add_narrow_tag(array(
                    'group' => esc_html__('Posts Filter', 'auteur-framework')
                )),
                array(
                    'type' => 'autocomplete',
                    'heading' => esc_html__('Narrow Post', 'auteur-framework'),
                    'param_name' => 'ids',
                    'settings' => array(
                        'multiple' => true,
                        //'sortable' => true,
                        'unique_values' => true,
                        'display_inline' => true
                    ),
                    'save_always' => true,
                    'group' => esc_html__('Posts Filter', 'auteur-framework'),
                    'description' => esc_html__('Enter List of Posts', 'auteur-framework'),
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Order by', 'auteur-framework'),
                    'param_name' => 'orderby',
                    'value' => array(
                        esc_html__('Date', 'auteur-framework') => 'date',
                        esc_html__('Order by post ID', 'auteur-framework') => 'ID',
                        esc_html__('Author', 'auteur-framework') => 'author',
                        esc_html__('Title', 'auteur-framework') => 'title',
                        esc_html__('Last modified date', 'auteur-framework') => 'modified',
                        esc_html__('Post/page parent ID', 'auteur-framework') => 'parent',
                        esc_html__('Number of comments', 'auteur-framework') => 'comment_count',
                        esc_html__('Menu order/Page Order', 'auteur-framework') => 'menu_order',
                        esc_html__('Meta value', 'auteur-framework') => 'meta_value',
                        esc_html__('Meta value number', 'auteur-framework') => 'meta_value_num',
                        esc_html__('Random order', 'auteur-framework') => 'rand',
                    ),
                    'group' => esc_html__('Posts Filter', 'auteur-framework'),
                    'description' => esc_html__('Select order type. If "Meta value" or "Meta value Number" is chosen then meta key is required.', 'auteur-framework')
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Time Filter', 'auteur-framework'),
                    'param_name' => 'time_filter',
                    'value' => array(
                        esc_html__('No Filter', 'auteur-framework') => 'none',
                        esc_html__('Today Posts', 'auteur-framework') => 'today',
                        esc_html__('Today + Yesterday Posts', 'auteur-framework') => 'yesterday',
                        esc_html__('This Week Posts', 'auteur-framework') => 'week',
                        esc_html__('This Month Posts', 'auteur-framework') => 'month',
                        esc_html__('This Year Posts', 'auteur-framework') => 'year'
                    ),
                    'group' => esc_html__('Posts Filter', 'auteur-framework')
                ),
                array(
                    'type' => 'gsf_button_set',
                    'heading' => esc_html__('Sorting', 'auteur-framework'),
                    'param_name' => 'order',
                    'value' => array(
                        esc_html__('Descending', 'auteur-framework') => 'DESC',
                        esc_html__('Ascending', 'auteur-framework') => 'ASC',
                    ),
                    'std' => 'DESC',
                    'group' => esc_html__('Posts Filter', 'auteur-framework'),
                    'description' => esc_html__('Select sorting order.', 'auteur-framework'),
                ),

                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Meta key', 'auteur-framework'),
                    'param_name' => 'meta_key',
                    'description' => esc_html__('Input meta key for grid ordering.', 'auteur-framework'),
                    'group' => esc_html__('Posts Filter', 'auteur-framework'),
                    'dependency' => array(
                        'element' => 'orderby',
                        'value' => array('meta_value', 'meta_value_num'),
                    ),
                )
            );
        }

        public function get_post_carousel_layout($inherit = false)
        {
            $config = apply_filters('gsf_post_layout', array(
                'large-image' => array(
                    'label' => esc_html__('Large Image', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/blog-large-image.png'),
                ),
                'medium-image' => array(
                    'label' => esc_html__('Medium Image', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/blog-medium-image.png'),
                ),
                'medium-image-2' => array(
                    'label' => esc_html__('Medium Image 2', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/blog-medium-image-2.png'),
                ),
                'grid' => array(
                    'label' => esc_html__('Grid', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/theme-options/blog-grid.png'),
                )
            ));
            if ($inherit) {
                $config = array(
                        '-1' => array(
                            'label' => esc_html__('Default', 'auteur-framework'),
                            'img' => G5P()->pluginUrl('assets/images/theme-options/default.png'),
                        ),
                    ) + $config;
            }
            return $config;
        }

        public function get_column_responsive($dependency = array())
        {
            $responsive = array(
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Large Devices', 'auteur-framework'),
                    'description' => esc_html__('Browser Width >= 1200px', 'auteur-framework'),
                    'param_name' => 'columns',
                    'value' => G5P()->settings()->get_post_columns(),
                    'std' => 3,
                    'group' => esc_html__('Responsive', 'auteur-framework'),
                    'dependency' => $dependency
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Medium Devices', 'auteur-framework'),
                    'param_name' => 'columns_md',
                    'description' => esc_html__('Browser Width < 1200px', 'auteur-framework'),
                    'value' => G5P()->settings()->get_post_columns(),
                    'std' => 2,
                    'group' => esc_html__('Responsive', 'auteur-framework'),
                    'dependency' => $dependency
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Small Devices', 'auteur-framework'),
                    'param_name' => 'columns_sm',
                    'description' => esc_html__('Browser Width < 992px', 'auteur-framework'),
                    'value' => G5P()->settings()->get_post_columns(),
                    'std' => 2,
                    'group' => esc_html__('Responsive', 'auteur-framework'),
                    'dependency' => $dependency
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Extra Small Devices', 'auteur-framework'),
                    'param_name' => 'columns_xs',
                    'description' => esc_html__('Browser Width < 768px', 'auteur-framework'),
                    'value' => G5P()->settings()->get_post_columns(),
                    'std' => 1,
                    'group' => esc_html__('Responsive', 'auteur-framework'),
                    'dependency' => $dependency
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Extra Extra Small Devices', 'auteur-framework'),
                    'param_name' => 'columns_mb',
                    'description' => esc_html__('Browser Width < 576px', 'auteur-framework'),
                    'value' => G5P()->settings()->get_post_columns(),
                    'std' => 1,
                    'group' => esc_html__('Responsive', 'auteur-framework'),
                    'dependency' => $dependency
                )
            );
            return $responsive;
        }

    }
}