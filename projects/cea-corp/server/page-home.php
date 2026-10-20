<?php get_header(); ?>
<body>
	<header class="header">
		<div class="container">
			<div class="header__head">
				<div class="header__logo">
					<img src="<?php echo IMG_DIR ?>/logo.svg" height="60" alt="">
				</div>
				<div class="header__navBlock">
					<div class="header__bar"><span></span></div>
					<div class="header__openHeader">
						<div class="header__openPhone">
							<a href="tel:+420775265842">+420 775 265 842</a>
							<span>Viber, WhatsApp, Telegram</span>
						</div>
						<button class="header__close" type="button">
							<img src="<?php echo IMG_DIR ?>/close.svg" alt="" width="40" height="40">
						</button>
					</div>
					<nav class="header__nav">
						<a class="header__link header__link--active">Domů</a>
						<a href="/about/" class="header__link">O nás</a>
						<a href="/employees/" class="header__link">Zaměstnanci</a>
						<a href="/partners/" class="header__link">Zaměstnavatele</a>
						<a href="/contacts/" class="header__link">Kontakty</a>
					</nav>
				</div>
				<div class="header__phone">
					<a href="tel:+420775265842" class="header__link header__link--phone">+420 775 265 842</a>
					<a href="tel:+420222103129" class="header__link header__link--fax">+420 222 103 129 </a>
				</div>
			</div>
		</div>
	</header>
	<section class="intro">
		<div class="container">
			<div class="intro__description">
				<p class="caption intro__text">Mezinárodní personální agentura</p>
				<div class="intro__titleWrap">
					<h1 class="title title--blue title--big intro__title">
						Agentura s 5letou<br>
						skvělou historií
					</h1>
					<p class="caption intro__caption">Od roku 2016</p>
				</div>
			</div>
			<div class="intro__img">
				<img src="<?php echo IMG_DIR ?>/intro.jpg" alt="">
			</div>
		</div>
	</section>
	<section class="success">
		<div class="container">
			<div class="success__head">
				<div class="success__titleWrap">
					<h2 class="title title--medium success__title">
						Úspěch firmy stojí především na lidech
					</h2>
					<p class="caption success__headCaption success__headCaption--desktop">
						Agentura působí na celém území České republiky i v dalších státech EU
					</p>
				</div>
				<p class="success__text text--big text--bl">
					ČEA - mezinárodní personální agentura, která v roce 2016 byla založena v Praze.  Agentura zabývá se problematikou nedostatku pracovních sil v průmyslu a dalších oborech.
				</p>
			</div>
			<div class="success__body">
				<div class="success__mainImg">
					<img src="<?php echo IMG_DIR ?>/success-main.jpg" alt="">
				</div>
				<div class="success__aside">
					<div class="success__asideImg">
						<img src="<?php echo IMG_DIR ?>/success-aside.jpg" alt="">
					</div>
					<div class="success__asideContent">
						<p class="caption success__asideCaption success__asideCaption--tablet">
						Agentura působí na celém území České republiky i v dalších státech EU
						</p>
						<p class="caption success__asideCaption">
							Poskytujeme profesionální servis a pečlivě se staráme o naši klienty tak, abychom zajistili jejich maximální spokojenost  
						</p>
						<a href="/about/" class="link--arrow link--arrowFW success__link">O společnosti</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="benefits">
		<div class="container">
			<div class="benefits__wrapper">
				<p class="benefits__caption">
					Krátce o nás <br>
					v číslech
				</p>
				<ul class="benefits__list">
					<li class="benefits__item benefits__item--big"><span>5k+</span>spokojených <br> zaměstnanců</li>
					<li class="benefits__item benefits__item--small"><span>5</span> let na trhu</li>
					<li class="benefits__item benefits__item--medium"><span>50+</span>dostupných <br> pracovních míst</li>
					<li class="benefits__item benefits__item--big"><span>60+</span>spolehlivých partnerů <br> v celé České republice</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="permissions">
		<div class="container">
			<h2 class="permissions__title">
				ČEA je držitelem všech požadovaných povolení<br>
				Generálního ředitelství Úřadu práce ČR
			</h2>
			<ul class="permissions__list">
				<li>Jsme členem Hospodářské komory a má splněny veškeré další legislativní požadavky, tj. především složení kauce a firemní pojištění </li>
				<li>ČEA používá vlastní originální software pro evidenci a administraci klientů a komunikaci s úřady</li>
				<li>Splňuje požadavky nařízení Evropské unie General Data Protection Regulation na ochranu osobních údajů</li>
			</ul>
			<a href="/documents/" class="permissions__link">Dokumenty ke stážení  ></a>
		</div>
	</section>
	<?php get_template_part( 'include/fields' ); ?>
	<?php get_template_part( 'include/reviews' ); ?>
	<?php get_template_part( 'include/letters' ); ?>
	<section class="partnership">
		<div class="container">
			<div class="partnership__wrapper">
				<h2 class="title--medium title--blue partnership__title">Vážíme si spolupráce s každým z našich partnerů</h2>
				<p class="caption partnership__caption">
					Jako společnost si vážíme spolupráce s každým z našich partnerů, níže si můžete prohlédnout s jakými společnostmi spolupracujeme
				</p>
			</div>
			<?php get_template_part( 'include/partners' ); ?>
		</div>
	</section>
	<section class="cooperation">
		<div class="container">
			<h2 class="title--medium cooperation__title">Máte zájem o spolupráci? Dejte nám vědět</h2>
			<div class="cooperation__formWrapper">
				<h3 class="title--medium cooperation__formTitle">Možnosti spolupráce. Staňte se naším partnerem!</h3>
				<form class="form cooperation__form" data-src="<?php echo THEME_ROOT ?>">
					<div class="form__body">
						<label class="form__label" data-error="">
							<input type="text" class="form__input" name="cooperation-name" placeholder="Jméno a příjmení*">
						</label>
						<label class="form__label" data-error="">
							<input type="text" class="form__input" name="cooperation-company" placeholder="Firma*">
						</label>
						<label class="form__label" data-error="">
							<input type="email" class="form__input" name="cooperation-email" placeholder="E-mail*">
						</label>
						<label class="form__label" data-error="">
							<input type="tel" class="form__input" name="cooperation-phone" placeholder="Telefon*">
						</label>
						<label class="form__label">
							<input type="text" class="form__input" name="cooperation-comment" placeholder="Komentář">
						</label>
					</div>
					<div class="form__foot">
						<div class="form__agree">
							<input type="checkbox" name="agree" id="form_agree" class="vh form__checkbox">
							<label for="form_agree" class="form__agreeLabel">
								Souhlasím se <a href="#">zpracováním osobních údajů</a><span>*</span>
							</label>
						</div>
						<button type="button" class="link--arrow link--arrowWhite form__btn coopetation__btn">Odeslat žádost</button>
					</div>
				</form>
				<div class="form__result"></div>
			</div>
		</div>
	</section>
	<section class="consultation">
		<div class="container">
			<div class="consultation__newJob">
				<h2 class="title--big consultation__title">Hledáte novou práci?</h2>
				<p class="consultation__caption">
					Pojďme se spolu podívat jak vám můžeme hledání vaší vysněné práce usnadnit.
				</p>
				<a href="/employees/" class="consultation__link">Zobrazit více</a>
			</div>
			<div class="consultation__aside">
				<div class="consultation__asideHead">
					<h3 class="consultation__asideTitle">
						Konzultace
					</h3>
					<p class="consultation__caption">
						Máte otázky? Zeptejte se nás!
					</p>
				</div>
				<p class="consultation__text">
					Ozvěte se nám a vše Vaše dotazy rádi zodpovíme
				</p>
			</div>
		</div>
	</section>
	<section class="contacts">
		<div class="container">
			<div class="contacts__wrapper">
				<h2 class="title--medium contacts__title">Kontakty</h2>
				<div class="contacts__info">
					<span>Česko Evropská Agentura s.r.o.</span>
					<address>
						Politických vězňů 1272/21
						110 00 Nové Město
					</address>
					<p>Mon - Fri. 10:00 - 19:00</p>
					<p>
						IČ: 052 26 511 <br>
						DIČ: CZ05226511
					</p>
					<p>telefon: <a href="tel:+420775265842">+420 775 265 842</a></p>
					<p>e-mail: <a href="mailto:info@cea.cz">info@cea.cz</a></p>
					<div class="contacts__list">
						<a href="https://wa.me/420775265842" target="_blank" rel="noopener">
							<img src="<?php echo IMG_DIR ?>/contacts-wa.svg" alt="WhatsApp">
						</a>
						<a href="https://telegram.me/cea_agentura" target="_blank" rel="noopener">
							<img src="<?php echo IMG_DIR ?>/contacts-tg.svg" alt="Telegram">
						</a>
						<a href="viber://chat?number=%2B420775265842" target="_blank" rel="noopener">
							<img src="<?php echo IMG_DIR ?>/contacts-vb.svg" alt="Viber">
						</a>
						<a href="https://vk.com/cea_agentura" target="_blank" rel="noopener">
							<img src="<?php echo IMG_DIR ?>/contacts-vk.svg" alt="VK">
						</a>
						<a href="https://www.facebook.com/pages/category/Product-Service/%C4%8Cesko-Evropsk%C3%A1-agentura-815175385535172/" target="_blank" rel="noopener">
							<img src="<?php echo IMG_DIR ?>/contacts-fb.svg" alt="Facebook">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>