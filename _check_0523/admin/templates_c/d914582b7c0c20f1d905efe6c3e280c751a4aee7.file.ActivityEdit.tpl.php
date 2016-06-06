<?php /* Smarty version Smarty3-RC3, created on 2014-09-27 22:45:42
         compiled from "C:/xampp/htdocs/psoator/admin/\templates\ActivityEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16595426cd96898414-69928571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd914582b7c0c20f1d905efe6c3e280c751a4aee7' => 
    array (
      0 => 'C:/xampp/htdocs/psoator/admin/\\templates\\ActivityEdit.tpl',
      1 => 1411829139,
    ),
  ),
  'nocache_hash' => '16595426cd96898414-69928571',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('header_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('menu_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="page-wrapper">
    	<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>
</h3>
            
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
                            <div class="form-group">
                                <input type="text" name="title" value="<?php echo $_smarty_tpl->getVariable('Data')->value['activity_title'];?>
" class="form-control"/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>副標題</label>
                            <div class="form-group">
                                <input type="text" name="subtitle" value="<?php echo $_smarty_tpl->getVariable('Data')->value['activity_subtitle'];?>
" class="form-control"/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>活動日期</label>
                            <div class="form-group">
                                <input type="text" name="activity_date" value="<?php echo $_smarty_tpl->getVariable('Data')->value['activity_date'];?>
" class="form-control date_pick"/>
                            </div>
                          </div>
                      
                          <div class="form-group">
                            <label>圖片上傳</label>
                            <?php if ($_smarty_tpl->getVariable('Data')->value['activity_pic']!=''){?>
                            <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['activity_pic'];?>
" target="_blank">
                                <img src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['activity_pic'];?>
" width="150" ></img>
                            </a>
                            <?php }?>
                            <input type="file" name="activity_pic" id="activity_pic">
                            <?php if ($_smarty_tpl->getVariable('Data')->value['activity_pic']!=''){?>
                            <input type="checkbox" name="pic_Del" value="*" />刪除
                            <input type="hidden" name="opic" value="<?php echo $_smarty_tpl->getVariable('Data')->value['activity_pic'];?>
" />
                            <?php }?>
                          </div>
                          <div class="form-group">
                            <label>內容</label>
                            <?php echo $_smarty_tpl->getVariable('FCK_content')->value;?>

                          </div>  
                          <div class="form-group">
                            <label>是否顯示</label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['show_status']=="Y"||$_smarty_tpl->getVariable('Data')->value['activity_id']==''){?>checked<?php }?> >是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode2" value="N" <?php if ($_smarty_tpl->getVariable('Data')->value['show_status']=="N"){?>checked<?php }?> >否
                            </label>
                          </div>
            
                          <button type="submit" class="btn btn-success" onclick="FormCheck()">確認修改</button>      
					</div>
                    <!-- /.panel-body -->
               </div>
               <!-- /.panel -->
              

          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['activity_id'];?>
" />
        <input type="hidden" name="pos" value="<?php echo $_smarty_tpl->getVariable('_POS')->value;?>
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

		if($("input[name='title']").val()=="")
			errorMsg += "-請輸入標題\n";
		if($("input[name='activity_date']").val()=="")
			errorMsg += "-請輸入活動日期\n";
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>