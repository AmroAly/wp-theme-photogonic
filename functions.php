<?php

// Theme Support
function theme_setup() {
    
    // Featured Image support
    add_theme_support('post-thumbnails');

    set_post_thumbnail_size(900, 600);

    add_theme_support('post-formats', ['gallery']);
}

add_action('after_setup_theme', 'theme_setup');