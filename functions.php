<?php
// Define a constant to indicate whether it's a development environment
define('DEV_ENVIRONMENT', true);

// Function to include Livereload script in the footer
function liveReload() {
    if (defined('DEV_ENVIRONMENT') && DEV_ENVIRONMENT) {
        echo '<script src="http://' . $_SERVER['HTTP_HOST'] . ':35729/livereload.js?snipver=1"></script>';
    }
}

// Hook the function to the wp_footer action with priority 100
add_action('wp_footer', 'liveReload', 100);
?>
