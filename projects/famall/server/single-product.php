<?php get_header(); ?>
<?php
	$product_id = get_the_ID();
	$current_product = get_fields();
	$type = wp_get_object_terms($product_id, 'type')[0];
	$genre = wp_get_object_terms($product_id, 'genre')[0];
?>
	<div class="breadcrumbrs">
		<div class="container">
			<div class="breadcrumbrs__wrapper">
				<a href="/">Главная</a>
				<a href="/product/">Каталог продукции</a>
				<a href="/type/<?php echo $type->slug; ?>"><?php echo $type->name; ?></a>
				<?php if($type->slug !== "start") { ?>
					<a href="/genre/<?php echo $genre->slug; ?>"><?php echo $genre->name; ?></a>
				<?php } ?>
				<a><?php the_title(); ?></a>
			</div>
		</div>
	</div>
	<section class="singleProduct">
		<div class="container">
			<div class="singleProduct__wrapper">
				<div class="singleProduct__left">
					<h1 class="singleProduct__title"><?php the_title(); ?></h1>
					<div class="product__info">
						<span class="product__company"><?php echo $current_product['product-brand']->post_title; ?></span>
						<?php if($current_product['product-art'] !== '') { ?>
							<span class="product__number">Арт: <?php echo $current_product['product-art']; ?></span>
						<?php } ?>
					</div>
					<div class="singleProduct__thumb">
						<div class="singleProduct__slider">
							<div>
								<div class="singleProduct__picture">
									<div class="product__marks singleProduct__marks">
										<?php if($current_product['product-discount'] !== '') { ?>
											<span class="product__mark product__mark--discount">
												-<?php echo $current_product['product-discount']; ?>%
											</span>
										<?php } ?>
										<?php if($current_product['product-new']) { ?>
											<span class="product__mark">New</span>
										<?php } ?>
										<?php if($current_product['product-hit']) { ?>
											<span class="product__mark product__mark--hit">Хит</span>
										<?php } ?>
									</div>
									<?php echo get_the_post_thumbnail(); ?>
								</div>
							</div>
						</div>
						<div class="singleProduct__label">
							<?php if($type->slug === 'coupon') { ?>
								<img src="<?php echo IMG_DIR ;?>/coup.svg" width="60" height="30" alt="">
							<?php } ?>
							<?php if($type->slug === 'ball') { ?>
								<img src="<?php echo IMG_DIR ;?>/pv.svg" width="30" height="30" alt="">
							<?php } ?>
						</div>
					</div>
					<div class="singleProduct__banner">
						<h2 class="singleProduct__bannerTitle">Станьте партнёром FAMALL уже сегодня!</h2>
						<p class="text singleProduct__bannerText">
							<strong>Для того, чтобы зарегистрироваться</strong>, вам необходимо найти спонсора, который будет помогать вам на протяжении всего пути к построению успешного и стабильного бизнеса, расскажет о компании, возможностях и продукции.
						</p>
						<a href="/#start" class="singleProduct__bannerLink">Подробнее</a>
					</div>
				</div>
				<div class="singleProduct__detail">
					<div class="singleProduct__detailInfo">
							<div class="singleProduct__detailCompany">
								<?php if($current_product['product-brand']) { ?>
								<div class="singleProduct__detailCompanyImg">
									<?php echo get_the_post_thumbnail($current_product['product-brand']->ID); ?>
								</div>
								<p>Косметический бренд: <span><?php echo the_terms( $product_id, 'brand' ); ?></span></p>
								<?php } ?>
							</div>
						<div class="singleProduct__price">
							<div class="singleProduct__priceBlock">
								<?php if($current_product['product-type-value']) { ?>
									<?php if($current_product['product-price-pv'] !== '') { ?>
										<p><?php echo $current_product['product-price-pv']; ?> PV</p>
									<?php } ?>
								<?php } else { ?>
									<?php if($current_product['product-price-full'] !== '') { ?>
										<span><?php echo $current_product['product-price-full']; ?> ₽</span>
									<?php } ?>
									<?php if($current_product['product-price'] !== '') { ?>
										<p><strong><?php echo $current_product['product-price']; ?> ₽</strong></p>
									<?php } ?>
								<?php } ?>
							</div>
						</div>
					</div>
					<?php if($current_product['product-desc'] !== '') { ?>
						<div class="singleProduct__desc">
							<h3 class="singleProduct__textTitle">Описание:</h3>
							<p>
								<?php echo $current_product['product-desc']; ?>
							</p>
						</div>
					<?php } ?>
					<div class="singleProduct__stats">
						<?php if($current_product['product-volume'] !== '') { ?>
							<div class="singleProduct__stat">
								<h3 class="singleProduct__textTitle">Объем:</h3>
									<p><i><?php echo $current_product['product-volume']; ?></i></p>
							</div>
						<?php } ?>
						<?php if($current_product['product-structure'] !== '') { ?>
							<div class="singleProduct__stat">
								<h3 class="singleProduct__textTitle">Состав:</h3>
								<div>
									<?php echo $current_product['product-structure']; ?>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="text singleProduct__text">
						<?php the_content(); ?>
					</div>
					<div class="otherProducts singleProduct__other">
						<h2 class="otherProducts__title">Другие товары из категории: <span><?php echo the_terms( $product_id, 'genre' ); ?></span></h2>
						<div class="otherProducts__slider">
							<button type="button" class="otherProducts__control otherProducts__control--prev">
								<img src="<?php echo IMG_DIR ;?>/icon-arrow-red.svg" width="30" alt="">
							</button>
							<div class="otherProducts__sliderBody">
								<?php foreach(getCatalog(8, $genre->slug, $type->slug) as $product) { ?>
									<?php if($product['product-id'] !== $product_id) { ?>
										<a href="<?php echo $product['product-link']; ?>" class="otherProducts__item product">
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
													<?php if($product['product-new']) { ?>
														<span class="product__mark product__mark--hit">Хит</span>
													<?php } ?>
												</div>
												<div class="product__img">
													<?php echo $product['product-img']; ?>
												</div>
											</div>
											<div class="product__body">
												<div class="product__info">
													<span class="product__company"><?php echo $product['product-brand']->post_title; ?></span>
													<span class="product__number">Арт: <?php echo $product['product-art']; ?></span>
												</div>
												<h3 class="product__title"><?php echo $product['product-title']; ?></h3>
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
									<?php } ?>
								<?php } ?>
							</div>
							<button type="button" class="otherProducts__control otherProducts__control--next">
								<img src="<?php echo IMG_DIR ;?>/icon-arrow-red.svg" width="30" alt="">
							</button>
						</div>
						<div class="otherProducts__dots dots"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="quick quick--product">
		<div class="container">
			<h2 class="title quick__title">Быстрый старт бизнеса</h2>
			<p class="quick__caption">Станьте партнёром FAMALL уже сегодня!</p>
			<div class="quick__wrapper">
				<div class="quick__content">
					<p class="text quick__text">
						<strong>Для того, чтобы зарегистрироваться,</strong> <br> 
						Вам необходимо найти спонсора, который будет помогать вам 
						на протяжении всего пути к построению успешного и стабильного 
						бизнеса, расскажет о компании, возможностях и продукции.
					</p>
					<div class="quick__img">
						<img src="<?php echo IMG_DIR ;?>/start.png" alt="">
					</div>
				</div>
			</div>
			<a href="#" class="button button--red quick__btn">Начать бизнес</a>
		</div>
	</section>
	<div class="about about--product">
		<div class="container">
			<div class="about__footer">
				<a href="/" class="button about__back">Вернуться к разделу</a>
				<?php get_template_part('include/social'); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>