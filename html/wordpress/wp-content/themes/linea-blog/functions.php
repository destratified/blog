<?php
/**
 * functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package linea_blog
 */

if (!function_exists('linea_blog_setup')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function linea_blog_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Linea Blog, use a find and replace
		 * to change 'linea-blog' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('linea-blog', get_template_directory() . '/languages');
	}
endif; 
add_action('after_setup_theme', 'linea_blog_setup');

if (!function_exists('linea_blog_enqueue')):
	/**
	 * Enqueue theme styles and scripts
	 *
	 * @since 1.0
	 * @return void
	 */
	function linea_blog_enqueue()
	{
		// rtl style
		wp_enqueue_style('linea_blog-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
		wp_style_add_data('linea_blog-style', 'rtl', 'replace');

		// enqueue script
		wp_enqueue_script('linea_blog-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '', true);
	}
endif;
add_action('wp_enqueue_scripts', 'linea_blog_enqueue');

if (!function_exists('linea_blog_body_classes')):
	/**
	 * Adds custom classes to the array of body classes.
	 *
	 * @param array $classes Classes for the body element.
	 * @return array
	 */
	function linea_blog_body_classes($classes)
	{

		$classes[] = get_stylesheet();

		$theme = wp_get_theme();
		$classes[] = $theme->get('TextDomain');

		return $classes;
	}
endif;
add_filter('body_class', 'linea_blog_body_classes');

/**
 * Registers block patterns and categories.
 */
if (!function_exists('linea_blog_register_block_patterns')):
	/**
	 * Register pattern categories
	 *
	 * @since 1.0
	 * @return void
	 */
	function linea_blog_register_block_patterns()
	{

		register_block_pattern_category(
			'linea-blog',
			array(
				'label' => _x('Linea Blog', 'Block pattern category', 'linea-blog'),
			)
		);
	}
endif;

add_action('init', 'linea_blog_register_block_patterns');

/**
 * wpopus
 */
require get_template_directory() . '/inc/wpopus.php';
