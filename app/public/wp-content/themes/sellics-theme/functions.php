<?php

$autoiclude_folders = [
    '/lib/shortcodes/',
];

foreach($autoiclude_folders as $folder) {
    foreach (scandir(dirname(__FILE__) . $folder) as $filename) {
        $path = dirname(__FILE__) . $folder . $filename;
        if (is_file($path)) {
            require_once $path;
        }
    }
}


// include layout
require_once 'lib/layout/layout.php';

// include frontend assets
require_once 'assets/assets.php';

// Add HTML 5 Support
add_action(
    'after_setup_theme',
    function() {
        add_theme_support( 'html5', [ 'script', 'style' ] );
    }
);


// deactivate new block editor
function phi_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'phi_theme_support' );

