<?php /* Smarty version Smarty3-RC3, created on 2015-09-13 17:22:16
         compiled from "C:/xampp/htdocs/uminohime/admin/\templates\ImpressionEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1484255f5404870f515-82355106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbafe1f350546bb354c760d699ea7ab05c8f6fc8' => 
    array (
      0 => 'C:/xampp/htdocs/uminohime/admin/\\templates\\ImpressionEdit.tpl',
      1 => 1442136132,
    ),
  ),
  'nocache_hash' => '1484255f5404870f515-82355106',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('header_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script type="text/javascript" src="include/ckeditor/ckeditor.js"></script>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('menu_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="page-wrapper">
    	<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>
</h3>
            <!--<ol class="breadcrumb">
              <li><a href="Main.php"><i class="fa fa-dashboard"></i> <?php echo $_smarty_tpl->getVariable('_MainTitleName')->value;?>
</a></li>
              <li class="active"><a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
"><i class="fa fa-edit"></i> <?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>
</a></li>
            </ol>-->
            
          </div>
        </div><!-- /.row -->
        <form name="FormEdit" id="FormEdit" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=editsave" method="post" onsubmit="FormCheck();return false;"  enctype="multipart/form-data">
        <div class="row">
          <div class="col-lg-12">
          
          	  <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php if ($_smarty_tpl->getVariable('ID')->value==''){?>新增<?php }else{ ?>編輯<?php }?><?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>

                        <div class="pull-right">
                        	
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                          
                          <div class="form-group">
                            <label>標題</label>
                            <input type="text" name="comment_title" id="comment_title" value="<?php echo $_smarty_tpl->getVariable('Data')->value['prod_comment_title'];?>
" class="form-control "/>
                          </div>
                          <div class="form-group">
                            <label>姓名</label>
                            <input type="text" name="comment_name" id="comment_name" value="<?php echo $_smarty_tpl->getVariable('Data')->value['prod_comment_name'];?>
" class="form-control "/>
                          </div>
                          <div class="form-group">
                            <label>年齡</label>
                            <input type="text" name="comment_age" id="comment_age" value="<?php echo $_smarty_tpl->getVariable('Data')->value['prod_comment_age'];?>
" class="form-control "/>
                          </div>
                          <div class="form-group">
                            <label>圖片上傳</label>
                            <?php if ($_smarty_tpl->getVariable('Data')->value['prod_comment_pic']!=''){?>
                            <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['prod_comment_pic'];?>
" target="_blank">
                                <img src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['prod_comment_pic'];?>
" width="150" ></img>
                            </a>
                            <?php }?>
                            <input type="file" name="comment_pic" id="comment_pic">
                            <?php if ($_smarty_tpl->getVariable('Data')->value['prod_comment_pic']!=''){?>
                            <input type="checkbox" name="pic_Del" value="*" />刪除
                            <input type="hidden" name="opic" value="<?php echo $_smarty_tpl->getVariable('Data')->value['prod_comment_pic'];?>
" />
                            <?php }?>
                            <br>
                            <span>※建議尺寸220*300</span>
                          </div>
                          <div class="form-group">
                            <label>引文</label>
                            <textarea name="comment_quotation" id="comment_quotation" class="form-control "><?php echo $_smarty_tpl->getVariable('Data')->value['prod_comment_quotation'];?>
</textarea>
                          </div>
                          <div class="form-group">
                            <label>內容</label>
                            <?php echo $_smarty_tpl->getVariable('FCK_content')->value;?>

                          </div>
                        
                          
                          <div class="form-group">
                            <label>是否顯示</label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['show_status']=="Y"||$_smarty_tpl->getVariable('Data')->value['comment_id']==''){?>checked<?php }?> >是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode2" value="N" <?php if ($_smarty_tpl->getVariable('Data')->value['show_status']=="N"){?>checked<?php }?> >否
                            </label>
                          </div>
            
                          <button type="submit" class="btn btn-success" >確認修改</button>
					</div>
                    <!-- /.panel-body -->
               </div>
               <!-- /.panel -->
			
          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['prod_comment_id'];?>
" />
        </form>
    </div>

<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
	$(document).ready(function () {
				
		$(".date_pick").datepick();
		
	});
	function FormCheck(){
		var errorMsg = "";
		
		
		if($("input[name='comment_title']").val()=="")
			errorMsg += "-請輸入標題\n";
		if($("input[name='comment_name']").val()=="")
			errorMsg += "-請輸入姓名\n";
		
		if(errorMsg==""){
			showLoading();
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
	
	function showLoading(){
		$("BODY").append(
			  '<div id="loadingDiv">'+
			  '<img src="images/loading51.gif">'+
			  '</div>');
			
			// IE6 Fix
			//var pos = ($.browser.msie && parseInt($.browser.version) <= 6 ) ? 'absolute' : 'fixed'; 
			var pos = "fixed";
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
</script>