<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Изумруд");
$APPLICATION->SetTitle("Изумруд"); ?><section class="properties properties--main">
<div class="container">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"advantages",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "11",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
</div>
 </section>
<? CMODULE::IncludeModule('iblock');
		$arPromSelect = ['ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_TEXT', 'DETAIL_PAGE_URL', 'PREVIEW_PICTURE'];
		$arPromFilter = ['IBLOCK_ID' => 8 , 'ACTIVE_DATE' => 'Y','ACTIVE' => 'Y', '!PROPERTY_SHOW_MAIN' => false];
		$resProm = CIBlockElement::GetList(Array(), $arPromFilter, false, Array('nPageSize' => 4), $arPromSelect);
	?> <section class="section section--prom">
<div class="container">
	<div class="section__head">
		<h2 class="section__title section__title--special">Акции и специальные предложения</h2>
 <a href="/promotions/" class="section__link section__more section__more--global">Перейти к акциям</a>
	</div>
	<div class="section__list section__list--adaptive section__list--slider section__list--prom">
		 <?while($ob = $resProm->GetNextElement()) : $item = $ob->getFields();?>
		<div>
			<div class="section__item">
				<div class="section__img">
 <img src="<?=CFile::getPath($item['PREVIEW_PICTURE']);?>" alt="">
				</div>
				<div class="section__content">
					<h3 class="section__listTitle"><?=$item['NAME'];?></h3>
					<div class="text section__text">
						 <?=$item['PREVIEW_TEXT'];?>
					</div>
					<div class="section__control">
 <a href="<?=$item['IBLOCK_CODE'];?>/<?=$item['CODE'];?>
						 /" class="section__link section__more">Подробнее</a> <a href="#" class="section__link">Забронировать</a>
					</div>
				</div>
			</div>
		</div>
		 <?endwhile;?>
	</div>
	<div class="section__dots section__dots--prom">
	</div>
</div>
 </section>
<? 
		$arRoomSelect = ['ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_TEXT', 'DETAIL_PAGE_URL', 'PREVIEW_PICTURE'];
		$arRoomFilter = ['IBLOCK_ID' => 7 , 'ACTIVE_DATE' => 'Y','ACTIVE' => 'Y', '!PROPERTY_SHOW_MAIN' => false];
		$resRoom = CIBlockElement::GetList(Array("SORT"=>"sort"), $arRoomFilter, false, Array('nPageSize' => 6), $arRoomSelect);
	?> <section class="section section--category">
<div class="container">
	<div class="section__head">
		<h2 class="section__title section__title--special">Свободные номера</h2>
 <a href="/residence/" class="section__link section__more section__more--global">Перейти ко всем номерам</a>
	</div>
	<div class="section__list section__list--slider section__list--category">
		 <?while($ob = $resRoom->GetNextElement()) : 
					$item = $ob->getFields(); $props = $ob->getProperties();?>
		<div>
			<div class="section__item">
				<div class="section__img">
 <img src="<?=CFile::getPath($item['PREVIEW_PICTURE']);?>" alt="">
				</div>
				<div class="section__content">
					<div class="section__priceWrapper">
						 <?if(empty($props['price_full']['VALUE'])) : ?>
						<div class="section__priceItem section__priceItem--single">
							<p class="section__price">
								 <?=$props['price_wd']['VALUE'];?>
							</p>
							 Цена
						</div>
						 <?else : ?>
						<div class="section__priceItem">
							<p class="section__price">
								 <?=$props['price_wd']['VALUE'];?>
							</p>
							 Цена в будни
						</div>
						<div class="section__priceItem section__priceItem--double">
							<p class="section__price">
								 <?=$props['price_full']['VALUE'];?>
							</p>
							 Без скидки
						</div>
						 <?endif; ?>
					</div>
					<h3 class="section__listTitle"><?=$item['NAME']?></h3>
					<div class="text section__text">
						 <?=$item['PREVIEW_TEXT'];?>
					</div>
					<div class="section__control">
 <a href="<?=$item['DETAIL_PAGE_URL'];?>" class="section__link section__more">Подробнее</a> <a href="#" class="section__link">Забронировать</a>
					</div>
				</div>
			</div>
		</div>
		 <?endwhile;?>
	</div>
	<div class="section__dots section__dots--category">
	</div>
	 <?php $APPLICATION->IncludeFile('/include/booking.php');?>
</div>
 </section>
<? 
		$arServiceSelect = ['ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_TEXT', 'DETAIL_PAGE_URL', 'PREVIEW_PICTURE'];
		$arServiceFilter = ['IBLOCK_ID' => 4 , 'ACTIVE_DATE' => 'Y','ACTIVE' => 'Y', '!PROPERTY_SHOW_MAIN' => false];
		$resService = CIBlockElement::GetList(Array(), $arServiceFilter, false, Array('nPageSize' => 6), $arServiceSelect);
	?> <section class="section section--service">
