<?php 
	register_taxonomy( 'type', [ 'works' ], [
		'label'                 => 'Category', 
		'labels'                => [
			'name'              => 'Category',
			'singular_name'     => 'Category',
			'search_items'      => 'Search category',
			'all_items'         => 'All categories',
			'view_item '        => 'Watch categories',
			'parent_item'       => 'Parent category',
			'parent_item_colon' => 'Parent category:',
			'edit_item'         => 'Edit category',
			'update_item'       => 'Update category',
			'add_new_item'      => 'Add category',
			'new_item_name'     => 'New category name',
			'menu_name'         => 'Categories',
			'back_to_items'     => '← Back to categories',
		],
		'description'           => '',
		'public'                => true,
		'hierarchical'          => true,
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null,
		'show_admin_column'     => false,
		'show_in_rest'          => null,
		'rest_base'             => null,
	]);