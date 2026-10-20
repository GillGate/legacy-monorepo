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
	<footer class="footer" id="contact">
		<div class="container">
			<div class="footer__contact contact">
				<div class="contact__main">
					<div class="contact__info">
						<h2 class="title title--h3 contact__title">
							<?php 
								switch ($lang) {
								    case 'ua':
								        echo "Напишіть нам, яку роботу шукайте.<br>Ми Вам допоможемо!";
								        break;
								    case 'en':
								        echo "Write to us what kind of job you are looking for.<br>We will help you!";
								        break;
								    case 'cz':
								        echo "Napište nám, jakou práci hledáte.<br>Pomůžeme vám!";
								        break;
								    default:
								       echo "Напишите нам, какую работу ищите.<br>Мы Вам поможем!";
								        break;
								}
							?>
						</h2>
						<p class="contact__caption">
							<?php 
								switch ($lang) {
								    case 'ua':
								        echo "Залиште заявку, і найближчим часом наш менеджер зв'яжеться з вами.";
								        break;
								    case 'en':
								        echo "Leave a request, and our manager will contact you soon.";
								        break;
								    case 'cz':
								        echo "Zanechte přihlášku a náš manažer vás brzy kontaktuje.";
								        break;
								    default:
								       echo "Оставьте заявку, и в ближайшее время наш менеджер свяжется с вами.";
								        break;
								}
							?>
						</p>
					</div>
				<form class="form contact__form">
					<input type="hidden" name="contact-language" value="<?php echo $lang; ?>">
					<input type="hidden" name="contact-vakancy" value="Не выбрано">
					<label class="form__label">
						<input type="text" name="contact-name" class="form__input" maxlength="70" 
							placeholder="<?php 
								switch ($lang) {
								    case 'ua':
								        echo "Ім'я";
								        break;
								    case 'en':
								        echo "Name";
								        break;
								    case 'cz':
								        echo "Název";
								        break;
								    default:
								       echo "Имя";
								        break;
								}
							?>"
						>
					</label>
					<label class="form__label">
						<input type="tel" name="contact-phone" class="form__input" maxlength="14" 
							placeholder="<?php 
								switch ($lang) {
								    case 'ua':
								        echo "Телефон";
								        break;
								    case 'en':
								        echo "Phone";
								        break;
								    case 'cz':
								        echo "Telefon";
								        break;
								    default:
								       echo "Телефон";
								        break;
								}
							?>"
						>
					</label>
					<div class="form__final">
						<label class="form__label form__label--textarea">
							<textarea name="contact-msg" class="form__input form__textarea" maxlength="700" 
								placeholder="<?php 
									switch ($lang) {
									    case 'ua':
									        echo "Коментар";
									        break;
									    case 'en':
									        echo "Comment";
									        break;
									    case 'cz':
									        echo "Komentář";
									        break;
									    default:
									       echo "Комментарий";
									        break;
									}
								?>"
							></textarea>
						</label>
						<div class="form__footer">
							<button class="button form__submit">
								<?php 
									switch ($lang) {
									    case 'ua':
									        echo "Залишити заявку";
									        break;
									    case 'en':
									        echo "Submit";
									        break;
									    case 'cz':
									        echo "Zanechat přihlášku";
									        break;
									    default:
									       echo "Оставить заявку";
									        break;
									}
								?>
							</button>
						</div>
					</div>
				</form>
				</div>
				<div class="contact__bottom">
					<div class="contact__phone">
						<a href="tel:+8772557945" class="footer__icon footer__icon--phone">877-255-7945</a>
					</div>
					<div class="contact__social">
						<p class="contact__socialTitle">
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
						<div class="contact__socialList">
							<a href="#" class="contact__socialLink">
								<img src="<?php echo IMG_DIR ?>/icon-viber.svg" alt="">
							</a>
							<a href="#" class="contact__socialLink">
								<img src="<?php echo IMG_DIR ?>/icon-wa.svg" alt="">
							</a>
							<a href="#" class="contact__socialLink">
								<img src="<?php echo IMG_DIR ?>/icon-tg.svg" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer__location location">
				<div class="location__item">
					<div class="location__head">
						<h3 class="title location__title">
							<?php 
								switch ($lang) {
								    case 'ua':
								        echo "Офіс в Плзні:";
								        break;
								    case 'en':
								        echo "Office in Plzni:";
								        break;
								    case 'cz':
								        echo "Kancelář v Plzni:";
								        break;
								    default:
								       echo "Офис в Плзни:";
								        break;
								}
							?>
						</h3>
						<address class="location__address">
							<?php 
								switch ($lang) {
								    case 'ua':
								        echo "Яначкова 1883/62";
								        break;
								    case 'en':
								        echo "Yanachkova 1883/62";
								        break;
								    case 'cz':
								        echo "Janáčková 1883/62";
								        break;
								    default:
								       echo "Яначкова 1883/62";
								        break;
								}
							?>
						</address>
						<address class="location__address">
							<?php 
								switch ($lang) {
								    case 'ua':
								        echo "323 00 Плзень";
								        break;
								    case 'en':
								        echo "323 00 Plzen";
								        break;
								    case 'cz':
								        echo "323 00 Plzeň";
								        break;
								    default:
								       echo "323 00 Плзень";
								        break;
								}
							?>
						</address>
					</div>
					<div class="location__map">
						<img src="<?php echo IMG_DIR ?>/map.jpg" alt="">
					</div>
				</div>
				<div class="location__item">
					<div class="location__head">
						<h3 class="title location__title">
							<?php 
								switch ($lang) {
								    case 'ua':
								        echo "Офіс у Празі:";
								        break;
								    case 'en':
								        echo "Office in Prague:";
								        break;
								    case 'cz':
								        echo "Kancelář v Praze:";
								        break;
								    default:
								       echo "Офис в Плзни:";
								        break;
								}
							?>
						</h3>
						<address class="location__address">
							<?php 
								switch ($lang) {
								    case 'ua':
								        echo "Конєвова 289/3";
								        break;
								    case 'en':
								        echo "Konevova 289/3";
								        break;
								    case 'cz':
								        echo "Koněvová 289, 3.";
								        break;
								    default:
								       echo "Коневова 289/3";
								        break;
								}
							?>
						</address>
					</div>
					<div class="location__map">
						<img src="<?php echo IMG_DIR ?>/map.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="footer__bottom">
				<a href="/" class="footer__logo">
					<img src="<?php echo IMG_DIR ?>/logo.svg" alt="">
				</a>
				<div class="footer__bottomInfo">
					<address class="footer__icon footer__icon--location">385 Noah Place Suite 878</address>
					<a href="mailto:info@form.com" class="footer__icon footer__icon--mail">info@form.com</a>
				</div>
			</div>
		</div>
	</footer>
	<script>
		const THEME_ROOT = "<?php echo THEME_ROOT ?>";
		const SITE_LANG = "<?php echo $lang ?>";
	</script>
	<?php wp_footer(); ?>
</body>
</html>