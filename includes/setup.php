<?php

function c2x_setup_theme()
{
	add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5' );
    register_nav_menu( 'header', __( 'header menu', 'c2x') );
}