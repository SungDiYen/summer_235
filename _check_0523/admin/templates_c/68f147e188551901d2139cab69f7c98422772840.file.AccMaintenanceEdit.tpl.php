<?php /* Smarty version Smarty3-RC3, created on 2013-10-24 21:33:25
         compiled from "C:/AppServ/www/hair_finance/\templates\AccMaintenanceEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12384526921a527b492-34070659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68f147e188551901d2139cab69f7c98422772840' => 
    array (
      0 => 'C:/AppServ/www/hair_finance/\\templates\\AccMaintenanceEdit.tpl',
      1 => 1382612270,
    ),
  ),
  'nocache_hash' => '12384526921a527b492-34070659',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('header_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<style>
#class_import_table td,#class_import_table th{
	padding:3px 3px;
}
</style>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('menu_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <div id="primary">
      <a id="contral_width_btn" class="pngbg" href="javascript:void(0)"></a>
      <div class="title_link"> <a href="main.php">返回首頁</a> / <a href="javascript:void(0)"><?php echo $_smarty_tpl->getVariable('_MainTitleName')->value;?>
</a> / <a href="javascript:void(0)" class="here"><?php echo $_smarty_tpl->getVariable('_SubTitle_Name')->value;?>
</a></div>
      <div class="pri_cont">
            <div class="btn_area">
            	<a href="javascript:history.go(-1)" >返回上一頁</a>
            </div>
            <div class="box">
            	<form name="AccForm" id="AccForm" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=batchedit_save" method="post">
                <input type="hidden" name="AccType" value="Maintenance" />
            	<div class="box_title">
				    新增維修費      
                    <input type="button" value="新增" onclick="AccBacthRecord('add','maintenance','')" class="input_btn" />         
                </div>
                <table id="class_import_table" class="table_style" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                    <th>訂單編號</th>
                    <th>訂單日期</th>
                    <th>客戶名稱</th>
                    <th>入帳日期</th>
                    <th>入帳金額</th>
                    <th>入帳方式</th>
                    <th>收款資訊</th>
                    <th width="50px">刪除</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr align="center">
                    <td><input type="text" name="order_no[]" value="" size="10" onblur="SearchOrData(this)" /></td>
                    <td><span data-row="orderdate"></span></td>
                    <td><span data-row="cusname"></span><input type="hidden" name="cusname[]" value="" /></td>
                    <td><input type="text" name="enterdate[]" class="inputDate" value="" size="10" /></td>
                    <td><input type="text" name="money[]" value="" size="10" /></td>
                    <td>
                        <select name="payment[]">
                            <option value="">請選擇</option>
                            <?php  $_smarty_tpl->tpl_vars['pobj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PaytypeList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['PaytypeList']['index']=-1;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['pobj']->key => $_smarty_tpl->tpl_vars['pobj']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['PaytypeList']['index']++;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['pobj']->value['config_name'];?>
" <?php if ($_smarty_tpl->tpl_vars['pobj']->value['config_name']==$_smarty_tpl->getVariable('obj')->value['acc_payment']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['pobj']->value['config_name'];?>
</option>
                            <?php }} ?>
                        </select>
                    </td>
                    <td><input type="text" name="payinfo[]" value="" style="width:120px" onblur="AccBacthRecord('add','maintenance','')" /></td>
                    <td>
                    	<input type="hidden" name="bill_id[]" value="" />
                        <a href="javascript:AccBacthRecord('delete','',$('.acc_del').index($(this)))" class="acc_del"><img src="images/icon_delete.png"  /></a>
                    </td>
                  </tr>
                  </tbody>
                </table>
				<div class="btn_area" style="margin-top:10px">
                    <a href="javascript:FormCheck();">儲存</a>
                </div>
                </form>
            </div>
      </div><!--pri_cont -->          	
    </div><!--primary --> 
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
	var Payment = new Array();
	<?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PaytypeList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['PaytypeList']['index']=-1;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['PaytypeList']['index']++;
?>
		Payment[<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['PaytypeList']['index'];?>
] = '<?php echo $_smarty_tpl->tpl_vars['obj']->value['config_name'];?>
';
	<?php }} ?>
	$(document).ready(function(){
		$(".inputDate").datepick();
	});
	
	function FormCheck(){
		var errMsg = "";
		if($("input[name='order_no[]']:last").val()=="" && $("input[name='money[]']:last").val()=="" && $("input[name='enterdate[]']:last").val()=="" && $("input[name='payment[]']:last").val()=="" && $("input[name='payinfo[]']:last").val()==""){
			$("#class_import_table tr:last").remove();
		}
		$("input[name='order_no[]']").each(function(idx){
			 if($(this).val()==""){
			 	errMsg = "請輸入訂單編號";
				return false;
			 }
			 if($("input[name='money[]']").eq(idx).val()==""){
			 	errMsg = "請輸入入帳金額";
				return false;
			 }
		});
		
		if(errMsg==""){
			document.AccForm.submit();
		}else{
			alert(errMsg);
		}
	}
</script>