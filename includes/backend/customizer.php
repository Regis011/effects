<?php

/* Customizer */
add_action('customize_register', 'effects_customize_register');
function effects_customize_register($wp_customize){
   //adding section in wordpress customizer
  $wp_customize->add_section('archive_settings_section', array(
    'title'          => 'Archive Text Section'
   ));

   //adding setting for archive text area
   $wp_customize->add_setting('title_setting', array(
    'default'        => 'Default Title For Archive Section',
    ));
   $wp_customize->add_control('title_setting', array(
    'label'   => 'Archive Title Here',
     'section' => 'archive_settings_section',
    'type'    => 'input',
   ));

  //adding setting for archive text area
  $wp_customize->add_setting('text_setting', array(
   'default'        => 'Default Text For Archive Section',
   ));
  $wp_customize->add_control('text_setting', array(
   'label'   => 'Archive Text Here',
    'section' => 'archive_settings_section',
   'type'    => 'textarea',
  ));

  /**
	 * Add Image to Archive Template Setting.
	 */
	$wp_customize->add_setting(
		// $id
		'effects_image_upload',
		// $args
		array(
			'default'		=> get_stylesheet_directory_uri() . '/images/minimography_005_orig.jpg',
			'sanitize_callback'	=> 'esc_url_raw',
			'transport'		=> 'postMessage'
		)
	);

	/**
	 * Add 'Home Top Background Image' image upload Control.
	 */
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			// $wp_customize object
			$wp_customize,
			// $id
			'effects_image_upload',
			// $args
			array(
				'settings'		=> 'effects_image_upload',
				'section'		=> 'archive_settings_section',
				'label'			=> __( 'Home Top Background Image', 'theme-slug' ),
				'description'	=> __( 'Select the image to be used for Home Top Background.', 'theme-slug' )
			)
		)
);
}
