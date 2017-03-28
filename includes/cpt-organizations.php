<?php

// Register Custom Post Type Organizations
function wphackathon_cpt_organizations() {

	$labels = array(
		'name'                  => _x( 'Organizations', 'Post Type General Name', $wph_textdomain ),
		'singular_name'         => _x( 'Organization', 'Post Type Singular Name', $wph_textdomain ),
		'menu_name'             => __( 'Organizations', $wph_textdomain ),
		'name_admin_bar'        => __( 'Organization', $wph_textdomain ),
		'archives'              => __( 'Organization Archives', $wph_textdomain ),
		'attributes'            => __( 'Organization Attributes', $wph_textdomain ),
		'parent_item_colon'     => __( 'Parent Organization:', $wph_textdomain ),
		'all_items'             => __( 'All Organizations', $wph_textdomain ),
		'add_new_item'          => __( 'Add New Organization', $wph_textdomain ),
		'add_new'               => __( 'Add New', $wph_textdomain ),
		'new_item'              => __( 'New Organization', $wph_textdomain ),
		'edit_item'             => __( 'Edit Organization', $wph_textdomain ),
		'update_item'           => __( 'Update Organization', $wph_textdomain ),
		'view_item'             => __( 'View Organization', $wph_textdomain ),
		'view_items'            => __( 'View Organizations', $wph_textdomain ),
		'search_items'          => __( 'Search Organization', $wph_textdomain ),
		'not_found'             => __( 'Not found', $wph_textdomain ),
		'not_found_in_trash'    => __( 'Not found in Trash', $wph_textdomain ),
		'featured_image'        => __( 'Featured Image', $wph_textdomain ),
		'set_featured_image'    => __( 'Set featured image', $wph_textdomain ),
		'remove_featured_image' => __( 'Remove featured image', $wph_textdomain ),
		'use_featured_image'    => __( 'Use as featured image', $wph_textdomain ),
		'insert_into_item'      => __( 'Insert into Organization', $wph_textdomain ),
		'uploaded_to_this_item' => __( 'Uploaded to this Organization', $wph_textdomain ),
		'items_list'            => __( 'Organizations list', $wph_textdomain ),
		'items_list_navigation' => __( 'Organizations list navigation', $wph_textdomain ),
		'filter_items_list'     => __( 'Filter Organizations list', $wph_textdomain ),
	);
	$args = array(
		'label'                 => __( 'Organization', $wph_textdomain ),
		'description'           => __( 'Post Type Description', $wph_textdomain ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-sos',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'organization', $args );

}
add_action( 'init', 'wphackathon_cpt_organizations', 0 );
