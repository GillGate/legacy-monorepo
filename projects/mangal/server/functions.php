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
		unset( $sizes['thumbnail']); // отключаем миниатюры
		unset( $sizes['medium']); // отключаем средний размер
		//unset( $sizes['large']); // отключаем крупный размер
		return $sizes;
	}
	 
	add_filter('intermediate_image_sizes_advanced', 'true_remove_default_image_sizes');

	add_action( 'init', 'register_post_types' );
	function register_post_types(){
		
		register_post_type('headerslider', [
			'label'  => null,
			'labels' => [
				'name'               => 'Main slider', // основное название для типа записи
				'singular_name'      => 'New dish', // название для одной записи этого типа
				'add_new'            => 'Add new dish', // для добавления новой записи
				'add_new_item'       => 'Add new dish', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit dish item', // для редактирования типа записи
				'new_item'           => 'Текст под заголовком', // текст новой записи
				'view_item'          => 'Watch dish list', // для просмотра записи этого типа.
				'search_items'       => 'Search dishes', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Main slider', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-format-image',
			'hierarchical'        => false,
			'supports'            => [ 'title', 'thumbnail']
		] );

		register_post_type('soups', [
			'label'  => null,
			'labels' => [
				'name'               => 'Soups', // основное название для типа записи
				'singular_name'      => 'Soups', // название для одной записи этого типа
				'add_new'            => 'Add new', // для добавления новой записи
				'add_new_item'       => 'Add new', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit soup item', // для редактирования типа записи
				'new_item'           => 'Текст под заголовком', // текст новой записи
				'view_item'          => 'Watch soup list', // для просмотра записи этого типа.
				'search_items'       => 'Search soups', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Soups', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-drumstick',
			'hierarchical'        => false,
			'supports'            => [ 'title']
		] );

		register_post_type('salads', [
			'label'  => null,
			'labels' => [
				'name'               => 'Starters and salads', // основное название для типа записи
				'singular_name'      => 'Starters and salads', // название для одной записи этого типа
				'add_new'            => 'Add new', // для добавления новой записи
				'add_new_item'       => 'Add new', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit item', // для редактирования типа записи
				'new_item'           => 'Текст под заголовком', // текст новой записи
				'view_item'          => 'Watch salads list', // для просмотра записи этого типа.
				'search_items'       => 'Search', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Starters and salads', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-drumstick',
			'hierarchical'        => false,
			'supports'            => [ 'title']
		] );

		register_post_type('dishes', [
			'label'  => null,
			'labels' => [
				'name'               => 'Main grilled dishes', // основное название для типа записи
				'singular_name'      => 'Main grilled dishes', // название для одной записи этого типа
				'add_new'            => 'Add new', // для добавления новой записи
				'add_new_item'       => 'Add new', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit item', // для редактирования типа записи
				'new_item'           => 'Текст под заголовком', // текст новой записи
				'view_item'          => 'Watch salads list', // для просмотра записи этого типа.
				'search_items'       => 'Search', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Main grilled dishes', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-drumstick',
			'hierarchical'        => false,
			'supports'            => [ 'title']
		] );

		register_post_type('specialities', [
			'label'  => null,
			'labels' => [
				'name'               => 'Specialities', // основное название для типа записи
				'singular_name'      => 'Specialities', // название для одной записи этого типа
				'add_new'            => 'Add new', // для добавления новой записи
				'add_new_item'       => 'Add new', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit item', // для редактирования типа записи
				'new_item'           => 'Текст под заголовком', // текст новой записи
				'view_item'          => 'Watch specialities list', // для просмотра записи этого типа.
				'search_items'       => 'Search', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Specialities', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-drumstick',
			'hierarchical'        => false,
			'supports'            => [ 'title']
		] );

		register_post_type('side_dishes', [
			'label'  => null,
			'labels' => [
				'name'               => 'Side dishes', // основное название для типа записи
				'singular_name'      => 'Side dishes', // название для одной записи этого типа
				'add_new'            => 'Add new', // для добавления новой записи
				'add_new_item'       => 'Add new', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit item', // для редактирования типа записи
				'new_item'           => 'Текст под заголовком', // текст новой записи
				'view_item'          => 'Watch side dishes list', // для просмотра записи этого типа.
				'search_items'       => 'Search', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Side dishes', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-drumstick',
			'hierarchical'        => false,
			'supports'            => [ 'title']
		] );

		register_post_type('desserts', [
			'label'  => null,
			'labels' => [
				'name'               => 'Desserts', // основное название для типа записи
				'singular_name'      => 'Desserts', // название для одной записи этого типа
				'add_new'            => 'Add new', // для добавления новой записи
				'add_new_item'       => 'Add new', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit item', // для редактирования типа записи
				'new_item'           => 'Текст под заголовком', // текст новой записи
				'view_item'          => 'Watch desserts list', // для просмотра записи этого типа.
				'search_items'       => 'Search', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Desserts', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-drumstick',
			'hierarchical'        => false,
			'supports'            => [ 'title']
		] );

		register_post_type('hot_drinks', [
			'label'  => null,
			'labels' => [
				'name'               => 'Hot drinks', // основное название для типа записи
				'singular_name'      => 'Hot drinks', // название для одной записи этого типа
				'add_new'            => 'Add new', // для добавления новой записи
				'add_new_item'       => 'Add new', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit item', // для редактирования типа записи
				'new_item'           => 'Текст под заголовком', // текст новой записи
				'view_item'          => 'Watch hot drinks list', // для просмотра записи этого типа.
				'search_items'       => 'Search', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Hot drinks', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-coffee',
			'hierarchical'        => false,
			'supports'            => [ 'title']
		] );

		register_post_type('softs_drinks', [
			'label'  => null,
			'labels' => [
				'name'               => 'Softs drinks', // основное название для типа записи
				'singular_name'      => 'Softs drinks', // название для одной записи этого типа
				'add_new'            => 'Add new', // для добавления новой записи
				'add_new_item'       => 'Add new', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit item', // для редактирования типа записи
				'new_item'           => 'Текст под заголовком', // текст новой записи
				'view_item'          => 'Watch softs drinks list', // для просмотра записи этого типа.
				'search_items'       => 'Search', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Softs drinks', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-coffee',
			'hierarchical'        => false,
			'supports'            => [ 'title']
		] );

		register_post_type('wine', [
			'label'  => null,
			'labels' => [
				'name'               => 'Wine list', // основное название для типа записи
				'singular_name'      => 'Wine list', // название для одной записи этого типа
				'add_new'            => 'Add new', // для добавления новой записи
				'add_new_item'       => 'Add new', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit item', // для редактирования типа записи
				'new_item'           => 'Текст под заголовком', // текст новой записи
				'view_item'          => 'Watch wine list', // для просмотра записи этого типа.
				'search_items'       => 'Search', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Wine list', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-coffee',
			'hierarchical'        => false,
			'supports'            => [ 'title']
		] );

		register_post_type('beer', [
			'label'  => null,
			'labels' => [
				'name'               => 'Beer', // основное название для типа записи
				'singular_name'      => 'Beer', // название для одной записи этого типа
				'add_new'            => 'Add new', // для добавления новой записи
				'add_new_item'       => 'Add new', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit item', // для редактирования типа записи
				'new_item'           => 'Текст под заголовком', // текст новой записи
				'view_item'          => 'Watch beer list', // для просмотра записи этого типа.
				'search_items'       => 'Search', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Beer', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-coffee',
			'hierarchical'        => false,
			'supports'            => [ 'title']
		] );

		register_post_type('spirits', [
			'label'  => null,
			'labels' => [
				'name'               => 'Spirits', // основное название для типа записи
				'singular_name'      => 'Spirits', // название для одной записи этого типа
				'add_new'            => 'Add new', // для добавления новой записи
				'add_new_item'       => 'Add new', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit item', // для редактирования типа записи
				'new_item'           => 'Текст под заголовком', // текст новой записи
				'view_item'          => 'Watch spirits list', // для просмотра записи этого типа.
				'search_items'       => 'Search', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Spirits', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-coffee',
			'hierarchical'        => false,
			'supports'            => [ 'title']
		] );

		register_post_type('galleryslider', [
			'label'  => null,
			'labels' => [
				'name'               => 'Gallery', // основное название для типа записи
				'singular_name'      => 'Gallery', // название для одной записи этого типа
				'add_new'            => 'Add new', // для добавления новой записи
				'add_new_item'       => 'Add new', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Edit item', // для редактирования типа записи
				'new_item'           => 'Текст под заголовком', // текст новой записи
				'view_item'          => 'Watch gallery list', // для просмотра записи этого типа.
				'search_items'       => 'Search', // для поиска по этим типам записи
				'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => '', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Gallery', // название меню
			],
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => 'dashicons-cover-image',
			'hierarchical'        => false,
			'supports'            => ['title', 'thumbnail']
		] );

		function getGallery() {	
			$args = [
				'post_type'   => 'galleryslider',
				'orderby'     => 'date',
				'order'       => 'ASC',
				'numberposts' => 20,
			];

			$slider = [];

			foreach (get_posts($args) as $post) {
				$soup = get_fields($post->ID);

				$slider_item['title'] = $post->post_title;
				$slider_item['img'] = get_the_post_thumbnail_url($post->ID, 'large');

				$slider[] = $slider_item;
			}

			return $slider;
		}

		function getSoups() {
			$args = [
				'post_type'   => 'soups',
				'orderby'     => 'date',
				'order'       => 'ASC',
			];

			$soups = [];

			foreach (get_posts($args) as $post) {
				$soup = get_fields($post->ID);

				$soup['title'] = $post->post_title;
				$soup['dosage'] = $post->dosage;
				$soup['price'] = $post->price;

				$soups[] = $soup;
			}

			return $soups;
		}

		function getSalads() {
			$args = [
				'post_type'   => 'salads',
				'numberposts' => 11,
				'orderby'     => 'date',
				'order'       => 'ASC',
			];

			$salads = [];

			foreach (get_posts($args) as $post) {
				$salad = get_fields($post->ID);

				$salad['title'] = $post->post_title;
				$salad['for'] = $post->for;
				$salad['dosage'] = $post->dosage;
				$salad['price'] = $post->price;
				$salad['description'] = $post->description;

				$salads[] = $salad;
			}

			return $salads;
		}

		function getDishes() {
			$args = [
				'post_type'   => 'dishes',
				'numberposts' => 17,
				'orderby'     => 'date',
				'order'       => 'ASC',
			];

			$dishes = [];

			foreach (get_posts($args) as $post) {
				$dish = get_fields($post->ID);

				$dish['title'] = $post->post_title;
				$dish['for'] = $post->for;
				$dish['dosage'] = $post->dosage;
				$dish['price'] = $post->price;
				$dish['description'] = $post->description;

				$dishes[] = $dish;
			}

			return $dishes;
		}

		function getSpecialities() {
			$args = [
				'post_type'   => 'specialities',
				'numberposts' => 10,
				'orderby'     => 'date',
				'order'       => 'ASC',
			];

			$specialities = [];

			foreach (get_posts($args) as $post) {
				$speciality = get_fields($post->ID);

				$speciality['title'] = $post->post_title;
				$speciality['for'] = $post->for;
				$speciality['dosage'] = $post->dosage;
				$speciality['price'] = $post->price;
				$speciality['description'] = $post->description;

				$specialities[] = $speciality;
			}

			return $specialities;
		}

		function getSideDishes() {
			$args = [
				'post_type'   => 'side_dishes',
				'orderby'     => 'date',
				'numberposts' => 10,
				'order'       => 'ASC',
			];

			$dishes = [];

			foreach (get_posts($args) as $post) {
				$soup = get_fields($post->ID);

				$dish['title'] = $post->post_title;
				$dish['price'] = $post->price;

				$dishes[] = $dish;
			}

			return $dishes;
		}

		function getDesserts() {
			$args = [
				'post_type'   => 'desserts',
				'orderby'     => 'date',
				'numberposts' => 10,
				'order'       => 'ASC',
			];

			$desserts = [];

			foreach (get_posts($args) as $post) {
				$dessert = get_fields($post->ID);

				$dessert['title'] = $post->post_title;
				$dessert['price'] = $post->price;

				$desserts[] = $dessert;
			}

			return $desserts;
		}

		function getHotDrinks() {
			$args = [
				'post_type'   => 'hot_drinks',
				'orderby'     => 'date',
				'numberposts' => 14,
				'order'       => 'ASC',
			];

			$hot_drinks = [];

			foreach (get_posts($args) as $post) {
				$hot_drink = get_fields($post->ID);

				$hot_drink['name'] = $post->post_title;
				$hot_drink['category'] = $post->category;
				$hot_drink['price'] = $post->price;

				$hot_drinks[] = $hot_drink;
			}

			return $hot_drinks;
		}

		function getSoftsDrinks() {
			$args = [
				'post_type'   => 'softs_drinks',
				'orderby'     => 'date',
				'numberposts' => 14,
				'order'       => 'ASC',
			];

			$softs_drinks = [];

			foreach (get_posts($args) as $post) {
				$softs_drink = get_fields($post->ID);

				$softs_drink['name'] = $post->post_title;
				$softs_drink['category'] = $post->category;
				$softs_drink['dosage'] = $post->dosage;
				$softs_drink['price'] = $post->price;

				$softs_drinks[] = $softs_drink;
			}

			return $softs_drinks;
		}

		function getWineList() {
			$args = [
				'post_type'   => 'wine',
				'orderby'     => 'date',
				'numberposts' => 14,
				'order'       => 'ASC',
			];

			$wine_list = [];

			foreach (get_posts($args) as $post) {
				$softs_drink = get_fields($post->ID);

				$wine['name'] = $post->post_title;
				$wine['description'] = $post->description;
				$wine['dosage'] = $post->dosage;
				$wine['price'] = $post->price;

				$wine_list[] = $wine;
			}

			return $wine_list;
		}

		function getBeerList() {
			$args = [
				'post_type'   => 'beer',
				'orderby'     => 'date',
				'numberposts' => 14,
				'order'       => 'ASC',
			];

			$beer_list = [];

			foreach (get_posts($args) as $post) {
				$beer = get_fields($post->ID);

				$beer['name'] = $post->post_title;
				$beer['category'] = $post->category;
				$beer['dosage'] = $post->dosage;
				$beer['price'] = $post->price;

				$beer_list[] = $beer;
			}

			return $beer_list;
		}

		function getSpiritsList() {
			$args = [
				'post_type'   => 'spirits',
				'orderby'     => 'date',
				'numberposts' => 25,
				'order'       => 'ASC',
			];

			$spirits_list = [];

			foreach (get_posts($args) as $post) {
				$spirit = get_fields($post->ID);

				$spirit['name'] = $post->post_title;
				$spirit['category'] = $post->category;
				$spirit['dosage'] = $post->dosage;
				$spirit['price'] = $post->price;

				$spirits_list[] = $spirit;
			}

			return $spirits_list;
		}

	}

	
	$headerSlider_post = get_posts( [
		'numberposts' => 7,
		'post_type'   => 'headerSlider',
		'orderby'     => 'date',
		'order'       => 'ASC',
	] );