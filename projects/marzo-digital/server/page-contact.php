<?php get_header(); ?>
<?php get_template_part('include/header'); ?>
	<section class="page contact">
		<div class="container">
			<h1 class="page__title">Let’s get in touch!</h1>
			<form class="contact__form form">
				<div class="form__body">
					<div class="form__item form__item--name">
						<p class="form__title">Hi! My name is</p>
						<label class="form__label">
							<input type="text" class="form__input" name="contact-name" maxlength="80" placeholder="Enter your name*">
						</label>
					</div>
					<div class="form__item">
						<p class="form__title">I work in</p>
						<label class="form__label">
							<input type="text" class="form__input" name="contact-work" maxlength="80" placeholder="Where you work*">
						</label>
					</div>
					<div class="form__item">
						<p class="form__title">I'm excited to discuss my project, which is related to </p>
						<div class="form__radioGroup">
							<input type="radio" class="vh" name="contact-type" id="contact-type-1" value="Brand Design" checked>
							<label for="contact-type-1" class="form__label form__radioLabel">
								Brand Design
							</label>
							<input type="radio" class="vh" name="contact-type" id="contact-type-2" value="Product Design">
							<label for="contact-type-2" class="form__label form__radioLabel">
								Product Design
							</label>
							<input type="radio" class="vh" name="contact-type" id="contact-type-3" value="Website Design">
							<label for="contact-type-3" class="form__label form__radioLabel">
								Website Design
							</label>
							<input type="radio" class="vh" name="contact-type" id="contact-type-4" value="Website Development">
							<label for="contact-type-4" class="form__label form__radioLabel">
								Website Development
							</label>
						</div>
					</div>
					<div class="form__item">
						<p class="form__title">My budget for this project falls within the range of </p>
						<div class="form__radioGroup">
							<input type="radio" class="vh" name="contact-budget" id="contact-budget-1" value="Small Project: $500 - $2,000" checked>
							<label for="contact-budget-1" class="form__label form__radioLabel">
								Small Project: $500 - $2,000
							</label>
							<input type="radio" class="vh" name="contact-budget" id="contact-budget-2" value="Medium Project: $2,000 - $5,000">
							<label for="contact-budget-2" class="form__label form__radioLabel">
								Medium Project: $2,000 - $5,000
							</label>
							<input type="radio" class="vh" name="contact-budget" id="contact-budget-3" value="Large Project: $5,000 - $10,000">
							<label for="contact-budget-3" class="form__label form__radioLabel">
								Large Project: $5,000 - $10,000
							</label>
							<input type="radio" class="vh" name="contact-budget" id="contact-budget-4" value="Enterprise Project: $10,000+">
							<label for="contact-budget-4" class="form__label form__radioLabel">
								Enterprise Project: $10,000+
							</label>
						</div>
					</div>
					<div class="form__item form__item--email">
						<p class="form__title">You can reach me at</p>
						<label class="form__label">
							<input type="email" class="form__input" name="contact-email" maxlength="60" placeholder="Enter your email*">
						</label>
					</div>
					<div class="form__item">
						<p class="form__title">and</p>
						<label class="form__label">
							<input type="tel" class="form__input" name="contact-phone" maxlength="12" placeholder="Enter your phone number">
						</label>
					</div>
					<div class="form__item form__item--message">
						<p class="form__title">I also have some additional information or a question to share:</p>
						<label class="form__label">
							<textarea class="form__input form__textarea" name="contact-message" maxlength="600" placeholder="Enter your message"></textarea>
						</label>
					</div>
				</div>
				<div class="form__footer">
					<input type="checkbox" class="vh" name="contact-agree" id="contact-agree">
					<label for="contact-agree" class="form__label form__checkboxLabel">
						I agree with the Terms of <a target="_blank" rel="noopener" href="/policy/">Privacy policy</a> 
					</label>
					<button class="button form__submit" disabled>
						<span>Send a request</span>
					</button>
				</div>
			</form>
		</div>
	</section>
<?php get_footer(); ?>