<?php

/**
 * @package hsc_my_first_block
 *
 * @wordpress-plugin
 * Plugin Name: HSC My First Block
 * Description: Creating my first Gutenberg block.
 * Version: 1.0.0
 * Author: Hunter Cox
 * Author URI: www.huntercox.dev
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: hsc-my-first-block
 */
add_action('init', 'hsc_my_first_block_register_post_type');
function hsc_my_first_block_register_post_type()
{
	register_post_type(
		'product',
		array(
			'labels'       => array(
				'name'          => __('Products', 'tutorial'),
				'singular_name' => __('Product', 'tutorial'),
			),
			'public'       => true,
			'has_archive'  => true,
			'show_in_rest' => true,
			'supports'     => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'custom-fields',
			),
		)
	);
}

add_action('init', 'hsc_my_first_block_register_post_meta');
function hsc_my_first_block_register_post_meta()
{
	register_post_meta(
		'product', // post-type
		'testimonial', // meta-key
		array(
			'show_in_rest'       => true,
			'single'             => true,
			'type'               => 'string',
			'sanitize_callback'  => 'wp_kses_post',
		)
	);
}
