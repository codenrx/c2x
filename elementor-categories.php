<?php
function add_elementor_widget_categories( $elements_manager ) {

	$elements_manager->add_category(
		'c2x_theme_category',
		[
			'title' => __( 'C2X Theme', 'c2x' ),
			'icon' => 'fa fa-plug',
		]
	);

}
add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );