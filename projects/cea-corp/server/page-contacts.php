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
						<a href="/" class="header__link">Domů</a>
						<a href="/about/" class="header__link">O nás</a>
						<a href="/employees/" class="header__link">Zaměstnanci</a>
						<a href="/partners/" class="header__link">Zaměstnavatele</a>
						<a class="header__link header__link--active">Kontakty</a>
					</nav>
				</div>
				<div class="header__phone">
					<a href="tel:+420775265842" class="header__link header__link--phone">+420 775 265 842</a>
					<a href="tel:+420222103129" class="header__link header__link--fax">+420 222 103 129 </a>
				</div>
			</div>
		</div>
	</header>
	<section class="contactsIntro">
		<div class="container">
			<div class="contactsIntro__wrapper">
				<div class="contactsIntro__head">
					<h1 class="title title--big contactsIntro__title">Kontakty</h1>
					<p class="caption">Jsme tu pro Vás!</p>
				</div>
				<div class="contactsIntro__map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.2397467682845!2d14.429077515934392!3d50.08179802173986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b94925701116f%3A0x367cbc95ba795f33!2zUG9saXRpY2vDvWNoIHbEm3rFiMWvIDEyNzIsIDExMCAwMCBOb3bDqSBNxJtzdG8sINCn0LXRhdC40Y8!5e0!3m2!1sru!2sru!4v1624013341724!5m2!1sru!2sru" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</section>
	<section class="contactsInfo">
		<div class="container">
			<div class="contactsInfo__wrapper">
				<h2 class="title title--medium contactsInfo__title">Kontakujte nas</h2>
				<ul class="contactsInfo__list">
					<li class="contactsInfo__item contactsInfo__item--first">
						<h3 class="contactsInfo__listTitle">Česko Evropská Agentura s.r.o.</h3>
						<div class="contactsInfo__content">
							<address>
								Politických vězňů 1272/21 <br>
								110 00 Nové Město <br>
								Praha 1 (Česká Republika)
							</address>
						</div>
					</li>
					<li class="contactsInfo__item">
						<h3 class="contactsInfo__listTitle">Telefon</h3>
						<div class="contactsInfo__content">
							<a href="tel:+420222103129">+420 222 103 129</a>
							<a href="tel:+420773339730">+420 773 339 730 (fax)</a>
						</div>
					</li>
					<li class="contactsInfo__item">
						<h3 class="contactsInfo__listTitle">Email</h3>
						<div class="contactsInfo__content">
							<a href="mailto:info@ceskoevropska.cz">info@ceskoevropska.cz</a>
						</div>
					</li>
					<li class="contactsInfo__item">
						<h3 class="contactsInfo__listTitle">Oteviraci doba</h3>
						<div class="contactsInfo__content">
							<p>Pondělí - Pátek 10:00 - 19:00</p>
						</div>
					</li>
					<li class="contactsInfo__item">
						<h3 class="contactsInfo__listTitle">Identifikační údaje</h3>
						<div class="contactsInfo__content">
							<p>IČ: 052 26 511</p>
							<p>DIČ: CZ05226511</p>
						</div>
					</li>
					<li class="contactsInfo__item">
						<h3 class="contactsInfo__listTitle">Bankovní účty určené ke zveřejnění</h3>
						<div class="contactsInfo__content">
							<p>275570256/0300</p>
							<p>5337020309/0800</p>
						</div>
					</li>
					<li class="contactsInfo__item contactsInfo__item--mobile">
						<h3 class="contactsInfo__listTitle">Socialní sítě</h3>
						<div class="contactsInfo__content">
							<div class="contactsInfo__social">
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
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="orderCall orderCall--contacts">
		<div class="container">
			<div class="orderCall__wrapper">
				<h2 class="title title--medium orderCall__title">Vyplňte formulář a my <br> Vás co možná nejdříve kontaktujeme</h2>
				<div class="orderCall__formWrapper">
					<form class="form form--white orderCall__form" data-src="<?php echo THEME_ROOT ?>">
						<div class="form__body">
							<label class="form__label" data-error>
								<input type="text" class="form__input" name="oc-name" placeholder="Jméno a příjmení*">
							</label>
							<label class="form__label" data-error>
								<input type="email" class="form__input" name="oc-email" placeholder="E-mail*">
							</label>
							<label class="form__label" data-error>
								<input type="text" class="form__input" name="oc-message" placeholder="Zpráva*">
							</label>
						</div>
						<div class="form__foot">
							<div class="form__agree">
								<input type="checkbox" name="agree" id="form_agree" class="vh">
								<label for="form_agree" class="form__agreeLabel">
									Souhlasím se <a href="#">zpracováním osobních údajů</a><span>*</span>
								</label>
							</div>
							<button type="button" class="link--arrow form__btn orderCall__btn">Odeslat žádost</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>