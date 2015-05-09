<?php

function lora_admin_scripts() {
	global $typenow;

	if( $typenow == 'post' || $typenow == 'page' ) {
		wp_enqueue_script( 'admin', get_template_directory_uri() . '/admin/js/admin.js', array(), '', true );
	}
}
add_action( 'admin_print_scripts', 'lora_admin_scripts' );

function lora_add_meta_box() {
	$screens = array( 'post', 'page' );
	$types = array( 'post', 'page', 'portfolio' );

	foreach( $types as $type ) {
		add_meta_box(
			'lora-bg-image',
			__( 'Background Options', 'lora' ),
			'lora_bg_image',
			$type,
			'normal',
			'high'
		);
	}

	foreach( $screens as $screen ) {
		add_meta_box(
			'lora-page-desc',
			__( 'Page Options', 'lora' ),
			'lora_page_desc',
			$screen,
			'normal',
			'high'
		);
	}

	add_meta_box(
		'lora-page-layout',
		__( 'Layout Options', 'lora' ),
		'lora_page_layout',
		'post',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'lora_add_meta_box' );

/**
 * Prints the background options fields
 *
 * @param WP_Post $post The object for the current post/page.
 */
function lora_bg_image( $post ) {

	global $typenow;

	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'lora_meta_box', 'lora_meta_box_nonce' );

	/*
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$style = get_post_meta( $post->ID, 'bgimage_style', true );

	if( !$style ) {
		$style = 'background';
	}

	$overlay = get_post_meta( $post->ID, 'enable_overlay', true );

	if( !$overlay ) {
		$overlay = 'yes';
	}

	$parallax = get_post_meta( $post->ID, 'enable_parallax', true );

	if( !$parallax ) {
		$parallax = 'yes';
	}

	$fullscreen = get_post_meta( $post->ID, 'enable_fs_image', true );

	if( !$fullscreen ) {
		if( $typenow == 'post' || $typenow == 'portfolio' ) {
			$fullscreen = 'yes';
		} else {
			$fullscreen = 'no';
		}
	}

	$color = get_post_meta( $post->ID, 'bg_text_color', true );

	if( !$color ) {
		$color = 'light';
	}

	/* Featured Image Style */
	echo '<label for="bgimage_style">';
	_e( 'Featured Image/Video Style:', 'lora' );
	echo '</label><br />';
	echo '<select id="bgimage_style" name="bgimage_style">';
	echo '<option value="background" ' . selected( $style, 'background', false ) . '>Background Image/Video</option>';
	echo '<option value="standard" ' . selected( $style, 'standard', false ) . '>Standard</option>';
	echo '</select><br /><br />';

	/* Enable Parallax */
	echo '<div class="bgimage_height">';

	echo '<label for="enable_overlay">';
	_e( 'Enable Overlay:', 'lora' );
	echo '</label><br />';
	echo '<span class="howto">If enabled, background images will have an overlay. This allows text to be more easily read.</span>';
	echo '<input name="enable_overlay" type="radio" value="yes" ' . checked( $overlay, 'yes', false ) . '>Yes ';
	echo '<input name="enable_overlay" type="radio" value="no" ' . checked( $overlay, 'no', false ) . '>No<br /><br /> ';
	
	echo '<label for="enable_parallax">';
	_e( 'Enable Parallax:', 'lora' );
	echo '</label><br />';
	echo '<input name="enable_parallax" type="radio" value="yes" ' . checked( $parallax, 'yes', false ) . '>Yes ';
	echo '<input name="enable_parallax" type="radio" value="no" ' . checked( $parallax, 'no', false ) . '>No<br /><br /> ';

	/* Fullscreen Image */
	echo '<label for="enable_fs_image">';
	_e( 'Fullscreen Image:', 'lora' );
	echo '</label><br />';
	echo '<input name="enable_fs_image" type="radio" value="yes" ' . checked( $fullscreen, 'yes', false ) . '>Yes ';
	echo '<input name="enable_fs_image" type="radio" value="no" ' . checked( $fullscreen, 'no', false ) . '>No<br /><br /> ';

	/* Title Color */
	echo '<label for="bg_text_color">';
	_e( 'Page Color Scheme:', 'lora' );
	echo '</label><br />';
	echo '<select id="bg_text_color" name="bg_text_color">';
	echo '<option value="light" ' . selected( $color, 'light', false ) . '>Light</option>';
	echo '<option value="dark" ' . selected( $color, 'dark', false ) . '>Dark</option>';
	echo '</select><br /><br />';
	echo '</div><!-- end .bgimage_height -->';

}

