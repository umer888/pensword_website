<?php
/**
 * The template for displaying canvas-sidebar
 */
global $wp_registered_sidebars;
$skin = G5Plus_Auteur()->options()->get_canvas_sidebar_skin();
$wrapper_classes = array(
	'canvas-sidebar-wrapper'
);

$inner_classes = array(
	'canvas-sidebar-inner',
	'sidebar'
);

$wrapper_class = implode(' ',array_filter($wrapper_classes));
$inner_class = implode(' ',array_filter($inner_classes));
?>
<div id="canvas-filter-wrapper" class="<?php echo esc_attr($wrapper_class); ?>">
    <a href="javascript:;" class="gsf-link close-canvas" title="<?php esc_attr_e('Close', 'g5plus-auteur'); ?>"><i class="fas fa-times"></i></a>
	<div class="<?php echo esc_attr($inner_class)?>">
		<?php if (is_active_sidebar('woocommerce-filter')): ?>
			<?php dynamic_sidebar('woocommerce-filter'); ?>
		<?php elseif($wp_registered_sidebars['woocommerce-filter']): ?>
			<div class="gf-no-widget-content"> <?php printf(wp_kses_post(__('Please insert widget into sidebar <b>%s</b> in Appearance > <a title="manage widgets" href="%s">Widgets</a> ','g5plus-auteur')),$wp_registered_sidebars['woocommerce-filter']['name'], admin_url( 'widgets.php' )); ?></div>
		<?php endif; ?>
	</div>
</div>
