<?php /* Smarty version Smarty3-RC3, created on 2014-05-24 23:46:40
         compiled from "C:/AppServ/www/kttline/admin/\templates\ConfigEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154435380bee08d4129-48679114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37765e02e01956d5055e37f9a2dc4f9273416672' => 
    array (
      0 => 'C:/AppServ/www/kttline/admin/\\templates\\ConfigEdit.tpl',
      1 => 1400946377,
    ),
  ),
  'nocache_hash' => '154435380bee08d4129-48679114',
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
            <h1>編輯<?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>
</h1>
            <ol class="breadcrumb">
              <li><a href="Main.php"><i class="fa fa-dashboard"></i> <?php echo $_smarty_tpl->getVariable('_MainTitleName')->value;?>
</a></li>
              <li class="active"><a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
"><i class="fa fa-edit"></i> <?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>
</a></li>
            </ol>
            
          </div>
        </div><!-- /.row -->
        <form name="FormEdit" id="FormEdit" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=editsave" method="post" onsubmit="FormCheck();return false;"  enctype="multipart/form-data">
        <div class="row">
          <div class="col-lg-12">
			
              <div class="form-group">
                <label>EMAIL</label>
                <input type="text" name="val[]"  value="<?php echo $_smarty_tpl->getVariable('Data')->value['email']['value'];?>
" class="form-control"/>
                <input type="hidden" name="ids[]" value="<?php echo $_smarty_tpl->getVariable('Data')->value['email']['id'];?>
" />
              </div>
              <div class="form-group">
                <label>聯絡電話</label>
                <input type="text" name="val[]"  value="<?php echo $_smarty_tpl->getVariable('Data')->value['tel']['value'];?>
" class="form-control"/>
                <input type="hidden" name="ids[]" value="<?php echo $_smarty_tpl->getVariable('Data')->value['tel']['id'];?>
" />
              </div>
              <div class="form-group">
                <label>傳真</label>
                <input type="text" name="val[]"  value="<?php echo $_smarty_tpl->getVariable('Data')->value['fax']['value'];?>
" class="form-control"/>
                <input type="hidden" name="ids[]" value="<?php echo $_smarty_tpl->getVariable('Data')->value['fax']['id'];?>
" />
              </div>
			  <div class="form-group">
                <label>地址</label>
                <input type="text" name="val[]"  value="<?php echo $_smarty_tpl->getVariable('Data')->value['address']['value'];?>
" class="form-control"/>
                <input type="hidden" name="ids[]" value="<?php echo $_smarty_tpl->getVariable('Data')->value['address']['id'];?>
" />
              </div>
              <div class="form-group">
                <label>簡介</label>
                <textarea type="text" name="val[]" class="form-control"/><?php echo $_smarty_tpl->getVariable('Data')->value['intro']['value'];?>
</textarea>
                <input type="hidden" name="ids[]" value="<?php echo $_smarty_tpl->getVariable('Data')->value['intro']['id'];?>
" />
              </div>
             

              <button type="submit" class="btn btn-success" onclick="FormCheck()">確認修改</button>

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