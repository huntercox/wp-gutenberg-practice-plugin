<?php
/*
Plugin Name: wp-gutenberg-practice-plugin
Description: A Gutenberg block development plugin
Version: 1.0
Author: Hunter Cox
AuthrURI: https://huntercox.dev
*/

// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}

// Define constants.
define('HSC_GUTENBERG_PRACTICE_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('HSC_GUTENBERG_PRACTICE_PLUGIN_URL', plugin_dir_url(__FILE__));

// Require init class.
require_once HSC_GUTENBERG_PRACTICE_PLUGIN_PATH . 'inc/class-plugin-init.php';

// Call init class.
$init_class = new Plugin_Init();
$init_class->init();
