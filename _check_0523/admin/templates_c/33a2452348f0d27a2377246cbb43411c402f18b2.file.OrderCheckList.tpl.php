<?php /* Smarty version Smarty3-RC3, created on 2014-09-14 15:44:09
         compiled from "C:/xampp/htdocs/sakima/admin/\templates\OrderCheckList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91495415474929d273-37965834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33a2452348f0d27a2377246cbb43411c402f18b2' => 
    array (
      0 => 'C:/xampp/htdocs/sakima/admin/\\templates\\OrderCheckList.tpl',
      1 => 1410680645,
    ),
  ),
  'nocache_hash' => '91495415474929d273-37965834',
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
                <h3 class="page-header"><?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>
</h3>
            </div>

        </div>
        <form name="SearchForm" id="SearchForm" method="post" action="<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=search">
        <div class="row">
        	<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                            	
                <div class="col-sm-12">
                    <div id="dataTables-example_filter" class="dataTables_filter" style="margin-bottom:10px">
                       
                        查詢:
                        <input type="text" name="SearchName" class="form-control input-sm" aria-controls="dataTables-example" value="<?php echo $_smarty_tpl->getVariable('SearchName')->value;?>
" placeholder="請輸入關鍵字">
                    
                        <input type="text" name="SearchSdate" class="form-control input-sm" value="<?php echo $_smarty_tpl->getVariable('SearchSdate')->value;?>
" placeholder="起始日期" size="10" />-
                        <input type="text" name="SearchEdate" class="form-control input-sm" value="<?php echo $_smarty_tpl->getVariable('SearchEdate')->value;?>
" placeholder="結束日期" size="10" />
                        <button type="button" class="btn btn-primary btn-xs" onclick="$('#SearchForm').submit()"><i class="fa fa-search"></i> 搜尋</button>
                        <?php if ($_smarty_tpl->getVariable('WhereStr')->value!=''){?>
                        	<button type="button" class="btn btn-warning btn-xs" onclick="$('#SearchForm').attr('action','<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=search_clear');$('#SearchForm').submit()"><i class="fa fa-times"></i> 清除搜尋</button>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <div class="row">
            <div class="col-lg-12">
            	<div class="pull-right" style="margin-bottom: 10px;">
                    <button type="button" class="btn btn-primary btn-xs" onclick="CheckOrder('succes')"><i class="fa fa-check"></i> 審核通過</button>
                    <button type="button" class="btn btn-danger btn-xs" onclick="CheckOrder('falt')"><i class="fa fa-times"></i> 付款失敗</button>
                </div>
                <form name="ListForm" id="ListForm" method="post" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=save_paystatus" >
                    
                    <div class="table-responsive">
                        
                        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                            <tr>
                                <th width="60px"></th>
                                <th width="120px">訂單編號</th>
                                <th width="100px">付款方式</th>
                                <th width="100px">訂購人姓名</th>
                                <th width="100px">聯絡電話</th>
                                <th width="100px">Email</th>
                                <th width="100px">應付金額</th>
                                <th width="100px">後五碼</th>
                                <th width="100px">填寫日期</th>
                                <th width="100px">訂單狀態</th>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DataList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                            <tr>
                                <td><input type="checkbox" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['order_id'];?>
" /></td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['obj']->value['order_no'];?>

                                </td>
                                <td><?php echo $_smarty_tpl->getVariable('_Payment')->value[$_smarty_tpl->tpl_vars['obj']->value['payment']];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['order_name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['order_tel'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['order_email'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['payprice'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['pay_bankno'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['pay_echo_time'];?>
</td>
                                <td><?php echo $_smarty_tpl->getVariable('_OrderStatus')->value[$_smarty_tpl->tpl_vars['obj']->value['order_status']];?>
</td>
                            </tr>
                           <?php }} ?>
                        </table>
                        
                        <div class="pages"> 
                        <?php echo $_smarty_tpl->getVariable('PageStr')->value;?>
  	
                        </div>
                    </div>
                    <!-- /.table-responsive -->
                    
                </div>
                <input type="hidden" name="pageno" value="<?php echo $_smarty_tpl->getVariable('PageNO')->value;?>
" />
                <input type="hidden" name="type" id="type" value="" />
                </form>
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->
   
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<script>
	function CheckOrder(type){
		$("#type").val(type);
		
		$("#ListForm").submit();
	}
</script>