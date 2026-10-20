<?php get_header(); ?>
<?php 
	// $type = wp_get_object_terms(get_the_ID(), 'type')[0];
?>
	<main class="blog">
		<div class="container">
			<div class="blog__header">
				<h1 class="title blog__title"><?php echo $type->name; ?></h1>
			</div>
			<?php if ( have_posts() ) { ?>
				<?php if($type->slug === 'regular') { ?>
					<div class="blog__body base">
						<?php while ( have_posts() ) {
								the_post(); 
								$article = get_fields(get_the_ID());
							?>
							<article class="article base__item">
								<div class="article__img">
									<?php the_post_thumbnail(); ?>
								</div>
								<span class="caption article__date"><?php the_time('d F Y') ?></span>
								<h3 class="article__title"><?php the_title(); ?></h3>
								<div class="article__text">
									<!-- <?php wp_trim_words(the_content(), 48) ?> -->
								</div>
								<a href="<?php the_permalink(); ?>" class="article__link">Читать статью</a>
							</article>
						<?php } ?>
					</div>
				<?php } else if($type->slug === 'examples') { ?>
					<div class="blog__body work">
						<?php while ( have_posts() ) {
							the_post(); 
							$work = get_fields(get_the_ID());
						?>
							<a href="<?php the_permalink(); ?>" class="work__item" 
								style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"
							>
								<span class="caption work__date"><?php the_time('d F Y') ?></span>
								<h3 class="work__title"><?php the_title(); ?></h3>
								<div class="work__text">
									<?php the_content(); ?>
								</div>
							</a>
						<?php } ?>
					</div>
				<?php } else { ?>
					<div class="blog__body promo">
						<?php while ( have_posts() ) {
								the_post(); 
								$promo = get_fields(get_the_ID());
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
				<?php } ?>
			<?php } else { ?>
				<div class="blog__empty">
					Пока здесь ничего нет
				</div>
			<?php } ?>
			<div class="blog__pagination">
				<?php the_posts_pagination(); ?>
			</div>
		</div>
	</main>
<?php get_footer(); ?>