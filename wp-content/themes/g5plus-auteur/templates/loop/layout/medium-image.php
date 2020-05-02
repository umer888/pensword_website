<?php
/**
 * The template for displaying content-grid.php
 *
 * @var $image_size
 * @var $image_ratio
 * @var $post_class
 * @var $post_inner_class
 * @var $placeholder_enable
 * @var $first_image_enable
 * @var $post_attributes
 * @var $post_inner_attributes
 * @var $post_link
 */
?>
<article <?php echo implode(' ', $post_attributes); ?> <?php post_class($post_class) ?>>
    <div <?php echo implode(' ', $post_inner_attributes); ?> class="<?php echo esc_attr($post_inner_class); ?>">
        <?php G5Plus_Auteur()->blog()->render_post_thumbnail_markup(array(
            'image_size' => $image_size,
            'placeholder_enable' => $placeholder_enable,
            'first_image_enable' => $first_image_enable,
            'image_ratio' => $image_ratio
        )); ?>
        <div class="gf-post-content">
            <?php G5Plus_Auteur()->templates()->post_meta(array(
                'date' => true,
                'extend_class' => 'layout-2'
            )); ?>
            <?php G5Plus_Auteur()->helper()->getTemplate('loop/post-title', array('post_link' => $post_link)) ?>
            <div class="gf-post-excerpt">
                <?php the_excerpt(); ?>
            </div>
            <a href="<?php echo esc_url($post_link); ?>" class="btn-read-more btn btn-link btn-accent btn-icon btn-icon btn-icon-right"><?php esc_html_e('Read more', 'g5plus-auteur'); ?><i class="fal fa-angle-double-right"></i></a>
        </div>
    </div>
</article>
