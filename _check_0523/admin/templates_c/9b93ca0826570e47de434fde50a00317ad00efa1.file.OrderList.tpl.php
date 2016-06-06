<?php /* Smarty version Smarty3-RC3, created on 2014-09-14 15:33:28
         compiled from "C:/xampp/htdocs/sakima/admin/\templates\OrderList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27824541544c8cfaf76-78740715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b93ca0826570e47de434fde50a00317ad00efa1' => 
    array (
      0 => 'C:/xampp/htdocs/sakima/admin/\\templates\\OrderList.tpl',
      1 => 1410680004,
    ),
  ),
  'nocache_hash' => '27824541544c8cfaf76-78740715',
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
                <h3 class="page-header"><?php echo $_smarty_tpl->getVariable('_MainTitleName')->value;?>
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
                        <select name="SearchStatus" class="form-control input-sm">
                        	<option value="">訂單狀態</option>
                            <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_OrderStatus')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->getVariable('SearchStatus')->value==$_smarty_tpl->tpl_vars['key']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</option>
                            <?php }} ?>
                        </select>
                        <input type="text" name="SearchSdate" class="form-control input-sm" value="<?php echo $_smarty_tpl->getVariable('SearchSdate')->value;?>
" placeholder="起始日期" size="10" />-
                        <input type="text" name="SearchEdate" class="form-control input-sm" value="<?php echo $_smarty_tpl->getVariable('SearchEdate')->value;?>
" placeholder="結束日期" size="10" />
                        <button type="button" class="btn btn-primary btn-xs" onclick="$('#SearchForm').submit()"><i class="fa fa-search"></i> 搜尋</button>
                        <?php if ($_smarty_tpl->getVariable('WhereStr')->value!=''){?>
                        	<button type="button" class="btn btn-warning btn-xs" onclick="$('#SearchForm').attr('action','<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=search_clear');$('#SearchForm').submit()"><i class="fa fa-times"></i> 清除搜尋</button>
                        <?php }?>
                        <button type="button" class="btn btn-info btn-xs" onclick="ExportOrder()"><i class="fa fa-download"></i> 匯出訂單資料</button>
                        <button type="button" class="btn btn-info btn-xs" onclick="ExportOrderDetail()"><i class="fa fa-download"></i> 匯出訂單明細</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <div class="row">
            <div class="col-lg-12">
                <form name="ListForm" id="ListForm" method="post" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=delete" >
                   
                    <div class="table-responsive">
                        
                        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                            <tr>
                                <th width="60px"></th>
                                <th width="120px">訂單編號</th>
                                <th width="100px">付款方式</th>
                                <th width="100px">訂購人姓名</th>
                                <th width="100px">聯絡電話</th>
                                <th width="100px">Email</th>
                                <th width="100px">訂單金額</th>
                                <th width="100px">折扣</th>
                                <th width="100px">購物金</th>
                                <th width="100px">運費</th>
                                <th width="100px">應付金額</th>
                                <th width="100px">付款狀態</th>
                                <th width="100px">訂單狀態</th>
                                <th width="60px">編輯</th>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['totalprice'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['discount'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['usepointmoney'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['shipfee'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['payprice'];?>
</td>
                                <td><?php echo $_smarty_tpl->getVariable('_PayStatus')->value[$_smarty_tpl->tpl_vars['obj']->value['pay_status']];?>
</td>
                                <td><?php echo $_smarty_tpl->getVariable('_OrderStatus')->value[$_smarty_tpl->tpl_vars['obj']->value['order_status']];?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=edit&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value['order_id'];?>
" title="修改"><i class="fa fa-pencil"></i></a>
                                  
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
               
                </form>
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->
    <script>
    	function ExportOrder(){
			var url = "ExportOrder.php";
			
			location.href=url;
			
		}
		
		function ExportOrderDetail(){
			var url = "ExportOrderDetail.php";
			
			location.href=url;
			
		}
    </script>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>