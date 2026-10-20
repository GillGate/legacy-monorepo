<?php get_header(); ?>
<?php $fields = get_fields(); ?>
	<div class="intro" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
		<div class="container">
			<header class="header">
				<a href="/" class="header__logo">
					<img src="<?php echo IMG_DIR ;?>/logo.png" alt="">
				</a>
				<div class="header__menu">
					<button class="header__bar" aria-label="Меню"><span></span></button>
					<nav class="nav header__nav">
						<a href="#company" class="nav__link">О нас</a>
						<a href="#about" class="nav__link">О проекте</a>
						<a href="https://kalinka-thailand.com/" class="nav__link">Смотреть все проекты</a>
						<a href="#contacts" class="nav__link">Контакты</a>
					</nav>
				</div>
				<a href="#order" class="button header__order">Оставить заявку</a>
			</header>
			<section class="intro__body">
				<div class="intro__left">
					<h1 class="h1 intro__title"><?php the_title(); ?></h1>
					<p class="intro__caption"><?php echo $fields['intro']['caption']; ?></p>
					<div class="intro__order">
						<a href="#order" class="intro__orderBtn">ОСТАВИТЬ ЗАЯВКУ</a>
						<p class="intro__orderCaption"><?php echo $fields['intro']['btn-caption']; ?></p>
					</div>
				</div>
				<div class="intro__right">
					<ul class="intro__list">
						<?php if(
							$fields['intro']['list']['distance'] !== "" ||
							$fields['intro']['list']['location'] !== ""
						) { ?>
							<li class="intro__item">
								<div class="intro__itemImg">
									<img src="<?php echo IMG_DIR ;?>/intro-item-1.jpg" alt="">
								</div>
								<p class="intro__itemTitle">
									<strong><?php echo $fields['intro']['list']['distance']; ?></strong>
									<?php echo $fields['intro']['list']['location']; ?>
								</p>
							</li>
						<?php } ?>
						<?php if($fields['flats-count'] !== '') { ?>
							<li class="intro__item">
								<div class="intro__itemImg">
									<img src="<?php echo IMG_DIR ;?>/intro-item-2.jpg" alt="">
								</div>
								<p class="intro__itemTitle">
									<strong><?php echo $fields['flats-count']; ?></strong>
									осталось
								</p>
							</li>
						<?php } ?>
						<?php if($fields['intro']['list']['catalog-link'] !== '') { ?>
							<li class="intro__item">
								<div class="intro__itemImg">
									<img src="<?php echo IMG_DIR ;?>/intro-item-3.jpg" alt="">
								</div>
								<p class="intro__itemTitle">
									<strong>ТОП 10 ПРЕДЛОЖЕНИЙ</strong>
									<a href="<?php echo $fields['intro']['list']['catalog-link']; ?>">Скачать каталог</a>
								</p>
							</li>
						<?php } ?>
					</ul>
				</div>
			</section>
		</div>
	</div>
	<div class="about" id="about">
		<div class="container">
			<section class="about__section">
				<div class="about__img about__img--project">
					<img src="<?php echo $fields['project']['img']; ?>" alt="">
					<?php if($fields['intro']['list']['distance'] !== '') { ?>
						<p class="about__imgInfo">
							<strong><?php echo $fields['intro']['list']['distance']; ?></strong> 
							<!-- от локации -->
						</p>
					<?php } ?>
					<ul class="about__imgList">
						<?php if($fields['project']['has_pool']) { ?>
							<li class="about__imgItem about__imgItem--pool">Бассейн</li>
						<?php } if($fields['project']['has_gym']) { ?>
							<li class="about__imgItem about__imgItem--gym">Тренажерный зал</li>
						<?php } if($fields['project']['has_beach']) { ?>
							<li class="about__imgItem about__imgItem--beach">Уединённый пляжный отдых</li>
						<?php } ?>
					</ul>
				</div>
				<div class="about__content">
					<p class="about__caption">О проекте</p>
					<h2 class="h2 about__title"><?php echo $fields['project']['title']; ?></h2>
					<div class="about__text">
						<?php echo wpautop($fields['project']['text']); ?>
					</div>
					<ul class="about__list">
						<li class="about__item about__item--location">
							Локация <strong><?php echo $fields['project']['list']['location']; ?></strong>
						</li>
						<li class="about__item about__item--houses">Тип проекта <strong><?php echo $fields['project']['list']['type']; ?></strong></li>
						<li class="about__item about__item--shape">Территория <strong><?php echo $fields['project']['list']['area']; ?></strong></li>
						<li class="about__item about__item--home">Количество <strong><?php echo $fields['project']['list']['flats-count']; ?></strong></li>
					</ul>
				</div>
			</section>
			<section class="about__section">
				<div class="about__img">
					<img src="<?php echo $fields['location']['img']; ?>" alt="">
				</div>
				<div class="about__content">
					<p class="about__caption">О локации</p>
					<h2 class="h2 about__title"><?php echo $fields['location']['title']; ?></h2>
					<div class="about__text">
						<?php echo wpautop($fields['location']['text']); ?>
					</div>
				</div>
			</section>
			<section class="about__section">
				<div class="about__img">
					<img src="<?php echo $fields['housing']['img']; ?>" alt="">
				</div>
				<div class="about__content">
					<p class="about__caption">О жилом фонде:</p>
					<h2 class="h2 about__title"><?php echo $fields['housing']['title']; ?></h2>
					<div class="about__text">
						<?php echo wpautop($fields['housing']['text']); ?>
					</div>
					<?php if($fields['housing']['list-title'] !== "") { ?>
						<div class="about__houses">
							<h3 class="h3 about__housesTitle"><?php echo $fields['housing']['list-title']; ?></h3>
							<div class="about__housesList">
								<?php echo $fields['housing']['list']; ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</section>
		</div>
	</div>
	<?php if($fields['plan']['active']) { ?>
		<section class="plan">
			<div class="container">
				<div class="plan__wrapper">
					<div class="plan__info">
						<h2 class="h2 plan__title">План Проекта</h2>
						<ul class="plan__list">
							<?php if($fields['plan']['restaurant']) { ?>
								<li class="plan__item plan__item--food">Рестораны</li>
							<?php } ?>
							<?php if($fields['plan']['park']) { ?>
								<li class="plan__item plan__item--park">Парки</li>
							<?php } ?>
							<?php if($fields['plan']['cinema']) { ?>
								<li class="plan__item plan__item--cinema">Кинотеатры</li>
							<?php } ?>
							<?php if($fields['plan']['cafe']) { ?>
								<li class="plan__item plan__item--cafe">Кафе</li>
							<?php } ?>
						</ul>
					</div>
					<div class="plan__img">
						<img src="<?php echo $fields['plan']['img']; ?>" alt="">
					</div>
				</div>
			</div>
		</section>
	<?php } ?>
	<?php if($fields['offer']['title'] !== "") { ?>
		<section class="offer">
			<div class="container">
				<div class="offer__wrapper">
					<h2 class="h2 offer__title"><?php echo $fields['offer']['title']; ?></h2>
					<p class="offer__caption"><?php echo $fields['offer']['text']; ?></p>
					<?php if($fields['flats-count'] !== '') { ?>
						<h3 class="h2 offer__rest">Осталось <?php echo $fields['flats-count']; ?></h3>
					<?php } ?>
					<a href="#order" class="offer__btn">Оставить заявку</a>
				</div>
			</div>
		</section>
	<?php } ?>
	<section class="builder" id="company">
		<div class="container">
			<p class="about__caption">О застройщике</p>
			<h2 class="h2 about__title"><?php echo $fields['builder']['title']; ?></h2>
			<div class="builder__content">
				<div class="about__text">
					<?php echo wpautop($fields['builder']['text']); ?>
				</div>
				<?php if($fields['builder']['avg-price'] !== '') { ?>
					<p class="builder__avgPrice">
						<strong><?php echo $fields['builder']['avg-price']; ?></strong> <span>Средний рост цены на объекты застройщика</span>
					</p>
				<?php } ?>
			</div>
			<div class="builder__list">
				<?php $first_complex = $fields['builder']['complex']['first-complex']; ?>
				<?php if($first_complex['title'] !== '') { ?>
					<div class="builder__item">
						<div class="builder__img">
							<img src="<?php echo $first_complex['img']; ?>" alt="">
						</div>
						<h3 class="builder__title"><?php echo $first_complex['title']; ?></h3>
						<div class="builder__text">
							<?php echo wpautop($first_complex['text']); ?>
						</div>
						<div class="builder__rate" style="width: calc(25px * <?php echo $first_complex['rating']; ?>);"></div>
						<div class="builder__stats">
							<?php if($first_complex['growth'] !== '') { ?>
								<p class="builder__stat">Рост цены на объекты: <span><?php echo $first_complex['growth']; ?></span></p>
							<?php } ?>
							<?php if($first_complex['profitability'] !== '') { ?>
								<p class="builder__stat">Доходность объектов: <span><?php echo $first_complex['profitability']; ?></span></p>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
				<?php $second_complex = $fields['builder']['complex']['second-complex']; ?>
				<?php if($second_complex['title'] !== '') { ?>
					<div class="builder__item">
						<div class="builder__img">
							<img src="<?php echo $second_complex['img']; ?>" alt="">
						</div>
						<h3 class="builder__title"><?php echo $second_complex['title']; ?></h3>
						<div class="builder__text">
							<?php echo $second_complex['text']; ?>
						</div>
						<div class="builder__rate" style="width: calc(25px * <?php echo $second_complex['rating']; ?>);"></div>
						<div class="builder__stats">
							<?php if($second_complex['growth'] !== '') { ?>
								<p class="builder__stat">Рост цены на объекты: <span><?php echo $second_complex['growth']; ?></span></p>
							<?php } ?>
							<?php if($second_complex['profitability'] !== '') { ?>
								<p class="builder__stat">Доходность объектов: <span><?php echo $second_complex['profitability']; ?></span></p>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<section class="company">
		<div class="container">
			<p class="about__caption">О нас</p>
			<div class="company__wrapper">
				<div class="company__info">
					<h2 class="company__title"><?php echo $fields['about']['title']; ?></h2>
					<div class="company__text">
						<?php echo wpautop($fields['about']['text']); ?>
					</div>
					<h3 class="company__title company__title--second"><?php echo $fields['about']['title-2']; ?></h3>
					<div class="company__text">
						<?php echo wpautop($fields['about']['text-2']); ?>
					</div>
				</div>
				<ul class="company__facts">
					<li class="company__fact"><span><?php echo $fields['about']['advantages']['first']; ?></span> на рынке премиальной недвижимости</li>
					<li class="company__fact"><span><?php echo $fields['about']['advantages']['second']; ?></span> на рынке премиальной недвижимости</li>
					<li class="company__fact"><span><?php echo $fields['about']['advantages']['third']; ?></span> включая клиентов TOP 100 FORBES List</li>
					<li class="company__fact"><span><?php echo $fields['about']['advantages']['fourth']; ?></span> объектов по всему миру</li>
					<li class="company__fact"><span><?php echo $fields['about']['advantages']['fifth']; ?></span> на рынке премиальной недвижимости</li>
					<li class="company__fact"><span><?php echo $fields['about']['advantages']['sixth']; ?></span> Экспертов работают на вас!</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="order" id="order">
		<div class="container">
			<div class="order__wrapper">
				<h2 class="order__title">Оставьте заявку <br> и мы свяжемся с вами!</h2>
				<form class="form">
					<label class="form__label">
						<input type="text" class="form__input" placeholder="Ваше имя">
					</label>
					<label class="form__label">
						<input type="tel" class="form__input" placeholder="Ваш телефон">
					</label>
					<button class="form__submit">Оставить заявку</button>
				</form>
			</div>
		</div>
	</section>
<?php get_footer(); ?>