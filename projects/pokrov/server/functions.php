<?php 
	
	define('THEME_ROOT', get_template_directory_uri());
	define('CSS_DIR', THEME_ROOT . '/css');
	define('JS_DIR', THEME_ROOT . '/js');
	define('IMG_DIR', THEME_ROOT . '/img');

	add_action('wp_enqueue_scripts', function() {
		wp_enqueue_style('main-style', CSS_DIR . '/style.min.css');
		wp_enqueue_style('theme-style', get_stylesheet_uri());

		wp_deregister_script('jquery');
		wp_enqueue_script('all', JS_DIR . '/all.js', [], null, true);
	});

	add_filter('show_admin_bar', '__return_false');

	add_action('after_setup_theme', function() {
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
	});

	function true_remove_default_image_sizes( $sizes ) {
		unset( $sizes['thumbnail']); // отключаем миниатюры
		unset( $sizes['medium']); // отключаем средний размер
		unset( $sizes['large']); // отключаем крупный размер
		return $sizes;
	}
	 
	add_filter('intermediate_image_sizes_advanced', 'true_remove_default_image_sizes');

	add_action( 'init', 'register_post_types' );
	add_action( 'init', 'register_taxonomies' );

	function register_taxonomies() {
		register_taxonomy('profession', [ 'vakancy' ], [
			'label'                 => '', // определяется параметром $labels->name
			'labels'                => [
				'name'              => 'Professions',
				'singular_name'     => 'Profession',
				'search_items'      => 'Search profession',
				'all_items'         => 'All professions',
				'view_item '        => 'View profession',
				'parent_item'       => 'Parent profession',
				'parent_item_colon' => 'Parent profession:',
				'edit_item'         => 'Edit profession',
				'update_item'       => 'Update profession',
				'add_new_item'      => 'Add new profession',
				'new_item_name'     => 'New profession name',
				'menu_name'         => 'Professions',
				'back_to_items'     => '← Back to Professions',
			],
			'description'           => '', // описание таксономии
			'public'                => true,
			'hierarchical'          => true,
			'rewrite'               => true,
		]);
	}

	function register_post_types(){
		register_post_type('vakancy', [
			'label'  => null,
			'labels' => [
				'name'               => 'Vakancies', // основное название для типа записи
				'singular_name'      => 'Vakancies', // название для одной записи этого типа
				'add_new'            => 'Add new vakancy', // для добавления новой записи
				'add_new_item'       => 'Add new vakancy', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit vakancy item', // для редактирования типа записи
				'new_item'           => 'Text under caption', // текст новой записи
				'view_item'          => 'Watch vakancy list', // для просмотра записи этого типа.
				'search_items'       => 'Search vakancies', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Vakancies', // название меню
			],
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'rewrite'			  => [ 'with_front' => false ],
			'menu_icon'           => 'dashicons-text-page',
			'hierarchical'        => false,
			'has_archive'         => true,
			'supports'            => [ 'title', 'editor', 'thumbnail'],
			'taxonomies'		  => ['profession']
		] );

		register_post_type('advantages', [
			'label'  => null,
			'labels' => [
				'name'               => 'Advantages', // основное название для типа записи
				'singular_name'      => 'Advantages', // название для одной записи этого типа
				'add_new'            => 'Add new advantage', // для добавления новой записи
				'add_new_item'       => 'Add new advantage', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit advantage item', // для редактирования типа записи
				'new_item'           => 'Text advantage caption', // текст новой записи
				'view_item'          => 'Watch advantages list', // для просмотра записи этого типа.
				'search_items'       => 'Search advantages', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Advantages', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-editor-ul',
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor', 'thumbnail']
		] );

		register_post_type('documents', [
			'label'  => null,
			'labels' => [
				'name'               => 'Documents', // основное название для типа записи
				'singular_name'      => 'Documents', // название для одной записи этого типа
				'add_new'            => 'Add new document', // для добавления новой записи
				'add_new_item'       => 'Add new document', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit document item', // для редактирования типа записи
				'new_item'           => 'Text document caption', // текст новой записи
				'view_item'          => 'Watch documents list', // для просмотра записи этого типа.
				'search_items'       => 'Search documents', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Documents', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-media-document',
			'hierarchical'        => false,
			'supports'            => [ 'title', 'thumbnail']
		] );

		register_post_type('reviews', [
			'label'  => null,
			'labels' => [
				'name'               => 'Reviews', // основное название для типа записи
				'singular_name'      => 'Reviews', // название для одной записи этого типа
				'add_new'            => 'Add new review', // для добавления новой записи
				'add_new_item'       => 'Add new review', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit review item', // для редактирования типа записи
				'new_item'           => 'Text under caption', // текст новой записи
				'view_item'          => 'Watch review list', // для просмотра записи этого типа.
				'search_items'       => 'Search partnes', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Reviews', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-youtube',
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor', 'thumbnail']
		] );

		register_post_type('partners', [
			'label'  => null,
			'labels' => [
				'name'               => 'Partners', // основное название для типа записи
				'singular_name'      => 'Partners', // название для одной записи этого типа
				'add_new'            => 'Add new partner', // для добавления новой записи
				'add_new_item'       => 'Add new partner', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit partner item', // для редактирования типа записи
				'new_item'           => 'Text under caption', // текст новой записи
				'view_item'          => 'Watch partner list', // для просмотра записи этого типа.
				'search_items'       => 'Search partnes', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Partners', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-groups',
			'hierarchical'        => false,
			'supports'            => [ 'title', 'thumbnail']
		] );

		register_post_type('faq', [
			'label'  => null,
			'labels' => [
				'name'               => 'FAQ', // основное название для типа записи
				'singular_name'      => 'FAQ', // название для одной записи этого типа
				'add_new'            => 'Add new question', // для добавления новой записи
				'add_new_item'       => 'Add new question', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit question item', // для редактирования типа записи
				'new_item'           => 'Text question caption', // текст новой записи
				'view_item'          => 'Watch question list', // для просмотра записи этого типа.
				'search_items'       => 'Search questions', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'FAQ', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-text-page',
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor'],
		] );
	}

	function getVakancies($mode) {
		if($mode === 'actual') {
			$args = [
				'post_type'   => 'vakancy',
				'orderby'     => 'date',
				'order'       => 'DESC',
				'numberposts' => 4,
			];
		} else if ($mode === 'all') {
			$args = [
				'post_type'   => 'vakancy',
				'orderby'     => 'date',
				'order'       => 'ASC',
				'numberposts' => -1
			];
		}
		else {
			$args = [
				'post_type'   => 'vakancy',
				'orderby'     => 'date',
				'order'       => 'ASC',
				'numberposts' => -1,
				'profession'  => $mode
			];
		}

		$vakancies = [];

		foreach (get_posts($args) as $post) {
			$vakancy = get_fields($post->ID);

			$vakancy['id'] = $post->ID;
			$vakancy['title'] = $post->post_title;
			$vakancy['text'] = $post->post_content;
			$vakancy['img'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');

			// $vakancy_condition_1 = (int)$vakancy['conditions'][0];
			// $vakancy_condition_2 = (int)$vakancy['conditions'][1];
			// $vakancy['condition-1'] = get_term($vakancy_condition_1)->name;
			// $vakancy['condition-2'] = get_term($vakancy_condition_2)->name;

			// $category = get_the_category($post->ID)[0];
			// $vakancy['category-name'] = $category->name;
			// $vakancy['category-slug'] = $category->slug;
			// $vakancy['category-link'] = get_category_link($category->term_id);

			$vakancies[] = $vakancy;
		}

		return $vakancies;
	}

	function getAdvantages() {
		$args = [
			'post_type'   => 'advantages',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1
		];

		$advantages = [];

		foreach (get_posts($args) as $post) {
			$advantage['title'] = $post->post_title;
			$advantage['text'] = $post->post_content;
			$advantage['img'] = get_the_post_thumbnail_url($post->ID, 'medium');

			$advantages[] = $advantage;
		}

		return $advantages;
	}

	function getDocuments() {
		$args = [
			'post_type'   => 'documents',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1
		];

		$documents = [];

		foreach (get_posts($args) as $post) {
			$document['title'] = $post->post_title;
			$document['img'] = get_the_post_thumbnail_url($post->ID, 'large');

			$documents[] = $document;
		}

		return $documents;
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
			$partner = get_fields($post->ID);

			$partner['name'] = $post->post_title;
			$partner['img'] = get_the_post_thumbnail_url($post->ID, 'medium');

			$partners[] = $partner;
		}

		return $partners;
	}

	function getReviews() {
		$args = [
			'post_type'   => 'reviews',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1
		];

		$reviews = [];

		foreach (get_posts($args) as $post) {
			$review = get_fields($post->ID);

			$review['name'] = $post->post_title;
			$review['text'] = $post->post_content;
			$review['img'] = get_the_post_thumbnail_url($post->ID, 'medium');

			$reviews[] = $review;
		}

		return $reviews;
	}


	function getFaq() {
		$args = [
			'post_type'   => 'faq',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1
		];

		$faq = [];

		foreach (get_posts($args) as $post) {
			$question['title'] = $post->post_title;
			$question['answer'] = $post->post_content;

			$faq[] = $question;
		}

		return $faq;
	}