$(document).ready(function(){	
	//header_btns
	$('#header_settings a').hover(function(){
			$(this).stop(true, true).animate({top:'5px'},350);
		},function(){
			$(this).stop(true, true).animate({top:'45px'},350);
	});
	
	//container_minheight
	var	minHeight = $(window).height()-101;
	$('#primary').css('min-height' , minHeight);
	$(window).resize(function(){
		minHeight = $(window).height()-101;
		$('#primary').css('min-height' , minHeight);
	});	
	
	//contral_width
	$("#contral_width_btn").toggle(function(){
			$(this).animate({left:'-13px'},500);
			$('#nav').hide(300);
			$('.examCreate_sec').hide(300);
			$('#primary').animate({width:'100%','margin-left':'0%'},500);
		},function(){
			$(this).animate({left:'217px'},500);
			$('#nav').show(500);
			$('.examCreate_sec').show(500);
			$('#primary').animate({width:'80%','margin-left':'20%'},500);
	});
	
	//nav
	$('.nav_list').click(function(){
		$('.nav_list').each(function(){
			$(this).next('.nav_box').slideUp(500);
			if($(this).find('span').hasClass('arrow_up')){
				$(this).find('span').toggleClass('arrow_down arrow_up');
			}
		});
		$(this).next('.nav_box').stop(true, true).slideToggle(500);
		$(this).find('span').toggleClass('arrow_down arrow_up');
	});
	//$('.nav_list').eq(0).click();	
	
	//position:absolute/fixed
	//1.examCreate_sec:
	if($(".examCreate_sec").length > 0){
		var examCreateSecP = $('.examCreate_sec'),
		    _top = examCreateSecP.offset().top;	
		var maxWindowH=$(window).height();
		var $win = $(window).scroll(function(){
					var contentH = examCreateSecP.height();
					//console.log(contentH);
					if($win.scrollTop() >= _top && contentH < maxWindowH){
						if(examCreateSecP.css('position')!='fixed'){
							examCreateSecP.css({position: 'fixed',top: 15});
						}
						if(examCreateSecP.offset().top+examCreateSecP.height() > $("#primary").height()+$("#header").height()){
							var addH = (examCreateSecP.offset().top+examCreateSecP.height()) - ($("#primary").height()+$("#header").height());
							var bottomH = parseInt($("#container").css("padding-bottom"))-addH;
							$("#primary").height($("#primary").height()+addH);
							$("#container").css({"padding-bottom":bottomH});
						}
					}else{
						examCreateSecP.css({position: 'absolute',top:0});
					}
				});	
	}
	//pri_tool
	if($(".pri_tool").length > 0){
		var priToolP = $('.pri_tool'),
		    _top = priToolP.offset().top;

		var toolR = $(window).width() - ($("#primary").offset().left + $("#primary").outerWidth()) + 10;

		var $win = $(window).scroll(function(){
				if($win.scrollTop() >= _top){
					if(priToolP.css('position')!='fixed'){
						priToolP.css({position: 'fixed',right:toolR});
					}
				}else{
					priToolP.css({position: 'absolute',right:'10px'});
				}
		});	
	}
	if($("#contral_width_btn").length > 0){
		var contralBtn = $('#contral_width_btn');
		var toolT = $(window).scrollTop() + ($(window).height()/2) - contralBtn.height();
		contralBtn.css({top:toolT});
		
		var $win = $(window).scroll(function(){
				
				toolT = $win.scrollTop() + ($win.height()/2) - contralBtn.height();
				
				if(contralBtn.css('position')!='fixed'){
					contralBtn.css({top:toolT});
				}
				
		});	
	}
	
	//openClose
	$('.openClose .box_title').click(function(){
		$('.openClose .box_title').each(function(){
			$(this).next('.box_edit').slideUp(500);
			if($(this).find('span').hasClass('arrow_btn_down')){
				$(this).find('span').toggleClass('arrow_btn_up arrow_btn_down');
			}
		});
		$(this).next('.box_edit').stop(true, true).slideToggle(500);
		$(this).find('span').toggleClass('arrow_btn_up arrow_btn_down');
	});
	$('.openClose .box_title').eq(0).click();
	
	//tab
	$('.tab > ul').tabs({
	});
	
	//tree_list
	$('.treeList .plus').click(function(){		
		$(this).toggleClass('minus plus').next().next('.treeList_box').find('ul').stop(true, true).toggle();
		if($(this).next().hasClass('folder_open') || $(this).next().hasClass('folder_close')){
			$(this).next().toggleClass('folder_open folder_close');
		}			
	});
	$('.treeList .folder_open').click(function(){		
		$(this).toggleClass('folder_open folder_close').prev().toggleClass('minus plus');
		$(this).next('.treeList_box').find('ul').toggle();			
	});
	$('.treeList').each(function(){
		$(this).find('.treeList_box').css('background', 'url(images/tree_list_box_bg.png) repeat-y').last().css('background', 'none');
	});
	$('.treeList_box ul').each(function(){
    $(this).find('li').eq(0).css('padding-top', '11px');
		$(this).find('li').css('background', 'url(images/treeList_bg.png) no-repeat left bottom').last().css('background', 'url(images/treeList_bg_last.png) no-repeat left bottom');
  });
	$('.treeList .allClose').click(function(){
		$('.treeList_box').find('ul').hide();
		$('.plus').removeClass().addClass('minus');
	});
	$('.treeList .allOpen').click(function(){
		$('.treeList_box').find('ul').show();
		$('.minus').removeClass().addClass('plus');
	});
	
	//test_paper_setting
	$('#exam_online').click(function(){
		$('#exam_online_setting').show();
	});
	$('#exam_word').click(function(){
		$('#exam_online_setting').hide();
		$('#contral_width_btn').css({top:'50%','margin-top':'-28px'});
	});
	
	//table_style
	$('.table_style').each(function(){
		$(this).find('tr:odd').addClass("table_gray_bg");
	});
	$('.table_style2').each(function(){
		$(this).find('tr:even').addClass("table_gray_bg");
		$(this).find('th').first().css('border-left','1px solid #147da5');
		$(this).find('th').last().css('border-right','1px solid #147da5');
	});	
	$('.examCreate_table tr').click(function(){
		$('.examCreate_table tr').find('td').removeClass('tr_hover');
		$(this).find('td').addClass('tr_hover');
	});
	
	$('.btn_area a').last().css('margin-left',0);	
		
});