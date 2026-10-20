<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отзывы");
?><section class="section page single about">
<div class="container">
	<h2 class="section__title">
	Отзывы </h2>
	<div class="about__wrapper">
		<div class="about__nav">
 <a href="/about/" class="about__link">О компании</a> <a href="/about/reviews/" class="about__link about__link--active">Отзывы</a> <a href="/about/documents/" class="about__link">Документы</a> <a href="/about/faq/" class="about__link">Частые вопросы</a> <a href="/about/gallery/" class="about__link">Фотогалерея</a>
		</div>
		<div class="about__content">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"reviews",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
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
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"DETAIL_TEXT",2=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "7",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "whitelake_pagination",
		"PAGER_TITLE" => "Отзывы",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
		</div>
	</div>
</div>
 </section> <section class="section section--estimate">
<h2 class="section__title">
Оставьте свой честный отзыв! </h2>
<p class="text">
	 Оставьте, пожалуйста, свой отзыв о нас, Ваше мнение для нас очень важно
</p>
<div class="estimate estimate--about">
 <button href="#" class="button estimate__open">Оставить отзыв</button>
</div>
<form class="estimate__form estimate__form--about" id="reviewForm" data-path="<?=DEFAULT_TEMPLATE_PATH;?>">
	<div class="estimate__left">
		<div class="estimate__item">
			<h3 class="estimate__title">Когда вы у нас отдыхали?*</h3>
			<select class="estimate__input estimate__select estimate__select--short" name="year">
				<option value="" selected="" disabled="">Год</option>
				<option value="2021">2021</option>
				<option value="2020">2020</option>
				<option value="2019">2019</option>
				<option value="2018">2018</option>
				<option value="2017">2017</option>
				<option value="2016">2016</option>
				<option value="2015">2015</option>
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012">2012</option>
			</select>
			<select class="estimate__input estimate__select estimate__select--short" name="month">
				<option value="" selected="" disabled="">Месяц</option>
				<option value="Январь">Январь</option>
				<option value="Февраль">Февраль</option>
				<option value="Март">Март</option>
				<option value="Апрель">Апрель</option>
				<option value="Май">Май</option>
				<option value="Июнь">Июнь</option>
				<option value="Июль">Июль</option>
				<option value="Август">Август</option>
				<option value="Сентябрь">Сентябрь</option>
				<option value="Октябрь">Октябрь</option>
				<option value="Ноябрь">Ноябрь</option>
				<option value="Декабрь">Декабрь</option>
			</select>
		</div>
		<div class="estimate__item">
			<h3 class="estimate__title">Пожалуйста, укажите санаторий*</h3>
			<select class="estimate__input estimate__select" name="sanatory">
				<option value="Детский санаторий им.Т. Г. Шевченко">Детский санаторий им.Т. Г. Шевченко</option>
				<option value="Санаторий Звенигород">Санаторий Звенигород</option>
				<option value="Санаторий Озеро Белое">Санаторий Озеро Белое</option>
				<option value="Санаторий Литвиново">Санаторий Литвиново</option>
				<option value="Санаторий Волна">Санаторий Волна</option>
				<option value="Пансионат Изумруд">Пансионат Изумруд</option>
				<option value="База отдыха Адлер">База отдыха Адлер</option>
				<option value="Санаторий Первомайский">Санаторий Первомайский</option>
			</select>
		</div>
		<div class="estimate__item">
			<h3 class="estimate__title">Ваше имя и почта*</h3>
 			<label class="estimate__label"> 
				<input type="text" class="estimate__input" name="name" placeholder="Введите имя">
			</label>
			<label class="estimate__label">
				<input type="email" class="estimate__input" name="email" placeholder="Введите почту">
			</label>
		</div>
		<p class="estimate__caption">
			* - контактная информация необходима нам исключительно для проверки на подлинность отзыва.
		</p>
	</div>
	<div class="estimate__right">
		<div class="estimate__item">
			<h3 class="estimate__title">Напишите Ваш отзыв</h3>
 			<textarea name="review" class="estimate__input estimate__input--textarea" placeholder="Текст Вашего отзыва"></textarea>
		</div>
		<div class="estimate__send">
 			<button class="button estimate__submit" id="reviewSubmit">Оставить отзыв</button>
			<p class="estimate__result">
				 Ваш отзыв успешно отправлен!
			</p>
		</div>
	</div>
</form>
 </section><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>