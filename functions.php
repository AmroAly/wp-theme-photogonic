<?php

// Theme Support
function theme_setup() {
    
    // Featured Image support
    add_theme_support('post-thumbnails');

    set_post_thumbnail_size(900, 600);

    add_theme_support('post-formats', ['gallery']);
}

add_action('after_setup_theme', 'theme_setup');

function set_excerpt_length($length) {
    return 10;
}

add_filter('excerpt_length', 'set_excerpt_length');

// Widget Locations
function init_widgets($id) {
    register_sidebar([
        'name' => 'Sidebar',
        'id'   => 'sidebar'
    ]);
}

add_action('widgets_init','init_widgets');