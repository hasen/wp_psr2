<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if (!isset($wp_did_header) === true) {
    $wp_did_header = true;

    // Load the WordPress library.
    include_once dirname(__FILE__) . "/wp-load.php" ;

    // Set up the WordPress query.
    wp();

    // Load the theme template.
    include_once ABSPATH . WPINC . "/template-loader.php";
}
