<?php 
	register_post_type('works', [
		'label'  => null,
		'labels' => [
			'name'               => 'Works', // основное название для типа записи
			'singular_name'      => 'Work', // название для одной записи этого типа
			'add_new'            => 'Add new work', // для добавления новой записи
			'add_new_item'       => 'Add new work', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit work', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Watch list', // для просмотра записи этого типа.
			'search_items'       => 'Search', // для поиска по этим типам записи
			'not_found'          => 'Works not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Works', // название меню
		],
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-portfolio',
		'hierarchical'        => false,
		'has_archive'		  => true,
		'supports'            => [ 'title', 'editor', 'thumbnail']
	] );

	register_post_type('reviews', [
		'label'  => null,
		'labels' => [
			'name'               => 'Reviews', // основное название для типа записи
			'singular_name'      => 'Review', // название для одной записи этого типа
			'add_new'            => 'Add new review', // для добавления новой записи
			'add_new_item'       => 'Add new review', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit review', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Watch list', // для просмотра записи этого типа.
			'search_items'       => 'Search', // для поиска по этим типам записи
			'not_found'          => 'Reviews not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Reviews', // название меню
		],
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-star-half',
		'hierarchical'        => false,
		'has_archive'		  => true,
		'supports'            => [ 'title', 'editor', 'thumbnail']
	] );

	register_post_type('partners', [
		'label'  => null,
		'labels' => [
			'name'               => 'Partners', // основное название для типа записи
			'singular_name'      => 'Partner', // название для одной записи этого типа
			'add_new'            => 'Add new partner', // для добавления новой записи
			'add_new_item'       => 'Add new partner', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit partner', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Watch list', // для просмотра записи этого типа.
			'search_items'       => 'Search', // для поиска по этим типам записи
			'not_found'          => 'Partners not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Partners', // название меню
		],
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-businessperson',
		'hierarchical'        => false,
		'has_archive'		  => true,
		'supports'            => [ 'title', 'thumbnail']
	] );

	register_post_type('services', [
		'label'  => null,
		'labels' => [
			'name'               => 'Services', // основное название для типа записи
			'singular_name'      => 'Services', // название для одной записи этого типа
			'add_new'            => 'Add new service', // для добавления новой записи
			'add_new_item'       => 'Add new service', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit service', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Watch list', // для просмотра записи этого типа.
			'search_items'       => 'Search', // для поиска по этим типам записи
			'not_found'          => 'Services not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Services', // название меню
		],
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-admin-generic',
		'hierarchical'        => false,
		'has_archive'		  => true,
		'supports'            => [ 'title', 'editor', 'thumbnail']
	] );

	register_post_type('gallery', [
		'label'  => null,
		'labels' => [
			'name'               => 'Gallery', // основное название для типа записи
			'singular_name'      => 'Gallery', // название для одной записи этого типа
			'add_new'            => 'Add new photo', // для добавления новой записи
			'add_new_item'       => 'Add new photo', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit photo', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Watch list', // для просмотра записи этого типа.
			'search_items'       => 'Search', // для поиска по этим типам записи
			'not_found'          => 'Photos not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Creative gallery', // название меню
		],
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-format-gallery',
		'hierarchical'        => false,
		'has_archive'		  => true,
		'supports'            => [ 'title', 'thumbnail']
	] );

	function getWorks() {
		$args = [
			'post_type'   => 'works',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1,
		];

		$works = [];

		foreach (get_posts($args) as $post) {
			$work = get_fields($post->ID);

			$work['id'] = $post->ID;
			$work['title'] = $post->post_title;
			$work['description'] = $post->post_content;
			$work['img'] = get_the_post_thumbnail_url($post->ID);

			$works[] = $work;
		}

		return $works;
	}

	function getReviews() {
		$args = [
			'post_type'   => 'reviews',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1,
		];

		$reviews = [];

		foreach (get_posts($args) as $post) {
			$review = get_fields($post->ID);

			$review['name'] = $post->post_title;
			$review['description'] = $post->post_content;

			$reviews[] = $review;
		}

		return $reviews;
	}

	function getPartners() {
		$args = [
			'post_type'   => 'partners',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1,
		];

		$partners = [];

		foreach (get_posts($args) as $post) {
			$partner['name'] = $post->post_title;
			$partner['img'] = get_the_post_thumbnail_url($post->ID);

			$partners[] = $partner;
		}

		return $partners;
	}

	function getServices() {
		$args = [
			'post_type'   => 'services',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1,
		];

		$services = [];

		foreach (get_posts($args) as $post) {
			$service = get_fields($post->ID);

			$service['title'] = $post->post_title;
			$service['description'] = $post->post_content;

			$services[] = $service;
		}

		return $services;
	}

	function getCreativeGallery() {
		$args = [
			'post_type'   => 'gallery',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1,
		];

		$gallery = [];

		foreach (get_posts($args) as $post) {
			$item['name'] = $post->post_title;
			$item['img'] = get_the_post_thumbnail($post->ID);

			$gallery[] = $item;
		}

		return $gallery;
	}