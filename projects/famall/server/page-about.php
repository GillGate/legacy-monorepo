<?php get_header(); ?>
	<div class="breadcrumbrs">
		<div class="container">
			<div class="breadcrumbrs__wrapper">
				<a href="/">Главная</a>
				<a><?php the_title(); ?></a>
			</div>
		</div>
	</div>
	<section class="about about--company aboutCompany">
		<div class="container">
			<h1 class="aboutCompany__title">О компании FAMALL</h1>
			<div class="aboutCompany__section">
				<h2 class="aboutCompany__sectionTitle aboutCompany__sectionTitle--red">История компании</h2>
				<div class="about__wrapper">
					<div class="about__info">
						<a data-fancybox href="https://youtu.be/QK13KgNRDoU" class="about__logo">
							<img src="<?php echo IMG_DIR ;?>/fam-about.jpg" alt="">
						</a>
						<h3 class="about__name">Famall Network</h3>
						<div class="about__text">
							<p>Компания основана в <strong>1998</strong> году <br>в г. Сучжоу, Китай.</p> 
							<p>На данный момент насчитывает 300 000 партнёров по всему миру и  является ведущей экологической компанией в сфере сетевого бизнеса!</p>
						</div>
					</div>
					<div class="about__content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<div class="aboutCompany__section">
				<div class="aboutCompany__mission">
					<div class="aboutCompany__missionInfo">
						<h2 class="aboutCompany__sectionTitle aboutCompany__sectionTitle--red">Миссия</h2>
						<div class="aboutCompany__sectionText">
							<p>
								Миссия FAMALL - это создавать уникальный высокотехнологичный продукт, который станет частью вашей жизни. Мы всегда в поисках новых качественных экологичных товаров!
							</p>
						</div>
					</div>		
					<ul class="aboutCompany__missionList">
						<li class="aboutCompany__missionItem">
							<strong>300 000</strong>
							партнёров FAMALL уже с нами
						</li>
						<li class="aboutCompany__missionItem">
							<strong>2391</strong>
							истории успеха мы услышали
						</li>
						<li class="aboutCompany__missionItem">
							<strong>30</strong>
							стран мира работает с FAMALL
						</li>
					</ul>			
				</div>
			</div>
			<div class="aboutCompany__section">
				<div class="aboutCompany__office">
					<div class="aboutCompany__officeInfo">
						<h2 class="aboutCompany__sectionTitle">Офис и шоурум:</h2>
						<div class="aboutCompany__sectionText">
							<p>
								Офис компании располагается в г. Москва, по адресу: г. Москва, Сельскохозяйственная ул, 38к1.
							</p>
							<p>
								В нашем шоуруме представлен широкий выбор продукции, мы всегда вам рады с ПН-ЧТ с 10:00 до 19:00<br>
ПТ-СБ с 10:00 до 18:00<br>
ВС - выходной.
							</p>
								<p>
								
							</p>
						</div>
					</div>
					<div class="aboutCompany__officeImg">
						<img src="http://famallnetwork.com/wp-content/uploads/2022/10/about-office2.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="team aboutCompany__section">
				<div class="team__wrapper">
					<div class="team__description">
						<h2 class="aboutCompany__sectionTitle">Наши лидеры</h2>
						<div class="aboutComapny__sectionText">
							<p>
								ТОП лидеры сетевого маркетинга — это люди, играющие ведущую роль в своих сетевых компаниях, главные дистрибьюторы с тысячными структурами.
								Известно, что в сетевом маркетинге невозможно добиться успеха в одиночку, это бизнес команды, сплоченные одной идеей.
								Лидеры на основании своего опыта обучают свою команду, своих дистрибьюторов навыкам создания успешной бизнес структуры.
							</p>
						</div>
						<a href="/#start" class="button button--red aboutCompany__become">Стать партнёром</a>
					</div>
					<div class="team__leaders">
						<?php foreach(getLeaders() as $leader) { ?>
							<div>
								<a href="<?php echo $leader['leader-link']; ?>" class="team__leader">
									<div class="team__leaderImg">
										<img src="<?php echo $leader['leader-img']; ?>" alt="">
									</div>
									<h3 class="team__leaderName"><?php echo $leader['leader-name']; ?></h3>
								</a>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="dots team__dots"></div>
			</div>
			<div class="brands aboutCompany__section">
				<h2 class="aboutCompany__sectionTitle">Наши бренды</h2>
				<div class="brands__wrapper">
					<div class="brands__single">
						<?php foreach(getBrands() as $brand) { ?>
							<div class="brands__singleItem">
								<div class="brand">
									<div class="brand__img">
										<?php echo $brand['brand-img']; ?>
									</div>
									<h3 class="brand__title"><?php echo $brand['brand-name']; ?></h3>
									<p class="brand__quote"><?php echo $brand['brand-slogan']; ?></p>
									<div class="brand__text">
										<?php echo $brand['brand-content']; ?>
									</div>
									<?php if($brand['brand-link']->slug !== '') { ?>
										<a href="/brand/<?php echo $brand['brand-link']->slug; ?>" class="brand__more">Показать товары бренда</a>
									<?php } ?>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="brands__list">
						<?php $brand_index = 0; ?>
						<?php foreach(getBrands() as $brand) { ?>
							<div class="brands__item" data-slider-index="<?php echo $brand_index; ?>">
								<?php echo $brand['brand-img']; ?>
							</div>
							<?php $brand_index++; ?>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="aboutCompany__section" id="certs">
				<h2 class="aboutCompany__sectionTitle">Сертификаты</h2>
				<div class="cert">
					<div>
						<a href="<?php echo IMG_DIR ;?>/cert/1.jpg" class="cert__item" data-fancybox>
							<img src="<?php echo IMG_DIR ;?>/cert/1_pr.jpg" alt="">
						</a>
					</div>
					<div>
						<a href="<?php echo IMG_DIR ;?>/cert/2.jpg" class="cert__item" data-fancybox>
							<img src="<?php echo IMG_DIR ;?>/cert/2_pr.jpg" alt="">
						</a>
					</div>
					<div>
						<a href="<?php echo IMG_DIR ;?>/cert/3.jpg" class="cert__item" data-fancybox>
							<img src="<?php echo IMG_DIR ;?>/cert/3_pr.jpg" alt="">
						</a>
					</div>
					<div>
						<a href="<?php echo IMG_DIR ;?>/cert/4.jpg" class="cert__item" data-fancybox>
							<img src="<?php echo IMG_DIR ;?>/cert/4_pr.jpg" alt="">
						</a>
					</div>
				</div>
		</div>
	</section>
	<div class="about about--post">
		<div class="container">
			<div class="about__footer">
				<a href="/" class="button about__back">Вернуться на главную</a>
				<?php get_template_part('include/social'); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>