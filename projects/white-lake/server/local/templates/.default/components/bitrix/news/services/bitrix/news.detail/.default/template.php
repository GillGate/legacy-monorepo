<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$galleryIdList = $arResult['PROPERTIES']['GALLERY']['VALUE'];
?>

<section class="section single room">
	<div class="container">
		<h1 class="section__title">
			<?=$arResult['NAME'];?>
		</h1>
		<div class="single__wrapper">
			<div class="single__slider">
				<div class="single__sliderNav">
					<?if(!empty($galleryIdList)): ?>
						<?foreach($galleryIdList as $photoId) : ?>	
							<div>
								<img src="<?=CFile::getPath($photoId); ?>" alt="">
							</div>
						<?endforeach;?>
					<?else:?>
						<div>
							<img src="<?=$arResult['PREVIEW_PICTURE']['SRC']; ?>" alt="<?=$arResult['PREVIEW_PICTURE']['ALT']; ?>">
						</div>
					<?endif;?>
				</div>
				<div class="single__sliderMain">
					<div class="single__sliderBody">
						<?if(!empty($galleryIdList)): ?>
							<?foreach($galleryIdList as $photoId) : ?>	
								<div>
									<img src="<?=CFile::getPath($photoId); ?>" alt="">
								</div>
							<?endforeach;?>
						<?else:?>
							<div>
								<img src="<?=$arResult['PREVIEW_PICTURE']['SRC']; ?>" alt="<?=$arResult['PREVIEW_PICTURE']['ALT']; ?>">
							</div>
						<?endif;?>
					</div>
					<div class="single__sliderControls">
						<button class="arrow arrow--prev single__sliderArrow single__sliderArrow--prev">
							<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/arrow.svg" alt="">
						</button>
						<button class="arrow single__sliderArrow single__sliderArrow--next">
							<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/arrow.svg" alt="">
						</button>
					</div>
				</div>
			</div>
			<div class="single__info">
				<? $price = $arResult['PROPERTIES']['price']['VALUE'];
					if($price !== '') : ?>
					<div class="section__priceWrapper">
						<div class="section__priceItem">
							<p class="section__price section__price--service"><?=$arResult['PROPERTIES']['price']['VALUE'];?></p>
							<span>Цена за услугу будни</span>
						</div>
					</div>
				<?endif;?>
				<div class="single__text">
					<?=$arResult['PREVIEW_TEXT'];?>
				</div>
				<a href="#" class="button singe__btn">Забронировать</a>
			</div>
			<div class="properties single__properties">
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
						"DISPLAY_NAME" => "Y",
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
						"NEWS_COUNT" => "3",
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
			<div class="single__description single__description--service">
				<h2 class="section__title">Описание</h2>
				<div class="single__box single__box--service">
					<?if (!empty($arResult['DETAIL_PICTURE'])) : ?>
					<div class="single__boxImg">
						<img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT']?>">
					</div>
					<?endif;?>
					<div class="single__boxContent">
						<?=$arResult['DETAIL_TEXT'];?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"services-popular",
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
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
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
		"PAGER_TITLE" => "Популярные сервисы",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "popular-services",
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