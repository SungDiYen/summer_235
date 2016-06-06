<?php /* Smarty version Smarty3-RC3, created on 2013-10-23 17:12:09
         compiled from "C:/AppServ/www/hair_finance/\templates\SalesStatistics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31320526792e962d858-18743690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62a395e9534cd84ef918c40754859beddb067925' => 
    array (
      0 => 'C:/AppServ/www/hair_finance/\\templates\\SalesStatistics.tpl',
      1 => 1382519526,
    ),
  ),
  'nocache_hash' => '31320526792e962d858-18743690',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('header_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<style>
.table_style tfoot td{
	background-color:#F3F3F3;
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
            <div class="graybox">
                <form name="SearchForm" id="SearchForm" action="<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=search" method="post" style="display:inline-block">
                	<table>
                    	<tr>
                        	<td>銷貨月：</td>
                            <td>
                            	<select name="Search_Year" id="Search_Year" >
                                    <option value="">全部</option>
                                    <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('OrderYear')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
" <?php if ($_smarty_tpl->getVariable('SearchYear')->value==$_smarty_tpl->tpl_vars['obj']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</option>
                                    <?php }} ?>
                                </select>
                                年
                                <select name="Search_Month" id="Search_Month" >
                                    <option value="">全部</option>
                                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['name'] = 'search_month';
$_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['search_month']['total']);
?>
                                        <option value="<?php echo str_pad($_smarty_tpl->getVariable('smarty')->value['section']['search_month']['index'],2,0);?>
" <?php if ($_smarty_tpl->getVariable('SearchMonth')->value==str_pad($_smarty_tpl->getVariable('smarty')->value['section']['search_month']['index'],2,0)){?>selected<?php }?>><?php echo str_pad($_smarty_tpl->getVariable('smarty')->value['section']['search_month']['index'],2,0,'STR_PAD_LEFT');?>
</option>
                                    <?php endfor; endif; ?>
                                </select>
                                月
                            </td>
                            <td>銷售部門：</td>
                            <td>
                            	<select name="Search_Department">
                                    <option value="">全部</option>
                                    <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('department')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->getVariable('SearchDepartment')->value==$_smarty_tpl->tpl_vars['key']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</option>
                                    <?php }} ?>
                                </select>
                            </td>
                            <td>
                                <input type="submit" class="input_btn" value="查詢">
                                <?php if ($_smarty_tpl->getVariable('WhereStr')->value!=''){?>
                                <!--<input type="button" class="input_btn" onclick="location.href='<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=search_clear'" value="顯示全部">-->
                                <?php }?>
                            </td>
                            
                        </tr>
                    </table>                 
                </form>
            </div>
            <table id="class_import_table" class="table_style" width="100%" cellspacing="0">
              <tr>
                <th>現金</th>
                <th>收款方式</th>
                <th>訂單編號</th>
                <th>客戶名稱</th>
                <th>加總的應收總額</th>
                <th>加總的已收總額</th>
                <th>加總的運費</th>
                <th>加總的維修費</th>
                <th>加總的折扣</th>
              </tr>
              <?php $_smarty_tpl->tpl_vars['Bill_Total'] = new Smarty_variable(0, null, null);?>
              <?php $_smarty_tpl->tpl_vars['Bill_Revenue'] = new Smarty_variable(0, null, null);?>
              <?php $_smarty_tpl->tpl_vars['Bill_Ship'] = new Smarty_variable(0, null, null);?>
              <?php $_smarty_tpl->tpl_vars['Bill_Maintenance'] = new Smarty_variable(0, null, null);?>
              <?php $_smarty_tpl->tpl_vars['Bill_Dist'] = new Smarty_variable(0, null, null);?>
              <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DataList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
              <tr align="center">
                <td><?php echo $_smarty_tpl->getVariable('department')->value[$_smarty_tpl->tpl_vars['obj']->value['department_id']];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['bill_payment_list'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['order_no'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['bill_title'];?>
</td>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['obj']->value['bill_total']);?>
</td>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['obj']->value['bill_revenue']);?>
</td>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['obj']->value['bill_ship']);?>
</td>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['obj']->value['bill_maintenance']);?>
</td>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['obj']->value['bill_dist']);?>
</td>
              </tr>
              <?php $_smarty_tpl->tpl_vars['Bill_Total'] = new Smarty_variable($_smarty_tpl->getVariable('Bill_Total')->value+$_smarty_tpl->tpl_vars['obj']->value['bill_total'], null, null);?>
              <?php $_smarty_tpl->tpl_vars['Bill_Revenue'] = new Smarty_variable($_smarty_tpl->getVariable('Bill_Revenue')->value+$_smarty_tpl->tpl_vars['obj']->value['bill_revenue'], null, null);?>
              <?php $_smarty_tpl->tpl_vars['Bill_Ship'] = new Smarty_variable($_smarty_tpl->getVariable('Bill_Ship')->value+$_smarty_tpl->tpl_vars['obj']->value['bill_ship'], null, null);?>
              <?php $_smarty_tpl->tpl_vars['Bill_Maintenance'] = new Smarty_variable($_smarty_tpl->getVariable('Bill_Maintenance')->value+$_smarty_tpl->tpl_vars['obj']->value['bill_maintenance'], null, null);?>
              <?php $_smarty_tpl->tpl_vars['Bill_Dist'] = new Smarty_variable($_smarty_tpl->getVariable('Bill_Dist')->value+$_smarty_tpl->tpl_vars['obj']->value['bill_dist'], null, null);?>
              <?php }} ?>
              <tfoot>
              <tr align="center">
              	<td colspan="4" >合計：</td>
                <td><?php echo number_format($_smarty_tpl->getVariable('Bill_Total')->value);?>
</td>
                <td><?php echo number_format($_smarty_tpl->getVariable('Bill_Revenue')->value);?>
</td>
                <td><?php echo number_format($_smarty_tpl->getVariable('Bill_Ship')->value);?>
</td>
                <td><?php echo number_format($_smarty_tpl->getVariable('Bill_Maintenance')->value);?>
</td>
                <td><?php echo number_format($_smarty_tpl->getVariable('Bill_Dist')->value);?>
</td>
              </tr>
              <tr align="center">
              	<td colspan="4" >總計：</td>
                <td><?php echo number_format($_smarty_tpl->getVariable('TotalData')->value['bill_total']);?>
</td>
                <td><?php echo number_format($_smarty_tpl->getVariable('TotalData')->value['bill_revenue']);?>
</td>
                <td><?php echo number_format($_smarty_tpl->getVariable('TotalData')->value['bill_ship']);?>
</td>
                <td><?php echo number_format($_smarty_tpl->getVariable('TotalData')->value['bill_maintenance']);?>
</td>
                <td><?php echo number_format($_smarty_tpl->getVariable('TotalData')->value['bill_disc']);?>
</td>
              </tr>
              </tfoot>
            </table>
         	<div class="pages"> 
            <?php echo $_smarty_tpl->getVariable('PageStr')->value;?>
  	
            </div>
      </div><!--pri_cont -->          	
    </div><!--primary --> 
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
	$(document).ready(function(){
		$("#Search_OutDate").datepick();
	});
</script>