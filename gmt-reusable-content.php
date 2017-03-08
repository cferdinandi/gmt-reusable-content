<?php

/**
 * Plugin Name: GMT Reusable Content
 * Plugin URI: https://github.com/cferdinandi/gmt-reusable-content/
 * GitHub Plugin URI: https://github.com/cferdinandi/gmt-reusable-content/
 * Description: Create content snippets you can reuse with shortcodes.
 * Version: 1.3.0
 * Author: Chris Ferdinandi
 * Author URI: http://gomakethings.com
 * Text Domain: gmt_reusable_content
 * License: GPLv3
 */


// Load plugin files
require_once( plugin_dir_path( __FILE__ ) . 'includes/cpt.php' );
require_once( plugin_dir_path( __FILE__ ) . 'includes/metabox.php' );
require_once( plugin_dir_path( __FILE__ ) . 'includes/shortcode.php' );


/**
 * Flush rewrite rules on activation and deactivation
 */
function gmt_reusable_content_flush_rewrites() {
	gmt_reusable_content_add_custom_post_type();
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );
register_activation_hook( __FILE__, 'gmt_reusable_content_flush_rewrites' );