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
						<a class="header__link header__link--active">Zaměstnavatele</a>
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
	<section class="partnersIntro">
		<div class="container">
			<div class="partnersIntro__wrapper">
				<h1 class="title title--big partnersIntro__title">Vážíme si spolupráce <br>s každým z našich partnerů</h1>
				<div class="partnersIntro__content">
					<p class="caption partnersIntro__caption">CEA má rozsáhlou síť a využívá efektivní metody náboru. To nám umožňuje optimální propojení kvalifikovaných pracovníků s vhodnými zaměstnavateli. Vyvinuli jsme vlastní metody analýzy a školení našich zaměstnanců, což nám.</p>
					<p class="caption partnersIntro__caption">Pomáhá zlepšit kvalitu poskytovaných služeb. Proto jsme v tak krátké době zahájili spolupráci s více než 60 úspěšnými dlouhodobými partnery v České republice i v dalších státech Evropské Unie.</p>
					<div class="partnersIntro__img">
						<img src="<?php echo IMG_DIR ?>/partners-intro.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="partnersList">
		<div class="container">
			<?php get_template_part( 'include/partners' ); ?>
		</div>
	</section>
	<section class="reviews" id="reviews">
		<div class="container">
			<h2 class="title title--medium reviews__title">Pomáháme našim klientům najít talentované a motivované lidi, které potřebují k úspěchu.</h2>
			<div class="reviews__wrapper reviews__wrapper--partners">
				<div class="reviews__col reviews__col--wide">
					<div class="reviews__item">
						<p class="reviews__text">Jinak bych Vám chtěla jménem naši firmy - Zátiší Catering group moc poděkovat za poslední dny spolupráce. Věřím, že to pro vás bylo náročné. Velmi si vážíme Vaší práce jak my na HR oddělení, tak Event manageři společne s key partner managery. Prostě Vám patří jedno obrovské DĚKUJI. Jsme za vás moc rádi a prosím řekněte o tom celému Vašemu týmu.</p>
						<p class="reviews__company">Zátiší Catering Group</p>
						<p class="reviews__name">Anet J</p>
					</div>
				</div>
				<div class="reviews__col reviews__col--mobile">
					<div class="reviews__item">
						<p class="reviews__text">Rád bych navázal na kolegu a poděkoval za Vaši podporu při akcích. Po zkušenostech s jinými agenturami mohu říci, že Váš personál předčil očekávání nejen mé, ale i očekávání mého nadřízeného. Klient byl  pokaždé spokojen se servisem a já to potvrzuji. Personál byl vždy pěkně upraven, přišel načas a hlavně se zajímal o práci, kterou jsme mu zadali.</p>
						<p class="reviews__company">Sodexo</p>
						<p class="reviews__name">Jan Príkazský</p>
					</div>
					<div class="reviews__item reviews__item--second">
						<p class="reviews__text">Doposud jsme byli vždy velmi rádi, že jsme se na vás mohli obratit i na poslední chvíli a byl zařízený další člověk. Tímto bych tedy ještě jednou chtěla poděkovat za spolupráci a budeme doufat v nové šikovné pracovníky pro náš hotel.</p>
						<p class="reviews__company">Lindner Hotel Prague </p>
						<p class="reviews__name">F&B Manager Assistant <br>
						Natálie Kuncová</p>
					</div>
				</div>
				<div class="reviews__col reviews__col--desktop">
					<div class="reviews__item">
						<p class="reviews__text">I would like to kindly share with you my experience of working together with the Česko Evropská Agentura. Working long time in hotel and dealing with couple of different agencies, I realized how many issues and challenges can be met. All managers from ČEA were always supporting us even at the last minute request, most of the casuals are well trained compared with other agencies. I’m really happy to work only with this agency, as all of people are tolerant, polite and patient.</p>
						<p class="reviews__company">Augustine Hotel Prague</p>
						<p class="reviews__name">F&B supervisor</p>
					</div>
				</div>
			</div>
			<div class="reviews__slider">
				<?php foreach(getReviews() as $review) { ?>
					<div class="reviews__item">
						<p class="reviews__text">
							<?php echo $review['text']; ?>
						</p>
						<p class="reviews__company"><?php echo $review['company']; ?></p>
						<p class="reviews__name"><?php echo $review['author']; ?></p>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<?php get_template_part( 'include/letters' ); ?>
	<section class="cooperation cooperation--partner" id="cooperation">
		<div class="container">
			<h2 class="title--medium cooperation__title">Máte zájem o spolupráci? Dejte nám vědět</h2>
			<div class="cooperation__formWrapper">
				<h3 class="title--medium cooperation__formTitle">Možnosti spolupráce. <br> Staňte se naším partnerem!</h3>
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
<?php get_footer(); ?>