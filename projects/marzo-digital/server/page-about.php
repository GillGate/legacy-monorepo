<?php get_header(); ?>
<?php get_template_part('include/header'); ?>
	<section class="page about">
		<div class="container">
			<h1 class="page__title about__title">About</h1>
			<p class="about__text about__titleCaption">We're a Prague-based team of creative minds who are passionate about delivering outstanding digital experiences.</p>
			<?php 
				$videoId = get_field('site-video-id', 7);
				$videoCover = get_field('site-cover-image', 7);
			?>
			<div class="about__video play" style="background-image: url(<?php echo $videoCover ?>);" data-src="<?php echo $videoId ?>">
				<div class="play__size"></div>
				<div class="play__video"></div>
			</div>
			<p class="about__text about__text--mission">Our mission is to unleash the full potential of your brand through innovative and captivating digital experiences</p>
			<div class="about__pics">
				<div class="about__pic about__pic--1">
					<img src="<?php echo IMG_DIR ?>/about-1.jpg" width="460" height="536" alt="">
				</div>
				<div class="about__pic about__pic--2">
					<img src="<?php echo IMG_DIR ?>/about-2.jpg" width="554" height="404" alt="">
				</div>
			</div>
			<p class="about__text about__text--collab">Through collaboration and cutting-edge technology, we bring your ideas to life, forging meaningful connections with your audience. </p>
			<div class="about__pic about__collab">
				<img src="<?php echo IMG_DIR ?>/about-3.jpg" width="772" height="514" alt="">
			</div>
		</div>
	</section>
	<?php get_template_part('include/quote'); ?>
<?php get_footer(); ?>