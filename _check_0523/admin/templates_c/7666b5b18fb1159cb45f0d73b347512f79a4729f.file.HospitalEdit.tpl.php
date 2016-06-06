<?php /* Smarty version Smarty3-RC3, created on 2014-05-11 17:40:14
         compiled from "C:/AppServ/www/kttline/admin/\templates\HospitalEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15148536f457e051e14-83310320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7666b5b18fb1159cb45f0d73b347512f79a4729f' => 
    array (
      0 => 'C:/AppServ/www/kttline/admin/\\templates\\HospitalEdit.tpl',
      1 => 1399801029,
    ),
  ),
  'nocache_hash' => '15148536f457e051e14-83310320',
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
        <form name="FormEdit" id="FormEdit" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=editsave" method="post" onsubmit="FormCheck();return false;"  enctype="multipart/form-data">
        <div class="row">
          <div class="col-lg-12">
			  <div class="form-group">
                <label>院所統一編號</label>
                <?php echo $_smarty_tpl->getVariable('Data')->value['hospitalid'];?>

              </div>
              <div class="form-group">
                <label>院所名稱</label>
                
                <input type="text" name="name" value="<?php echo $_smarty_tpl->getVariable('Data')->value['name'];?>
" class="form-control"/>
              </div>
              <div class="form-group">
                <label>登入密碼</label>
                
                <input type="password" name="passwd" value="<?php echo $_smarty_tpl->getVariable('Data')->value['passwd'];?>
" class="form-control"/>
              </div>
			  <div class="form-group">
                <label>聯絡人員</label>
                <input type="text" name="contact" id="contact" value="<?php echo $_smarty_tpl->getVariable('Data')->value['contact'];?>
" class="form-control"/>
              </div>
              <div class="form-group">
                <label>院所地址</label>
                <input type="text" name="address" id="address" value="<?php echo $_smarty_tpl->getVariable('Data')->value['addr'];?>
" class="form-control"/>
              </div>
              <div class="form-group">
                <label>聯絡電話</label>
                <input type="text" name="tel" id="tel" value="<?php echo $_smarty_tpl->getVariable('Data')->value['tel'];?>
" class="form-control"/>
              </div>
              <div class="form-group">
                <label>傳真號碼</label>
                <input type="text" name="fax" id="fax" value="<?php echo $_smarty_tpl->getVariable('Data')->value['fax'];?>
" class="form-control"/>
              </div>
              
              <div class="form-group">
                <label>院所網址</label>
                <div class="form-group input-group">
                    <span class="input-group-addon">http://</span>
                    <input type="text" name="url" value="<?php echo $_smarty_tpl->getVariable('Data')->value['url'];?>
" class="form-control"/>
                </div>
              </div>
			  
              <div class="form-group">
                <label>院所簡介</label>
                <?php if ($_smarty_tpl->getVariable('Data')->value['descdoc']!=''){?>
                <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['descdoc'];?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('Data')->value['descdoc'];?>
</a>
                <?php }?>
              </div>
              <div class="form-group">
                <label>執業執照</label>
                <?php if ($_smarty_tpl->getVariable('Data')->value['lincense']!=''){?>
                <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['lincense'];?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('Data')->value['lincense'];?>
</a>
                <?php }?>
              </div>
            
             	
              <div class="form-group">
                <label>狀態</label>
                <select name="status" id="status">
                	<?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_MebStatus')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                    	<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->getVariable('Data')->value['meb_status']==$_smarty_tpl->tpl_vars['key']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</option>
                    <?php }} ?>
                </select>
              </div>

              <button type="submit" class="btn btn-success" onclick="FormCheck()">確認修改</button>

          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['serno'];?>
" />
        </form>
    </div>

<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
	function FormCheck(){
		var errorMsg = "";
		
		if($("input[name='name']").val()=="")
			errorMsg += "-請輸入院所名稱\n";
		
		if($("input[name='passwd']").val()=="")
			errorMsg += "-請輸入密碼\n";
			
		if($("input[name='contact']").val()=="")
			errorMsg += "-請輸入聯絡人\n";

		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>