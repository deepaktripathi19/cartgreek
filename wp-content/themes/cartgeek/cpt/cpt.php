<?php
/*=========================Below CPT is for Platform section in homepage=======================================================*/
add_action( 'init', 'platform_register_post_type' );
function platform_register_post_type() {
	$args = [
		'label'  => esc_html__( 'Platform', 'cartgreek' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Platform', 'cartgreek' ),
			'name_admin_bar'     => esc_html__( 'Platform', 'cartgreek' ),
			'add_new'            => esc_html__( 'Add Platform', 'cartgreek' ),
			'add_new_item'       => esc_html__( 'Add new Platform', 'cartgreek' ),
			'new_item'           => esc_html__( 'New Platform', 'cartgreek' ),
			'edit_item'          => esc_html__( 'Edit Platform', 'cartgreek' ),
			'view_item'          => esc_html__( 'View Platform', 'cartgreek' ),
			'update_item'        => esc_html__( 'View Platform', 'cartgreek' ),
			'all_items'          => esc_html__( 'All Platform', 'cartgreek' ),
			'search_items'       => esc_html__( 'Search Platform', 'cartgreek' ),
			'parent_item_colon'  => esc_html__( 'Parent Platform', 'cartgreek' ),
			'not_found'          => esc_html__( 'No Platform found', 'cartgreek' ),
			'not_found_in_trash' => esc_html__( 'No Platform found in Trash', 'cartgreek' ),
			'name'               => esc_html__( 'Platform', 'cartgreek' ),
			'singular_name'      => esc_html__( 'Platform', 'cartgreek' ),
		],
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
		'supports' => [
			'title',
			'editor',
			'thumbnail',
		],
		
		'rewrite' => true
	];

	register_post_type( 'platform', $args );
}
/*==================================================================END=======================================================*/

/*===================================================Below CPT is for Platform section in homepage=======================================================*/
add_action( 'init', 'testimonial_register_post_type' );
function testimonial_register_post_type() {
	$args = [
		'label'  => esc_html__( 'Testimonial', 'cartgreek' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Testimonial', 'cartgreek' ),
			'name_admin_bar'     => esc_html__( 'Testimonial', 'cartgreek' ),
			'add_new'            => esc_html__( 'Add Testimonial', 'cartgreek' ),
			'add_new_item'       => esc_html__( 'Add new Testimonial', 'cartgreek' ),
			'new_item'           => esc_html__( 'New Testimonial', 'cartgreek' ),
			'edit_item'          => esc_html__( 'Edit Testimonial', 'cartgreek' ),
			'view_item'          => esc_html__( 'View Testimonial', 'cartgreek' ),
			'update_item'        => esc_html__( 'View Testimonial', 'cartgreek' ),
			'all_items'          => esc_html__( 'All Testimonial', 'cartgreek' ),
			'search_items'       => esc_html__( 'Search Testimonial', 'cartgreek' ),
			'parent_item_colon'  => esc_html__( 'Parent Testimonial', 'cartgreek' ),
			'not_found'          => esc_html__( 'No Testimonial found', 'cartgreek' ),
			'not_found_in_trash' => esc_html__( 'No Testimonial found in Trash', 'cartgreek' ),
			'name'               => esc_html__( 'Testimonial', 'cartgreek' ),
			'singular_name'      => esc_html__( 'Testimonial', 'cartgreek' ),
		],
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
		'supports' => [
			'title',
			'editor',
			'thumbnail',
		],
		
		'rewrite' => true
	];

	register_post_type( 'testimonial', $args );
}

/*==================================================END=======================================================*/