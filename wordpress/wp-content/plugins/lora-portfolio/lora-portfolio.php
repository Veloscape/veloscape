<?php
/**
 * Plugin Name: Lora Portfolio Post Type
 * Plugin URI:
 * Description: Portfolio custom post type.
 * Version: 1.0.0
 * Author: Caden Grant
 * Author URI: http://www.themeforest.net/user/CadenGrant
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function portfolio_post_type() {

	$labels = array(
		'name' => _x( 'Portfolio Items', 'lora' ),
		'singular_name' => _x( 'Item', 'lora' ),
		'menu_name' => _x( 'Portfolio', 'lora' ),
		'view_item' => _x( 'View Item', 'lora' )
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'rewrite' => array('slug' => 'portfolio-item'),
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'register_meta_box_cb' => 'lora_add_meta_box'
	);

	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'portfolio_post_type' );

function rewrite_flush() {
	portfolio_post_type();
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'rewrite_flush' );