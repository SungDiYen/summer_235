<?php /* Smarty version Smarty3-RC3, created on 2013-10-25 15:02:45
         compiled from "C:/AppServ/www/hair_finance/\templates\AccountList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17811526a1795d5a986-24289057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a586b187ed6c11cea6ac1dca3da8ba603eae57a1' => 
    array (
      0 => 'C:/AppServ/www/hair_finance/\\templates\\AccountList.tpl',
      1 => 1382671887,
    ),
  ),
  'nocache_hash' => '17811526a1795d5a986-24289057',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'C:\AppServ\www\hair_finance\include\smarty\plugins\modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('header_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
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
      	    <div class="graybox" style="margin-bottom:10px">
                <table width="100%" cellspacing="0">
                <tbody><tr>
                  <td>
                    訂單月份: 
                    <select name="import_year" id="import_year" >
                    	<?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('OrderYear')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                        	<option value="<?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</option>
                        <?php }} ?>
                    </select>
                    年
                    <select name="import_month" id="import_month" >
                    	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['name'] = 'import_month';
$_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['import_month']['total']);
?>
                        	<option value="<?php echo str_pad($_smarty_tpl->getVariable('smarty')->value['section']['import_month']['index'],2,0);?>
" <?php if (smarty_modifier_date_format(time(),'%m')==str_pad($_smarty_tpl->getVariable('smarty')->value['section']['import_month']['index'],2,0)){?>selected<?php }?>><?php echo str_pad($_smarty_tpl->getVariable('smarty')->value['section']['import_month']['index'],2,0,'STR_PAD_LEFT');?>
</option>
                        <?php endfor; endif; ?>
                    </select>
                    月
                   
                  </td>
                  
                  <td width="80"><input class="input_btn" type="button" value="匯入訂單" onclick="ImportOrder($('#import_year').val()+'-'+$('#import_month').val())"></td>
                </tr>
              </tbody></table>        	        	
            </div>
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
                            <td>出貨日期：</td>
                            <td>
                            	<input type="text" name="Search_OutDate" id="Search_OutDate" value="<?php echo $_smarty_tpl->getVariable('SearchOutDate')->value;?>
" size="10" />
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
                            <td>收款方式：</td>
                            <td>
                            	<select name="Search_Payment">
                                    <option value="">全部</option>
                                    <?php  $_smarty_tpl->tpl_vars['pobj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PaytypeList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['PaytypeList']['index']=-1;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['pobj']->key => $_smarty_tpl->tpl_vars['pobj']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['PaytypeList']['index']++;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['pobj']->value['config_name'];?>
" <?php if ($_smarty_tpl->tpl_vars['pobj']->value['config_name']==$_smarty_tpl->getVariable('SearchPayment')->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['pobj']->value['config_name'];?>
</option>
                                    <?php }} ?>
                                </select>	
                            </td>
                            <td>訂單編號：</td>
                            <td>
                            	<input type="text" name="Search_Orderno" value="<?php echo $_smarty_tpl->getVariable('SearchOrderno')->value;?>
"  size="10" />
                            </td>
                        </tr>
                    	<tr>
                        	
                            <td>客戶名稱：</td>
                            <td>
                            	<input type="text" name="Search_Cusname" value="<?php echo $_smarty_tpl->getVariable('SearchCusname')->value;?>
"  size="10" />
                            </td>
                            <td colspan="4">
                                <input type="submit" class="input_btn" value="查詢">
                                <?php if ($_smarty_tpl->getVariable('WhereStr')->value!=''){?>
                                <input type="button" class="input_btn" onclick="location.href='<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=search_clear'" value="顯示全部">
                                <a href="AccountExport.php" target="_blank" style="color:#0066CC;"> >> 匯出報表 </a>
                                <?php }?>
                            </td>
                        </tr>
                    </table>                 
                </form>
            </div>
            <div class="btn_area">
            	<!--<a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=accbatch_edit" >新增收款記錄</a>-->
                <a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=batchedit&actype=return" >批次新增銷貨退回</a>
                <a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=batchedit&actype=maintenance" >批次新增維修記錄</a>
            </div>
            <!--<div class="box_title">
                廠商名稱/統一編號：
                <form name="SearchForm" id="SearchForm" action="<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=search" method="post" style="display:inline-block">
               		<input type="text" name="Search_Name" value="<?php echo $_smarty_tpl->getVariable('SearchName')->value;?>
" />
                	<input type="submit" class="input_btn" value="查詢">
                    <?php if ($_smarty_tpl->getVariable('WhereStr')->value!=''){?>
                    <input type="button" class="input_btn" onclick="location.href='<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=search_clear'" value="顯示全部">
                    <?php }?>
                </form>
            </div>-->
            <table id="class_import_table" class="table_style" width="100%" cellspacing="0">
              <thead>
              <tr>
                <th>訂單<br>日期</th>
                <th>客戶<br>名稱</th>
                <th>出貨<br>日期</th>
                <th>訂單<br>編號</th>
                <th>貨單<br>編號</th>
				<th>銷售<br>部門</th>
                <!--<th>郵寄<br>方式</th>-->
                <th>原價</th>
                <th width="50px">運費</th>
                <th width="50px">折扣</th>
                <th width="50px">退換貨<br>差額</th>
                <!--<th width="50px">維修費</th>-->
                <th>應收<br>總額</th>
                <!--<th>收款<br>方式</th>
                <th>入帳<br>日期</th>-->
                <th>已收<br>金額</th>
                <th>備註</th>
                <th>管理</th>
              </tr>
              </thead>
              <tbody>
              <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DataList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['DataList']['index']=-1;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['DataList']['index']++;
?>
              <tr align="center">
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['order_date'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['bill_title'];?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['obj']->value['dispatch_date']!="0000-00-00"){?><?php echo $_smarty_tpl->tpl_vars['obj']->value['dispatch_date'];?>
<?php }?></td>
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['order_no'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['bill_no'];?>
</td>
                <td><?php echo $_smarty_tpl->getVariable('department')->value[$_smarty_tpl->tpl_vars['obj']->value['department_id']];?>
:<?php echo $_smarty_tpl->getVariable('channel')->value[$_smarty_tpl->tpl_vars['obj']->value['channel_id']];?>
</td>
                <!--<td></td>-->
                <td><?php echo number_format($_smarty_tpl->tpl_vars['obj']->value['bill_amount']);?>
</td>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['obj']->value['bill_ship']);?>
</td>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['obj']->value['bill_dist']);?>
</td>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['obj']->value['bill_return']);?>
</td>
                <!--<td><?php echo $_smarty_tpl->tpl_vars['obj']->value['bill_maintain'];?>
</td>-->
                <td><strong <?php if ($_smarty_tpl->tpl_vars['obj']->value['bill_total']+$_smarty_tpl->tpl_vars['obj']->value['bill_return']-$_smarty_tpl->tpl_vars['obj']->value['bill_revenue']==0){?>style="color:#666"<?php }?>><?php echo number_format($_smarty_tpl->tpl_vars['obj']->value['bill_total']+$_smarty_tpl->tpl_vars['obj']->value['bill_return']-$_smarty_tpl->tpl_vars['obj']->value['bill_revenue']);?>
</strong></td>
                <!--<td></td>
                <td></td>-->
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['bill_revenue'];?>
</td>
                <td></td>
                <td>
                	<a href="javascript:AccOrderEdit(<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['DataList']['index'];?>
,<?php echo $_smarty_tpl->tpl_vars['obj']->value['serno'];?>
)">編輯</a>
                </td>
              </tr>
              
              <?php }} ?>
              </tbody>
            </table>
            <div class="pages"> 
            <?php echo $_smarty_tpl->getVariable('PageStr')->value;?>
  	
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
	$("#Search_OutDate").datepick();
</script>