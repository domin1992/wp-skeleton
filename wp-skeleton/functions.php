<?php

// ******************************************* //
// Uncomment frgment of code you want to use   //
// ******************************************* //

// =========================================== //
// register menu                               //
// =========================================== //
/*
add_action('after_setup_theme', 'register_primary_menu');

function register_primary_menu(){
  register_nav_menu('primary', __('Primary', 'theme-slug'));
}
*/
// ------------------------------------------- //

// =========================================== //
// register admin menu theme settings          //
// =========================================== //
/*
add_action('admin_menu', 'register_my_custom_menu_page');

function register_my_custom_menu_page(){
	add_menu_page('Theme menu', 'Theme menu', 'manage_options', 'theme_menu', 'my_custom_menu_page', 'dashicons-admin-home', 60);
}

function my_custom_menu_page(){
  include('admin/theme-menu.php');
}
*/
// ------------------------------------------- //

// =========================================== //
// shortcode: [foobar]                         //
// =========================================== //
/*
add_shortcode('foobar', 'foobar_func');

function foobar_func($atts){
	return "foo and bar";
}
*/
// ------------------------------------------- //

// =========================================== //
// Register widgets                            //
// =========================================== //
/*
function register_widgets(){
	register_sidebar(array(
		'name'          => 'Example widget',
		'id'            => 'example_widget',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	));
}
add_action('widgets_init', 'register_widgets');
*/
// ------------------------------------------- //