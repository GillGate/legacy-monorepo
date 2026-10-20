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
						<a class="header__link header__link--active">O nás</a>
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
	<section class="about">
		<div class="container">
			<div class="about__head">
				<h1 class="title title--big about__title">
					Úspěch firmy stojí <br>
					především na lidech
				</h1>
				<ul class="about__list about__list--desktop">
					<li>
						<span>60</span> partnerů <br> v ČR
					</li>
					<li>
						<span>5K</span> spokojených <br> zaměstnanců
					</li>
					<li>
						<span>5</span> let <br> na trhu
					</li>
				</ul>
			</div>
			<div class="about__content about__content--left">
				<p class="text about__text">
					ČEA - mezinárodní personální agentura, která v roce 2016 byla založena v Praze. Agentura zabývá se problematikou nedostatku pracovních sil v průmyslu a dalších oborech. Působí na celém území České republiky i v dalších státech EU. Poskytujeme profesionální servis a pečlivě se staráme o naši klienty tak, abychom zajistili jejich maximální spokojenost.
				</p>
				<div class="about__img">
					<img src="<?php echo IMG_DIR ?>/about-img-1.jpg" alt="">
				</div>
			</div>
			<div class="about__content about__content--right">
				<div class="about__img">
					<img src="<?php echo IMG_DIR ?>/about-img-2.jpg" alt="">
				</div>
				<div class="about__textWrapper">
					<p class="text about__text">Česko Evropská Agentura je držitelem všech požadovaných povolení Generálního ředitelství Úřadu práce České republiky, a to v celém rozsahu bez omezení, dále je členem Hospodářské komory.</p>
					<p class="text about__text">Má splněny veškeré další legislativní požadavky, tj. především složení kauce a firemní pojištění. Splňuje požadavky nařízení Evropské unie General Data Protection Regulation na ochranu osobních údajů.</p>
				</div>
			</div>
			<ul class="about__list about__list--tablet">
				<li>
					<span>60</span> partnerů <br> v ČR
				</li>
				<li>
					<span>5K</span> spokojených <br> zaměstnanců
				</li>
				<li>
					<span>5</span> let <br> na trhu
				</li>
			</ul>
		</div>
	</section>
	<section class="institution">
		<div class="container">
			<p class="text text--bl institution__text">
				Česko Evropská Agentura zajišťuje veškeré náležitosti vůči dálším institucím:
			</p>
			<ul class="institution__list">
				<li>Finančnímu úřadu</li>
				<li>Správě sociálního zabezpečení</li>
				<li>Zdravotním pojišťovnám</li>
				<li>Úřadům práce</li>
				<li>Cizinecké policii</li>
				<li>Úřadu bezpečnosti práce</li>
			</ul>
		</div>
	</section>
	<section class="rules">
		<div class="container">
			<h2 class="rules__title">
				Činnost Česko Evropské Agentury má svá pevně daná pravidla. Ta jsou určena legislativou České republiky a dalšími vyhláškami a předpisy
			</h2>
			<ul class="list rules__list">
				<li>Zaměstnávat odpovědnou osobu, která splňuje zákonné podmínky</li>
				<li>Složit k rukám Generálního ředitelství Úřadu práce České republiky kauci ve výši 500 tis. Kč</li>
				<li>Zaplatit pojištění společnosti pro případ úpadku společnosti tak, aby byl agenturním zaměstnancům zaplacen dohodnutý plat</li>
				<li>Zaplatit odpovědnostní pojištění společnosti, které pokryje případné škody způsobené klientovi, který zaměstnává agenturní pracovníky</li>
			</ul>
			<div class="rules__deposit">
				<span>500 tis. Kč</span>kauci ve výši
			</div>
		</div>
	</section>
	<?php get_template_part( 'include/fields' ); ?>
	<section class="gallery">
		<div class="container">
			<div class="gallery__head">
				<div class="gallery__info">
					<h2 class="title title--big gallery__title">Fotogalerie</h2>
					<p class="gallery__caption">
						CEA má rozsáhlou síť a využívá efektivní metody náboru, což nám umožňuje optimální propojení kvalifikovaných 
					</p>
				</div>
				<div class="gallery__controls">
					<button type="button" class="slider__btn slider__btn--prev" disabled>
						<svg width="40" height="26" viewBox="0 0 40 26" fill="#111546" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.715595 10.881L11.0522 0.468773C11.5297 -0.0122147 12.3048 -0.0122147 12.7823 0.468773C13.2598 0.949761 13.2598 1.73049 12.7823 2.21148L3.6688 11.3916L38.7768 11.3916C39.4524 11.3916 40 11.9432 40 12.6237C40.0004 12.964 39.8633 13.272 39.6419 13.4951C39.4204 13.7182 39.1146 13.8563 38.7768 13.8558L3.6688 13.8558L12.7823 23.036C13.2598 23.517 13.2598 24.2977 12.7823 24.7787C12.3048 25.2597 11.5297 25.2597 11.0523 24.7787L0.715595 14.3664C-0.238533 13.4053 -0.238533 11.8421 0.715595 10.881Z"/>
						</svg>
					</button>
					<button type="button" class="slider__btn slider__btn--next">
						<svg width="40" height="26" viewBox="0 0 40 26" fill="#111546" xmlns="http://www.w3.org/2000/svg">
							<path d="M39.2844 10.881L28.9478 0.468773C28.4703 -0.0122147 27.6952 -0.0122147 27.2177 0.468773C26.7402 0.949761 26.7402 1.73049 27.2177 2.21148L36.3312 11.3916L1.22315 11.3916C0.547565 11.3916 1.04615e-06 11.9432 1.02038e-06 12.6237C-0.000431514 12.964 0.136676 13.272 0.358123 13.4951C0.579571 13.7182 0.885357 13.8563 1.22315 13.8558L36.3312 13.8558L27.2177 23.036C26.7402 23.517 26.7402 24.2977 27.2177 24.7787C27.6952 25.2597 28.4703 25.2597 28.9477 24.7787L39.2844 14.3664C40.2385 13.4053 40.2385 11.8421 39.2844 10.881Z"/>
						</svg>
					</button>
				</div>
			</div>
			<div class="slider gallery__list">
				<?php foreach(getGallery() as $photo) { ?>
					<div><img src="<?php echo $photo['img']; ?>" alt="<?php echo $photo['name']; ?>"></div>
				<?php } ?>
			</div>
			<p class="text text--bl gallery__quote">
				Abychom zvládli celou agendu používáme <span>vlastní, originální software,</span> který byl vyvinut na základě znalostí a zkušeností při zajišťování celého procesu. Zahrnuje evidenci agenturních zaměstnanců i našich klientů a optimalizuje jak nabídku, tak poptávku.
			</p>
		</div>
	</section>
	<section class="docs">
		<div class="container">
			<div class="docs__wrapper">
				<div class="docs__img docs__img--desktop">
					<img src="<?php echo IMG_DIR ?>/docs.jpg" alt="">
				</div>
				<div class="docs__info">
					<h2 class="title title--big docs__title">Dokumenty <br> ke stážení</h2>
					<p class="docs__text">Všechny formuláře a další důležité dokumenty, které budete potřebovat.</p>
					<div class="docs__img docs__img--tablet">
						<img src="<?php echo IMG_DIR ?>/docs.jpg" alt="">
					</div>
					<a href="#" class="link--arrow link--arrowFW docs__link">Dokumenty</a>
				</div>
			</div>
		</div>
	</section>
	<section class="orderCall">
		<div class="container">
			<div class="orderCall__wrapper">
				<h2 class="title title--medium orderCall__title">Máte nějaké otázky? <br> Rádi vám odpovíme</h2>
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
							<button class="link--arrow form__btn orderCall__btn">Odeslat žádost</button>
						</div>
					</form>
					<div class="form__result"></div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>