<?php get_header(); ?>
<?php $lang = $GLOBALS['lang']; ?>
<section class="notFound">
	<div class="container notFound__wrapper">
		<div class="notFound__body">
			<span class="h1 notFound__error">404</span>
			<h1 class="h2 notFound__title">
				<?php if($lang === 'en') { 
					echo "The page does not exist";
				} else {
					echo "Страница не существует";
				} ?>
			</h1>
			<p class="notFound__text">
				<?php if($lang === 'en') { 
					echo "It may have been deleted, or moved to another location. Go back to the main page and try to find it manually";
				} else {
					echo "Возможно она была удалена, или перенесена в другое место. Вернитесь на главную страницу и попробуйте найти её вручную";
				} ?>
			</p>
			<a href="/" class="button notFound__button">
				<?php if($lang === 'en') { 
					echo "Go back to the main page";
				} else {
					echo "Вернуться на главную";
				} ?>
			</a>
		</div>
	</div>
</section>
<?php get_footer(); ?>