<?php
$current_theme = wp_get_theme();
$demo_site = array(
    'main' => array(
        'name'  => esc_html__('Main','auteur-framework'),
        'path'  => '',
        'link'  => 'http://auteur.g5plus.net/'
    )
);

foreach ($demo_site as $key => $value) {
    $demo_site[$key]['image'] = G5P()->pluginUrl("assets/data-demo/{$key}/preview.jpg");
}

?>
<div class="gsf-message-box">
	<h4 class="gsf-heading"><?php printf(__('%s Demos', 'auteur-framework'),$current_theme['Name'])?></h4>
	<p><?php esc_html_e('Installing a demo provides pages, posts, images, theme options, widgets, sliders and more. IMPORTANT: The included plugins need to be installed and activated before you install a demo. Please check the "System Status" tab to ensure your server meets all requirements for a successful import. Settings that need attention will be listed in red.', 'auteur-framework') ?></p>
</div>
<div class="g5plus-demo-data-wrapper">
	<div class="install-message" data-success="<?php esc_attr_e('Install Done','auteur-framework') ?>"></div>
	<div class="g5plus-demo-site-wrapper">
		<div class="demo-site-row">
			<?php foreach ($demo_site as $key => $value): ?>
				<div class="demo-site-col">
					<div class="g5plus-demo-site">
						<div class="g5plus-demo-site-inner">
							<div class="demo-site-thumbnail">
								<div class="centered">
									<img src="<?php echo esc_url($value['image'])?>" alt="<?php echo esc_attr($value['name'])?>"/>
								</div>
							</div>
							<a href="<?php echo esc_url($value['link']); ?>" target="_blank" class="link-demo"><?php esc_html_e('Preview','auteur-framework'); ?></a>
							<div class="progress-bar meter">
								<span style="width: 0%"></span>
							</div>
						</div>
						<h3>
							<span><?php echo esc_html($value['name'])?></span>
							<?php if (isset($_REQUEST['fixdemo'])): ?>
								<button id="fix_data" class="install-button" data-demo="<?php echo esc_attr($key) ?>" data-path="<?php echo esc_attr($value['path']) ?>"><i class="fas fa-spin fa-spinner"></i> <?php esc_html_e('Fix Demo Data','auteur-framework') ; ?></button>
							<?php else: ?>
								<button id="install_demo" class="install-button" data-demo="<?php echo esc_attr($key) ?>" data-path="<?php echo esc_attr($value['path']) ?>"><i class="fas fa-spin fa-spinner"></i><?php esc_html_e('Install','auteur-framework'); ?></button>
								<button id="install_setting" class="install-button" data-demo="<?php echo esc_attr($key) ?>" data-path="<?php echo esc_attr($value['path']) ?>"><i class="fas fa-spin fa-spinner"></i><?php esc_html_e('Only Setting','auteur-framework'); ?></button>
							<?php endif;?>
						</h3>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
