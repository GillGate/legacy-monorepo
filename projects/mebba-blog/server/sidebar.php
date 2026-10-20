<?php 
	$post_id = get_the_ID();
	$fields = get_fields();
	$type = wp_get_object_terms($post_id, 'type')[0] ?? [];
	$type_name = $type->slug ?? '';

	$topic = wp_get_object_terms($post_id, 'topic')[0] ?? [];
	$topic_name = $topic->slug ?? '';

	$articles = getArticles(5, $type_name, $topic_name);

	if(count($articles) < 2) {
		$articles = getArticles(5);
	}

	$useful_materials = $fields['useful-materials'] ?? [];
?>

<aside class="content__aside aside">
	<h2 class="vh">Похожие материалы</h2>
	<div class="aside__list">
		<?php if($useful_materials) { ?>
			<?php foreach($useful_materials as $material) { ?>
				<a href="<?php echo get_post_permalink($material->ID) ?>" class="aside__article">
					<div class="aside__articleImg">
						<?php echo get_the_post_thumbnail($material->ID) ?>
					</div>
					<h3 class="aside__articleTitle"><?php echo $material->post_title ?></h3>
				</a>
			<?php } ?>
		<?php } else { ?>
			<?php foreach($articles as $article) { ?>
				<?php if($post_id !== $article['id']) { ?>
					<a href="<?php echo $article['link'] ?>" class="aside__article">
						<div class="aside__articleImg">
							<?php echo $article['img']; ?>
						</div>
						<h3 class="aside__articleTitle"><?php echo wp_trim_words($article['title'], 7) ?></h3>
					</a>
				<?php } ?>
			<?php } ?>
		<?php } ?>
	</div>
</aside>

