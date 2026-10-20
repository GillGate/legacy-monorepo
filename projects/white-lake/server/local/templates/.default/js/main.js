$(function () {
	let clWidth = document.documentElement.clientWidth;
	let startDate = new Date();

	if (clWidth > 720) {
		//$('.intro__slider').resizeSlider({
		//	"image":{
		//		"presentacion":{
		//			"landscape":{
		//				"url"      : "url(../img/main/intro-bg-1.jpg)",
		//				"size"     : "cover",
		//				"repeat"   : "no-repeat",
		//				"position" : "center top",
		//				"title"    : "Тестовый Заголовок",
		//				"subtitle" : "Тестовый ПодЗаголовок",
		//				"description": "Рыба Текст 1"
		//			},
		//			"portrait":{
		//				"url"      : "url(../img/main/intro-bg-1.jpg)",
		//				"size"     : "cover",
		//				"repeat"   : "no-repeat",
		//				"position" : "right center",
		//				"title"    : "Тестовый Заголовок",
		//				"subtitle" : "Тестовый ПодЗаголовок",
		//				"description": "Рыба Текст 2"
		//			}
		//		},
		//		"presentacion 1":{
		//			"landscape":{
		//				"url"      : "url(../img/main/intro-bg-2.jpg)",
		//				"size"     : "cover",
		//				"repeat"   : "no-repeat",
		//				"position" : "center bottom",
		//				"title"    : "Тестовый Заголовок 2",
		//				"subtitle" : "Тестовый ПодЗаголовок 2",
		//				"description": "Рыба Текст 3"
		//			},
		//			"portrait":{
		//				"url"      : "url(../img/main/intro-bg-2.jpg)",
		//				"size"     : "cover",
		//				"repeat"   : "no-repeat",
		//				"position" : "left center",
		//				"title"    : "Тестовый Заголовок 2",
		//				"subtitle" : "Тестовый ПодЗаголовок 2",
		//				"description": "Рыба Текст 4"
		//			}
		//		}
		//	}
		//});
	} else {

		$('.section__list--prom').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			adaptiveHeight: true,
			appendDots: '.section__dots--prom'
		});

		$('.section__list--category').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			rows: 2,
			dots: true,
			adaptiveHeight: true,
			appendDots: '.section__dots--category'
		});

		$('.section__list--service').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			rows: 2,
			dots: true,
			adaptiveHeight: true,
			appendDots: '.section__dots--service'
		});

		$('.gallery__wrapper--slider').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			adaptiveHeight: true,
			appendDots: '.section__dots--gallery'
		});

		$('.section__list--news').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			adaptiveHeight: true,
			appendDots: '.section__dots--news'
		});

		$('.section__list--social').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			rows: 2,
			dots: true,
			adaptiveHeight: true,
			appendDots: '.section__dots--social'
		});
	}

	$('.header__function--menuMain').on('click', function () {
		$(this).toggleClass('header__function--menu_open');

		$('.header__nav--main').toggleClass('header__nav--open');
	});

	$('.header__function--menuFixed').on('click', function () {
		$(this).toggleClass('header__function--menu_open');

		$('.header__nav--fixed').toggleClass('header__nav--open').toggleClass('header__nav--openFixed');
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

	$('.about__expand').on('click', function () {
		let $btn = $(this);
		$btn.toggleClass('page__expand--expanded').prev().slideToggle();

		if ($btn.hasClass('page__expand--expanded')) {
			$btn.text('Свернуть');
		} else {
			$btn.text('Развернуть для чтения');
		}
	});

	$('.page__expand--healing').on('click', function () {
		let $btn = $(this);
		$btn.toggleClass('page__expand--expanded').closest('.page__box').find('.text').slideToggle();

		if ($btn.hasClass('page__expand--expanded')) {
			$btn.text('Свернуть');
		} else {
			$btn.text('Развернуть для чтения');
		}
	});

	$('.estimate__open').on('click', function () {
		$('.estimate__form').slideDown().addClass('estimate__form--active');
		$(this).hide();
	});

	$('.page__openPopup').on('click', function (e) {
		$('.page__popup').removeClass('page__popup--active');

		$popup = $(this).children();
		$popup.toggleClass('page__popup--active');
	});

	$(document).on('click', function (e) {
		if (!$(e.target).closest(".page__openPopup").length) {
			$('.page__popup').removeClass('page__popup--active');
		}
		e.stopPropagation();
	});

	$('.header__function--location').on('click', function () {
		$popup = $('.header__functionPopup');

		$popup.toggleClass('header__functionPopup--active');
		$('body').addClass('body--popupOpen');

		$popup.on('click', function (e) {
			if (!$(e.target).closest(".header__functionPopupWrapper").length) {
				$popup.removeClass('header__functionPopup--active');
				$('body').removeClass('body--popupOpen');
			}
			e.stopPropagation();
		});
	});

	$('.header__functionPopupElem--location').on('click', function (e) {
		$('.header__functionPopup').removeClass('header__functionPopup--active');
		$('body').removeClass('body--popupOpen');

		if ($('.header__functionElem--location').hasClass('header__functionElem--external')) {
			e.preventDefault();
		}
		let target = $(this).attr('href');

		$('html, body').animate({
			scrollTop: $(target).offset().top
		}, 1000);
	});

	let offset = window.pageYOffset;

	function checkOffset() {
		offset = window.pageYOffset;
		let header = $('.header--fixed');

		if (offset > 650) {
			header.addClass('header--fixedOn');
		} else {
			header.removeClass('header--fixedOn');
		}
	}

	$(window).on('scroll', checkOffset);

	checkOffset();

	$('#reviewSubmit').on('click', function(e) {
		let $submit = $(this);
		let $form   = $('.estimate__form--about');
		let $result = $('.estimate__result');
      
       $submit.attr('disabled', true);

		e.preventDefault();

        $.ajax({
            url: `/local/templates/.default/feedback/add_review.php`,
            method: 'POST',
            data: $form.serialize(),
            dataType: 'json',
            timeout: 10000,
            success: onSuccess,
            error: function() {
                // $result.html('Превышено ожидание ответа от сервера...');
            },
            complete: function() {
                $submit.attr('disabled', false);
            },
        });

        function onSuccess(data) {
            if(data.res) {
                $result.html('Ваш отзыв успешно отправлен!').removeClass('estimate__result--error').addClass('estimate__result--done');
				$submit.slideUp(300);
            } else {
                $result.html(data.errors[0]).addClass('estimate__result--error');
            }
        }
    });

	$('#recourseSubmit').on('click', function(e) {
		let $submit = $(this);
		let $form   = $('.estimate__form--contacts');
		let $result = $('.estimate__result');
      
       $submit.attr('disabled', true);

		e.preventDefault();

        $.ajax({
            url: `/local/templates/.default/feedback/add_recourse.php`,
            method: 'POST',
            data: $form.serialize(),
            dataType: 'json',
            timeout: 10000,
            success: onSuccess,
            error: function() {
                // $result.html('Превышено ожидание ответа от сервера...');
            },
            complete: function() {
                $submit.attr('disabled', false);
            },
        });

        function onSuccess(data) {
            if(data.res) {
                $result.html('Ваше обращение успешно отправлено!').removeClass('estimate__result--error').addClass('estimate__result--done');
				$submit.slideUp(300);
            } else {
                $result.html(data.errors[0]).addClass('estimate__result--error');
            }
        }
    });

	$('#anketaSubmit').on('click', function(e) {
		let $submit = $(this);
		let $form   = $('.anketa__form');
		let $result = $('.estimate__result');
      
       $submit.attr('disabled', true);

		e.preventDefault();

        $.ajax({
            url: `/local/templates/.default/feedback/add_anketa.php`,
            method: 'POST',
            data: $form.serialize(),
            dataType: 'json',
            timeout: 10000,
            success: onSuccess,
            error: function() {
                // $result.html('Превышено ожидание ответа от сервера...');
            },
            complete: function() {
                $submit.attr('disabled', false);
            },
        });

        function onSuccess(data) {
            if(data.res) {
                $result.html('Ваша анкета успешно отправлена!').removeClass('estimate__result--error').addClass('estimate__result--done');
				$submit.slideUp(300);
            } else {
                $result.html(data.errors[0]).addClass('estimate__result--error');
            }
        }
    });

	$('textarea[name=short_desc]').on('input', function() {
		let $inputLength = $(this).val().length;
		$('.estimate__counter--short_desc span').text(255 - $inputLength);
	});

	$('textarea[name=desc]').on('input', function() {
		let $inputLength = $(this).val().length;
		$('.estimate__counter--desc span').text(1500 - $inputLength);
	});

	$('.header__function--weakeye').on('click', function() {
		$body = $('body');
		$text = $(this).find('.header__functionText');

		if($body.hasClass('weakeye--first')) {
			$body.removeClass('weakeye--first').addClass('weakeye--second');
			localStorage.setItem('weakeye', 'second');
		} else if($body.hasClass('weakeye--second')) {
			$body.removeClass('weakeye--second').addClass('weakeye--third');
			localStorage.setItem('weakeye', 'third');
		} else if($body.hasClass('weakeye--third')) {
			$body.removeClass('weakeye--third').addClass('weakeye--fourth');
			localStorage.setItem('weakeye', 'fourth');
			$text.html('Обычная <br> версия');
		} else if ($body.hasClass('weakeye--fourth')){
			$body.removeClass('weakeye--fourth').removeClass('weakeye');
			localStorage.removeItem('weakeye');
			$text.html('Версия для <br>слабовидящих');
		} else {
			$body.addClass('weakeye').addClass('weakeye--first');
			$text.html('Следующая <br> версия');
			localStorage.setItem('weakeye', 'first');
		}
	});

	if(localStorage.weakeye !== undefined) {
		$('body').addClass('weakeye').addClass(`weakeye--${localStorage.weakeye}`);
		$('.header__function--weakeye').find('.header__functionText').html('Следующая <br> версия');
	} else {
		$body.removeClass('weakeye');
	}

});

// Reservation

function paramSelection(selector, data_param) {
	$('.' + selector).focus(function () {
		window[data_param] = $(this).attr(data_param)
	});
};