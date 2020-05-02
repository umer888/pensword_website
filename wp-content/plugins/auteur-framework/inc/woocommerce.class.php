<?php
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
if (!class_exists('G5P_Inc_WooCommerce')) {
    class G5P_Inc_WooCommerce {
        private static $_instance;
        private $_permalink_author_base = 'gsf_product_author_base';
        private $_product_author_permalink_key = 'gsf_product_author';


        public static function getInstance()
        {
            if (self::$_instance == NULL) {
                self::$_instance = new self();
            }

            return self::$_instance;
        }

        public function init(){
            add_filter('gsf_register_taxonomy',array($this,'register_taxonomy'));
            add_action('admin_init',array($this,'register_permalink'));
            add_action( 'load-options-permalink.php', array( $this,'save_permalink') );
        }

        public function register_permalink() {
            add_settings_field(
                $this->_permalink_author_base,
                esc_html__('Product author base','auteur-framework'),
                array( $this, 'permalink_author_callback' ),
                'permalink',
                'optional'
            );
        }

        public function permalink_author_callback() {
            ?>
            <input type="text" name="<?php echo esc_attr($this->_permalink_author_base) ?>"
                   placeholder="product-author" class="regular-text code"
                   value="<?php echo esc_attr(get_option($this->_product_author_permalink_key, 'product-author')) ?>">
            <?php
        }


        public function save_permalink(){
            if (!is_admin()) {
                return;
            }
            if (isset($_POST['permalink_structure'])) {
                update_option($this->_product_author_permalink_key, sanitize_title_with_dashes(trim($_POST[$this->_permalink_author_base])));
            }
        }


        /**
         * Register Taxonomies
         *
         * @param $taxonomies
         * @return mixed
         */
        public function register_taxonomy($taxonomies) {
            $taxonomies['product_author'] = array(
                'post_type'     => 'product',
                'label'         => esc_html__('Authors', 'auteur-framework'),
                'name'          => esc_html__('Product Authors', 'auteur-framework'),
                'singular_name' => esc_html__('Author', 'auteur-framework'),
                'rewrite'       => array('slug' => get_option($this->_product_author_permalink_key, 'product-author')),
                'show_admin_column' => true,
            );
            return $taxonomies;
        }
    }
}