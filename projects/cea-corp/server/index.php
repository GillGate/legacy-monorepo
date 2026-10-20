<?php get_header(); ?>
<body>
	<header class="header">
		<div class="container">
			<div class="header__logo">
				<img src="<?php echo IMG_DIR ?>/logo.svg" height="60" alt="">
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
<?php get_footer(); ?>