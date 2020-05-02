<?php
/**
 * The template for displaying search
 * @var $customize_location
 */

$searchh_type = G5Plus_Auteur()->options()->getOptions("header_customize_{$customize_location}_search_type");
if ($customize_location == 'mobile') {
    $searchh_type = 'icon';
}
if($searchh_type === 'box') {?>
    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) )  ?>">
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'g5plus-auteur' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
        <button type="submit" class="search-submit"><i class="fal fa-search"></i></button>
        <input type="hidden" name="post_type" value="product">
    </form>
    <?php
} else {
    add_action('wp_footer',array(G5Plus_Auteur()->templates(),'search_popup'),5);?>
    <a class="search-popup-link" href="#search-popup"><i class="fal fa-search"></i></a>
<?php } ?>