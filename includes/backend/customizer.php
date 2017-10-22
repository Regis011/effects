<?php

/*Customizer Code HERE*/
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
}
