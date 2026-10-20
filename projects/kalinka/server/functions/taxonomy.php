<?php 
	register_taxonomy( 'service-cat', [ 'reviews' ], [
		'label'                 => 'Категории услуг', 
		'labels'                => [
			'name'              => 'Категории услуг',
			'singular_name'     => 'Услуга',
			'search_items'      => 'Поиск услуг',
			'all_items'         => 'Все услуги',
			'view_item '        => 'Смотреть услуги',
			'parent_item'       => 'Родительская услуга',
			'parent_item_colon' => 'Родительская услуга:',
			'edit_item'         => 'Редактировать услугу',
			'update_item'       => 'Обновить услугу',
			'add_new_item'      => 'Добавить услугу',
			'new_item_name'     => 'Имя новой услуги',
			'menu_name'         => 'Категории услуг',
			'back_to_items'     => '← Назад к услугам',
		],
		'description'           => 'Категория для отзывов',
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