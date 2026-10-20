$(function(){
	let clWidth = document.documentElement.clientWidth;

	let $links = $('.navLink');

	$links.on('click', function(e) {
		let target = $(this).attr('href');
		// only #anchors are smooth-scrolled; page links navigate natively
		if (!/^#./.test(target)) return;
		e.preventDefault();

		$('html').animate({
			scrollTop: $(target).offset().top
		}, 700);
	});

	$('.header__bar').on('click', function() {
		$(this).toggleClass('header__bar--open');

		$('.header__navBody').toggle(300);
	});

	$('.events__slider').slick({
		slidesToShow: 3,
		// autoplay: true,
		arrows: false,
		dots: true,
		appendDots: '.events__dots',
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
			}
		]
	});

	$('.sucess__slider').slick({
		slidesToShow: 1,
		arrows: false,
		autoplay: true,
		fade: true,
		dots: true,
		appendDots: '.sucess__dots',
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
					arrows: false,
					autoplay: true,
					fade: true,
					dots: true,
					appendDots: '.sucess__dots',
					adaptiveHeight: true,
				}
			},
		]
	});

	if(clWidth <= 540) {
		$('.leaders__list').slick({
			slidesToShow: 2,
			arrows: false,
			dots: true,
			appendDots: '.leaders__dots'
		})
	}

	let $brandsSingle = $('.brands__single');
	// let $brandsList = $('.brands__list');

	$brandsSingle.slick({
		slidesToShow: 1,
		arrows: false,
		fade: true,
		swipe: false,
		adaptiveHeight: true,
	});

	$('.brands__item:first').addClass('brands__item--active');

	$('.brands__item').on('click', function() {
		let $currentItem = $(this);
		let $index = $currentItem.data('slider-index');

		$('.brands__item').removeClass('brands__item--active');
		$currentItem.addClass('brands__item--active');

		$brandsSingle.slick('slickGoTo', $index);
	});

	$('.partners__list').slick({
		slidesToShow: 2,
		prevArrow: '.partners__control--prev',
		nextArrow: '.partners__control--next',
		dots: true,
		appendDots: '.partners__dots',
		responsive: [
			{
				breakpoint: 760,
				settings: {
					slidesToShow: 1,
					arrows: false
				}
			},
		]
	});

	if(clWidth <= 768) {
		$('.team__leaders').slick({
			slidesToShow: 3,
			dots: true,
			appendDots: '.team__dots',
			arrows: false,
			responsive: [
				{
					breakpoint: 540,
					settings: {
						slidesToShow: 2,
						dots: true,
						appendDots: '.team__dots'
					}
				},
			]
		});

		$('.leader__otherList').slick({
			slidesToShow: 3,
			dots: true,
			appendDots: '.leader__otherDots',
			arrows: false,
			responsive: [
				{
					breakpoint: 540,
					settings: {
						slidesToShow: 2,
						dots: true,
						appendDots: '.leader__otherDots'
					}
				},
			]
		});
	}

	const $singleProductSlider = $('.singleProduct__slider');
	$singleProductSlider.slick({
		slidesToShow: 1,
		arrows: false,
		asNavFor: '.singleProduct__gallery'
	});

	$('.singleProduct__gallery').slick({
		slidesToShow: 3,
		arrows: false,
		swipe: false,
		asNavFor: '.singleProduct__slider',
		centerMode: true,
		centerPadding: '0px'
	});

	$('.singleProduct__galleryItem').on('click', function() {
		let $index = $(this).data('slickIndex');

		$singleProductSlider.slick('slickGoTo', $index);
	});

	$('.otherProducts__sliderBody').slick({
		slidesToShow: 2,
		prevArrow: '.otherProducts__control--prev',
		nextArrow: '.otherProducts__control--next',
		responsive: [
			{
				breakpoint: 760,
				settings: {
					slidesToShow: 2,
					arrows: false,
					dots: true,
					appendDots: '.otherProducts__dots'
				}
			},
		]
	});

	$('.filter__sort select').on('change', function(e) {
		$('.filter__hiddenSort').val($(this).val());
		$('.filter__form').submit();
	});

	$('.filter__form').on('submit', function(e) {
		let path = (window.location.href).split('?')[0];
		path = path.replace(/\/page\/[2-9]\//, '/page/1/');

		let formData = new FormData(document.forms[0]);
		let search = new URLSearchParams(formData);
		let query = search.toString();
		
		e.preventDefault();
		
		window.location.replace(`${path}?${query}`);
	});

	$('.cert').slick({
		slidesToShow: 4,
		arrows: false,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					autoplay: true
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					autoplay: true
				}
			},
			{
				breakpoint: 540,
				settings: {
					slidesToShow: 1,
					autoplay: true
				}
			},
		]
	});

	const certItemNodes = Array.from($('.prodCert__item'));

	$('.prodCert__input').on('input', function(e) {
		let $closeBtn = $('.prodCert__close');
		let $notFound = $('.prodCert__notFound');
		let inputValue = e.target.value.trim().toLowerCase();

		let filteredNodes;

		if(inputValue.length > 0) {
			filteredNodes = certItemNodes.filter((node) => 
				node.innerText.trim().toLowerCase().includes(inputValue)
			);

			$closeBtn.addClass('prodCert__close--active');

			if(filteredNodes.length === 0) {
				$notFound.addClass('prodCert__notFound--active');
			}
			else {
				$notFound.removeClass('prodCert__notFound--active');
			}
		}
		else {
			filteredNodes = certItemNodes;

			$closeBtn.removeClass('prodCert__close--active');
		}

		document.querySelector('.prodCert__list').replaceChildren();
		filteredNodes.forEach(node => $('.prodCert__list').append(node));
	});

	$('.prodCert__close').on('click', function(e) {
		e.preventDefault();
		
		$('.prodCert__input').val("");
		$('.prodCert__close').removeClass('prodCert__close--active');

		document.querySelector('.prodCert__list').replaceChildren();
		certItemNodes.forEach(node => $('.prodCert__list').append(node));
	});
});