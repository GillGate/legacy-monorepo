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

<section class="section section--page">
	<div class="container">
		<h1 class="section__title page__title">
			Наши услуги
		</h1>
		<div class="section__list section__list--page">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<div class="section__item">
					<div class="section__img">
						<img 
							src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" 
							alt="<?=$arItem['PREVIEW_PICTURE']['ALT'];?>"
						>
					</div>
					<div class="section__content">
						<h2 class="section__listTitle"><?=$arItem['NAME'];?></h2>
						<div class="text section__text">
							<?=$arItem['PREVIEW_TEXT'];?>
						</div>
						<div class="section__control">
							<a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="section__link section__more">Подробнее</a>
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
