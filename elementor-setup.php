<?php

class ElementorCustomElement
{
	
	private static $instance = null;

	public static function get_instance()
	{
		if (!self::$instance)
			self::$instance = new self;
		return self::$instance;
	}

	public function init()
	{
		add_action('elementor/widgets/widgets_registered', array($this, 'widgets_registered'));
	}

	public function widgets_registered()
	{
		if (defined('ELEMENTOR_PATH') && class_exists('Elementor\Widget_Base')) {
			$widget_file = get_template_directory() . '/includes/widgets/create-widget.php';
			$template_file = locate_template($widget_file);
			if (!$template_file || !is_readable($template_file)) {
				$template_file = get_template_directory() . '/includes/widgets/create-widget.php';
			}
			if ($template_file && is_readable($template_file)) {
				require_once $template_file;
			}
		}
	}
}
ElementorCustomElement::get_instance()->init();