<?php 
	
	define('THEME_ROOT', get_template_directory_uri());
	define('CSS_DIR', THEME_ROOT . '/css');
	define('JS_DIR', THEME_ROOT . '/js');
	define('IMG_DIR', THEME_ROOT . '/img');

	add_action('wp_enqueue_scripts', function() {
		wp_enqueue_style('fancybox-style', CSS_DIR . '/jquery.fancybox.min.css');
		wp_enqueue_style('main-style', CSS_DIR . '/styles.css');
		wp_enqueue_style('theme-style', get_stylesheet_uri());

		wp_deregister_script('jquery');
		wp_enqueue_script('query', JS_DIR . '/jquery-3.3.1.min.js', [], null, true);
		wp_enqueue_script('fancybox', JS_DIR . '/jquery.fancybox.min.js', [], null, true);
		wp_enqueue_script('slick', JS_DIR . '/slick.min.js', [], null, true);
		wp_enqueue_script('main', JS_DIR . '/main.js', [], null, true);
	});

	add_filter('show_admin_bar', '__return_false');

	add_action('after_setup_theme', function() {
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
	});

	add_action( 'init', 'register_post_types' );
	function register_post_types(){

		register_post_type('letters', [
			'label'  => null,
			'labels' => [
				'name'               => 'Letters', // основное название для типа записи
				'singular_name'      => 'Letters', // название для одной записи этого типа
				'add_new'            => 'Add new letter', // для добавления новой записи
				'add_new_item'       => 'Add new letter', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit letter item', // для редактирования типа записи
				'new_item'           => 'Text under caption', // текст новой записи
				'view_item'          => 'Watch letter list', // для просмотра записи этого типа.
				'search_items'       => 'Search partnes', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Letters', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-email',
			'hierarchical'        => false,
			'supports'            => [ 'title', 'thumbnail']
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
				'search_items'       => 'Search partners', // для поиска по этим типам записи
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
			'supports'            => [ 'title', 'editor', 'thumbnail']
		] );

		register_post_type('gallery', [
			'label'  => null,
			'labels' => [
				'name'               => 'Gallery', // основное название для типа записи
				'singular_name'      => 'Gallery', // название для одной записи этого типа
				'add_new'            => 'Add new photo', // для добавления новой записи
				'add_new_item'       => 'Add new photo', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit gallery item', // для редактирования типа записи
				'new_item'           => 'Text under caption', // текст новой записи
				'view_item'          => 'Watch gallery list', // для просмотра записи этого типа.
				'search_items'       => 'Search gallery', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Gallery', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-format-gallery',
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
				'search_items'       => 'Search reviews', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Reviews', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-format-quote',
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor']
		] );

		function getLetters() {
			$args = [
				'post_type'   => 'letters',
				'orderby'     => 'date',
				'order'       => 'ASC',
				'numberposts' => 20,
			];

			$partners = [];

			foreach (get_posts($args) as $post) {
				$letter = get_fields($post->ID);

				$letter['name'] = $post->post_title;
				$letter['img'] = get_the_post_thumbnail_url($post->ID, 'large');

				$letters[] = $letter;
			}

			return $letters;
		}

		function getPartners() {
			$args = [
				'post_type'   => 'partners',
				'orderby'     => 'date',
				'order'       => 'ASC',
				'numberposts' => 30,
			];

			$partners = [];

			foreach (get_posts($args) as $post) {
				$partner = get_fields($post->ID);

				$partner['name'] = $post->post_title;
				$partner['desc'] = $post->post_content;
				$partner['img'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');

				$partners[] = $partner;
			}

			return $partners;
		}

		function getGallery() {
			$args = [
				'post_type'   => 'gallery',
				'orderby'     => 'date',
				'order'       => 'ASC',
				'numberposts' => 20,
			];

			$photos = [];

			foreach (get_posts($args) as $post) {
				$photo = get_fields($post->ID);

				$photo['name'] = $post->post_title;
				$photo['img'] = get_the_post_thumbnail_url($post->ID, 'large');

				$photos[] = $photo;
			}

			return $photos;
		}

		function getReviews() {
			$args = [
				'post_type'   => 'reviews',
				'orderby'     => 'date',
				'order'       => 'ASC',
				'numberposts' => 20,
			];

			$reviews = [];

			foreach (get_posts($args) as $post) {
				$review = get_fields($post->ID);

				$review['company'] = $post->post_title;
				$review['text'] = $post->post_content;

				$reviews[] = $review;
			}

			return $reviews;
		}

	}