/**
 * Prints the page layout fields
 *
 * @param WP_Post $post The object for the current post/page.
 */
function lora_page_layout( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'lora_meta_box', 'lora_meta_box_nonce' );

	/*
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$layout = get_post_meta( $post->ID, 'page_layout', true );

	if( !$layout ) {
		$layout = 'fullwidth';
	}

	/* Featured Image Style */
	echo '<label for="page_layout">';
	_e( 'Page Layout:', 'lora' );
	echo '</label><br />';
	echo '<select id="page_layout" name="page_layout">';
	echo '<option value="fullwidth" ' . selected( $layout, 'fullwidth', false ) . '>Fullwidth</option>';
	echo '<option value="sidebar" ' . selected( $layout, 'sidebar', false ) . '>Sidebar</option>';
	echo '</select><br /><br />';
}

/**
 * Prints the page options field
 *
 * @param WP_Post $post The object for the current post/page.
 */
function lora_page_desc( $post ) {
	global $typenow;

	wp_nonce_field( 'lora_meta_box', 'lora_meta_box_nonce' );

	$desc = get_post_meta( $post->ID, 'page_desc', true );

	if( isset( $desc ) ) {
		$description = $desc;
	}

	/* Page Description */
	echo '<label for="page_layout">';

	if( $typenow == 'post' ) {
		_e( 'Post Subtitle:', 'lora' );
	} elseif( $typenow == 'page' ) {
		_e( 'Page Subtitle:', 'lora' );
	}
	echo '</label><br />';
	echo '<textarea cols="80" name="page_desc">' . $description . '</textarea>';
}

function lora_save_meta_box_data( $post_id ) {
	
	global $typenow;

	// Check if our nonce is set.
	if ( ! isset( $_POST['lora_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['lora_meta_box_nonce'], 'lora_meta_box' ) ) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}

	} else {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	/* OK, it's safe for us to save the data now. */

	if( $typenow == 'post' ) {
		if ( ! isset( $_POST['page_layout'] ) ) {
			return;
		}
	}

	if( $typenow != 'portfolio' ) {
		if ( ! isset( $_POST['page_desc'] ) ) {
			return;
		}
	}

	if ( ! isset( $_POST['enable_fs_image'] ) ) {
		return;
	}

	if ( ! isset( $_POST['bgimage_style'] ) ) {
		return;
	}

	if( ! isset( $_POST['enable_overlay'] ) ) {
		return;
	}

	if ( ! isset( $_POST['enable_parallax'] ) ) {
		return;
	}

	if ( ! isset( $_POST['bg_text_color'] ) ) {
		return;
	}
	
	if( isset( $_POST['page_layout'] ) )
		$layout = sanitize_text_field( $_POST['page_layout'] );

	if( $typenow != 'portfolio' ) {
		$desc = sanitize_text_field( $_POST['page_desc'] );
	}

	$style = sanitize_text_field( $_POST['bgimage_style'] );
	$overlay = sanitize_text_field( $_POST['enable_overlay'] );
	$parallax = sanitize_text_field( $_POST['enable_parallax'] );
	$fullscreen = sanitize_text_field( $_POST['enable_fs_image'] );
	$color = sanitize_text_field( $_POST['bg_text_color'] );

	if( $typenow == 'post' ) {
		update_post_meta( $post_id, 'page_layout', $layout );
	}

	if( $typenow != 'portfolio' ) {
		update_post_meta( $post_id, 'page_desc', $desc );
	}

	update_post_meta( $post_id, 'enable_overlay', $overlay );
	update_post_meta( $post_id, 'enable_parallax', $parallax );
	update_post_meta( $post_id, 'bgimage_style', $style );
	update_post_meta( $post_id, 'enable_fs_image', $fullscreen );
	update_post_meta( $post_id, 'bg_text_color', $color );
}
add_action( 'save_post', 'lora_save_meta_box_data' );