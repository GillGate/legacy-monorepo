<?php get_header(); ?>
<div class="breadcrumbrs">
	<div class="container">
		<div class="breadcrumbrs__wrapper">
			<a href="/">Главная</a>
			<a>Каталог продукции</a>
		</div>
	</div>
</div>
<h1 class="vh">Тип товаров</h1>
<section class="productType">
	<div class="container">
		<div class="productType__wrapper">
			<a href="/type/ball/" class="productType__item productType__item--ball">
				<h2 class="productType__title">Балловые товары</h2>
				<p class="productType__text">Подробнее...</p>
			</a>
			<a href="/type/coupon/" class="productType__item productType__item--coupon">
				<h2 class="productType__title">Купонные товары</h2>
				<p class="productType__text">Подробнее...</p>
			</a>
			<a href="/type/start/" class="productType__item productType__item--start">
				<h2 class="productType__title">Стартовые наборы</h2>
				<p class="productType__text">Подробнее...</p>
			</a>
		</div>
	</div>
</section>
<div class="about about--catalog">
	<div class="container">
		<div class="about__footer">
			<a href="/" class="button about__back">Вернуться на главную</a>
			<?php get_template_part('include/social'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>