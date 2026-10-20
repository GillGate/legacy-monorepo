<?php get_header(); ?>
<?php
	$post_id = get_the_ID();
	$current_post = get_fields();
	// $theme = wp_get_object_terms($post_id, 'theme')[0];
?>
	<div class="content">
		<div class="container">
			<div class="content__wrapper">
				<main class="content__main">
					<div class="singleArticle">
						<span class="caption singleArticle__date"><?php the_time('d F Y') ?></span>
						<h1 class="title singleArticle__title"><?php the_title() ?></h1>
						<div class="singleArticle__content">
							<?php the_content(); ?>
						</div>
					</div>
				</main>
			</div>
		</div>
	</div>
<?php get_footer(); ?>