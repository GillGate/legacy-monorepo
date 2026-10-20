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

<?if (count($arResult["ITEMS"]) > 3): ?>
	<section class="section">
		<div class="container">
			<div class="section__head">
				<h2 class="section__title section__title--special">Популярные услуги</h2>
				<a href="<?=$arResult['SECTION_PAGE_URL'];?>" class="section__link section__more section__more--global">Перейти ко всем услугам</a>
			</div>
			<div class="section__list section__list--adaptive">
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<div class="section__item">
						<div class="section__img">
							<img 
								src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" 
								alt="<?=$arItem['PREVIEW_PICTURE']['ALT'];?>"
							>
						</div>
						<div class="section__content">
							<h3 class="section__listTitle"><?=$arItem['NAME'];?></h3>
							<p class="text section__text">
								<?=$arItem['PREVIEW_TEXT'];?>
							</p>
							<div class="section__control">
								<a href="<?=$arItem['DETAIL_PAGE_URL'];?>/" class="section__link section__more">Подробнее</a>
							</div>
						</div>
					</div>
				<?endforeach;?>
			</div>
		</div>
	</section>
<?endif;?>