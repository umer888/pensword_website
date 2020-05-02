<?php
/**
 * The template for displaying dashboard
 *
 * @var $current_page
 */
$pages_settings = G5P()->core()->dashboard()->get_config_pages();
$current_theme = wp_get_theme();
?>
<?php if (G5P()->core()->dashboard()->plugins()->do_plugin_install()): ?>
    <script type="text/javascript">
        window.location = "admin.php?page=gsf_plugins";
    </script>
<?php endif; ?>

<div class="gsf-dashboard wrap">
    <h2 class="screen-reader-text"><?php printf(esc_html__('%s Dashboard', 'auteur-framework'), $current_theme['Name']) ?></h2>
	<div class="gsf-dashboard-tab-wrapper">
		<ul class="gsf-dashboard-tab">
			<?php foreach ($pages_settings as $key => $value): ?>
				<?php
					$href = isset($value['link']) ? $value['link'] :  admin_url("admin.php?page=gsf_{$key}");
				?>
				<li class="<?php echo esc_attr(($current_page === $key) ? 'active' : '') ?>">
					<a href="<?php echo esc_url($href) ?>"><?php echo esc_html($value['menu_title']) ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="gsf-dashboard-content">
			<?php G5P()->helper()->getTemplate("core/dashboard/templates/{$current_page}") ?>
	</div>
</div>

