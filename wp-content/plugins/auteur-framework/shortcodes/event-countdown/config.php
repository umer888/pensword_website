<?php
/**
 * Created by PhpStorm.
 * User: Kaga
 * Date: 20/5/2016
 * Time: 3:57 PM
 */
return array(
    'name'        => esc_html__('Event Countdown', 'auteur-framework'),
    'base'        => 'gsf_event_countdown',
    'icon'        => 'fa fa-clock-o',
    'category' => G5P()->shortcode()->get_category_name(),
    'params'      => array(
        array(
            'type' => 'gsf_image_set',
            'heading' => esc_html__('Layout Style', 'auteur-framework'),
            'param_name' => 'layout_style',
            'value' => apply_filters('gsf_countdown_layout_style',array(
                'style-01' => array(
                    'label' => esc_html__('Style 01', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/shortcode/countdown-1.jpg'),
                ),
                'style-02' => array(
                    'label' => esc_html__('Style 02', 'auteur-framework'),
                    'img' => G5P()->pluginUrl('assets/images/shortcode/countdown-2.jpg'),
                )
            )),
            'std' => 'style-01',
            'admin_label' => true,
        ),
        array(
            'type' => 'gsf_number_responsive',
            'heading' => esc_html__('Number Font size', 'auteur-framework'),
            'param_name' => 'number_font_size',
            'value' => '56|48|40|34|30'
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Date - Main Color', 'auteur-framework'),
            'param_name' => 'main_color',
            'edit_field_class' => 'vc_col-sm-6 vc_column',
            'std' => G5P()->options()->get_accent_color()
        ),
        array(
            'type' => 'gsf_switch',
            'heading' => esc_html__('Countdown Day Enable', 'auteur-framework'),
            'param_name' => 'day_enable',
            'std' => 'on'
        ),
        array(
            'type' => 'gsf_switch',
            'heading' => __( 'Use Theme Default Font family for Number Text?', 'auteur-framework' ),
            'param_name' => 'title_use_theme_fonts',
            'std' => 'on',
        ),
        array(
            'type' => 'gsf_typography',
            'param_name' => 'title_typography',
            'dependency' => array('element' => 'title_use_theme_fonts', 'value_not_equal_to' => 'on'),
        ),
        G5P()->shortcode()->vc_map_add_css_animation(),
        G5P()->shortcode()->vc_map_add_animation_duration(),
        G5P()->shortcode()->vc_map_add_animation_delay(),
        G5P()->shortcode()->vc_map_add_extra_class(),
        G5P()->shortcode()->vc_map_add_css_editor(),
        G5P()->shortcode()->vc_map_add_responsive()
    )
);