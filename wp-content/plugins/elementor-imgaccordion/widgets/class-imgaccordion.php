<?php
/**
 * ImgAccordion class.
 *
 * @category   Class
 * @package    ElementorImgAccordion
 * @subpackage WordPress
 * @author     Vincent Gestas
 * @since      1.0.0
 * php version 7.3.9
 */

namespace ElementorImgAccordion\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

// Security Note: Blocks direct access to the plugin PHP files.
defined( 'ABSPATH' ) || die();

/**
 * ImgAccordion widget class.
 *
 * @since 1.0.0
 */
class ImgAccordion extends Widget_Base {
	/**
	 * Class constructor.
	 *
	 * @param array $data Widget data.
	 * @param array $args Widget arguments.
	 */
	public function __construct( $data = array(), $args = null ) {
		parent::__construct( $data, $args );

		wp_register_style( 'imgaccordion', plugins_url( '/assets/css/imgaccordion.css', ELEMENTOR_IMGACCORDION ), array(), '1.0.0' );
	}

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'imgaccordion';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'ImgAccordion', 'elementor-imgaccordion' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'fad fa-clone';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return array( 'general' );
	}
	
	/**
	 * Enqueue styles.
	 */
	public function get_style_depends() {
		return array( 'imgaccordion' );
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {
	        $this->start_controls_section(
			'img_accordeon_style', 
			[
				'label'        => esc_html__('Image Accordion', 'elementor-imgaccordion' ),
				'tab'           => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'image',
			[
				'label' => __( 'Choose Image', 'elementor' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'dynamic' => [
					'active' => true,
				],
			]
		);

        
		$repeater->add_control(
			'btn_txt',
			[
				'label' => __('Text btn ', 'elementor-imgaccordion'),
				'type' => \Elementor\Controls_Manager::TEXT
			]
		);
		$repeater->add_control(
				'text_color',
				[
					'label' => __( 'Text Color', 'elementor' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}}' => 'color: {{VALUE}};',
					],
					'global' => [
						'default' => Global_Colors::COLOR_TEXT,
					],
				]
		);
		
		$repeater->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography',
				'global' => [
					'default' => [
						"font_size" => "40px"
					]
				],
			]
		);
	


		$repeater->add_control(
			'btn_link',
			[
				'label' => __('Link To ', 'elementor-imgaccordion'),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __('https://your-link.com', 'uae'),
				'show_external' => false,
				'default' => [
					'url' => '',
					'is_external' => false,
					'nofollow' => false,
				],
			]
		);

        $this->add_control(
			'list_items',
			[
				'label' => __( 'Repeater List', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'theme' => __( 'left', 'plugin-domain' ),
						'list_content' => __( 'Item content. Click the edit button to change this text.', 'plugin-domain' ),
					],
				],
				'title_field' => '{{{ image }}}',
			]
		);

        $this->end_controls_section();
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
		<div class="gallery-wrap">
        <?php foreach ($settings['list_items'] as $list_items) { ?>
					 <?php if ($list_items['image'] != '') { ?>
                        <div class="item" style="background-image: url('<?php echo $list_items['image']['url'] ?>'" >
						<?php if ($list_items['btn_txt'] != '') { ?>
							<span class="btn-text">
								<a href="<?php echo $list_items['btn_link']['url'] ?>"><?php echo $list_items['btn_txt'] ?></a>
							</span>
						<?php } ?> 
						
					<?php } ?> 
				  </div>
			<?php } ?>
    </div>
		<?php
	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _content_template() {
		?>
		<#
		view.addInlineEditingAttributes( 'title', 'none' );
		view.addInlineEditingAttributes( 'description', 'basic' );
		view.addInlineEditingAttributes( 'content', 'advanced' );
		#>
		<h2 {{{ view.getRenderAttributeString( 'title' ) }}}>{{{ settings.title }}}</h2>
		<div {{{ view.getRenderAttributeString( 'description' ) }}}>{{{ settings.description }}}</div>
		<div {{{ view.getRenderAttributeString( 'content' ) }}}>{{{ settings.content }}}</div>
		<?php
	}
}