<div class="container">
	<div class="section__head">
		<h2 class="section__title section__title--special">Наши услуги</h2>
 <a href="/services/" class="section__link section__more section__more--global">Перейти к услугам</a>
	</div>
	<div class="section__list section__list--slider section__list--service">
		 <?while($ob = $resService->GetNextElement()) : $item = $ob->getFields(); ?>
		<div>
			<div class="section__item">
				<div class="section__img">
 <img src="<?=CFile::getPath($item['PREVIEW_PICTURE']);?>" alt="">
				</div>
				<div class="section__content">
					<h3 class="section__listTitle"><?=$item['NAME'];?></h3>
					<div class="text section__text">
						 <?=$item['PREVIEW_TEXT'];?>
					</div>
					<div class="section__control">
 <a href="<?=$item['IBLOCK_CODE'];?>/<?=$item['CODE'];?>
						 /" class="section__link section__more">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
		 <?endwhile;?>
	</div>
	<div class="section__dots section__dots--service">
	</div>
</div>
 </section> <section class="section section--gallery">
<div class="container">
	<h2 class="section__title">
	Фотогаллерея </h2>
	 <?$APPLICATION->IncludeComponent(
	"custom:gallery",
	"gillgate",
	Array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BIG_ELEMENT" => "1",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "gillgate",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "arrFilter",
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "gallery",
		"LINE_ELEMENT_COUNT" => "3",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Фотографии",
		"PAGE_ELEMENT_COUNT" => "5",
		"PROPERTY_CODE" => array(0=>"",1=>"REAL_PICTURE",2=>"",),
		"SECTION_CODE" => "",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N"
	)
);?>
</div>
 </section> <section class="section section--about">
<div class="container">
	<div class="about">
		<div class="about__main">
			<div class="about__info">
				<h3 class="section__listTitle">Пансионат «Изумруд» ГУП «Медицинский центр» Управления делами Мэра и Правительства Москвы предлагает отдохнуть в Сочи.&nbsp;<br>
 </h3>
				<p>
					 В здравницу можно приехать как по оздоровительной путевке (например, восстановление после коронавирусной инфекции, климатолечение), так и по программе «Завтрак в Сочи» (bed and breakfast). Программа санаторно-курортного лечения включает динамическое наблюдение за пациентом с использованием современных инструментальных методов оценки эффективности лечения. Если вы ищите проживание в Сочи&nbsp; с посещением&nbsp; SPA-комплекса – то пансионат «Изумруд» готов предоставить услуги бальнеологии, грязелечения, массажа, услуги банного комплекса (сауна с купелью, хамам, бассейн, травяные чаи).
				</p>
				<p>
					 Комфортные современные номера, вкусное питание по системе «шведский стол»,&nbsp;&nbsp; прекрасно оснащенное медицинское отделение и закрытый бассейн с пресной водой позволят Вам насладиться отдыхом в любое время&nbsp; года.
				</p>
				<p>
					 Время заселения в пансионат (Check in) - 12.00; время выезда (расчётный час check out) – 10.00.
				</p>
 <a href="/about/" class="section__more">Подробнее</a>
			</div>
			<div class="about__img">
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/about/inf.jpg" alt="">
			</div>
		</div>
		<ul class="about__list">
			<li class="about__item">
			<div class="about__img">
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/about/about2.jpg" alt="">
			</div>
			<div class="about__info">
				<h3 class="section__listTitle">Работаем круглый год</h3>
				<p class="section__text">
					 Центральная система кондиционирования позволяет поддерживать оптимальный температурный режим в каждом номере пансионата, что особенно важно в летние жаркие месяцы.
				</p>
			</div>
 </li>
			<li class="about__item">
			<div class="about__img">
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/about/about3.jpg" alt="">
			</div>
			<div class="about__info">
				<h3 class="section__listTitle">Лечебный микроклимат</h3>
				<p class="section__text">
					 Центральная система кондиционирования позволяет поддерживать оптимальный температурный режим в каждом номере пансионата, что особенно важно в летние жаркие месяцы.
				</p>
			</div>
 </li>
			<li class="about__item">
			<div class="about__img">
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/about/about4.jpg" alt="">
			</div>
			<div class="about__info">
				<h3 class="section__listTitle">Комфортно при любой погоде</h3>
				<p class="section__text">
					 Центральная система кондиционирования позволяет поддерживать оптимальный температурный режим в каждом номере пансионата, что особенно важно в летние жаркие месяцы.
				</p>
			</div>
 </li>
			<li class="about__item">
			<div class="about__img">
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/about/about1.jpg" alt="">
			</div>
			<div class="about__info">
				<h3 class="section__listTitle">Лояльная политика</h3>
				<p class="section__text">
					 Наша программа лояльности включает: скидку 5% на путёвки по карте москвича; действует дисконтная программа со скидками до 10%; разработана программа для пенсионеров по специальной цене «Здоровье в подарок» и многое другое.
				</p>
			</div>
 </li>
		</ul>
	</div>
