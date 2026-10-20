<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="preload" href="/fonts/OpenSans-Regular.woff2" as="font" crossorigin="anonymous">
	<link rel="preload" href="/fonts/OpenSans-SemiBold.woff2" as="font" crossorigin="anonymous">
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
	<header class="header header--vakancy">
		<div class="header__slider" data-src="<?php echo IMG_DIR ?>"></div>
		<div class="header__wrapper">
			<div class="header__head">
				<a href="<?php 
					if($lang==='cz') {
						echo '/cz/';
					} else if($lang==='ua') {
						echo '/ua/';
					} else {
						echo '/';
					}
				?>" class="header__logo">
					<img src="<?php echo IMG_DIR ?>/logo-white.png" alt="Česká evropská agentura">
				</a>
				<a  href="<?php 
					if($lang==='cz') {
						echo '/cz/';
					} else if($lang==='ua') {
						echo '/ua/';
					} else {
						echo '/';
					}
				?>" class="header__logo header__logo--fixed">
					<img src="<?php echo IMG_DIR ?>/logo.png" alt="Česká evropská agentura">
				</a>
				<div class="nav header__nav">
					<div class="nav__bar"><img src="<?php echo IMG_DIR ?>/nav-bar.svg" alt="Open menu" width="30" height="30"></div>
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
							        	<a class='nav__link' href='/#about'>О Нас</a>
										<a class='nav__link' href='/vakancy'>Вакансии</a>
										<a class='nav__link' href='/#start'>Как начать?</a>
										<a class='nav__link' href='/#faq'>FAQ</a>
										<a class='nav__link' href='/#reviews'>Отзывы</a>
										<a class='nav__link' href='#contacts'>Контакты</a>";
							        break;
							    case 'ua':
							         echo "
							        	<a class='nav__link' href='/ua/#about'>Про нас</a>
										<a class='nav__link' href='/ua/vakancy'>Вакансії</a>
										<a class='nav__link' href='/ua/#start'>Як почати?</a>
										<a class='nav__link' href='/ua/#faq'>FAQ</a>
										<a class='nav__link' href='/ua/#reviews'>Відгуки</a>
										<a class='nav__link' href='#contacts'>Контакти</a>";
							        break;
							    default:
							        echo "
							        	<a class='nav__link' href='/cz/#about'>O nás</a>
										<a class='nav__link' href='/cz/vakancy'>Volná místa</a>
										<a class='nav__link' href='/cz/#start'>Jak začít?</a>
										<a class='nav__link' href='/cz/#faq'>FAQ</a>
										<a class='nav__link' href='/cz/#reviews'>Recenze</a>
										<a class='nav__link' href='#contacts'>Kontakty</a>";
							        break;
							}
						 ?>
					</nav>
				</div>
				<div class="header__lang">
					<a href="/vakancy/" <?php if($lang==='ru') { echo "class='header__lang--current'";} ?>>RU</a>
					<a href="/ua/vakancy/" <?php if($lang==='ua') { echo "class='header__lang--current'";} ?>>UA</a>
					<a href="/cz/vakancy/" <?php if($lang==='cz') { echo "class='header__lang--current'";} ?>>CZ</a>
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
							        echo "Вакансии в Чехии";
							        break;
							    case 'ua':
							        echo "Вакансії в Чехії";
							        break;
							    default:
							       echo "Pracovní místa v České republice";
							        break;
							}
						?>
					</h1>
				</div>
			</div>
		</div>
		<a href="tel:+420775265842" class="header__call">
			<img src="<?php echo IMG_DIR ?>/header-call.svg" alt="Call" width="50" height="50">
		</a>
	</header>
	<section class="vakancy" id="vakancies">
		<div class="container">
			<ul class="vakancy__categoryList vakancy__categoryList--all"
				data-lang="<?php 
					echo $lang;
				?>"
				data-status="<?php 
					if(preg_match("/vakancy\/$/", $url)) {
							echo "all";
						} else {
							echo "single";
						}
				?>"
				data-catLang="<?php 
					switch ($lang) {
					    case 'ru':
					        echo "По категориям:";
					        break;
					    case 'ua':
					        echo "За категоріями:";
					        break;
					    default:
					       echo "Podle kategorie:";
					       break;
					}
				?>">
				<?php wp_list_categories( array(
					'show_option_none'   => __('No categories'),
					'orderby'            => 'name',
					'order'              => 'ASC',
					'title_li'           => __( ' ' ),
					'taxonomy'           => 'category',
					'separator'          => '<br />',
				) ); ?>
			</ul>
			<!-- <p class="vakancy__total">
				<span>12</span> вакансий
			</p> -->
			<ul class="vakancy__list">
				<?php
					$current_category = explode('/', $url);
					$current_category = array_slice($current_category, -2, 1)[0];
				?>
				<?php foreach(getVakancies('all') as $vakancy) { ?>
					<?php if($current_category == $vakancy['category-slug']) { ?>
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
				<?php } ?>
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
	<section class="partner">
		<div class="container">
			<div class="partner__list">
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
						        <a href='/'>Главная</a>
								<a class='footer__link' href='/#about'>О Нас</a>
								<a class='footer__link' href='/#vakancies'>Вакансии</a>
								<a class='footer__link' href='/#start'>Как начать?</a>
								<a class='footer__link' href='/#faq'>FAQ</a>
								<a class='footer__link' href='/#reviews'>Отзывы</a>";
					        break;
					    case 'ua':
					         echo "
					         	<a href='/ua/'>Головна</a>
					        	<a class='footer__link' href='/ua/#about'>Про нас</a>
								<a class='footer__link' href='/ua/#vakancies'>Вакансії</a>
								<a class='footer__link' href='/ua/#start'>Як почати?</a>
								<a class='footer__link' href='/ua/#faq'>FAQ</a>
								<a class='footer__link' href='/ua/#reviews'>Відгуки</a>";
					        break;
					    default:
					        echo "
					        	<a href='/cz/'>Domov</a>
					        	<a class='footer__link' href='/cz/#about'>O nás</a>
								<a class='footer__link' href='/cz/#vakancies'>Volná místa</a>
								<a class='footer__link' href='/cz/#start'>Jak začít?</a>
								<a class='footer__link' href='/cz/#faq'>FAQ</a>
								<a class='footer__link' href='/cz/#reviews'>Recenze</a>";
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