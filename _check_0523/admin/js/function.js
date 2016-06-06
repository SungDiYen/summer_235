//loading fun
function showLoading(){
	$("BODY").append(
		  '<div id="loadingDiv">'+
		  '<img src="images/loading51.gif">'+
		  '</div>');
		
		// IE6 Fix
		//var pos = ($.browser.msie && parseInt($.browser.version) <= 6 ) ? 'absolute' : 'fixed'; 
		var pos = 'fixed';
		$("#loadingDiv").css({
			position: pos,
			zIndex: 99999
		});
		
		$("BODY").append('<div id="popup_overlay"></div>');
		$("#popup_overlay").css({
			position: 'absolute',
			zIndex: 99998,
			top: '0px',
			left: '0px',
			width: '100%',
			height: $(document).height(),
			background: '#000',
			opacity: 0.4
		});
		
		var top = ($(window).height() / 2)-62;
		var left = ($(window).width() / 2)-62;
		if( top < 0 ) top = 0;
		if( left < 0 ) left = 0;
		
		// IE6 fix
		//if( $.browser.msie && parseInt($.browser.version) <= 6 ) top = top + $(window).scrollTop();
		
		$("#loadingDiv").css({
			top: top + 'px',
			left: left + 'px'
		});
		$("#popup_overlay").height( $(document).height() );

}

function closeLoading(){
	$("#popup_overlay").remove();
	$("#loadingDiv").remove();
}

//file upload
function ajaxFileUpload(fid,fdir,maxnum,inputName,divId){
	if(document.getElementsByName(inputName)){
		num=document.getElementsByName(inputName).length;
	}else{
		num=0;
	}
	if(num<maxnum){
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
		})
		.ajaxComplete(function(){
			$(this).hide();
		});
		$.ajaxFileUpload
		(
			{
				url:'fileupload.php',
				secureuri:false,
				fileElementId:fid,
				folder:fdir,
				dataType: 'json',
				success: function (data, status)
				{
					if(typeof(data.error) != 'undefined')
					{
						if(data.error != '')
						{
							alert(data.error);
						}else
						{
							//alert(data.msg);
							FileAccess(data.filename,fdir,maxnum,num,inputName,divId);
						}
					}
				},
				error: function (data, status, e)
				{
					alert(e);
				}
			}
		)
	}else{
	    alert("照片上傳已達最大數，請先刪除不需要的照片。");
	}
	return false;

}
function FileAccess(filename,fdir,maxnum,num,inputName,divId){
	
	    idname=num+1;
		idname=inputName+'D'+idname;
		
		if(maxnum>1){
			filestr=document.getElementById(divId).innerHTML;
			filestr=filestr+"<div id='"+idname+"' style='width:80px;float:left'><img src='"+fdir+filename+"' width='100'>";
			filestr=filestr+"<input type='hidden' id='"+inputName+"' name='"+inputName+"[]' value='"+filename+"'>";
			filestr=filestr+"<input type='hidden' id='"+inputName+"ID' name='"+inputName+"ID[]' value=''>";
			filestr=filestr+"<input type='hidden' id='"+inputName+"Path' name='"+inputName+"Path[]' value='"+fdir+"'>";
			filestr=filestr+"<br><input type='button' name='delB' value='刪除' onclick='FileDel(\""+idname+"\",\""+fdir+filename+"\")'></div>";
		}else{
			filestr="<div id='"+idname+"' style='width:80px;float:left'><img src='"+fdir+filename+"' width='100'>";
			filestr=filestr+"<input type='hidden' id='"+inputName+"' name='"+inputName+"' value='"+filename+"'>";
			filestr=filestr+"<input type='hidden' id='"+inputName+"ID' name='"+inputName+"ID' value=''>";
			filestr=filestr+"<input type='hidden' id='"+inputName+"Path' name='"+inputName+"Path' value='"+fdir+"'>";
			filestr=filestr+"<br><input type='button' name='delB' value='刪除' onclick='FileDel(\""+idname+"\",\""+fdir+filename+"\")'></div>";
		}
		//document.getElementById('filelist').innerHTML=filestr;
		//alert(filestr);
		document.getElementById(divId).innerHTML=filestr;
	
}
function FileDel(idname,picpath){

	 elem=document.getElementById(idname);
     elem.parentNode.removeChild(elem);
	 //window.open('/FUNWEB/admin/include/fileDel.php?file='+picpath,'fdel','width=10,height=10');

}