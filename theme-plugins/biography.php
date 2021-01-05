<?php
// Register Custom Post Type
function biography() {

	$labels = array(
		'name'                  => _x( 'Biography', 'Post Type General Name', 'biography' ),
		'singular_name'         => _x( 'Biography', 'Post Type Singular Name', 'biography' ),
		'menu_name'             => __( 'Biography', 'biography' ),
		'name_admin_bar'        => __( 'Biography', 'biography' ),
		'archives'              => __( 'Item Archives', 'biography' ),
		'attributes'            => __( 'Item Attributes', 'biography' ),
		'parent_item_colon'     => __( 'Parent Item:', 'biography' ),
		'all_items'             => __( 'All Items', 'biography' ),
		'add_new_item'          => __( 'Add New Item', 'biography' ),
		'add_new'               => __( 'Add New', 'biography' ),
		'new_item'              => __( 'New Item', 'biography' ),
		'edit_item'             => __( 'Edit Item', 'biography' ),
		'update_item'           => __( 'Update Item', 'biography' ),
		'view_item'             => __( 'View Item', 'biography' ),
		'view_items'            => __( 'View Items', 'biography' ),
		'search_items'          => __( 'Search Item', 'biography' ),
		'not_found'             => __( 'Not found', 'biography' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'biography' ),
		'featured_image'        => __( 'Featured Image', 'biography' ),
		'set_featured_image'    => __( 'Set featured image', 'biography' ),
		'remove_featured_image' => __( 'Remove featured image', 'biography' ),
		'use_featured_image'    => __( 'Use as featured image', 'biography' ),
		'insert_into_item'      => __( 'Insert into item', 'biography' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'biography' ),
		'items_list'            => __( 'Items list', 'biography' ),
		'items_list_navigation' => __( 'Items list navigation', 'biography' ),
		'filter_items_list'     => __( 'Filter items list', 'biography' ),
	);
	$args = array(
		'label'                 => __( 'Biography', 'biography' ),
		'description'           => __( 'Post Type Description', 'biography' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-id',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'biography', $args );

}
add_action( 'init', 'biography', 0 );
?>