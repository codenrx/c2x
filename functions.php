<?php

include get_template_directory().'/includes/front/enqueue.php';
include get_template_directory().'/includes/setup.php';
include get_template_directory().'/includes/customizer.php';
include get_template_directory().'/includes/customizer/home.php';
include get_template_directory().'/elementor-setup.php';
include get_template_directory().'/elementor-categories.php';
include get_template_directory().'/plugin-required.php';
include get_template_directory().'/demo.php';

add_action( 'wp_enqueue_scripts', 'c2x_style' );
add_action( 'after_setup_theme', 'c2x_setup_theme' );
add_action( 'customize_register', 'c2x_customize_register' );
