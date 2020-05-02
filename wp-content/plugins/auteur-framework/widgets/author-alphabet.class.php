<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
if (!class_exists('G5P_Widget_Author_Alphabet')) {
	class G5P_Widget_Author_Alphabet extends  GSF_Widget
	{
		public function __construct() {
			$this->widget_cssclass    = 'widget-author-alphabet';
			$this->widget_id          = 'gsf-author-alphabet';
			$this->widget_name        = esc_html__( 'G5Plus: Author Alphabet', 'auteur-framework' );

			$this->settings = array(
				'fields' => array(
					array(
						'id'      => 'title',
						'type'    => 'text',
						'default' => '',
						'title'   => esc_html__('Title:', 'auteur-framework')
					),
                    array(
                        'id'      => 'show_empty',
                        'type'    => 'switch',
                        'default' => '',
                        'title'   => esc_html__('Show Empty?', 'auteur-framework')
                    ),
                    array(
                        'id'      => 'show_all',
                        'type'    => 'switch',
                        'default' => 'on',
                        'title'   => esc_html__('Show "All"?', 'auteur-framework')
                    )
				)
			);

			parent::__construct();
		}

		public function widget($args, $instance) {
			extract( $args, EXTR_SKIP );
			$wrapper_classes = array(
				'widget-author-alphabet-content'
			);
            $title = (!empty($instance['title'])) ? $instance['title'] : '';
            $show_empty = (!empty($instance['show_empty'])) ? $instance['show_empty'] : '';
            $show_all = (!empty($instance['show_all'])) ? $instance['show_all'] : 'on';
            $title = apply_filters('widget_title', $title, $instance, $this->id_base);
            echo wp_kses_post($args['before_widget']);
            if ($title) {
                echo wp_kses_post($args['before_title'] . $title . $args['after_title']);
            }
            $show_empty = ('on' !== $show_empty) ? '1' : '0';
            $authors = get_categories(array('hide_empty' => $show_empty, 'taxonomy' => 'product_author'));
            $wrapper_class = implode(' ', array_filter($wrapper_classes));
            ?>
                <div class="<?php echo esc_attr($wrapper_class) ?>">
                    <?php if(sizeof($authors)):?>
                        <ul class="gf-author-alphabet">
                        <?php
                        if('on' === $show_all) :?>
                            <li class="character-item active"><a class="gsf-link transition03 no-animation" href="*" title="<?php esc_attr_e('All', 'auteur-framework') ?>"><?php esc_html_e('All', 'auteur-framework') ?></a></li>
                        <?php endif;
                        $exist_characters = array();
                        foreach ($authors as $author):
                            $character = substr($author->name, 0, 1);
                            if(!in_array($character, $exist_characters)):
                                $exist_characters[] = $character;
                            ?>
                                <li class="character-item"><a class="gsf-link transition03 no-animation" href=".<?php echo esc_attr($character); ?>" title="<?php echo strtoupper($character) ?>"><?php echo strtoupper($character) ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            <?php
			echo wp_kses_post($args['after_widget']);
		}
	}
}