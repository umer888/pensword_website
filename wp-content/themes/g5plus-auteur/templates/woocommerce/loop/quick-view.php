<?php
/**
 * Template display quickview
 *
 */
global $product;
$product_quick_view = G5Plus_Auteur()->options()->get_product_quick_view_enable();
if ('on' !== $product_quick_view) return;
?>
<a data-toggle="tooltip" title="<?php esc_attr_e('Quick view', 'g5plus-auteur') ?>" class="product-quick-view no-animation" data-product_id="<?php echo esc_attr($product->get_id()); ?>" href="<?php the_permalink(); ?>"><i class="fal fa-search"></i></a>