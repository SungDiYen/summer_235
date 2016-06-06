$(function(){

	//randomImg();

	$('.slider').slick({
		dots: true,
		infinate: true,
		slidesToShow: 1,
		autoplay: false,
		//autoplaySpeed: 4500,
		fade: true,
		cssEase: 'linear',
		arrows: true,
		prevArrow: '<div class="box-arrow prev"><i class="icon"></i></div>',
		nextArrow: '<div class="box-arrow next"><i class="icon"></i></div>',
		adaptiveHeight: false,
		//onBeforeChange: function(){
		//	//$('.video-wrap').append('');
		//	console.log('ef')
		//},
	});

	$('.slider_village').slick({
		dots: 			false,
		infinate: 		true,
		slidesToShow: 	1,
		autoplay: 		true,
		autoplaySpeed:  4000,
		fade: 			true,
		cssEase: 		'linear',
		arrows: 		false,
		//adaptiveHeight: true
	});

	$('.slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
		console.log('ef');
		$('.gif-wrap').removeClass('active');
		$('.video-wrap iframe').remove();
	});


	$('[data-toggle="modal"]').click(function(){
		//$('#myModal').modal(option);
	})
	////function area////
	function randomImg(){
		var maxNum = 3,
			minNum = 1,
			w = Math.random();
			n = Math.floor( w*(maxNum - minNum +1))+minNum;

		var img_url = ['images/banner960X920.jpg', 'images/banner960X920-2.jpg', 'images/banner960X920-3.jpg'];

		switch(n) {
			case 1:
				$('#ramdomImg').children('img').attr('src', img_url[0]);
			break;

			case 2:
				$('#ramdomImg').children('img').attr('src', img_url[1]);
			break;

			case 3:
				$('#ramdomImg').children('img').attr('src', img_url[2]);
			break;
		}
		console.log(w,n)
	}
});