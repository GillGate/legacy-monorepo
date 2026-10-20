<?php get_header(); ?>
<body>
	<header class="header">
		<div class="container">
			<div class="header__logo">
				<img src="img/logo.svg" height="60" alt="">
			</div>
			<nav class="header__nav">
				<a href="/" class="header__link">Domů</a>
				<a href="/about" class="header__link">O nás</a>
				<a href="/employees" class="header__link">Zaměstnanci</a>
				<a href="/partners" class="header__link">Zaměstnavatele</a>
				<a href="/contacts" class="header__link">Kontakty</a>
			</nav>
			<div class="header__phone">
				<a href="tel:+420775265842" class="header__link header__link--phone">+420 775 265 842</a>
				<a href="tel:+420222103129" class="header__link header__link--fax">+420 222 103 129 </a>
			</div>
		</div>
	</header>
	<section class="page404">
		<div class="container">
			<div class="page404__wrapper">
				<h1 class="title--medium page404__title">404 Stránka nenájdená</h1>
				<div class="page404__content">
					<p>Je nám to velmi líto, ale požadovanou stránku nelze najít. Stránka byla pravděpodobně odstraněna, změnil se její název nebo není dočasně k dispozici</p>
					<a href="/">Vrátit se Domů ></a>
				</div>
			</div>
		</div>
	</section>
	<?php get_footer(); ?>