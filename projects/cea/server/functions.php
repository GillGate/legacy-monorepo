<?php 
	
	define('THEME_ROOT', get_template_directory_uri());
	define('CSS_DIR', THEME_ROOT . '/css');
	define('JS_DIR', THEME_ROOT . '/js');
	define('IMG_DIR', THEME_ROOT . '/img');

	add_action('wp_enqueue_scripts', function() {
		wp_enqueue_style('main-style', CSS_DIR . '/styles.css');
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
		//unset( $sizes['thumbnail']); // отключаем миниатюры
		//unset( $sizes['medium']); // отключаем средний размер
		unset( $sizes['large']); // отключаем крупный размер
		return $sizes;
	}
	 
	add_filter('intermediate_image_sizes_advanced', 'true_remove_default_image_sizes');

	add_action( 'init', 'register_post_types' );
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
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-text-page',
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor', 'thumbnail'],
			'taxonomies'		  => ['category']
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


		function getVakancies($mode) {
			if($mode === 'actual') {
				$args = [
					'post_type'   => 'vakancy',
					'orderby'     => 'date',
					'order'       => 'DESC',
					'numberposts' => 10,
				];
			} else if ($mode === 'all') {
				$args = [
					'post_type'   => 'vakancy',
					'orderby'     => 'date',
					'order'       => 'ASC',
					'numberposts' => 100
				];
			}

			$vakancies = [];

			foreach (get_posts($args) as $post) {
				$vakancy = get_fields($post->ID);

				$vakancy['id'] = $post->ID;
				$vakancy['title'] = $post->post_title;
				$vakancy['text'] = $post->post_content;
				$vakancy['img'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');

				$vakancy_condition_1 = (int)$vakancy['conditions'][0];
				$vakancy_condition_2 = (int)$vakancy['conditions'][1];
				$vakancy['condition-1'] = get_term($vakancy_condition_1)->name;
				$vakancy['condition-2'] = get_term($vakancy_condition_2)->name;

				$category = get_the_category($post->ID)[0];
				$vakancy['category-name'] = $category->name;
				$vakancy['category-slug'] = $category->slug;
				$vakancy['category-link'] = get_category_link($category->term_id);

				$vakancies[] = $vakancy;
			}

			return $vakancies;
		}

		function getPartners() {
			$args = [
				'post_type'   => 'partners',
				'orderby'     => 'date',
				'order'       => 'ASC',
				'numberposts' => 20,
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
				'numberposts' => 3
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
	}