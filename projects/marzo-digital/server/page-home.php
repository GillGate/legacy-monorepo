<?php get_header(); ?>
	<section class="intro">
		<?php get_template_part('include/header'); ?>
		<div class="intro__content">
			<div class="container intro__wrapper">
				<h1 class="intro__title">Unleashing creativity, empowering brands</h1>
				<p class="intro__caption">Digital studio, where functional aesthetics come to life</p>
				<?php 
					$videoId = get_field('site-video-id', 7);
					$videoCover = get_field('site-cover-image', 7);
				?>
				<div class="intro__play">
					<div class="play" style="background-image: url(<?php echo $videoCover ?>);" data-src="<?php echo $videoId ?>">
						<div class="intro__size play__size"></div>
						<div class="intro__video play__video"></div>
					</div>
				</div>
				<div class="intro__footer">
					<p class="intro__footerText">
						Transforming your ideas into breathtaking digital masterpieces <br> that captivate, inspire, and leave an indelible mark in the digital landscape.
					</p>
					<a href="#works" class="intro__scrollDown scrollTo">Scroll down to explore more</a>
					<a href="/contact/" class="label label--hoverFilled intro__discuss">Discuss the project</a>
				</div>
			</div>
		</div>
	</section>
	<section class="works" id="works">
		<div class="container">
			<h2 class="title works__title">Our selected works</h2>
			<div class="works__list">
				<?php foreach(getWorks() as $work) { ?>
					<a href="<?php echo $work['work-link']; ?>" class="works__item work" style="background-image: url(<?php echo $work['img']; ?>)">
						<div class="work__head">
							<span class="work__label work__category">Branding & Identity</span>
							<span class="work__when"><?php echo $work['work-when']; ?></span>
						</div>
						<div class="work__content">
							<div class="work__contentHead">
								<span class="work__label work__name"><?php echo $work['title']; ?></span>
								<span class="work__label work__year"><?php echo $work['work-year']; ?></span>
							</div>
							<div class="work__contentBody">
								<div class="work__title"><?php echo $work['description']; ?></div>
								<span class="work__link">Explore</span>
							</div>
						</div>
					</a>
				<?php } ?>
			</div>
		</div>
	</section>
	<section class="reviews">
		<div class="container">
			<div class="reviews__list">
				<?php $reviews = getReviews(); ?>
				<div>
					<div class="reviews__item reviews__beforeReview">
						<h2 class="title reviews__title">Reviews</h2>
						<div class="reviews__stars">
							<div class="reviews__starsFill" style="width: 100%"></div>
						</div>
						<div class="label reviews__score">Rating 5.0</div>
						<p class="reviews__total"><?php echo count($reviews) ?> reviews</p>
					</div>
				</div>
				<?php foreach($reviews as $review) { ?>
					<div>
						<div class="reviews__item review">
							<div class="review__head">
								<div class="review__logo">
									<img src="<?php echo IMG_DIR ?>/logo-black.svg" alt="">
								</div>
								<div class="review__score">
									<div class="reviews__stars">
										<div class="reviews__starsFill" style="width: calc(<?php echo $review['review-score']?> * 20%)"></div>
									</div>
									<span><?php echo $review['review-score']?></span>
								</div>
							</div>
							<div class="review__content">
								<?php echo wpautop($review['description']); ?>
							</div>
							<div class="review__info">
								<p class="review__infoName"><?php echo $review['name']; ?></p>
								<p class="review__infoCompany"><?php echo $review['review-position']; ?></p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="reviews__progress">
				<div class="reviews__progressBar"></div>
			</div>
			<div class="reviews__controls">
				<button disabled class="button reviews__control reviews__control--prev">
					<img src="<?php echo IMG_DIR ?>/arrow-left-white.svg" alt="Prev">
				</button>
				<button class="button reviews__control reviews__control--next">
					<img src="<?php echo IMG_DIR ?>/arrow-right-white.svg" alt="Next">
				</button>
			</div>
		</div>
	</section>
	<section class="partners">
		<div class="container">
			<h2 class="partners__title">Our partners:</h2>
			<div class="partners__list">
				<?php foreach(getPartners() as $partner) { ?>
					<div>
						<div class="partners__item">
							<img src="<?php echo $partner['img']; ?>" alt="<?php echo $partner['name']; ?>">
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<section class="testimonials">
		<h2 class="testimonials__title">Crafting digital wonders.</h2>
	</section>
	<section class="services">
		<div class="container services__wrapper">
			<h2 class="title services__title">Services</h2>
			<ol class="services__list">
				<?php foreach(getServices() as $index => $service) { ?>
					<li class="services__item service">
						<div class="service__content">
							<h3 class="service__title" data-order="0<?php echo ++$index?>"><?php echo $service['title']; ?></h3>
							<div class="service__text">
								<?php echo $service['description']; ?>
							</div>
							<div class="service__hoverText">
								<?php echo $service['description']; ?>
							</div>
						</div>
					</li>
				<?php } ?>
			</ol>
		</div>
	</section>
	<?php 
		$gallery = getCreativeGallery();
		$links = get_field('site-links', 7);
	?>
	<section class="creative">
		<div class="container">
			<div class="creative__pics">
				<div class="creative__pic">
					<div  class="creative__picItem creative__picItem--red">
						<?php echo $gallery[0]['img'] ?>
					</div>
					<div class="creative__picItem creative__picItem--violet">
						<?php echo $gallery[1]['img'] ?>
					</div>
				</div>
				<div class="creative__pic">
					<div class="creative__picItem creative__picItem--blue">
						<?php echo $gallery[2]['img'] ?>
					</div>
					<div class="creative__picItem creative__picItem--light-blue">
						<?php echo $gallery[3]['img'] ?>
					</div>
				</div>
			</div>
			<div class="creative__info">
				<h2 class="title creative__title">Witness the creative process in action!</h2>
				<a href="<?php echo $links['dribble'] ?>" class="label label--hoverFilled creative__link">
					<img src="<?php echo IMG_DIR ?>/clribbbe.svg" alt="clribbbe">
					<img src="<?php echo IMG_DIR ?>/arrow-right-black.svg" alt="->">
				</a>
			</div>
			<div class="creative__pics">
				<div class="creative__pic">
					<div class="creative__picItem creative__picItem--green">
						<?php echo $gallery[4]['img'] ?>
					</div>
					<div class="creative__picItem creative__picItem--light-violet">
						<?php echo $gallery[5]['img'] ?>
					</div>
				</div>
				<div class="creative__pic">
					<div class="creative__picItem creative__picItem--orange">
						<?php echo $gallery[6]['img'] ?>
					</div>
					<div class="creative__picItem creative__picItem--dark-blue">
						<?php echo $gallery[7]['img'] ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('include/quote'); ?>
<?php get_footer(); ?>