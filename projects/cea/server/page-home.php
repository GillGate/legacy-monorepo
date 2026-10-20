<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="preload" href="<?php echo THEME_ROOT ?>/fonts/OpenSans-Regular.woff2" as="font" crossorigin="anonymous">
	<link rel="preload" href="<?php echo THEME_ROOT ?>/fonts/OpenSans-SemiBold.woff2" as="font" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>
<body>
	<?php 
		$url = $_SERVER['REQUEST_URI'];
		$url = explode('?', $url);
		$url = $url[0];

		$lang = '';

		if(strpos($url, 'cz')) {
			$lang = 'cz';
		} else if (strpos($url, 'ua')) {
			$lang = 'ua';
		} else {
			$lang = 'ru';
		}
	?>
	<div class="popup popup--consultation">
		<div class="popup__wrapper">
			<button class="popup__close"><img src="<?php echo IMG_DIR ?>/close.svg" alt="Закрыть" width="40" height="40"></button>
			<h2 class="popup__title">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Получить <span>бесплатную</span> консультацию";
					        break;
					    case 'ua':
					        echo "Отримати <span>безкоштовну</span> консультацію";
					        break;
					    default:
					       echo "Získejte <span>bezplatnou</span> konzultaci";
					        break;
					}
				?>
			</h2>
			<p class="popup__caption">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Оставьте заявку, и в ближайшее время мы свяжемся с Вами. <span>Наши операторы бесплатно проконсультируют Вас по сбору необходимых документов, вопросам касательно перезда, работы и жизни в Чехии.
				</span>";
					        break;
					    case 'ua':
					        echo "Залиште заявку, і найближчим часом ми зв'яжемося з Вами. <span> Наші оператори безкоштовно проконсультують Вас по збору необхідних документів, питань щодо переїзду, роботи і життя в Чехії.</span>";
					        break;
					    default:
					       echo "Zanechte žádost a brzy naš manažer vás bude kontaktovat. <span>Naši operátoři vám bezplatně poradí se shromažďováním potřebných dokumentů, otázkami týkajícími se stěhování, práce a života v České republice.</span>";
					        break;
					}
				?>
			</p>
			<form class="form popup__form form--cs" data-src="<?php echo THEME_ROOT ?>">
				<label class="form__input" data-error=""><input type="text" name="name" placeholder="<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Имя";
					        break;
					    case 'ua':
					        echo "Ім'я";
					        break;
					    default:
					       echo "Název";
					        break;
					}?>"></label>
				<label class="form__input" data-error=""><input type="tel" name="phone" placeholder="<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Номер телефона";
					        break;
					    case 'ua':
					        echo "Номер телефону";
					        break;
					    default:
					       echo "Číslo telefonu";
					        break;
					}?>"></label>
				<label class="form__input form__input--textarea"><textarea name="message" placeholder="<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Комментарий";
					        break;
					    case 'ua':
					        echo "Коментар";
					        break;
					    default:
					       echo "Komentář";
					        break;
					}?>"></textarea></label>
				<button class="button form__button form__button--cs">
					<?php 
						switch ($lang) {
						    case 'ru':
						        echo "Получить консультацию";
						        break;
						    case 'ua':
						        echo "Отримати консультацію";
						        break;
						    default:
						       echo "Získat poradenství";
						        break;
						}
					?>
				</button>
			</form>
			<div class="form__result form__result--cs"></div>
		</div>
	</div>
	<header class="header header--main">
		<div class="header__wrapper">
			<div class="header__head">
				<a class="header__logo">
					<img src="<?php echo IMG_DIR ?>/logo-white.png" alt="Česká evropská agentura">
				</a>
				<a class="header__logo header__logo--fixed">
					<img src="<?php echo IMG_DIR ?>/logo.png" alt="Česká evropská agentura">
				</a>
				<div class="nav header__nav">
					<div class="nav__bar">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
						<path d="M1.25 16.2241H28.75C29.44 16.2241 30 15.6641 30 14.9741C30 14.2841 29.44 13.7241 28.75 13.7241H1.25C0.559998 13.7241 0 14.2841 0 14.9741C0 15.6641 0.559998 16.2241 1.25 16.2241Z" fill="currentColor"/>
						<path d="M1.25 6.64063H28.75C29.44 6.64063 30 6.08063 30 5.39063C30 4.70062 29.44 4.14062 28.75 4.14062H1.25C0.559998 4.14062 0 4.70062 0 5.39063C0 6.08063 0.559998 6.64063 1.25 6.64063Z" fill="currentColor"/>
						<path d="M1.25 25.8072H28.75C29.44 25.8072 30 25.2472 30 24.5572C30 23.8672 29.44 23.3072 28.75 23.3072H1.25C0.559998 23.3072 0 23.8672 0 24.5572C0 25.2472 0.559998 25.8072 1.25 25.8072Z" fill="currentColor"/>
						</svg>
					</div>
					<div class="nav__openHeader">
						<div class="header__phone">
							<a href="tel:+420775265842">+420 775 265 842</a>
							<span>Viber, WhatsApp, Telegram</span>
						</div>
						<div class="nav__close"><img src="<?php echo IMG_DIR ?>/close.svg" alt="Закрыть" width="40" height="40"></div>
					</div>
					<nav class="nav__body">
						<?php 
							switch ($lang) {
							    case 'ru':
							        echo "
							        	<a class='nav__link' href='#about'>О Нас</a>
										<a class='nav__link' href='#vakancies'>Вакансии</a>
										<a class='nav__link' href='#start'>Как начать?</a>
										<a class='nav__link' href='#faq'>FAQ</a>
										<a class='nav__link' href='#reviews'>Отзывы</a>
										<a class='nav__link' href='#contacts'>Контакты</a>";
							        break;
							    case 'ua':
							         echo "
							        	<a class='nav__link' href='#about'>Про нас</a>
										<a class='nav__link' href='#vakancies'>Вакансії</a>
										<a class='nav__link' href='#start'>Як почати?</a>
										<a class='nav__link' href='#faq'>FAQ</a>
										<a class='nav__link' href='#reviews'>Відгуки</a>
										<a class='nav__link' href='#contacts'>Контакти</a>";
							        break;
							    default:
							        echo "
							        	<a class='nav__link' href='#about'>O nás</a>
										<a class='nav__link' href='#vakancies'>Volná místa</a>
										<a class='nav__link' href='#start'>Jak začít?</a>
										<a class='nav__link' href='#faq'>FAQ</a>
										<a class='nav__link' href='#reviews'>Recenze</a>
										<a class='nav__link' href='#contacts'>Kontakty</a>";
							        break;
							}
						 ?>
					</nav>
				</div>
				<div class="header__lang">
					<a href="/" <?php if($lang==='ru') { echo "class='header__lang--current'";} ?>>RU</a>
					<a href="/ua/" <?php if($lang==='ua') { echo "class='header__lang--current'";} ?>>UA</a>
					<a href="/cz/" <?php if($lang==='cz') { echo "class='header__lang--current'";} ?>>CZ</a>
				</div>
				<div class="header__phone">
					<a href="tel:+420775265842">+420 775 265 842</a>
					<span>Viber, WhatsApp, Telegram</span>
				</div>
			</div>
			<div class="header__body">
				<div class="header__bodyWrapper">
					<h1 class="header__title">
						<?php 
							switch ($lang) {
							    case 'ru':
							        echo "Легальная работа в Чeхии без посредников";
							        break;
							    case 'ua':
							        echo "Легальна робота в Чехії Без посередників";
							        break;
							    default:
							       echo "Legální práce v České republice bez zprostředkovatelů";
							        break;
							}
						 ?>
					</h1>
					<p class="header__text">
						<?php 
							switch ($lang) {
							    case 'ru':
							        echo "Наши операторы бесплатно проконсультируют по сбору необходимых документов, вопросам переезда, а также любым другим вопросам связанным с работой в Чехии.";
							        break;
							    case 'ua':
							        echo "Наші оператори безкоштовно проконсультують зі збору необхідних документів, питань переїзду, а також будь-яких інших питань пов'язаних з роботою в Чехії.";
							        break;
							    default:
							       echo "Naši operátoři poradí se sběrem potřebných dokumentů, problematikou stěhování a dalšími záležitostmi souvisejícími s prací v Česku.";
							        break;
							}
						 ?>
					</p>
					<button class="button header__button getConsultation">
						<?php 
							switch ($lang) {
							    case 'ru':
							        echo "Получить консультацию";
							        break;
							    case 'ua':
							        echo "Отримати консультацію";
							        break;
							    default:
							       echo "Nezávazná konzultace";
							        break;
							}
						 ?>
					</button>
				</div>
			</div>
			<a href="tel:+420775265842" class="header__call fadeRightAnim">
				<img src="<?php echo IMG_DIR ?>/header-call.svg" alt="Call" width="50" height="50">
			</a>
		</div>
	</header>
	<section class="about" id="about">
		<div class="about__wrapper">
			<div class="about__item">
				<div class="about__col">
					<div class="about__info about__info--first fadeLeftAnim">
						<h2 class="about__title">
							<?php 
								switch ($lang) {
								    case 'ru':
								        echo "О Нас<span>.</span>";
								        break;
								    case 'ua':
								        echo "Про нас<span>.</span>";
								        break;
								    default:
								       echo "O nás<span>.</span>";
								        break;
								}
							?>
						</h2>
						<p class="about__text">
							<?php 
								switch ($lang) {
								    case 'ru':
								        echo "ČEA – международная кадровая агентура, которая была основана в Праге в 2016 году, занимающаяся проблемами недостатка рабочей cилы в промышленности и других областях.";
								        break;
								    case 'ua':
								        echo "ČEA - Міжнародна Кадрова агентура, яка була заснована в Празі в 2016 році, що займається проблемами нестачі робочої сили в промисловості та інших областях.";
								        break;
								    default:
								       echo "ČEA - mezinárodní personální agentura, která v roce 2016 byla založena v Praze, zabývala se problematikou nedostatku pracovních sil v průmyslu a dalších oborech.";
								        break;
								}
							?>
						</p>
						<p class="about__text">
							<?php 
								switch ($lang) {
								    case 'ru':
								        echo "Агентура действует по всей территории Чешской Республики, а также, в других государствах ЕС. ";
								        break;
								    case 'ua':
								        echo "Агентура діє по всій території Чеської Республіки, а також, в інших державах ЄС.";
								        break;
								    default:
								       echo "Agentura působí na celém území České republiky i v dalších státech EU.";
								        break;
								}
							?>
						</p>
					</div>
				</div>
				<div class="about__col">
					<div class="about__img fadeRightAnim">
						<img src="<?php echo IMG_DIR ?>/about-1.jpg" alt="" loading="lazy">
					</div>
				</div>
			</div>
			<div class="about__item">
				<div class="about__col">
					<div class="about__info fadeRightAnim">
						<p class="about__text">
							<?php 
								switch ($lang) {
								    case 'ru':
								        echo "Мы являемся обладателем всех необходимых разрешений ГУМТ Чешской Республики, в полном объёме и без ограничений.";
								        break;
								    case 'ua':
								        echo "Ми є володарем всіх необхідних дозволів ГУМТ Чеської Республіки, в повному обсязі і без обмежень.";
								        break;
								    default:
								       echo "Jsme držitelem všech potřebných povolení GUMT České republiky, v plném rozsahu a bez omezení.";
								        break;
								}
							?>
						</p>
						<p class="about__text">
							<?php 
								switch ($lang) {
								    case 'ru':
								        echo "Česká Europská Agentura отвечает всем легислативным требованиям, в первую очередь залог и страхование";
								        break;
								    case 'ua':
								        echo "Česká Europská Agentura відповідає всім легіслативним вимогам, в першу чергу застави і страхування.";
								        break;
								    default:
								       echo "Česká Evropská Agentura splňuje všechny zákonné požadavky, především zástavní právo a pojištění";
								        break;
								}
							?>
						</p>
					</div>
				</div>
				<div class="about__col">
					<div class="about__img fadeLeftAnim">
						<img src="<?php echo IMG_DIR ?>/about-2.jpg" alt="" loading="lazy">
					</div>
				</div>
			</div>
			<div class="about__item about__item--last">
				<div class="about__col">
					<div class="about__info about__info--last fadeLeftAnim">
						<p class="about__text">
							<?php 
								switch ($lang) {
								    case 'ru':
								        echo "В настоящее время ČEA трудоустроила более тысячи работников и долгосрочно сотрудничает с более 60 партнерами.";
								        break;
								    case 'ua':
								        echo "В даний час ČEA працевлаштувала більше тисячі працівників і довгостроково співпрацює з понад 60 партнерами.";
								        break;
								    default:
								       echo "ČEA v současnosti zaměstnává přes tisíc pracovníků a dlouhodobě spolupracuje s více než 60 partnery.";
								        break;
								}
							?>
						</p>
					</div>
				</div>
				<div class="about__col">
					<div class="about__img fadeRightAnim">
						<img src="<?php echo IMG_DIR ?>/about-3.jpg" alt="" loading="lazy">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="founder">
		<div class="container founder__wrapper">
			<div class="founder__person fadeLeftAnim">
				<div class="founder__img">
					<img src="<?php echo IMG_DIR ?>/founder.jpg" alt="Ishtvan Syuch photo" loading="lazy">
				</div>
				<h3 class="founder__name">Ishtvan Syuch</h3>
				<span class="founder__caption">
					<?php 
						switch ($lang) {
						    case 'ru':
						        echo "Основатель";
						        break;
						    case 'ua':
						        echo "Засновник";
						        break;
						    default:
						       echo "Zakladatel";
						        break;
						}
					?>
				</span>
			</div>
			<p class="founder__quote fadeRightAnim">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Мы подбираем для Вас самый оптимальный вариант на основе личных предпочтений о работе и гарантируем абсолютную прозрачность  процесса трудоустройства.";
					        break;
					    case 'ua':
					        echo "Ми підбираємо для Вас найоптимальніший варіант на основі особистих переваг про роботу та гарантуємо абсолютну прозорість процесу працевлаштування.";
					        break;
					    default:
					       echo "Vybíráme pro vás nejoptimálnější možnost na základě osobních preferencí o práci a garantujeme absolutní transparentnost pracovního procesu.";
					        break;
					}
				?>
			</p>
		</div>
	</section>
	<section class="why">
		<div class="container why__container">
			<h2 class="why__title fadeUpAnim">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Почему ČEA<span>.</span>";
					        break;
					    case 'ua':
					        echo "Чому ČEA<span>.</span>";
					        break;
					    default:
					       echo "Proč ČEA<span>.</span>";
					        break;
					}
				?>
			</h2>
			<p class="why__text fadeUpAnim">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Коротко о нас<br>в цифрах";
					        break;
					    case 'ua':
					        echo "Коротко про нас<br>у цифрах";
					        break;
					    default:
					       echo "Krátce o nás<br>v číslech";
					        break;
					}
				?>
			</p>
			<ul class="why__list fadeUpAnim">
				<li class="why__item why__item--middle">
					<p class="why__digit">50+</p>
					<p class="why__caption">
						<?php 
							switch ($lang) {
							    case 'ru':
							        echo "доступных вакансий";
							        break;
							    case 'ua':
							        echo "доступних вакансій";
							        break;
							    default:
							       echo "dostupných pracovních míst";
							        break;
							}
						?>
					</p>
				</li>
				<li class="why__item why__item--large">
					<p class="why__digit">5000+</p>
					<p class="why__caption">
						<?php 
							switch ($lang) {
							    case 'ru':
							        echo "довольных сотрудников";
							        break;
							    case 'ua':
							        echo "задоволених співробітників";
							        break;
							    default:
							       echo "spokojených zaměstnanců";
							        break;
							}
						?>
					</p>
				</li>
				<li class="why__item why__item--small">
					<p class="why__digit">5+</p>
					<p class="why__caption">
						<?php 
							switch ($lang) {
							    case 'ru':
							        echo "лет на рынке";
							        break;
							    case 'ua':
							        echo "років на ринку";
							        break;
							    default:
							       echo "let na trhu";
							        break;
							}
						?>
					</p>
				</li>
			</ul>
			<div class="why__partners fadeUpAnim">
				<div class="why__img">
					<img src="<?php echo IMG_DIR ?>/partners.png" alt="Локация партнёров" loading="lazy">
				</div>
				<div class="why__item why__item--partners">
					<p class="why__digit">60+</p>
					<p class="why__caption">
						<?php 
							switch ($lang) {
							    case 'ru':
							        echo "надежных партнеровпо всей Чехии";
							        break;
							    case 'ua':
							        echo "надійних партнерів по всій Чехії";
							        break;
							    default:
							       echo "spolehlivých partnerů v celé České republice";
							        break;
							}
						?>	
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="advice">
		<div class="container advice__wrapper">
			<button class="button advice__button getConsultation fadeLeftAnim">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Получить консультацию";
					        break;
					    case 'ua':
					        echo "Отримати консультацію";
					        break;
					    default:
					       echo "Získat poradenství";
					        break;
					}
				?>
			</button>
			<div class="advice__info fadeRightAnim">
				<h2 class="advice__title">
					<?php 
						switch ($lang) {
						    case 'ru':
						        echo "Получите бесплатную<br>консультацию уже сегодня";
						        break;
						    case 'ua':
						        echo "Отримайте безкоштовну<br> консультацію вже сьогодні";
						        break;
						    default:
						       echo "Získejte BEZPLATNOU<br> konzultaci dnes";
						        break;
						}
					?>
				</h2>
				<p class="advice__caption">
					<?php 
						switch ($lang) {
						    case 'ru':
						        echo "Оставьте заявку, и в ближайшее время наш менеджер свяжется с вами. ";
						        break;
						    case 'ua':
						        echo "Залиште заявку, і найближчим часом наш менеджер зв'яжеться з вами.";
						        break;
						    default:
						       echo "Zanechte žádost a brzy naš manažer vás bude kontaktovat.";
						        break;
						}
					?>
				</p>
			</div>
		</div>
	</section>
	<section class="vakancy vakancy--main" id="vakancies">
		<div class="container">
			<h2>
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Актуальные Вакансии";
					        break;
					    case 'ua':
					        echo "Актуальні Вакансії";
					        break;
					    default:
					       echo "Aktuální Volná Místa";
					        break;
					}
				?>
			</h2>
			<ul class="vakancy__list vakancy__list--main">
				<?php foreach(getVakancies('actual') as $vakancy) { ?>
					<?php $special = $vakancy['special-conditions']; ?>
					<li class="vakancy__item
						<?php if($special !== '') {
							echo "vakancy__item--special";
						} ?>" 
						data-special=" <?php 
										switch ($lang) {
										    case 'ru':
										        echo "СПЕЦИАЛЬНЫЕ УСЛОВИЯ";
										        break;
										    case 'ua':
										        echo "СПЕЦІАЛЬНІ УМОВИ";
										        break;
										    default:
										       echo "ZVLÁŠTNÍ PODMÍNKY";
										        break;
										}
									?> : <?php echo $special; ?>" 
						data-special-mobile="
							<?php 
								switch ($lang) {
								    case 'ru':
								        echo "СПЕЦИАЛЬНЫЕ УСЛОВИЯ";
								        break;
								    case 'ua':
								        echo "СПЕЦІАЛЬНІ УМОВИ";
								        break;
								    default:
								       echo "ZVLÁŠTNÍ PODMÍNKY";
								        break;
								}
							?> 
						">
						<div class="vakancy__head">
							<div class="vakancy__info">
								<div class="vakancy__img">
									<img src="<?php echo $vakancy['img']; ?>" alt="" loading="lazy">
								</div>
								<div class="vakancy__name">
									<span class="vakancy__location"><?php echo $vakancy['location']; ?></span>
									<h3 class="vakancy__title">
										<?php echo $vakancy['title']; ?>
									</h3>
								</div>
							</div>
							<div class="vakancy__price">
								<?php 
									switch ($lang) {
									    case 'ru':
									        echo "Заработная плата:";
									        break;
									    case 'ua':
									        echo "Заробітна платня:";
									        break;
									    default:
									       echo "Mzda:";
									        break;
									}
								?>
								<span><?php echo $vakancy['salary']; ?></span>
							</div>
						</div>
						<div class="vakancy__desc">
							<?php echo $vakancy['text']; ?>
						</div>
						<div class="vakancy__body">
							<ul class="vakancy__conditions">
								<li><?php echo $vakancy['condition-1']; ?></li>
								<li><?php echo $vakancy['condition-2']; ?></li>
							</ul>
							<p class="vakancy__shifts">
								<?php 
									switch ($lang) {
									    case 'ru':
									        echo "Смены: <br>";
									        break;
									    case 'ua':
									        echo "Зміна: <br>";
									        break;
									    default:
									       echo "Směny: <br>";
									        break;
									}
								?>
								<span class="vakancy__shift"><?php echo $vakancy['shift-1']; ?></span>
								<span class="vakancy__shift"><?php echo $vakancy['shift-2']; ?></span>
							</p>
							<button class="button vakancy__button">
								<span>
									<?php 
										switch ($lang) {
										    case 'ru':
										        echo "Подробнее";
										        break;
										    case 'ua':
										        echo "Дізнатися більше";
										        break;
										    default:
										       echo "Více podrobností";
										        break;
										}
									?>
								</span>
								<span class="vakancy__button--mobile">
									<?php 
										switch ($lang) {
										    case 'ru':
										        echo "Забронировать вакансию";
										        break;
										    case 'ua':
										        echo "Ззабронювати вакансію";
										        break;
										    default:
										       echo "Zarezervujte si volné místo";
										        break;
										}
									?>
								</span>
							</button>
						</div>
						<div class="popup vakancy__popup">
							<div class="popup__wrapper">
								<button class="popup__close"><img src="<?php echo IMG_DIR ?>/close.svg" alt="Закрыть" width="40" height="40"></button>
								<div class="vakancy__head">
									<ul class="vakancy__categoryList">
										<li class="categories">
											<ul>
												<li class="cat-item">
													<a href="<?php echo $vakancy['category-link']; ?>">
														<?php echo $vakancy['category-name']; ?>
													</a>
												</li>
											</ul>
										</li>
									</ul>
									<div class="vakancy__price">
										<?php 
											switch ($lang) {
											    case 'ru':
											        echo "Заработная плата:";
											        break;
											    case 'ua':
											        echo "Заробітна платня:";
											        break;
											    default:
											       echo "Mzda:";
											        break;
											}
										?>
										<span><?php echo $vakancy['salary']; ?></span>
									</div>
								</div>
								<div class="vakancy__info" data-special-popup="
									<?php 
										switch ($lang) {
										    case 'ru':
										        echo "СПЕЦИАЛЬНЫЕ УСЛОВИЯ";
										        break;
										    case 'ua':
										        echo "СПЕЦІАЛЬНІ УМОВИ";
										        break;
										    default:
										       echo "ZVLÁŠTNÍ PODMÍNKY";
										        break;
										}
									?> 
								">
									<div class="vakancy__img">
										<img src="<?php echo $vakancy['img']; ?>" alt="" loading="lazy">
									</div>
									<div class="vakancy__name">
										<span class="vakancy__location"><?php echo $vakancy['location']; ?></span>
										<h3 class="vakancy__title">
											<?php echo $vakancy['title']; ?>
										</h3>
									</div>
								</div>
								<div class="vakancy__desc">
									<?php echo $vakancy['text']; ?>
									<p class="vakancy__desc--special">
										<span>
											<?php 
												switch ($lang) {
												    case 'ru':
												        echo "Специальные условия";
												        break;
												    case 'ua':
												        echo "Спеціальні умови";
												        break;
												    default:
												       echo "Zvláštní podmínky";
												        break;
												}
											?>  :</span> 
											<?php echo $vakancy['special-conditions']; ?>
									</p>
								</div>
								<div class="vakancy__price vakancy__price--mobile">
									<?php 
										switch ($lang) {
										    case 'ru':
										        echo "Заработная плата:";
										        break;
										    case 'ua':
										        echo "Заробітна платня:";
										        break;
										    default:
										       echo "Mzda:";
										        break;
										}
									?>
									<span><?php echo $vakancy['salary']; ?></span>
								</div>
								<div class="vakancy__body">
									<ul class="vakancy__conditions">
										<li><?php echo $vakancy['condition-1']; ?></li>
										<li><?php echo $vakancy['condition-2']; ?></li>
									</ul>
									<p class="vakancy__shifts">
										<?php 
											switch ($lang) {
											    case 'ru':
											        echo "Смены: <br>";
											        break;
											    case 'ua':
											        echo "Зміна: <br>";
											        break;
											    default:
											       echo "Směny: <br>";
											        break;
											}
										?>
										<span class="vakancy__shift"><?php echo $vakancy['shift-1']; ?></span>
										<span class="vakancy__shift"><?php echo $vakancy['shift-2']; ?></span>
									</p>
								</div>
								<div class="vakancy__formWrapper">
									<h3 class="vakancy__formTitle">
										<?php 
											switch ($lang) {
											    case 'ru':
											        echo "Это то, что Вы искали?";
											        break;
											    case 'ua':
											        echo "Це те, що Ви шукали?";
											        break;
											    default:
											       echo "Je to to, co jste hledali?";
											        break;
											}
										?>
									</h3>
									<p class="vakancy__formCaption">
										<?php 
											switch ($lang) {
											    case 'ru':
											        echo "Оставьте заявку, и в ближайшее время наш менеджер свяжется с вами.";
											        break;
											    case 'ua':
											        echo "Залиште заявку, і найближчим часом наш менеджер зв'яжеться з вами.";
											        break;
											    default:
											       echo "Zanechte žádost a brzy naš manažer vás bude kontaktovat.";
											        break;
											}
										?>
									</p>
									<form class="popup__form vakancy__form" data-src="<?php echo THEME_ROOT ?>">
										<input type="hidden" name="vakancy-title" value="<?php echo $vakancy['title']; ?>">
										<label class="form__input" data-error=""><input type="text" name="vakancy-name" placeholder="<?php 
												switch ($lang) {
												    case 'ru':
												        echo "Имя";
												        break;
												    case 'ua':
												        echo "Ім'я";
												        break;
												    default:
												       echo "Název";
												        break;
												}?>"></label>
										<label class="form__input" data-error=""><input type="tel" name="vakancy-phone" placeholder="<?php 
											switch ($lang) {
											    case 'ru':
											        echo "Номер телефона";
											        break;
											    case 'ua':
											        echo "Номер телефону";
											        break;
											    default:
											       echo "Číslo telefonu";
											        break;
											}?>"></label>
										<button class="button form__button form__button--vakancy">
											<?php 
												switch ($lang) {
												    case 'ru':
												        echo "Забронировать вакансию";
												        break;
												    case 'ua':
												        echo "Забронювати вакансію";
												        break;
												    default:
												       echo "Zarezervujte si volné místo";
												        break;
												}
											?>
										</button>
									</form>
									<div class="form__result form__result--vakancy"></div>
								</div>
							</div>
						</div>
					</li>
				<?php } ?>
			</ul>
			<a href="vakancy/" class="button vakancy__more">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Больше вакансий";
					        break;
					    case 'ua':
					        echo "Більше вакансій";
					        break;
					    default:
					       echo "Více volných míst";
					        break;
					}
				?>
			</a>
			<a href="vakancy/" class="all vakancy__all fadeкRightAnim">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Больше вакансий";
					        break;
					    case 'ua':
					        echo "Більше вакансій";
					        break;
					    default:
					       echo "Více volných míst";
					        break;
					}
				?>
			</a>
		</div>
	</section>
	<section class="start" id="start">
		<div class="container">
			<h2 class="fadeUpAnim">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Как начать<span>?</span>";
					        break;
					    case 'ua':
					        echo "Як почати<span>?</span>";
					        break;
					    default:
					       echo "Jak začít<span>?</span>";
					        break;
					}
				?>
			</h2>
			<ol class="start__list fadeUpAnim">
				<li class="start__item start__item--1">
					<h3 class="start__title" data-step="1">
						<?php 
							switch ($lang) {
							    case 'ru':
							        echo "Оставить<br>заявку";
							        break;
							    case 'ua':
							        echo "Залишити<br>заявку";
							        break;
							    default:
							       echo "Nechat<br>žádost";
							        break;
							}
						?>
					</h3>
					<p class="start__text">
						<?php 
							switch ($lang) {
							    case 'ru':
							        echo "На этом этапе мы дадим  Вам консультацию по всем вопросам оформления визы и трудоустройства";
							        break;
							    case 'ua':
							        echo "На цьому етапі ми проконсультуємо Вас з усіх питань оформлення візи та працевлаштування в Чехії.";
							        break;
							    default:
							       echo "V této fázi Vám<br>poradíme ve všech otázkách vyřízení víz a zaměstnání v České republice.";
							        break;
							}
						?>
					</p>
				</li>
				<li class="start__item start__item--2">
					<h3 class="start__title" data-step="2">
						<?php 
							switch ($lang) {
							    case 'ru':
							        echo "Получить<br>визу";
							        break;
							    case 'ua':
							        echo "Отримати<br>візу";
							        break;
							    default:
							       echo "Získejte<br>vízum";
							        break;
							}
						?>
					</h3>
					<p class="start__text">
						<?php 
							switch ($lang) {
							    case 'ru':
							        echo "На этом этапе мы подготовим все необходимые документы для получения Чешской рабочей визы, подберём вакансию и проконсультируем по вопросам переезда.";
							        break;
							    case 'ua':
							        echo "На цьому етапі ми підготуємо всі необхідні документи для отримання чеської робочої візи, підберемо вакансію і проконсультуємо з питань переїзду.";
							        break;
							    default:
							       echo "V této fázi připravíme všechny potřebné dokumenty pro získání českého pracovního víza, vybereme volné místo a poradíme o stěhování.";
							        break;
							}
						?>
					</p>
				</li>
				<li class="start__item start__item--3">
					<h3 class="start__title" data-step="3">
						<?php 
							switch ($lang) {
							    case 'ru':
							        echo "Приступить<br> к работе";
							        break;
							    case 'ua':
							        echo "Приступити<br> до роботи";
							        break;
							    default:
							       echo "Začínáme";
							        break;
							}
						?>
					</h3>
					<p class="start__text">
						<?php 
							switch ($lang) {
							    case 'ru':
							        echo "Вы получили визу и готовы начать работу. На этом этапе - выезд на новое место проживания и встреча с работодателем.";
							        break;
							    case 'ua':
							        echo "Ви отримали візу і готові почати роботу. На цьому етапі-виїзд на нове місце проживання та зустріч з роботодавцем.";
							        break;
							    default:
							       echo "Máte vízum a jste připraveni začít. V této fázi-odjezd na nové místo pobytu a setkání se zaměstnavatelem.";
							        break;
							}
						?>
					</p>
				</li>
			</ol>
		</div>
	</section>
	<section class="quick fadeUpAnim">
		<div class="container">
			<h2 class="quick__title">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Быстрое оформление документов и хорошие условия для работы.";
					        break;
					    case 'ua':
					        echo "Швидке оформлення документів і хороші умови для роботи.";
					        break;
					    default:
					       echo "Rychlé papírování a dobré podmínky pro práci.";
					        break;
					}
				?>
			</h2>
			<div class="quick__text">
				<p>
					<?php 
						switch ($lang) {
						    case 'ru':
						        echo "ČEA предлагает легальную работу в Чехии <span>напрямую от проверенных работодателей</span> по чешской 3-х месячной или 2-х годичной рабочей визе.";
						        break;
						    case 'ua':
						        echo "ČEA пропонує легальну роботу в Чехії <span>безпосередньо від перевірених роботодавців</span> за чеською 3-х місячною або 2-х річною робочою візою.";
						        break;
						    default:
						       echo "ČEA nabízí v Česku <span>legální práci přímo od prověřených zaměstnavatelů</span> na české tříměsíční nebo dvouleté pracovní vízum.";
						        break;
						}
					?>
				</p>
				<p>
					<?php 
						switch ($lang) {
						    case 'ru':
						        echo "Мы устраиваем граждан Украины и других стран СНГ на работу в Чехию <span>по контракту</span> с работодателем с возможностью получить “<span>зеленую карту</span>”.";
						        break;
						    case 'ua':
						        echo "Ми влаштовуємо громадян України та інших країн СНД на роботу в Чехію <span>за контрактом</span> з роботодавцем з можливістю отримати “<span>зелену карту</span>”.";
						        break;
						    default:
						       echo "Zajišťujeme občanům Ukrajiny a dalších zemí SNS práci v Česku <span>na základě smlouvy</span> se zaměstnavatelem s možností získat “<span>zelenou kartu</span>”.";
						        break;
						}
					?>
				</p>
			</div>
		</div>
	</section>
	<section class="garanty">
		<div class="container">
			<h2 class="garanty__title fadeUpAnim">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Мы гарантируем<span>.</span>";
					        break;
					    case 'ua':
					        echo "Ми гарантуємо<span>.</span>";
					        break;
					    default:
					       echo "Garantujeme<span>.</span>";
					        break;
					}
				?>
			</h2>
			<ul class="garanty__list fadeUpAnim">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "<li class='garanty__item'>
									<span>Реальное описание</span> вакансии: ставка нетто <br> (с вычетом налога), стоимость и условия проживания, характер и часы работы. 
								</li>
								<li class='garanty__item garanty__item--circled'>
									<span>Полную поддержку</span> в процессе трудоустройства: от подбора вакансии до подписания трудового договора с работодателем
								</li>
								<li class='garanty__item garanty__item--circled'>
									<span>Консультационное сопровождение</span> и сбор пакета документов для чешской визы.
								</li>
								<li class='garanty__item'>
									<span>Полностью легальную</span> работу за рубежом - мы берем социальную защиту на себя. 
								</li>
								<li class='garanty__item garanty__item--circled'>
									<span>Персонального менеджера,</span> который полностью сопровождает каждого клиента, помогая с рабочими, бытовыми и другими вопросами. 
								</li>";
					        break;
					    case 'ua':
					        echo "
					        	<li class='garanty__item'>
									<span>Реальний опис </span> вакансії: ставка нетто <br>(з вирахуванням податку), вартість і умови проживання, характер і години роботи.
								</li>
								<li class='garanty__item garanty__item--circled'>
									<span>Повну підтримку</span> в процесі працевлаштування: від підбору вакансії до підписання трудового договору з роботодавцем
								</li>
								<li class='garanty__item garanty__item--circled'>
									<span>Консультаційний супровід</span> та збір пакету документів для чеської візи.
								</li>
								<li class='garanty__item'>
									<span>Повністю легальну</span> роботу за кордоном - ми беремо соціальний захист на себе.
								</li>
								<li class='garanty__item garanty__item--circled'>
									<span>Персонального менеджера,</span> який повністю супроводжує кожного клієнта, допомагаючи з робочими, побутовими та іншими питаннями.
								</li>
					        ";
					        break;
					    default:
					       echo "
					        	<li class='garanty__item'>
									<span>Skutečný popis</span> práce: čistá sazba <br> (s odpočtem daně), náklady a podmínky ubytování, charakter a otevírací doba.
								</li>
								<li class='garanty__item garanty__item--circled'>
									<span>Plná podpora</span> v pracovním procesu: od výběru pracovního místa až po podpis pracovní smlouvy se zaměstnavatelem
								</li>
								<li class='garanty__item garanty__item--circled'>
									<span>Poradna a sběr</span> balíku <br>dokumentů pro české vízum.
								</li>
								<li class='garanty__item'>
									<span>Zcela legální</span> práci v zahraničí - bereme na sebe sociální ochranu.
								</li>
								<li class='garanty__item garanty__item--circled'>
									<span>Osobní manažer,</span> který plně doprovází každého klienta, pomáhá s pracovními, domácími a dalšími otázkami.
								</li>
					        ";
					        break;
					}
				?>
			</ul>
		</div>
	</section>
	<section class="advice advice--second">
		<div class="container advice__wrapper">
			<div class="advice__info fadeLeftAnim">
				<h2 class="advice__title">
					<?php 
						switch ($lang) {
						    case 'ru':
						        echo "Необходима помощь  в подборе вакансии?";
						        break;
						    case 'ua':
						        echo "Необхідна допомога в підборі вакансії?";
						        break;
						    default:
						       echo "Potřebujete pomoc <br> při výběru práce?";
						        break;
						}
					?>
				</h2>
				<p class="advice__caption">
					<?php 
						switch ($lang) {
						    case 'ru':
						        echo "Оставьте заявку, и в ближайшее время наш менеджер свяжется с вами. ";
						        break;
						    case 'ua':
						        echo "Залиште заявку, і найближчим часом наш менеджер зв'яжеться з вами.";
						        break;
						    default:
						       echo "Zanechte žádost a náš manažer vás brzy kontaktuje.";
						        break;
						}
					?>
				</p>
			</div>
			<button class="button advice__button getConsultation fadeRightAnim">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Получить консультацию";
					        break;
					    case 'ua':
					        echo "Отримати консультацію";
					        break;
					    default:
					       echo "Získejte poradenství";
					        break;
					}
				?>
			</button>
		</div>
	</section>
	<section class="faq" id="faq">
		<div class="container">
			<h2 class="faq__title fadeUpAnim">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Вопросы <span>&</span> Ответы ";
					        break;
					    case 'ua':
					        echo "Питання<span>&</span> Відповіді ";
					        break;
					    default:
					       echo "Otázky <span>A</span> Odpovědi ";
					        break;
					}
				?>
				
			</h2>
			<ul class="faq__list fadeUpAnim">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "
					        <li class='faq__item'>
								<h3>Сколько времени занимает оформление документов?</h3>
								<p>
									В зависимости от вакансии от 21 до 45 дней.
								</p>
							</li>
							<li class='faq__item'>
								<h3>Как производиться оплата за изготовление документов?</h3>
								<p>
									Оплата производится на карту ПриватБанка, с помощью электронного перевода Western Union, либо при личной встрече с куратором в Вашем городе. Также, существует возможность отправить половину суммы перед началом процесса оформления документов, а остальную часть по их готовности.
								</p>
							</li>
							<li class='faq__item'>
								<h3>Как и когда выплачиваются заработная плата?</h3>
								<p>
									Деньги выплачиваются наличными, каждый месяц с 15 по 20 число за предыдущий месяц. Каждую неделю по потребности выдается аванс 1000-2000 крон. По окончанию работы - полный расчёт
								</p>
							</li>
							<li class='faq__item'>
								<h3>По приезде в Чехию нужно ли проходить карантин?</h3>
								<p>
									Нет. По приезду в Чехию вы обязаны пройти тест на COVID-19 в медицинской лаборатории. По его негативном результате можете приступать к работе. Время ожидания до 24 часов. Оплата взимается с заработной платы 1750 крон.
								</p>
							</li>
							<li class='faq__item'>
								<h3>Какие вакансии вы предоставляете?</h3>
								<p>
									Актуальные вакансии всегда можно найти на нашем сайте. В основном - это логистические центры, автомобильные заводы, типография, колбасный цех, завод по изготовлению полиэтиленовых пакетов.
								</p>
							</li>
							<li class='faq__item'>
								<h3>По приезду нас кто-то встретит?</h3>
								<p>
									Во время процесса изготовления документов за Вами будет закреплен наш менеджер. Непосредственно перед вашим выездом вам предоставят контакт на координатора, который встретит Вас и будет курировать все время вашего пребывания в Чехии.
								</p>
							</li>
							<li class='faq__item'>
								<h3>
									Предоставляется ли жилье на время работы?<br>
									Какая стоимость?
								</h3>
								<p>
									В зависимости от места Вашей работы мы предоставляем проживание бесплатное, либо на некоторых вакансиях взимается денежная сумма в размере от 3000 до 4500 крон.<br>
									Семейные пары имеют возможность проживать вместе.
								</p>
							</li>
							<li class='faq__item'>
								<h3>Какие расходы нас ожидают ежемесячно в Чехии?</h3>
								<p>
									Питание: стоимость продуктов в Чехии не сильно отличается от стоимости продуктов в странах СНГ. В зависимости от ваших потребностей это сумма от 2000-5000 тысяч крон.<br>
									Все остальные затраты это исключительно личное дело каждого человека, но как таковых обязательных затрат не предвидится.
								</p>
							</li>";
					        break;
					    case 'ua':
					        echo "
					        <li class='faq__item'>
								<h3>Як довго виготовляються документи для отримання чеської робочої візи?</h3>
								<p>
									В залежності від вакансії від 21 до 45 днів.
								</p>
							</li>
							<li class='faq__item'>
								<h3>Як проводитися оплата за виготовлення документів?</h3>
								<p>
									Оплата проводитися на карту Приватбанку, за допомогою електронного переказу Western Union, або при особистій зустрічі з куратором у Вашому місті. Також, існує можливість відправити половину суми перед початком процесу оформлення документів, а іншу частину по їх готовності.
								</p>
							</li>
							<li class='faq__item'>
								<h3>Як і коли виплачуються заробітна плата?</h3>
								<p>
									Гроші виплачуються готівкою, кожен місяць з 15 по 20 число за попередній розрахунковий місяць. Щотижня за потребою видається аванс у розмірі 1000-2000 крон. Після закінчення роботи повний розрахунок.
								</p>
							</li>
							<li class='faq__item'>
								<h3>По приїзду в Чехію чи потрібно проходити карантин?</h3>
								<p>
									Ні. По приїзду в Чехію ви зобов'язані пройти тест на COVID-19 в медичній лабораторії. За його негативному результаті можете приступати до роботи. Час очікування до 24 годин. Оплата стягується із заробітної плати 1750 крон.
								</p>
							</li>
							<li class='faq__item'>
								<h3>Які вакансії ви надаєте?</h3>
								<p>
									Актуальні вакансії завжди можна знайти на нашому сайті. В основному-це логістичні центри, автомобільні заводи, друкарня, ковбасний цех, завод з виготовлення поліетиленових пакетів.
								</p>
							</li>
							<li class='faq__item'>
								<h3>По приїзду нас хтось зустріне?</h3>
								<p>
									Під час процесу виготовлення документів за Вами буде закріплений наш менеджер. Безпосередньо перед вашим виїздом вам нададуть контакт на координатора, який зустріне Вас і буде курирувати весь час вашого перебування в Чехії.
								</p>
							</li>
							<li class='faq__item'>
								<h3>
									Чи надається житло на час роботи?<br>
									Яка вартість?
								</h3>
								<p>
									В залежності від місця вашої роботи ми надаємо проживання безкоштовне, або на деяких вакансіях стягується грошова сума в розмірі від 3000 до 4500 крон.<br>
									Сімейні пари мають можливість проживати разом.
								</p>
							</li>
							<li class='faq__item'>
								<h3>Які витрати нас очікують щомісяця в Чехії?</h3>
								<p>
									Харчування: вартість продуктів в Чехії не сильно відрізняється від вартості продуктів в країнах СНД. Залежно від ваших потреб це сума від 2000-5000 тисяч крон.<br>
									Всі інші витрати це виключно особиста справа кожної людини, але як таких обов'язкових витрат не передбачається.
								</p>
							</li>";
					        break;
					    default:
					      echo "
					        <li class='faq__item'>
								<h3>Jak dlouho se vyrábějí dokumenty pro získání českého pracovního víza?</h3>
								<p>
									V závislosti na pracovní pozici 21 až 45 dní.
								</p>
							</li>
							<li class='faq__item'>
								<h3>Jak se dělá platba za výrobu dokumentů?</h3>
								<p>
									Platba se provádí na kartě PrivatBank, pomocí elektronického překladu Western Union, nebo při osobním setkání s kurátorem ve vašem městě. Také existuje možnost poslat polovinu částky před zahájením procesu papírování a zbytek je připraven.
								</p>
							</li>
							<li class='faq__item'>
								<h3>Jak a kdy se vyplácejí mzdy?</h3>
								<p>
									Peníze jsou vypláceny v hotovosti, každý měsíc od 15 do 20 číslo za předchozí běžný měsíc. Každý týden je podle potřeby poskytnuta záloha ve výši 1000-2000 korun. Po dokončení práce kompletní výpočet.
								</p>
							</li>
							<li class='faq__item'>
								<h3>Po příjezdu do Česka by měla proběhnout karanténa?</h3>
								<p>
									Ne. Po příjezdu do Česka musíte absolvovat test COVID-19 v lékařské laboratoři. Podle jeho negativního výsledku můžete začít pracovat. Pohotovostní doba až 24 hodin. Platba je zpoplatněna mzdou 1750 korun.
								</p>
							</li>
							<li class='faq__item'>
								<h3>Jaká volná místa poskytujete?</h3>
								<p>
									Aktuální volná místa lze vždy nalézt na našich webových stránkách. Většinou se jedná o logistická centra, automobilové závody, typografii, uzenářství, továrnu na výrobu igelitových tašek.
								</p>
							</li>
							<li class='faq__item'>
								<h3>Po příjezdu nás někdo přivítá?</h3>
								<p>
									Během procesu výroby dokumentů bude náš manažer zajištěn za Vámi. Těsně před odjezdem vám bude poskytnut kontakt na koordinátora, který se s vámi setká a bude dohlížet po celou dobu Vašeho pobytu v Česku.
								</p>
							</li>
							<li class='faq__item'>
								<h3>
									Je bydlení poskytováno po dobu práce?<br>
									Jaké jsou náklady?
								</h3>
								<p>
									V závislosti na místě vaší práce poskytujeme ubytování zdarma, nebo na některých volných pracovních místech je účtována peněžitá částka ve výši 3000 až 4500 korun.<br>
									Rodinné páry mají možnost žít společně.
								</p>
							</li>
							<li class='faq__item'>
								<h3>Jaké výdaje nás v Česku měsíčně čekají?</h3>
								<p>
									Potraviny: cena potravin v Česku se příliš neliší od ceny potravin v zemích SNS. Podle vašich potřeb je to částka od 2000 do 5000 tisíc korun.<br?
									Všechny ostatní náklady jsou výhradně osobní záležitostí každého jednotlivce, ale jako takové se neočekávají povinné náklady.
								</p>
							</li>";
					        break;
					}
				?>
			</ul>
		</div>
	</section>
	<section class="review" id="reviews">
		<div class="container">
			<h2 class="review__title fadeUpAnim">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Отзывы наших клиентов";
					        break;
					    case 'ua':
					        echo "Відгуки наших клієнтів";
					        break;
					    default:
					       echo "Zpětná vazba od našich zákazníků";
					        break;
					}
				?>
			</h2>
			<ul class="review__list fadeUpAnim">
				<?php foreach(getReviews() as $review) { ?>
				<li class="review__item">
					<img src="<?php echo $review['img']; ?>" alt="<?php echo $review['name']; ?>" loading="lazy">
					<div class="review__body">
						<a href="<?php echo $review['link']; ?>" target="_blank" rel="noopener" class="review__play"></a>
						<div class="review__info">
							<h3 class="review__name"><?php echo $review['name']; ?></h3>
							<span class="review__caption"><?php echo $review['text']; ?></span>
						</div>
					</div>
				</li>
				<?php } ?>
			</ul>
			<a href="https://youtube.com/channel/UCPj79QgfvWpNv7UrSpJLRIw" target="_blank" rel="noopener" class="all review__all fadeRightAnim">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Смотреть все отзывы";
					        break;
					    case 'ua':
					        echo "Дивитися всі відгуки";
					        break;
					    default:
					       echo "Zobrazit všechny recenze";
					        break;
					}
				?>
			</a>
		</div>
	</section>
	<section class="partner">
		<div class="container">
			<div class="partner__list fadeUpAnim">
				<?php foreach(getPartners() as $partner) { ?>
				<div class="partner__item">
					<div><img src="<?php echo $partner['img'] ?>" alt="<?php echo $partner['name'] ?>"></div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<section class="contact fadeUpAnim" id="contacts">
		<div class="address">
			<h2 class="visually-hidden">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Конктакты";
					        break;
					    case 'ua':
					        echo "Конктакти";
					        break;
					    default:
					       echo "Kontakty";
					        break;
					}
				?>
			</h2>
			<div class="address__wrapper">
				<div class="address__header">
					<div class="address__img">
						<img src="<?php echo IMG_DIR ?>/logo.png" alt="">
					</div>
					<div class="address__headerInfo">
						<h3 class="address__title">Česko Evropská Agentura s.r.o.</h3>
						<p class="address__info">
							IČO: 05226511<br>
							DIČ: CZ05226511
						</p>
					</div>
				</div>
				<ul class="address__list">
					<li class="address__item address__item--location">
						<h3 class="address__title">
							<?php 
								switch ($lang) {
								    case 'ru':
								        echo "Адрес";
								        break;
								    case 'ua':
								        echo "Адреса";
								        break;
								    default:
								       echo "Adresa";
								        break;
								}
							?>
						</h3>
						<div class="address__info">
							<address>
								Politických vězňů 1272/21 <br>
								110 00 Praha 1
							</address>
						</div>
					</li>
					<li class="address__item address__item--phone">
						<h3 class="address__title">
							<?php 
								switch ($lang) {
								    case 'ru':
								        echo "Телефон";
								        break;
								    case 'ua':
								        echo "Телефон";
								        break;
								    default:
								       echo "Telefon";
								        break;
								}
							?>
						</h3>
						<div class="address__info">
							<a href="tel:+420775265842">+420 775 265 842</a>
						</div>
					</li>
				</ul>
				<div class="address__footer">
					<div class="address__social">
						<h3 class="address__title">
							<?php 
								switch ($lang) {
								    case 'ru':
								        echo "Свяжитесь<br>с нами!";
								        break;
								    case 'ua':
								        echo "Зв'яжіться<br>з нами!";
								        break;
								    default:
								       echo "Kontaktujte<br>nás!";
								       break;
								}
							?>
						</h3>
						<div class="address__socialWrapper">
							<a href="#"><img src="<?php echo IMG_DIR ?>/social-whatsapp.svg" alt="" width="31" height="31" loading="lazy"></a>
							<a href="#"><img src="<?php echo IMG_DIR ?>/social-tg.svg" alt="" width="31" height="31" loading="lazy"></a>
							<a href="#"><img src="<?php echo IMG_DIR ?>/social-viber.svg" alt="" width="31" height="31" loading="lazy"></a>
						</div>
					</div>
					<div class="address__mediaWrapper">
						<a href="https://www.facebook.com/pages/category/Product-Service/%C4%8Cesko-Evropsk%C3%A1-agentura-815175385535172/" target="_blank" rel="noopener" class="address__media address__media--fb">Facebook</a>
						<a href="https://youtube.com/channel/UCPj79QgfvWpNv7UrSpJLRIw" target="_blank" rel="noopener" class="address__media address__media--yt">YouTube</a>
						<a href="https://www.instagram.com/cea.brigady/" target="_blank" rel="noopener" class="address__media address__media--inst">Instagram</a>
					</div>
				</div>
			</div>
		</div>
		<div class="contact__wrapper fadeUpAnim">
			<h2 class="contact__title">
			<?php 
				switch ($lang) {
				    case 'ru':
				        echo "Получить консультацию";
				        break;
				    case 'ua':
				        echo "Отримати консультацію";
				        break;
				    default:
				       echo "Získat poradenství";
				        break;
				}
			?>
			</h2>
			<p class="contact__caption">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Оставьте заявку, и в ближайшее время наш менеджер свяжется с вами. ";
					        break;
					    case 'ua':
					        echo "Залиште заявку, і найближчим часом наш менеджер зв'яжеться з вами.";
					        break;
					    default:
					       echo "Zanechte žádost a brzy naš manažer vás bude kontaktovat.";
					        break;
					}
				?>
			</p>
			<form class="contact__form form" data-src="<?php echo THEME_ROOT ?>">
				<label class="form__input" data-error=""><input type="text" name="name-footer" placeholder="<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Имя";
					        break;
					    case 'ua':
					        echo "Ім'я";
					        break;
					    default:
					       echo "Název";
					        break;
					}?>"></label>
				<label class="form__input" data-error=""><input type="tel" name="phone-footer" placeholder="<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Номер телефона";
					        break;
					    case 'ua':
					        echo "Номер телефону";
					        break;
					    default:
					       echo "Číslo telefonu";
					        break;
					}?>"></label>
				<label class="form__input"><textarea  name="message-footer" placeholder="<?php 
					switch ($lang) {
					    case 'ru':
					        echo "Комментарий";
					        break;
					    case 'ua':
					        echo "Коментар";
					        break;
					    default:
					       echo "Komentář";
					        break;
					}?>"></textarea></label>
				<button class="button form__button form__button--cs-2">
					<?php 
						switch ($lang) {
						    case 'ru':
						        echo "Получить консультацию";
						        break;
						    case 'ua':
						        echo "Отримати консультацію";
						        break;
						    default:
						       echo "Získat poradenství";
						        break;
						}
					?>
				</button>
			</form>
			<div class="form__result form__result--footer"></div>
		</div>
	</section>
	<footer class="footer">
		<div class="container footer__wrapper">
			<div class="footer__nav">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "
						        <a>Главная</a>
								<a class='footer__link' href='#about'>О Нас</a>
								<a class='footer__link' href='#vakancies'>Вакансии</a>
								<a class='footer__link' href='#start'>Как начать?</a>
								<a class='footer__link' href='#faq'>FAQ</a>
								<a class='footer__link' href='#reviews'>Отзывы</a>";
					        break;
					    case 'ua':
					         echo "
					         	<a>Головна</a>
					        	<a class='footer__link' href='#about'>Про нас</a>
								<a class='footer__link' href='#vakancies'>Вакансії</a>
								<a class='footer__link' href='#start'>Як почати?</a>
								<a class='footer__link' href='#faq'>FAQ</a>
								<a class='footer__link' href='#reviews'>Відгуки</a>";
					        break;
					    default:
					        echo "
					        	<a>Domov</a>
					        	<a class='footer__link' href='#about'>O nás</a>
								<a class='footer__link' href='#vakancies'>Volná místa</a>
								<a class='footer__link' href='#start'>Jak začít?</a>
								<a class='footer__link' href='#faq'>FAQ</a>
								<a class='footer__link' href='#reviews'>Recenze</a>";
					        break;
					}
				 ?>
			</div>
			<p class="footer__text">
				<?php 
					switch ($lang) {
					    case 'ru':
					        echo "© Copyright 2021. Все права защищены.";
					        break;
					    case 'ua':
					        echo "© Copyright 2021. Всі права захищені.";
					        break;
					    default:
					       echo "© Copyright 2021. Všechna práva jsou chráněna.";
					        break;
					}
				?>
			</p>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>