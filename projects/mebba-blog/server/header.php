<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
	<?php 
		$req_search = $_REQUEST['s'] ?? '';

		global $types;

		$types = get_terms([
			'taxonomy' => 'type',
			'orderby'  => 'none',
			'order'    => 'ASC'
		]);
	?>
	<header class="header">
		<div class="container">
			<div class="header__wrapper">
				<a href="https://mebba.ru" class="header__logo">
					<img src="<?php echo IMG_DIR ;?>/logo.svg" alt="Mebba">
				</a>
				<button class="button header__search header__search--hidden">
					<span>Поиск</span>
				</button>
				<div class="header__menu">
					<button class="header__bar" aria-label="Меню"><span></span></button>
					<nav class="header__nav">
						<a href="https://go.mebba.ru" target="_blank" class="header__link">Заказчику</a>
						<a href="https://do.mebba.ru" target="_blank" class="header__link">Исполнителю</a>
						<a href="https://go.mebba.ru/create/select/1" class="header__create header__create--desktop">Создать заявку</a>
						<a href="https://go.mebba.ru/create/select/1" class="header__login">Войти</a>
						<div class="header__taxonomy">
							<a class="header__link header__link--home" href="/">
								<img src="<?php echo IMG_DIR ;?>/icon-home.svg" width="30" height="30" alt="">
								<span>Главная</span>
							</a>
							<?php foreach($types as $type_item) { ?>
								<a href="/type/<?php echo $type_item->slug; ?>" class="header__link"><?php echo $type_item->name; ?></a>
							<?php } ?>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<section class="search">
		<div class="container">
			<div class="search__wrapper">
				<form action="/article/" class="search__form">
					<label class="search__label">
						<input class="search__input" type="text" name="s" maxlength="100" placeholder="Искать...">
					</label>
					<button type="submit" class="search__submit" disabled>Найти</button>
				</form>
				<button type="button" class="search__close">
					<img src="<?php echo IMG_DIR ;?>/icon-close.svg" alt="x">
				</button>
			</div>
		</div>
	</section>
	<div class="header-blog">
		<div class="container">
			<div class="header-blog__wrapper">
				<a class="header-blog__link" href="/">
					<img src="<?php echo IMG_DIR ;?>/icon-home.svg" width="30" height="30" alt="">
				</a>
				<span>/</span>
				<div class="category">
					<?php foreach($types as $type_item) { ?>
						<a href="/type/<?php echo $type_item->slug; ?>" class="category__item">
							<?php echo $type_item->name; ?>
						</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>