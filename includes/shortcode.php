<?php

/**
 * Plugin Name: GMT Reusable Content
 * Plugin URI: https://github.com/cferdinandi/gmt-reusable-content/
 * GitHub Plugin URI: https://github.com/cferdinandi/gmt-reusable-content/
 * Description: Create content snippets you can reuse with shortcodes.
 * Version: 1.0.0
 * Author: Chris Ferdinandi
 * Author URI: http://gomakethings.com
 * Text Domain: gmt_reusable_content
 * License: GPLv3
 */


	/**
	 * Adds the content snippet shortcode
	 * @param  array $atts The shortcode args
	 * @return string      The content snippet
	 */
	function gmt_reusable_content_shortcode( $atts ) {

		// Get shortcode atts
		$snippet = shortcode_atts( array(
			'id' => null,
		), $atts );

		// Make sure snippet ID is provided
		if ( empty( $snippet['id'] ) ) return;

		// Get the snippet content
		$get_snippet = get_post( $snippet['id'] );
		if ( empty( $get_snippet ) ) return;

		// Return the snippet content
		return wpautop( $get_snippet->post_content, false );

	}
	add_shortcode( 'snippet', 'gmt_reusable_content_shortcode' );