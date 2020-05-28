<?php

function c2x_style()
{
    $uri = get_theme_file_uri();

	// Load Style
	wp_register_style( "c2x_style", $uri."/css/style.css" );
	wp_register_style( "c2x_responsive", $uri."/css/responsive.css" );

	wp_enqueue_style( 'c2x_style' );
	wp_enqueue_style( 'c2x_responsive' );

	// Load Js
	wp_register_script( 'c2x_main_js', $uri.'/js/main.js', [], false, true );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'c2x_main_js' );
}