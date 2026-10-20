<section class="letters" id="letters">
	<div class="container">
		<div class="letters__head">
			<h2 class="title--big letters__title">Dopisová doporučení</h2>
			<div class="letters__controls">
				<button type="button" class="slider__btn slider__btn--prev" disabled>
					<svg width="40" height="26" viewBox="0 0 40 26" fill="#111546" xmlns="http://www.w3.org/2000/svg">
						<path d="M0.715595 10.881L11.0522 0.468773C11.5297 -0.0122147 12.3048 -0.0122147 12.7823 0.468773C13.2598 0.949761 13.2598 1.73049 12.7823 2.21148L3.6688 11.3916L38.7768 11.3916C39.4524 11.3916 40 11.9432 40 12.6237C40.0004 12.964 39.8633 13.272 39.6419 13.4951C39.4204 13.7182 39.1146 13.8563 38.7768 13.8558L3.6688 13.8558L12.7823 23.036C13.2598 23.517 13.2598 24.2977 12.7823 24.7787C12.3048 25.2597 11.5297 25.2597 11.0523 24.7787L0.715595 14.3664C-0.238533 13.4053 -0.238533 11.8421 0.715595 10.881Z"/>
					</svg>
				</button>
				<button type="button" class="slider__btn slider__btn--next">
					<svg width="40" height="26" viewBox="0 0 40 26" fill="#111546" xmlns="http://www.w3.org/2000/svg">
						<path d="M39.2844 10.881L28.9478 0.468773C28.4703 -0.0122147 27.6952 -0.0122147 27.2177 0.468773C26.7402 0.949761 26.7402 1.73049 27.2177 2.21148L36.3312 11.3916L1.22315 11.3916C0.547565 11.3916 1.04615e-06 11.9432 1.02038e-06 12.6237C-0.000431514 12.964 0.136676 13.272 0.358123 13.4951C0.579571 13.7182 0.885357 13.8563 1.22315 13.8558L36.3312 13.8558L27.2177 23.036C26.7402 23.517 26.7402 24.2977 27.2177 24.7787C27.6952 25.2597 28.4703 25.2597 28.9477 24.7787L39.2844 14.3664C40.2385 13.4053 40.2385 11.8421 39.2844 10.881Z"/>
					</svg>
				</button>
			</div>
		</div>
		<div class="slider letters__list">
			<?php foreach(getLetters() as $letter) { ?>
				<div>
					<a class="letters__item" href="<?php echo $letter['img']; ?>">
						<img src="<?php echo $letter['img']; ?>" alt="<?php echo $letter['name']; ?>" loading="lazy">
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</section>