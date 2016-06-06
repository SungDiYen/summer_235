<?php /* Smarty version Smarty3-RC3, created on 2014-04-21 17:04:17
         compiled from "C:/wamp/www/bearTest/dac/admin/\templates\MemberEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70955354df113346a9-05368301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '442a1112fe523fe8f85f4e4a3f855916bb007f27' => 
    array (
      0 => 'C:/wamp/www/bearTest/dac/admin/\\templates\\MemberEdit.tpl',
      1 => 1397977832,
    ),
  ),
  'nocache_hash' => '70955354df113346a9-05368301',
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
                <label>帳號</label>
                <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['member_uid'];?>
</p>
              </div>
              
              <div class="form-group">
                <label>姓名</label>
                <input type="text" name="member_name" id="member_name" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_name'];?>
" class="form-control "/>
              </div>
              
              <div class="form-group">
                <label>密碼</label>
                <input type="text" name="member_password" id="member_password" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_password'];?>
" class="form-control "/>
              </div>
              <div class="form-group">
                <label>身份證字號</label>
                <input type="text" name="member_idno" id="member_idno" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_idno'];?>
" class="form-control "/>
              </div>
              <div class="form-group">
                <label>手機號碼</label>
                <input type="text" name="member_mobile" id="member_mobile" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_mobile'];?>
" class="form-control "/>
              </div>
              <div class="form-group">
                <label>公司電話</label>
                <input type="text" name="member_tel" id="member_tel" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_tel'];?>
" class="form-control "/>
              </div>
              <div class="form-group">
                <label>國家</label>
                <input type="text" name="member_location" id="member_location" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_location'];?>
" class="form-control "/>
              </div>
              <div class="form-group">
                <label>郵遞區號</label>
                <input type="text" class="form-control" name="member_zip" id="member_zip" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_zip'];?>
" />
              </div>
             	
              <div class="form-group">
                <label>城市</label>
                <input type="text" class="form-control" name="member_city" id="member_city" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_city'];?>
" />
              </div>
              
              <div class="form-group">
                <label>職稱</label>
                <input type="text" class="form-control" name="member_job" id="member_job" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_job'];?>
" />
              </div>
              
              <div class="form-group">
                <label>部門</label>
                <input type="text" class="form-control" name="member_department" id="member_department" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_department'];?>
" />
              </div>
              
              <div class="form-group">
                <label>公司名稱</label>
                <input type="text" class="form-control" name="member_company" id="member_company" value="<?php echo $_smarty_tpl->getVariable('Data')->value['membercompany'];?>
" />
              </div>
              
              <div class="form-group">
                <label>詢問或需求</label>
                <input type="text" class="form-control" name="member_question" id="member_question" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_question'];?>
" />
              </div>
              
              <div class="form-group">
                <label>註銷</label>
                	<select class="form-control" name="member_status" id="member_status" >
                   		<?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('MebStatus')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                        	<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->getVariable('Data')->value['member_status']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</option>
                        <?php }} ?>
                    </select>
              </div>

              <button type="submit" class="btn btn-success" onclick="FormCheck()">確認修改</button>

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

		if($("input[name='news_date']").val()=="")
			errorMsg += "-請輸入發佈日期\n";
		
		if($("input[name='news_title']").val()=="")
			errorMsg += "-請輸入標題\n";
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>