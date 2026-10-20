<!DOCTYPE html>
<html lang="cz">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('title'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<?php wp_head(); ?>
</head>
<body>
	<header class="header">
		<div class="header__head">
			<div class="container">
				<div class="header__headWrapper">
					<div class="header__logo">
						<img src="<?php echo IMG_DIR ?>/logo.png" alt="Mangal Restaurant logo">
					</div>
					<div class="nav">
						<nav class="nav__wrapper">
							<a href="#about" class="nav__link">O nás</a>
							<a href="#food" class="nav__link">Naše jídla</a>
							<a href="#drinks" class="nav__link">Naše nápoje</a>
							<a href="#gallery" class="nav__link">Galerie</a>
							<a href="#contacts" class="nav__link">Kontakty</a>
						</nav>
						<div class="nav__lang">
							<span class="color--gold">Cz</span> / <a href="/en">En</a>
						</div>
						<div class="nav__burger"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="header__main">
			<div class="container">
				<div class="header__mainWrapper">
					<h1 class="header__title">
						<span class="color--gold-light">Připravujeme</span> <br>
						vynikající <br>
						<span class="color--gold">jídla</span>
					</h1>
					<div class="links">
						<a href="#">
							<img src="<?php echo IMG_DIR ?>/facebook.svg" alt="Facebook Page">
						</a>
						<a href="https://www.instagram.com/mangal_restaurant_prague" target="_blank" rel="noopener">
							<img src="<?php echo IMG_DIR ?>/instagram.svg" alt="Instagram Page">
						</a>
					</div>
					<div class="headerSlider">
						<?php $header_order = 0; ?>
						<?php foreach( $headerSlider_post as $post ){
							setup_postdata($post); ?>
							<?php $header_order++; ?>
							<div class="headerSlider__item">
								<div class="headerSlider__img">
									<img src="<?php the_post_thumbnail_url(); ?>" alt="">
								</div>
								<div class="headerSlider__caption">
									<div class="headerSlider__order">
										<span>0<?php echo $header_order; ?></span> / 07
									</div>
									<h3 class="headerSlider__title"><?php the_title(); ?></h3>
								</div>
							</div>
						<?php } wp_reset_postdata(); ?>

					</div>
					<div class="headerSlider__nav">
						<div class="headerSlider__dots">

							<?php foreach( $headerSlider_post as $post ){
							setup_postdata($post); ?>

							<div class="headerSlider__dot">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="Pirzola Izgarda">
							</div>
							<?php } wp_reset_postdata(); ?>
						</div>
						<div class="headerSlider__buttons">
							<button class="slider__button slider__button--prev headerSlider__button headerSlider__button--prev">Zpět</button>
							<button class="slider__button slider__button--next headerSlider__button headerSlider__button--next">Další</button>
						</div>
						<a href="#about" class="header__scroll">
							Dolů
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="welcome" id="about">
		<div class="container">
			<div class="welcome__wrapper">
			    <div class="welcome__img lazy">
				   <img data-src="<?php echo IMG_DIR ?>/welcome.png" alt="Knife">
			    </div>
			    <h2 class="title welcome__title">
					Vítejte v restauraci Mangal
			    </h2>
			    <div class="welcome__text">
			    	<p>Restaurace „Mangal“ byla otevřena v roce 2015 přímo v centru Prahy - Na Václavském náměstí přímo u budovy Národního muzea. Od té doby si restaurace získala důvěru obyvatel a hostů hlavního města České republiky.</p>
			    	<p>Turecká kuchyně je překvapivá svou rozmanitostí a množstvím jídel, které si naprosto každému budou líbit.</p>
			    	<p>Příprava pokrmů splňuje ty nejlepší turecké vzory, což potvrzuje profesionalita kuchařů z Turecka.</p>
			    	<p>Jednou ze zásad restaurace je připravit jídlo ve tvarů, ve kterém se podává v Turecku.</p>
			    	<p>Specialitou podniku je gril přímo v restauraci, který umožňuje hostům dohlížet na proces přípravy jejich jídla. Restaurace nabízí širokou škálu jehněčího, kuřecího a telecího masa na otevřeném ohni. Hosté si mohou také pochutnat řadu předkrmů, jídel z trouby, například “Pide”, což je chléb ve tvaru člunu s masem nebo sýrem, a nelze zapomenout na tradiční turecké dezerty. Zvláštní pozornost by měla být věnována národním nápojům Ayran a Shalgam.</p>
			    	<p>Při přípravě kebabů se používá pouze halal maso a suroviny se dodávají přímo z Turecka.</p>
			    	<p>Hala restaurace je vyzdobena všemi prvky tradičních tureckých podniku. Přijďte a užijte si malé Turecko v centru Prahy.</p>
			    </div>
			</div>
		</div>
	</section>
	<div class="parallax" data-parallax="scroll" data-image-src="<?php echo IMG_DIR ?>/welcome-food.jpg"></div>
	<section class="food" id="food">
		<h2 class="title food__title">
			Naše jídla
		</h2>
		<div class="food__wrapper">
			<div class="container">
				<div class="food__nav">
					<button class="button food__button" data-list="soups">Polévky</button>
					<button class="button food__button" data-list="salads">Předkrmy a saláty</button>
					<button class="button button--active food__button" data-list="main">Hlavní jídla na grilu</button>
					<button class="button food__button" data-list="specialities">Speciality</button>
					<button class="button food__button" data-list="dishes">Přílohy</button>
					<button class="button food__button" data-list="deserts">Dezerty</button>
				</div>
				<div class="food__menu">
					<div class="food__list food__list--soups">
						<ul class="foodMenu">
							<?php foreach( getSoups() as $soup ) { ?>
								<li>
									<div class="foodMenu__name">
										<h4 class="foodMenu__title"><?php echo $soup['title']; ?></h4> &nbsp;
										<span class="foodMenu__weight"><?php echo $soup['dosage']; ?></span>
										<div class="separator"></div>
										<span class="foodMenu__price"><?php echo $soup['price']; ?></span>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
					<div class="food__list food__list--salads">
						<ul class="foodMenu">
							<?php foreach( getSalads() as $salad ) { ?>
								<li>
									<div class="foodMenu__name">
										<h4 class="foodMenu__title"><?php echo $salad['title']; ?></h4> &nbsp;
										<?php if ( $salad['for'] != '') { ?>
											<span class="color--gold">
												<?php echo $salad['for']; ?>
											</span> &nbsp;
										<?php } ?>
										<span class="foodMenu__weight"><?php echo $salad['dosage']; ?></span>
										<div class="separator"></div>
										<span class="foodMenu__price"><?php echo $salad['price']; ?></span>
									</div>
									<p class="foodMenu__text">
										<?php echo $salad['description']; ?>
									</p>
								</li>
							<?php } ?>
						</ul>
					</div>
					<div class="food__list food__list--main food__list--active">
						<ul class="foodMenu">
							<?php foreach( getDishes() as $dish ) { ?>
								<li>
									<div class="foodMenu__name">
										<h4 class="foodMenu__title"><?php echo $dish['title']; ?></h4> &nbsp;
										<?php if ( $dish['for'] != '') { ?>
											<span class="color--gold">
												<?php echo $dish['for']; ?>
											</span> &nbsp;
										<?php } ?>
										<span class="foodMenu__weight"><?php echo $dish['dosage']; ?></span>
										<div class="separator"></div>
										<span class="foodMenu__price"><?php echo $dish['price']; ?></span>
									</div>
									<p class="foodMenu__text">
										<?php echo $dish['description']; ?>
									</p>
								</li>
							<?php } ?>
						</ul>
					</div>
					<div class="food__list food__list--specialities">
						<ul class="foodMenu">
							<?php foreach( getSpecialities() as $speciality ) { ?>
								<li>
									<div class="foodMenu__name">
										<h4 class="foodMenu__title"><?php echo $speciality['title']; ?></h4> &nbsp;
										<?php if ( $speciality['for'] != '') { ?>
											<span class="color--gold">
												<?php echo $speciality['for']; ?>
											</span> &nbsp;
										<?php } ?>
										<span class="foodMenu__weight"><?php echo $speciality['dosage']; ?></span>
										<div class="separator"></div>
										<span class="foodMenu__price"><?php echo $speciality['price']; ?></span>
									</div>
									<p class="foodMenu__text">
										<?php echo $speciality['description']; ?>
									</p>
								</li>
							<?php } ?>
						</ul>
					</div>
					<div class="food__list food__list--dishes">
						<ul class="foodMenu">
							<?php foreach( getSideDishes() as $dish ) { ?>
								<li>
									<div class="foodMenu__name">
										<h4 class="foodMenu__title"><?php echo $dish['title']; ?></h4> &nbsp;
										<div class="separator"></div>
										<span class="foodMenu__price"><?php echo $dish['price']; ?></span>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
					<div class="food__list food__list--deserts">
						<ul class="foodMenu">
							<?php foreach( getDesserts() as $dessert ) { ?>
								<li>
									<div class="foodMenu__name">
										<h4 class="foodMenu__title"><?php echo $dessert['title']; ?></h4> &nbsp;
										<div class="separator"></div>
										<span class="foodMenu__price"><?php echo $dessert['price']; ?></span>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
					<div class="food__controls food__controls--main">
						<div class="slider__buttons food__buttons">
							<button class="food__button food__button--prev">
								<img src="<?php echo IMG_DIR ?>/button-arrow.svg" alt="Previous">
							</button>
							<div class="food__sliderNav"></div>
							<button class="food__button food__button--next">
								<img src="<?php echo IMG_DIR ?>/button-arrow.svg" alt="Next">
							</button>
						</div>
					</div>
					<div class="food__controls food__controls--salads">
						<div class="slider__buttons food__buttons">
							<button class="food__button food__button--prev">
								<img src="<?php echo IMG_DIR ?>/button-arrow.svg" alt="Previous">
							</button>
							<div class="food__sliderNav"></div>
							<button class="food__button food__button--next">
								<img src="<?php echo IMG_DIR ?>/button-arrow.svg" alt="Next">
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="drinks" id="drinks">
		<div class="container">
			<h2 class="title drinks__title">Naše nápoje</h2>
			<div class="drinks__nav">
				<button class="button drinks__button" data-list="hot">Horké nápoje</button>
				<button class="button drinks__button" data-list="soft">Nealkoholické nápoje</button>
				<button class="button button--active drinks__button" data-list="wine">Vína</button>
				<button class="button drinks__button" data-list="beer">Pivo</button>
				<button class="button drinks__button" data-list="spirits">Lihoviny</button>
			</div>
			<div class="drinks__menu">
				<div class="drinks__list drinks__list--hot">
					<ul class="drinksMenu">
						<?php foreach( getHotDrinks() as $hot_drink ) { ?>
							<li class="drinksMenu__option">
								<?php if ( $hot_drink['category'] != '') { ?>
									<h4 class="drinksMenu__title">
										<?php echo $hot_drink['category']; ?>
									</h4>
								<?php } ?>
								<div class="drinksMenu__text">
									<p class="drinksMenu__name">
										<?php echo $hot_drink['name']; ?>
									</p>
									<div class="separator"></div>
									<span class="drinksMenu__price">
										<?php echo $hot_drink['price']; ?>
									</span>
								</div>
							</li>
						<?php } ?>
					</ul>
				</div>
				<div class="drinks__list drinks__list--soft">
					<ul class="drinksMenu">
						<?php foreach( getSoftsDrinks() as $softs_drink ) { ?>
							<li class="drinksMenu__option">
								<?php if ( $softs_drink['category'] != '') { ?>
									<h4 class="drinksMenu__title">
										<?php echo $softs_drink['category']; ?>
									</h4>
								<?php } ?>
								<div class="drinksMenu__text">
									<p class="drinksMenu__name">
										<?php echo $softs_drink['name']; ?>
										<span>
											<?php echo $softs_drink['dosage']; ?>
										</span>
									</p>
									<div class="separator"></div>
									<span class="drinksMenu__price">
										<?php echo $softs_drink['price']; ?>
									</span>
								</div>
							</li>
						<?php } ?>
					</ul>
				</div>
				<div class="drinks__list drinks__list--wine drinks__list--active">
					<ul class="drinksMenu">
						<?php foreach( getWineList() as $wine ) { ?>

							<li class="drinksMenu__option">
								<?php if ( $wine['dosage'] != '') { ?>
									<div class="drinksMenu__dosage">
										<?php echo $wine['dosage']; ?>
									</div>
								<?php } ?>
								<h4 class="drinksMenu__title">
									<?php echo $wine['name']; ?>
								</h4>
								<div class="drinksMenu__text">
									<p class="drinksMenu__name">
										<?php echo $wine['description']; ?>
									</p>
									<div class="separator"></div>
									<span class="drinksMenu__price">
										<?php echo $wine['price']; ?>
									</span>
								</div>
							</li>
						<?php } ?>
					</ul>
				</div>
				<div class="drinks__list drinks__list--beer">
					<ul class="drinksMenu">
						<?php foreach( getBeerList() as $beer ) { ?>
							<li class="drinksMenu__option">
								<?php if ( $beer['category'] != '') { ?>
									<h4 class="drinksMenu__title">
										<?php echo $beer['category']; ?>
									</h4>
								<?php } ?>
								<div class="drinksMenu__text">
									<p class="drinksMenu__name">
										<?php echo $beer['name']; ?>
										<span>
											<?php echo $beer['dosage']; ?>
										</span>
									</p>
									
									<div class="separator"></div>
									<span class="drinksMenu__price">
										<?php echo $beer['price']; ?>
									</span>
								</div>
							</li>
						<?php } ?>
					</ul>
				</div>
				<div class="drinks__list drinks__list--spirits">
					<ul class="drinksMenu">
						<?php foreach( getSpiritsList() as $spirit ) { ?>
							<li class="drinksMenu__option">
								<?php if ( $spirit['category'] != '') { ?>
									<h4 class="drinksMenu__title">
										<?php echo $spirit['category']; ?>
									</h4>
								<?php } ?>
								<div class="drinksMenu__text">
									<p class="drinksMenu__name">
										<?php echo $spirit['name']; ?>
										<span>
											<?php echo $spirit['dosage']; ?>
										</span>
									</p>
									<div class="separator"></div>
									<span class="drinksMenu__price">
										<?php echo $spirit['price']; ?>
									</span>
								</div>
							</li>
						<?php } ?>
					</ul>
				</div>
				<div class="drinks__controls">
					<div class="slider__buttons drinks__buttons">
						<button class="drinks__button drinks__button--prev">
							<img src="<?php echo IMG_DIR ?>/button-arrow.svg" alt="Previous">
						</button>
						<div class="drinks__sliderNav"></div>
						<button class="drinks__button drinks__button--next">
							<img src="<?php echo IMG_DIR ?>/button-arrow.svg" alt="Next">
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="gallery" id="gallery">
		<h2 class="title gallery__title">
			Galerie
		</h2>
		<div class="gallerySlider">
			<?php foreach( getGallery() as $slider_item ) { ?>
				<div class="gallerySlider__item">
					<div class="gallerySlider__img">
						<img data-lazy="<?php echo $slider_item['img'] ?>" alt="<?php echo $slider_item['title'] ?>">
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="gallerySlider__nav">
			<button class="gallerySlider__button gallerySlider__button--prev">
				<img src="<?php echo IMG_DIR ?>/button-arrow.svg" alt="Previous">
			</button>
			<button class="gallerySlider__button gallerySlider__button--next">
				<img src="<?php echo IMG_DIR ?>/button-arrow.svg" alt="Next">
			</button>
		</div>
	</section>
	<section class="contacts" id="contacts">
		<div class="container">
			<h2 class="title contacts__title">
				Přijďte se na nás podívat
			</h2>
			<p class="contacts__text">
				Své pokrmy připravujeme s láskou a péčí. Perfektní kombinace přírodních ingrediencí a pečlivě vybraných koření zde jsou hlavní výhody lahodných a zdravých jídel. Kdo k nám přijde jednou, rád se vrací. Za skvělým tureckým jídlem, vínem i příjemnou atmosférou.
			</p>
			<div class="contacts__img lazy">
				<img data-src="<?php echo IMG_DIR ?>/contacts-phone.png" alt="Phone">
			</div>
			<div class="contacts__phone">
				<p>Můžete nám zavolat:</p>
				<a href="tel:+420222210382">+420 222 210 382</a>
			</div>
			<div class="contacts__wrapper">
				<div class="contacts__mapWrapper">
					<div class="contacts__map">
						<img src="<?php echo IMG_DIR ?>/contacts-map.jpg" alt="Mangal location">
					</div>
				</div>
				<div class="contacts__info">
					<h3>Mangal Restaurant</h3>
					<address class="contacts__address">
						<p>Václavské nám. 807,</p>
						<p>110 00 Nové Město</p>
						<p>Praha 1</p>
					</address>
				</div>
				<div class="contacts__links">
					<p>Tel.: <a href="tel:+420222210382">+420 222 210 382</a></p>
					<p>Email: <a href="mailto:info@nursun.cz">info@nursun.cz</a></p>
					<a class="contacts__link" target="_blank"  rel="noopener" href="https://www.google.com/maps/search/mangal+restaurant/@47.9323586,11.8700443,6z">Ukázat na Google Maps</a>
				</div>
				<div class="links">
					<a href="#">
						<img src="<?php echo IMG_DIR ?>/facebook.svg" alt="Facebook Page">
					</a>
					<a href="https://www.instagram.com/mangal_restaurant_prague" target="_blank" rel="noopener">
						<img src="<?php echo IMG_DIR ?>/instagram.svg" alt="Instagram Page">
					</a>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer">
		<div class="container">
			<div class="footer__wrapper">
				<div class="footer__logo">
					<img src="<?php echo IMG_DIR ?>/footer-logo.png" alt="Mangal logo">
				</div>
				<div class="footer__nav">
					<a href="#about">O nás</a>
					<a href="#food">Naše jídla</a>
					<a href="#drinks">Naše nápoje</a>
					<a href="#gallery">Galerie</a>
					<a href="#contacts">Kontakty</a>
					<a href="#">Nursun international s.r.o.</a>
				</div>
				<a href="#" class="footer__share">
					<img src="<?php echo IMG_DIR ?>/share.svg" alt="Share">
				</a>
			</div>
			<div class="footer__info">
				 Created by <a href="https://digitalmonster.cz" target="_blank"  rel="noopener">digitalmonster.cz</a>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>