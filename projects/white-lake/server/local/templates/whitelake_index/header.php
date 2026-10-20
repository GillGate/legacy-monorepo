<?php if(!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
	<?php $APPLICATION->ShowHead(); ?>
	<?php
		use Bitrix\Main\Page\Asset;
		// Подключаем JS
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/libs.js');
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/main.js');

		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/libraries/fancybox-master/dist/jquery.fancybox.min.js');

		// Подключаем CSS
		Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/style.min.css');
		Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/libraries/fancybox-master/dist/jquery.fancybox.min.css');

		// Подключаем строки
		Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">');
	?>
    <title><? $APPLICATION->ShowTitle(); ?></title>
	<meta charset="UTF-8">
</head>
<body>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<div class="header__functionPopup">
		<div class="header__functionPopupWrapper header__functionPopupWrapper--unactive">
			<a href="yandexnavi://build_route_on_map?lat_to=43.460886&lon_to=39.904832" class="header__functionPopupElem">
				<div class="header__functionPopupImg">
					<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/header-location-route.jpg" alt="">
				</div>
				<p class="header__functionLink">Построить маршрут в Яндекс Навигатор</p>
			</a>
			<a href="https://yandex.ua/maps/-/CCUYE2gosA" target="_blank" rel="noopener" class="header__functionPopupElem">
				<div class="header__functionPopupImg">
					<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/header-location-map.jpg" alt="">
				</div>
				<p class="header__functionLink">Показать точку на Яндекс Карте</p>
			</a>
			<? if(($APPLICATION->GetCurPage() === '/') || ($APPLICATION->GetCurPage() === '/contacts/')) : ?>
				<a href="#contact" class="header__functionPopupElem header__functionPopupElem--location">
					<div class="header__functionPopupImg">
						<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/header-location-show.jpg" alt="">
					</div>
					<p class="header__functionLink">Проезд общественным транспортом</p>
				</a>
			<? else : ?>
				<a href="/contacts/#contact" class="header__functionPopupElem header__functionPopupElem--external">
					<div class="header__functionPopupImg">
						<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/header-location-show.jpg" alt="">
					</div>
					<p class="header__functionLink">Проезд общественным транспортом</p>
				</a>
			<?endif;?>
		</div>
	</div>
	<header class="header">
		<div class="header__head">
			<a href="https://sanatorii.gupmc.ru/objects/" target="_blank" rel="noopener" class="header__btn header__btn--objects">
				Посмотреть<br>
				все объекты
			</a>
			<?if($APPLICATION->GetCurPage() === '/') : ?>
				<div class="header__logo">
					<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/logo.svg" alt="Озеро Белое" width="380">
				</div>
			<?else :?>
				<a href="/" class="header__logo">
					<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/logo.svg" alt="Озеро Белое" width="380">
				</a>
			<?endif;?>
			<div class="header__control">
				<button class="header__function header__function--weakeye">
					<div class="header__functionImg">
						<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/header-eye.svg" alt="">
					</div>
					<p class="header__functionText">
						Версия для <br>
						слабовидящих
					</p>
				</button>
				<button class="header__function header__function--menu header__function--menuMain" href="#">
					<span></span>
				</button>
				<button class="header__function header__function--location">
					<div class="header__functionBody header__functionBody--open">
						<div class="header__functionImg">
							<svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M11.1665 2.91116C10.1074 1.13068 8.2262 0.042915 6.13425 0.00134473C6.04495 -0.000448242 5.95507 -0.000448242 5.86574 0.00134473C3.77383 0.042915 1.89263 1.13068 0.833485 2.91116C-0.24911 4.73109 -0.27873 6.91718 0.754238 8.75899L5.08172 16.475C5.08366 16.4784 5.08561 16.4818 5.08762 16.4852C5.27802 16.8076 5.6191 17 6.00006 17C6.38099 17 6.72208 16.8075 6.91244 16.4852C6.91445 16.4818 6.91639 16.4784 6.91834 16.475L11.2458 8.75899C12.2787 6.91718 12.2491 4.73109 11.1665 2.91116ZM6 7.70314C4.6468 7.70314 3.5459 6.63071 3.5459 5.31251C3.5459 3.99432 4.6468 2.92189 6 2.92189C7.35319 2.92189 8.45409 3.99432 8.45409 5.31251C8.45409 6.63071 7.35322 7.70314 6 7.70314Z" fill="#FEA800"/>
							</svg>
						</div>
						<p class="header__functionText">
							Схема <br>
							проезда
						</p>
					</div>
				</button>
			</div>
			<div class="media header__media header__media--desktop">
				<a href="https://vk.com/gupmc" target="_blank" rel="noopener" class="media__socialLink media__socialLink--vk">
					<svg width="23" height="14" viewBox="0 0 23 14" fill="#C4C4C4" xmlns="http://www.w3.org/2000/svg">
						<path d="M19.0859 8.028C18.714 7.538 18.8204 7.32 19.0859 6.882C19.0907 6.877 22.1603 2.451 22.4766 0.95L22.4785 0.949C22.6357 0.402 22.4785 0 21.7185 0H19.2037C18.5636 0 18.2684 0.345 18.1103 0.731C18.1103 0.731 16.8299 3.929 15.0186 6.002C14.434 6.601 14.1637 6.793 13.8446 6.793C13.6874 6.793 13.443 6.601 13.443 6.054V0.949C13.443 0.293 13.2638 0 12.7338 0H8.7796C8.37804 0 8.13941 0.306 8.13941 0.591C8.13941 1.213 9.04506 1.356 9.13898 3.106V6.903C9.13898 7.735 8.99427 7.888 8.67322 7.888C7.81835 7.888 5.74349 4.677 4.51391 1.002C4.26569 0.289 4.02322 0.000999928 3.37824 0.000999928H0.86253C0.144713 0.000999928 0 0.346 0 0.732C0 1.414 0.854863 4.805 3.9753 9.285C6.05496 12.343 8.98373 14 11.648 14C13.2494 14 13.4449 13.632 13.4449 12.999C13.4449 10.077 13.3002 9.801 14.1024 9.801C14.4742 9.801 15.1144 9.993 16.6094 11.468C18.3182 13.217 18.599 14 19.5555 14H22.0702C22.7871 14 23.1503 13.632 22.9414 12.906C22.4632 11.379 19.2315 8.238 19.0859 8.028Z"/>
					</svg>
				</a>
				<a href="https://www.facebook.com/gup_mc-103809921634409" target="_blank" rel="noopener" class="media__socialLink media__socialLink--fb">
					<svg width="11" height="23" viewBox="0 0 11 23" fill="#C4C4C4" xmlns="http://www.w3.org/2000/svg">
						<path d="M8.99175 3.81896H11V0.161958C10.6535 0.112125 9.46196 0 8.07424 0C5.17874 0 3.19523 1.90421 3.19523 5.40404V8.625H0V12.7132H3.19523V23H7.11274V12.7142H10.1787L10.6654 8.62596H7.11182V5.80942C7.11274 4.62779 7.41705 3.81896 8.99175 3.81896Z"/>
					</svg>
				</a>
				<a href="https://www.instagram.com/gup_mc/" target="_blank" rel="noopener" class="media__socialLink media__socialLink--in">
					<svg width="22" height="22" viewBox="0 0 22 22" fill="#C4C4C4" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M16.0448 0H5.9552C2.67145 0 0 2.67145 0 5.9552V16.045C0 19.3286 2.67145 22 5.9552 22H16.045C19.3286 22 22 19.3286 22 16.045V5.9552C22 2.67145 19.3286 0 16.0448 0ZM11 17.0155C7.68301 17.0155 4.98454 14.317 4.98454 11C4.98454 7.68301 7.68301 4.98454 11 4.98454C14.317 4.98454 17.0155 7.68301 17.0155 11C17.0155 14.317 14.317 17.0155 11 17.0155ZM17.1593 6.40318C16.1791 6.40318 15.3818 5.60591 15.3818 4.62569C15.3818 3.64546 16.1791 2.84802 17.1593 2.84802C18.1395 2.84802 18.937 3.64546 18.937 4.62569C18.937 5.60591 18.1395 6.40318 17.1593 6.40318ZM11.0001 6.27425C8.39444 6.27425 6.27437 8.39416 6.27437 11C6.27437 13.6056 8.39444 15.7257 11.0001 15.7257C13.6059 15.7257 15.7258 13.6056 15.7258 11C15.7258 8.39416 13.6059 6.27425 11.0001 6.27425ZM16.6714 4.62572C16.6714 4.35683 16.8903 4.13796 17.1592 4.13796C17.4282 4.13796 17.6471 4.35667 17.6471 4.62572C17.6471 4.89478 17.4282 5.11349 17.1592 5.11349C16.8903 5.11349 16.6714 4.89461 16.6714 4.62572Z"/>
					</svg>
				</a>
				<a href="https://www.youtube.com/channel/UCcqEvB1iGpEVryDlq60bpWQ/videos" target="_blank" rel="noopener" class="media__socialLink media__socialLink--yt">
					<svg width="24" height="17" viewBox="0 0 24 17" fill="#C4C4C4" xmlns="http://www.w3.org/2000/svg">
						<path d="M23.5055 2.6294C23.229 1.60122 22.4183 0.790724 21.3903 0.513868C19.5122 0 11.9997 0 11.9997 0C11.9997 0 4.48756 0 2.60948 0.494386C1.60122 0.770949 0.770802 1.60137 0.494239 2.6294C0 4.50733 0 8.40192 0 8.40192C0 8.40192 0 12.3161 0.494239 14.1744C0.771095 15.2025 1.58145 16.013 2.60962 16.2898C4.50733 16.8038 12 16.8038 12 16.8038C12 16.8038 19.5122 16.8038 21.3903 16.3095C22.4185 16.0327 23.229 15.2222 23.5058 14.1942C23.9999 12.3161 23.9999 8.4217 23.9999 8.4217C23.9999 8.4217 24.0197 4.50733 23.5055 2.6294ZM9.60793 11.9999V4.80396L15.8549 8.40192L9.60793 11.9999Z"/>
					</svg>
				</a>
			</div>
			<div class="header__order">
				<div class="header__phones">
					<a href="tel:+74951222200" class="header__phone">+7 495 122 22 00</a>
					<a href="tel:+786224601690" class="header__phone header__phone--second">+7 8622 460 16 90</a>
				</div>
				<a href="#" class="header__btn">
					Заказать звонок
				</a>
			</div>
		</div>
		<nav class="header__nav header__nav--main">
			<ul class="header__list">
				<li class="header__item--nested">
					<a href="/about/" class="header__link header__link--nested">О санатории</a>
					<ul class="header__nestedList">
						<li><a href="/about/" class="header__link">О компании</a></li>
						<li><a href="/about/reviews/" class="header__link">Отзывы</a></li>
						<li><a href="/about/faq/" class="header__link">Частые вопросы</a></li>
						<li><a href="/about/documents/" class="header__link">Документы</a></li>
						<li><a href="/about/gallery/" class="header__link">Фотогалерея</a></li>
					</ul>
				</li>
				<li class="header__item--nested">
					<a href="/residence/" class="header__link header__link--nested">Проживание</a>
					<?$APPLICATION->IncludeComponent("bitrix:menu", "residence_menu", Array(
						"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
							"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
							"DELAY" => "N",	// Откладывать выполнение шаблона меню
							"MAX_LEVEL" => "1",	// Уровень вложенности меню
							"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
								0 => "",
							),
							"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
							"MENU_CACHE_TYPE" => "N",	// Тип кеширования
							"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
							"ROOT_MENU_TYPE" => "residence",	// Тип меню для первого уровня
							"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
						),
						false
					);?>
				</li>
				<li><a href="/healing/" class="header__link">Лечение</a></li>
				<li><a href="/services/" class="header__link">Услуги</a></li>
				<li><a href="/promotions/" class="header__link">Акции</a></li>
				<li><a href="/prices/" class="header__link">Цены</a></li>
				<li><a href="/news/" class="header__link">Новости</a></li>
				<li><a href="/contacts/" class="header__link">Контакты</a></li>
			</ul>
			<?$APPLICATION->IncludeComponent(
				"bitrix:search.form",
				"search",
				Array(
					"PAGE" => "/search/index.php",
					"USE_SUGGEST" => "N"
				)
			);?>
		</nav>
	</header>
	<div class="header header--fixed">
		<?if($APPLICATION->GetCurPage() === '/') : ?>
			<div class="header__logo">
				<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/logo.svg" alt="Озеро Белое" width="380">
			</div>
		<?else :?>
			<a href="/" class="header__logo">
				<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/logo.svg" alt="Озеро Белое" width="380">
			</a>
		<?endif;?>
		<button class="header__function header__function--menu header__function--menuFixed" href="#">
			<span></span>
		</button>
		<div class="header__nav header__nav--fixed">
			<ul class="header__list">
				<li class="header__item--nested">
					<a href="/about/" class="header__link header__link--nested">О санатории</a>
					<ul class="header__nestedList">
						<li><a href="/about/" class="header__link">О компании</a></li>
						<li><a href="/about/reviews/" class="header__link">Отзывы</a></li>
						<li><a href="/about/faq/" class="header__link">Частые вопросы</a></li>
						<li><a href="/about/documents/" class="header__link">Документы</a></li>
						<li><a href="/about/gallery/" class="header__link">Фотогалерея</a></li>
					</ul>
				</li>
				<li class="header__item--nested">
					<a href="/residence/" class="header__link header__link--nested">Проживание</a>
					<?$APPLICATION->IncludeComponent("bitrix:menu", "residence_menu", Array(
						"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
							"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
							"DELAY" => "N",	// Откладывать выполнение шаблона меню
							"MAX_LEVEL" => "1",	// Уровень вложенности меню
							"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
								0 => "",
							),
							"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
							"MENU_CACHE_TYPE" => "N",	// Тип кеширования
							"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
							"ROOT_MENU_TYPE" => "residence",	// Тип меню для первого уровня
							"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
						),
						false
					);?>
				</li>
				<li><a href="/healing/" class="header__link">Лечение</a></li>
				<li><a href="/services/" class="header__link">Услуги</a></li>
				<li><a href="/promotions/" class="header__link">Акции</a></li>
				<li><a href="/prices/" class="header__link">Цены</a></li>
				<li><a href="/news/" class="header__link">Новости</a></li>
				<li><a href="/contacts/" class="header__link">Контакты</a></li>
			</ul>
		</div>
	</div>
	<?if($APPLICATION->GetCurPage() == '/'): ?>
	<?$APPLICATION->IncludeComponent(
	"custom:banner", 
	"main", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "content",
		"ITEMS_LIMIT" => "10",
		"COMPONENT_TEMPLATE" => "main"
	),
	false
);?>
<?endif;?>
	<?if($APPLICATION->GetCurPage() !== '/'): ?>
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs__list">
				<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"whitelake_breadcrumb", 
	array(
		"PATH" => "/",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "whitelake_breadcrumb"
	),
	false
);
				?>
			</div>
		</div>
	</div>
	<?endif;?>
	<!--<div class="container">
		<h2 class="section__title">
			<? $APPLICATION->ShowTitle(false) ?>
		</h2>
	</div>-->