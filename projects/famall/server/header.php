<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">

	<?php wp_head(); ?>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(90650386, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/90650386" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body>
	<?php if(is_front_page()) { ?>
		<header class="intro" id="intro">
			<div class="intro__video intro__video--desktop">
				<video autoplay muted loop playsinline src="<?php echo IMG_DIR ;?>/intro-video6.mp4"></video>
			</div>
			<div class="intro__video intro__video--mobile">
				<video autoplay muted loop playsinline src="<?php echo IMG_DIR ;?>/intro-video-mobile6.mp4"></video>
			</div>
			<div class="container intro__wrapper">
				<div class="intro__header">
					<div class="intro__logo">
						<img src="<?php echo IMG_DIR ;?>/logo.png" width="345" alt="">
					</div>
					<nav class="intro__nav">
						<a href="#start" class="navLink intro__link">Как начать</a>
					</nav>
					<div class="header__nav header__nav--intro">
						<button class="header__bar" aria-label="Меню">
							<span></span>
						</button>
						<nav class="header__navBody">
							<a href="/about/" class="header__navLink">О компании</a>
							<div class="header__navBodyNested">
								<button type="button" class="header__navLink header__navLink--nested">Продукция</button>
								<div class="header__navNested">
									<a href="/product/" class="header__navLink">Каталог</a>
									<a href="/online-catalog/" class="header__navLink">PDF-каталог</a>
									<a href="/cert-product/" class="header__navLink">Сертификаты</a>
								</div>
							</div>
							<!-- <a href="/promotions/" class="header__navLink">Акции</a> -->
							<a href="/news/" class="header__navLink">Новости</a>
							<a href="/contacts/" class="header__navLink">Контакты</a>
						</nav>
					</div>
				</div>
				<div class="intro__body">
					<h1 class="intro__title">Famall Network</h1>
					<p class="intro__caption">Создайте свой экологичный бизнес будущего</p>
				</div>
			</div>
			<a href="#after" class="intro__down navLink">
				<img src="<?php echo IMG_DIR ;?>/icon-arrow-red.svg" width="40" alt="Вниз">
			</a>
		</header>
	<?php } else { ?>
		<header class="header">
			<div class="container header__wrapper">
				<div class="header__head">
					<a href="/" class="header__logo">
						<img src="<?php echo IMG_DIR ;?>/logo.png" width="345" alt="">
					</a>
				</div>
				<div class="header__nav">
					<button class="header__bar" aria-label="Меню">
						<span></span>
					</button>
					<nav class="header__navBody">
						<a href="/about/" class="header__navLink">О компании</a>
						<div class="header__navBodyNested">
							<button type="button" class="header__navLink header__navLink--nested">Продукция</button>
							<div class="header__navNested">
								<a href="/product/" class="header__navLink">Каталог</a>
								<a href="/online-catalog/" class="header__navLink">PDF-каталог</a>
								<a href="/cert-product/" class="header__navLink">Сертификаты</a>
							</div>
						</div>
						<!-- <a href="/promotions/" class="header__navLink">Акции</a> -->
						<a href="/news/" class="header__navLink">Новости</a>
						<a href="/#start" class="header__navLink">Как начать свой бизнес</a>
						<a href="/contacts/" class="header__navLink">Контакты</a>
					</nav>
				</div>
			</div>
		</header>
	<?php } ?>