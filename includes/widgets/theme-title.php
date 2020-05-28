<?php

namespace Elementor;
/**
 * First Widget
 */
class ThemeTitle extends Widget_Base
{

	public function get_name(){
		return "c2x-title";
	}

	public function get_title(){
		return "Section Title";
	}

	public function get_icon() {

		return "fa fa-tags";
	}

	public function get_categories() {
		return [ 'c2x_theme_category' ];
	}

	protected function _register_controls() {
		
		$this->start_controls_section(
			'c2x_section_title',
			[
				'label' => __( 'Section Title', 'c2x' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'c2x_section_title_field',
			[
				'label' => __( 'Title', 'c2x' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Stunning Designs', 'c2x' ),
			]
		);

		$this->add_control(
			'c2x_section_shortTitle_field',
			[
				'label' => __( 'Short Title', 'c2x' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Get started with any of our best-in-class designs and customize it as you wish.', 'c2x' ),
			]
		);
		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$this->add_inline_editing_attributes( 'c2x_section_title_field', 'basic' );
		$this->add_inline_editing_attributes( 'c2x_section_shortTitle_field', 'advanced' );
    ?>
     <div class="section-title-area">
        <h4 <?php echo $this->get_render_attribute_string( 'c2x_section_title_field' ); ?>><?php echo $settings["c2x_section_title_field"]; ?></h4>
        <p <?php echo $this->get_render_attribute_string( 'c2x_section_shortTitle_field' ); ?>>
          <?php echo $settings["c2x_section_shortTitle_field"]; ?>
        </p>
      </div>
    <?php
	}

	protected function _content_template()
	{
		?>
		<#
		view.addInlineEditingAttributes( 'c2x_section_title_field', 'basic' );
		view.addInlineEditingAttributes( 'c2x_section_shortTitle_field', 'advanced' );
		#>
		<div class="section-title-area">
	        <h4 {{{ view.getRenderAttributeString( 'c2x_section_title_field' ) }}}>{{{ settings.c2x_section_title_field }}}</h4>
	        <p {{{ view.getRenderAttributeString( 'c2x_section_shortTitle_field' ) }}}>
	          {{{ settings.c2x_section_shortTitle_field }}}
	        </p>
      </div>
		<?php
	}
}
Plugin::instance()->widgets_manager->register_widget_type( new ThemeTitle );