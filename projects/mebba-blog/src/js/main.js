$(function(){
	$searchBtn = $('.search__submit');
	$('.search__input').on('input', function(e) {
		if(e.target.value.length > 0) {
			$searchBtn.attr('disabled', false);
		}
		else {
			$searchBtn.attr('disabled', true);
		}
	});

	$('.header__search').on('click', function(e) {
		$('.search').slideDown(300);
		$(this).fadeOut(300);
		$(this).removeClass('header__search--hidden');
	});

	$('.header__bar').on('click', function(e) {
		$(this).toggleClass('header__bar--open');
		$('.header__nav').toggleClass('header__nav--mobile');
		$('html').toggleClass('openMenu');

		if($(this).hasClass('header__bar--open')) {
			$('.header__search--hidden').fadeOut(300);
		}
		else {
			$('.header__search--hidden').fadeIn(300);
		}
	});

	$('.search__close').on('click', function(e) {
		$('.search').slideUp(300);
		$('.header__search').addClass('header__search--hidden').fadeIn(300);
	});

	$('.singleArticle__content p').each(function(){
	    $(this).html($(this).html().replace(/&nbsp;/gi,''));
	});
});