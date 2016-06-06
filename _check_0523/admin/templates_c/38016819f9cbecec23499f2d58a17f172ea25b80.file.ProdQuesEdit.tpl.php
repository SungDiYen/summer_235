<?php /* Smarty version Smarty3-RC3, created on 2014-08-30 20:21:52
         compiled from "C:/xampp/htdocs/sakima/admin/\templates\ProdQuesEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110355401c1e0b15e09-76808850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38016819f9cbecec23499f2d58a17f172ea25b80' => 
    array (
      0 => 'C:/xampp/htdocs/sakima/admin/\\templates\\ProdQuesEdit.tpl',
      1 => 1409401304,
    ),
  ),
  'nocache_hash' => '110355401c1e0b15e09-76808850',
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
                            <label>商品編號</label>
                            <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['product_no'];?>
</p>
                          </div>
                          <div class="form-group">
                            <label>商品名稱</label>
                            <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['product_name'];?>
</p>
                          </div>
                          <div class="form-group">
                            <label>問題</label>
                            <p class="form-control-static"><?php echo nl2br($_smarty_tpl->getVariable('Data')->value['question_content']);?>
</p>
                          </div>
                          
                          <div class="form-group">
                            <label>回覆</label>
                            <textarea class="form-control-static" name="reply" id="reply" cols="50" rows="4"><?php echo $_smarty_tpl->getVariable('Data')->value['question_reply'];?>
</textarea>
                          </div>
                            
                          <div class="form-group">
                            <label>是否顯示</label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['show_mode']=="Y"||$_smarty_tpl->getVariable('Data')->value['question_id']==''){?>checked<?php }?> >是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode2" value="N" <?php if ($_smarty_tpl->getVariable('Data')->value['show_mode']=="N"){?>checked<?php }?> >否
                            </label>
                          </div>
            
                          <button type="submit" class="btn btn-success" onclick="FormCheck()">確認修改</button>

                    
                    </div>
              </div>
              
          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['question_id'];?>
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
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>