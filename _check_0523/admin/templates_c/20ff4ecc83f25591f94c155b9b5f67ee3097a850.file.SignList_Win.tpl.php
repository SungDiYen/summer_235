<?php /* Smarty version Smarty3-RC3, created on 2014-09-28 12:41:34
         compiled from "C:/xampp/htdocs/psoator/admin/\templates\SignList_Win.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56745427917e4cd726-25061048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20ff4ecc83f25591f94c155b9b5f67ee3097a850' => 
    array (
      0 => 'C:/xampp/htdocs/psoator/admin/\\templates\\SignList_Win.tpl',
      1 => 1411879291,
    ),
  ),
  'nocache_hash' => '56745427917e4cd726-25061048',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('header_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<table class="popTab">
	<thead>
    	<tr>
        	<td width="100px">姓名</td>
            <td>聯絡電話</td>
            <td>手機</td>
            <td width="70px">生日</td>
            <td>住址</td>
            <td width="120px">email</td>
            <td width="100px">就診醫院級醫師</td>
            <td width="50px">是否為協會會員</td>
            <td width="80px">本人為</td>
            <td width="50px">願意收到相關訊息</td>
        </tr>
    </thead>
    <tbody>
    	<?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DataList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
    	<tr>
        	<td><?php echo $_smarty_tpl->tpl_vars['obj']->value['sign_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['sign_tel'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['sign_mobile'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['sign_birthday'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['sign_address'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['sign_email'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['sign_hospital'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['sign_member'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['sign_type'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['sign_epaper'];?>
</td>
        </tr>
        <?php }} ?>
    </tbody>
</table>
   
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>