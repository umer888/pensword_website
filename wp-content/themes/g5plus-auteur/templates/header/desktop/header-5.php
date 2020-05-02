<?php
/**
 * The template for displaying layout-1
 *
 * @var $header_layout
 * @var $header_float_enable
 * @var $header_border
 * @var $header_content_full_width
 * @var $header_sticky
 * @var $page_menu
 */

$header_classes = array(
    'header-wrap'
);

$header_inner_classes = array(
    'header-inner',
    'x-nav-menu-container',
    'clearfix',
    'd-flex',
    'align-items-center'
);

if ($header_border === 'container') {
    $header_inner_classes[] = 'gf-border-bottom';
    $header_inner_classes[] = 'border-color';
}

if ($header_border == 'full') {
    $header_classes[] = 'gf-border-bottom';
    $header_classes[] = 'border-color';
}

if ($header_sticky !== '') {
    $header_classes[] = 'header-sticky';
}

if ($header_content_full_width === 'on') {
    $header_classes[] = 'header-full-width';
}


$header_class = implode(' ', array_filter($header_classes));
$header_inner_class = implode(' ', array_filter($header_inner_classes));
$header_customize_nav = G5Plus_Auteur()->options()->get_header_customize_nav();
unset($header_customize_nav['sort_order']);
?>
<div class="<?php echo esc_attr($header_class) ?>">
    <div class="container">
        <div class="<?php echo esc_attr($header_inner_class) ?>">
            <div class="primary-menu-inner d-flex align-items-center flex-row">
                <?php if (has_nav_menu('primary') || $page_menu) {
                    $arg_menu = array(
                        'menu_id' => 'main-menu',
                        'container' => '',
                        'theme_location' => 'primary',
                        'menu_class' => 'main-menu d-flex align-items-center justify-content-start clearfix ',
                        'main_menu' => true
                    );
                    if (!empty($page_menu)) {
                        $arg_menu['menu'] = $page_menu;
                    }
                    wp_nav_menu($arg_menu);
                } ?>
            </div>
            <?php G5Plus_Auteur()->helper()->getTemplate('header/desktop/logo', array('header_layout' => $header_layout)); ?>
            <?php if(empty($header_customize_nav)): ?>
                <div class="header-customize-empty"></div>
            <?php else: ?>
                <?php G5Plus_Auteur()->helper()->getTemplate('header/header-customize', array('customize_location' => 'nav', 'canvas_position' => 'right')); ?>
            <?php endif; ?>
        </div>

    </div>
</div>


