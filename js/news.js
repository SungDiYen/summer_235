$('.news_box').click(function(event) {
	var nid = $(this).attr("data-nid");
	$.ajax({
		type:"POST",
		url:"news_content.php",
		data:{"id":nid},
		dataType:"html",
		success:function(ret){
			$(".popup-box").html(ret);
		},
		error:function(xhr){
			  console.log(xhr.responseText);
			  // alert('ajax error.');
		}
	});
	
	$('body').addClass('body-lock');
	$('.news_popup').addClass('active');


});
$('.close-btn, .popup_escape').click(function(event) {
		$('.news_popup').removeClass('active');
		$('body').removeClass('body-lock');
});


$(document).on('click', '.close-btn, .popup_escape', function(event){
    $('.news_popup').removeClass('active');
	$('body').removeClass('body-lock');
});
