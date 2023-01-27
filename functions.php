<?php


//  enque all style sheets 
function mytheme_scripts()
{
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_scripts');
function wp_theme_setup()
{

	register_nav_menus(
		array(
			'primary' => 'Primary Menu',
			'secondary_menu' => 'Footer Menu'

		)
	);
	//  Feature image option added on admin
	add_theme_support('post-thumbnails');
	// add header logo image options customizer
	add_theme_support('custom-header');
	register_sidebar(
		array(
			'name' => __('Primary Sidebar', 'magazine'),
			'id' => 'primary_sidebar',
			'before_widget' => '<div id="%1$s" class="sidebar-%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);
	// Footer sidebar
	register_sidebar(
		array(
			'name' => __('Footer-3', 'magazine'),
			'id' => 'footer-3',
			'before_widget' => '<ul class="footer__sidebar-3"><li id="footer-3-%2$s" >',
			'after_widget' => '</li></ul>',
			'before_title' => '<h3 class="Quick Links">',
			'after_title' => '</h3>',
		)
	);
	// Footer sidebar
	register_sidebar(
		array(
			'name' => __('Footer-1', 'theme_name'),
			'id' => 'footer-1',
			'before_widget' => '<div class="footer-1"><p id="footer-1-%2$s" >',
			'after_widget' => '</p></div>',
			'before_title' => '<h3 class="Quick Links">',
			'after_title' => '</h3>',
		)
	);
	// Footer sidebar
	register_sidebar(
		array(
			'name' => __('Footer-2', 'theme_name'),
			'id' => 'footer-2',
			'before_widget' => '<ul class="footer-2"><li id="footer-%2$s" >',
			'after_widget' => '</li></ul>',
			'before_title' => '<h3 class="Quick Links">',
			'after_title' => '</h3>',
		)
	);
	// Footer sidebar
	register_sidebar(
		array(
			'name' => __('Footer-4', 'theme_name'),
			'id' => 'footer-4',
			'before_widget' => '<div class="footer__sidebar-4"><li id="footer-4-%1$s" >',
			'after_widget' => '</div></div>',
			'before_title' => '<h3 class="%1$s">',
			'after_title' => '</h3>',
		)
	);
	//  custom body background image 
	add_theme_support('custom-background');

	// support for dynamic title
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'wp_theme_setup');
// add customizer setting from theme-custom.php
require get_template_directory() . '/inc/colors/custom-color.php';


// add customizer setting for typography
require get_template_directory() . '/inc/typography/custom-typo.php';

//  include custom post types 
require get_template_directory() . '/inc/custom_post_types.php';


//  include sider setting 
require get_template_directory() . '/inc/sidebar/sidebar_setting.php';