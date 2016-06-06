<?php /* Smarty version Smarty3-RC3, created on 2015-09-16 22:33:02
         compiled from "C:/xampp/htdocs/uminohime/admin/\templates\ResearchEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2801155f97d9e2ee710-37674864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79e52b2140bdffe6245a20fa9ee357fc08c5a75b' => 
    array (
      0 => 'C:/xampp/htdocs/uminohime/admin/\\templates\\ResearchEdit.tpl',
      1 => 1442413974,
    ),
  ),
  'nocache_hash' => '2801155f97d9e2ee710-37674864',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('header_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script type="text/javascript" src="include/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="js/dropzone/dropzone.js"></script>
<link href="js/dropzone/dropzone.css" rel="stylesheet">
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
                    	<div class="col-lg-5">
                          <form name="FormEdit" id="FormEdit" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=editsave" method="post" onsubmit="FormCheck();return false;"  enctype="multipart/form-data">
                          <div class="form-group">
                            <label>標題</label>
                            <input type="text" name="research_info_title" id="research_info_title" value="<?php echo $_smarty_tpl->getVariable('Data')->value['research_info_title'];?>
" class="form-control "/>
                          </div>
                          <!--<div class="form-group">
                            <label>圖片上傳</label>
                            <?php if ($_smarty_tpl->getVariable('Data')->value['research_info_pic']!=''){?>
                            <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['research_info_pic'];?>
" target="_blank">
                                <img src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['research_info_pic'];?>
" width="150" ></img>
                            </a>
                            <?php }?>
                            <input type="file" name="research_info_pic" id="research_info_pic">
                            <?php if ($_smarty_tpl->getVariable('Data')->value['research_info_pic']!=''){?>
                            <input type="checkbox" name="pic_Del" value="*" />刪除
                            <input type="hidden" name="opic" value="<?php echo $_smarty_tpl->getVariable('Data')->value['research_info_pic'];?>
" />
                            <?php }?>
                            <br>
                            <span>※建議尺寸594*841</span>
                          </div>-->
                          <div class="form-group">
                            <label>內容</label>
                            <textarea name="research_info_content" id="research_info_content" class="form-control "><?php echo $_smarty_tpl->getVariable('Data')->value['research_info_content'];?>
</textarea>
                          </div>
                        
                          <div class="form-group">
                            <label>排序</label>
                            <input type="text" class="form-control" name="sortnum" id="sortnum" value="<?php echo $_smarty_tpl->getVariable('Data')->value['sortnum'];?>
" />
                          </div>
                          <div class="form-group">
                            <label>是否顯示</label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['show_status']=="Y"||$_smarty_tpl->getVariable('Data')->value['research_info_id']==''){?>checked<?php }?> >是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode2" value="N" <?php if ($_smarty_tpl->getVariable('Data')->value['show_status']=="N"){?>checked<?php }?> >否
                            </label>
                          </div>
            			  <input type="hidden" name="images" value="" />
                          <button type="submit" class="btn btn-success" >確認修改</button>
                          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['research_info_id'];?>
" />
        				  </form>
                    	</div>
                        <div class="col-lg-7">
                        	<h5 style="border-bottom: 1px solid #CCC ; padding-bottom:5px;">照片上傳 (※建議尺寸594*841)</h5>
                        	<form action="TitbitsUpload.php"class="dropzone"id="my-awesome-dropzone">
                            
                            	<?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('Photo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                                	<!--<div class="dz-preview dz-processing dz-success dz-image-preview">
                                        <div class="dz-details">
                                            <div class="dz-filename">
                                                <span data-dz-name=""><?php echo $_smarty_tpl->tpl_vars['obj']->value['titbits_photo_name'];?>
</span>
                                            </div>
                                            <div class="dz-size" data-dz-size="">
                                                <strong></strong> </div> <img data-dz-thumbnail="" alt="<?php echo $_smarty_tpl->tpl_vars['obj']->value['titbits_photo_name'];?>
" src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->tpl_vars['obj']->value['titbits_photo_name'];?>
"> 
                                            </div>
                                        <div class="dz-progress">
                                            <span class="dz-upload" data-dz-uploadprogress="" style="width: 100%;"></span>
                                        </div>
                                        <div class="dz-success-mark"><span>✔</span></div>
                                        <div class="dz-error-mark"><span>✘</span></div>
                                        <div class="dz-error-message"><span data-dz-errormessage=""></span></div>
                                        <a class="dz-remove" href="javascript:undefined;" data-dz-remove="">Remove file</a>
                                    </div>-->
                                <?php }} ?>
                            </form>
                        </div>  
					</div>
                    
                    <!-- /.panel-body -->
               </div>
               <!-- /.panel -->
			
          </div>
          
        </div><!-- /.row -->
        
    </div>

<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
	$(function() {
	    var myDropzone = new Dropzone("#my-awesome-dropzone");
	   <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('Photo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
		var mockFile = { name: "<?php echo $_smarty_tpl->tpl_vars['obj']->value['research_photo_name'];?>
", size: <?php echo $_smarty_tpl->tpl_vars['obj']->value['filesize'];?>
 };
		myDropzone.options.addedfile.call(myDropzone, mockFile);
		myDropzone.options.thumbnail.call(myDropzone, mockFile, "<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->tpl_vars['obj']->value['research_photo_name'];?>
");
		$(".dz-filename").eq(<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
).attr("dz-fileid",<?php echo $_smarty_tpl->tpl_vars['obj']->value['research_photo_id'];?>
);
	   <?php }} ?>
	})
	$(document).ready(function () {
				
		$(".date_pick").datepick();
		
	});
	function FormCheck(){
		var errorMsg = "";
		var images = new Array();
		
		$(".dz-filename").each(function(v){
			var filename = $(this).find("span").text();
			var fileId   = $(this).attr("dz-fileid");	
		
			images.push({ 'filename':filename,'fileId':fileId });
		});
		
		$("input[name='images']").val(JSON.stringify(images));
		if($("input[name='research_info_title']").val()=="")
			errorMsg += "-請輸入標題\n";
		
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