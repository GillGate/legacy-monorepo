<?php get_header(); ?>
	<main class="blog">
		<h1 class="vh">Блог</h1>
		<div class="container">
			<section class="blog__section">
				<div class="blog__sectionHeader">
					<h2 class="title blog__title">База знаний</h2>
					<a href="/type/regular/" target="_blank" class="button blog__more blog__more--desktop">Больше статей</a>
				</div>
				<div class="blog__sectionContent">
					<div class="base">
						<?php foreach(getHomepageArticles(5, 'regular') as $article) { ?>
							<article class="article base__item">
								<div class="article__img">
									<?php echo $article['img']; ?>
								</div>
								<span class="caption article__date"><?php echo $article['date']; ?></span>
								<h3 class="article__title"><?php echo $article['title']; ?></h3>
								<div class="article__text">
									<?php echo wpautop(wp_trim_words($article['content'], 48)) ?>
								</div>
								<a href="<?php echo $article['link']; ?>" class="article__link">Читать статью</a>
							</article>
						<?php } ?>
					</div>
				</div>
				<a href="/type/regular/" class="button blog__more blog__more--mobile">Больше статей</a>
			</section>
			<?php $promotions = getHomepageArticles(4, 'promotions') ?>
			<?php if(count($promotions) > 0) { ?>
				<section class="blog__section">
					<div class="blog__sectionHeader">
						<h2 class="title blog__title">Акции</h2>
						<a href="/type/promotions/" target="_blank" class="button blog__more blog__more--desktop">Все акции</a>
					</div>
					<div class="blog__sectionContent">
						<div class="promo">
							<?php foreach($promotions as $article) { ?>
								<article class="article promo__item">
									<div class="article__img">
										<?php echo $article['img']; ?>
									</div>
									<span class="caption article__date"><?php echo $article['date']; ?></span>
									<h3 class="article__title"><?php echo $article['title']; ?></h3>
									<div class="article__text"></div>
									<a href="<?php echo $article['link']; ?>" class="article__link">Подробнее</a>
								</article>
							<?php } ?>
						</div>
					</div>
					<a href="/type/promotions/" class="button blog__more blog__more--mobile">Все акции</a>
				</section>
			<?php } ?>

			<?php $examples = getHomepageArticles(2, 'examples') ?>
			<?php if(count($examples) > 0) { ?>
				<section class="blog__section">
					<div class="blog__sectionHeader">
						<h2 class="title blog__title">Примеры работ</h2>
						<a href="/type/examples/" target="_blank" class="button blog__more blog__more--desktop">Больше работ</a>
					</div>
					<div class="blog__sectionContent">
						<div class="work">
							<?php foreach($examples as $article) { ?>
								<a href="<?php echo $article['link']; ?>" class="work__item" style="background-image: url(<?php echo $article['img-url']; ?>);">
									<span class="caption work__date"><?php echo $article['date']; ?></span>
									<h3 class="work__title"><?php echo $article['title']; ?></h3>
									<div class="work__text">
										<?php echo wpautop(wp_trim_words($article['content'], 24)) ?>
									</div>
								</a>
							<?php } ?>
						</div>
					</div>
					<a href="/type/examples/" class="button blog__more blog__more--mobile">Больше работ</a>
				</section>
			<?php } ?>
		</div>
	</main>
<?php get_footer(); ?>