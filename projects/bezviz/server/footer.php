	<?php $fields = get_fields(); ?>
	<?php $contacts = get_fields(5); ?>
	<?php $lang = $GLOBALS['lang']; ?>
	<footer class="footer">
		<div class="container">
			<div class="footer__wrapper">
				<div class="footer__map">
					<div class="footer__mapFrame">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.134459555409!2d98.3017469!3d7.9850474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305037c17c032f67%3A0x33cf6b3ec610b485!2sBezViz!5e0!3m2!1sru!2s!4v1700114916246!5m2!1sru!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<a href="https://maps.app.goo.gl/kLo1TRu3EAdxDjJS6" class="footer__icon footer__icon--location footer__mapLink">
						<?php if($lang === 'en') { 
							echo "Show on Google maps";
						} else {
							echo "Показать на Google maps";
						} ?>
					</a>
				</div>
				<div class="footer__info">
					<h2 class="h2 footer__title">
						<?php if($lang === 'en') { 
							echo "Tourist Assistance Agency in Thailand";
						} else {
							echo "Агенство помощи туристам в Таиланде";
						} ?>
					</h2>
					<div class="footer__order">
						<a href="tel:+0946145073" class="footer__icon footer__icon--phone footer__phone"><?php echo $fields['social']['phone']; ?></a>
						<button type="button" class="button footer__orderBtn" data-fancybox data-src="#popup">
							<?php if($lang === 'en') { 
								echo "Order call";
							} else {
								echo "Заказать звонок";
							} ?>
						</button>
					</div>
					<div class="footer__address">
						<div class="footer__icon footer__icon--location address footer__addressItem">
							<?php if($lang === 'en') { 
								echo "Address: ";
							} else {
								echo "Адрес: ";
							} ?>
							<address><?php echo $contacts['social']['address-first']; ?></address>
						</div>
						<!-- <div class="footer__icon footer__icon--location address footer__addressItem">
							<?php if($lang === 'en') { 
								echo "Address: ";
							} else {
								echo "Адрес: ";
							} ?>
							<address><?php echo $contacts['social']['address-second']; ?></address>
						</div> -->
					</div>
				</div>
			</div>
			<div class="footer__bottom">
				<div class="footer__logo">
					<img src="<?php echo IMG_DIR ;?>/logo-white.svg" width="108" alt="">
				</div>
				<nav class="footer__nav">
					<a href="#about" class="footer__link">
						<?php if($lang === 'en') { 
							echo "About";
						} else {
							echo "О нас";
						} ?>
					</a>
					<a href="#help" class="footer__link">
						<?php if($lang === 'en') { 
							echo "How to get";
						} else {
							echo "Как получить";
						} ?>
					</a>
				<!-- 	<a href="#services" class="footer__link">
						<?php if($lang === 'en') { 
							echo "All services";
						} else {
							echo "Все услуги";
						} ?>
					</a> -->
				<!-- 	<a href="#reviews" class="footer__link">
						<?php if($lang === 'en') { 
							echo "Reviews";
						} else {
							echo "Отзывы";
						} ?>
					</a> -->
					<a href="#contacts" class="footer__link">
						<?php if($lang === 'en') { 
							echo "Contacts";
						} else {
							echo "Контакты";
						} ?>
					</a>
				</nav>
			</div>
		</div>
	</footer>
	<script>
		let themeRoot = "<?php echo THEME_ROOT ?>";
		const THEME_ROOT = themeRoot.replace('/pt', "");
	</script>
	<?php wp_footer(); ?>
</body>
</html>