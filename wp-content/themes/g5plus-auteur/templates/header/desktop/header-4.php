<?php
/**
 * The template for displaying layout-1
 *
 * @var $header_layout
 * @var $header_float_enable
 * @var $header_border
 * @var $header_content_full_width
 * @var $header_sticky
 * @var $navigation_skin
 * @var $page_menu
 */

$header_classes = array(
    'header-wrap'
);

$header_above_inner_classes = array(
    'header-inner',
    'x-nav-menu-container',
    'clearfix',
    'd-flex',
    'align-items-center'
);

$header_above_classes = array(
    'header-above'
);

$navigation_classes = array(
    'primary-menu',
    'd-flex align-items-center flex-row'
);

$navigation_inner_classes = array(
    'primary-menu-inner',
    'd-flex align-items-center flex-row'
);

if ($header_border === 'container') {
    $navigation_inner_classes[] = 'gf-border-bottom';
    $navigation_inner_classes[] = 'border-color';
}

if ($header_border == 'full') {
    $header_classes[] = 'gf-border-bottom';
    $header_classes[] = 'border-color';
}

if ($header_sticky !== '') {
    $navigation_classes[] = 'header-sticky';
}

$header_above_border = G5Plus_Auteur()->options()->get_header_above_border();
if ($header_above_border === 'container') {
    $header_above_inner_classes[] = 'gf-border-bottom';
    $header_above_inner_classes[] = 'border-color';
}

if ($header_above_border == 'full') {
    $header_above_classes[] = 'gf-border-bottom';
    $header_above_classes[] = 'border-color';
}

if ($header_content_full_width === 'on') {
    $header_above_classes[] = 'header-full-width';
    $navigation_classes[] = 'header-full-width';
}

$header_class = implode(' ', array_filter($header_classes));
$header_above_inner_class = implode(' ', array_filter($header_above_inner_classes));
$navigation_class = implode(' ', array_filter($navigation_classes));
$navigation_inner_class = implode(' ', array_filter($navigation_inner_classes));
$header_customize_left = G5Plus_Auteur()->options()->get_header_customize_left();
$header_customize_right = G5Plus_Auteur()->options()->get_header_customize_right();
unset($header_customize_left['sort_order']);
unset($header_customize_right['sort_order']);
$header_above_class = implode(' ', array_filter($header_above_classes));
?>
<div class="<?php echo esc_attr($header_class) ?>">
    <div class="<?php echo esc_attr($header_above_class); ?>">
        <div class="container">
            <div class="<?php echo esc_attr($header_above_inner_class) ?>">
                <?php if(empty($header_customize_left)): ?>
                    <div class="header-customize-empty"></div>
                <?php else: ?>
                    <?php G5Plus_Auteur()->helper()->getTemplate('header/header-customize', array('customize_location' => 'left', 'canvas_position' => 'left')); ?>
                <?php endif; ?>
                <?php G5Plus_Auteur()->helper()->getTemplate('header/desktop/logo',array('header_layout' => $header_layout)); ?>
                <?php if(empty($header_customize_right)): ?>
                    <div class="header-customize-empty"></div>
                <?php else: ?>
                    <?php G5Plus_Auteur()->helper()->getTemplate('header/header-customize', array('customize_location' => 'right', 'canvas_position' => 'right')); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <nav class="<?php echo esc_attr($navigation_class); ?>">
        <div class="container">
            <div class="<?php echo esc_attr($navigation_inner_class); ?>">
                <?php if (has_nav_menu('primary') || $page_menu) {
                    $arg_menu = array(
                        'menu_id' => 'main-menu',
                        'container' => '',
                        'theme_location' => 'primary',
                        'menu_class' => 'main-menu clearfix d-flex justify-content-center',
                        'main_menu' => true
                    );
                    if (!empty($page_menu)) {
                        $arg_menu['menu'] = $page_menu;
                    }
                    wp_nav_menu($arg_menu);
                } ?>
            </div>
        </div>
    </nav>
</div>


