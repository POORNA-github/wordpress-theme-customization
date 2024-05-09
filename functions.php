<?php

function followlakmal_register_styles(){
    wp_enqueue_style('followlakmal_bootstrap', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'followlakmal_register_styles');
?>