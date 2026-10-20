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
<?php // debug($arResult); ?>
<section class="section single news">
	<div class="container">
		<div class="section__head">
			<h1 class="section__title section__title--special"><?=$arResult['NAME'];?></h1>
			<a href="<?=$arResult['LIST_PAGE_URL'];?>" class="section__link section__more section__more--global section__more--backwards">Вернуться к новостям</a>
		</div>
		<div class="news__wrapper">
			<div class="news__box news__img">
				<img src="<?=$arResult['DETAIL_PICTURE']['SRC'];?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT'];?>">
			</div>
			<div class="news__box news__text">
				<?=$arResult['DETAIL_TEXT'];?>
			</div>
		</div>
	</div>
</section>
<!-- <div class="booking">
	<div class="booking__info">
		<h2 class="booking__title">
			Подпишитесь на рассылку!
		</h2>
		<p class="text">Первыми узнавайте о наших акциях и скидках</p>
	</div>
	<form class="booking__form booking__form--sub">
		<label class="booking__item">
			<input type="text" placeholder="Имя*" required>
		</label>
		<label class="booking__item">
			<input type="email" placeholder="E-mail*" required>
		</label>
		<label class="booking__item">
			<input type="phone" placeholder="Телефон*" required>
		</label>
		<button class="button booking__btn booking__btn--sub">
			Подписаться
		</button>
	</form>
</div> -->
<?php $APPLICATION->IncludeFile('/include/sub.php');?> 