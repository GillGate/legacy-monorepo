	<?php $fields = get_fields(); ?>
	<footer class="footer">
		<div class="container">
			<div class="footer__wrapper">
				<div class="footer__logo">
					<img src="<?php echo IMG_DIR ;?>/logo.png" alt="">
				</div>
				<div class="footer__nav">
					<a href="#" class="footer__link">Проект</a>
					<a href="#" class="footer__link">О нас </a>
					<a href="#" class="footer__link">Застройщик</a>
					<a href="#" class="footer__link">Локация</a>
					<a href="#" class="footer__link">Жилой фонд</a>
					<a href="#" class="footer__link">Контакты</a>
				</div>
				<div class="footer__social">
					<a href="<?php echo $fields['social']['instagram']; ?>" class="footer__socialLink">
						<img src="<?php echo IMG_DIR ;?>/icon-ig.svg" width="29" height="29" alt="">
					</a>
					<a href="<?php echo $fields['social']['youtube']; ?>" class="footer__socialLink">
						<img src="<?php echo IMG_DIR ;?>/icon-yt.svg" width="29" height="29" alt="">
					</a>
					<a href="<?php echo $fields['social']['facebook']; ?>" class="footer__socialLink">
						<img src="<?php echo IMG_DIR ;?>/icon-fb.svg" width="29" height="29" alt="">
					</a>
				</div>
				<div class="footer__map">
					<img src="<?php echo IMG_DIR ;?>/map.jpg" alt="">
				</div>
			</div>
		</div>
	</footer>
		<script>
		const THEME_ROOT = "<?php echo THEME_ROOT ?>";
	</script>
	<?php wp_footer(); ?>
</body>
</html>