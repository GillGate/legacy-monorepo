$(function(){
	$('.header__bar').on('click', function(e) {
		$(this).toggleClass('header__bar--open');
		$('.header__nav').toggleClass('header__nav--mobile');
		$('html').toggleClass('openMenu');
	});

	$('.nav__link').on('click', function(e) {
		$('html').removeClass('openMenu');
		$('.header__nav').removeClass('header__nav--mobile');
	});
});