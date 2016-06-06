<?php /* Smarty version Smarty3-RC3, created on 2014-09-14 12:53:34
         compiled from "C:/xampp/htdocs/sakima/admin/\templates\OrderEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:445754151f4eb2e774-85505921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62a0263a1eb23f5422105d14aebce60e621daaff' => 
    array (
      0 => 'C:/xampp/htdocs/sakima/admin/\\templates\\OrderEdit.tpl',
      1 => 1409467370,
    ),
  ),
  'nocache_hash' => '445754151f4eb2e774-85505921',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('header_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script type="text/javascript" src="include/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="js/product.js"></script>
<script>
$(document).ready(function(){
	$("input[name='spec_type']:checked").trigger("click");	
});
</script>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('menu_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="page-wrapper">
    	<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>
</h3>            
          </div>
        </div><!-- /.row -->
        <form name="FormEdit" id="FormEdit" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=editsave" method="post" onsubmit="FormCheck();return false;"  enctype="multipart/form-data">
        <div class="row">
             <div class="panel panel-default">
                  <div class="panel-heading">
                      <?php if ($_smarty_tpl->getVariable('ID')->value==''){?>新增<?php }else{ ?>編輯<?php }?><?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>

                      <div class="pull-right">
                          
                      </div>
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                        <table class="table table-striped table-bordered table-hover" >
                          <tr>
                              <td width="150px">訂單編號</td>
                              <td><?php echo $_smarty_tpl->getVariable('OrderMain')->value['order_no'];?>
</td>
                          </tr>
                          <tr>
                              <td>訂單金額</td>
                              <td>
                                  <table>
                                    <tr>
                                        <td style="width:150px;">訂單總額</td>
                                        <td align=right><?php echo number_format($_smarty_tpl->getVariable('OrderMain')->value['totalprice'],0,".",",");?>
</td>
                                    </tr>
                                    <tr>
                                        <td style="width:150px;">運費（＋）</td>
                                        <td align=right><?php echo number_format($_smarty_tpl->getVariable('OrderMain')->value['shipfee'],0,".",",");?>
</td>
                                    </tr>						        
                                    <tr>
                                        <td style="width:150px;">折扣（－）</td>
                                        <td align=right><?php echo number_format($_smarty_tpl->getVariable('OrderMain')->value['discount'],0,".",",");?>
</td>
                                    </tr>	
                                    <tr>
                                        <td style="width:150px;">使用購物金（－）</td>
                                        <td align=right><?php echo number_format($_smarty_tpl->getVariable('OrderMain')->value['usepointmoney'],0,".",",");?>
</td>
                                    </tr>			
                                    <tr>
                                        <td style="width:150px;">應付金額</td>
                                        <td align=right><?php echo number_format($_smarty_tpl->getVariable('OrderMain')->value['payprice'],0,".",",");?>
</td>
                                    </tr>    
                                  </table>	
                              </td>
                          </tr>
                          <tr>
                              <td>付款狀態</td>
                              <td>
                                  <?php echo $_smarty_tpl->getVariable('_PayStatus')->value[$_smarty_tpl->getVariable('OrderMain')->value['pay_status']];?>

                              </td>
                          </tr>
                          <tr>
                              <td>訂單狀態</td>
                              <td>
                                  <select name="status" id="status" >
                                    <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_OrderStatus')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->getVariable('OrderMain')->value['order_status']==$_smarty_tpl->tpl_vars['key']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</option>
                                    <?php }} ?>
                                  </select>
                              </td>
                          </tr>
                          <tr>
                            <td>付款方式</td>
                            <td><?php echo $_smarty_tpl->getVariable('_Payment')->value[$_smarty_tpl->getVariable('OrderMain')->value['payment']];?>
</td>
                          </tr>
                          <tr>
                            <td>運送方式</td>
                            <td><?php echo $_smarty_tpl->getVariable('_ShipType')->value[$_smarty_tpl->getVariable('OrderMain')->value['shipping_type']]['name'];?>
</td>
                          </tr>
                      </table>
                      
                      <table class="table table-striped table-bordered table-hover" id="">
                        <thead>
                            <tr>
                                <th style="width:8px;"></th>
                                <th style="width:150px;">商品編號</th>
                                <th>商品名稱</th>
                                <th style="width:200px;">規格</th>  
                                <th style="width:150px;">數量</th> 
                                <th style="width:150px;">單價</th> 
                           </tr>
                           <?php  $_smarty_tpl->tpl_vars['odata'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('OrderList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['OrderList']['iteration']=0;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['odata']->key => $_smarty_tpl->tpl_vars['odata']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['OrderList']['iteration']++;
?>
                           <tr>
                                <td align="center"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['OrderList']['iteration'];?>
</td>
                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['odata']->value['prodno'];?>
</td>
                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['odata']->value['prodname'];?>
</td>
                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['odata']->value['spec_row'];?>
 <?php echo $_smarty_tpl->tpl_vars['odata']->value['spec_col'];?>
</td>							        
                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['odata']->value['num'];?>
</td>	
                                <td align="center"><?php echo number_format($_smarty_tpl->tpl_vars['odata']->value['uniprice'],0,".",",");?>
</td>	
                          </tr>
                          <?php }} ?>
                      </table>
                      
                      <table class="table table-striped table-bordered table-hover" id=""> 
                        <tr>
                            <td colspan=2>※ &nbsp; 訂購人資料：</td>
                        </tr>
                        <tr>
                            <td style="width:150px;"> &nbsp; &nbsp; 姓名</td>
                            <td><?php echo $_smarty_tpl->getVariable('OrderMain')->value['order_name'];?>
</td>
                        </tr>
                        <tr>
                            <td style="width:150px;"> &nbsp; &nbsp; 手機</td>
                            <td><?php echo $_smarty_tpl->getVariable('OrderMain')->value['order_tel'];?>
</td>
                        </tr>
                        <tr>
                            <td style="width:150px;"> &nbsp; &nbsp; 電子信箱</td>
                            <td><?php echo $_smarty_tpl->getVariable('OrderMain')->value['order_email'];?>
</td>
                        </tr>
                        </table>
                        <table class="table table-striped table-bordered table-hover" id=""> 
                        <tr>
                            <td colspan=2>※ &nbsp; 收件人資料：</td>
                        </tr>
                        <tr>
                            <td style="width:150px;"> &nbsp; &nbsp; 姓名</td>
                            <td><?php echo $_smarty_tpl->getVariable('OrderMain')->value['shipping_name'];?>
</td>
                        </tr>
                        <tr>
                            <td style="width:150px;"> &nbsp; &nbsp; 手機</td>
                            <td><?php echo $_smarty_tpl->getVariable('OrderMain')->value['shipping_tel'];?>
</td>
                        </tr>
                        <tr>
                            <td style="width:150px;"> &nbsp; &nbsp; 電子信箱</td>
                            <td><?php echo $_smarty_tpl->getVariable('OrderMain')->value['shipping_email'];?>
</td>
                        </tr>
                        <tr>
                            <td style="width:150px;"> &nbsp; &nbsp; 地址</td>
                            <td><?php echo $_smarty_tpl->getVariable('OrderMain')->value['shipping_zipcode'];?>
<?php echo $_smarty_tpl->getVariable('OrderMain')->value['shipping_county'];?>
<?php echo $_smarty_tpl->getVariable('OrderMain')->value['shipping_district'];?>
<?php echo $_smarty_tpl->getVariable('OrderMain')->value['shipping_address'];?>
</td>
                        </tr>
                        </table>
                        <br>
                      
                      <button type="submit" class="btn btn-success" >確認修改</button>
                  </div>
                  <!-- /.panel-body -->
             </div>
             <!-- /.panel -->
         	  
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('OrderMain')->value['order_id'];?>
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
		
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>