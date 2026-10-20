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
<section class="section">
	<div class="container">
		<div class="section__head">
			<h2 class="section__title section__title--special">Другие акции</h2>
			<a href="<?=$arResult['SECTION_PAGE_URL'];?>" class="section__link section__more section__more--global">Перейти ко всем акциям</a>
		</div>
		<div class="section__list section__list--adaptive">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<? 
				$itemLink = $arItem['DETAIL_PAGE_URL'];
				if($itemLink !== $APPLICATION->GetCurPage()) : ?>

					<div class="section__item">
						<div class="section__img">
							<img 
								src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" 
								alt="<?=$arItem['PREVIEW_PICTURE']['ALT'];?>"
							>
						</div>
						<div class="section__content">
							<h3 class="section__listTitle"><?=$arItem['NAME'];?></h3>
							<div class="text section__text">
								<?=$arItem['PREVIEW_TEXT'];?>
							</div>
							<div class="section__control">
								<a href="<?=$itemLink;?>" class="section__link section__more">Подробнее</a>
							</div>
						</div>
					</div>
				<?endif;?>
			<?endforeach;?>
		</div>
	</div>
</section>