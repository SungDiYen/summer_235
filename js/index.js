$(function(){
	$('.slider').slick({
		dots: true,
		infinate: true,
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 4000,
		fade: true,
		cssEase: 'linear',
		arrows: true,
		prevArrow: '<div class="box-arrow prev"><i class="icon"></i></div>',
		nextArrow: '<div class="box-arrow next"><i class="icon"></i></div>',
		adaptiveHeight: true,
	});
});