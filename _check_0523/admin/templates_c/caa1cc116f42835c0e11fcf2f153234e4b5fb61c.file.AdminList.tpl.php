<?php /* Smarty version Smarty3-RC3, created on 2013-10-22 22:48:09
         compiled from "C:/AppServ/www/hair_finance/\templates\AdminList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132152669029a2fb90-24904871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caa1cc116f42835c0e11fcf2f153234e4b5fb61c' => 
    array (
      0 => 'C:/AppServ/www/hair_finance/\\templates\\AdminList.tpl',
      1 => 1380609676,
    ),
  ),
  'nocache_hash' => '132152669029a2fb90-24904871',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('header_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('menu_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <div id="primary">
      <a id="contral_width_btn" class="pngbg" href="javascript:void(0)"></a>
      <div class="title_link"> <a href="main.php">返回首頁</a> / <a href="javascript:void(0)"><?php echo $_smarty_tpl->getVariable('_MainTitleName')->value;?>
</a> / <a href="javascript:void(0)" class="here"><?php echo $_smarty_tpl->getVariable('_SubTitle_Name')->value;?>
</a></div>
      <div class="pri_cont">
      	    <div class="btn_area"><a href="<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=edit">新增帳號</a></div>
            <table class="table_style2" width="100%" cellspacing="0">
              <tr>
                <th class="table_w15p">編號</th>
                <th>帳號</th>
                <th>姓名</th>
                <th class="table_edit">編輯</th>
                <th class="table_del">刪除</th>
              </tr>
              <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DataList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
              <tr align="center">
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['no'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['uid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['name'];?>
</td>
                <td class="table_edit"><a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=edit&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value['serno'];?>
" title="修改"><img src="images/edit_icon.png" width="25" height="25" /></a></td>
                <td class="table_del"><a href="javascript:void(0)" onclick="if(confirm('確認刪除?'))location.href='<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=delete&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value['serno'];?>
'" title="刪除"><img src="images/del_icon.png" width="25" height="25" /></a></td>
              </tr>
              <?php }} ?>
            </table>
            <div class="pages"> 
            <?php echo $_smarty_tpl->getVariable('PageStr')->value;?>
  	
            </div>
      </div><!--pri_cont -->          	
    </div><!--primary --> 
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>