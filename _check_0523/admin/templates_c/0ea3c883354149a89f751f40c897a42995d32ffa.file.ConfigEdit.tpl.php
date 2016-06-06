<?php /* Smarty version Smarty3-RC3, created on 2014-09-28 13:03:53
         compiled from "C:/xampp/htdocs/psoator/admin/\templates\ConfigEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1162542796b948d543-04010724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ea3c883354149a89f751f40c897a42995d32ffa' => 
    array (
      0 => 'C:/xampp/htdocs/psoator/admin/\\templates\\ConfigEdit.tpl',
      1 => 1411880612,
    ),
  ),
  'nocache_hash' => '1162542796b948d543-04010724',
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
                            <label>網站標題</label>
                            <input type="text" name="val[]"  value="<?php echo $_smarty_tpl->getVariable('Data')->value['title']['value'];?>
" class="form-control"/>
                            <input type="hidden" name="ids[]" value="<?php echo $_smarty_tpl->getVariable('Data')->value['title']['id'];?>
" />
                          </div>
                          <div class="form-group">
                            <label>關鍵字</label>
                            <textarea type="text" name="val[]" class="form-control"/><?php echo $_smarty_tpl->getVariable('Data')->value['keyword']['value'];?>
</textarea>
                            <input type="hidden" name="ids[]" value="<?php echo $_smarty_tpl->getVariable('Data')->value['keyword']['id'];?>
" />
                          </div>
                          <div class="form-group">
                            <label>描述</label>
                            <textarea type="text" name="val[]" class="form-control"/><?php echo $_smarty_tpl->getVariable('Data')->value['description']['value'];?>
</textarea>
                            <input type="hidden" name="ids[]" value="<?php echo $_smarty_tpl->getVariable('Data')->value['description']['id'];?>
" />
                          </div>
                          <div class="form-group">
                            <label>EMAIL</label>
                            <input type="text" name="val[]"  value="<?php echo $_smarty_tpl->getVariable('Data')->value['email']['value'];?>
" class="form-control"/>
                            <input type="hidden" name="ids[]" value="<?php echo $_smarty_tpl->getVariable('Data')->value['email']['id'];?>
" />
                          </div>
            
                          <button type="submit" class="btn btn-success">確認修改</button>
					</div>
                    <!-- /.panel-body -->
               </div>
               <!-- /.panel -->
              

          </div>
          
        </div><!-- /.row -->

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