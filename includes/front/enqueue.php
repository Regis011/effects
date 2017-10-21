<?php

function ef_enqueue(){

  //Style
  wp_register_style('ef_theme_style', get_template_directory_uri() . '/style.min.css', array(), null);
  wp_register_style('ef_core_demo_style', get_template_directory_uri() . '/assets/css/demo.css', array(), null);
  wp_register_style('ef_core_component_style', get_template_directory_uri() . '/assets/css/component.css', array(), null);
  wp_register_style('ef_core_normalize_style', get_template_directory_uri() . '/assets/css/normalize.css', array(), null);

  wp_enqueue_style('ef_theme_style');
  wp_enqueue_style('ef_core_demo_style');
  wp_enqueue_style('ef_core_component_style');
  wp_enqueue_style('ef_core_normalize_style');

  //JS
  wp_register_script('ef_core_classie', get_template_directory_uri() . '/assets/js/classie.js', array(), null, true);
  wp_register_script('ef_custom_js', get_template_directory_uri() . '/js/dist/custom.min.js', array(), null, true);
  wp_register_script('ef_script_min_js', get_template_directory_uri() . '/js/dist/script.js', array(), null, true);
  wp_register_script('ef_script_js', get_template_directory_uri() . '/js/dist/script.min.js', array(), null, true);

  //wp_enqueue_script('jquery');
  wp_enqueue_script('ef_core_classie');
  wp_enqueue_script('ef_custom_js');
  wp_enqueue_script('ef_script_js');

}

function load_admin_script() {
    wp_enqueue_script('admin_script', get_template_directory_uri() . '/js/dist/admin-scripts.min.js', array('jquery'), null, true);
}
