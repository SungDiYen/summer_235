<?php /* Smarty version Smarty3-RC3, created on 2014-08-31 14:50:08
         compiled from "C:/xampp/htdocs/sakima/admin/\templates\MemberEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157815402c5a0d40a61-28410710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8d4c7c3beadbf2201c79a098993d1d9da8ec006' => 
    array (
      0 => 'C:/xampp/htdocs/sakima/admin/\\templates\\MemberEdit.tpl',
      1 => 1409467383,
    ),
  ),
  'nocache_hash' => '157815402c5a0d40a61-28410710',
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
?flag=editsave" method="post"  enctype="multipart/form-data">
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
                            <label>帳號</label>
                            <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['member_email'];?>
</p>
                          </div>
                          
                          <div class="form-group">
                            <label>姓名</label>
                            <input type="text" name="member_name" id="member_name" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_name'];?>
" class="form-control "/>
                          </div>
                          
                          <div class="form-group">
                            <label>密碼</label>
                            <input type="text" name="member_passwd" id="member_passwd" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_passwd'];?>
" class="form-control "/>
                          </div>
                          
                          <div class="form-group">
                            <label>性別</label>
                            <input type="radio" name="member_sex" id="member_sex1" value="male" <?php if ($_smarty_tpl->getVariable('Data')->value['member_sex']=="male"){?>checked<?php }?>/>男
                            <input type="radio" name="member_sex" id="member_sex2" value="female" <?php if ($_smarty_tpl->getVariable('Data')->value['member_sex']=="female"){?>checked<?php }?>/>女
                          </div>
                          <div class="form-group">
                            <label>聯絡電話</label>
                            <input type="text" name="member_tel" id="member_tel" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_tel'];?>
" class="form-control "/>
                          </div>
                          <div class="form-group">
                            <label>生日</label>
                            <input type="text" name="member_birthday" id="member_birthday" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_birthday'];?>
" class="form-control "/>
                          </div>
                          <div class="form-group">
                            <label>會員等級</label>
                            <select name="member_grade" id="member_grade" class="form-control ">
                            	<?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_MebGrade')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                            		<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->getVariable('Data')->value['member_grade']==$_smarty_tpl->tpl_vars['key']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['obj']->value['title'];?>
</option>
                                <?php }} ?>
                            </select>
                          </div>
                          <button type="submit" class="btn btn-success">確認修改</button>
                    </div>
              </div>      
              

          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_id'];?>
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

		if($("input[name='member_name']").val()=="")
			errorMsg += "-請輸入姓名\n";
		
		if($("input[name='member_passwd']").val()=="")
			errorMsg += "-請輸入密碼\n";
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>