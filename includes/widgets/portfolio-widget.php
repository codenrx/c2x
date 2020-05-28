<?php

namespace Elementor;
/**
 * First Widget
 */
class c2x_portfolio extends Widget_Base
{

	public function get_name(){
		return "c2x-portfolio-widget";
	}

	public function get_title(){
		return "PortFolio";
	}

	public function get_icon() {

		return "fa fa-credit-card";
	}

	public function get_categories() {
		return [ 'c2x_theme_category' ];
	}

	protected function _register_controls() {
		
		$this->start_controls_section(
			'c2x_portfolio_section',
			[
				'label' => __( 'PortFolio', 'c2x' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new Repeater();

		$repeater->add_control(
			'c2x_portfolio_name', [
				'label' => __( 'Name', 'c2x' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'project name' , 'c2x' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'c2x_portfolio_image', [
				'label' => __( 'Image', 'c2x' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
								'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
		);

		$repeater->add_control(
			'c2x_portfolio_link',
			[
				'label' => __( 'Link', 'c2x' ),
				'type' => Controls_Manager::TEXT,
			]
		);

		$this->add_control(
			'c2x_portfolio',
			[
				'label' => __( 'PortFolio', 'c2x' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		?>
		<div class="project-items">
	<?php
	$settings = $this->get_settings_for_display();
	if ( $settings['c2x_portfolio'] ) {
			foreach (  $settings['c2x_portfolio'] as $item ) {
	?>
        <div class="item">
          <div class="image">
            <a href="<?php echo $item["c2x_portfolio_link"]; ?>">
              <img src="<?php echo $item['c2x_portfolio_image']['url']; ?>" alt="image" />
              <div class="overlay">
                <div class="text">preview</div>
              </div>
            </a>
          </div>
          <div class="name"><?php echo $item["c2x_portfolio_name"]; ?></div>
        </div>
<?php } } ?>
      </div>
	<?php
	}

	protected function _content_template()
	{
		?>
		<#
		if ( settings.c2x_portfolio.length ) { 
		#>
		<div class="project-items">
			<# _.each( settings.c2x_portfolio, function( item ) { #>
				<div class="item">
		          <div class="image">
		            <a href="{{{ item.c2x_portfolio_link }}}">
		              <img src="{{{ item.c2x_portfolio_image.url }}}" alt="image" />
		              <div class="overlay">
		                <div class="text">preview</div>
		              </div>
		            </a>
		          </div>
		          <div class="name">{{{ item.c2x_portfolio_name }}}</div>
		        </div>
			<# }); #>
			</div>
		<# } #>
		<?php
	}
}
Plugin::instance()->widgets_manager->register_widget_type( new c2x_portfolio );