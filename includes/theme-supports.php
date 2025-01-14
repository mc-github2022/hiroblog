<?php 

function my_support() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_support');