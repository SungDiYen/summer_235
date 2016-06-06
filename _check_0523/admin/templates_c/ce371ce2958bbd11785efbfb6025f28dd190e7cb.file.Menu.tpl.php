<?php /* Smarty version Smarty3-RC3, created on 2013-10-16 22:57:02
         compiled from "C:/AppServ/www/hair_finance/\templates\Menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32377525ea93ee65733-57472171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce371ce2958bbd11785efbfb6025f28dd190e7cb' => 
    array (
      0 => 'C:/AppServ/www/hair_finance/\\templates\\Menu.tpl',
      1 => 1380620837,
    ),
  ),
  'nocache_hash' => '32377525ea93ee65733-57472171',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
     <div id="secondary">
         <div id="nav" class="box">
          <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('UserAuthMenu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
?>
                <a class="nav_list box_title <?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
<span class="arrow_down pngbg"></span></a>
                <div class="nav_box">
                    <?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['subkey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value){
 $_smarty_tpl->tpl_vars['subkey']->value = $_smarty_tpl->tpl_vars['sub']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['sub']->value['hidden']==false){?>
                            <a class="nav_box_list" href="<?php echo $_smarty_tpl->tpl_vars['sub']->value['link'];?>
">> <?php echo $_smarty_tpl->tpl_vars['sub']->value['name'];?>
</a>
                        <?php }?>
                    <?php }} ?>
                </div>
          <?php }} ?>
        </div>
    </div>