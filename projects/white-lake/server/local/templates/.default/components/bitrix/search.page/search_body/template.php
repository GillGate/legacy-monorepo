<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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
?>
<div class="search-page search">
<div class="search__head">
	<h1 class="search__title">Результаты поиска</h1>
	<form class="header__search search__form" action="" method="get">
	<?if($arParams["USE_SUGGEST"] === "Y"):
		if(mb_strlen($arResult["REQUEST"]["~QUERY"]) && is_object($arResult["NAV_RESULT"]))
		{
			$arResult["FILTER_MD5"] = $arResult["NAV_RESULT"]->GetFilterMD5();
			$obSearchSuggest = new CSearchSuggest($arResult["FILTER_MD5"], $arResult["REQUEST"]["~QUERY"]);
			$obSearchSuggest->SetResultCount($arResult["NAV_RESULT"]->NavRecordCount);
		}
		?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:search.suggest.input",
			"",
			array(
				"NAME" => "q",
				"VALUE" => $arResult["REQUEST"]["~QUERY"],
				"INPUT_SIZE" => 40,
				"DROPDOWN_SIZE" => 10,
				"FILTER_MD5" => $arResult["FILTER_MD5"],
			),
			$component, array("HIDE_ICONS" => "Y")
		);?>
	<?else:?>
		<input class="header__searchInput search__input" name="q" maxlength="50" value="<?=$arResult["REQUEST"]["QUERY"]?>" size="40" />
	<?endif;?>
		&nbsp;
		<button name="s" class="header__searchBtn">
			<svg width="23" height="23" viewBox="0 0 23 23" fill="#8C8C8C" xmlns="http://www.w3.org/2000/svg">
				<path d="M22.8596 21.5045L16.1783 14.8232C17.4455 13.2587 18.2084 11.2697 18.2084 9.1042C18.2084 4.08417 14.1242 0 9.10415 0C4.08413 0 0 4.08417 0 9.1042C0 14.1242 4.08417 18.2084 9.1042 18.2084C11.2697 18.2084 13.2587 17.4455 14.8232 16.1783L21.5045 22.8597C21.6917 23.0468 21.995 23.0468 22.1822 22.8597L22.8597 22.1821C23.0468 21.995 23.0468 21.6916 22.8596 21.5045ZM9.1042 16.2917C5.14078 16.2917 1.91669 13.0676 1.91669 9.1042C1.91669 5.14078 5.14078 1.91669 9.1042 1.91669C13.0676 1.91669 16.2917 5.14078 16.2917 9.1042C16.2917 13.0676 13.0676 16.2917 9.1042 16.2917Z"/>
			</svg>
		</button>
		<input type="hidden" name="how" value="<?echo $arResult["REQUEST"]["HOW"]=="d"? "d": "r"?>" />
	</form>
</div>


<?if(isset($arResult["REQUEST"]["ORIGINAL_QUERY"])):
	?>
	<div class="search-language-guess">
		<?echo GetMessage("CT_BSP_KEYBOARD_WARNING", array("#query#"=>'<a href="'.$arResult["ORIGINAL_QUERY_URL"].'">'.$arResult["REQUEST"]["ORIGINAL_QUERY"].'</a>'))?>
	</div><br /><?
endif;?>

<?if($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false):?>
<?elseif($arResult["ERROR_CODE"]!=0):?>
	<p><?=GetMessage("SEARCH_ERROR")?></p>
	<?ShowError($arResult["ERROR_TEXT"]);?>
	<p><?=GetMessage("SEARCH_CORRECT_AND_CONTINUE")?></p>
	<br /><br />
	<p><?=GetMessage("SEARCH_SINTAX")?><br /><b><?=GetMessage("SEARCH_LOGIC")?></b></p>
	<table border="0" cellpadding="5">
		<tr>
			<td align="center" valign="top"><?=GetMessage("SEARCH_OPERATOR")?></td><td valign="top"><?=GetMessage("SEARCH_SYNONIM")?></td>
			<td><?=GetMessage("SEARCH_DESCRIPTION")?></td>
		</tr>
		<tr>
			<td align="center" valign="top"><?=GetMessage("SEARCH_AND")?></td><td valign="top">and, &amp;, +</td>
			<td><?=GetMessage("SEARCH_AND_ALT")?></td>
		</tr>
		<tr>
			<td align="center" valign="top"><?=GetMessage("SEARCH_OR")?></td><td valign="top">or, |</td>
			<td><?=GetMessage("SEARCH_OR_ALT")?></td>
		</tr>
		<tr>
			<td align="center" valign="top"><?=GetMessage("SEARCH_NOT")?></td><td valign="top">not, ~</td>
			<td><?=GetMessage("SEARCH_NOT_ALT")?></td>
		</tr>
		<tr>
			<td align="center" valign="top">( )</td>
			<td valign="top">&nbsp;</td>
			<td><?=GetMessage("SEARCH_BRACKETS_ALT")?></td>
		</tr>
	</table>
<?elseif(count($arResult["SEARCH"])>0):?>
	<?if($arParams["DISPLAY_TOP_PAGER"] != "N") echo $arResult["NAV_STRING"]?>
	<?foreach($arResult["SEARCH"] as $arItem):?>
		<div class="page__box">
			<h3 class="page__title"><?echo $arItem["TITLE_FORMATED"]?></h3>
			<div class="page__text">
				<?echo $arItem["BODY_FORMATED"]?>
			</div>
		</div>
		<a href="<?=$arItem['URL']?>" class="section__link section__more section__more--global search__link">Перейти на страницу</a>
	<?endforeach;?>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"] != "N") echo $arResult["NAV_STRING"]?>
	<br />
<?else:?>
	<?ShowNote(GetMessage("SEARCH_NOTHING_TO_FOUND"));?>
<?endif;?>
</div>