<?php get_header(); ?>
<?php
	$post_id = get_the_ID();
	$current_post = get_fields();
	// $theme = wp_get_object_terms($post_id, 'theme')[0];
?>
<!-- 	
	<div class="breadcrumbs">
		<div class="container breadcrumbs__wrapper">
			<a href="/">Статьи</a>
			<a><?php the_title(); ?></a>
		</div>
	</div> -->
	<div class="content">
		<div class="container">
			<div class="content__wrapper">
				<?php get_sidebar(); ?>
				<main class="content__main">
					<div class="singleArticle">
						<span class="caption singleArticle__date"><?php the_time('d F Y') ?></span>
						<h1 class="title singleArticle__title"><?php the_title() ?></h1>
						<div class="singleArticle__content">
							<?php the_content(); ?>
						</div>
						<div class="singleArticle__controls">
							<a href="/article/" class="button singleArticle__control">Вернуться ко всем статьям</a>
							<!-- <a href="#" class="button button--fill singleArticle__control">Следующая статья</a> -->
						</div>
					</div>
				</main>
			</div>
		</div>
	</div>
<?php get_footer(); ?>