<?php /* Smarty version Smarty3-RC3, created on 2014-07-12 22:54:43
         compiled from "C:/AppServ/www/kttline/admin/\templates\DoctorList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1337253c14c33be1919-88737531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7705a98b080702ee1d35b4df6fb7fc5a49766316' => 
    array (
      0 => 'C:/AppServ/www/kttline/admin/\\templates\\DoctorList.tpl',
      1 => 1402500133,
    ),
  ),
  'nocache_hash' => '1337253c14c33be1919-88737531',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('header_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
        <tr>
            <th>類別</th>
            <th>姓名</th>
            <th>性別</th>
            <th>醫療類別</th>
            <th>聯絡電話</th>
            
            <th width="80px">狀態</th>
            <th width="60px">編輯</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DataList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['DataList']['index']=-1;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['DataList']['index']++;
?>
        <tr class="item_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['DataList']['index']+1;?>
">

            <td><?php if ($_smarty_tpl->tpl_vars['obj']->value['group_id']==0){?>個人<?php }else{ ?>團體<?php }?></td>
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['name'];?>
</td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['obj']->value['sex'];?>

            </td>
            <td><?php echo $_smarty_tpl->getVariable('DoctorType')->value[$_smarty_tpl->tpl_vars['obj']->value['doctortype']];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['tel'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('_MebStatus')->value[$_smarty_tpl->tpl_vars['obj']->value['meb_status']];?>
</td>
            <td>
            	<input type="hidden" name="doctor[]" value='<?php echo json_encode($_smarty_tpl->tpl_vars['obj']->value);?>
' />
                <a href="javascript:void(0)" onclick="ReturnData('.<?php echo $_smarty_tpl->getVariable('target')->value;?>
','.item_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['DataList']['index']+1;?>
')" title="選擇">選擇</a>
            </td>
        </tr>
       <?php }} ?>
    </table>
    
    <div class="pages"> 
    <?php echo $_smarty_tpl->getVariable('PageStr')->value;?>
  	
    </div>
   
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
	function ReturnData(target,obj){
		var data  = eval("["+$(obj).find("input[name='doctor[]']").val()+"]");
		$(target,window.parent.document).find("td:eq(2)").text(data[0]['name']);
		$(target,window.parent.document).find("td:eq(3)").text(data[0]['sex']);
		$(target,window.parent.document).find("td:eq(4)").text(data[0]['hospitalhistory']);
		$(target,window.parent.document).find("td:eq(5)").text(data[0]['titlenamehistory']);
		$(target,window.parent.document).find("input[name='doctor[]']").val(data[0]['serno']);
	}

</script>