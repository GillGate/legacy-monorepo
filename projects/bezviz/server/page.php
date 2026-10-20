<?php get_header(); ?>
	<?php $fields = get_fields(); ?>
	<?php $contacts = get_fields(5); ?>
	<?php $lang = $GLOBALS['lang']; ?>
	<section class="intro">
		<div class="container">
			<div class="intro__wrapper" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
				<div class="intro__info">
					<h2 class="h1 intro__title"><?php the_title(); ?></h2>
					<p class="intro__caption"><strong><?php echo $fields['intro-caption'] ?></strong></p>
					<p class="intro__text">
						<?php if($lang === 'en') { 
							echo "From ";
						} else {
							echo "От ";
						} ?>
						<strong><?php echo $fields['intro-price'] ?></strong>
					</p>
					<ul class="intro__features">
						<?php foreach($fields['advantage'] as $advantage) { ?>
							<?php if($advantage !== '') { ?>
								<li><p><b><?php echo $advantage ?></b></p></li>
							<?php } ?>
						<?php } ?>
					</ul>
					<button type="button" class="button intro__button" data-fancybox data-src="#popup">
						<?php if($lang === 'en') { 
							echo "Order call";
						} else {
							echo "Заказать звонок";
						} ?>
					</button>
					<div class="socialMedia intro__social">
						<p class="socialMedia__title">
							<?php if($lang === 'en') { 
								echo "Or write to us:";
							} else {
								echo "Или напишите нам:";
							} ?>
						</p>
						<div class="socialMedia__list">
						<!-- 	<a href="<?php echo $contacts['social']['chat']; ?>">
								<img src="<?php echo IMG_DIR ;?>/icon-social-message.svg" alt="">
							</a> -->
							<a href="<?php echo $contacts['social']['whatsapp']; ?>">
								<img src="<?php echo IMG_DIR ;?>/icon-social-wa.svg" alt="">
							</a>
							<a href="<?php echo $contacts['social']['telegram']; ?>">
								<img src="<?php echo IMG_DIR ;?>/icon-social-tg.svg" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="features">
		<h2 class="vh">
			<?php if($lang === 'en') { 
				echo "Main advantages";
			} else {
				echo "Основные преимущества";
			} ?>
		</h2>
		<div class="container">
			<ul class="features__list">
				<li><p><?php echo $fields['features']['first']; ?> 
					<?php if($lang === 'en') { 
						echo "positive <a href='#reviews'>reviews</a>";
					} else {
						echo "положительных <a href='#reviews'>отзывов</a>";
					} ?>
				</p>
				</li>
				<li><p><?php echo $fields['features']['second']; ?></p></li>
				<li><p><?php echo $fields['features']['third']; ?></p></li>
				<li><p><?php echo $fields['features']['fourth']; ?></p></li>
			</ul>
		</div>
	</section>
	<section class="help" id="help">
		<div class="container">
			<h2 class="h1 help__title"><?php echo $fields['description']['title']; ?></h2>
			<div class="help__wrapper">
				<div class="help__content">
					<div class="help__text">
						<?php echo $fields['description']['text']; ?>
					</div>
					<button type="button" class="button help__button" data-fancybox data-src="#popup">
						<?php if($lang === 'en') { 
							echo "Submit an application";
						} else {
							echo "Подать заявку";
						} ?>
					</button>
				</div>
				<div class="help__info">
					<p class="help__question"><strong><?php echo $fields['description']['question']; ?></strong></p>
					<div class="help__answer">
						<?php echo $fields['description']['answer']; ?>
					</div>
				</div>
			</div>
			<div class="help__steps">
				<?php $steps = array_filter($fields['description']['steps'], function($step) { return $step !== ''; } ) ?>
				<?php $steps_count = count($steps); ?>
				<h3 class="h2">
					<?php if($lang === 'en') { 
						echo "Only $steps_count steps:";
					} else {
						echo "Всего $steps_count шагов:";
					} ?>
				</h3>
				<ol class="help__stepsList">
					<?php $step_index = 1; ?>
					<?php foreach($steps as $step) { ?>
						<li data-help-step="<?php echo $step_index ?>"><p><b><?php echo $step ?></b></p></li>
						<?php $step_index++ ?>
					<?php } ?>
				</ol>
			</div>
		</div>
	</section>
	<section class="official">
		<div class="container">
			<div class="official__wrapper">
				<div class="official__info">
					<h2 class="h2 official__title">
						<?php if($lang === 'en') { 
							echo "We are working officially!";
						} else {
							echo "Работаем официально!";
						} ?>
					</h2>
					<p class="official__text">
						<?php if($lang === 'en') { 
							echo "BezViz is your reliable partner in Thailand, officially working and having all the necessary permits to provide services in this country. Unlike many others, we guarantee the legality and transparency of our activities. Our experience allows us to make the document submission process fast and without obstacles, eliminating the risks of long waits and unwanted refusals.";
						} else {
							echo "BezViz – это ваш надежный партнер в Таиланде, официально работающий и имеющий все необходимые разрешения для оказания услуг на территории этой страны. В отличие от многих других, мы гарантируем законность и прозрачность нашей деятельности. Наш опыт позволяет сделать процесс подачи документов быстрым и без препятствий, исключая риски длительного ожидания и нежелательных отказов.";
						} ?>
					</p>
				</div>
				<div class="official__docs">
					<div class="official__doc">
						<a href="<?php echo IMG_DIR ;?>/sc_en-bg.jpg" data-fancybox class="official__docImg">
							<img src="<?php echo IMG_DIR ;?>/sc_en-bg.jpg" alt="">
						</a>
						<h3 class="official__docTitle">
							<?php if($lang === 'en') { 
								echo "Certificate of company registration, eng.";
							} else {
								echo "Сертификат регистрации компании, англ.";
							} ?>
						</h3>
					</div>
					<div class="official__doc">
						<a href="<?php echo IMG_DIR ;?>/sc_th-bg.jpg" data-fancybox class="official__docImg">
							<img src="<?php echo IMG_DIR ;?>/sc_th-bg.jpg" alt="">
						</a>
						<h3 class="official__docTitle">
							<?php if($lang === 'en') { 
								echo "Certificate of company registration, tai.";
							} else {
								echo "Сертификат регистрации компании, таи.";
							} ?>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php $reviews = getReviews($fields['service-cat']->slug); ?>
	<?php if(count($reviews) > 0) { ?>
		<section class="reviews" id="reviews">
			<div class="container">
				<div class="reviews__wrapper">
					<div class="reviews__header">
						<h2 class="h2 reviews__title">
							<?php if($lang === 'en') { 
								echo "Customer reviews";
							} else {
								echo "Отзывы клиентов";
							} ?>
						</h2>
						<div class="controls reviews__controls">
							<button class="controls__item reviews__control reviews__control--prev" aria-label="Предыдущий отзыв">
								<img src="<?php echo IMG_DIR ;?>/icon-arrow-left.svg" alt="">
							</button>
							<button class="controls__item reviews__control reviews__control--next" aria-label="Следующий отзыв">
								<img src="<?php echo IMG_DIR ;?>/icon-arrow-right.svg" alt="">
							</button>
						</div>
					</div>
					<div class="reviews__slider">
						<?php foreach($reviews as $review) { ?>
							<div class="reviews__item review">
								<h3 class="review__title"><?php echo $review['title'] ?></h3>
								<div class="review__picture">
									<?php echo $review['img']; ?>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>
	<section class="why">
		<div class="container">
			<h2 class="h2 why__title">
				<?php if($lang === 'en') { 
					echo "Why BEZVIZ";
				} else {
					echo "Почему BEZVIZ";
				} ?>
			</h2>
			<ul class="why__list">
				<li class="why__item">
					<div class="why__img">
						<img src="<?php echo IMG_DIR ;?>/why-1.svg" alt="">
					</div>
					<h3 class="why__itemTitle">
						<?php if($lang === 'en') { 
							echo "Speed is our hallmark!";
						} else {
							echo "Скорость — наша отличительная черта!";
						} ?>
					</h3>
					<p class="why__text">
						<?php if($lang === 'en') { 
							echo "You will no longer have to waste precious days on endless queues and waiting: we will do everything quickly and according to the key!";
						} else {
							echo "Вам больше не придется терять драгоценные дни на бесконечные очереди и ожидание: мы сделаем всё быстро и по ключ!";
						} ?>
					</p>
				</li>
				<li class="why__item">
					<div class="why__img">
						<img src="<?php echo IMG_DIR ;?>/why-2.svg" alt="">
					</div>
					<h3 class="why__itemTitle">
						<?php if($lang === 'en') { 
							echo "Saving your strength and nerves";
						} else {
							echo "Экономия ваших сил и нервов";
						} ?>
					</h3>
					<p class="why__text">
						<?php if($lang === 'en') { 
							echo "We take on all the bureaucratic burden: from the preparation of documents to the passage of queues!";
						} else {
							echo "Мы берем на себя всю бюрократическую ношу: от подготовки документов до прохождения очередей!";
						} ?>
					</p>
				</li>
				<li class="why__item">
					<div class="why__img">
						<img src="<?php echo IMG_DIR ;?>/why-3.svg" alt="">
					</div>
					<h3 class="why__itemTitle">
						<?php if($lang === 'en') { 
							echo "Professional approach to the client";
						} else {
							echo "Профессиональный подход к клиенту";
						} ?>
					</h3>
					<p class="why__text">
						<?php if($lang === 'en') { 
							echo "We guarantee high-quality and accurate execution of all procedures and are ready to conduct a personal consultation for you.";
						} else {
							echo "Мы гарантируем качественное и четкое выполнение всех процедур и готовы провести для вас персональную консультацию.";
						} ?>
					</p>
				</li>
			</ul>
			<div class="why__bottom">
				<div class="why__get">
					<h3 class="h2 why__getTitle">
						<?php if($lang === 'en') { 
							echo "Get a free professional consultation";
						} else {
							echo "Получите бесплатную профессиональную консультацию";
						} ?>
					</h3>
					<button type="button" class="button why__getOrder" data-fancybox data-src="#popup">
						<?php if($lang === 'en') { 
							echo "Order call";
						} else {
							echo "Заказать звонок";
						} ?>
					</button>
				</div>
				<div class="socialMedia why__social">
					<p class="socialMedia__title">
						<?php if($lang === 'en') { 
							echo "Or ask online:";
						} else {
							echo "Или спросите онлайн:";
						} ?>
					</p>
					<div class="socialMedia__list">
					<!-- 	<a href="<?php echo $contacts['social']['chat']; ?>">
							<img src="<?php echo IMG_DIR ;?>/icon-social-message.svg" alt="">
						</a> -->
						<a href="<?php echo $contacts['social']['whatsapp']; ?>">
							<img src="<?php echo IMG_DIR ;?>/icon-social-wa.svg" alt="">
						</a>
						<a href="<?php echo $contacts['social']['telegram']; ?>">
							<img src="<?php echo IMG_DIR ;?>/icon-social-tg.svg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="services" id="services">
		<div class="container">
			<h2 class="h2 services__title">
				<?php if($lang === 'en') { 
					echo "Other BEZVIZ services";
				} else {
					echo "Другие услуги BEZVIZ";
				} ?>
			</h2>
			<div class="services__list">
				<div class="services__item service">
					<h3 class="service__title">Загран паспорт на 5 лет</h3>
					<div class="service__text">
						<p>Помощь в оформлении документов на загран паспорт не покидая территории к. Таиланд</p>
					</div>
					<p class="service__price">от 15 000 Бат</p>
				</div>
				<div class="services__item service">
					<h3 class="service__title">Загран паспорт на 5 лет</h3>
					<div class="service__text">
						<p>Помощь в оформлении документов на загран паспорт не покидая территории к. Таиланд</p>
					</div>
					<p class="service__price">от 15 000 Бат</p>
				</div>
				<div class="services__item service">
					<h3 class="service__title">Загран паспорт на 5 лет</h3>
					<div class="service__text">
						<p>Помощь в оформлении документов на загран паспорт не покидая территории к. Таиланд</p>
						<p>Помощь в оформлении документов на загран паспорт не покидая территории к. Таиланд</p>
					</div>
					<p class="service__price">от 15 000 Бат</p>
				</div>
				<div class="services__item service">
					<h3 class="service__title">Загран паспорт на 5 лет</h3>
					<div class="service__text">
						<p>Помощь в оформлении документов на загран паспорт не покидая территории к. Таиланд</p>
					</div>
					<p class="service__price">от 15 000 Бат</p>
				</div>
			</div>
			<!-- <div class="services__more">
				<a href="#" class="button services__moreLink">
					<?php if($lang === 'en') { 
						echo "View more services";
					} else {
						echo "Смотреть больше услуг";
					} ?>
				</a>
			</div> -->
		</div>
	</section>
	<section class="team">
		<div class="container">
			<div class="team__wrapper">
				<div class="team__header">
					<h2 class="h2 team__title">
						<?php if($lang === 'en') { 
							echo "Our team";
						} else {
							echo "Наша команда";
						} ?>
					</h2>
					<div class="controls team__controls">
						<button class="controls__item team__control team__control--prev">
							<img src="<?php echo IMG_DIR ;?>/icon-arrow-left.svg" alt="">
						</button>
						<button class="controls__item team__control team__control--next">
							<img src="<?php echo IMG_DIR ;?>/icon-arrow-right.svg" alt="">
						</button>
					</div>
				</div>
				<div class="team__slider">
					<?php foreach(getTeam() as $person) { ?>
						<div class="team__person">
							<div class="team__personImg">
								<?php echo $person['img']; ?>
							</div>
							<h3 class="h3 team__personTitle"><?php echo $person['name']; ?></h3>
							<p class="team__personPosition"><?php echo $person['team-position']; ?></p>
							<div class="team__personDesc">
								<?php echo wpautop($person['text']); ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<section class="agency" id="about">
		<div class="container">
			<div class="agency__wrapper">
				<div class="agency__header">
					<h2 class="h2 agency__title">
						<?php if($lang === 'en') { 
							echo "Tourist Assistance Agency in Thailand";
						} else {
							echo "Агенство помощи туристам в Таиланде";
						} ?>
					</h2>
					<div class="agency__info">
						<div class="agency__logo">
							<img src="<?php echo IMG_DIR ;?>/logo.svg" width="171" height="94" alt="">
						</div>
						<div class="address agency__address">
							<?php if($lang === 'en') { 
								echo "Address: ";
							} else {
								echo "Адрес: ";
							} ?>
							<address><?php echo $contacts['social']['address-first']; ?></address>
						</div>
					</div>
				</div>
				<p class="agency__text">
					<?php if($lang === 'en') { 
						echo "<strong>Bez Viz specializes</strong> in providing passport renewal services, obtaining visas, consular and notary services for residents of the CIS in Thailand. They facilitate the process of preparing documents, helping to avoid months.BezViz specializes in providing passport renewal services, obtaining visas, consular and notary services for residents of the CIS in Thailand.";
					} else {
						echo "<strong>BezViz специализируется</strong> на оказании услуг по обновлению паспортов, получению виз, консульских и нотариальных услуг для жителей СНГ в Таиланде. Они облегчают процесс подготовки документов, помогая избежать многомесячных .BezViz специализируется на оказании услуг по обновлению паспортов, получению виз, консульских и нотариальных услуг для жителей СНГ в Таиланде.";
					} ?>
				</p>
				<div class="agency__img">
					<img src="<?php echo IMG_DIR ;?>/agency.jpg" width="500" height="345" alt="">
				</div>
			</div>
		</div>
	</section>
	<section class="social" id="contacts">
		<div class="container">
			<h2 class="h2 social__title">
				<?php if($lang === 'en') { 
					echo "We are on Instagram";
				} else {
					echo "Мы в Instagram";
				} ?>
			</h2>
			<div class="social__shortcode">
				<?php 
					if($lang === 'en') {
						echo do_shortcode('[instagram feed="83"]');
					} else {
						echo do_shortcode('[instagram feed="129"]');
					}
				?>
			</div>
			<!-- <div class="social__info">
				<ul class="social__stats">
					<li><span>112</span> постов</li>
					<li><span>1243</span> подписчиков</li>
					<li><span>21</span> подписок</li>
				</ul>
				<a href="<?php echo $fields['social']['instagram']; ?>" class="button social__sub">Подписаться</a>
			</div>
			<div class="social__gallery">
				<div class="social__galleryItem">
					<img src="<?php echo IMG_DIR ;?>/gallery.jpg" alt="">
				</div>
				<div class="social__galleryItem">
					<img src="<?php echo IMG_DIR ;?>/gallery.jpg" alt="">
				</div>
				<div class="social__galleryItem">
					<img src="<?php echo IMG_DIR ;?>/gallery.jpg" alt="">
				</div>
				<div class="social__galleryItem">
					<img src="<?php echo IMG_DIR ;?>/gallery.jpg" alt="">
				</div>
			</div> -->
			<div class="social__list">
				<a href="<?php echo $contacts['social']['instagram']; ?>" class="h3 social__item social__item--inst">instagram</a>
				<a href="<?php echo $contacts['social']['facebook']; ?>" class="h3 social__item social__item--fb">facebook</a>
				<a href="<?php echo $contacts['social']['telegram']; ?>" class="h3 social__item social__item--tg">telegram</a>
				<a href="<?php echo $contacts['social']['tiktok']; ?>" class="h3 social__item social__item--tt">tik tok</a>
				<a href="<?php echo $contacts['social']['youtube']; ?>" class="h3 social__item social__item--yt">youtube</a>
			</div>
		</div>
	</section>
	<div class="popup" id="popup">
		<div class="popup__wrapper">
				<?php if($lang === 'pt') { ?>
					<form class="form popup__form">
						<label class="form__label form__label--input">
							<span class="form__title">Укажите своё имя:</span>
							<input class="form__input" name="order-name" type="text" placeholder="Имя">
						</label>
						<label class="form__label form__label--input">
							<span class="form__title">Укажите свой телефон:</span>
							<input class="form__input form__input--error" name="order-phone" type="tel" placeholder="Телефон">
						</label>
						<div class="form__date">
							<span class="form__title">Укажите время для связи:</span>
							<label class="form__label form__radio">
								<input type="radio" name="order-time" value="Как можно скорее" checked>
								Как можно скорее
							</label>
							<label class="form__label form__radio">
								<input type="radio" name="order-time" value="Конкретное время">
								Конкретное время
							</label>
							<input class="form__input form__datetime" type="datetime-local" name="order-date" disabled>
						</div>
						<button class="button form__submit">Отправить</button>
					</form>
				<?php } else { ?>
					<div class="popup__form">
						<?php echo $fields['contact-form']; ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>