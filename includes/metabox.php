<?php

	/**
	 * Create the metabox
	 */
	function gmt_reusable_content_create_metabox() {
		add_meta_box( 'gmt_reusable_content_metabox_shortcode', __( 'Snippet Shortcode', 'gmt_reusable_content' ), 'gmt_reusable_content_render_metabox_shortcode', 'gmt_snippets', 'side', 'default');
	}
	add_action( 'add_meta_boxes', 'gmt_reusable_content_create_metabox' );



	/**
	 * Render the metabox
	 */
	function gmt_reusable_content_render_metabox_shortcode() {

		// Variables
		global $post;

		?>

			<fieldset>

				<input type="text" class="large-text" readonly value="[snippet id=&quot;<?php echo $post->ID ?>&quot;]">
				<label for="snippet-shortcode"><?php _e( 'The shortcode for this snippet', 'gmt_reusable_content' ) ?></label>

			</fieldset>

		<?php

		wp_nonce_field( 'gmt_reusable_content_metabox_price_nonce', 'gmt_reusable_content_metabox_price_process' );
	}