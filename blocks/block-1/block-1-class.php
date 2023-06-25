<?php

class Block_1_Class
{

	public function init()
	{
		// Add actions, filters, and other initialization here.
		add_action('init', array($this, 'register_block_1'));
	}

	public function register_block_1()
	{
		// automatically load dependencies and version
		$asset_file = include(plugin_dir_path(__FILE__) . 'build/index.asset.php');

		wp_register_script(
			'wp-gutenberg-practice-plugin-block-1', // handle
			plugins_url('build/index.js', __FILE__), // block.js: We register the block here.
			$asset_file['dependencies'], // dependencies, defined in the asset file
			$asset_file['version']
		);

		register_block_type('wp-gutenberg-practice-plugin/block-1', array(
			'editor_script' => 'wp-gutenberg-practice-plugin-block-1', // Handle of the registered script.
		));
	}
}
