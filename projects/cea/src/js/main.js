$(function(){

	let clWidth = document.documentElement.clientWidth;

	let offset = window.pageYOffset;

	function checkOffset() {
		offset = window.pageYOffset;
		let head = $('.header__head');

		if (offset > 550) {
		  if($('header').hasClass('header--main')) {
		  	$('body').css('marginTop', '0px');
		  } else {
		  	$('body').css('marginTop', '92px');
		  }
		 
		  head.addClass('header__head--fixed');
		} else {
		  $('body').css('marginTop', '0px');
		  head.removeClass('header__head--fixed');
		}
	}

	if(clWidth < 769) {
		checkOffset();

		$(window).on('scroll', function() {
			checkOffset();
		});
	}
	
	$('.getConsultation').on('click', function() {
		$('.popup--consultation').show(100, function() {
			$('.popup--consultation').css('opacity', '1');
		});
	});

	$('.popup__close').on('click', function() {
		$('.popup').css('opacity', '0');

		setTimeout(function() {
			$('.popup').hide();
		});
	});

	$('.nav__bar').on('click', function() {
		let nav = $(this).closest('.nav')
		nav.addClass('nav--open');
	});

	$('.nav__close, .nav__link').on('click', function() {
		$('.nav').removeClass('nav--open');
	});

	$('.nav__link, .footer__link').on('click', function(e) {

	let target = $(this).attr('href');
		if(clWidth < 769) {
			$('html, body').animate({
			  scrollTop: $(target).offset().top - 90
			}, 1000);
		} else {
			$('html, body').animate({
			  scrollTop: $(target).offset().top
			}, 1000);
		}
	});

	$('.vakancy__button').on('click', function() {
		let popup = $(this).parent().next();

		popup.show(100, function() {
			popup.css('opacity', '1');
		});
	})

	$('.faq__item').on('click', function() {
  		$(this).toggleClass('faq__item--active').children('p').slideToggle(300);
        $('.faq__item').not(this).removeClass('faq__item--active').children('p').slideUp(300);
  	});
});