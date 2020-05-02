<?php
/**
 * The template for displaying header-1.php
 *
 * @var $header_border
 * @var $header_sticky
 */

$header_classes = array(
	'mobile-header-wrap'
);

$header_inner_classes = array(
	'mobile-header-inner',
	'clearfix',
    'd-flex'
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

$header_class = implode(' ', array_filter($header_classes));
$header_inner_class = implode(' ', array_filter($header_inner_classes));
?>
<div class="<?php echo esc_attr($header_class) ?>">
	<div class="container">
		<div class="<?php echo esc_attr($header_inner_class) ?>">
			<div class="mobile-header-nav d-flex align-items-center justify-content-start">
				<?php G5Plus_Auteur()->helper()->getTemplate('header/mobile/toggle-menu',array('canvas_position' => 'left')) ?>
				<?php G5Plus_Auteur()->helper()->getTemplate('header/header-customize', array('customize_location' => 'mobile','canvas_position' => 'left')); ?>
			</div>
			<?php G5Plus_Auteur()->helper()->getTemplate('header/mobile/logo') ?>
		</div>
	</div>
</div>
