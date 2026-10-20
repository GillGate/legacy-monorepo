$(function(){
	let clWidth = document.documentElement.clientWidth;
	let startDate = new Date();

	$('.booking__datepicker').datepicker({
		minDate: startDate,
		position: 'bottom center'
	});

	if(clWidth > 720) {
		$('.sintro__slider').resizeSlider({
			"image":{
				"presentacion":{
					"landscape":{
						"url"      : "url(../img/main/intro-bg-1.jpg)",
						"size"     : "cover",
						"repeat"   : "no-repeat",
						"position" : "center top"
					},
					"portrait":{
						"url"      : "url(../img/main/intro-bg-1.jpg)",
						"size"     : "cover",
						"repeat"   : "no-repeat",
						"position" : "right center"
					}
				},
				"presentacion 1":{
					"landscape":{
						"url"      : "url(../img/main/intro-bg-2.jpg)",
						"size"     : "cover",
						"repeat"   : "no-repeat",
						"position" : "center bottom"
					},
					"portrait":{
						"url"      : "url(../img/main/intro-bg-2.jpg)",
						"size"     : "cover",
						"repeat"   : "no-repeat",
						"position" : "left center"
					}
				}
			}
		});
	} else {
		$('.section__list--prom').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			appendDots: '.section__dots--prom'
		});

		$('.section__list--category').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			rows: 2,
			dots: true,
			appendDots: '.section__dots--category'
		});

		$('.section__list--service').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			rows: 2,
			dots: true,
			appendDots: '.section__dots--service'
		});

		$('.gallery__wrapper--slider').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			appendDots: '.section__dots--gallery'
		});

		$('.section__list--news').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			appendDots: '.section__dots--news'
		});

		$('.section__list--social').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			rows: 2,
			dots: true,
			appendDots: '.section__dots--social'
		});
	}

	$('.header__function--menu').on('click', function() {
		$(this).toggleClass('header__function--menu_open');

		$('.header__nav').toggleClass('header__nav--open');
	});

	$('.single__sliderNav').slick({
		arrows: false,
		slidesToShow: 6,
		vertical: true,
		draggable: false,
		asNavFor: '.single__sliderBody',
		focusOnSelect: true,
		swipe: false,
		responsive: [
			{
				breakpoint: 721,
				settings: {
					vertical: false,
				}
			},
			{
				breakpoint: 541,
				settings: {
					vertical: false,
					slidesToShow: 4
				}
			},
			{
				breakpoint: 421,
				settings: {
					vertical: false,
					slidesToShow: 3
				}
			}
		]
	});

	$('.single__sliderBody').slick({
		asNavFor: '.single__sliderNav',
		draggable: false,
		prevArrow: '.single__sliderArrow--prev',
		nextArrow: '.single__sliderArrow--next',
		responsive: [
		    {
		      breakpoint: 721,
		      settings: {
		       draggable: true,
		      }
		    }
		]
	});

	$('.about__expand').on('click', function() {
		let $btn = $(this);
		$btn.toggleClass('page__expand--expanded').prev().slideToggle();

		if($btn.hasClass('page__expand--expanded')) {
			$btn.text('Свернуть');
		} else {
			$btn.text('Развернуть для чтения');
		}
	});

	$('.page__expand--healing').on('click', function() {
		let $btn = $(this);
		$btn.toggleClass('page__expand--expanded').closest('.page__box').find('.text').slideToggle();

		if($btn.hasClass('page__expand--expanded')) {
			$btn.text('Свернуть');
		} else {
			$btn.text('Развернуть для чтения');
		}
	});

	$('.estimate__open').on('click', function() {
		$('.estimate__form').slideDown().addClass('estimate__form--active');
		$(this).hide();
	});

	$('.page__openPopup').on('click', function(e) {
		$('.page__popup').removeClass('page__popup--active');

		$popup  = $(this).children();
		$popup.toggleClass('page__popup--active');
	});

	$(document).on('click', function(e) {
	  if (!$(e.target).closest(".page__openPopup").length) {
	    $('.page__popup').removeClass('page__popup--active');
	  }
	  e.stopPropagation();
	});
});