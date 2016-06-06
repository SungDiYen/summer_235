<?php /* Smarty version Smarty3-RC3, created on 2013-10-23 18:04:46
         compiled from "C:/AppServ/www/hair_finance/\templates\AccOrderBatchEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1931452679f3e0dc460-69029628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02772c1b3eba89363f76403f096c0ace05e29cdc' => 
    array (
      0 => 'C:/AppServ/www/hair_finance/\\templates\\AccOrderBatchEdit.tpl',
      1 => 1382522665,
    ),
  ),
  'nocache_hash' => '1931452679f3e0dc460-69029628',
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
            <table id="class_import_table" class="table_style" width="100%" cellspacing="0">
              <thead>
              <tr>
                <th>訂單編號</th>
                <th>訂單日期</th>
                <th>客戶名稱</th>
                <th>出貨日期</th>
                <th>貨單編號</th>
                <th>入帳日期</th>
                <th>入帳金額</th>
                <th>入帳方式</th>
                <th>收款資訊</th>
              </tr>
              </thead>
              <tbody>
              <tr align="center">
                <td><input type="text" name="order_no[]" value="" size="10" /></td>
                <td><span data-row="orderdate"></span></td>
                <td><span data-row="cusname"></span></td>
                <td><input type="text" name="dispatch_date[]" value="" size="10" /></td>
                <td><input type="text" name="bill_no[]" value="" size="10" /></td>
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
                <td><input type="text" name="payinfo[]" value="" style="width:100px" /></td>
              </tr>
              </tbody>
            </table>
            
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
</script>