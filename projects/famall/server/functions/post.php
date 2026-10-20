<?php 
	register_post_type('product', [
		'label'  => null,
		'labels' => [
			'name'               => 'Товары', // основное название для типа записи
			'singular_name'      => 'Товар', // название для одной записи этого типа
			'add_new'            => 'Добавить новый товар', // для добавления новой записи
			'add_new_item'       => 'Добавить новый товар', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать товар', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Посмотреть список', // для просмотра записи этого типа.
			'search_items'       => 'Найти', // для поиска по этим типам записи
			'not_found'          => 'Товары не найдены', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Товары', // название меню
		],
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-products',
		'hierarchical'        => false,
		'has_archive'		  => true,
		'supports'            => [ 'title', 'editor', 'thumbnail']
	] );

	register_post_type('events', [
		'label'  => null,
		'labels' => [
			'name'               => 'Мероприятия', // основное название для типа записи
			'singular_name'      => 'Мероприятие', // название для одной записи этого типа
			'add_new'            => 'Добавить новое', // для добавления новой записи
			'add_new_item'       => 'Добавить новое', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать мероприятие', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Посмотреть список', // для просмотра записи этого типа.
			'search_items'       => 'Найти', // для поиска по этим типам записи
			'not_found'          => 'Мероприятия не найдены', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Мероприятия', // название меню
		],
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-groups',
		'hierarchical'        => false,
		'has_archive'		  => true,
		'supports'            => [ 'title', 'editor', 'thumbnail']
	] );

	register_post_type('news', [
		'label'  => null,
		'labels' => [
			'name'               => 'Новости', // основное название для типа записи
			'singular_name'      => 'Новость', // название для одной записи этого типа
			'add_new'            => 'Добавить новую новость', // для добавления новой записи
			'add_new_item'       => 'Добавить новую новость', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать новость', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Посмотреть список', // для просмотра записи этого типа.
			'search_items'       => 'Найти', // для поиска по этим типам записи
			'not_found'          => 'Новости не найдены', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Новости', // название меню
		],
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-megaphone',
		'hierarchical'        => false,
		'has_archive'		  => true,
		'supports'            => [ 'title', 'editor', 'thumbnail']
	] );

	register_post_type('promotions', [
		'label'  => null,
		'labels' => [
			'name'               => 'Акции', // основное название для типа записи
			'singular_name'      => 'Акция', // название для одной записи этого типа
			'add_new'            => 'Добавить новую акцию', // для добавления новой записи
			'add_new_item'       => 'Добавить новую акцию', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать акцию', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Посмотреть список', // для просмотра записи этого типа.
			'search_items'       => 'Найти', // для поиска по этим типам записи
			'not_found'          => 'Акции не найдены', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Акции', // название меню
		],
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-tickets',
		'hierarchical'        => false,
		'has_archive'		  => true,
		'supports'            => [ 'title', 'editor', 'thumbnail']
	] );

	register_post_type('brands', [
		'label'  => null,
		'labels' => [
			'name'               => 'Бренды', // основное название для типа записи
			'singular_name'      => 'Бренды', // название для одной записи этого типа
			'add_new'            => 'Добавить новый бренд', // для добавления новой записи
			'add_new_item'       => 'Добавить новый бренд', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать бренд', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Посмотреть список брендов', // для просмотра записи этого типа.
			'search_items'       => 'Найти', // для поиска по этим типам записи
			'not_found'          => 'Бренды не найдены', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Бренды', // название меню
		],
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-welcome-view-site',
		'hierarchical'        => false,
		'has_archive'		  => false,
		'supports'            => [ 'title', 'editor', 'thumbnail']
	] );

	register_post_type('leaders', [
		'label'  => null,
		'labels' => [
			'name'               => 'Лидеры', // основное название для типа записи
			'singular_name'      => 'Лидеры', // название для одной записи этого типа
			'add_new'            => 'Добавить нового лидера', // для добавления новой записи
			'add_new_item'       => 'Добавить нового лидера', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать лидера', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Посмотреть список лидеров', // для просмотра записи этого типа.
			'search_items'       => 'Найти', // для поиска по этим типам записи
			'not_found'          => 'Лидеры не найдены', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Лидеры', // название меню
		],
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-businessman',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail']
	] );

	function getEvents() {
		$args = [
			'post_type'   => 'events',
			'orderby'     => 'meta_value',
			'meta_key'    => 'event-date',
			'order'       => 'asc',
			'numberposts' => 8,
		];

		$events = [];

		foreach (get_posts($args) as $post) {
			$event = get_fields($post->ID);

			$event['event-title'] = $post->post_title;
			$event['event-img'] = get_the_post_thumbnail($post->ID);
			$event['event-link'] = get_permalink($post->ID);

			$events[] = $event;
		}

		return $events;
	}

	function getCatalog($count = 8, $genre = '', $type = '') {
		$args = [
			'post_type'   => 'product',
			'orderby'     => 'date',
			'order'       => 'asc',
			'numberposts' => $count,
			'genre' 	  => $genre,
			'type'		  => $type
		];

		$catalog = [];

		foreach (get_posts($args) as $post) {
			$product = get_fields($post->ID);

			$product['product-id'] = $post->ID;
			$product['product-title'] = $post->post_title;
			$product['product-content'] = $post->post_content;
			$product['product-img'] = get_the_post_thumbnail($post->ID);
			$product['product-link'] = get_permalink($post->ID);
			$product['product-type'] = wp_get_post_terms($post->ID, 'type');

			$catalog[] = $product;
		}

		return $catalog;
	}

	function getNews() {
		$args = [
			'post_type'   => 'news',
			'orderby'     => 'date',
			'order'       => 'desc',
			'numberposts' => 8,
		];

		$news = [];

		foreach (get_posts($args) as $post) {
			$news_item = get_fields($post->ID);

			$news_item['news-id'] = $post->ID;
			$news_item['news-title'] = $post->post_title;
			$news_item['news-img'] = get_the_post_thumbnail($post->ID);
			$news_item['news-link'] = get_permalink($post->ID);

			$news[] = $news_item;
		}

		return $news;
	}

	function getBrands() {
		$args = [
			'post_type'   => 'brands',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1,
		];

		$brands = [];

		foreach (get_posts($args) as $post) {
			$brand = get_fields($post->ID);

			$brand['brand-name'] = $post->post_title;
			$brand['brand-content'] = $post->post_content;
			$brand['brand-img'] = get_the_post_thumbnail($post->ID);
			$brand['brand-link'] = wp_get_object_terms($post->ID, 'brand')[0];

			$brands[] = $brand;
		}

		return $brands;
	}

	function getLeaders() {
		$args = [
			'post_type'   => 'leaders',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1,
		];

		$leaders = [];

		foreach (get_posts($args) as $post) {
			$leader = get_fields($post->ID);

			$leader['leader-id'] = $post->ID;
			$leader['leader-name'] = $post->post_title;
			$leader['leader-text'] = $post->post_content;
			$leader['leader-img'] = get_the_post_thumbnail_url($post->ID);
			$leader['leader-link'] = get_permalink($post->ID);

			$leaders[] = $leader;
		}

		return $leaders;
	}

	