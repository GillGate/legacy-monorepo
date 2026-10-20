<?php 
	register_post_type('article', [
		'label'  => null,
		'labels' => [
			'name'               => 'Статьи', // основное название для типа записи
			'singular_name'      => 'Статья', // название для одной записи этого типа
			'add_new'            => 'Добавить новую статью', // для добавления новой записи
			'add_new_item'       => 'Добавить новую статью', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать статью', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Посмотреть список', // для просмотра записи этого типа.
			'search_items'       => 'Найти', // для поиска по этим типам записи
			'not_found'          => 'Статьи не найдены', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Статьи', // название меню
		],
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-welcome-write-blog',
		'hierarchical'        => false,
		'has_archive'		  => true,
		'supports'            => [ 'title', 'editor', 'thumbnail']
	] );

	function createArticles($args) {
		$articles = [];

		foreach (get_posts($args) as $post) {
			$article = get_fields($post->ID);

			$article['id'] = $post->ID;
			$article['title'] = $post->post_title;
			$article['content'] = $post->post_content;
			$article['img'] = get_the_post_thumbnail($post->ID);
			$article['img-url'] = get_the_post_thumbnail_url($post->ID);
			$article['link'] = get_post_permalink($post->ID);
			$article['date'] = get_the_time('d F Y', $post->ID);

			$articles[] = $article;
		}

		return $articles;
	}

	function getArticles($count = -1, $type = '', $topic = '') {
		$args = [
			'post_type'   => 'article',
			'orderby'     => 'date',
			'order'       => 'desc',
			'numberposts' => $count,
			'type'		  => $type,
			'topic'		  => $topic
		];

		return createArticles($args);
	}

	function getHomepageArticles($count = 5, $type = '', $topic = '') {
		$args = [
			'post_type'   => 'article',
			'orderby'     => 'meta_value_num',
			'meta_key'    => 'order',
			'order'       => 'asc',
			'meta_query'  => [
				[
					'key' => 'for-homepage',
					'value' => true,
				]
			],
			'numberposts' => $count,
			'type'		  => $type,
			'topic'		  => $topic
		];

		return createArticles($args);
	}