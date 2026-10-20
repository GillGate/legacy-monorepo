<?php get_header(); ?>
<?php 
	$req_categories = $_REQUEST['filter']['genre'];
	$req_brands = $_REQUEST['filter']['brand'];
	$req_types = $_REQUEST['filter']['type'];
	$req_search = $_REQUEST['s'];

	$req_sort = $_REQUEST['filter']['sort'];
	$cat = get_queried_object();

	$sort_options = [
		'product-price_asc' => 'Цена по возрастанию',
		'product-price_desc' => 'Цена по убыванию',
		'date_asc' => 'Сначала новые',
		'date_desc' => 'Сначала старые',
	];
?>
<div class="breadcrumbrs">
	<div class="container">
		<div class="breadcrumbrs__wrapper">
			<a href="/">Главная</a>
			<a href="/product/">Каталог продукции</a>
			<a>
				<?php echo get_the_category_by_ID($cat->term_id); ?>
			</a>
		</div>
	</div>
</div>
<section class="catalog">
	<div class="container">
		<div class="catalog__wrapper">
			<?php if($cat->slug !== 'start') { ?>
				<div class="filter catalog__filter">
					<form class="filter__form" method="GET">
						<?php 
							$genres = get_terms(['taxonomy' => 'genre']);
							$brands = get_terms(['taxonomy' => 'brand']);
							$types = get_terms(['taxonomy' => 'type']);
						?>
						<div class="filter__body">
							<?php if(!($cat->taxonomy === 'genre')) { ?>
								<div class="filter__option filter__option--category">
									<p class="filter__optionTitle">
										Категория товара
									</p>
									<div class="filter__optionList">
										<?php foreach($genres as $genre) { ?>
											<label class="filter__label">
												<input 
													type="checkbox" 
													name="filter[genre][]" 
													value="<?php echo $genre->term_id; ?>"
													<?php checked(
												        (isset($_GET['filter']['genre']) && in_array($genre->term_id, $_GET['filter']['genre']))
												    ) ?>
												>
												<span><?php echo "$genre->name"; ?></span>
											</label>
										<?php } ?>
									</div>
								</div>
							<?php } ?>
							<?php if(!($cat->taxonomy === 'brand')) { ?>
								<div class="filter__option filter__option--brand">
									<p class="filter__optionTitle">
										Бренд
									</p>
									<div class="filter__optionList">
										<?php foreach($brands as $brand) { ?>
											<label class="filter__label">
												<input 
													type="checkbox" 
													name="filter[brand][]" 
													value="<?php echo $brand->term_id; ?>"
													<?php checked(
												        (isset($_GET['filter']['brand']) && in_array($brand->term_id, $_GET['filter']['brand']))
												    ) ?>
												>
												<span><?php echo "$brand->name"; ?></span>
											</label>
										<?php } ?>
									</div>
								</div>
							<?php } ?>
							<?php if(!($cat->taxonomy === 'type')) { ?>
								<div class="filter__option filter__option--type">
									<p class="filter__optionTitle">
										Виды продукции
									</p>
									<div class="filter__optionList">
										<?php foreach($types as $type) { ?>
											<label class="filter__label">
												<input 
													type="checkbox" 
													name="filter[type][]" 
													value="<?php echo $type->term_id; ?>"
													<?php checked(
												        (isset($_GET['filter']['type']) && in_array($type->term_id, $_GET['filter']['type']))
												    ) ?>
												>
												<span><?php echo "$type->name"; ?></span>
											</label>
										<?php } ?>
									</div>
								</div>	
							<?php } ?>
						</div>
						<input type="hidden" class="filter__hiddenSort" name="filter[sort]" value="product-price_asc">
				
						<div class="filter__search">
							<input type="text" class="prodCert__input" value="<?php echo $req_search; ?>" name="s" maxlength="120" placeholder="Поиск по товарам...">
							<button type="submit" class="button filter__submit">
								Показать
							</button>
						</div>
					</form>
				</div>
			<?php } ?>
			<div class="catalog__sort">
				<label class="filter__sort">
					<span class="vh">Сортировка</span>
					<select name="for_sort">
						<?php foreach($sort_options as $value => $name) { ?>
							<option 
								value="<?php echo $value; ?>"
								<?php selected(
							        ($value === $req_sort)
							    ) ?>
							>
								<?php echo $name; ?>
							</option>
						<?php } ?>
					</select>
				</label>
			</div>
			<div class="catalog__list">
				<?php 
					if(isset($_REQUEST['filter'])) {
						global $wp_query;

						$query = [
							'tax_query' => [
								'relation' => "AND",
							],
						];

						if(isset($req_categories) && is_array($req_categories)) {
							$req_category = [];

							foreach($req_categories as $category) {
								$req_category[] = intval($category);
							}

							$query['tax_query'][] = [
								'taxonomy' 	=> 'genre',
								'field'		=> 'term_id',
								'terms'		=> $req_category
							];
							unset($req_category);
						}

						if(isset($req_brands) && is_array($req_brands)) {
							$req_brand = [];

							foreach($req_brands as $brand)
								$req_brand[] = intval($brand);

							$query['tax_query'][] = [
								'taxonomy' 	=> 'brand',
								'field'		=> 'term_id',
								'terms'		=> $req_brand
							];
							unset($req_brand);
						}

						if(isset($req_types) && is_array($req_types)) {
							$req_type = [];

							foreach($req_types as $type)
								$req_type[] = intval($type);

							$query['tax_query'][] = [
								'taxonomy' 	=> 'type',
								'field'		=> 'term_id',
								'terms'		=> $req_type
							];
							unset($req_type);
						}

						if(isset($req_sort)) {
							$req_sort = explode('_', $req_sort);

							if($req_sort[0] === 'product-price') {
								$query['orderby'] = 'meta_value';
								$query['meta_key'] = 'product-price';
							}

							if($req_sort[0] === 'date') {
								$query['orderby'] = 'date';
							}

							$query['order'] = $req_sort[1];
						}

						$query = array_merge($wp_query->query, $query);

						query_posts($query);
					}

					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post(); 
							$product = get_fields(get_the_ID());
							$type = wp_get_object_terms(get_the_ID(), 'type')[0];
						?>
							<div class="catalog__item">

								<a href="<?php the_permalink(); ?>" class="product">
									<div class="product__head">
										<div class="product__marks">
											<?php if($product['product-discount'] !== '') { ?>
												<span class="product__mark product__mark--discount">
													-<?php echo $product['product-discount']; ?>%
												</span>
											<?php } ?>
											<?php if($product['product-new']) { ?>
												<span class="product__mark">New</span>
											<?php } ?>
											<?php if($product['product-hit']) { ?>
												<span class="product__mark product__mark--hit">Хит</span>
											<?php } ?>
										</div>
										<div class="product__img">
											<?php the_post_thumbnail(); ?>
										</div>
									</div>
									<div class="product__body">
										<div class="product__info">
											<span class="product__company"><?php echo $product['product-brand']->post_title; ?></span>
												<span class="product__number">
													<?php if($product['product-art'] !== '') { ?>
														Арт: <?php echo $product['product-art']; ?>
													<?php } else { ?>
														<br>
													<?php } ?>
												</span>
										</div>
										<h3 class="product__title"><?php the_title(); ?></h3>
										<div class="product__bottom">
											<div class="product__coupon">
												<?php if($type->slug === 'coupon') { ?>
													<img src="<?php echo IMG_DIR ;?>/coup.svg" width="60" height="30" alt="">
												<?php } ?>
												<?php if($type->slug === 'ball') { ?>
													<img src="<?php echo IMG_DIR ;?>/pv.svg" width="30" height="30" alt="">
												<?php } ?>
											</div>
											<div class="product__price">
												<?php if($product['product-type-value']) { ?>
													<?php if($product['product-price-pv'] !== '') { ?>
														<span><?php echo $product['product-price-pv']; ?> PV</span>
													<?php } ?>
												<?php } else { ?>
													<?php if($product['product-price-full'] !== '') { ?>
														<span class="product__priceDiscount"><?php echo $product['product-price-full']; ?> ₽</span>
													<?php } ?>
													<?php if($product['product-price'] !== '') { ?>
														<span><?php echo $product['product-price']; ?> ₽</span>
													<?php } ?>
												<?php } ?>
											</div>
											<p class="product__more">Подробнее</p>
										</div>
									</div>
								</a>
							</div> 
						<?php }
					} else { ?>
						<div class="catalog__empty">
							Товаров не найдено. <br>
							<?php if(isset($_REQUEST['filter'])) { ?>
								Попробуйте поискать по другим параметрам.
							<?php } ?>
						</div>
				<?php } ?>
			</div>
			<div class="catalog__pagination">
				<?php the_posts_pagination(); ?>
			</div>
		</div>
	</div>
</section>
<div class="about about--catalog">
	<div class="container">
		<div class="about__footer">
			<a href="/" class="button about__back">Вернуться на главную</a>
			<?php get_template_part('include/social'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>