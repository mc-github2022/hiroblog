<?php 

function my_assets() {
    wp_enqueue_style('my_assets', get_template_directory_uri() . '/css/output.css', microtime());
    wp_enqueue_style('my-slider_css', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css', microtime());
    wp_enqueue_script('my_slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.min.js',  true);
}
add_action('wp_enqueue_scripts', 'my_assets');
?>