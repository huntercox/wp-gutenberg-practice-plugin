<?php

class Plugin_Init
{
	public function __construct()
	{
		add_action('init', array($this, 'init'));
	}

	// The function to run all other functions.
	public function init()
	{
		register_post_meta(null, 'block_1_meta', array(
			'show_in_rest' => true,
			'single' => true,
			'type' => 'string',
		));

		$this->load_classes();
	}

	// Loading all block classes.
	private function load_classes()
	{
		// Block 1.
		require_once HSC_GUTENBERG_PRACTICE_PLUGIN_PATH . 'blocks/block-1/block-1-class.php';
		$block_1 = new Block_1_Class();
		$block_1->init();
	}
}