</div>
 </section>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"news-main",
	Array(
		"ACTIVE_DATE_FORMAT" => "j F Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?> <section class="section section--social">
<div class="container">
	<h2 class="section__title">
	Мы в социальных сетях </h2>
	<div class="social section__list section__list--slider section__list--social">
		<div>
			<div class="social__item">
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/main/1social.jpg" alt=""> <a href="https://www.instagram.com/gup_mc/" target="_blank" rel="noopener" class="section__imgCaption social__link">
				Sanatory_instagram </a>
			</div>
		</div>
		<div>
			<div class="social__item">
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/main/6social.jpg" alt=""> <a href="https://vk.com/gupmc" target="_blank" rel="noopener" class="section__imgCaption social__link">
				vk.com/Sanatory </a>
			</div>
		</div>
		<div>
			<div class="social__item">
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/main/3social.jpg" alt=""> <a href="https://www.facebook.com/gup_mc-103809921634409" target="_blank" rel="noopener" class="section__imgCaption social__link">
				facebook.com/SanatoryLesnayaScazka </a>
			</div>
		</div>
		<div>
			<div class="social__item">
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/main/4social.jpg" alt=""> <a href="https://www.instagram.com/gup_mc/" target="_blank" rel="noopener" class="section__imgCaption social__link">
				Sanatory_instagram </a>
			</div>
		</div>
		<div>
			<div class="social__item">
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/main/5social.jpg" alt=""> <a href="https://vk.com/gupmc" target="_blank" rel="noopener" class="section__imgCaption social__link">
				vk.com/Sanatory </a>
			</div>
		</div>
		<div>
			<div class="social__item">
 <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/main/2social.jpg" alt=""> <a href="https://www.facebook.com/gup_mc-103809921634409" target="_blank" rel="noopener" class="section__imgCaption social__link">
				facebook.com/SanatoryLesnayaScazka </a>
			</div>
		</div>
	</div>
	<div class="section__dots section__dots--social">
	</div>
</div>
 </section> <section class="section section--review">
<div class="container">
	<h2 class="section__title">
	Помогите нам стать лучше! </h2>
	<p class="text">
		 Пожалуйста, уделите нам пару минут Вашего времени и оцените нашу работу, заполнив небольшую анкету.
	</p>
	<div class="estimate estimate--main">
 <a href="/anketa/" class="button">Оценить работу</a>
	</div>
</div>
 </section> <section class="section section--contact">
<h2 class="section__title">
Контакты </h2>
<div class="contact" id="contact">
	<div class="contact__map">
		 <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A691ff50f794288daa5f2a3ead9cf4dc30884d92f192d5c905b746539926892b5&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
	</div>
	<div class="container">
		<div class="contact__wrapper contact__wrapper--main">
			<div class="contact__item">
				<h3 class="contact__title contact__title--phone">Телефон</h3>
				<div class="contact__info">
 <a href="tel:+886224601690" class="contact__phone">+8 (862) 246-01-690</a> <!-- <a href="tel:+886224601690" class="contact__phone">+ 7 987 123 45 67</a> -->
				</div>
			</div>
			<div class="contact__item">
				<h3 class="contact__title contact__title--mail">Почта</h3>
				<div class="contact__info">
 <a href="mailto:izumrud@gupmc.ru">izumrud@gupmc.ru</a>
				</div>
			</div>
			<div class="contact__item">
				<h3 class="contact__title contact__title--period">Работаем</h3>
				<div class="contact__info">
					 с ПН по ПТ:<br>
					 с 8.00 до 20.00
				</div>
			</div>
			<div class="contact__item">
				<h3 class="contact__title contact__title--location">Адрес</h3>
				<div class="contact__info">
 <address>
					354340, <br>
					 Краснодарский край, г. Сочи, <br>
					 Адлерский район, ул. Ленина, <br>
					 д. 278а </address>
				</div>
			</div>
			<div class="contact__social">
				<h3 class="contact__title contact__title--social">
				Подписывайтесь<br>
				 на нас в соц. сетях! </h3>
 <a href="https://vk.com/gupmc" target="_blank" rel="noopener" class="contact__socialLink contact__socialLink--vk">
				vk.com/Sanatory </a> <a href="https://www.facebook.com/gup_mc-103809921634409" target="_blank" rel="noopener" class="contact__socialLink contact__socialLink--fb">
				facebook.com/Sanator... </a> <a href="https://www.instagram.com/gup_mc/" target="_blank" rel="noopener" class="contact__socialLink contact__socialLink--in">
				Sanatory_instagram </a> <a href="https://www.youtube.com/channel/UCcqEvB1iGpEVryDlq60bpWQ/videos" target="_blank" rel="noopener" class="contact__socialLink contact__socialLink--yt">
				youtube.com/Sanator.. </a>
			</div>
		</div>
	</div>
</div>
 </section><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>