{include file=$header_page}
<script type="text/javascript" src="include/ckeditor/ckeditor.js"></script>
{include file=$menu_page}
	<div id="page-wrapper">
    	<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header">{$_SubTitleName}</h3>
            <!--<ol class="breadcrumb">
              <li><a href="Main.php"><i class="fa fa-dashboard"></i> {$_MainTitleName}</a></li>
              <li class="active"><a href="{$_FileName}"><i class="fa fa-edit"></i> {$_SubTitleName}</a></li>
            </ol>-->
            
          </div>
        </div><!-- /.row -->
        <form name="FormEdit" id="FormEdit" action="{$_FileName}?flag=editsave" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-lg-12">
          
          	  <div class="panel panel-default">
                    <div class="panel-heading">
                        {if $ID == ""}新增{else}編輯{/if}{$_SubTitleName}
                        <div class="pull-right">
                        	
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                          <div class="form-group">
                            <label>發佈日期</label>
                            <input type="text" name="blog_date" id="blog_date" value="{$Data.blog_date}" class="form-control date_pick"/>
                          </div>
                          <div class="form-group">
                            <label>標題</label>
                            <input type="text" name="blog_title" id="blog_title" value="{$Data.blog_title}" class="form-control "/>
                          </div>
                          <div class="form-group">
                            <label>圖片上傳</label>
                            {if $Data.blog_pic!=""}
                            <a href="{$uploadUrl}{$Data.blog_pic}" target="_blank">
                                <img src="{$uploadUrl}{$Data.blog_pic}" width="150" ></img>
                            </a>
                            {/if}
                            <input type="file" name="blog_pic" id="blog_pic">
                            {if $Data.blog_pic!=""}
                            <input type="checkbox" name="pic_Del" value="*" />刪除
                            <input type="hidden" name="opic" value="{$Data.blog_pic}" />
                            {/if}
                            <br>
                            <!--<span>※建議尺寸260*200</span>-->
                          </div>
                          <!--<div class="form-group">
                            <label>引文</label>
                            <textarea name="blog_quotation" id="blog_quotation" class="form-control ">{$Data.blog_quotation}</textarea>
                          </div>-->
                          <div class="form-group">
                            <label>內容</label>
                            {$FCK_content}
                          </div>
                        
                          
                          <div class="form-group">
                            <label>是否顯示</label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode1" value="Y" {if $Data.show_status=="Y" || $Data.blog_id==""}checked{/if} >是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode2" value="N" {if $Data.show_status=="N"}checked{/if} >否
                            </label>
                          </div>
            
                          <button type="button" onclick="FormCheck()" class="btn btn-success" >確認修改</button>
					</div>
                    <!-- /.panel-body -->
               </div>
               <!-- /.panel -->
			
          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="{$Data.blog_id}" />
        </form>
    </div>

{include file=$footer_page}
<script>
	$(document).ready(function () {
				
		$(".date_pick").datepick();
		
	});
	function FormCheck(){
		var errorMsg = "";
		
		if($("input[name='blog_date']").val()=="")
			errorMsg += "-請輸入發佈日期\n";
		
		if($("input[name='blog_title']").val()=="")
			errorMsg += "-請輸入標題\n";
		
		if(errorMsg==""){
			showLoading();
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
	
	
</script>