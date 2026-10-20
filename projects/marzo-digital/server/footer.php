	<footer class="footer">
		<?php 
			$links = get_field('site-links', 7);
		?>
		<div class="container">
			<div class="footer__logo">
				<img src="<?php echo IMG_DIR ?>/logo-full-black.svg" alt="Marzo.digital">
			</div>
			<div class="footer__content">
				<div class="footer__main">
					<h2 class="title footer__title">Reach out to us and let's get the conversation started!</h2>
					<div class="footer__contact">
						<p class="footer__contactCaption">Ready to bring your vision to life? Let's turn your ideas into reality</p>
						<a href="/contact/" class="label label--hoverFilled footer__discuss"><span>Discuss the project</span></a>
					</div>
					<div class="footer__contact">
						<p class="footer__contactCaption">Or each out via email. We'll get back to you promptly!</p>
						<a href="mailto:hello@marzo.digital" class="footer__link">hello@marzo.digital</a>
					</div>
				</div>
				<nav class="footer__nav">
					<a href="/" class="footer__navLink">Home</a>
					<a href="/about/" class="footer__navLink">About</a>
					<a href="<?php echo $links['portfolio']; ?>" class="footer__navLink">Portfolio</a>
					<a href="/contact/" class="footer__navLink">Contact</a>
				</nav>
				<div class="footer__address">
					<h3 class="footer__caption">Address</h3>
					<address>
						Zvěřinova 3446/3,<br>
						130 00 Praha 3,<br>
						Česká Republika
					</address>
					<p>
						<strong>IČO: 593476065</strong><br>
						Marzo Digital s.r.o.<br>
						Registered in Prague
					</p>
				</div>
				<div class="footer__links">
					<h3 class="footer__caption">Follow us</h3>
					<a href="<?php echo $links['behance']; ?>" class="footer__link">behance</a>
					<a href="<?php echo $links['dribble']; ?>" class="footer__link">dribble</a>
					<a href="<?php echo $links['instagram']; ?>" class="footer__link">instagram</a>
				</div>
			</div>
			<p class="footer__policy">© Marzo Digital 2023. All rights reserved, <a href="/policy/">Privacy Policy</a></p>
		</div>
	</footer>
	<script>
		const themeRoot = "<?php echo THEME_ROOT ?>";
	</script>
	<?php wp_footer(); ?>
</body>
</html>