<?php
/**
 * Shortcode attributes
 * @var $atts
 * @var $authors
 * @var $image_size
 * @var $items_per_page
 * @var $is_slider
 * @var $dots
 * @var $nav
 * @var $nav_position
 * @var $nav_size
 * @var $nav_style
 * @var $nav_hover_scheme
 * @var $nav_hover_style
 * @var $autoplay
 * @var $autoplay_timeout
 * @var $columns_gutter
 * @var $css_animation
 * @var $animation_duration
 * @var $animation_delay
 * @var $el_class
 * @var $css
 * @var $responsive
 * Shortcode class
 * @var $this WPBakeryShortCode_GSF_Product_Authors
 */

$authors = $image_size = $items_per_page = $is_slider = $dots = $nav = $nav_position = $nav_size =
$nav_style = $nav_hover_scheme = $nav_hover_style = $autoplay = $autoplay_timeout = $columns_gutter =
$css_animation = $animation_duration = $animation_delay = $el_class = $css = $responsive = '';
$atts = vc_map_get_attributes($this->getShortcode(), $atts);
extract($atts);
if(!function_exists('G5Plus_Auteur')) return;
$wrapper_classes = array(
    'gf-product-authors',
    G5P()->core()->vc()->customize()->getExtraClass($el_class),
    $this->getCSSAnimation($css_animation),
    vc_shortcode_custom_css_class($css),
    $responsive
);

if ('' !== $css_animation && 'none' !== $css_animation) {
    $animation_class = G5P()->core()->vc()->customize()->get_animation_class($animation_duration, $animation_delay);
    $wrapper_classes[] = $animation_class;
}
$columns = intval($columns);
$columns_gutter = intval($columns_gutter);
$columns_md = intval($columns_md);
$columns_sm = intval($columns_sm);
$columns_xs = intval($columns_xs);
$columns_mb = intval($columns_mb);
$item_class = array('gsf-product-author-item');
$inner_class = $owl_args = array();
if('on' === $is_slider) {
    $inner_class[] = 'owl-carousel owl-theme';
    $owl_args = array(
        'items' => $columns,
        'margin' => $columns == 1 ? 0 : $columns_gutter,
        'slideBy' => $columns,
        'dots' => ($dots === 'on') ? true : false,
        'nav' => ($nav === 'on') ? true : false,
        'responsive' => array(
            '1200' => array(
                'items' => $columns,
                'margin' => $columns == 1 ? 0 : $columns_gutter,
                'slideBy' => $columns,
            ),
            '992' => array(
                'items' => $columns_md,
                'margin' => $columns_md == 1 ? 0 : $columns_gutter,
                'slideBy' => $columns_md,
            ),
            '768' => array(
                'items' => $columns_sm,
                'margin' => $columns_sm == 1 ? 0 : $columns_gutter,
                'slideBy' => $columns_sm,
            ),
            '576' => array(
                'items' => $columns_xs,
                'margin' => $columns_xs == 1 ? 0 : $columns_gutter,
                'slideBy' => $columns_xs,
            ),
            '0' => array(
                'items' => $columns_mb,
                'margin' => $columns_mb == 1 ? 0 : $columns_gutter,
                'slideBy' => $columns_mb,
            )
        ),
        'autoHeight' => true,
        'autoplay' => ($autoplay === 'on') ? true : false,
        'autoplayTimeout' => intval($autoplay_timeout),
    );
    if($nav_style == 'nav-square-text' || $nav_style == 'nav-circle-text') {
        $owl_args['navText'] = array('<i class="fal fa-angle-left"></i> <span>'.esc_html__( 'Prev', 'auteur-framework' ).'</span>', '<span>'.esc_html__( 'Next', 'auteur-framework' ).'</span> <i class="fal fa-angle-right"></i>');
    }

    if($nav === 'on') {
        $inner_class = array_merge($inner_class, array($nav_position, $nav_style, $nav_size, $nav_hover_scheme, $nav_hover_style));
    }
} else {
    $inner_class[] = 'gf-gutter-' . $columns_gutter;
    $inner_class[] = 'gf-blog-inner';
    $item_class[] = 'grid-item';
    $columns = array(
        'xl' => $columns,
        'lg' => $columns_md,
        'md' => $columns_sm,
        'sm' => $columns_xs,
        '' => $columns_mb
    );
    $item_class[] = G5Plus_Auteur()->helper()->get_bootstrap_columns($columns);
}
$args = array(
    'hide_empty' => '1',
    'taxonomy' => 'product_author'
);
$category = array();
$product_authors = array();
if (empty($authors)) {
    $args = array(
        'taxonomy' => 'product_author',
        'hide_empty' => '1',
    );
    $product_authors = get_categories($args);
    $product_authors = array_slice( $product_authors, 0, $items_per_page );
} else {
    $slugs = explode( ',', $authors );
    $slugs = array_map( 'trim', $slugs );
    foreach ($slugs as $slug) {
        $term = get_term_by( 'slug', $slug, 'product_author' );
        if (is_object($term)) {
            $product_authors[] = $term;
        }
    }
}
$totalRecord = sizeof($product_authors);
if (!(defined('CSS_DEBUG') && CSS_DEBUG)) {
    wp_enqueue_style(G5P()->assetsHandle('product-authors'), G5P()->helper()->getAssetUrl('shortcodes/product-authors/assets/css/product-authors.min.css'), array(), G5P()->pluginVer());
}
if(empty($image_size)) {
    $image_size = 'full';
}
$class_to_filter = implode(' ', array_filter($wrapper_classes));
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $class_to_filter, $this->getShortcode(), $atts);
?>
<div class="<?php echo esc_attr($css_class) ?>">
    <?php if($totalRecord > 0): ?>
        <div class="gsf-product-authors-inner <?php echo join(' ', $inner_class); ?>" data-owl-options='<?php echo json_encode($owl_args); ?>'>
            <?php foreach ($product_authors as $author):
                $filter_character = substr($author->name, 0, 1);
                ?>
                <article <?php post_class( array_merge($item_class, array($filter_character))); ?>>
                    <?php
                    $id = $author->term_id;
                    $img = G5P()->termMeta()->get_product_author_thumb($id);
                    $img_id = isset($img['id']) && !empty($img['id']) ? $img['id'] : '';?>
                    <div class="entry-thumbnail-wrap">
                        <a href="<?php echo esc_url(get_term_link($id, 'product_author')) ?>" title="<?php echo esc_attr($author->name) ?>"></a>
                        <?php
                        G5Plus_Auteur()->blog()->render_post_image_markup(array(
                            'image_id'          => $img_id,
                            'image_size'        => $image_size,
                            'display_permalink' => false,
                            'image_mode'        => 'background'
                        ));
                        ?>
                    </div>
                    <h6 class="gsf-product-author-name fs-13 text-center mg-top-15 uppercase fw-bold"><a href="<?php echo esc_url(get_term_link($id, 'product_author')) ?>"
                                                                                                         class="transition03 gsf-link" title="<?php echo esc_attr($author->name) ?>"><?php echo esc_html($author->name) ?></a></h6>
                </article>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="item-not-found"><?php esc_html_e('No item found','auteur-framework'); ?></div>
    <?php endif; ?>
</div>