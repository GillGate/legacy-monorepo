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
$this->setFrameMode(true);?>
<form class="header__search" action="<?=$arResult["FORM_ACTION"]?>">
	<input type="text" class="header__searchInput" name="q" maxlength="50" placeholder="введите запрос">
	<!-- <input type="submit" value="Найти" name="s"> -->
	<button name="s" class="header__searchBtn">
		<svg width="23" height="23" viewBox="0 0 23 23" fill="#8C8C8C" xmlns="http://www.w3.org/2000/svg">
			<path d="M22.8596 21.5045L16.1783 14.8232C17.4455 13.2587 18.2084 11.2697 18.2084 9.1042C18.2084 4.08417 14.1242 0 9.10415 0C4.08413 0 0 4.08417 0 9.1042C0 14.1242 4.08417 18.2084 9.1042 18.2084C11.2697 18.2084 13.2587 17.4455 14.8232 16.1783L21.5045 22.8597C21.6917 23.0468 21.995 23.0468 22.1822 22.8597L22.8597 22.1821C23.0468 21.995 23.0468 21.6916 22.8596 21.5045ZM9.1042 16.2917C5.14078 16.2917 1.91669 13.0676 1.91669 9.1042C1.91669 5.14078 5.14078 1.91669 9.1042 1.91669C13.0676 1.91669 16.2917 5.14078 16.2917 9.1042C16.2917 13.0676 13.0676 16.2917 9.1042 16.2917Z"/>
		</svg>
	</button>
</form>


<!-- 
<div class="search-form">
<form action="<?=$arResult["FORM_ACTION"]?>">
	<table border="0" cellspacing="0" cellpadding="2" align="center">
		<tr>
			<td align="center"><?if($arParams["USE_SUGGEST"] === "Y"):?><?$APPLICATION->IncludeComponent(
				"bitrix:search.suggest.input",
				"",
				array(
					"NAME" => "q",
					"VALUE" => "",
					"INPUT_SIZE" => 15,
					"DROPDOWN_SIZE" => 10,
				),
				$component, array("HIDE_ICONS" => "Y")
			);?><?else:?><input type="text" name="q" value="" size="15" maxlength="50" /><?endif;?></td>
		</tr>
		<tr>
			<td align="right"><input name="s" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" /></td>
		</tr>
	</table>
</form>
</div> -->