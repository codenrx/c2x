<?php

function c2x_customize_register( $wp_customize )
{
    $wp_customize->add_panel('theme_home_settings',[
        'title' => 'Theme Settings',
        'description' => '<p> Home Settings</p>',
        'priority' => 160
    ]);
    c2x_home_customizer_section($wp_customize);
}