<?php
/**
 * Everlee Labs Child Theme functions and definitions
 *
 * @package Everlee_Labs_Child_Theme
 */

/**
 * Enqueue parent and child theme styles
 */
function el_child_theme_enqueue_styles() {
	// Enqueue parent theme stylesheet
	wp_enqueue_style(
		'el-theme-style',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->parent()->get('Version')
	);

	// Enqueue child theme stylesheet
	wp_enqueue_style(
		'el-child-theme-style',
		get_stylesheet_directory_uri() . '/style.css',
		array('el-theme-style'),
		wp_get_theme()->get('Version')
	);
}
add_action('wp_enqueue_scripts', 'el_child_theme_enqueue_styles');

