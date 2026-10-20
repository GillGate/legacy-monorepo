<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<meta name="desciption" content="<?php bloginfo('description'); ?>">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
</head>
<body>
	<?php 
		$url = $_SERVER['REQUEST_URI'];
		$url = explode('?', $url);
		$url = $url[0];

		$lang = '';

		if(strpos($url, 'ua')) {
			$lang = 'ua';
		} else if (strpos($url, 'cz')) {
			$lang = 'cz';
		} else if (strpos($url, 'en')) {
			$lang = 'en';
		} else {
			$lang = 'ru';
		}

		$context_lang = $lang === 'ru' ? "" : "/$lang";
	?>
	<header class="header">
		<div class="container">
			<div class="header__mobile">
				<a href="<?php echo $context_lang; ?>/" class="header__logo">
					<img src="<?php echo IMG_DIR ?>/logo.svg" alt="">
				</a>
				<button class="header__bar"><span></span></button>
			</div>
			<div class="header__main">
				<button class="header__close">
					<img src="<?php echo IMG_DIR ?>/icon-close.svg" alt="х">
				</button>
				<a href="<?php echo $context_lang; ?>/" class="header__logo header__logo--open">
					<img src="<?php echo IMG_DIR ?>/logo.svg" alt="">
				</a>
				<div class="header__top">
					<a href="<?php echo $context_lang; ?>/" class="header__logo header__logo--default">
						<img src="<?php echo IMG_DIR ?>/logo.svg" alt="">
					</a>
					<?php $lang_options = ['ru', 'ua', 'en', 'cz']; ?>
					<div class="header__lang">
						<span><?php echo strtoupper($lang) ?></span>
						<div class="header__langOptions">
							<?php foreach($lang_options as $option) { ?>
								<?php if($option !== $lang) {  ?>
									<?php if($option === 'ru') { ?>
										<a href="<?php echo "/"; ?>"><?php echo strtoupper($option); ?></a>
									<?php } else { ?>
										<a href="<?php echo "/$option/"; ?>"><?php echo strtoupper($option); ?></a>
									<?php } ?>
								<?php } ?>
							<?php } ?>
						</div>
					</div>
					<div class="header__social">
						<p class="header__socialCaption">
							<?php 
								switch ($lang) {
								    case 'ua':
								        echo "Зв'яжіться з нами!";
								        break;
								    case 'en':
								        echo "Contact us!";
								        break;
								    case 'cz':
								        echo "Kontaktujte nás!";
								        break;
								    default:
								       echo "Свяжитесь с нами!";
								        break;
								}
							?>
						</p>
						<div class="header__socialList">
							<a href="#" class="header__socialItem">
								<img src="<?php echo IMG_DIR ?>/social-viber.svg" alt="">
							</a>
							<a href="#" class="header__socialItem">
								<img src="<?php echo IMG_DIR ?>/social-wa.svg" alt="">
							</a>
							<a href="#" class="header__socialItem">
								<img src="<?php echo IMG_DIR ?>/social-tg.svg" alt="">
							</a>
						</div>
					</div>
				</div>
				<?php 
					$menu = ['О нас', 'Вакансии', 'Как начать', 'Вопросы и ответы', 'Отзывы', 'Форма оплаты', 'Лицензии', 'Контакты'];

				    if($lang === 'ua') {
				    	$menu = ['Про нас', 'Вакансії', 'Як почати', 'Питання та відповіді', 'Відкликання', 'Форма оплати', 'Ліцензія', 'Контакт'];
				    }
				    else if($lang === 'en') {
				    	$menu = ['About', 'Vakancies', 'How to start', 'FAQ', 'Reviews', 'Payment form', 'Documents', 'Contacts'];
				    }
				    else if($lang === 'cz'){
				    	$menu = ['O nás', 'Volné místo', 'Jak začít', 'Otázky a odpovědi', 'Reference', 'Forma platby', 'Dokumenty', 'Kontakty'];
				    }
		        ?>
				<?php if(is_front_page()) { ?>
					<nav class="header__nav nav">
						<a href="#about" class="nav__link scrollTo"><?php echo $menu[0]; ?></a>
						<a href="<?php echo $context_lang; ?>/vakancy/" class="nav__link"><?php echo $menu[1]; ?></a>
						<a href="#how" class="nav__link scrollTo"><?php echo $menu[2]; ?></a>
						<a href="#faq" class="nav__link scrollTo"><?php echo $menu[3]; ?></a>
						<a href="#reviews" class="nav__link scrollTo"><?php echo $menu[4]; ?></a>
						<a href="#visa" class="nav__link scrollTo"><?php echo $menu[5]; ?></a>
						<a href="#documents" class="nav__link scrollTo"><?php echo $menu[6]; ?></a>
						<a href="#contact" class="nav__link scrollTo"><?php echo $menu[7]; ?></a>
					</nav>
				<?php } else { ?>
					<nav class="header__nav nav">
						<a href="<?php echo $context_lang; ?>/#about" class="nav__link"><?php echo $menu[0]; ?></a>
						<a href="<?php echo $context_lang; ?>/vakancy/" class="nav__link"><?php echo $menu[1]; ?></a>
						<a href="<?php echo $context_lang; ?>/#how" class="nav__link"><?php echo $menu[2]; ?></a>
						<a href="<?php echo $context_lang; ?>/#faq" class="nav__link"><?php echo $menu[3]; ?></a>
						<a href="<?php echo $context_lang; ?>/#reviews" class="nav__link"><?php echo $menu[4]; ?></a>
						<a href="<?php echo $context_lang; ?>/#visa" class="nav__link"><?php echo $menu[5]; ?></a>
						<a href="<?php echo $context_lang; ?>/#documents" class="nav__link"><?php echo $menu[6]; ?></a>
						<a href="<?php echo $context_lang; ?>/#contact" class="nav__link"><?php echo $menu[7]; ?></a>
					</nav>
				<?php } ?>
			</div>	
		</div>
	</header>