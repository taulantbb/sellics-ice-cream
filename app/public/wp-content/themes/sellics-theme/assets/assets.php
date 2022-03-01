<?php

add_action( 'wp_enqueue_scripts', 'custom_include_assets' );

function custom_include_assets() {

    wp_enqueue_style( 'theme-main', CHILD_URL . '/assets/app/css/main.min.css' , array(), filemtime(__DIR__ . '/app/css/main.min.css'));
    wp_enqueue_script( 'theme-main', CHILD_URL . '/assets/app/js/main.min.js', array('jquery'), filemtime(__DIR__ . '/app/js/main.min.js'), true );

}
