<?php
// Register Custom Post Type
function servicescard() {

	$labels = array(
		'name'                  => _x( 'Services Card', 'Post Type General Name', 'services card' ),
		'singular_name'         => _x( 'Services Card', 'Post Type Singular Name', 'services card' ),
		'menu_name'             => __( 'Services Card', 'services card' ),
		'name_admin_bar'        => __( 'Services Card', 'services card' ),
		'archives'              => __( 'Item Archives', 'services card' ),
		'attributes'            => __( 'Item Attributes', 'services card' ),
		'parent_item_colon'     => __( 'Parent Item:', 'services card' ),
		'all_items'             => __( 'All Items', 'services card' ),
		'add_new_item'          => __( 'Add New Item', 'services card' ),
		'add_new'               => __( 'Add New', 'services card' ),
		'new_item'              => __( 'New Item', 'services card' ),
		'edit_item'             => __( 'Edit Item', 'services card' ),
		'update_item'           => __( 'Update Item', 'services card' ),
		'view_item'             => __( 'View Item', 'services card' ),
		'view_items'            => __( 'View Items', 'services card' ),
		'search_items'          => __( 'Search Item', 'services card' ),
		'not_found'             => __( 'Not found', 'services card' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'services card' ),
		'featured_image'        => __( 'Featured Image', 'services card' ),
		'set_featured_image'    => __( 'Set featured image', 'services card' ),
		'remove_featured_image' => __( 'Remove featured image', 'services card' ),
		'use_featured_image'    => __( 'Use as featured image', 'services card' ),
		'insert_into_item'      => __( 'Insert into item', 'services card' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'services card' ),
		'items_list'            => __( 'Items list', 'services card' ),
		'items_list_navigation' => __( 'Items list navigation', 'services card' ),
		'filter_items_list'     => __( 'Filter items list', 'services card' ),
	);
	$args = array(
		'label'                 => __( 'Services Card', 'services card' ),
		'description'           => __( 'Post Type Description', 'services card' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-list-view',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'servicescard', $args );

}
add_action( 'init', 'servicescard', 0 );
?>