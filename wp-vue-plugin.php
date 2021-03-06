<?php
/*
Plugin Name:  Plugin Name
Plugin URI:   
Description:  Display Rexer Events
Version:      0.1
Author:       TUAN NGUYEN
Author URI:   
License:      
License URI:  
Text Domain:  rexer
Domain Path:  /languages
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// TODO: replace PLUGIN_NAME with yours
define( 'PLUGIN_NAME_FILE', __FILE__ );
define( 'PLUGIN_NAME_VERSION', '0.1.0.0' );
define( 'PLUGIN_NAME_SHORTCODE', 'network-zeit');

require plugin_dir_path( PLUGIN_NAME_FILE ) . 'includes/shortcodes.php';

add_action( 'wp_enqueue_scripts', function() {
  wp_register_script(
    SCRIPT_NAME,
    plugin_dir_url( PLUGIN_NAME_FILE ) . 'public/js/'.(PLUGIN_NAME_SHORTCODE).'.js',
    array(),
    PLUGIN_NAME_VERSION,
    true
  );
} );
