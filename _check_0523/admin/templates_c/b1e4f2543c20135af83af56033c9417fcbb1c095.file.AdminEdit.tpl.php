<?php /* Smarty version Smarty3-RC3, created on 2014-04-27 20:46:46
         compiled from "C:/AppServ/www/kttline/admin/\templates\AdminEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47535cfc36f20469-76804527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1e4f2543c20135af83af56033c9417fcbb1c095' => 
    array (
      0 => 'C:/AppServ/www/kttline/admin/\\templates\\AdminEdit.tpl',
      1 => 1397901376,
    ),
  ),
  'nocache_hash' => '47535cfc36f20469-76804527',
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
            <h1><?php if ($_smarty_tpl->getVariable('ID')->value==''){?>新增<?php }else{ ?>編輯<?php }?><?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>
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
        <form name="FormEdit" id="FormEdit" method="post" action="<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=editsave">
        <div class="row">
          <div class="col-lg-12">

              <div class="form-group">
                <label>帳號</label>
                <?php if ($_smarty_tpl->getVariable('ID')->value==''){?>
                <input type="text" name="uid" value="" class="form-control" />
                <?php }else{ ?>
                <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['uid'];?>
</p>
                
                <?php }?>
              </div>

              <div class="form-group">
                <label>密碼</label>
                <input type="password" name="passwd" value="<?php echo $_smarty_tpl->getVariable('Data')->value['passwd'];?>
" class="form-control"/>
              </div>
			  
              <div class="form-group">
                <label>姓名</label>
                <input type="text" name="name" value="<?php echo $_smarty_tpl->getVariable('Data')->value['name'];?>
" class="form-control"/>
              </div>
              
              <div class="form-group">
                <label>權限設定</label>
                <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('menuData')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                    <p class="form-control-static"><i class="fa fa-folder-open fa-fw"></i><?php echo $_smarty_tpl->tpl_vars['obj']->value['menu_name'];?>
</p>
                    <?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['obj']->value['submenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value){
?>
                        <input type="checkbox" name="auth[]" id="auth[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['sysmenu_id'];?>
" <?php if ($_smarty_tpl->getVariable('auth')->value[$_smarty_tpl->tpl_vars['sub']->value['sysmenu_id']]=='Y'){?>checked<?php }?> />
                        <?php echo $_smarty_tpl->tpl_vars['sub']->value['menu_name'];?>

                        <?php echo $_smarty_tpl->getVariable('authData')->value[$_smarty_tpl->tpl_vars['sub']->value['serno']];?>

                    <?php }} ?>
                    <br><br>
                <?php }} ?>
              </div>
             

              <button type="submit" class="btn btn-success" onclick="FormCheck()">確認修改</button>

          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('ID')->value;?>
" />
        </form>
    </div>

<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
	function FormCheck(){
		var errorMsg = "";
		<?php if ($_smarty_tpl->getVariable('ID')->value==''){?>
			if($("input[name='uid']").val()=="")
				errorMsg += "-請輸入帳號\n";
		<?php }?>
		
		if($("input[name='passwd']").val()=="")
			errorMsg += "-請輸入密碼\n";
		
		if($("input[name='name']").val()=="")
			errorMsg += "-請輸姓名";
			
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>