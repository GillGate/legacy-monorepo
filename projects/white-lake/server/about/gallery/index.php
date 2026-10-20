<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Фотогалерея");
?><section class="section page single about">
<div class="container">
	<h2 class="section__title">
	Фотогалерея </h2>
	<div>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:photogallery.detail.list",
	"gallery",
	Array(
		"ADDITIONAL_SIGHTS" => array(),
		"BEHAVIOUR" => "SIMPLE",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DATE_TIME_FORMAT" => "d.m.Y",
		"DETAIL_SLIDE_SHOW_URL" => "slide_show.php?SECTION_ID=#SECTION_ID#&ELEMENT_ID=#ELEMENT_ID#",
		"DETAIL_URL" => "detail.php?SECTION_ID=#SECTION_ID#&ELEMENT_ID=#ELEMENT_ID#",
		"DISPLAY_AS_RATING" => "rating",
		"ELEMENT_LAST_TYPE" => "none",
		"ELEMENT_SORT_FIELD" => "SORT",
		"ELEMENT_SORT_FIELD1" => "",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER1" => "asc",
		"GROUP_PERMISSIONS" => array("1"),
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "gallery",
		"MAX_VOTE" => "5",
		"PAGE_ELEMENTS" => "50",
		"PAGE_NAVIGATION_TEMPLATE" => "",
		"PICTURES_SIGHT" => "",
		"PROPERTY_CODE" => array("",""),
		"RATING_MAIN_TYPE" => "",
		"SEARCH_URL" => "search.php",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_COMMENTS" => "N",
		"SHOW_CONTROLS" => "N",
		"SHOW_PAGE_NAVIGATION" => "none",
		"SHOW_RATING" => "N",
		"SHOW_SHOWS" => "N",
		"THUMBNAIL_SIZE" => "600",
		"USE_DESC_PAGE" => "Y",
		"USE_PERMISSIONS" => "N",
		"VOTE_NAMES" => array("1","2","3","4","5","")
	)
);?><br>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:photogallery.upload",
	"",
	Array(
		"ALBUM_PHOTO_THUMBS_WIDTH" => "120",
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "gallery",
		"INDEX_URL" => "index.php",
		"JPEG_QUALITY" => "100",
		"JPEG_QUALITY1" => "100",
		"MODERATION" => "N",
		"ORIGINAL_SIZE" => "1280",
		"PATH_TO_FONT" => "default.ttf",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "section.php?SECTION_ID=#SECTION_ID#",
		"SET_TITLE" => "Y",
		"THUMBNAIL_SIZE" => "90",
		"UPLOAD_MAX_FILE_SIZE" => "7",
		"USE_WATERMARK" => "N",
		"WATERMARK_MIN_PICTURE_SIZE" => "800",
		"WATERMARK_RULES" => "USER",
		"WATERMARK_TYPE" => "BOTH"
	)
);?>
	</div>
</div>
 </section> <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>