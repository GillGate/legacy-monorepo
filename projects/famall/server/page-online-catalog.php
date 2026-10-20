<?php get_header(); ?>
	<div class="breadcrumbrs">
		<div class="container">
			<div class="breadcrumbrs__wrapper">
				<a href="/">Главная</a>
				<a><?php the_title(); ?></a>
			</div>
		</div>
	</div>
	<section class="post">
		<div class="container">
			<div class="post__wrapper">
				<div class="post__head">
					<h1 class="post__title"><?php the_title(); ?></h1>
					<p class="post__date"><?php the_date(); ?></p>
				</div>
			</div>
		</div>
	</section>
	<div class="text post__catalog">
		<?php the_content(); ?>
	</div>
	<div class="about about--post">
		<div class="container">
			<div class="about__footer">
				<a href="/" class="button about__back">Вернуться на главную</a>
				<?php get_template_part('include/social'); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>