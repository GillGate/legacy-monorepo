<?php get_header(); ?>
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
?>
	<section class="intro">
		<div class="container">
			<div class="intro__body">
				<h1 class="title title--h1 intro__title">
					<?php 
						switch ($lang) {
						    case 'ua':
						        echo "Легальна робота в Чехії";
						        break;
						    case 'en':
						        echo "Legal work in the Czech Republic";
						        break;
						    case 'cz':
						        echo "Legální práce v Česku";
						        break;
						    default:
						       echo "Легальная работа в Чехии";
						        break;
						}
					?>
				</h1>
				<p class="intro__caption">
					<?php 
						switch ($lang) {
						    case 'ua':
						        echo "Ми намагаємося знайти підходящу роботу, на підставі відповідної спеціальності, освіти і досвіду роботи наших працівників.";
						        break;
						    case 'en':
						        echo "We try to find a suitable job based on the relevant specialty, education and work experience of our employees.";
						        break;
						    case 'cz':
						        echo "Snažíme se najít vhodnou práci na základě příslušné specializace, vzdělání a zkušeností našich pracovníků.";
						        break;
						    default:
						       echo "Мы стараемся найти подходящую работу, на основании соответствующей специальности, образования и опыта работы наших работников.";
						        break;
						}
					?>
				</p>
				<a href="#vakancy" class="button scrollTo intro__button">
					<?php 
						switch ($lang) {
						    case 'ua':
						        echo "Підібрати вакансію";
						        break;
						    case 'en':
						        echo "Find a vacancy";
						        break;
						    case 'cz':
						        echo "Najít volné místo";
						        break;
						    default:
						       echo "Подобрать вакансию";
						        break;
						}
					?>
				</a>
			</div>
		</div>
	</section>
	<section class="vakancies" id="vakancy">
		<div class="container">
			<h2 class="title title--h2 vakancies__title">
				<?php 
					switch ($lang) {
					    case 'ua':
					        echo "Актуальні вакансії";
					        break;
					    case 'en':
					        echo "Current vacancies";
					        break;
					    case 'cz':
					        echo "Aktuální pracovní pozice";
					        break;
					    default:
					       echo "Актуальные вакансии";
					        break;
					}
				?>
			</h2>
			<div class="vakancies__list">
				<?php foreach(getVakancies('actual') as $vakancy) { ?>
					<article class="vakancies__item vakancy" data-name="<?php echo $vakancy['title']; ?>">
						<div class="vakancy__header" style="background-image: url(<?php echo $vakancy['img']; ?>);">
							<h3 class="title title--h3 vakancy__title"><?php echo $vakancy['title']; ?></h3>
						</div>
						<div class="vakancy__body">
							<div class="vakancy__bodyTop">
								<p class="vakancy__salary">
									<span>
										<?php 
											switch ($lang) {
											    case 'ua':
											        echo "Заробітна платня:";
											        break;
											    case 'en':
											        echo "Sallary:";
											        break;
											    case 'cz':
											        echo "Mzda:";
											        break;
											    default:
											       echo "Заработная плата:";
											        break;
											}
										?>
									</span>
									<strong><?php echo $vakancy['salary']; ?></strong> 
									<?php 
										switch ($lang) {
										    case 'ua':
										        echo "Kč / год";
										        break;
										    case 'en':
										        echo "Kč / hour";
										        break;
										    case 'cz':
										        echo "Kč / hod";
										        break;
										    default:
										       echo "Kč / час";
										        break;
										}
									?>
								</p>
								<button class="button vakancy__more">
									<span>
										<?php 
											switch ($lang) {
											    case 'ua':
											        echo "Докладно";
											        break;
											    case 'en':
											        echo "Show";
											        break;
											    case 'cz':
											        echo "Více podrobností";
											        break;
											    default:
											       echo "Подробнее";
											        break;
											}
										?>
									</span>
									<span>
										<?php 
											switch ($lang) {
											    case 'ua':
											        echo "Згорнути";
											        break;
											    case 'en':
											        echo "Hide";
											        break;
											    case 'cz':
											        echo "Sbalit";
											        break;
											    default:
											       echo "Свернуть";
											        break;
											}
										?>
									</span>
								</button>
							</div>
							<div class="vakancy__details">
								<span class="vakancy__location"><?php echo $vakancy['location']; ?></span>
								<ul class="vakancy__conditions">
									<?php foreach($vakancy['conditions'] as $condition) { ?>
										<li><?php echo get_term($condition)->name; ?></li>
									<?php } ?>
								</ul>
								<div class="vakancy__description">
									<?php echo wpautop($vakancy['text']); ?>
								</div>
								<button class="button vakancy__reserve">
									<?php 
										switch ($lang) {
										    case 'ua':
										        echo "Забронювати вакансію";
										        break;
										    case 'en':
										        echo "Book a vacancy";
										        break;
										    case 'cz':
										        echo "Rezervovat volné místo";
										        break;
										    default:
										       echo "Забронировать вакансию";
										        break;
										}
									?>
								</button>
							</div>
						</div>
					</article>
				<?php } ?>
			</div>
			<div class="vakancies__more">
				<a href="vakancy/" class="button">
					<?php 
						switch ($lang) {
						    case 'ua':
						        echo "Показати більше";
						        break;
						    case 'en':
						        echo "View more";
						        break;
						    case 'cz':
						        echo "Zobrazit více";
						        break;
						    default:
						       echo "Показать больше";
						        break;
						}
					?>
				</a>
			</div>
		</div>
	</section>
	<section class="about" id="about">
		<div class="container">
			<div class="about__info">
				<h2 class="title title--h2 about__title">
					<?php 
						switch ($lang) {
						    case 'ua':
						        echo "Про нас";
						        break;
						    case 'en':
						        echo "About";
						        break;
						    case 'cz':
						        echo "O nás";
						        break;
						    default:
						       echo "О нас";
						        break;
						}
					?>
				</h2>
				<div class="about__caption">
					<p>
						<?php 
							switch ($lang) {
							    case 'ua':
							        echo "Ми є акредитованим агентством з працевлаштування Міністерства праці та соціальних справ Чеської Республіки.";
							        break;
							    case 'en':
							        echo "We are an accredited employment agency of the Ministry of Labor and Social Affairs of the Czech Republic.";
							        break;
							    case 'cz':
							        echo "Jsme akreditovanou agenturou práce ministerstva práce a sociálních věcí České republiky.";
							        break;
							    default:
							       echo "Мы являемся аккредитованным агентством по трудоустройству Министерства труда и социальных дел Чешской Республики.";
							        break;
							}
						?>
					</p>
				</div>
				<ul class="about__advantages">
					<li class="about__advantage"><strong>20+</strong><br>
						<?php 
							switch ($lang) {
							    case 'ua':
							        echo "років досвіду";
							        break;
							    case 'en':
							        echo "years of experience";
							        break;
							    case 'cz':
							        echo "roky zkušeností";
							        break;
							    default:
							       echo "лет опыта";
							        break;
							}
						?>
					</li>
					<li class="about__advantage"><strong>30+</strong><br>
						<?php 
							switch ($lang) {
							    case 'ua':
							        echo "компаній співпрацюють з нами";
							        break;
							    case 'en':
							        echo "companies cooperate with us";
							        break;
							    case 'cz':
							        echo "firmy s námi spolupracují";
							        break;
							    default:
							       echo "компаний сотрудничают с нами";
							        break;
							}
						?>
					</li>
					<li class="about__advantage"><strong>86%</strong><br>
						<?php 
							switch ($lang) {
							    case 'ua':
							        echo "працевлаштованих";
							        break;
							    case 'en':
							        echo "employed";
							        break;
							    case 'cz':
							        echo "zaměstnaný";
							        break;
							    default:
							       echo "трудоустроенных";
							        break;
							}
						?>
					</li>
				</ul>
			</div>
			<div class="about__pic">
				<img src="<?php echo IMG_DIR ?>/about-img.jpg" alt="">
			</div>
		</div>
	</section>
	<section class="why" id="why">
		<div class="container">
			<h2 class="title title--h2 why__title">
				<?php 
					switch ($lang) {
					    case 'ua':
					        echo "Чому люди з нами охоче працюють?";
					        break;
					    case 'en':
					        echo "Why are people willing to work with us?";
					        break;
					    case 'cz':
					        echo "Proč s námi lidé ochotně pracují?";
					        break;
					    default:
					       echo "Почему люди с нами охотно работают?";
					        break;
					}
				?>
			</h2>
			<div class="why__list">
				<?php foreach(getAdvantages() as $advantage) { ?>
					<div class="why__item">
						<div class="why__img">
							<img src="<?php echo $advantage['img']; ?>" alt="" loading="lazy">
						</div>
						<h3 class="why__itemTitle"><?php echo $advantage['title']; ?></h3>
						<div class="why__text">
							<?php echo wpautop($advantage['text']); ?>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="dots why__nav"></div>
			<div class="why__controls">
				<button class="why__control why__control--prev">
					<img src="<?php echo IMG_DIR ?>/btn-arrow-left.svg" alt="Назад">
				</button>
				<button class="why__control why__control--next">
					<img src="<?php echo IMG_DIR ?>/btn-arrow-left.svg" alt="Вперёд">
				</button>
			</div>
		</div>
	</section>
	<section class="documents" id="documents">
		<div class="container">
			<h2 class="title title--h2 documents__title">
				<?php 
					switch ($lang) {
					    case 'ua':
					        echo "Наші документи";
					        break;
					    case 'en':
					        echo "Our documents";
					        break;
					    case 'cz':
					        echo "Naše dokumenty";
					        break;
					    default:
					       echo "Наши документы";
					        break;
					}
				?>
			</h2>
			<p class="caption">
				<?php 
					switch ($lang) {
					    case 'ua':
					        echo "Наша компанія отримала дозвіл на посередництво з працевлаштування працівників агентства як з країн ЄС, так і зі Східної Європи. Ми здійснюємо свою діяльність на підставі дозволу Міністерства праці та соціальних справ Чеської Республіки.";
					        break;
					    case 'en':
					        echo "Our company has received permission to mediate the employment of agency employees from both the EU and Eastern Europe. We carry out our activities on the basis of a permit from the Ministry of Labor and social affairs of the Czech Republic.";
					        break;
					    case 'cz':
					        echo "Naše společnost získala povolení zprostředkovat práci agenturním pracovníkům jak ze zemí EU, tak z východní Evropy. Svou činnost provádíme na základě povolení Ministerstva práce a sociálních věcí České republiky.";
					        break;
					    default:
					       echo "Наша компания получила разрешение на посредничество по трудоустройству работников агентства как из стран ЕC, так и из Восточной Европы. Мы осуществляем свою деятельность на основании разрешения Министерства труда и социальных дел Чешской республики.";
					        break;
					}
				?>
			</p>
			<div class="documents__list">
				<?php foreach(getDocuments() as $document) { ?>
					<div class="documents__item">
						<a href="<?php echo $document['img']; ?>" data-fancybox>
							<img src="<?php echo $document['img']; ?>" alt="" loading="lazy">
						</a>
					</div>
				<?php } ?>
			</div>
			<div class="dots documents__nav"></div>
			<div class="documents__controls">
				<button class="documents__control documents__control--prev">
					<img src="<?php echo IMG_DIR ?>/btn-arrow-left.svg" alt="Назад">
				</button>
				<button class="documents__control documents__control--next">
					<img src="<?php echo IMG_DIR ?>/btn-arrow-left.svg" alt="Вперёд">
				</button>
			</div>
		</div>
	</section>
	<section class="reviews" id="reviews">
		<div class="container">
			<h2 class="title title--h2 reviews__title">
				<?php 
					switch ($lang) {
					    case 'ua':
					        echo "Відгуки наших клієнтів";
					        break;
					    case 'en':
					        echo "Feedback from our customers";
					        break;
					    case 'cz':
					        echo "Recenze našich zákazníků";
					        break;
					    default:
					       echo "Отзывы наших клиентов";
					        break;
					}
				?>
			</h2>
			<div class="reviews__body">
				<div class="reviews__list">
					<?php foreach(getReviews() as $review) { ?>
						<div>
							<div class="review" data-yt="<?php echo $review['link']; ?>">
								<?php if($review['link'] === "") { ?>
									<div class="review__photo">
										<img src="<?php echo $review['img']; ?>" alt="<?php echo $review['name']; ?>" loading="lazy">
									</div>
								<?php } else { ?>
									<div class="review__video">
										<div class="review__preview">
											<img src="<?php echo $review['img']; ?>" alt="<?php echo $review['name']; ?>" loading="lazy">
										</div>
									</div>
								<?php } ?>
								<div class="review__info">
									<h3 class="review__name"><?php echo $review['name']; ?></h3>
									<p class="review__date"><?php echo $review['text']; ?></p>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="dots reviews__nav"></div>
				<div class="reviews__controls">
					<button class="reviews__control reviews__control--prev">
						<img src="<?php echo IMG_DIR ?>/btn-arrow-left.svg" alt="Назад">
					</button>
					<button class="reviews__control reviews__control--next">
						<img src="<?php echo IMG_DIR ?>/btn-arrow-left.svg" alt="Вперёд">
					</button>
				</div>
			</div>
		</div>
	</section>
	<section class="how" id="how">
		<div class="container">
			<h2 class="title title--h2 how__title">
				<?php 
					switch ($lang) {
					    case 'ua':
					        echo "Як ми знайдемо для <br> Вас роботу?";
					        break;
					    case 'en':
					        echo "How will we find a job <br> for You?";
					        break;
					    case 'cz':
					        echo "Jak najdeme pro <br> Vaši práci?";
					        break;
					    default:
					       echo "Как мы найдем для <br> Вас работу?";
					        break;
					}
				?>
			</h2>
			<p class="caption how__caption">
				<?php 
					switch ($lang) {
					    case 'ua':
					        echo "Ми намагаємося знайти підходящу роботу, на підставі відповідної спеціальності, освіти і досвіду роботи наших працівників.";
					        break;
					    case 'en':
					        echo "We try to find a suitable job based on the relevant specialty, education and work experience of our employees.";
					        break;
					    case 'cz':
					        echo "Snažíme se najít vhodnou práci na základě příslušné specializace, vzdělání a zkušeností našich pracovníků.";
					        break;
					    default:
					       echo "Мы стараемся найти подходящую работу, на основании соответствующей специальности, образования и опыта работы наших работников.";
					        break;
					}
				?>
			</p>
			<ul class="how__list">
				<li class="how__item" data-order="1">
					<div class="how__img">
						<img src="<?php echo IMG_DIR ?>/how-1.svg" alt="">
					</div>
					<h3 class="how__itemTitle">
						<?php 
							switch ($lang) {
							    case 'ua':
							        echo "Перший контакт з нами";
							        break;
							    case 'en':
							        echo "First contact with us";
							        break;
							    case 'cz':
							        echo "První kontakt s námi";
							        break;
							    default:
							       echo "Первый контакт с нами";
							        break;
							}
						?>
					</h3>
				</li>
				<li class="how__item" data-order="2">
					<div class="how__img">
						<img src="<?php echo IMG_DIR ?>/how-2.svg" alt="">
					</div>
					<h3 class="how__itemTitle">
						<?php 
							switch ($lang) {
							    case 'ua':
							        echo "Вибір відповідної позиції";
							        break;
							    case 'en':
							        echo "Choosing a suitable position";
							        break;
							    case 'cz':
							        echo "Výběr vhodné pozice";
							        break;
							    default:
							       echo "Выбор подходящей позиции";
							        break;
							}
						?>
					</h3>
				</li>
				<li class="how__item" data-order="3">
					<div class="how__img">
						<img src="<?php echo IMG_DIR ?>/how-3.svg" alt="">
					</div>
					<h3 class="how__itemTitle">
						<?php 
							switch ($lang) {
							    case 'ua':
							        echo "Оформлення документів для працевлаштування";
							        break;
							    case 'en':
							        echo "Registration of documents for employment";
							        break;
							    case 'cz':
							        echo "Papírování pro zaměstnání";
							        break;
							    default:
							       echo "Оформление документов для трудоустройства";
							        break;
							}
						?>
					</h3>
				</li>
				<li class="how__item" data-order="4">
					<div class="how__img">
						<img src="<?php echo IMG_DIR ?>/how-4.svg" alt="">
					</div>
					<h3 class="how__itemTitle">
						<?php 
							switch ($lang) {
							    case 'ua':
							        echo "Надаємо житло";
							        break;
							    case 'en':
							        echo "We provide housing";
							        break;
							    case 'cz':
							        echo "Poskytujeme ubytování";
							        break;
							    default:
							       echo "Предоставляем жилье";
							        break;
							}
						?>
					</h3>
				</li>
				<li class="how__item" data-order="5">
					<div class="how__img">
						<img src="<?php echo IMG_DIR ?>/how-5.svg" alt="">
					</div>
					<h3 class="how__itemTitle">
						<?php 
							switch ($lang) {
							    case 'ua':
							        echo "Початкове виробниче навчання";
							        break;
							    case 'en':
							        echo "Initial industrial training";
							        break;
							    case 'cz':
							        echo "Počáteční výrobní školení";
							        break;
							    default:
							       echo "Начальное производственное обучение";
							        break;
							}
						?>
					</h3>
				</li>
				<li class="how__item" data-order="6">
					<div class="how__img">
						<img src="<?php echo IMG_DIR ?>/how-6.svg" alt="">
					</div>
					<h3 class="how__itemTitle">
						<?php 
							switch ($lang) {
							    case 'ua':
							        echo "Вихід на роботу";
							        break;
							    case 'en':
							        echo "Going to work";
							        break;
							    case 'cz':
							        echo "Odchod do práce";
							        break;
							    default:
							       echo "Выход на работу";
							        break;
							}
						?>
					</h3>
				</li>
			</ul>
		</div>
	</section>
	<section class="visa prettyBackground" id="visa">
		<div class="container">
			<h2 class="title title--h2 visa__title">
				<?php 
					switch ($lang) {
					    case 'ua':
					        echo "Оформлення робочої візи<br> в Чехію";
					        break;
					    case 'en':
					        echo "Registration of a work visa<br> to the Czech Republic";
					        break;
					    case 'cz':
					        echo "Pracovní vízum<br> do České republiky";
					        break;
					    default:
					       echo "Оформление рабочей визы<br> в Чехию";
					        break;
					}
				?>
			</h2>
			<div class="caption visa__caption">
				<?php 
					switch ($lang) {
					    case 'ua':
					        echo "У нас є досвідчені співробітники, які допоможуть зібрати необхідні для подачі папери без зайвої бюрократії і правильно їх заповнити.";
					        break;
					    case 'en':
					        echo "We have experienced staff who will help you collect the necessary paperwork for filing without unnecessary bureaucracy and fill them out correctly.";
					        break;
					    case 'cz':
					        echo "Máme zkušené zaměstnance, kteří pomohou shromáždit potřebné dokumenty k podání bez zbytečné byrokracie a řádně je vyplnit.";
					        break;
					    default:
					       echo "У нас есть опытные сотрудники, которые помогут собрать необходимые для подачи бумаги без лишней бюрократии и правильно их заполнить.";
					        break;
					}
				?>
			</div>
			<div class="visa__period">
				<button class="button visa__periodButton visa__periodButton--active" data-option="1">
					<?php 
						switch ($lang) {
						    case 'ua':
						        echo "3 місяці";
						        break;
						    case 'en':
						        echo "3 months";
						        break;
						    case 'cz':
						        echo "3 měsíce";
						        break;
						    default:
						       echo "3 месяца";
						        break;
						}
					?>
				</button>
				<button class="button visa__periodButton" data-option="2">
					<?php 
						switch ($lang) {
						    case 'ua':
						        echo "2 роки";
						        break;
						    case 'en':
						        echo "2 years";
						        break;
						    case 'cz':
						        echo "2 roky";
						        break;
						    default:
						       echo "2 года";
						        break;
						}
					?>
				</button>
			</div>
			<div class="visa__options">
				<div class="visa__option" data-option="1">
					<span class="visa__optionCaption">
						<?php 
							switch ($lang) {
							    case 'ua':
							        echo "Термін оформлення 10-15 днів";
							        break;
							    case 'en':
							        echo "The registration period is 10-15 days";
							        break;
							    case 'cz':
							        echo "Doba vyřízení 10-15 dní";
							        break;
							    default:
							       echo "Срок оформления 10-15 дней";
							        break;
							}
						?>
					</span>
					<h3 class="visa__optionTitle">
						<?php 
							switch ($lang) {
							    case 'ua':
							        echo "Робоча віза на 3 місяці";
							        break;
							    case 'en':
							        echo "Work visa for 3 months";
							        break;
							    case 'cz':
							        echo "Pracovní vízum na 3 měsíce";
							        break;
							    default:
							       echo "Рабочая виза на 3 месяца";
							        break;
							}
						?>
					</h3>
					<h4 class="visa__listTitle">
						<?php 
							switch ($lang) {
							    case 'ua':
							        echo "Етапи оформлення візи:";
							        break;
							    case 'en':
							        echo "Stages of visa processing:";
							        break;
							    case 'cz':
							        echo "Fáze vyřízení víza:";
							        break;
							    default:
							       echo "Этапы оформления визы:";
							        break;
							}
						?>
					</h4>
					<ul class="visa__stages">
						<?php 
							switch ($lang) {
							    case 'ua':
							        echo "
								        <li>Реєстрація</li>
										<li>Заповнення анкети</li>
										<li>Збір документів</li>
										<li>Обробка ваших даних</li>
							        ";
							        break;
							    case 'en':
							        echo "
								        <li>Registration</li>
										<li>Filling out the questionnaire</li>
										<li>Collecting documents</li>
										<li>Processing of your data</li>
							        ";
							        break;
							    case 'cz':
							        echo "
								       <li>Registrace</li>
										<li>Vyplnění dotazníku</li>
										<li>Shromažďování dokumentů</li>
										<li>Zpracování vašich dat</li>
							        ";
							        break;
							    default:
							       echo "
								       <li>Регистрация</li>
										<li>Заполнение анкеты</li>
										<li>Сбор документов</li>
										<li>Обработка ваших данных</li>
									";
							        break;
							}
						?>
					</ul>
					<p class="visa__price">299 €</p>
					<div class="visa__controls">
						<button class="button button--more visa__more">
							<span>
								<?php 
									switch ($lang) {
									    case 'ua':
									        echo "Докладно";
									        break;
									    case 'en':
									        echo "More detailed";
									        break;
									    case 'cz':
									        echo "Více podrobností";
									        break;
									    default:
									       echo "Подробнее";
									        break;
									}
								?>
							</span>
						</button>
						<a href="#contact" class="scrollTo button visa__order">
							<?php 
								switch ($lang) {
								    case 'ua':
								        echo "Подати заявку";
								        break;
								    case 'en':
								        echo "Submit an application";
								        break;
								    case 'cz':
								        echo "Podat žádost";
								        break;
								    default:
								       echo "Подать заявку";
								        break;
								}
							?>
						</a>
					</div>
				</div>
				<div class="visa__option visa__option--hide" data-option="2">
					<span class="visa__optionCaption">
						<?php 
							switch ($lang) {
							    case 'ua':
							        echo "Термін оформлення 10-15 днів";
							        break;
							    case 'en':
							        echo "The registration period is 10-15 days";
							        break;
							    case 'cz':
							        echo "Doba vyřízení 10-15 dní";
							        break;
							    default:
							       echo "Срок оформления 10-15 дней";
							        break;
							}
						?>
					</span>
					<h3 class="visa__optionTitle">
						<?php 
							switch ($lang) {
							    case 'ua':
							        echo "ВНЖ на 2 роки";
							        break;
							    case 'en':
							        echo "Residence permit for 2 years";
							        break;
							    case 'cz':
							        echo "Povolení k pobytu na 2 roky";
							        break;
							    default:
							       echo "ВНЖ на 2 года";
							        break;
							}
						?>
					</h3>
					<h4 class="visa__listTitle">
						<?php 
							switch ($lang) {
							    case 'ua':
							        echo "Етапи оформлення візи:";
							        break;
							    case 'en':
							        echo "Stages of visa processing:";
							        break;
							    case 'cz':
							        echo "Fáze vyřízení víza:";
							        break;
							    default:
							       echo "Этапы оформления визы:";
							        break;
							}
						?>
					</h4>
					<ul class="visa__stages">
						<?php 
							switch ($lang) {
							    case 'ua':
							        echo "
								        <li>Реєстрація</li>
										<li>Заповнення анкети</li>
										<li>Збір документів</li>
										<li>Обробка ваших даних</li>
							        ";
							        break;
							    case 'en':
							        echo "
								        <li>Registration</li>
										<li>Filling out the questionnaire</li>
										<li>Collecting documents</li>
										<li>Processing of your data</li>
							        ";
							        break;
							    case 'cz':
							        echo "
								       <li>Registrace</li>
										<li>Vyplnění dotazníku</li>
										<li>Shromažďování dokumentů</li>
										<li>Zpracování vašich dat</li>
							        ";
							        break;
							    default:
							       echo "
								       <li>Регистрация</li>
										<li>Заполнение анкеты</li>
										<li>Сбор документов</li>
										<li>Обработка ваших данных</li>
									";
							        break;
							}
						?>
					</ul>
					<p class="visa__price">299 €</p>
					<div class="visa__controls">
						<button class="button button--more visa__more">
							<span>
								<?php 
									switch ($lang) {
									    case 'ua':
									        echo "Докладно";
									        break;
									    case 'en':
									        echo "More detailed";
									        break;
									    case 'cz':
									        echo "Více podrobností";
									        break;
									    default:
									       echo "Подробнее";
									        break;
									}
								?>
							</span>
						</button>
						<a href="#contact" class="scrollTo button visa__order">
							<?php 
								switch ($lang) {
								    case 'ua':
								        echo "Подати заявку";
								        break;
								    case 'en':
								        echo "Submit an application";
								        break;
								    case 'cz':
								        echo "Podat žádost";
								        break;
								    default:
								       echo "Подать заявку";
								        break;
								}
							?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="company">
		<div class="container">
			<h2 class="title title--h2 company__title">
				<?php 
					switch ($lang) {
					    case 'ua':
					        echo "Ми працюємо з такими<br > компаніями як";
					        break;
					    case 'en':
					        echo "We work with such<br> companies as";
					        break;
					    case 'cz':
					        echo "Spolupracujeme s takovými společnostmi jako";
					        break;
					    default:
					       echo "Мы работаем с такими<br> компаниями как";
					        break;
					}
				?>
			</h2>
			<div class="company__list">
				<?php foreach(getPartners() as $partner) { ?>
					<div>
						<img src="<?php echo $partner['img'] ?>" alt="<?php echo $partner['name'] ?>">
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<section class="faq" id="faq">
		<div class="container">
			<h2 class="title title--h2 faq__title">
				<?php 
					switch ($lang) {
					    case 'ua':
					        echo "Поширені запитання";
					        break;
					    case 'en':
					        echo "Frequently Asked Questions";
					        break;
					    case 'cz':
					        echo "Často kladené otázky";
					        break;
					    default:
					       echo "Часто задаваемые вопросы";
					        break;
					}
				?>
			</h2>
			<ul class="faq__list">
				<?php foreach(getFaq() as $question) { ?>
					<li class="faq__item">
						<h3 class="faq__itemTitle"><?php echo $question['title'] ?></h3>
						<div class="faq__itemText">
							<?php echo wpautop($question['answer']) ?>
						</div>
					</li>
				<?php } ?>
			</ul>
		</div>
	</section>
<?php get_footer(); ?>