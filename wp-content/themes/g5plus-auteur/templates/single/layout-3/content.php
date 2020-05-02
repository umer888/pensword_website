<?php
/**
 * The template for displaying content-single.php
 *
 */
$large_image = true;
$post_id = get_the_ID();
$wrap_class = array(
    'gf-single-wrap'
);
?>
<div class="<?php echo esc_attr(implode(' ',$wrap_class)); ?> clearfix">
    <article id="post-<?php the_ID(); ?>" <?php post_class('post-single clearfix'); ?>>
        <?php G5Plus_Auteur()->helper()->getTemplate('single/post-title') ?>
        <?php G5Plus_Auteur()->templates()->post_single_image(); ?>
        <?php G5Plus_Auteur()->templates()->post_meta(array(
            'cat' => true,
            'author' => true,
            'date' => true,
            'comment' => true,
            'edit' => true,
            'view' => true,
            'like' => true
        )); ?>
        <div class="gf-entry-content clearfix">
            <?php
            the_content();
            G5Plus_Auteur()->blog()->link_pages();
            ?>
        </div>
        <?php
        /**
         * @hooked - post_single_tag_share
         *
         **/
        do_action('g5plus_single_post_tag_share')
        ?>
    </article>
    <?php
    /**
     * @hooked - post_single_navigation - 15
     * @hooked - post_single_author_info - 20
     * @hooked - post_single_related - 25
     * @hooked - post_single_comment - 30
     *
     **/
    do_action('g5plus_after_single_post')
    ?>
</div>
