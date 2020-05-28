<?php

function c2x_home_customizer_section($wp_customize)
{
	$wp_customize->add_setting('c2x_title',[
        'default' => "I'm Nirab"
    ]);

	$wp_customize->add_setting('c2x_shortTitle',[
        'default' => "Whether blog you’re about to create – personal blog, travel blog, instagram blog, we’ve have solution for you. Start blogging today."
    ]);

	$wp_customize->add_setting('c2x_posts_page_title',[
        'default' => "Blog"
    ]);

	$wp_customize->add_setting('c2x_posts_page_subtitle',[
        'default' => "I love to create someTing New !!"
    ]);

    $wp_customize->add_setting('c2x_photo');
    $wp_customize->add_setting('c2x_background');

    $wp_customize->add_setting('c2x_facebook');
    $wp_customize->add_setting('c2x_twitter');
    $wp_customize->add_setting('c2x_behance');
    $wp_customize->add_setting('c2x_dribbble');
    $wp_customize->add_setting('c2x_instagram');
    $wp_customize->add_setting('c2x_github');

    $wp_customize->add_section('c2x_home_section', [
        'title' => __( 'All Settings', 'c2x' ),
        'priority' => 30,
        'panel' => 'theme_home_settings'
    ]);

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'c2x_title',
		array(
			'label'                 =>  __( 'Title', 'c2x' ),
			'section'               => 'c2x_home_section',
			'settings'              => 'c2x_title',
		)
    ));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'c2x_shortTitle',
		array(
			'label'                 =>  __( 'Short Title', 'c2x' ),
			'type' => 'textarea',
			'section'               => 'c2x_home_section',
			'settings'              => 'c2x_shortTitle',
		)
    ));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'c2x_posts_page_title',
		array(
			'label'                 =>  __( 'Posts Page Title', 'c2x' ),
			'section'               => 'c2x_home_section',
			'settings'              => 'c2x_posts_page_title',
		)
    ));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'c2x_posts_page_subtitle',
		array(
			'label'                 =>  __( 'Posts Page Short-Title', 'c2x' ),
			'type' => 'textarea',
			'section'               => 'c2x_home_section',
			'settings'              => 'c2x_posts_page_subtitle',
		)
    ));

    $wp_customize->add_control(
    	new WP_Customize_Image_Control(
	        $wp_customize,'c2x_photo',array(
	            'label' => 'Your Photo',
	            'section' => 'c2x_home_section',
	            'settings' => 'c2x_photo'
	        )
    ));

    $wp_customize->add_control(
    	new WP_Customize_Image_Control(
	        $wp_customize,'c2x_background',array(
	            'label' => 'Background',
	            'section' => 'c2x_home_section',
	            'settings' => 'c2x_background'
	        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'c2x_facebook',
		array(
			'label'                 =>  __( 'Facebook', 'c2x' ),
			'section'               => 'c2x_home_section',
			'settings'              => 'c2x_facebook',
		)
    ));

    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'c2x_twitter',
		array(
			'label'                 =>  __( 'Twitter', 'c2x' ),
			'section'               => 'c2x_home_section',
			'settings'              => 'c2x_twitter',
		)
    ));

    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'c2x_instagram',
		array(
			'label'                 =>  __( 'Instagram', 'c2x' ),
			'section'               => 'c2x_home_section',
			'settings'              => 'c2x_instagram',
		)
    ));

    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'c2x_behance',
		array(
			'label'                 =>  __( 'Behance', 'c2x' ),
			'section'               => 'c2x_home_section',
			'settings'              => 'c2x_behance',
		)
    ));

    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'c2x_dribbble',
		array(
			'label'                 =>  __( 'Dribbble', 'c2x' ),
			'section'               => 'c2x_home_section',
			'settings'              => 'c2x_dribbble',
		)
    ));

    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'c2x_github',
		array(
			'label'                 =>  __( 'GitHub', 'c2x' ),
			'section'               => 'c2x_home_section',
			'settings'              => 'c2x_github',
		)
    ));
}