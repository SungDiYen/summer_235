<?php /* Smarty version Smarty3-RC3, created on 2014-10-03 21:05:05
         compiled from "C:/xampp/htdocs/psoator/admin/\templates\MedicalEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39542e9f01d75ef6-74149323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67a6f5e0bce09eed762500206ab9fa7307bf56c5' => 
    array (
      0 => 'C:/xampp/htdocs/psoator/admin/\\templates\\MedicalEdit.tpl',
      1 => 1412341504,
    ),
  ),
  'nocache_hash' => '39542e9f01d75ef6-74149323',
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
                            <label>地區</label>
                            <select name="location" id="location" class="form-control">
                            	<option value="">請選擇</option>
                                <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_MedicalArea')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                                	<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</option>
                                <?php }} ?>
                            </select>
                          </div>	
                          <div class="form-group">
                            <label>醫師姓名</label>
                            <input type="text" name="drname" id="drname" value="<?php echo $_smarty_tpl->getVariable('Data')->value['medical_info_drname'];?>
" class="form-control "/>
                          </div>
                          <div class="form-group">
                            <label>醫療院所名稱</label>
                            <input type="text" name="hospital" id="hospital" value="<?php echo $_smarty_tpl->getVariable('Data')->value['medical_info_hospital'];?>
" class="form-control "/>
                          </div>     
                          <div class="form-group">
                            <label>連結</label>
                            <div class="form-group input-group">
                                <span class="input-group-addon">http://</span>
                                <input type="text" name="url" value="<?php echo $_smarty_tpl->getVariable('Data')->value['medical_info_url'];?>
" class="form-control"/>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label>連結開啟</label>
                            <select class="form-control" name="target" id="target">
                                <option value="_self" <?php if ($_smarty_tpl->getVariable('Data')->value['medical_info_target']=="_self"){?>selected<?php }?>>本頁開啟</option>
                                <option value="_blank" <?php if ($_smarty_tpl->getVariable('Data')->value['medical_info_target']=="_blank"){?>selected<?php }?>>另開視窗</option>
                            </select>
                          </div>     
                          <?php if ($_smarty_tpl->getVariable('_Type')->value=="SKIN"){?>
                          <div class="form-group">
                            <label>具備醫療設施
</label>
                            <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_MedicalEquip')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                            	<input type="checkbox" name="equip[]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->getVariable('sel_equip')->value)){?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>

                            <?php }} ?>
                          </div>               
                          <?php }?>
                          <div class="form-group">
                            <label>排序</label>
                            <input type="text" class="form-control" name="sortnum" id="sortnum" value="<?php echo $_smarty_tpl->getVariable('Data')->value['sortnum'];?>
" />
                          </div>
                            
                          <div class="form-group">
                            <label>是否顯示</label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['show_status']=="Y"||$_smarty_tpl->getVariable('Data')->value['medical_info_id']==''){?>checked<?php }?> >是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode2" value="N" <?php if ($_smarty_tpl->getVariable('Data')->value['show_status']=="N"){?>checked<?php }?> >否
                            </label>
                          </div>
            
                          <button type="submit" class="btn btn-success" >確認修改</button>
					</div>
                    <!-- /.panel-body -->
               </div>
               <!-- /.panel -->
			
          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['medical_info_id'];?>
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
		
		if($("select[name='location']").val()=="")
			errorMsg += "-請選擇地區\n";
		
		if($("input[name='drname']").val()=="")
			errorMsg += "-請輸入醫師姓名\n";
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>