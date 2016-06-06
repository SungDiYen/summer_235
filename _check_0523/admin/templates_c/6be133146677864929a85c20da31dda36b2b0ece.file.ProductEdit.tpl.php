<?php /* Smarty version Smarty3-RC3, created on 2016-01-12 21:24:22
         compiled from "C:/xampp/htdocs/tekkonjp/admin/\templates\ProductEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:267605694fe866e63e4-09776008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6be133146677864929a85c20da31dda36b2b0ece' => 
    array (
      0 => 'C:/xampp/htdocs/tekkonjp/admin/\\templates\\ProductEdit.tpl',
      1 => 1448984101,
    ),
  ),
  'nocache_hash' => '267605694fe866e63e4-09776008',
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
                    	<div class="col-lg-12">
                          <form name="FormEdit" id="FormEdit" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=editsave" method="post"  enctype="multipart/form-data">
                          <div class="form-group">
                            <label>作品名稱</label>
                            <input type="text" name="product_name" id="product_name" value="<?php echo $_smarty_tpl->getVariable('Data')->value['product_name'];?>
" class="form-control "/>
                          </div>
                        
                          <div class="form-group">
                            <label>排序</label>
                            <input type="text" class="form-control" name="sortnum" id="sortnum" value="<?php echo $_smarty_tpl->getVariable('Data')->value['sortnum'];?>
" />
                          </div>
                          <div class="form-group">
                            <label>是否顯示</label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['show_status']=="Y"||$_smarty_tpl->getVariable('Data')->value['product_id']==''){?>checked<?php }?> >是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode2" value="N" <?php if ($_smarty_tpl->getVariable('Data')->value['show_status']=="N"){?>checked<?php }?> >否
                            </label>
                          </div>
            			  <input type="hidden" name="images" value="" />
                          <!--<button type="submit" class="btn btn-success" >確認修改</button>-->
                          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['product_id'];?>
" />
        				  </form>
                    	</div>
                        <div class="col-lg-12">
                        	<h5 style="border-bottom: 1px solid #CCC ; padding-bottom:5px;">照片上傳 (※建議尺寸500*500)</h5>
                        	<form action="TitbitsUpload.php"class="dropzone"id="my-awesome-dropzone">
                            
                            </form>
                        </div> 
                        <div class="col-lg-12">
                        <button type="button" onclick="FormCheck()" class="btn btn-success" >確認修改</button>
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
		var mockFile = { name: "<?php echo $_smarty_tpl->tpl_vars['obj']->value['product_pic_name'];?>
", size: <?php echo $_smarty_tpl->tpl_vars['obj']->value['filesize'];?>
 };
		myDropzone.options.addedfile.call(myDropzone, mockFile);
		myDropzone.options.thumbnail.call(myDropzone, mockFile, "<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->tpl_vars['obj']->value['product_pic_name'];?>
");
		$(".dz-filename").eq(<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
).attr("dz-fileid",<?php echo $_smarty_tpl->tpl_vars['obj']->value['product_pic_id'];?>
);
		$("input[name='title[]']").eq(<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
).val('<?php echo $_smarty_tpl->tpl_vars['obj']->value['product_pic_title'];?>
');
		$("textarea[name='desc[]']").eq(<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
).val('<?php echo $_smarty_tpl->tpl_vars['obj']->value['product_pic_desc'];?>
');
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
			var title    = $("input[name='title[]']").eq(v).val();
			var desc     = $("textarea[name='desc[]']").eq(v).val();
		
			images.push({ 'filename':filename,'fileId':fileId,'title':title,'desc':desc });
		});
		$("input[name='images']").val(JSON.stringify(images));
		if($("input[name='product_name']").val()=="")
			errorMsg += "-請輸入標題\n";
		
		if(errorMsg==""){
			showLoading();
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
	
</script>