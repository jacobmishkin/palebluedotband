<?php
// Register Custom Post Type
function music_post_type() {

	$labels = array(
		'name'                  => _x( 'music', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'music', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'music', 'text_domain' ),
		'name_admin_bar'        => __( 'music', 'text_domain' ),
		'archives'              => __( 'music Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent music:', 'text_domain' ),
		'all_items'             => __( 'All music', 'text_domain' ),
		'add_new_item'          => __( 'Add New music', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New music', 'text_domain' ),
		'edit_item'             => __( 'Edit music', 'text_domain' ),
		'update_item'           => __( 'Update music', 'text_domain' ),
		'view_item'             => __( 'View music', 'text_domain' ),
		'search_items'          => __( 'Search music', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into music', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this music', 'text_domain' ),
		'items_list'            => __( 'music list', 'text_domain' ),
		'items_list_navigation' => __( 'music list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter music list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'music', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-audio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'music', $args );

}
add_action( 'init', 'music_post_type', 0 );