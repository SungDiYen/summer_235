$('.news_box').click(function(event) {
	$('body').addClass('body-lock');
	$('.news_popup').addClass('active');


});
$('.close-btn').click(function(event) {
		$('.news_popup').removeClass('active');
		$('body').removeClass('body-lock');
	});