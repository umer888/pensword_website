<?php
// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
if (!class_exists('G5P_Vc_Template')) {
    class G5P_Vc_Template
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
            add_filter('vc_load_default_templates',array($this,'load_templates'));
            add_filter('vc_get_all_templates',array($this,'add_templates_tab'));
            add_filter('vc_templates_render_category', array(&$this, 'renderTemplateBlock'), 100);
            if (!G5P()->is_dev()) {
                G5P()->loadFile(G5P()->pluginDir('core/vc/templates.php'));
            }
        }

        public function add_templates_tab($data) {
            $current_theme = wp_get_theme();
            foreach ($data as &$cate) {
                if ($cate['category'] === 'default_templates') {
                    $cate['category_weight'] = 1;
                    $cate['category_name'] =  $current_theme['Name'];
                }
            }
            return $data;
        }

        public function load_templates(){
            if (G5P()->is_dev()) {
                return $this->get_templates();
            } else {
                return gsf_vc_templates();
            }
        }

        public function get_templates(){
            $templates = array();
            $gfTemplates = get_posts(array(
                'numberposts' => -1,
                'post_type' => G5P()->cpt()->get_template_post_type(),
            ));

            foreach ($gfTemplates as $gfTemplate) {
                $custom_class = array();
                $current_weight = 1;
                $terms = get_the_terms($gfTemplate->ID, G5P()->cpt()->get_template_taxonomy());
                if ($terms) {
                    foreach ($terms as $term) {
                        $custom_class[] = $term->slug;
                    }
                }

                $templates[] = array(
                    'name'         => $gfTemplate->post_title,
                    'image_path'        => $gfTemplate->post_name,
                    'content'      => $gfTemplate->post_content,
                    'custom_class' => implode(' ', $custom_class)
                );
            }
            return $templates;
        }

        public function renderTemplateBlock($category) {
            if ($category['category'] === 'default_templates') {
                $html = '<div class="vc_col-md-2 gsf-templates-cat-wrap">';
                $html .= '<div class="gsf-templates-cat-inner">';
                $html .= $this->render_template_categories();
                $html .= '</div>';
                $html .= '</div>';


                $html .= '<div class="vc_col-md-12 gsf-templates-wrap">';
                $html .= '<div class="gsf-templates-inner">';
                if (!empty($category['templates'])) {
                    foreach ($category['templates'] as $template) {
                        $html .= $this->renderTemplateItem($template);
                    }
                }
                $html .= '</div>';
                $html.= '</div>';


                $category['output'] = $html;
            }
            return $category;
        }

        public function get_template_categories(){
            $categories = get_categories(array('taxonomy' => G5P()->cpt()->get_template_taxonomy()));
            $output = array(
                'all'            => esc_html__( 'All', 'auteur-framework' ),
            );
            foreach ($categories as $cat) {
                $output[$cat->slug] = $cat->name;
            }
            return $output;
        }

        public function load_template_categories(){
            if (G5P()->is_dev()) {
                return $this->get_template_categories();
            } else {
                return gsf_vc_template_categories();
            }
        }

        public function render_template_categories() {

            $categories = $this->load_template_categories();
            $html = '<ul>';
            foreach ($categories as $slug => $name) {
                if ($slug === 'all') {
                    $html .= '<li class="active" data-filter="*">' . $name . '</li>';
                } else {
                    $html.= '<li data-filter=".'. $slug .'">' . $name . '</li>';;
                }
            }
            $html .= '</ul>';
            return $html;
        }

        public function renderTemplateItem($template) {
            $name = isset($template['name']) ? esc_html($template['name']) : esc_html(__('No title', 'auteur-framework'));
            $template_id = esc_attr($template['unique_id']);
            $template_id_hash = md5($template_id); // needed for jquery target for TTA
            $template_name = esc_html($name);
            $template_image = file_exists(G5P()->pluginDir("assets/images/templates/{$template['image']}.jpg")) ? G5P()->pluginUrl("assets/images/templates/{$template['image']}.jpg") : G5P()->pluginUrl('assets/images/templates.jpg');
            $template_name_lower = esc_attr(vc_slugify($template_name));
            $template_type = esc_attr(isset($template['type']) ? $template['type'] : 'custom');
            $custom_class = esc_attr(isset($template['custom_class']) ? $template['custom_class'] : '');
            $add_template_title = esc_attr('Add template', 'auteur-framework');
            $output = <<< HTML
			<div class="gsf-template-item vc_ui-template $custom_class"
						data-template_id="$template_id"
						data-template_id_hash="$template_id_hash"
						data-category="$template_type"
						data-template_unique_id="$template_id"
						data-template_name="$template_name_lower"
						data-template_type="$template_type"
						data-vc-content=".vc_ui-template-content">
			<div class="vc_ui-list-bar-item">
                <div class="gsf-template-thumbnail">
                    <img src="$template_image" alt="$template_name"/>  
                </div>
			<div class="gsf-template-item-name">
			    $template_name
            </div>
            			
            <a data-template-handler="" title="$add_template_title" href="javascript:;" class="vc_ui-panel-template-download-button">
                <i class="vc-composer-icon vc-c-icon-add"></i>
            </a>
            </div>
            </div>			
				
HTML;
            return $output;
        }
    }
}