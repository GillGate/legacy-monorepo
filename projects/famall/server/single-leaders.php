<?php get_header(); ?>
<?php
	$leader_id = get_the_ID();
	$current_leader = get_fields();
?>
	<div class="breadcrumbrs">
		<div class="container">
			<div class="breadcrumbrs__wrapper">
				<a href="/">Главная</a>
				<a href="/about/">О компании</a>
				<a>Лидеры компании</a>
			</div>
		</div>
	</div>
	<section class="leader">
		<div class="container">
			<div class="leader__wrapper">
				<div class="leader__info">
					<div class="leader__img">
						<?php echo get_the_post_thumbnail(); ?>
					</div>
					<h1 class="leader__name"><?php the_title(); ?></h1>
					<p class="leader__position"><?php echo $current_leader['leader-position']; ?></p>
				</div>
				<div class="leader__text">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="leader__other">
				<h2 class="leader__otherTitle">Все наши лидеры:</h2>
				<div class="leader__otherList">
					<?php foreach(getLeaders() as $leader) { ?>
						<div class="leader__otherItem">
							<a href="<?php echo $leader['leader-link']; ?>">
								<div class="leader__otherImg">
									<img src="<?php echo $leader['leader-img']; ?>" alt="">
								</div>
								<h3 class="leader__otherName"><?php echo $leader['leader-name']; ?></h3>
							</a>
						</div>
					<?php } ?>
				</div>
				<div class="dots leader__otherDots"></div>
			</div>
		</div>
	</section>
	<div class="about about--leader">
		<div class="container">
			<div class="about__footer">
				<a href="/" class="button about__back">Вернуться на главную</a>
				<?php get_template_part('include/social'); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>