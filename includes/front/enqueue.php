<?php

function ef_enqueue(){

  wp_register_style('ef_theme_style', get_template_directory_uri() . '/style.min.css', array(), null);
  wp_register_style('ef_core_demo_style', get_template_directory_uri() . '/assets/css/demo.css', array(), null);
  wp_register_style('ef_core_component_style', get_template_directory_uri() . '/assets/css/component.css', array(), null);
  wp_register_style('ef_core_normalize_style', get_template_directory_uri() . '/assets/css/normalize.css', array(), null);

  wp_enqueue_style('ef_theme_style');
  wp_enqueue_style('ef_core_demo_style');
  wp_enqueue_style('ef_core_component_style');
  wp_enqueue_style('ef_core_normalize_style');

  wp_register_script('ef_core_classie', get_template_directory_uri() . '/assets/js/classie.js', array(), null, true);

  //wp_enqueue_script('jquery');
  wp_enqueue_script('ef_core_classie');

}
