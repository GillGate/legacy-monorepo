<?php get_header(); ?>
<?php 
	$req_search = $_REQUEST['s'] ?? '';
?>
	<main class="blog">
		<div class="container">
			<div class="blog__header">
				<?php if($req_search !== '') { ?>
					<h1 class="title blog__title">Поиск статей по запросу: "<?php echo $req_search ?>"</h1>
				<?php } else { ?>
					<h1 class="title blog__title">Все статьи</h1>
				<?php } ?>
			</div>
			<?php if ( have_posts() ) { ?>
				<div class="blog__body promo">
					<?php while ( have_posts() ) {
							the_post(); 
							$article = get_fields(get_the_ID());
						?>
						<article class="article promo__item">
							<div class="article__img">
								<?php the_post_thumbnail(); ?>
							</div>
							<span class="caption article__date"><?php the_time('d F Y') ?></span>
							<h3 class="article__title"><?php the_title(); ?></h3>
							<div class="article__text"></div>
							<a href="<?php the_permalink(); ?>" class="article__link">Подробнее</a>
						</article>
					<?php } ?>
				</div>
			<?php } else { ?>
				<div class="blog__empty">
					По данному запросу не найдено никаких материалов :(
				</div>
			<?php } ?>
			<div class="blog__pagination">
				<?php the_posts_pagination(); ?>
			</div>
		</div>
	</main>
<?php get_footer(); ?>