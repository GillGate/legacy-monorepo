$(function(){

	let $lang 	= $('body').data('lang');
	let clWidth = document.documentElement.clientWidth;
	let offset = window.pageYOffset;

	$('.header__bar').on('click', function() {
		$('.header').addClass('header--open');
		$('body').addClass('header-open');
	});

	$('.header__close, .nav__link').on('click', function() {
		$('.header').removeClass('header--open');
		$('body').removeClass('header-open');
	});

	$('.vakancy__reserve').on('click', function() {
		let $vakancyName = $(this).closest('.vakancy').data('name') ?? 'Не указано';
		$('input[name=contact-vakancy]').val($vakancyName);

		$('html, body').animate({
	    	scrollTop: $('#contact').offset().top
	    }, 1000, 'swing', function() {
	    	$('input[name=contact-name]').focus();
	    });
	});

	$('.vakancy__more').on('click', function() {
		let $btn = $(this);
		$btn.toggleClass('vakancy__more--show');
		$btn.closest('.vakancy__bodyTop').next().slideToggle(500);
	});

	$('.faq__itemTitle').on('click', function(e) {
		// if($(e.target)[0] === $(this).children('div')[0]) {
	    // 	return false;
	    // }
		$(this).toggleClass('faq__itemTitle--active').next().slideToggle(400);
	    // $('.faq__item').not(this).removeClass('faq__item--active').children('div').slideUp(400);
  	});

  	$('.scrollTo').on('click', function(e) {
	    e.preventDefault();

	    let target = $(this).attr('href');
	    $('html, body').animate({
	      scrollTop: $(target).offset().top
	    }, 700);
	});

	setTimeout(() => {
		$('.why__list').slick({
	  		slidesToShow: 3,
	  		prevArrow: '.why__control--prev',
	  		nextArrow: '.why__control--next',
	  		dots: true,
	  		appendDots: '.why__nav',
	  		responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 2,
					}
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
					}
				},
	  		]
	  	});

	  	$('.documents__list').slick({
	  		slidesToShow: 3,
	  		prevArrow: '.documents__control--prev',
			nextArrow: '.documents__control--next',
			dots: true,
			appendDots: '.documents__nav',
	  		responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 2,
					}
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
					}
				},
	  		]
	  	});

	  	$('.reviews__list').slick({
	  		slidesToShow: 3,
	  		prevArrow: '.reviews__control--prev',
	  		nextArrow: '.reviews__control--next',
	  		dots: true,
	  		appendDots: '.reviews__nav',
	  		responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 2,
					}
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
					}
				},
	  		]
	  	});

	  	$('.company__list').slick({
	  		slidesToShow: 6,
	  		arrows: false,
	  		responsive: [
				{
					breakpoint: 1240,
					settings: {
						slidesToShow: 5,
					}
				},
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 4,
					}
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 3,
					}
				},
				{
					breakpoint: 540,
					settings: {
						slidesToShow: 2,
					}
				},
	  		]
	  	});
	}, 0);

	  	

  	$('.visa__periodButton').on('click', function(e) {
  		let $btn = $(this);
  		let currentOption = $btn.data('option');

  		$('.visa__periodButton').removeClass('visa__periodButton--active');
  		$btn.addClass('visa__periodButton--active');

  		$('.visa__option').addClass('visa__option--hide');
  		$(`.visa__option[data-option=${currentOption}]`).removeClass('visa__option--hide');
  	});

	$('.review__preview').on('click', function() {
		let $item = $(this).closest('.review');
		let $link = $item.data('yt').split('/').pop();

		$item.addClass('review--playing').children('.review__video').html(`
			<iframe width="100%" height="188" src="https://www.youtube.com/embed/${$link}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		`);
	});

	$('.form__submit').on('click', function(e) {
		let $submit = $(this);
		let $form   = $('.form');
		let $errors = $('.form__label');

		e.preventDefault();
       	
       	$submit.attr('disabled', true);

        $.ajax({
            url: `${THEME_ROOT}/php/send-vakancy.php`,
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

            	let $lang = SITE_LANG;

				let link = '';

				if( $lang == 'ua' ) {
		        	link = 'http://prace.pokrov.cz/ua/thanks/';
		        } else if( $lang == 'en' ) {
		        	link = 'http://prace.pokrov.cz/en/thanks/';
		        } else if( $lang == 'cz' ) {
		        	link = 'http://prace.pokrov.cz/cz/thanks/';
		        } else {
		        	link = 'http://prace.pokrov.cz/thanks/';
		        }

				let a = document.createElement("a");
				a.setAttribute('href', link);
				a.click();
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