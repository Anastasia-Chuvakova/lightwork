<?php
// Register Custom Post Type
function workshop() {

	$labels = array(
		'name'                  => _x( 'Workshops', 'Post Type General Name', 'workshop' ),
		'singular_name'         => _x( 'Workshop', 'Post Type Singular Name', 'workshop' ),
		'menu_name'             => __( 'Workshop', 'workshop' ),
		'name_admin_bar'        => __( 'Workshop', 'workshop' ),
		'archives'              => __( 'Item Archives', 'workshop' ),
		'attributes'            => __( 'Item Attributes', 'workshop' ),
		'parent_item_colon'     => __( 'Parent Item:', 'workshop' ),
		'all_items'             => __( 'All Items', 'workshop' ),
		'add_new_item'          => __( 'Add New Item', 'workshop' ),
		'add_new'               => __( 'Add New', 'workshop' ),
		'new_item'              => __( 'New Item', 'workshop' ),
		'edit_item'             => __( 'Edit Item', 'workshop' ),
		'update_item'           => __( 'Update Item', 'workshop' ),
		'view_item'             => __( 'View Item', 'workshop' ),
		'view_items'            => __( 'View Items', 'workshop' ),
		'search_items'          => __( 'Search Item', 'workshop' ),
		'not_found'             => __( 'Not found', 'workshop' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'workshop' ),
		'featured_image'        => __( 'Featured Image', 'workshop' ),
		'set_featured_image'    => __( 'Set featured image', 'workshop' ),
		'remove_featured_image' => __( 'Remove featured image', 'workshop' ),
		'use_featured_image'    => __( 'Use as featured image', 'workshop' ),
		'insert_into_item'      => __( 'Insert into item', 'workshop' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'workshop' ),
		'items_list'            => __( 'Items list', 'workshop' ),
		'items_list_navigation' => __( 'Items list navigation', 'workshop' ),
		'filter_items_list'     => __( 'Filter items list', 'workshop' ),
	);
	$args = array(
		'label'                 => __( 'Workshop', 'workshop' ),
		'description'           => __( 'Post Type Description', 'workshop' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'workshop', $args );

}
add_action( 'init', 'workshop', 0 );
?>