<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
	<?php wp_head(); ?>
</head>
<body>
	<?php $fields = get_fields(); ?>
	<?php $contacts = get_fields(5); ?>
	<?php $lang = $GLOBALS['lang']; ?>
	<header class="header">
		<div class="container">
			<div class="header__mobile">
				<button class="header__bar" aria-label="Меню"><span></span></button>
				<button type="button" class="button header__mobileOrder" data-fancybox data-src="#popup">
					<?php if($lang === 'en') { 
						echo "Order call";
					} else {
						echo "Заказать звонок";
					} ?>
				</button>
			</div>
			<div class="header__menu">
				<div class="header__wrapper">
					<div class="header__top">
						<div class="header__logo">
							<img src="<?php echo IMG_DIR ;?>/logo.svg" alt="BezViz">
						</div>
						<h1 class="header__title">
							<?php if($lang === 'en') { 
								echo "Tourist Assistance Agency in Thailand";
							} else {
								echo "Агенство помощи туристам в Таиланде";
							} ?>
						</h1>
					</div>
					<nav class="nav header__nav">
						<a href="#about" class="nav__link">
							<?php if($lang === 'en') { 
								echo "About";
							} else {
								echo "О нас";
							} ?>
						</a>
						<a href="#help" class="nav__link">
							<?php if($lang === 'en') { 
								echo "How to get";
							} else {
								echo "Как получить";
							} ?>
						</a>
						<!-- <div href="#services" class="nav__link nav__link--nested" tabindex="0">
							<span>
								<?php if($lang === 'en') { 
									echo "All services";
								} else {
									echo "Все услуги";
								} ?>
							</span>
							<div class="nav__nested">
								<a href="#" class="nav__link">Загран паспорт на 5 лет</a>
								<a href="#" class="nav__link">Загран паспорт на 5 лет</a>
								<a href="#" class="nav__link">Загран паспорт на 5 лет</a>
								<a href="#" class="nav__link">Загран паспорт на 5 лет</a>
								<a href="#" class="nav__link">Загран паспорт на 5 лет</a>
							</div>
						</div> -->
					<!-- 	<a href="#reviews" class="nav__link">
							<?php if($lang === 'en') { 
								echo "Reviews";
							} else {
								echo "Отзывы";
							} ?>
						</a> -->
						<a href="#contacts" class="nav__link">
							<?php if($lang === 'en') { 
								echo "Contacts";
							} else {
								echo "Контакты";
							} ?>
						</a>
					</nav>
					<div class="header__order">
						<button type="button" class="button header__button" data-fancybox data-src="#popup">
							<?php if($lang === 'en') { 
								echo "Order call";
							} else {
								echo "Заказать звонок";
							} ?>
						</button>
						<a href="tel:+0946145073" class="header__phone"><?php echo $contacts['social']['phone']; ?></a>
					</div>
					<div class="socialMedia header__social">
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
	</header>