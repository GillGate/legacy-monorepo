<header class="header <?php if(!is_front_page()) echo 'header--alt' ?>">
	<?php 
		$location = get_field('site-location', 7);
		$city = get_field('site-city', 7);
		$links = get_field('site-links', 7);
	?>
	<div class="container header__wrapper">
		<a href="/">
			<div class="header__logo header__logo--white">
				<picture>
				    <source srcset="<?php echo IMG_DIR ?>/logo-white.svg"
				        media="(max-width: 760px)">
				    <img src="<?php echo IMG_DIR ?>/logo-full-white.svg" height="32" alt="Marzo.digital">
				</picture>
			</div>
			<div class="header__logo header__logo--black">
				<picture>
				    <source srcset="<?php echo IMG_DIR ?>/logo-black.svg"
				        media="(max-width: 760px)">
				    <img src="<?php echo IMG_DIR ?>/logo-full-black.svg" height="32" alt="Marzo.digital">
				</picture>
			</div>
		</a>
		<p class="header__location header__location--outer"><?php echo "$city, " ?><strong><?php echo "$location "; ?> </strong> <b></b> <span></span></p>
		<div class="menu">
			<button class="button header__menu header__menu--open">
				<span>Open</span>
				<div class="header__menuIcon">
					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="3" cy="3" r="3" fill="currentColor"/>
						<circle cx="3" cy="13" r="3" fill="currentColor"/>
						<circle cx="13" cy="3" r="3" fill="currentColor"/>
						<circle cx="13" cy="13" r="3" fill="currentColor"/>
					</svg>
				</div>
			</button>
			<div class="menu__body">
				<div class="menu__head">
					<p class="header__location menu__location"><?php echo "$city, " ?><strong><?php echo "$location "; ?> </strong> <b></b> <span></span></p>
					<button class="button header__menu header__menu--close">
						<span>Close</span>
						<div class="header__menuIcon header__menuIcon menu__close">
							<img src="<?php echo IMG_DIR ?>/close-black.svg" width="14" height="14" alt="">
						</div>
					</button>
				</div>
				<nav class="menu__nav nav">
					<div class="nav__main">
						<a href="/" class="nav__link">Home</a>
						<a href="/about/" class="nav__link">About</a>
						<a href="#" class="nav__link">Portfolio</a>
						<a href="/contact/" class="nav__link">Contact</a>
					</div>
					<div class="nav__external">
						<a href="mailto:hello@marzo.digital" class="nav__email nav__extLink">hello@marzo.digital</a>
						<div class="nav__externalBody">
							<a href="<?php echo $links['behance']; ?>" class="nav__extLink">behance</a>
							<a href="<?php echo $links['dribble']; ?>" class="nav__extLink">dribble</a>
							<a href="<?php echo $links['instagram']; ?>" class="nav__extLink">instagram</a>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>