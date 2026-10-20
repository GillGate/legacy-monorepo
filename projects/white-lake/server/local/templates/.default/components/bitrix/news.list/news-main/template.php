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
<section class="section section--news">
	<div class="container">
		<div class="section__head">
			<h2 class="section__title section__title--special">Новости</h2>
 			<a href="/news/" class="section__link section__more section__more--global">Перейти к новостям</a>
		</div>
		<div class="section__list section__list--adaptive section__list--slider section__list--news">
			<?foreach($arResult['ITEMS'] as $arItem): ?>
			<div>
				<div class="section__item">
					<div class="section__img">
						<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT'];?>"> <span class="section__imgCaption"><?=$arItem['DISPLAY_ACTIVE_FROM'];?></span>
					</div>
					<div class="section__content">
						<h3 class="section__listTitle"><?=$arItem['NAME'];?></h3>
						<div class="text section__text">
							<?=$arItem['PREVIEW_TEXT'];?>
						</div>
						<div class="section__control">
							<a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="section__link section__more">Подробнее</a>
							<a href="#" class="section__link">Забронировать</a>
						</div>
					</div>
				</div>
			</div>
			<?endforeach;?>
		</div>
		<div class="section__dots section__dots--news"></div>
	</div>
</section>