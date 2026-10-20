<?php 
	register_post_type('flats', [
		'label'  => null,
		'labels' => [
			'name'               => 'Квартиры', // основное название для типа записи
			'singular_name'      => 'Квартиры', // название для одной записи этого типа
			'add_new'            => 'Добавить новую квартиру', // для добавления новой записи
			'add_new_item'       => 'Добавить новую квартиру', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать квартиру', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Посмотреть список квартир', // для просмотра записи этого типа.
			'search_items'       => 'Найти', // для поиска по этим типам записи
			'not_found'          => 'Квартиры не найдены', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Квартиры', // название меню
		],
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-admin-multisite',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail']
	] );

	/*

	function getReviews($service_cat) {
		$args = [
			'post_type'   => 'reviews',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1,
			'service-cat' => $service_cat
		];

		$reviews = [];

		foreach (get_posts($args) as $post) {
			$review = get_fields($post->ID);

			$review['title'] = $post->post_title;
			$review['img'] = get_the_post_thumbnail($post->ID);

			$reviews[] = $review;
		}

		return $reviews;
	}

	function getTeam() {
		$args = [
			'post_type'   => 'team',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1,
		];

		$team = [];

		foreach (get_posts($args) as $post) {
			$member = get_fields($post->ID);

			$member['name'] = $post->post_title;
			$member['text'] = $post->post_content;
			$member['img'] = get_the_post_thumbnail($post->ID);

			$team[] = $member;
		}

		return $team;
	}

	*/