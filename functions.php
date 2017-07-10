<?php

// Setup

// Includes
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/backend/core.php');

// Hooks
add_action('wp_enqueue_scripts', 'ef_enqueue');
add_filter('the_generator', 'ef_remove_version');

add_filter( 'script_loader_src', 'ef_remove_wp_version_strings' );
add_filter( 'style_loader_src', 'ef_remove_wp_version_strings' );

// Shoprtcodes
