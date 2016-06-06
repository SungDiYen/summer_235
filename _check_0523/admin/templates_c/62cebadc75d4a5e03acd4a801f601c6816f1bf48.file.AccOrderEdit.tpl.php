<?php /* Smarty version Smarty3-RC3, created on 2013-10-24 18:53:57
         compiled from "C:/AppServ/www/hair_finance/\templates\AccOrderEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:220015268fc45aa8f37-00798274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62cebadc75d4a5e03acd4a801f601c6816f1bf48' => 
    array (
      0 => 'C:/AppServ/www/hair_finance/\\templates\\AccOrderEdit.tpl',
      1 => 1382610633,
    ),
  ),
  'nocache_hash' => '220015268fc45aa8f37-00798274',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>美髮網帳管系統</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/pages.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
<script type="text/javascript" src="js/ui.core.js"></script>
<script type="text/javascript" src="js/ui.tabs.js"></script>
<script type="text/javascript" src="js/web.js"></script>
<script type="text/javascript" src="js/area.js"></script>
<script type="text/javascript" src="js/function.js"></script>
</head>

<body>
<div>
<div id="content">
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
	</script>
	<form name="AccOrderEdit" id="AccOrderEdit" method="post">
    					
						<input type="hidden" name="bid" value="<?php echo $_smarty_tpl->getVariable('Data')->value['serno'];?>
" />
                        <h6>訂單編輯</h6>
                        <table width="100%">
                            <tr>
                                <th>出貨日期：</th>
                                <td><input type="text" name="dispatch_date" value="<?php echo $_smarty_tpl->getVariable('Data')->value['dispatch_date'];?>
" class="inputDate" /></td>
                                <th>貨單編號：</th>
                                <td><input type="text" name="bill_no" value="<?php echo $_smarty_tpl->getVariable('Data')->value['bill_no'];?>
" /></td>
                                <th>銷售部門：</th>
                                <td>
                                    <select name="sales_department">
                                    	<option value="">請選擇</option>
                                        <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('department')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                                            <?php  $_smarty_tpl->tpl_vars['cobj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['ckey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['obj']->value['channel']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cobj']->key => $_smarty_tpl->tpl_vars['cobj']->value){
 $_smarty_tpl->tpl_vars['ckey']->value = $_smarty_tpl->tpl_vars['cobj']->key;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['ckey']->value;?>
" <?php if ($_smarty_tpl->getVariable('Data')->value['department_id']+":"+$_smarty_tpl->getVariable('Data')->value['channel_id']==$_smarty_tpl->tpl_vars['key']->value+":"+$_smarty_tpl->tpl_vars['ckey']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['obj']->value['name'];?>
:<?php echo $_smarty_tpl->tpl_vars['cobj']->value;?>
</option>
                                            <?php }} ?>
                                        <?php }} ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>備註：</th>
                                <td colspan="5"><textarea name="remark" style="width:98%; height:50px"><?php echo $_smarty_tpl->getVariable('Data')->value['bill_remark'];?>
</textarea></td>
                            </tr>
                        </table>
                        <h6>收款記錄<input type="button" value="新增" onclick="AccRecord('add','')" class="input_btn"/></h6>
                        <table width="100%" id="AccTable">
                            <tr>
                                <th width="120px">入帳日期</th>
                                <th width="120px">入帳金額</th>
                                <th width="200px">收款方式</th>
                                <th>收款資訊</th>
                                <th width="50px">刪除</th>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('AccData')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                            	<tr align="center">
                                	<td><input type="text" name="enterdate[]" size="10" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['enterdate'];?>
" class="inputDate" /></td>
                                    <td><input type="text" name="amount[]" size="10" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['amount'];?>
" /></td>
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
" <?php if ($_smarty_tpl->tpl_vars['pobj']->value['config_name']==$_smarty_tpl->tpl_vars['obj']->value['acc_payment']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['pobj']->value['config_name'];?>
</option>
                                            <?php }} ?>
                                        </select>
                                    </td>
                                    <td><input type="text" name="payinfo[]" style="width:100%" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['acc_payinfo'];?>
" /></td>
                                    <td>
                                    	<input type="hidden" name="aid[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['serno'];?>
" />
                               		    <a href="javascript:AccRecord('delete',$('.acc_del').index($(this)))" class="acc_del"><img src="images/icon_delete.png"  /></a>
                                    </td>
                                </tr>
                            <?php }} ?>
                        </table>
                        
                        <h6>銷貨退回記錄<input type="button" value="新增" onclick="AccReturnRecord('add','')" class="input_btn"/></h6>
                        <table width="100%" id="ReturnTable">
                            <tr>
                                <th width="120px">申請日期</th>
                                <th width="120px">金額</th>
                                <th width="200px">退回方式</th>
                                <th>退回資訊</th>
                                <th width="50px">刪除</th>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ReturnData')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                            	<tr align="center">
                                	<td><input type="text" name="applydate[]" size="10" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['applydate'];?>
" class="inputDate" /></td>
                                    <td><input type="text" name="r_amount[]" size="10" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['amount'];?>
" /></td>
                                    <td>
                                    	<select name="r_payment[]">
                                        	<option value="">請選擇</option>
                                            <?php  $_smarty_tpl->tpl_vars['pobj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PaytypeList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['PaytypeList']['index']=-1;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['pobj']->key => $_smarty_tpl->tpl_vars['pobj']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['PaytypeList']['index']++;
?>
                                            	<option value="<?php echo $_smarty_tpl->tpl_vars['pobj']->value['config_name'];?>
" <?php if ($_smarty_tpl->tpl_vars['pobj']->value['config_name']==$_smarty_tpl->tpl_vars['obj']->value['acc_payment']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['pobj']->value['config_name'];?>
</option>
                                            <?php }} ?>
                                        </select>
                                    </td>
                                    <td><input type="text" name="r_payinfo[]" style="width:100%" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['acc_payinfo'];?>
" /></td>
                                    <td>
                                    	<input type="hidden" name="r_aid[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['serno'];?>
" />
                               		    <a href="javascript:AccReturnRecord('delete',$('.r_acc_del').index($(this)))" class="r_acc_del"><img src="images/icon_delete.png"  /></a>
                                    </td>
                                </tr>
                            <?php }} ?>
                        </table>
                        
                        <h6>維修記錄<input type="button" value="新增" onclick="AccMaintainRecord('add','')" class="input_btn"/></h6>
                        <table width="100%" id="MaintainTable">
                            <tr>
                                <th width="120px">入帳日期</th>
                                <th width="120px">入帳金額</th>
                                <th width="200px">收款方式</th>
                                <th>收款資訊</th>
                                <th width="50px">刪除</th>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('MaintainData')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                            	<tr align="center">
                                	<td><input type="text" name="m_enterdate[]" size="10" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['enterdate'];?>
" class="inputDate" /></td>
                                    <td><input type="text" name="m_amount[]" size="10" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['amount'];?>
" /></td>
                                    <td>
                                    	<select name="m_payment[]">
                                        	<option value="">請選擇</option>
                                            <?php  $_smarty_tpl->tpl_vars['pobj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PaytypeList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['PaytypeList']['index']=-1;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['pobj']->key => $_smarty_tpl->tpl_vars['pobj']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['PaytypeList']['index']++;
?>
                                            	<option value="<?php echo $_smarty_tpl->tpl_vars['pobj']->value['config_name'];?>
" <?php if ($_smarty_tpl->tpl_vars['pobj']->value['config_name']==$_smarty_tpl->tpl_vars['obj']->value['acc_payment']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['pobj']->value['config_name'];?>
</option>
                                            <?php }} ?>
                                        </select>
                                    </td>
                                    <td><input type="text" name="m_payinfo[]" style="width:100%" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['acc_payinfo'];?>
" /></td>
                                    <td>
                                    	<input type="hidden" name="m_bid[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['bid'];?>
" />
                                    	<input type="hidden" name="m_aid[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['serno'];?>
" />
                               		    <a href="javascript:AccMaintainRecord('delete',$('.m_acc_del').index($(this)))" class="m_acc_del"><img src="images/icon_delete.png"  /></a>
                                    </td>
                                </tr>
                            <?php }} ?>
                        </table>
                        
                        
                		<div style="text-align:center">
                        <input type="button" value="更新" onclick="AccRecord('save','')" class="input_btn" />
                        </div>
	</form>
</div>
</div>
</body>
</html>
