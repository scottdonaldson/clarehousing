<?php

// Navigation menus
register_nav_menus( array(
	'primary' => 'Primary Menu',
	'footer' => 'Footer Menu'
) );

// Featured images
add_theme_support('post-thumbnails');

// Editor style 
add_editor_style('css/editor-style.css');

// Admin style

function my_admin_head() {
    echo '<link rel="stylesheet" type="text/css" href="' .get_bloginfo('template_url').'/css/admin-style.css">';
}

add_action('admin_head', 'my_admin_head');


// Excerpt length and "more"
function custom_excerpt_length( $length ) {
	return 35;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


/* ------ Remove a few admin pages ----- */

function remove_admin() {
	remove_menu_page('link-manager.php');
	remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_admin');


// Admin footer

add_filter('admin_footer_text', 'left_admin_footer_text_output'); //left side
function left_admin_footer_text_output($text) {
    $text = 'Site developed by <a href="http://parsleyandsprouts.com" target="_blank">Parsley &amp Sprouts</a>.';
    return $text;
}
 
add_filter('update_footer', 'right_admin_footer_text_output', 11); //right side
function right_admin_footer_text_output($text) {
    $text = '&copy 2012.';
    return $text;
}

// Sidebar on blog

register_sidebar(array(
  'name' => __( 'Front Door Sidebar' ),
  'id' => 'front-door-sidebar',
  'description' => __( 'Shows up on the right-hand column of all Front Door posts.' ),
  'before_title' => '<h3 class="entry-title maroon">',
  'after_title' => '</h3>'
));

// Custom taxonomy for roles

function role_init() {
	// create a new taxonomy
	register_taxonomy(
		'role',
		'profile',
		array(
			'labels' => array(
				'name' => __( 'Roles' ),
				'singular name' => __( 'Role' ),
				'add_new_item' => __( 'Add New Role' ),
				'edit_item' => __( 'Edit Role' ),
				'new_item' => __( 'New Role' ),
				'view_item' => __( 'View Role' ),
				'search_items' => __( 'Search Roles' ),
				'not_found' => __( 'No roles found' ),
				'not_found_in_trash' => __( 'No roles found in Trash' ),
				),
			'hierarchical' => true,
			'sort' => true,
			'args' => array( 'orderby' => 'term_order' ),
			'rewrite' => array( 'slug' => 'role' )
		)
	);
}
add_action( 'init', 'role_init' );

// Custom post types (Profile, Front Door, and Banner)
function create_post_types() {
	register_post_type( 'profile',
		array(
			'labels' => array(
				'name' => __( 'Profiles' ),
				'singular_name' => __( 'Profile' ),
				'add_new_item' => __( 'Add New Profile' ),
				'edit_item' => __( 'Edit Profile' ),
				'new_item' => __( 'New Profile' ),
				'view_item' => __( 'View Profile' ),
				'search_items' => __( 'Search Profiles' ),
				'not_found' => __( 'No profiles found' ),
				'not_found_in_trash' => __( 'No profiles found in Trash' )
			),
		'public' => true,
		'menu_position' => 4,
		'supports' => array(
			'title','editor','thumbnail','excerpt'
			),
		'taxonomies' => array(
			'role'
			)
		)
	); 
	register_post_type( 'front-door',
		array(
			'labels' => array(
				'name' => __( 'Front Door' ),
				'singular_name' => __( 'Front Door' ),
			),
		'public' => true,
		'menu_position' => 4,
		'supports' => array(
			'title','author','editor','thumbnail','excerpt'
			)
		)
	);
	register_post_type( 'banner',
		array(
			'labels' => array(
				'name' => __( 'Banner Items' ),
				'singular_name' => __( 'Banner Item' ),
				'add_new_item' => __( 'Add New Banner Item' ),
				'edit_item' => __( 'Edit Banner Item' ),
				'new_item' => __( 'New Banner Item' ),
				'view_item' => __( 'View Banner Item' ),
				'search_items' => __( 'Search Banner Items' ),
				'not_found' => __( 'No banner items found' ),
				'not_found_in_trash' => __( 'No banner items found in Trash' )
			),
		'public' => true,
		'menu_position' => 4,
		'supports' => array(
			'title','thumbnail'
			)
		)
	); 
}
add_action( 'init', 'create_post_types' );

// Featured images on edit.php

function show_featured_image_post_column( $defaults ) {
       $defaults['featuredimage'] = __('Featured Image') ;
    	return $defaults;
}
add_filter('manage_posts_columns', 'show_featured_image_post_column');

function edit_featured_images($column_name, $id) {
    if( $column_name == 'featuredimage' && has_post_thumbnail()) {
        the_post_thumbnail('medium');
        echo "<div class=\"row-actions\"><span class='edit'>";
        echo '<a href="'. admin_url() . 'media-upload.php?post_id=163media.php?attachment_id=' . $id . '&type=image&TB_iframe=1">' . __( 'Edit' ) . '</a>';
        echo "</span></div>";
    }
}
add_action('manage_posts_custom_column', 'edit_featured_images', 10, 2);


// Custom login screen

function my_login_head() {
	echo "<link rel='stylesheet' href='".get_bloginfo('template_url')."/css/login-style.css' type='text/css'>";
}
add_action('login_head', 'my_login_head');

function loginpage_custom_link() {
	return 'http://www.clarehousing.org';
}
add_filter('login_headerurl','loginpage_custom_link');

function change_title_on_logo() {
	return 'Clare Housing';
}
add_filter('login_headertitle', 'change_title_on_logo');

?>