<?php get_header(); ?>
<?php $events = getEvents(); ?>
<!--
<section class="ny">
	<div class="ny__wrapper">
		<div class="ny__size"></div>
		<div class="ny__video">
			<iframe width="100%" height="660" src="https://www.youtube-nocookie.com/embed/7eY92GBdiRI?controls=1" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
</section> -->
<section class="introStart" id="after">
	<div class="container">
		<div class="introStart__wrapper">
			<div class="introStart__logo">
				<img src="<?php echo IMG_DIR ;?>/logo-icon.png" width="180" alt="">
			</div>
			<div class="introStart__body">
				<h2 class="introStart__title">Начать бизнес с <strong>FAMALL</strong> очень просто!</h2>
				<div class="introStart__content">
					<p class="introStart__text">
						Достаточно найти представителя компании
						или связаться с нами по горячей линии!
					</p>
					<a href="#start" class="navLink introStart__btn start__btn">
						<span>Начать бизнес</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php if(count($events) > 0) { ?>
	<section class="events">
		<div class="container">
			<h2 class="title events__title">Предстоящие мероприятия Famall</h2>
			<div class="events__wrapper">
				<div class="events__slider">
					<?php foreach($events as $event) { ?>
						<div>
							<div class="events__item event">
								<div class="event__bg">
									<?php echo $event['event-img']; ?>
								</div>
								<div class="event__header">
									<h3 class="event__title"><?php echo $event['event-title']; ?></h3>
									<span class="event__date"><?php echo $event['event-date-text']; ?></span>
								</div>
								<div class="event__body">
									<p class="event__location">
										<?php echo $event['event-city']; ?>
										<span><?php echo $event['event-country']; ?></span>
									</p>
									<a href="<?php echo $event['event-link']; ?>" class="button button--red event__button">Подробнее</a>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="dots events__dots"></div>
		</div>
	</section>
<?php } ?>
<!-- 	<section class="afterIntro">
		<div class="container">
			<div class="afterIntro__wrapper">
				<div class="sucess">
					<h2 class="sucess__title">Наши истории успеха</h2>
					<div class="sucess__body">
						<div class="sucess__slider">
							<div class="sucess__item sucessItem">
								<div class="sucessItem__head">
									<div class="sucessItem__img">
										<img src="<?php echo IMG_DIR ;?>/sucess-1.jpg" alt="">
									</div>
									<div class="sucessItem__info">
										<p>Королевы Сергей и Елена</p>
										<p>г. Омск</p>
									</div>
									<a href="#" class="sucessItem__play">
										<img src="<?php echo IMG_DIR ;?>/icon-play.svg" alt="Открыть видео">
									</a>
								</div>
								<div class="sucessItem__content">
									<h3 class="sucessItem__title">«Уникальная возможность для любого человека!»</h3>
									<div class="sucessItem__text">
										<p>«С FAMALL нас познакомила моя подруга.
Сначала мы попробовали продукцию, и убедившись в высоком качестве, и проверив, что цены на всё, действительно, ниже рыночных, мы стали рекомендовать этот «волшебный магазин» своим друзьям. 
Что интересно, нам не пришлось ради этого бросать свой бизнес, всё получилось само собой, без напряга и дополнительных усилий. 
Одним из неоспоримых плюсов, является уникальная возможность для любого человека, кардинально поменять свою жизнь в лучшую сторону!
»</p>
									</div>
								</div>
							</div>
							<div class="sucess__item sucessItem">
								<div class="sucessItem__head">
									<div class="sucessItem__img">
										<img src="<?php echo IMG_DIR ;?>/sucess-2.jpg" alt="">
									</div>
									<div class="sucessItem__info">
										<p>Асиевская Анастасия</p>
										<p>г.Екатеринбург</p>
									</div>
									<a href="#" class="sucessItem__play">
										<img src="<?php echo IMG_DIR ;?>/icon-play.svg" alt="Открыть видео">
									</a>
								</div>
								<div class="sucessItem__content">
									<h3 class="sucessItem__title">«В компании есть то, чего нет у конкурентов!»</h3>
									<div class="sucessItem__text">
										<p>Мое сотрудничество с компанией FAMALL NETWORK началось с июня 2019 года. В то время я была в поисках бизнеса, новых возможностей, новой ниши. В Famall я увидела огромные перспективы и уникальность не только в маркетинге, но и в продукции и её качестве. В компании есть то, чего нет у конкурентов! 
Через 1,5 месяца я выполнила условия на открытие сервисного центра и взялась за этот нелегкий труд! Каждый день все больше и больше людей узнают о нашем проекте, о возможностях, о продукции высокого качества и принимают решение - изменить свое качество жизни к лучшему!
»</p>
									</div>
								</div>
							</div>
							<div class="sucess__item sucessItem">
								<div class="sucessItem__head">
									<div class="sucessItem__img">
										<img src="<?php echo IMG_DIR ;?>/sucess-4.jpg" alt="">
									</div>
									<div class="sucessItem__info">
										<p>Шарипов Рустам</p>
										<p>с. Асекеево, Оренбургская область.</p>
									</div>
									<a href="#" class="sucessItem__play">
										<img src="<?php echo IMG_DIR ;?>/icon-play.svg" alt="Открыть видео">
									</a>
								</div>
								<div class="sucessItem__content">
									<h3 class="sucessItem__title">«Связываю свое будущее в партнёрстве с FAMALL!»</h3>
									<div class="sucessItem__text">
										<p>«Понравилась концепция компании. Понял - это шанс. Нашел наставника. Поставил цель. Начал учиться и действовать. Создал команду. Стал лауреатом "Лучший партнёр года." Связываю свое будущее в партнёрстве с FAMALL. И мне эта перспектива нравится.»</p>
									</div>
								</div>
							</div>
							<div class="sucess__item sucessItem">
								<div class="sucessItem__head">
									<div class="sucessItem__img">
										<img src="<?php echo IMG_DIR ;?>/sucess-3.jpg" alt="">
									</div>
									<div class="sucessItem__info">
										<p>Артем Буянтуев</p>
										<p>г. Барнаул</p>
									</div>
									<a href="#" class="sucessItem__play">
										<img src="<?php echo IMG_DIR ;?>/icon-play.svg" alt="Открыть видео">
									</a>
								</div>
								<div class="sucessItem__content">
									<h3 class="sucessItem__title">«Это шанс, который дается один раз в жизни!»</h3>
									<div class="sucessItem__text">
										<p>«Компания Famall Network принесла с собой все: новую денежную  энергию, новые возможности, новый бизнес-подход, новаторский и многогранный  Маркетинг  План. Сразу было понятно: это бизнес для серьезных людей. Это шанс, который дается один раз в жизни. На принятие решения мне понадобилось меньше часа. Я стал партнером.»</p>
									</div>
								</div>
							</div>
						</div>
						<div class="dots sucess__dots"></div>
					</div>
				</div>


				<div class="start">
					<div class="start__content">
						<h2 class="start__title">
							Начать бизнес с FAMALL очень просто!
						</h2>
						<p class="start__text">
							Достаточно найти представителя компани или связаться с нами по горячей линии!
						</p>
						<a href="#start" class="navLink start__btn">
							<span>Начать бизнес</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<section class="leaders">
		<div class="container">
			<h2 class="title leaders__title">Лидеры продаж</h2>
			<div class="leaders__list">
				<?php foreach(getCatalog() as $product) { ?>
					<a href="<?php echo $product['product-link'];?>" class="leaders__item product">
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
								<?php if($product['product-type'][0]->slug === 'coupon') { ?>
									<img src="<?php echo IMG_DIR ;?>/coup.svg" width="60" height="30" alt="">
								<?php } ?>
								<?php if($product['product-type'][0]->slug === 'ball') { ?>
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
			</div>
			<div class="dots leaders__dots"></div>
			<a href="/product/" class="button leaders__more">
				Cмотреть весь каталог
			</a>
			<div>
				<a href="/online-catalog/" class="button leaders__more leaders__more--pdf">
					Cмотреть PDF-каталог
				</a>
			</div>
		</div>
	</section>
	<section class="brands">
		<div class="container">
			<h2 class="title brands__title">Наши бренды</h2>
			<div class="brands__wrapper">
				<div class="brands__single">
					<?php foreach(getBrands() as $brand) { ?>
						<div class="brands__singleItem">
							<div class="brand">
								<div class="brand__img">
									<?php echo $brand['brand-img']; ?>
								</div>
								<h3 class="brand__title"><?php echo $brand['brand-name']; ?></h3>
								<p class="brand__quote"><?php echo $brand['brand-slogan']; ?></p>
								<div class="brand__text">
									<?php echo $brand['brand-content']; ?>
								</div>
								<?php if($brand['brand-link']->slug != '') { ?>
									<a href="/brand/<?php echo $brand['brand-link']->slug; ?>" class="brand__more">Показать товары бренда</a>
								<?php } ?>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="brands__list">
					<?php $brand_index = 0; ?>
					<?php foreach(getBrands() as $brand) { ?>
						<div class="brands__item" data-slider-index="<?php echo $brand_index; ?>">
							<?php echo $brand['brand-img']; ?>
						</div>
						<?php $brand_index++; ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<section class="partners">
		<div class="container">
			<h2 class="title partners__title">Новости и видео</h2>
			<div class="partners__wrapper">
				<div class="partners__slider">
					<button class="patners__control partners__control--prev">
						<img src="<?php echo IMG_DIR ;?>/icon-arrow-red.svg" width="30" alt="">
					</button>
					<div class="partners__list">
						<?php foreach(getNews() as $news) {?>
							<div>
	              <a href="<?php echo $news['news-link']; ?>" class="partners__item partner">
	                <div class="partner__img">
	                  <?php echo $news['news-img']; ?>
	                </div>
	                <div class="partner__info">
	                  <h3 class="partner__title"><?php echo $news['news-title']; ?></h3>
	                  <span class="partner__date"><?php echo get_the_date('d F Y', $news['news-id']); ?></span>
	                </div>
	              </a>
	            </div>
						<?php } ?>
					</div>
					<button class="patners__control partners__control--next">
						<img src="<?php echo IMG_DIR ;?>/icon-arrow-red.svg" width="30" alt="">
					</button>
				</div>
			</div>
			<div class="dots partners__dots"></div>
		</div>
	</section>
		<section class="quickStart" id="start">
		<div class="container">
			<div class="quickStart__wrapper" data-fancybox="dialog" data-src="#quick_popup">
				<div class="quickStart__item quickStart__item--first">
					<img src="<?php echo IMG_DIR ;?>/quick-1.jpg" alt="">
					<p class="quickStart__title">Быстрый старт бизнеса</p>
				</div>
				<div class="quickStart__item quickStart__item--second">
					<img src="<?php echo IMG_DIR ;?>/quick-2.jpg" alt="">
					<p class="quickStart__title">Финансовая <br> свобода</p>
				</div>
				<div class="quickStart__item quickStart__item--third">
					<img src="<?php echo IMG_DIR ;?>/quick-3.jpg" alt="">
					<p class="quickStart__title">Экологичная <br> продукция</p>
				</div>
			</div>
			<div class="quickStart__popup" id="quick_popup">
				<div class="quickStart__popupLogo">
					<img src="<?php echo IMG_DIR ;?>/logo-popup.jpg" alt="">
				</div>
				<div class="quickStart__popupContent">
					<p class="quickStart__popupText">
						<span>Для того, чтобы зарегистрироваться,</span>
						Вам необходимо найти спонсора, который будет помогать вам на протяжении всего пути к построению успешного и стабильного бизнеса, расскажет о компании, возможностях и продукции.
					</p>
					<p class="quickStart__popupText">
						<span>ЕСЛИ У ВАС УЖЕ ЕСТЬ ЗНАКОМЫЙ ПАРТНЁР FAMALL,</span>
						который рассказал вам о компании, <strong>свяжитесь с ним для регистрации</strong> и получения подробной информации о старте вашего бизнеса.
					</p>
					<p class="quickStart__popupText">
						<span>ЕСЛИ У ВАС НЕТ ЗНАКОМОГО ПАРТНЕРА FAMALL,</span>
						вы можете посмотреть наши соцсети, открыть там подписчиков аккаунта и среди них связаться с любым заинтересовавшим партнёром, который зарегистрирует вас в компании и расскажет с чего начинать.

					</p>
				</div>
				<div class="quickStart__popupFooter">
					<div class="quickStart__popupSocial">
						<a href="https://vk.com/famall_nw">
							<img src="<?php echo IMG_DIR ;?>/vk.png" alt="">
						</a>
						<a href="https://t.me/famall_nw">
							<img src="<?php echo IMG_DIR ;?>/tg.png" alt="">
						</a>
					</div>
					<p class="quickStart__popupThanks">
						Спасибо что обратились в FAMALL, <br> желаем Вам успехов в старте бизнеса!
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="team" id="team">
		<div class="container">
			<h2 class="title team__title">
				Наши лидеры
			</h2>
			<div class="team__wrapper">
				<div class="team__description">
					<p>
						ТОП лидеры сетевого маркетинга — это люди, играющие ведущую роль в своих сетевых компаниях, главные дистрибьюторы с тысячными структурами.
						Известно, что в сетевом маркетинге невозможно добиться успеха в одиночку, это бизнес команды, сплоченные одной идеей.
						Лидеры на основании своего опыта обучают свою команду, своих дистрибьюторов навыкам создания успешной бизнес структуры.
					</p>
				</div>
				<div class="team__leaders">
					<?php foreach(getLeaders() as $leader) { ?>
						<div>
							<a href="<?php echo $leader['leader-link']; ?>" class="team__leader">
								<div class="team__leaderImg">
									<img src="<?php echo $leader['leader-img']; ?>" alt="">
								</div>
								<h3 class="team__leaderName"><?php echo $leader['leader-name']; ?></h3>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="dots team__dots"></div>
		</div>
	</section>
	<section class="about">
		<div class="container">
			<h2 class="title about__title">
				О нас
			</h2>
			<div class="about__wrapper">
				<div class="about__info">
					<div class="about__logo">
						<img src="<?php echo IMG_DIR ;?>/logo.png" alt="">
					</div>
					<h3 class="about__name">Famall Network</h3>
					<div class="about__text">
						<p>Компания основана в <strong>1998</strong> году в г. Сучжоу, Китай.</p> 
						<p>На данный момент насчитывает 300000 партнёров по всему миру и является ведущей экологической компанией в сфере сетевого бизнеса!</p>
					</div>
				</div>
				<div class="about__content">
					<p>
						С самого начала своего развития компания была ориентирована на самые высокие технологии в области производства товаров широкого спроса. Основной акцент был сделан на качество и безопасность продукции.
						Научно-техническая группа FAMALL постоянно наращивала темпы своего роста и постепенно превратилась в научного первопроходца и лидера китайской биотехнологической промышленности.
						Наша компания уделяет особое внимание научным разработкам, умному производству, онлайн-продажам, физическим магазинам, продуманной логистике, защите данных, разработке программного обеспечения, контенту и стримингу в сфере электронной коммерции.
						Задавшись целью развивать международный рынок, были открыты филиалы в более чем 30 странах и регионах мира: в Юго-Восточной Азии, Африке, Восточной Европе, странах СНГ, России.
					</p>
					<a href="/about/" class="button button--red about__more">Подробнее</a>
				</div>
			</div>
			<div class="about__footer">
				<a href="#intro" class="button navLink about__back">Вернуться к началу страницы</a>
				<div class="about__social">	
					<?php get_template_part('include/social'); ?>
				</div>
			</div>
		</div>
	</section>
	<?php get_footer(); ?>