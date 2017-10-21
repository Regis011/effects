<?php

function effects_customize_register($wp_customize){

    $wp_customize->add_section('effects_archive_options', array(
        'title'    => __('Archive options', 'effects'),
        'priority' => 120,
    ));
    //  =============================
    //  = Text Input                =
    //  =============================
    $wp_customize->add_setting('effects_theme_options[titl_header]', array(
        'default'        => 'Title',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control('effects_text_test', array(
        'label'      => __('Title', 'effects'),
        'section'    => 'effects_archive_options',
        'settings'   => 'effects_theme_options[titl_header]',
    ));
    //  =============================
    //  = Text Area                 =
    //  =============================
     $wp_customize->add_setting('effects_theme_options[text_area_header]', array(
        'default'        => 'Description',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control( 'example_select_box', array(
        'settings' => 'effects_theme_options[text_area_header]',
        'label'   => 'Description',
        'section' => 'effects_archive_options',
        'type'    => 'textarea',
    ));
    //  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('effects_theme_options[image_upload_archive]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_archive', array(
        'label'    => __('Image Upload Test', 'effects'),
        'section'  => 'effects_archive_options',
        'settings' => 'effects_theme_options[image_upload_archive]',
    )));
}
add_action('customize_register', 'effects_customize_register');
