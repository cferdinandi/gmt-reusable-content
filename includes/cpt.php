<?php

	/**
	 * Add custom post type for reusable content
	 */
	function gmt_reusable_content_add_custom_post_type() {

		$labels = array(
			'name'               => _x( 'Content Snippets', 'post type general name', 'gmt_reusable_content' ),
			'singular_name'      => _x( 'Content Snippet', 'post type singular name', 'gmt_reusable_content' ),
			'add_new'            => _x( 'Add New', 'keel-pets', 'gmt_reusable_content' ),
			'add_new_item'       => __( 'Add New Snippet', 'gmt_reusable_content' ),
			'edit_item'          => __( 'Edit Snippet', 'gmt_reusable_content' ),
			'new_item'           => __( 'New Snippet', 'gmt_reusable_content' ),
			'all_items'          => __( 'All Snippets', 'gmt_reusable_content' ),
			'view_item'          => __( 'View Snippet', 'gmt_reusable_content' ),
			'search_items'       => __( 'Search Snippets', 'gmt_reusable_content' ),
			'not_found'          => __( 'No snippets found', 'gmt_reusable_content' ),
			'not_found_in_trash' => __( 'No snippets found in the Trash', 'gmt_reusable_content' ),
			'parent_item_colon'  => '',
			'menu_name'          => __( 'Snippets', 'gmt_reusable_content' ),
		);
		$args = array(
			'labels'        => $labels,
			'description'   => 'Holds our snippets and snippet-specific data',
			'public'        => true,
			// 'menu_position' => 5,
			'menu_icon'     => 'dashicons-editor-paste-text',
			'hierarchical'  => false,
			'supports'      => array(
				'title',
				'editor',
				// 'thumbnail',
				// 'excerpt',
				'revisions',
				// 'page-attributes',
			),
			'has_archive'   => false,
			'query_var' => false,
			'rewrite' => array(
				'slug' => 'snippets',
			),
			// 'map_meta_cap'  => true,
			// 'capabilities' => array(
			// 	'create_posts' => false,
			// 	'edit_published_posts' => false,
			// 	'delete_posts' => false,
			// 	'delete_published_posts' => false,
			// )
		);
		register_post_type( 'gmt_snippets', $args );
	}
	add_action( 'init', 'gmt_reusable_content_add_custom_post_type' );