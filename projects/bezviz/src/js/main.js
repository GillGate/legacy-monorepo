$(function(){
	let clWidth = document.documentElement.clientWidth;

	$('.header__bar').on('click', function(e) {
		$(this).toggleClass('header__bar--open');
		$('html').toggleClass('openMenu');

		$('.header__mobileOrder').fadeToggle(300);
		$('.header__menu').fadeToggle(300);
	});

	$('.nav__link').not('.nav__link--nested').on('click', function(e) {
		$('.header__menu').fadeOut(300);
		$('.header__mobileOrder').fadeIn(300);
		$('.header__bar').removeClass('header__bar--open');
		$('html').removeClass('openMenu');
	});

	let currentDate = new Date();
	let currentDay = currentDate.getDate() < 10 ? `0${currentDate.getDate()}` : currentDate.getDate();

	let formatDate = `${currentDate.getFullYear()}-${currentDate.getMonth() + 1}-${currentDay}T${currentDate.getHours()}:${currentDate.getMinutes()}`

	const $datetime = $('input[name=order-date]')[0];

	if($datetime !== undefined) {
		$datetime.min = formatDate;
	}

	$('input[name=order-time]').on('change', function(e) {
		if(e.target.value === "Конкретное время") {
			$datetime.disabled = false;
		}
		else {
			$datetime.disabled = true;
			$datetime.value = "";
		}
	});

	if($('.reviews__item').length > 4) {
		$('.reviews__controls').addClass('reviews__controls--active');
		$('.reviews__item').addClass('reviews__item--slide');

		$('.reviews__slider').slick({
			slidesToShow: 4,
			prevArrow: '.reviews__control--prev',
			nextArrow: '.reviews__control--next',
			infinite: true,
			responsive: [
				{
			      breakpoint: 1025,
			      settings: {
			        slidesToShow: 3,
			      }
			    },
			    {
			      breakpoint: 769,
			      settings: {
			        slidesToShow: 2,
			      }
			    },
			    {
			      breakpoint: 591,
			      settings: {
			        slidesToShow: 1,
			        // autoplay: true
			      }
			    },
			]
		});
	}

	if(clWidth <= 590) {
		$('.services__list').slick({
			slidesToShow: 1,
			infinite: true,
			arrows: false,
			adaptiveHeight: true,
			autoplay: true
		});

		$('.team__slider').slick({
			slidesToShow: 1,
			infinite: true,
			arrows: false,
			autoplay: true
		});


		// $('.social__gallery').slick({
		// 	slidesToShow: 1,
		// 	infinite: true,
		// 	arrows: false,
		// 	autoplay: true
		// });
	}
	

	$('.form__submit').on('click', function(e) {
		let $submit = $(this);
		let $form   = $('.form');
		let $errors = $('.form__label');

		e.preventDefault();
       	
       	$submit.attr('disabled', true);

        $.ajax({
            url: `${THEME_ROOT}/php/contacts.php`,
            method: 'POST',
            data: $form.serialize(),
            dataType: 'json',
            timeout: 10000,
            success: onSuccess,
            error: function() {
                // alert('Error on sending request, please try later!');
            },
            complete: function() {
                $submit.attr('disabled', false);
            },
        });

        function onSuccess(data) {
            if(data.res) {
            	$('.form__input').removeClass('form__input--error');
            	$submit.text(data.lang === 'en' ? 'The application has been sent!' : 'Заявка отправлена!');
            	$submit.addClass('form__submit--done');
                $submit.attr('disabled', true);
                $form.reset();
            } else {
                $errors.attr('data-error', '');
                $('.form__input').removeClass('form__input--error');

                for( let name in data.errors) {
                    let target = $(`[name=${name}]`);
                    
                    if(target.length > 0){
                        target.closest($errors).attr('data-error', data.errors[name]);
                        target.addClass('form__input--error');
                    }
                }
            }
        }
    });
});