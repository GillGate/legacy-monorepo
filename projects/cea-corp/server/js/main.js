$(function(){
	let clWidth = document.documentElement.clientWidth;
	let offset = window.pageYOffset;

	let $slider 		= $('.slider');
	let $lettersSlider  = $('.letters__list');
	let $partnersSlider = $('.partners');
	let $gallerySlider 	= $('.gallery__list');
	let $prevBtn 		= $('.slider__btn--prev');
	let $nextBtn 	 	= $('.slider__btn--next');

	$lettersSlider.slick({
		slidesToShow: 3,
		prevArrow: $prevBtn,
		nextArrow: $nextBtn,
		infinite: false,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2,
					autoplay: true
				}
			},
			{
				breakpoint: 540,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	$partnersSlider.slick({
		slidesToShow: 6,
		arrows: false,
		autoplay: true,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 540,
				settings: {
					slidesToShow: 2,
					autoplay: true
				}
			}
		]
	});

	$gallerySlider.slick({
		slidesToShow: 2,
		prevArrow: $prevBtn,
		nextArrow: $nextBtn,
		infinite: false,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
					autoplay: true
				}
			}
		]
	});

	$('.reviews__slider').slick({
		slidesToShow: 1,
		arrows: false,
		autoplay: true
	});

	$slider.on('afterChange', function(sl, cs) {
		let $activeFirstIndex = $slider.find('.slick-active').first().data('slick-index');
		let $activeLastIndex = $slider.find('.slick-active').last().data('slick-index');

		if($activeFirstIndex !== 0) {
			$prevBtn.prop('disabled', false);
		} else {
			$prevBtn.prop('disabled', true);
		}

		console.log($activeFirstIndex, $activeLastIndex, cs.slideCount);

		if($activeLastIndex + 1 == cs.slideCount) {
			$nextBtn.prop('disabled', true);
		} else {
			$nextBtn.prop('disabled', false);
		}
	});

	$('.letters__item').fancybox();

	$('.header__bar, .header__close').on('click', toggleMenu);

	function toggleMenu() {
		$('.header__navBlock').toggleClass('header__navBlock--open');
		$('body').toggleClass('openedMenu');
	}

	function checkOffset() {
		offset = window.pageYOffset;
		let $head = $('.header__head');

		if (offset > 550) {
		  $('body').css('marginTop', '67px');
		  $head.addClass('header__head--fixed');
		} else {
		  $('body').css('marginTop', '0px');
		  $head.removeClass('header__head--fixed');
		}
	}

	if(clWidth <= 768) {
		checkOffset();

		$(window).on('scroll', function() {
			checkOffset();
		});
	}

	function checkAgreeForm() {
		let $btn = $('.form__btn');

		if($('#form_agree').is(':checked')) {
			$btn.prop('disabled', false);
		} else {
			$btn.prop('disabled', true);
		}
	}

	checkAgreeForm();

	$('#form_agree').on('change', checkAgreeForm);

	function onSuccess(data) {
		let $errors = $('.form__label[data-error]');
		let $form 	= $('.form');
		let $result = $('.form__result');

        if(data.res) {
        	$('.form__label').removeClass('form__label--wrong');
        	$form.slideUp(300);
            $result.show().html('Přihláška odeslána!');
        } else {
            $errors.attr('data-error', '');
            $('.form__label').removeClass('form__label--wrong');

            for( let name in data.errors) {
                let target = $(`[name=${name}]`);
                
                if(target.length > 0){
                    target.closest($errors).attr('data-error', data.errors[name]);
                    target.parent().addClass('form__label--wrong');
                }
            }
        }
    }

	$('.coopetation__btn').on('click', function() {
		let $submit = $(this);
		let $form   = $(this).closest('.cooperation__form');
		let $path   = $form.data('src');
       	$submit.attr('disabled', true);

       	if($('#form_agree').is(':checked')) {
       		$.ajax({
	            url: `${$path}/feedback/form-coopetation.php`,
	            method: 'POST',
	            data: $form.serialize(),
	            dataType: 'json',
	            timeout: 10000,
	            success: onSuccess,
	            error: function() {

	            },
	            complete: function() {
	                $submit.attr('disabled', false);
	            },
	        });
       	}
    });

    $('.orderCall__btn').on('click', function() {
		let $submit = $(this);
		let $form   = $(this).closest('.orderCall__form');
		let $path   = $form.data('src');
       	$submit.attr('disabled', true);

       	if($('#form_agree').is(':checked')) {
       		$.ajax({
	            url: `${$path}/feedback/form-orderCall.php`,
	            method: 'POST',
	            data: $form.serialize(),
	            dataType: 'json',
	            timeout: 10000,
	            success: onSuccess,
	            error: function() {

	            },
	            complete: function() {
	                $submit.attr('disabled', false);
	            },
	        });
       	}
    });

     $('.careerChange__btn').on('click', function() {
		let $submit = $(this);
		let $form   = $(this).closest('.careerChange__form');
		let $path   = $form.data('src');
       	$submit.attr('disabled', true);

       	if($('#form_agree').is(':checked')) {
       		$.ajax({
	            url: `${$path}/feedback/form-careerChange.php`,
	            method: 'POST',
	            data: $form.serialize(),
	            dataType: 'json',
	            timeout: 10000,
	            success: onSuccess,
	            error: function() {

	            },
	            complete: function() {
	                $submit.attr('disabled', false);
	            },
	        });
       	}
    });
});