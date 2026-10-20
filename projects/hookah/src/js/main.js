$(function(){
	let clWidth = document.documentElement.clientWidth;

	let confirmAge = localStorage.getItem('confirmAge');

	if(confirmAge === null) {
		setTimeout(() => {
			if($('.popup--check').length > 0) {
				$('.popup--check').addClass('popup--open');
				$('html').addClass('openPopup');
			};

			$('.popup__control--confirm').on('click', function() {
				localStorage.setItem('confirmAge', true);
			});

			setTimeout(() => {
				$('.popup--check').css('opacity', 1);
			}, 500);
		}, 10000);
	}

	const $offerSlider = $('.offerSlider__body');

	$offerSlider.on('init', function(slick) {
		let $progressLine = $('.offer__progressLine');
		$progressLine.animate(
			{
				width: "100%",
			},
			{
				duration: 5000
			}
		);

		$progressLine.css('width', '0%');
	});

	$offerSlider.slick({
		slidesToShow: 1,
		centerMode: true,
		centerPadding: '30px',
		arrows: true,
		prevArrow: '.offerSlider__control--prev',
		nextArrow: '.offerSlider__control--next',
		autoplay: true,
		autoplaySpeed: 5000,
	});

	$offerSlider.on('beforeChange', function(slick, currentSlide, index) {
		resetProgressLines();
	});
	
	$offerSlider.on('afterChange', function(slick, currentSlide, index) {
		$(`.offer__progress[data-index=${index}] .offer__progressLine`)
		.animate(
			{
				width: "100%",
			},
			{
				duration: 5500
			}
		);
	});

	$('.offerSlider__control').on('click', resetProgressLines);

	$('.new__sliderBody').slick({
		slidesToShow: 4,
		arrows: true,
		prevArrow: '.new__control--prev',
		nextArrow: '.new__control--next',
		responsive: [
			{
				breakpoint: 1241,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 769,
				settings: {
					slidesToShow: 2
				}
			},
		]
	});

	$('.review__show').on('click', function() {
		let $btn = $(this);
		let $detail = $btn.siblings('.review__detail');

		if($btn.hasClass('review__show--opened')) {
			$detail.slideUp(500);
			$btn.text('Читать дальше');
			$btn.removeClass('review__show--opened'); 
		}
		else {
			$detail.slideDown(500);
			$btn.text('Скрыть');
			$btn.addClass('review__show--opened'); 
		}
	});

	$('.nav__bar').on('click', function() {
		$('.search').removeClass('search--active');
		$('.popup--cart').removeClass('popup--open');

		$(this).toggleClass('nav__bar--open');

		$('.nav__body').toggleClass('nav__body--open');
		$('html').toggleClass('openMenu');
	});

	$('.popup').on('click', function(e) {
		let $wrapper = $(this);

		if ($wrapper.has(e.target).length === 0 ) {
			closePopup(e);
		}
	});

	$('.openPopup').on('click', function() {
		$('.popup').addClass('popup--open');
		$('html').addClass('openPopup');

		setTimeout(() => {
			$('.popup').css('opacity', 1);
		});
	});

	$('.closePopup').on('click', closePopup);

	$('.singleProduct__select').selectmenu();

	$('.singleProduct__slider').slick({
		slidesToShow: 1,
		arrows: false,
		dots: true,
		fade: true,
  		cssEase: 'linear',
		appendDots: '.singleProduct__dots'
	});

	$('.otherProduct__sliderBody').slick({
		slidesToShow: 5,
		arrows: true,
		prevArrow: '.otherProduct__control--prev',
		nextArrow: '.otherProduct__control--next',
		responsive: [
			{
				breakpoint: 1441,
				settings: {
					slidesToShow: 4
				}
			},
			{
				breakpoint: 1241,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 769,
				settings: {
					slidesToShow: 2
				}
			},
		]
	});

	$('.catalog__sliderBody').slick({
		slidesToShow: 2,
		arrows: true,
		prevArrow: '.catalog__sliderControl--prev',
		nextArrow: '.catalog__sliderControl--next',
	});

	$('.catalog__sortBtn').on('click', function() {
		if(clWidth <= 1024) {
			$('.catalog__filter').slideUp(400, function() {
				$('.catalog__sortBody').slideToggle(400);
			});
		}
		else {
			$('.catalog__sortBody').slideToggle(400);
		}
	});

	$('.catalog__filterBtn').on('click', function() {
		$('.catalog__sortBody').slideUp(400, function() {
			$('.catalog__filter').slideToggle(400);
		});
	});

	$('.filter__rangeSlider').slider({
		range: true,
		min: 0,
		max: 2000,
		values: ['150', '1650'],
		slide: function(event, ui) {
			$('.filter__rangeBodyMin').val(ui.values[0]);
			$('.filter__rangeBodyMax').val(ui.values[1]);
		}
	});

	$('.catalog__alertSlider').slick({
		slidesToShow: 1,
		arrows: true,
		prevArrow: '.catalog__alertControl--prev',
		nextArrow: '.catalog__alertControl--next',
		dots: true,
		appendDots: '.catalog__alertDots'
	});

	$('.openCart').on('click', function() {
		$('.popup--cart').addClass('popup--open');
		$('html').addClass('openPopup');

		$('.search').removeClass('search--active');
		$('.nav__bar').removeClass('nav__bar--open');
		$('.nav__body').removeClass('nav__body--open');

		setTimeout(() => {
			$('.popup--cart').css('opacity', 1);
		});
	});

	$('.openSearch').on('click', function() {
		$('.search').addClass('search--active');
		$('html').addClass('openPopup');

		$('.popup--cart').removeClass('popup--open');
		$('.nav__bar').removeClass('nav__bar--open');
		$('.nav__body').removeClass('nav__body--open');

		setTimeout(() => {
			$('.search').css('opacity', 1);
		});
	});

	$('.search').on('click', function(e) {
		let $wrapper = $(this);

		if ($wrapper.has(e.target).length === 0 ) {
			$('.search').removeClass('search--active');
			$('html').removeClass('openPopup');
		}
	});

	function closePopup() {
		$('.popup').css('opacity', 0);

		setTimeout(() => {
			$('html').removeClass('openPopup');
			$('.popup').removeClass('popup--open');
		}, 500);
	}

	function resetProgressLines() {
		$(`.offer__progressLine`).animate(
			{
				width: "0%",
			},
			{
				duration: 1
			}
		);
	}
});