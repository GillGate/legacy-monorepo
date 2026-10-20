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
?>

<?php $APPLICATION->IncludeFile('/include/booking.php');?> 
<section class="section">
	<div class="container">
		<h1 class="section__title page__title">
			Категория <?=$arResult['SECTION']['PATH'][0]['NAME'];?>
		</h1>
		<div class="section__list section__list--page">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="section__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<div class="section__img">
						<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT'];?>">
					</div>
					<div class="section__content">
						<div class="section__priceWrapper">
							<div class="section__priceItem section__priceItem--double">
								<p class="section__price"><?=$arItem['PROPERTIES']['price_wd']['VALUE'];?></p>
								<span>Цена в будни</span>
							</div>
							<div class="section__priceItem">
								<p class="section__price"><?=$arItem['PROPERTIES']['price_full']['VALUE'];?></p>
								<span>Без скидки</span>
							</div>
						</div>
						<h2 class="section__listTitle"><?=$arItem['NAME'];?></h2>
						<div class="text section__text">
							<?=$arItem['PREVIEW_TEXT'];?>
						</div>
						<div class="section__control">
							<a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="section__link section__more">Подробнее</a>
							<a href="#" class="section__link">Забронировать</a>
						</div>
					</div>
				</div>
			<?endforeach;?>
		</div>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			<div class="section__pager">
				<?=$arResult["NAV_STRING"]?>
			</div>
		<?endif;?>
	</div>
</section>