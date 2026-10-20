<?php get_header(); ?>
<?php 
	global $wp_query;

	$query = [
		'orderby' => 'date',
		'order'   => 'desc',
	];

	$query = array_merge($wp_query->query, $query);
	query_posts($query);
?>
	<div class="breadcrumbrs">
		<div class="container">
			<div class="breadcrumbrs__wrapper">
				<a href="/">Главная</a>
				<a>Акции</a>
			</div>
		</div>
	</div>
	<section class="archive">
		<div class="container">
			<h1 class="archive__title">Акции</h1>
			<div class="archive__list">
				<?php if ( have_posts() ) {
						while ( have_posts() ) {
						the_post(); 
				?>
					<a href="<?php the_permalink(); ?>" class="partner archive__item">
						<div class="partner__img">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="partner__info">
							<h3 class="partner__title"><?php the_title(); ?></h3>
							<span class="partner__date"><?php the_date('d F Y'); ?></span>
						</div>
					</a>
				<?php } 
			} ?>
			</div>
			<div class="catalog__pagination">
				<?php the_posts_pagination(); ?>
			</div>
		</div>
	</section>
	<div class="about about--post">
		<div class="container">
			<div class="about__footer">
				<a href="/" class="button about__back">Вернуться на главную</a>
				<?php get_template_part('include/social'); ?>
			</div>
		</div>
	</div>
	<footer class="footer">
		<h2 class="vh">Подвал</h2>
		<div class="container">
			<div class="footer__wrapper">
				<div class="footer__menu footer__menu--left">
					<h3 class="footer__title">Меню</h3>
					<ul class="footer__list">
						<li class="footer__item">
							<a href="#">Каталог продукции</a>
						</li>
						<li class="footer__item">
							<a href="#">Акции</a>
						</li>
						<li class="footer__item">
							<a href="#">Новости</a>
						</li>
						<li class="footer__item">
							<a href="#">Видеогалерея</a>
						</li>
						<li class="footer__item">
							<a href="#">Как начать свой бизнес</a>
						</li>
						<li class="footer__item">
							<a href="#">Контакты</a>
						</li>
					</ul>
				</div>
				<div class="footer__menu footer__menu--center">
					<h3 class="footer__title">О компании</h3>
					<ul class="footer__list">
						<li class="footer__item">
							<a href="#">История компании</a>
						</li>
						<li class="footer__item">
							<a href="#">Истории успеха</a>
						</li>
						<li class="footer__item">
							<a href="#">Наши лидеры</a>
						</li>
						<li class="footer__item">
							<a href="#">Награждения партнёров</a>
						</li>
						<li class="footer__item">
							<a href="#">Наши путешествия</a>
						</li>
					</ul>
				</div>
				<div class="footer__menu footer__menu--right">
					<h3 class="footer__title">Контакты</h3>
					<ul class="footer__list">
						<li class="footer__item">
							<address>
								г. Москва, Сельскохозяйственная ул, 38к1 <br>
								Метро «Ботанический сад»
							</address>
						</li>
						<li class="footer__item footer__item--phone">
							<a href="tel:+74952311212">+7 (495) 231-12-12</a>
						</li>
						<li class="footer__item">
							<a href="#">info@famall.ru</a>
						</li>
					</ul>
				</div>
			</div>
			<p class="footer__bottomText">ООО "Greenleaf". Все права защищены.</p>
		</div>
	</footer>
	<script src="js/all.js"></script>
</body>
</html>