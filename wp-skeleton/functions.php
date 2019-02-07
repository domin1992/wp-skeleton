<?php

// ******************************************* //
// Uncomment frgment of code you want to use   //
// ******************************************* //

// =========================================== //
// register menu                               //
// =========================================== //
/*
add_action('init', 'wp_skeleton_registerMenus');

function wp_skeleton_registerMenus(){
    register_nav_menus(
        array(
            'primary' => __('Primary')
        )
    );
}
*/
// ------------------------------------------- //

// =========================================== //
// register admin menu theme settings          //
// =========================================== //
/*
add_action('admin_menu', 'wp_skeleton_registerThemeSettings');

function wp_skeleton_registerThemeSettings(){
	add_menu_page('Theme menu', 'Theme menu', 'manage_options', 'theme_menu', 'wp_skeleton_themeSettings', 'dashicons-admin-home', 60);
    add_action('admin_init', 'wp_skeleton_registerStringsSettings');
}

function wp_skeleton_registerStringsSettings(){
    // register_setting('wp-skeleton-theme-settings', 'top_contact_info');
}

function wp_skeleton_themeSettings(){
    include('admin/theme-menu.php');
}
*/
// ------------------------------------------- //

// =========================================== //
// shortcode: [foobar]                         //
// =========================================== //
/*
add_shortcode('wp_skeleton_example', 'wp_skeleton_exampleShortcode');

function wp_skeleton_exampleShortcode($atts){
	return "Example shortcode";
}
*/
// ------------------------------------------- //

// =========================================== //
// Register sidebars                           //
// =========================================== //
/*
function wp_skeleton_registerSidebars(){
	register_sidebar(array(
		'name'          => 'Example sidebar',
		'id'            => 'example_sidebar',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	));
}
add_action('widgets_init', 'wp_skeleton_registerSidebars');
*/
// ------------------------------------------- //

// =========================================== //
// Register widgets                            //
// =========================================== //
/*
// require __DIR__.'/widgets/my-custom-widget.php';

function wp_skeleton_registerWidgets(){
	// register_widget('MyCustomWidget');
}
add_action('widgets_init', 'wp_skeleton_registerWidgets');
*/
// ------------------------------------------- //

// =========================================== //
// Custom image sizes                          //
// =========================================== //
/*
function wp_skeleton_registerImageSizes(){
    add_image_size('example', 750, 750, true);
}
add_action('init', 'wp_skeleton_registerImageSizes');
*/
// ------------------------------------------- //

// =========================================== //
// Add theme support post thumbnails           //
// =========================================== //
/*
add_theme_support('post-thumbnails');
*/
// ------------------------------------------- //

// =========================================== //
// Enqueue assets                              //
// =========================================== //
/*
function wp_skeleton_enqueueStyles(){
    wp_enqueue_style('master', get_template_directory_uri().'/css/master.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}
function wp_skeleton_enqueueScripts(){
    // for newer jquery
    if(!is_admin() && !is_login_page()){
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'http://code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true);
    }
    wp_enqueue_script('master', get_template_directory_uri().'/js/master.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wp_skeleton_enqueueStyles');
add_action('wp_enqueue_scripts', 'wp_skeleton_enqueueScripts');
*/
// ------------------------------------------- //

// =========================================== //
// Check if current page is login page         //
// =========================================== //
/*
function is_login_page(){
    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}
*/
// ------------------------------------------- //

// =========================================== //
// Register custom post type                   //
// =========================================== //
/*
function wp_skeleton_registerCustomPostType(){
    $labels = array(
        'name' => 'Projekty',
        'singular_name' => 'Projekt',
        'menu_name' => 'Projekty',
        'name_admin_bar' => 'Projekt',
        'add_new' => 'Dodaj nowy',
        'add_new_item' => 'Dodaj nowy projekt',
        'new_item' => 'Nowy projekt',
        'edit_item' => 'Edytuj projekt',
        'view_item' => 'Zobacz projekt',
        'all_items' => 'Wszystkie projekty',
        'search_items' => 'Szukaj projekty',
        'parent_item_colon' => 'Nadrzędne projekty',
        'not_found' => 'Nie znaleziono projekty',
        'not_found_in_trash' => 'Nie znaleziono projekty w koszu',
        'featured_image' => 'Okładka projekty',
        'set_featured_image' => 'Ustaw okładkę projekty',
        'remove_featured_image' => 'Usuń okładkę projekty',
        'use_featured_image' => 'Użyj jako okładkę projekty',
        'archives' => 'Archiwa projektów',
        'insert_into_item' => 'Wstaw do projekty',
        'uploaded_to_this_item' => 'Wyślij do tego projekty',
        'filter_items_list' => 'Filtruj projekty',
        'items_list_navigation' => 'Lista nawigacyjna projektów',
        'items_list' => 'Lista projektów',
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'projekt'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
    );
    register_post_type('project', $args);
}
add_action('init', 'wp_skeleton_registerCustomPostType');
*/
// ------------------------------------------- //

// =========================================== //
// Allow custom mime types                     //
// =========================================== //
/*
function wp_skeleton_allowMimeTypes($mimes){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'wp_skeleton_allowMimeTypes');
*/
// ------------------------------------------- //

// =========================================== //
// Youtube video wrap in container             //
// =========================================== //
/*
function wp_skeleton_process_youtube_video($content){
    $content = preg_replace('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', '<div class="youtube-video-container">${0}</div>', $content);
    return $content;
}
add_filter('the_content', 'wp_skeleton_process_youtube_video');
*/
// ------------------------------------------- //

// =========================================== //
// Get custom ACF field                        //
// =========================================== //
/*
function wp_skeleton_getAcfCustomField($postId, $fieldName){
    $field = get_field($fieldName, $postId);
    if($field != '' && $field != NULL){
        return $field;
    }
    else{
        return null;
    }
}
*/
// ------------------------------------------- //

// =========================================== //
// Remove prefix from archive title            //
// =========================================== //
/*
function wp_skeleton_removePrefixFromArchiveTitle($title){
    if(is_category()){
        $title = single_cat_title('', false);
    }
    elseif(is_archive()){
        return post_type_archive_title();
    }
    elseif(is_tag()){
        $title = single_tag_title('', false);
    }
    elseif(is_author()){
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    }
    return $title;
}
add_filter('get_the_archive_title', 'wp_skeleton_removePrefixFromArchiveTitle');
*/
// ------------------------------------------- //

// =========================================== //
// Check if is blog page                       //
// =========================================== //
/*
function is_blog(){
    return (is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}
*/
// ------------------------------------------- //